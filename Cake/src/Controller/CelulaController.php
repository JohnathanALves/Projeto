<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Celula Controller
 *
 * @property \App\Model\Table\CelulaTable $Celula */
class CelulaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('celula', $this->paginate($this->Celula));
        $this->set('_serialize', ['celula']);
    }

    /**
     * View method
     *
     * @param string|null $id Celula id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $celula = $this->Celula->get($id, [
            'contain' => []
        ]);
        $this->set('celula', $celula);
        $this->set('_serialize', ['celula']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $celula = $this->Celula->newEntity();
        if ($this->request->is('post')) {
            $celula = $this->Celula->patchEntity($celula, $this->request->data);
            if ($this->Celula->save($celula)) {
                $this->Flash->success('The celula has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The celula could not be saved. Please, try again.');
            }
        }
        $this->set(compact('celula'));
        $this->set('_serialize', ['celula']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Celula id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $celula = $this->Celula->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $celula = $this->Celula->patchEntity($celula, $this->request->data);
            if ($this->Celula->save($celula)) {
                $this->Flash->success('The celula has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The celula could not be saved. Please, try again.');
            }
        }
        $this->set(compact('celula'));
        $this->set('_serialize', ['celula']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Celula id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $celula = $this->Celula->get($id);
        if ($this->Celula->delete($celula)) {
            $this->Flash->success('The celula has been deleted.');
        } else {
            $this->Flash->error('The celula could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
