<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Auditorias Controller
 *
 * @property \App\Model\Table\AuditoriasTable $Auditorias
 */
class AuditoriasController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Users'],
            'order' => ['Auditorias.id' => 'DESC']
        ];
        $auditorias = $this->paginate($this->Auditorias);

        $this->set(compact('auditorias'));
        $this->set('_serialize', ['auditorias']);
    }
    
    public function view($id = null) {
        $auditoria = $this->Auditorias->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('auditoria', $auditoria);
        $this->set('_serialize', ['auditoria']);
    }

}
