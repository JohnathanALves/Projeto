<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controle Controller
 *
 * @property \App\Model\Table\ControleTable $Controle */
class ControleController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('controle', $this->paginate($this->Controle));
        $this->set('_serialize', ['controle']);
    }

    /**
     * View method
     *
     * @param string|null $id Controle id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controle = $this->Controle->get($id, [
            'contain' => []
        ]);
        $this->set('controle', $controle);
        $this->set('_serialize', ['controle']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controle = $this->Controle->newEntity();
        if ($this->request->is('post')) {
            $controle = $this->Controle->patchEntity($controle, $this->request->data);
            if ($this->Controle->save($controle)) {
                $this->Flash->success('The controle has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controle could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controle'));
        $this->set('_serialize', ['controle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Controle id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controle = $this->Controle->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controle = $this->Controle->patchEntity($controle, $this->request->data);
            if ($this->Controle->save($controle)) {
                $this->Flash->success('The controle has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controle could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controle'));
        $this->set('_serialize', ['controle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Controle id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controle = $this->Controle->get($id);
        if ($this->Controle->delete($controle)) {
            $this->Flash->success('The controle has been deleted.');
        } else {
            $this->Flash->error('The controle could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
