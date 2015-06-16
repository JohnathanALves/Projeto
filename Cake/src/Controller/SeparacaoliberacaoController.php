<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Separacaoliberacao Controller
 *
 * @property \App\Model\Table\SeparacaoliberacaoTable $Separacaoliberacao */
class SeparacaoliberacaoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('separacaoliberacao', $this->paginate($this->Separacaoliberacao));
        $this->set('_serialize', ['separacaoliberacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Separacaoliberacao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $separacaoliberacao = $this->Separacaoliberacao->get($id, [
            'contain' => []
        ]);
        $this->set('separacaoliberacao', $separacaoliberacao);
        $this->set('_serialize', ['separacaoliberacao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $separacaoliberacao = $this->Separacaoliberacao->newEntity();
        if ($this->request->is('post')) {
            $separacaoliberacao = $this->Separacaoliberacao->patchEntity($separacaoliberacao, $this->request->data);
            if ($this->Separacaoliberacao->save($separacaoliberacao)) {
                $this->Flash->success('The separacaoliberacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The separacaoliberacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('separacaoliberacao'));
        $this->set('_serialize', ['separacaoliberacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Separacaoliberacao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $separacaoliberacao = $this->Separacaoliberacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $separacaoliberacao = $this->Separacaoliberacao->patchEntity($separacaoliberacao, $this->request->data);
            if ($this->Separacaoliberacao->save($separacaoliberacao)) {
                $this->Flash->success('The separacaoliberacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The separacaoliberacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('separacaoliberacao'));
        $this->set('_serialize', ['separacaoliberacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Separacaoliberacao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $separacaoliberacao = $this->Separacaoliberacao->get($id);
        if ($this->Separacaoliberacao->delete($separacaoliberacao)) {
            $this->Flash->success('The separacaoliberacao has been deleted.');
        } else {
            $this->Flash->error('The separacaoliberacao could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }

}
