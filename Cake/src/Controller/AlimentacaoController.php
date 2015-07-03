<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alimentacao Controller
 *
 * @property \App\Model\Table\AlimentacaoTable $Alimentacao */
class AlimentacaoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('alimentacao', $this->paginate($this->Alimentacao));
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Alimentacao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alimentacao = $this->Alimentacao->get($id, [
            'contain' => []
        ]);
        $this->set('alimentacao', $alimentacao);
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alimentacao = $this->Alimentacao->newEntity();
        if ($this->request->is('post')) {
            $alimentacao = $this->Alimentacao->patchEntity($alimentacao, $this->request->data);
            if ($this->Alimentacao->save($alimentacao)) {
                $this->Flash->success('The alimentacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The alimentacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('alimentacao'));
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alimentacao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alimentacao = $this->Alimentacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alimentacao = $this->Alimentacao->patchEntity($alimentacao, $this->request->data);
            if ($this->Alimentacao->save($alimentacao)) {
                $this->Flash->success('The alimentacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The alimentacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('alimentacao'));
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alimentacao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alimentacao = $this->Alimentacao->get($id);
        if ($this->Alimentacao->delete($alimentacao)) {
            $this->Flash->success('The alimentacao has been deleted.');
        } else {
            $this->Flash->error('The alimentacao could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
