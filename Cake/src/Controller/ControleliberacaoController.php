<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controleliberacao Controller
 *
 * @property \App\Model\Table\ControleliberacaoTable $Controleliberacao */
class ControleliberacaoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('controleliberacao', $this->paginate($this->Controleliberacao));
        $this->set('_serialize', ['controleliberacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Controleliberacao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controleliberacao = $this->Controleliberacao->get($id, [
            'contain' => []
        ]);
        $this->set('controleliberacao', $controleliberacao);
        $this->set('_serialize', ['controleliberacao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controleliberacao = $this->Controleliberacao->newEntity();
        if ($this->request->is('post')) {
            $controleliberacao = $this->Controleliberacao->patchEntity($controleliberacao, $this->request->data);
            if ($this->Controleliberacao->save($controleliberacao)) {
                $this->Flash->success('The controleliberacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controleliberacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controleliberacao'));
        $this->set('_serialize', ['controleliberacao']);
    }

    /**
     * Update method
     *
     * @param string|null $id Controleliberacao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function update($id = null)
    {
        $controleliberacao = $this->Controleliberacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controleliberacao = $this->Controleliberacao->patchEntity($controleliberacao, $this->request->data);
            if ($this->Controleliberacao->save($controleliberacao)) {
                $this->Flash->success('The controleliberacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controleliberacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controleliberacao'));
        $this->set('_serialize', ['controleliberacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Controleliberacao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controleliberacao = $this->Controleliberacao->get($id);
        if ($this->Controleliberacao->delete($controleliberacao)) {
            $this->Flash->success('The controleliberacao has been deleted.');
        } else {
            $this->Flash->error('The controleliberacao could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
