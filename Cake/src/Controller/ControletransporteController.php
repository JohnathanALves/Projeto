<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controletransporte Controller
 *
 * @property \App\Model\Table\ControletransporteTable $Controletransporte */
class ControletransporteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('controletransporte', $this->paginate($this->Controletransporte));
        $this->set('_serialize', ['controletransporte']);
    }

    /**
     * View method
     *
     * @param string|null $id Controletransporte id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controletransporte = $this->Controletransporte->get($id, [
            'contain' => []
        ]);
        $this->set('controletransporte', $controletransporte);
        $this->set('_serialize', ['controletransporte']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controletransporte = $this->Controletransporte->newEntity();
        if ($this->request->is('post')) {
            $controletransporte = $this->Controletransporte->patchEntity($controletransporte, $this->request->data);
            if ($this->Controletransporte->save($controletransporte)) {
                $this->Flash->success('The controletransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controletransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controletransporte'));
        $this->set('_serialize', ['controletransporte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Controletransporte id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controletransporte = $this->Controletransporte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controletransporte = $this->Controletransporte->patchEntity($controletransporte, $this->request->data);
            if ($this->Controletransporte->save($controletransporte)) {
                $this->Flash->success('The controletransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controletransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controletransporte'));
        $this->set('_serialize', ['controletransporte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Controletransporte id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controletransporte = $this->Controletransporte->get($id);
        if ($this->Controletransporte->delete($controletransporte)) {
            $this->Flash->success('The controletransporte has been deleted.');
        } else {
            $this->Flash->error('The controletransporte could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
