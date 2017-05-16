<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Trabajadores Controller
 *
 * @property \App\Model\Table\TrabajadoresTable $Trabajadores
 */
class TrabajadoresController extends AppController {

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
            'contain' => ['Cargos', 'Canchas'],
            'conditions' => ['Trabajadores.eliminado' => 0],
            'order' => ['Trabajadores.id' => 'DESC']
        ];
        $trabajadores = $this->paginate($this->Trabajadores);
        //pj($trabajadores);

        $this->set(compact('trabajadores'));
        $this->set('_serialize', ['trabajadores']);

        $this->_auditoria($this->request->params['controller'], 0, $this->request->params['action'] . ': Listo a los trabajadores');
    }

    /**
     * View method
     *
     * @param string|null $id Trabajadore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $trabajadore = $this->Trabajadores->get($id, [
            'contain' => ['Cargos', 'Canchas']
        ]);

        $this->set('trabajadore', $trabajadore);
        $this->set('_serialize', ['trabajadore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($planificacion_id = null) {
        $trabajadore = $this->Trabajadores->newEntity();
        if ($this->request->is('post')) {
            $trabajadore = $this->Trabajadores->patchEntity($trabajadore, $this->request->data);
            if ($this->Trabajadores->save($trabajadore)) {
                $this->Flash->success(__('El trabajador se registro con exito.'));
                $this->_auditoria($this->request->params['controller'], $trabajadore->id, $this->request->params['action'] . ': Agrego un trabajador');
                if ($planificacion_id != null) {
                    return $this->redirect(['controller' => 'PlanificacionDetalles', 'action' => 'add', $planificacion_id]);
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El trabajador no se pudo registrar. Por favor, intentelo de nuevo.'));
        }
        $cargos = $this->Trabajadores->Cargos->find('list', ['conditions' => ['Cargos.eliminado' => 0]]);
        $canchas = $this->Trabajadores->Canchas->find('list', ['valueField' => 'nombre'])->order(['nombre' => 'ASC']);
        $this->set(compact('trabajadore', 'cargos', 'planificacion_id', 'canchas'));
        $this->set('_serialize', ['trabajadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trabajadore id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $trabajadore = $this->Trabajadores->get($id, [
            'contain' => ['Canchas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trabajadore = $this->Trabajadores->patchEntity($trabajadore, $this->request->data);
            if ($this->Trabajadores->save($trabajadore)) {
                $this->Flash->success(__('El trabajador se actualizo.'));
                $this->_auditoria($this->request->params['controller'], $trabajadore->id, $this->request->params['action'] . ': Edito un trabajador');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El trabajador no se pudo actualizar. Por favor, intentelo de nuevo.'));
        }
        $cargos = $this->Trabajadores->Cargos->find('list', ['conditions' => ['Cargos.eliminado' => 0]]);
        $canchas = $this->Trabajadores->Canchas->find('list', ['valueField' => 'nombre'])->order(['nombre' => 'ASC']);
        $this->set(compact('trabajadore', 'cargos', 'canchas'));
        $this->set('_serialize', ['trabajadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trabajadore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $trabajadore = $this->Trabajadores->get($id);
        //if ($this->Trabajadores->delete($trabajadore)) {
        $trabajadore->eliminado = 1;
        if ($this->Trabajadores->save($trabajadore)) {
            $this->_auditoria($this->request->params['controller'], $trabajadore->id, $this->request->params['action'] . ': Elimino un trabajador');
            $this->Flash->success(__('El trabajador se elimino con exito.'));
        } else {
            $this->Flash->error(__('El trabajador no se pudo eliminar. Por favor, intentelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
