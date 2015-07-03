<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aliquota Controller
 *
 * @property \App\Model\Table\AliquotaTable $Aliquota */
class AliquotaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('aliquota', $this->paginate($this->Aliquota));
        $this->set('_serialize', ['aliquota']);
    }

    /**
     * View method
     *
     * @param string|null $id Aliquotum id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aliquotum = $this->Aliquota->get($id, [
            'contain' => []
        ]);
        $this->set('aliquotum', $aliquotum);
        $this->set('_serialize', ['aliquotum']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aliquotum = $this->Aliquota->newEntity();
        if ($this->request->is('post')) {
            $aliquotum = $this->Aliquota->patchEntity($aliquotum, $this->request->data);
            if ($this->Aliquota->save($aliquotum)) {
                $this->Flash->success('The aliquotum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The aliquotum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('aliquotum'));
        $this->set('_serialize', ['aliquotum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aliquotum id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aliquotum = $this->Aliquota->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aliquotum = $this->Aliquota->patchEntity($aliquotum, $this->request->data);
            if ($this->Aliquota->save($aliquotum)) {
                $this->Flash->success('The aliquotum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The aliquotum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('aliquotum'));
        $this->set('_serialize', ['aliquotum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aliquotum id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aliquotum = $this->Aliquota->get($id);
        if ($this->Aliquota->delete($aliquotum)) {
            $this->Flash->success('The aliquotum has been deleted.');
        } else {
            $this->Flash->error('The aliquotum could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
