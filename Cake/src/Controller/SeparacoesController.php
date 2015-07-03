<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Separacoes Controller
 *
 * @property \App\Model\Table\SeparacoesTable $Separacoes */
class SeparacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('separacoes', $this->paginate($this->Separacoes));
        $this->set('_serialize', ['separacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Separaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $separaco = $this->Separacoes->get($id, [
            'contain' => []
        ]);
        $this->set('separaco', $separaco);
        $this->set('_serialize', ['separaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $separaco = $this->Separacoes->newEntity();
        if ($this->request->is('post')) {
            $separaco = $this->Separacoes->patchEntity($separaco, $this->request->data);
            if ($this->Separacoes->save($separaco)) {
                $this->Flash->success('The separaco has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The separaco could not be saved. Please, try again.');
            }
        }
        $this->set(compact('separaco'));
        $this->set('_serialize', ['separaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Separaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $separaco = $this->Separacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $separaco = $this->Separacoes->patchEntity($separaco, $this->request->data);
            if ($this->Separacoes->save($separaco)) {
                $this->Flash->success('The separaco has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The separaco could not be saved. Please, try again.');
            }
        }
        $this->set(compact('separaco'));
        $this->set('_serialize', ['separaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Separaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $separaco = $this->Separacoes->get($id);
        if ($this->Separacoes->delete($separaco)) {
            $this->Flash->success('The separaco has been deleted.');
        } else {
            $this->Flash->error('The separaco could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
