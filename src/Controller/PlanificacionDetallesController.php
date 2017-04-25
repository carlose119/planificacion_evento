<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * PlanificacionDetalles Controller
 *
 * @property \App\Model\Table\PlanificacionDetallesTable $PlanificacionDetalles
 */
class PlanificacionDetallesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    /*public function index() {
        $this->paginate = [
            'contain' => ['Planificaciones', 'Trabajadores', 'Cargos'],
            'conditions' => ['PlanificacionDetalles.eliminado' => 0]
        ];
        $planificacionDetalles = $this->paginate($this->PlanificacionDetalles);

        $this->set(compact('planificacionDetalles'));
        $this->set('_serialize', ['planificacionDetalles']);
    }*/

    /**
     * View method
     *
     * @param string|null $id Planificacion Detalle id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $planificacionDetalle = $this->PlanificacionDetalles->get($id, [
            'contain' => ['Planificaciones', 'Trabajadores', 'Cargos']
        ]);

        $this->set('planificacionDetalle', $planificacionDetalle);
        $this->set('_serialize', ['planificacionDetalle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($planificacion_id = null) {
        $planificacionDetalle = $this->PlanificacionDetalles->newEntity();
        if ($this->request->is('post')) {
            $planificacionDetalle = $this->PlanificacionDetalles->patchEntity($planificacionDetalle, $this->request->data);
            if ($this->PlanificacionDetalles->save($planificacionDetalle)) {
                $this->Flash->success(__('El detalle se guardo con exito.'));
                $this->_auditoria($this->request->params['controller'], $planificacionDetalle->id, $this->request->params['action'].': Agrego un detalle a la planificación');
                return $this->redirect(['action' => 'add', $planificacionDetalle->planificacion_id]);
            }
            $this->Flash->error(__('El detalle no se pudo guardar. Por favor, intentelo de nuevo.'));
        }
        //$planificaciones = $this->PlanificacionDetalles->Planificaciones->find('list', ['conditions' => ['Planificaciones.eliminado' => 0]]);
        $trabajadores = $this->PlanificacionDetalles->Trabajadores->find('list', ['conditions' => ['Trabajadores.eliminado' => 0]])->contain(['Cargos']);
        $cargos = $this->PlanificacionDetalles->Cargos->find('list', ['conditions' => ['Cargos.eliminado' => 0]]);
        $this->set(compact('planificacionDetalle', 'planificaciones', 'trabajadores', 'cargos', 'planificacion_id'));
        $this->set('_serialize', ['planificacionDetalle']);
        
        $this->loadModel('Planificaciones');
        $planificaciones = $this->Planificaciones->find('all', ['conditions' => ['Planificaciones.id' => $planificacion_id, 'Planificaciones.eliminado' => 0]])->first();
        //pj($planificaciones);
        $this->set(compact('planificaciones'));
        
        $planificacionDetalles = $this->PlanificacionDetalles->find('all', ['conditions' => ['PlanificacionDetalles.planificacion_id' => $planificacion_id, 'PlanificacionDetalles.eliminado' => 0]])->contain(['Trabajadores', 'Cargos']);
        //pj($planificacionDetalles);
        $this->set(compact('planificacionDetalles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Planificacion Detalle id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    /*public function edit($id = null) {
        $planificacionDetalle = $this->PlanificacionDetalles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planificacionDetalle = $this->PlanificacionDetalles->patchEntity($planificacionDetalle, $this->request->data);
            if ($this->PlanificacionDetalles->save($planificacionDetalle)) {
                $this->Flash->success(__('The planificacion detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planificacion detalle could not be saved. Please, try again.'));
        }
        //$planificaciones = $this->PlanificacionDetalles->Planificaciones->find('list', ['conditions' => ['Planificaciones.eliminado' => 0]]);
        $trabajadores = $this->PlanificacionDetalles->Trabajadores->find('list', ['conditions' => ['Trabajadores.eliminado' => 0]])->contain(['Cargos']);
        $cargos = $this->PlanificacionDetalles->Cargos->find('list', ['conditions' => ['Cargos.eliminado' => 0]]);
        $this->set(compact('planificacionDetalle', 'planificaciones', 'trabajadores', 'cargos', 'planificacion_id'));
        $this->set('_serialize', ['planificacionDetalle']);
    }*/

    /**
     * Delete method
     *
     * @param string|null $id Planificacion Detalle id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $planificacionDetalle = $this->PlanificacionDetalles->get($id);
        //if ($this->PlanificacionDetalles->delete($planificacionDetalle)) {
        $planificacionDetalle->eliminado = 1;
        if ($this->PlanificacionDetalles->save($planificacionDetalle)) {
            $this->_auditoria($this->request->params['controller'], $planificacionDetalle->id, $this->request->params['action'].': Elimino un detalle de la planificación');
            $this->Flash->success(__('El detalle se elimino con exito.'));
        } else {
            $this->Flash->error(__('El detalle no se pudo eliminar. Por favor, intentelo de nuevo.'));
        }

        return $this->redirect(['action' => 'add', $planificacionDetalle->planificacion_id]);
    }

}
