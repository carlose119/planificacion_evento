<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        $this->loadComponent('Security');
        $this->loadComponent('Csrf');

        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ],
                    'finder' => 'auth'
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'authError' => 'EL usuario es invalido',
            'loginRedirect' => [
                'controller' => 'Planificaciones',
                'action' => 'calendario'
            ],
            'logoutRedirect' => '/',
            'unauthorizedRedirect' => $this->referer()
        ]);

        $controller = $this->request->params['controller'];
        $this->set(compact('controller'));
        
        $action = $this->request->params['action'];
        $this->set(compact('action'));
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function isAuthorized($user) {
        return true;
    }

    public function _ver_ip() {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $client_ip = (!empty($_SERVER['REMOTE_ADDR']) ) ?
                    $_SERVER['REMOTE_ADDR'] :
                    ( (!empty($_ENV['REMOTE_ADDR']) ) ?
                    $_ENV['REMOTE_ADDR'] :
                    "unknown" );

            // los proxys van añadiendo al final de esta cabecera
            // las direcciones ip que van "ocultando". Para localizar la ip real
            // del usuario se comienza a mirar por el principio hasta encontrar
            // una dirección ip que no sea del rango privado. En caso de no
            // encontrarse ninguna se toma como valor el REMOTE_ADDR

            $entries = preg_split('/[, ]/', $_SERVER['HTTP_X_FORWARDED_FOR']);

            reset($entries);
            while (list(, $entry) = each($entries)) {
                $entry = trim($entry);
                if (preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list)) {
                    // http://www.faqs.org/rfcs/rfc1918.html
                    $private_ip = array(
                        '/^0\./',
                        '/^127\.0\.0\.1/',
                        '/^192\.168\..*/',
                        '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
                        '/^10\..*/');

                    $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);

                    if ($client_ip != $found_ip) {
                        $client_ip = $found_ip;
                        break;
                    }
                }
            }
        } else {
            $client_ip = (!empty($_SERVER['REMOTE_ADDR']) ) ?
                    $_SERVER['REMOTE_ADDR'] :
                    ( (!empty($_ENV['REMOTE_ADDR']) ) ?
                    $_ENV['REMOTE_ADDR'] :
                    "unknown" );
        }

        return $client_ip;
    }

    public function _rango_ips($addr, $cidr) {
        // $addr should be an ip address in the format '0.0.0.0'
        // $cidr should be a string in the format '100/8'
        list($ip, $mask) = explode('/', $cidr);
        $mask = 0xffffffff << (32 - $mask);
        $output = ((ip2long($addr) & $mask) == (ip2long($ip) & $mask));
        return $output;
    }

    public function _auditoria($tabla = null, $tabla_id = null, $accion = null, $user_id = null, $ip_conexion = null) {
        if ($tabla == null) {
            $tabla = $this->request->params['controller'];
        }
        if ($tabla_id == null) {
            $tabla_id = 0;
        }
        if ($accion == null) {
            $accion = $this->request->params['action'];
        }
        if ($user_id == null) {
            $user_id = $this->request->session()->read('Auth.User.id');
        }
        if ($ip_conexion == null) {
            $ip_conexion = $this->_ver_ip();
        }
        
        $this->loadModel('Auditorias');
        $auditoria = $this->Auditorias->newEntity();        
        $auditoria->tabla = $tabla;
        $auditoria->tabla_id = $tabla_id;
        $auditoria->accion = $accion;
        $auditoria->user_id = $user_id;
        $auditoria->ip_conexion = $ip_conexion;
        
        if ($this->Auditorias->save($auditoria)) {
            
        } else {
            
        }

        //ClassRegistry::removeObject('Auditoria');
    }

}
