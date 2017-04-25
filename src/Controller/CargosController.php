<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Cargos Controller
 *
 * @property \App\Model\Table\CargosTable $Cargos
 */
class CargosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'conditions' => ['Cargos.eliminado' => 0],
            'order' => ['Cargos.id' => 'DESC']
        ];
        $cargos = $this->paginate($this->Cargos);

        $this->set(compact('cargos'));
        $this->set('_serialize', ['cargos']);
        
        $this->_auditoria($this->request->params['controller'], 0, $this->request->params['action'].': Listo los cargos');
    }

    /**
     * View method
     *
     * @param string|null $id Cargo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $cargo = $this->Cargos->get($id, [
            //'contain' => ['PlanificacionDetalles', 'Trabajadores']
        ]);

        $this->set('cargo', $cargo);
        $this->set('_serialize', ['cargo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $cargo = $this->Cargos->newEntity();
        if ($this->request->is('post')) {
            $cargo = $this->Cargos->patchEntity($cargo, $this->request->data);
            if ($this->Cargos->save($cargo)) {
                $this->Flash->success(__('El cargo se registro con exito.'));
                $this->_auditoria($this->request->params['controller'], $cargo->id, $this->request->params['action'].': Agrego un cargo');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El cargo no se pudo registrar. Por favor, intentelo de nuevo.'));
        }
        $this->set(compact('cargo'));
        $this->set('_serialize', ['cargo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cargo id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $cargo = $this->Cargos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cargo = $this->Cargos->patchEntity($cargo, $this->request->data);
            if ($this->Cargos->save($cargo)) {
                $this->Flash->success(__('El cargo se actualizo con exito.'));
                $this->_auditoria($this->request->params['controller'], $cargo->id, $this->request->params['action'].': Edito un cargo');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El cargo no se pudo editar. Por favor, intentelo de nuevo.'));
        }
        $this->set(compact('cargo'));
        $this->set('_serialize', ['cargo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cargo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $cargo = $this->Cargos->get($id);
        //if ($this->Cargos->delete($cargo)) {
        $cargo->eliminado = 1;
        if ($this->Cargos->save($cargo)) {
            $this->_auditoria($this->request->params['controller'], $cargo->id, $this->request->params['action'].': Elimino un cargo');
            $this->Flash->success(__('El cargo se elimino con exito.'));
        } else {
            $this->Flash->error(__('El cargo no se pudo eliminar. Por favor, intentelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
