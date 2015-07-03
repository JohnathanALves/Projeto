<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Montagem Controller
 *
 * @property \App\Model\Table\MontagemTable $Montagem */
class MontagemController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('montagem', $this->paginate($this->Montagem));
        $this->set('_serialize', ['montagem']);
    }

    /**
     * View method
     *
     * @param string|null $id Montagem id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $montagem = $this->Montagem->get($id, [
            'contain' => []
        ]);
        $this->set('montagem', $montagem);
        $this->set('_serialize', ['montagem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $montagem = $this->Montagem->newEntity();
        if ($this->request->is('post')) {
            $montagem = $this->Montagem->patchEntity($montagem, $this->request->data);
            if ($this->Montagem->save($montagem)) {
                $this->Flash->success('The montagem has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The montagem could not be saved. Please, try again.');
            }
        }
        $this->set(compact('montagem'));
        $this->set('_serialize', ['montagem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Montagem id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $montagem = $this->Montagem->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $montagem = $this->Montagem->patchEntity($montagem, $this->request->data);
            if ($this->Montagem->save($montagem)) {
                $this->Flash->success('The montagem has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The montagem could not be saved. Please, try again.');
            }
        }
        $this->set(compact('montagem'));
        $this->set('_serialize', ['montagem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Montagem id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $montagem = $this->Montagem->get($id);
        if ($this->Montagem->delete($montagem)) {
            $this->Flash->success('The montagem has been deleted.');
        } else {
            $this->Flash->error('The montagem could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
