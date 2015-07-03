<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tetraciclina Controller
 *
 * @property \App\Model\Table\TetraciclinaTable $Tetraciclina */
class TetraciclinaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tetraciclina', $this->paginate($this->Tetraciclina));
        $this->set('_serialize', ['tetraciclina']);
    }

    /**
     * View method
     *
     * @param string|null $id Tetraciclina id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tetraciclina = $this->Tetraciclina->get($id, [
            'contain' => []
        ]);
        $this->set('tetraciclina', $tetraciclina);
        $this->set('_serialize', ['tetraciclina']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tetraciclina = $this->Tetraciclina->newEntity();
        if ($this->request->is('post')) {
            $tetraciclina = $this->Tetraciclina->patchEntity($tetraciclina, $this->request->data);
            if ($this->Tetraciclina->save($tetraciclina)) {
                $this->Flash->success('The tetraciclina has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tetraciclina could not be saved. Please, try again.');
            }
        }
        $this->set(compact('tetraciclina'));
        $this->set('_serialize', ['tetraciclina']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tetraciclina id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tetraciclina = $this->Tetraciclina->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tetraciclina = $this->Tetraciclina->patchEntity($tetraciclina, $this->request->data);
            if ($this->Tetraciclina->save($tetraciclina)) {
                $this->Flash->success('The tetraciclina has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tetraciclina could not be saved. Please, try again.');
            }
        }
        $this->set(compact('tetraciclina'));
        $this->set('_serialize', ['tetraciclina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tetraciclina id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tetraciclina = $this->Tetraciclina->get($id);
        if ($this->Tetraciclina->delete($tetraciclina)) {
            $this->Flash->success('The tetraciclina has been deleted.');
        } else {
            $this->Flash->error('The tetraciclina could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
