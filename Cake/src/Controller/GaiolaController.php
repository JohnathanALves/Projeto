<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gaiola Controller
 *
 * @property \App\Model\Table\GaiolaTable $Gaiola */
class GaiolaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('gaiola', $this->paginate($this->Gaiola));
        $this->set('_serialize', ['gaiola']);
    }

    /**
     * View method
     *
     * @param string|null $id Gaiola id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gaiola = $this->Gaiola->get($id, [
            'contain' => []
        ]);
        $this->set('gaiola', $gaiola);
        $this->set('_serialize', ['gaiola']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gaiola = $this->Gaiola->newEntity();
        if ($this->request->is('post')) {
            $gaiola = $this->Gaiola->patchEntity($gaiola, $this->request->data);
            if ($this->Gaiola->save($gaiola)) {
                $this->Flash->success('The gaiola has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The gaiola could not be saved. Please, try again.');
            }
        }
        $this->set(compact('gaiola'));
        $this->set('_serialize', ['gaiola']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gaiola id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gaiola = $this->Gaiola->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gaiola = $this->Gaiola->patchEntity($gaiola, $this->request->data);
            if ($this->Gaiola->save($gaiola)) {
                $this->Flash->success('The gaiola has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The gaiola could not be saved. Please, try again.');
            }
        }
        $this->set(compact('gaiola'));
        $this->set('_serialize', ['gaiola']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gaiola id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gaiola = $this->Gaiola->get($id);
        if ($this->Gaiola->delete($gaiola)) {
            $this->Flash->success('The gaiola has been deleted.');
        } else {
            $this->Flash->error('The gaiola could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
