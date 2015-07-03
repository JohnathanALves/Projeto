<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Amostrarepasse Controller
 *
 * @property \App\Model\Table\AmostrarepasseTable $Amostrarepasse */
class AmostrarepasseController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('amostrarepasse', $this->paginate($this->Amostrarepasse));
        $this->set('_serialize', ['amostrarepasse']);
    }

    /**
     * View method
     *
     * @param string|null $id Amostrarepasse id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $amostrarepasse = $this->Amostrarepasse->get($id, [
            'contain' => []
        ]);
        $this->set('amostrarepasse', $amostrarepasse);
        $this->set('_serialize', ['amostrarepasse']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $amostrarepasse = $this->Amostrarepasse->newEntity();
        if ($this->request->is('post')) {
            $amostrarepasse = $this->Amostrarepasse->patchEntity($amostrarepasse, $this->request->data);
            if ($this->Amostrarepasse->save($amostrarepasse)) {
                $this->Flash->success('The amostrarepasse has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The amostrarepasse could not be saved. Please, try again.');
            }
        }
        $this->set(compact('amostrarepasse'));
        $this->set('_serialize', ['amostrarepasse']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Amostrarepasse id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $amostrarepasse = $this->Amostrarepasse->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amostrarepasse = $this->Amostrarepasse->patchEntity($amostrarepasse, $this->request->data);
            if ($this->Amostrarepasse->save($amostrarepasse)) {
                $this->Flash->success('The amostrarepasse has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The amostrarepasse could not be saved. Please, try again.');
            }
        }
        $this->set(compact('amostrarepasse'));
        $this->set('_serialize', ['amostrarepasse']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Amostrarepasse id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amostrarepasse = $this->Amostrarepasse->get($id);
        if ($this->Amostrarepasse->delete($amostrarepasse)) {
            $this->Flash->success('The amostrarepasse has been deleted.');
        } else {
            $this->Flash->error('The amostrarepasse could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
