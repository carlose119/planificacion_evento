<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Planificaciones Controller
 *
 * @property \App\Model\Table\PlanificacionesTable $Planificaciones
 */
class PlanificacionesController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->Security->config('unlockedActions', ['add', 'edit']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($fecha = null, $cancha_id = null) {
        $fecha = $fecha == '*' ? null : $fecha;
        $cancha_id = $cancha_id == '*' ? null : $cancha_id;

        $conditions = '';
        if ($fecha != null) {
            $conditions .= ' AND Planificaciones.fecha = "' . $fecha . '" ';
        }
        if ($cancha_id != null) {
            $conditions .= ' AND Planificaciones.cancha_id = "' . $cancha_id . '" ';
        }
        $this->paginate = [
            'conditions' => 'Planificaciones.eliminado = 0' . $conditions,
            'order' => ['Planificaciones.id' => 'DESC'],
            'contain' => ['Canchas']
        ];
        $planificaciones = $this->paginate($this->Planificaciones);

        $this->set(compact('planificaciones', 'fecha'));
        $this->set('_serialize', ['planificaciones']);
        $this->_auditoria($this->request->params['controller'], 0, $this->request->params['action'] . ': Listo las planificaciones');

        $canchas = $this->Planificaciones->Canchas->find('all', [
            'conditions' => [
                'Canchas.eliminado' => 0,
                'Canchas.activo' => 1
            ]
        ]);
        $this->set(compact('canchas'));
    }

    /**
     * View method
     *
     * @param string|null $id Planificacione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $planificacione = $this->Planificaciones->get($id, [
            'contain' => ['Canchas']
        ]);
        $planificacionDetalles = $this->Planificaciones->PlanificacionDetalles->find('all', ['conditions' => ['PlanificacionDetalles.planificacion_id' => $id, 'PlanificacionDetalles.eliminado' => 0]])->contain(['Trabajadores', 'Cargos']);
        //pj($planificacionDetalles);
        $this->set('planificacione', $planificacione);
        $this->set('planificacionDetalles', $planificacionDetalles);
        $this->set('_serialize', ['planificacione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $planificacione = $this->Planificaciones->newEntity();
        if ($this->request->is('post')) {
            $planificacione = $this->Planificaciones->patchEntity($planificacione, $this->request->data);
            if ($this->Planificaciones->save($planificacione)) {
                $this->Flash->success(__('La planificación se registro con exito.'));
                $this->_auditoria($this->request->params['controller'], $planificacione->id, $this->request->params['action'] . ': Agrego una planificación');
                return $this->redirect(['controller' => 'PlanificacionDetalles', 'action' => 'add', $planificacione->id]);
            }
            $this->Flash->error(__('La planificación no se pudo registrar. Por favor, intentelo de nuevo.'));
        }
        $canchas = $this->Planificaciones->Canchas->find('list', ['conditions' => ['Canchas.eliminado' => 0, 'Canchas.activo' => 1]]);
        $this->set(compact('planificacione', 'canchas'));
        $this->set('_serialize', ['planificacione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Planificacione id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $planificacione = $this->Planificaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planificacione = $this->Planificaciones->patchEntity($planificacione, $this->request->data);
            if ($this->Planificaciones->save($planificacione)) {
                $this->Flash->success(__('La planificación se actualizo con exito.'));
                $this->_auditoria($this->request->params['controller'], $planificacione->id, $this->request->params['action'] . ': Edito una planificación');
                return $this->redirect(['controller' => 'PlanificacionDetalles', 'action' => 'add', $planificacione->id]);
            }
            $this->Flash->error(__('La planificación no se pudo actualizar. Por favor, intentelo de nuevo.'));
        }
        $canchas = $this->Planificaciones->Canchas->find('list', ['conditions' => ['Canchas.eliminado' => 0, 'Canchas.activo' => 1]]);
        $this->set(compact('planificacione', 'canchas'));
        $this->set('_serialize', ['planificacione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Planificacione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $planificacione = $this->Planificaciones->get($id);
        //if ($this->Planificaciones->delete($planificacione)) {
        $planificacione->eliminado = 1;
        if ($this->Planificaciones->save($planificacione)) {
            $this->_auditoria($this->request->params['controller'], $planificacione->id, $this->request->params['action'] . ': Elimino una planificación');
            $this->Flash->success(__('La planificación se elimino con exito.'));
        } else {
            $this->Flash->error(__('La planificación no se pudo eliminar. Por favor, intentelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function calendario() {
        $dia = isset($_GET['dia']) ? $_GET['dia'] : '';
        $mes = isset($_GET['mes']) ? $_GET['mes'] : '';
        $ano = isset($_GET['ano']) ? $_GET['ano'] : '';

        if (!$dia)
            $dia = date('d');
        if (!$mes)
            $mes = date('n');
        if (!$ano)
            $ano = date('Y');

        if (strlen($mes) == 1) {
            $mes = '0' . $mes;
        }

        $fecha_desde = $ano . '-' . $mes . '-1';
        $fecha_hasta = $ano . '-' . $mes . '-31';

        $planificaciones = $this->Planificaciones->find('all', ['conditions' => ['Planificaciones.eliminado' => 0, 'Planificaciones.fecha >=' => $fecha_desde, 'Planificaciones.fecha <= ' => $fecha_hasta]]);
        //pj($planificaciones);
        $this->set(compact('planificaciones'));

        $canchas = $this->Planificaciones->Canchas->find('all', [
            'conditions' => [
                'Canchas.eliminado' => 0,
                'Canchas.activo' => 1
            ]
        ]);
        $this->set(compact('canchas'));
    }

}
