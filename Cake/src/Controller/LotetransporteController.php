<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lotetransporte Controller
 *
 * @property \App\Model\Table\LotetransporteTable $Lotetransporte */
class LotetransporteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('lotetransporte', $this->paginate($this->Lotetransporte));
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * View method
     *
     * @param string|null $id Lotetransporte id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lotetransporte = $this->Lotetransporte->get($id, [
            'contain' => []
        ]);
        $this->set('lotetransporte', $lotetransporte);
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lotetransporte = $this->Lotetransporte->newEntity();
        if ($this->request->is('post')) {
            $lotetransporte = $this->Lotetransporte->patchEntity($lotetransporte, $this->request->data);
            if ($this->Lotetransporte->save($lotetransporte)) {
                $this->Flash->success('The lotetransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotetransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotetransporte'));
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lotetransporte id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lotetransporte = $this->Lotetransporte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lotetransporte = $this->Lotetransporte->patchEntity($lotetransporte, $this->request->data);
            if ($this->Lotetransporte->save($lotetransporte)) {
                $this->Flash->success('The lotetransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotetransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotetransporte'));
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lotetransporte id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lotetransporte = $this->Lotetransporte->get($id);
        if ($this->Lotetransporte->delete($lotetransporte)) {
            $this->Flash->success('The lotetransporte has been deleted.');
        } else {
            $this->Flash->error('The lotetransporte could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
