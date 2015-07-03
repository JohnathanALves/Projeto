<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Costagem Controller
 *
 * @property \App\Model\Table\CostagemTable $Costagem */
class CostagemController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('costagem', $this->paginate($this->Costagem));
        $this->set('_serialize', ['costagem']);
    }

    /**
     * View method
     *
     * @param string|null $id Costagem id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $costagem = $this->Costagem->get($id, [
            'contain' => []
        ]);
        $this->set('costagem', $costagem);
        $this->set('_serialize', ['costagem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $costagem = $this->Costagem->newEntity();
        if ($this->request->is('post')) {
            $costagem = $this->Costagem->patchEntity($costagem, $this->request->data);
            if ($this->Costagem->save($costagem)) {
                $this->Flash->success('The costagem has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The costagem could not be saved. Please, try again.');
            }
        }
        $this->set(compact('costagem'));
        $this->set('_serialize', ['costagem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Costagem id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $costagem = $this->Costagem->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $costagem = $this->Costagem->patchEntity($costagem, $this->request->data);
            if ($this->Costagem->save($costagem)) {
                $this->Flash->success('The costagem has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The costagem could not be saved. Please, try again.');
            }
        }
        $this->set(compact('costagem'));
        $this->set('_serialize', ['costagem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Costagem id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $costagem = $this->Costagem->get($id);
        if ($this->Costagem->delete($costagem)) {
            $this->Flash->success('The costagem has been deleted.');
        } else {
            $this->Flash->error('The costagem could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
