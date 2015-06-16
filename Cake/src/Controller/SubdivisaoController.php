<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subdivisao Controller
 *
 * @property \App\Model\Table\SubdivisaoTable $Subdivisao */
class SubdivisaoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('subdivisao', $this->paginate($this->Subdivisao));
        $this->set('_serialize', ['subdivisao']);
    }

    /**
     * View method
     *
     * @param string|null $id Subdivisao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subdivisao = $this->Subdivisao->get($id, [
            'contain' => []
        ]);
        $this->set('subdivisao', $subdivisao);
        $this->set('_serialize', ['subdivisao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subdivisao = $this->Subdivisao->newEntity();
        if ($this->request->is('post')) {
            $subdivisao = $this->Subdivisao->patchEntity($subdivisao, $this->request->data);
            if ($this->Subdivisao->save($subdivisao)) {
                $this->Flash->success('The subdivisao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The subdivisao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('subdivisao'));
        $this->set('_serialize', ['subdivisao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subdivisao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subdivisao = $this->Subdivisao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subdivisao = $this->Subdivisao->patchEntity($subdivisao, $this->request->data);
            if ($this->Subdivisao->save($subdivisao)) {
                $this->Flash->success('The subdivisao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The subdivisao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('subdivisao'));
        $this->set('_serialize', ['subdivisao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subdivisao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subdivisao = $this->Subdivisao->get($id);
        if ($this->Subdivisao->delete($subdivisao)) {
            $this->Flash->success('The subdivisao has been deleted.');
        } else {
            $this->Flash->error('The subdivisao could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
