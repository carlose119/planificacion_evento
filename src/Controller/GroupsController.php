<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Groups Controller
 *
 * @property \App\Model\Table\GroupsTable $Groups
 */
class GroupsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'conditions' => ['Groups.eliminado' => 0],
            'order' => ['Groups.id' => 'DESC']
        ];
        $groups = $this->paginate($this->Groups);

        $this->set(compact('groups'));
        $this->set('_serialize', ['groups']);
        
        $this->_auditoria($this->request->params['controller'], 0, $this->request->params['action'].': Listo los grupos');
    }

    /**
     * View method
     *
     * @param string|null $id Group id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $group = $this->Groups->get($id, [
            //'contain' => ['Users']
        ]);

        $this->set('group', $group);
        $this->set('_serialize', ['group']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $group = $this->Groups->newEntity();
        if ($this->request->is('post')) {
            $group = $this->Groups->patchEntity($group, $this->request->data);
            if ($this->Groups->save($group)) {
                $this->Flash->success(__('El grupo se registro con exito.'));
                $this->_auditoria($this->request->params['controller'], $group->id, $this->request->params['action'].': Agrego un grupo');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El grupo no se pudo registrar. Por favor, intentelo de nuevo.'));
        }
        $this->set(compact('group'));
        $this->set('_serialize', ['group']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Group id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $group = $this->Groups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $group = $this->Groups->patchEntity($group, $this->request->data);
            if ($this->Groups->save($group)) {
                $this->Flash->success(__('El grupo se actualizo con exito.'));
                $this->_auditoria($this->request->params['controller'], $group->id, $this->request->params['action'].': Edito un grupo');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El grupo no se pudo actualizar. Por favor, intentelo de nuevo.'));
        }
        $this->set(compact('group'));
        $this->set('_serialize', ['group']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Group id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $group = $this->Groups->get($id);
        //if ($this->Groups->delete($group)) {
        $group->eliminado = 1;
        if ($this->Groups->save($group)) {
            $this->_auditoria($this->request->params['controller'], $group->id, $this->request->params['action'].': Elimino un grupo');
            $this->Flash->success(__('El grupo se elimino con exito.'));
        } else {
            $this->Flash->error(__('El grupo no se pudo eliminar. Por favor, intentelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
