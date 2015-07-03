<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bequer Controller
 *
 * @property \App\Model\Table\BequerTable $Bequer */
class BequerController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('bequer', $this->paginate($this->Bequer));
        $this->set('_serialize', ['bequer']);
    }

    /**
     * View method
     *
     * @param string|null $id Bequer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bequer = $this->Bequer->get($id, [
            'contain' => []
        ]);
        $this->set('bequer', $bequer);
        $this->set('_serialize', ['bequer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bequer = $this->Bequer->newEntity();
        if ($this->request->is('post')) {
            $bequer = $this->Bequer->patchEntity($bequer, $this->request->data);
            if ($this->Bequer->save($bequer)) {
                $this->Flash->success('The bequer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The bequer could not be saved. Please, try again.');
            }
        }
        $this->set(compact('bequer'));
        $this->set('_serialize', ['bequer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bequer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bequer = $this->Bequer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bequer = $this->Bequer->patchEntity($bequer, $this->request->data);
            if ($this->Bequer->save($bequer)) {
                $this->Flash->success('The bequer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The bequer could not be saved. Please, try again.');
            }
        }
        $this->set(compact('bequer'));
        $this->set('_serialize', ['bequer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bequer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bequer = $this->Bequer->get($id);
        if ($this->Bequer->delete($bequer)) {
            $this->Flash->success('The bequer has been deleted.');
        } else {
            $this->Flash->error('The bequer could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
