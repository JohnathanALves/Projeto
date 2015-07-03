<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tamanhocefalotorax Controller
 *
 * @property \App\Model\Table\TamanhocefalotoraxTable $Tamanhocefalotorax */
class TamanhocefalotoraxController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tamanhocefalotorax', $this->paginate($this->Tamanhocefalotorax));
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * View method
     *
     * @param string|null $id Tamanhocefalotorax id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tamanhocefalotorax = $this->Tamanhocefalotorax->get($id, [
            'contain' => []
        ]);
        $this->set('tamanhocefalotorax', $tamanhocefalotorax);
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tamanhocefalotorax = $this->Tamanhocefalotorax->newEntity();
        if ($this->request->is('post')) {
            $tamanhocefalotorax = $this->Tamanhocefalotorax->patchEntity($tamanhocefalotorax, $this->request->data);
            if ($this->Tamanhocefalotorax->save($tamanhocefalotorax)) {
                $this->Flash->success('The tamanhocefalotorax has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tamanhocefalotorax could not be saved. Please, try again.');
            }
        }
        $this->set(compact('tamanhocefalotorax'));
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tamanhocefalotorax id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tamanhocefalotorax = $this->Tamanhocefalotorax->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tamanhocefalotorax = $this->Tamanhocefalotorax->patchEntity($tamanhocefalotorax, $this->request->data);
            if ($this->Tamanhocefalotorax->save($tamanhocefalotorax)) {
                $this->Flash->success('The tamanhocefalotorax has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tamanhocefalotorax could not be saved. Please, try again.');
            }
        }
        $this->set(compact('tamanhocefalotorax'));
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tamanhocefalotorax id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tamanhocefalotorax = $this->Tamanhocefalotorax->get($id);
        if ($this->Tamanhocefalotorax->delete($tamanhocefalotorax)) {
            $this->Flash->success('The tamanhocefalotorax has been deleted.');
        } else {
            $this->Flash->error('The tamanhocefalotorax could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
