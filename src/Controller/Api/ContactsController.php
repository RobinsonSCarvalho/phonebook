<?php
namespace App\Controller\Api;

use App\Controller\Api\AppApiController;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 */
class ContactsController extends AppApiController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    
    /**
      @SWG\Get(
      path="/api/contacts/index.json",
      summary="Consulta registro de contacts",
      tags={"contacts"},
      consumes={"application/json"},
      produces={"application/json"},
      @SWG\Parameter(
      name="id",
      description="Identificação de registro de Contacts",
      in="query",
      required=false,
      type="integer"
      ),
      @SWG\Response(
      response="200",
      description="OK",
      @SWG\Schema(ref="#/definitions/ContactsTable")
      )
      )
     */
    public function index() {
        $contacts = $this->paginate($this->Contacts);
        if ($contacts->isEmpty()) {
            $this->sendResponse($contacts, 204);
        } else {
            $this->sendResponse($contacts, 206);
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    
    /**
      @SWG\Post(
      path="/api/contacts/add.json",
      summary="Inclusão de registro de contact",
      tags={"contacts"},
      consumes={"application/json"},
      produces={"application/json"},
      @SWG\Parameter(
      name="id",
      description="Identificação de registro de Contact",
      in="query",
      required=false,
      type="integer"
      ),
      @SWG\Parameter(
      name="nome",
      description="Nome do Contact",
      in="query",
      required=true,
      type="string"
      ),
      @SWG\Parameter(
      name="email",
      description="Email do Contact",
      in="query",
      required=true,
      type="string"
      ),
      @SWG\Parameter(
      name="endereco",
      description="Endereço do Contact",
      in="query",
      required=true,
      type="string"
      ),
      @SWG\Response(
      response="200",
      description="OK",
      @SWG\Schema(ref="#/definitions/ClientesTable")
      )
      )
     */
    public function add() {
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->sendResponse($contact, 201);
            } else {
                $this->sendResponse($contact->errors(), 412);
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    
    /**
      @SWG\Post(
      path="/api/contacts/edit.json",
      summary="Ediao de registro de contact",
      tags={"contacts"},
      consumes={"application/json"},
      produces={"application/json"},
      @SWG\Parameter(
      name="id",
      description="Identificação de registro de Contact",
      in="query",
      required=false,
      type="integer"
      ),
      @SWG\Parameter(
      name="nome",
      description="Nome do Contact",
      in="query",
      required=true,
      type="string"
      ),
      @SWG\Parameter(
      name="email",
      description="Email do Contact",
      in="query",
      required=true,
      type="string"
      ),
      @SWG\Parameter(
      name="endereco",
      description="Endereço do Contact",
      in="query",
      required=true,
      type="string"
      ),
      @SWG\Response(
      response="200",
      description="OK",
      @SWG\Schema(ref="#/definitions/ClientesTable")
      )
      )
     */
    public function edit($id = null) {
        $id = $this->request->data('id');
        $contact = $this->Contacts->get($id, [
            'contain' => ['Phones']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->sendResponse($contact, 200);
            } else {
                $this->sendResponse($usuario->errors(), 412);
            }
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    /**
      @SWG\Post(
      path="/api/contacts/delete.json",
      summary="Exclusão de registro de contact",
      tags={"contacts"},
      consumes={"application/json"},
      produces={"application/json"},
      @SWG\Parameter(
      name="id",
      description="Identificação de registro de Contact",
      in="query",
      required=false,
      type="integer"
      ),
      @SWG\Response(
      response="200",
      description="OK",
      @SWG\Schema(ref="#/definitions/ClientesTable")
      )
      )
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $id = $this->request->data('id');
        $contact = $this->Contacts->get($id);
        if ($this->Contacts->delete($contact)) {
            $this->sendResponse($contact, 200);
        } else {
            $this->sendResponse(['message' => 'Não foi possivel excluir o registro.'], 412);
        }
    }

}
