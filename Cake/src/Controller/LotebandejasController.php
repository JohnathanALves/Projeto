<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lotebandejas Controller
 *
 * @property \App\Model\Table\LotebandejasTable $Lotebandejas */
class LotebandejasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('lotebandejas', $this->paginate($this->Lotebandejas));
        $this->set('_serialize', ['lotebandejas']);
    }

    /**
     * View method
     *
     * @param string|null $id Lotebandeja id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lotebandeja = $this->Lotebandejas->get($id, [
            'contain' => []
        ]);
        $this->set('lotebandeja', $lotebandeja);
        $this->set('_serialize', ['lotebandeja']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lotebandeja = $this->Lotebandejas->newEntity();
        if ($this->request->is('post')) {
            $lotebandeja = $this->Lotebandejas->patchEntity($lotebandeja, $this->request->data);
            if ($this->Lotebandejas->save($lotebandeja)) {
                $this->Flash->success('The lotebandeja has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotebandeja could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotebandeja'));
        $this->set('_serialize', ['lotebandeja']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lotebandeja id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lotebandeja = $this->Lotebandejas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lotebandeja = $this->Lotebandejas->patchEntity($lotebandeja, $this->request->data);
            if ($this->Lotebandejas->save($lotebandeja)) {
                $this->Flash->success('The lotebandeja has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotebandeja could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotebandeja'));
        $this->set('_serialize', ['lotebandeja']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lotebandeja id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lotebandeja = $this->Lotebandejas->get($id);
        if ($this->Lotebandejas->delete($lotebandeja)) {
            $this->Flash->success('The lotebandeja has been deleted.');
        } else {
            $this->Flash->error('The lotebandeja could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
