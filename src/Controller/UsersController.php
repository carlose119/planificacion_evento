<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {
    
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'logout']);
    }
    
    public function login() {
        $this->viewBuilder()->layout('login');
        if ($this->request->is('post')) {
            //pr($this->request->data);die();
            
            $query = $this->Users->find('all')->where(['email' => $this->request->data['email'], 'activo' => 0])->first();
            if ($query != null) {
                return $this->redirect(['action' => 'reactivarUsuario', $query->id]);
            }
            
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->_auditoria();
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->request->data['password'] = null;
            $this->Flash->error(__('Usuario Invalido'));
        }
    }

    public function logout() {
        $this->_auditoria();
        $this->request->session()->destroy();
        return $this->redirect($this->Auth->logout());
    }
    
    public function home() {
        return $this->redirect(['controller' => 'Planificaciones', 'action' => 'index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Groups'],
            'conditions' => ['Users.eliminado' => 0],
            'order' => ['Users.id' => 'DESC']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
        
        $this->_auditoria($this->request->params['controller'], 0, $this->request->params['action'].': Listo los usuarios');
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $user = $this->Users->get($id, [
            'contain' => ['Groups']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
    
    public function perfil($id = null) {
        $id = $this->request->session()->read('Auth.User.id');
        $user = $this->Users->get($id, [
            'contain' => ['Groups']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario se registro con exito.'));
                $this->_auditoria($this->request->params['controller'], $user->id, $this->request->params['action'].': Agrego un usuario');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('EL usuario no se pudo registrar. Por favor, intentelo de nuevo.'));
        }
        $groups = $this->Users->Groups->find('list', ['conditiond' => ['Groups.eliminado' => 0]]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario se actualizo con exito.'));
                $this->_auditoria($this->request->params['controller'], $user->id, $this->request->params['action'].': Edito un usuario');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no se pudo actualizar. Por favor, intentelo de nuevo.'));
        }
        $groups = $this->Users->Groups->find('list', ['conditiond' => ['Groups.eliminado' => 0]]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        //if ($this->Users->delete($user)) {
        $user->eliminado = 1;
        if ($this->Users->save($user)) {
            $this->_auditoria($this->request->params['controller'], $user->id, $this->request->params['action'].': Elimino un usuario');
            $this->Flash->success(__('El usuario se elimino con exito.'));
        } else {
            $this->Flash->error(__('El usuario no se pudo eliminar. Por favor, intentelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
