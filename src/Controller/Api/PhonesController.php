<?php

namespace App\Controller\Api;

use App\Controller\Api\AppApiController;

/**
 * Phones Controller
 *
 * @property \App\Model\Table\PhonesTable $Phones
 */
class PhonesController extends AppApiController {
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */

    /**
      @SWG\Get(
      path="/api/phones/index.json",
      summary="Consulta registro de phones",
      tags={"phones"},
      consumes={"application/json"},
      produces={"application/json"},
      @SWG\Parameter(
      name="id",
      description="Identificação de registro de Phone",
      in="query",
      required=false,
      type="integer"
      ),
      @SWG\Response(
      response="200",
      description="OK",
      @SWG\Schema(ref="#/definitions/PhonesTable")
      )
      )
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Contacts']
        ];
        $phones = $this->paginate($this->Phones);

        if ($phones->isEmpty()) {
            $this->sendResponse($phones, 204);
        } else {
            $this->sendResponse($phones, 206);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */

    /**
      @SWG\Post(
      path="/api/phones/add.json",
      summary="Inclusão de registro de phone",
      tags={"phones"},
      consumes={"application/json"},
      produces={"application/json"},
      @SWG\Parameter(
      name="id",
      description="Identificacao de registro de Phones",
      in="query",
      required=false,
      type="integer"
      ),
      @SWG\Parameter(
      name="contact_id",
      description="Identificacao de registro do contact",
      in="query",
      required=true,
      type="integer"
      ),
      @SWG\Parameter(
      name="phone",
      description="Numero do Phone",
      in="query",
      required=true,
      type="string"
      ),
      @SWG\Response(
      response="200",
      description="OK",
      @SWG\Schema(ref="#/definitions/PhonesTable")
      )
      )
     */
    public function add() {
        $phone = $this->Phones->newEntity();
        if ($this->request->is('post')) {
            $phone = $this->Phones->patchEntity($phone, $this->request->getData());
            if ($this->Phones->save($phone)) {
                $this->sendResponse($phone, 201);
            } else {
                $this->sendResponse($phone->errors(), 412);
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Phone id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    
    /**
      @SWG\Post(
      path="/api/phones/edit.json",
      summary="Edição de registro de phone",
      tags={"phones"},
      consumes={"application/json"},
      produces={"application/json"},
      @SWG\Parameter(
      name="id",
      description="Identificacao de registro de Phones",
      in="query",
      required=false,
      type="integer"
      ),
      @SWG\Parameter(
      name="contact_id",
      description="Identificacao de registro do contact",
      in="query",
      required=true,
      type="integer"
      ),
      @SWG\Parameter(
      name="phone",
      description="Numero do Phone",
      in="query",
      required=true,
      type="string"
      ),
      @SWG\Response(
      response="200",
      description="OK",
      @SWG\Schema(ref="#/definitions/PhonesTable")
      )
      )
     */
    public function edit($id = null) {
        $phone = $this->Phones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $phone = $this->Phones->patchEntity($phone, $this->request->getData());
            if ($this->Phones->save($phone)) {
                $this->sendResponse($phone, 200);
            } else {
                $this->sendResponse($phone->errors(), 412);
            }
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Phone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    /**
      @SWG\Post(
      path="/api/phones/delete.json",
      summary="Exclusão de registro de phone",
      tags={"phones"},
      consumes={"application/json"},
      produces={"application/json"},
      @SWG\Parameter(
      name="id",
      description="Identificação de registro de Phone",
      in="query",
      required=false,
      type="integer"
      ),
      @SWG\Response(
      response="200",
      description="OK",
      @SWG\Schema(ref="#/definitions/PhonesTable")
      )
      )
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $phone = $this->Phones->get($id);
        if ($this->Phones->delete($phone)) {
            $this->sendResponse($phone, 200);
        } else {
            $this->sendResponse(['message' => 'Não foi possivel excluir o registro.'], 412);
        }
    }

}
