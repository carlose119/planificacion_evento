<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Canchas Controller
 *
 * @property \App\Model\Table\CanchasTable $Canchas
 */
class CanchasController extends AppController {
    
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
            'conditions' => 'Canchas.eliminado = 0',
            'order' => ['Canchas.id' => 'DESC']
        ];
        $canchas = $this->paginate($this->Canchas);

        $this->set(compact('canchas'));
        $this->set('_serialize', ['canchas']);
        
        $this->_auditoria($this->request->params['controller'], 0, $this->request->params['action'] . ': Listo las canchas');
    }

    /**
     * View method
     *
     * @param string|null $id Cancha id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $cancha = $this->Canchas->get($id, [
            'contain' => []
        ]);

        $this->set('cancha', $cancha);
        $this->set('_serialize', ['cancha']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $cancha = $this->Canchas->newEntity();
        if ($this->request->is('post')) {
            $cancha = $this->Canchas->patchEntity($cancha, $this->request->data);
            if ($this->Canchas->save($cancha)) {
                $this->Flash->success(__('La cancha ha sido guardada.'));
                $this->_auditoria($this->request->params['controller'], $cancha->id, $this->request->params['action'] . ': agrego una cancha');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La cancha no se pudo guardar. Por favor, intentalo de nuevo.'));
        }
        $this->set(compact('cancha'));
        $this->set('_serialize', ['cancha']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cancha id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $cancha = $this->Canchas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cancha = $this->Canchas->patchEntity($cancha, $this->request->data);
            if ($this->Canchas->save($cancha)) {
                $this->Flash->success(__('La cancha ha sido actualizada.'));
                $this->_auditoria($this->request->params['controller'], $cancha->id, $this->request->params['action'] . ': edito una cancha');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La cancha no se pudo actualizar. Por favor, intentelo de nuevo.'));
        }
        $this->set(compact('cancha'));
        $this->set('_serialize', ['cancha']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cancha id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $cancha = $this->Canchas->get($id);
        //if ($this->Canchas->delete($cancha)) {
        $cancha->eliminado = 1;
        if ($this->Canchas->save($cancha)) {
            $this->_auditoria($this->request->params['controller'], $cancha->id, $this->request->params['action'] . ': elimino una cancha');
            $this->Flash->success(__('La cancha ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La cancha no se pudo eliminar. Por favor, intentelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
