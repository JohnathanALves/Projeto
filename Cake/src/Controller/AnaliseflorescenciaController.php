<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Analiseflorescencia Controller
 *
 * @property \App\Model\Table\AnaliseflorescenciaTable $Analiseflorescencia */
class AnaliseflorescenciaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('analiseflorescencia', $this->paginate($this->Analiseflorescencia));
        $this->set('_serialize', ['analiseflorescencia']);
    }

    /**
     * View method
     *
     * @param string|null $id Analiseflorescencium id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $analiseflorescencium = $this->Analiseflorescencia->get($id, [
            'contain' => []
        ]);
        $this->set('analiseflorescencium', $analiseflorescencium);
        $this->set('_serialize', ['analiseflorescencium']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $analiseflorescencium = $this->Analiseflorescencia->newEntity();
        if ($this->request->is('post')) {
            $analiseflorescencium = $this->Analiseflorescencia->patchEntity($analiseflorescencium, $this->request->data);
            if ($this->Analiseflorescencia->save($analiseflorescencium)) {
                $this->Flash->success('The analiseflorescencium has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The analiseflorescencium could not be saved. Please, try again.');
            }
        }
        $this->set(compact('analiseflorescencium'));
        $this->set('_serialize', ['analiseflorescencium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Analiseflorescencium id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $analiseflorescencium = $this->Analiseflorescencia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $analiseflorescencium = $this->Analiseflorescencia->patchEntity($analiseflorescencium, $this->request->data);
            if ($this->Analiseflorescencia->save($analiseflorescencium)) {
                $this->Flash->success('The analiseflorescencium has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The analiseflorescencium could not be saved. Please, try again.');
            }
        }
        $this->set(compact('analiseflorescencium'));
        $this->set('_serialize', ['analiseflorescencium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Analiseflorescencium id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $analiseflorescencium = $this->Analiseflorescencia->get($id);
        if ($this->Analiseflorescencia->delete($analiseflorescencium)) {
            $this->Flash->success('The analiseflorescencium has been deleted.');
        } else {
            $this->Flash->error('The analiseflorescencium could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
