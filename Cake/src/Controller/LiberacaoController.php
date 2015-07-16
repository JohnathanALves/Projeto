<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Liberacao Controller
 *
 * @property \App\Model\Table\LiberacaoTable $Liberacao */
class LiberacaoController extends AppController
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('liberacao', $this->paginate($this->Liberacao));
        $this->set('_serialize', ['liberacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Liberacao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $liberacao = $this->Liberacao->get($id, [
            'contain' => []
        ]);
        $this->set('liberacao', $liberacao);
        $this->set('_serialize', ['liberacao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $liberacao = $this->Liberacao->newEntity();
        if ($this->request->is('post')) {
            $liberacao = $this->Liberacao->patchEntity($liberacao, $this->request->data);
            if ($this->Liberacao->save($liberacao)) {
                $this->Flash->success('The liberacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The liberacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('liberacao'));
        $this->set('_serialize', ['liberacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Liberacao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $liberacao = $this->Liberacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $liberacao = $this->Liberacao->patchEntity($liberacao, $this->request->data);
            if ($this->Liberacao->save($liberacao)) {
                $this->Flash->success('The liberacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The liberacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('liberacao'));
        $this->set('_serialize', ['liberacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Liberacao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $liberacao = $this->Liberacao->get($id);
        if ($this->Liberacao->delete($liberacao)) {
            $this->Flash->success('The liberacao has been deleted.');
        } else {
            $this->Flash->error('The liberacao could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
