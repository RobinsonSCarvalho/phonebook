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

namespace App\Controller\Api;

use App\Controller\AppController;
/**


  @SWG\Swagger(

  @SWG\Info(
  title="Phonebook API",
  description="Documentação de Uso da API",
  version="1.0.0"
  )
  )
 * 

 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppApiController extends AppController {

    public function __construct(\Cake\Network\Request $request = null, \Cake\Network\Response $response = null, $name = null, $eventManager = null, $components = null) {
        parent::__construct($request, $response, $name, $eventManager, $components);
        $this->viewBuilder()->layout('ajax');
        \Cake\Log\Log::config('api', [
            'className' => 'File',
            'path' => LOGS,
            'levels' => [],
            'scopes' => ['api'],
            'file' => 'api.log',
        ]);
        if (!empty($this->request->input('json_decode'))) {
            $this->request->data = \Cake\Utility\Hash::merge($this->request->data, $this->request->input('json_decode'));
        }
        \Cake\Log\Log::info('URL: ' . $this->request->url, ['scope' => ['api']]);
        \Cake\Log\Log::info('Request: ' . json_encode($this->request, JSON_PRETTY_PRINT), ['scope' => ['api']]);
    }

    public function initialize() {
        parent::initialize();
        $this->RequestHandler->prefers('json');
        $this->RequestHandler->renderAs($this, 'json');
        if ($this->request->is('options')) {
            $code = 200;
            $result = [];
        }
    }

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
    }

    public function sendResponse($result = [], $code = 200, $msg = 'Generico') {
        if ($this->request->is('options')) {
            $code = 200;
            $result = [];
        }
        $paging = [];

        if (!empty($this->request->params['paging'])) {
            $k = array_keys($this->request->params['paging']);
            $paging = array_merge($paging, $this->request->params['paging'][$k[0]]);
        }
        $new_code = $this->response->httpCodes($code);
        if (empty($new_code)) {
            $this->response->httpCodes([$code => $msg]);
            $new_code = [$code => $msg];
        }
        $url = h($this->request->here());
        $message = $new_code[$code];
        if (is_array($result) AND isset($result['message'])) {
            $message = $result['message'];
            unset($result['message']);
        }
        $this->response->statusCode($code);
        $status = $code;
        if (count($paging) > 0) {
            $this->set(compact('message', 'code', 'status', 'url', 'paging', 'result'));
            $this->set('_serialize', ['message', 'code', 'status', 'url', 'paging', 'result']);
        } else {
            $this->set(compact('message', 'code', 'status', 'url', 'result'));
            $this->set('_serialize', ['message', 'code', 'status', 'url', 'result']);
        }

        \Cake\Log\Log::info('Response: ' . json_encode(compact('message', 'code', 'status', 'url', 'paging', 'result'), JSON_PRETTY_PRINT) . "\n", ['scope' => ['api']]);
    }

}
