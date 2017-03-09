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

    public function __construct(\Cake\Network\Request $request = null, \Cake\Network\Response $response = null, $name = null, $eventManager = null, $components = null) {
        parent::__construct($request, $response, $name, $eventManager, $components);
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: *");
        header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");
        header("Access-Control-Allow-Headers: X-My-Api-Version, X-MyApiTokenHeader, X-ApiToken, Engaged-Auth-Token, Access-Control-Allow-Headers, Content-Type, Authorization, Content-Length, X-Requested-With");
        header('X-Api-Version: V1');
        $this->set('title', 'Phonebook');
        $this->set('subtitle', '');
    }

    public $paginate = [
        'maxLimit' => 999999999
    ];

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

        $this->helpers = [
            'Flash' => [
                'className' => 'MyFlash'
            ],
            'Form' => [
                'className' => 'MyForm'
            ],
            'Html' => [
                'className' => 'MyHtml'
            ],
            'Number' => [
                'className' => 'MyNumber'
            ],
            'Paginator' => [
                'className' => 'MyPaginator'
            ],
            'Rss' => [
                'className' => 'MyRss'
            ],
            'Text' => [
                'className' => 'MyText'
            ],
            'Time' => [
                'className' => 'MyTime'
            ],
            'Url' => [
                'className' => 'MyUrl'
            ],
            'Modal' => [
                'className' => 'MyModal'
            ]
        ];
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

}
