<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bairro Controller
 *
 * @property \App\Model\Table\BairroTable $Bairro */
class BairroController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('bairro', $this->paginate($this->Bairro));
        $this->set('_serialize', ['bairro']);
    }

    /**
     * View method
     *
     * @param string|null $id Bairro id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bairro = $this->Bairro->get($id, [
            'contain' => []
        ]);
        $this->set('bairro', $bairro);
        $this->set('_serialize', ['bairro']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bairro = $this->Bairro->newEntity();
        if ($this->request->is('post')) {
            $bairro = $this->Bairro->patchEntity($bairro, $this->request->data);
            if ($this->Bairro->save($bairro)) {
                $this->Flash->success('The bairro has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The bairro could not be saved. Please, try again.');
            }
        }
        $this->set(compact('bairro'));
        $this->set('_serialize', ['bairro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bairro id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bairro = $this->Bairro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bairro = $this->Bairro->patchEntity($bairro, $this->request->data);
            if ($this->Bairro->save($bairro)) {
                $this->Flash->success('The bairro has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The bairro could not be saved. Please, try again.');
            }
        }
        $this->set(compact('bairro'));
        $this->set('_serialize', ['bairro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bairro id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bairro = $this->Bairro->get($id);
        if ($this->Bairro->delete($bairro)) {
            $this->Flash->success('The bairro has been deleted.');
        } else {
            $this->Flash->error('The bairro could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
