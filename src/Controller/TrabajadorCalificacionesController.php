<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * TrabajadorCalificaciones Controller
 *
 * @property \App\Model\Table\TrabajadorCalificacionesTable $TrabajadorCalificaciones
 */
class TrabajadorCalificacionesController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->Security->config('unlockedActions', ['add', 'edit']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Planificaciones', 'Trabajadores.Cargos'],
            'conditions' => ['TrabajadorCalificaciones.eliminado' => 0],
            'order' => ['TrabajadorCalificaciones.id' => 'DESC'],
        ];
        $trabajadorCalificaciones = $this->paginate($this->TrabajadorCalificaciones);

        $this->set(compact('trabajadorCalificaciones'));
        $this->set('_serialize', ['trabajadorCalificaciones']);

        $this->_auditoria($this->request->params['controller'], 0, $this->request->params['action'] . ': Listo a las calificaciones de los usuarios');
    }

    /**
     * View method
     *
     * @param string|null $id Trabajador Calificacione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $trabajadorCalificacione = $this->TrabajadorCalificaciones->get($id, [
            'contain' => ['Planificaciones', 'Trabajadores.Cargos']
        ]);

        $this->set('trabajadorCalificacione', $trabajadorCalificacione);
        $this->set('_serialize', ['trabajadorCalificacione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($planificacion_id = null, $trabajador_id = null) {
        $condicion_planificacion = '';
        if ($planificacion_id != null) {
            $condicion_planificacion = ' AND Planificaciones.id = "' . $planificacion_id . '"';
        }
        $condicion_trabajador = '';
        if ($trabajador_id != null) {
            $condicion_trabajador = ' AND Trabajadores.id = "' . $trabajador_id . '"';
        }

        $trabajadorCalificacione = $this->TrabajadorCalificaciones->newEntity();
        if ($this->request->is('post')) {
            $trabajadorCalificacione = $this->TrabajadorCalificaciones->patchEntity($trabajadorCalificacione, $this->request->data);
            if ($this->TrabajadorCalificaciones->save($trabajadorCalificacione)) {
                $this->Flash->success(__('La calificación se ha guardado con exito.'));
                $this->_auditoria($this->request->params['controller'], $trabajadorCalificacione->id, $this->request->params['action'] . ': Agrego una calificación a un trabajador');
                if ($planificacion_id != null) {
                    return $this->redirect(['action' => 'listaCalificar', $planificacion_id]);
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La calificación no se pudo guardar. Por favor, intentelo de nuevo.'));
        }
        $planificaciones = $this->TrabajadorCalificaciones->Planificaciones->find('list', ['valueField' => 'evento', 'conditions' => 'Planificaciones.eliminado = 0' . $condicion_planificacion]);
        $trabajadores = $this->TrabajadorCalificaciones->Trabajadores->find('list', ['conditions' => 'Trabajadores.eliminado = 0' . $condicion_trabajador])->contain(['Cargos']);
        $this->set(compact('trabajadorCalificacione', 'planificaciones', 'trabajadores', 'planificacion_id', 'trabajador_id'));
        $this->set('_serialize', ['trabajadorCalificacione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trabajador Calificacione id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null, $planificacion_id = null, $trabajador_id = null) {
        $condicion_planificacion = '';
        if ($planificacion_id != null) {
            $condicion_planificacion = ' AND Planificaciones.id = "' . $planificacion_id . '"';
        }
        $condicion_trabajador = '';
        if ($trabajador_id != null) {
            $condicion_trabajador = ' AND Trabajadores.id = "' . $trabajador_id . '"';
        }

        $trabajadorCalificacione = $this->TrabajadorCalificaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trabajadorCalificacione = $this->TrabajadorCalificaciones->patchEntity($trabajadorCalificacione, $this->request->data);
            if ($this->TrabajadorCalificaciones->save($trabajadorCalificacione)) {
                $this->Flash->success(__('La calificación ha sido actualizada con exito.'));
                $this->_auditoria($this->request->params['controller'], $trabajadorCalificacione->id, $this->request->params['action'] . ': Edito una calificación a un trabajador');
                if ($planificacion_id != null) {
                    return $this->redirect(['action' => 'listaCalificar', $planificacion_id]);
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La calificación no se pudo actualizar. Por favor, intentelo de nuevo.'));
        }
        $planificaciones = $this->TrabajadorCalificaciones->Planificaciones->find('list', ['valueField' => 'evento', 'conditions' => 'Planificaciones.eliminado = 0' . $condicion_planificacion]);
        $trabajadores = $this->TrabajadorCalificaciones->Trabajadores->find('list', ['conditions' => 'Trabajadores.eliminado = 0' . $condicion_trabajador])->contain(['Cargos']);
        $this->set(compact('trabajadorCalificacione', 'planificaciones', 'trabajadores', 'planificacion_id', 'trabajador_id'));
        $this->set('_serialize', ['trabajadorCalificacione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trabajador Calificacione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $trabajadorCalificacione = $this->TrabajadorCalificaciones->get($id);
        //if ($this->TrabajadorCalificaciones->delete($trabajadorCalificacione)) {
        $trabajadorCalificacione->eliminado = 1;
        if ($this->TrabajadorCalificaciones->save($trabajadorCalificacione)) {
            $this->Flash->success(__('La calificación se ha eliminado con exito.'));
            $this->_auditoria($this->request->params['controller'], $trabajadorCalificacione->id, $this->request->params['action'] . ': Elimino una calificación a un trabajador');
        } else {
            $this->Flash->error(__('La calificación no se pudo eliminar. Por favor, intentelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function listaCalificar($planificacion_id = null) {
        if ($planificacion_id != null) {
            $planificacion = $this->TrabajadorCalificaciones->Planificaciones->find('all', ['conditions' => ['Planificaciones.id' => $planificacion_id]])->first();
            //pj($planificacion);
            $trabajadores = $this->TrabajadorCalificaciones->Planificaciones->PlanificacionDetalles->find('all', [
                        'conditions' => [
                            'PlanificacionDetalles.eliminado' => 0,
                            'PlanificacionDetalles.planificacion_id' => $planificacion_id
                        ]
                    ])
                    ->contain('Trabajadores.Cargos');
            $trabajadores = $this->paginate($trabajadores);
            //pj($trabajadores);
            $this->set(compact('trabajadores', 'planificacion'));
        } else {
            $this->Flash->error(__('Debe seleccionar la planificación. Por favor, intentelo de nuevo.'));
            return $this->redirect(['conditions' => 'Planificaciones', 'action' => 'index']);
        }
    }

    public function calificar($planificacion_id = null, $trabajador_id = null) {
        $calificacion = $this->TrabajadorCalificaciones->find('all', [
                    'fields' => [
                        'TrabajadorCalificaciones.id',
                    ],
                    'conditions' => [
                        'TrabajadorCalificaciones.eliminado' => 0,
                        'TrabajadorCalificaciones.planificacion_id' => $planificacion_id,
                        'TrabajadorCalificaciones.trabajador_id' => $trabajador_id
                    ]
                ])->first();
        if (empty($calificacion)) {
            return $this->redirect(['action' => 'add', $planificacion_id, $trabajador_id]);
        } else {
            return $this->redirect(['action' => 'edit', $calificacion->id, $planificacion_id, $trabajador_id]);
        }
    }

}
