<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Temperaturatransporte Controller
 *
 * @property \App\Model\Table\TemperaturatransporteTable $Temperaturatransporte */
class TemperaturatransporteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('temperaturatransporte', $this->paginate($this->Temperaturatransporte));
        $this->set('_serialize', ['temperaturatransporte']);
    }

    /**
     * View method
     *
     * @param string|null $id Temperaturatransporte id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $temperaturatransporte = $this->Temperaturatransporte->get($id, [
            'contain' => []
        ]);
        $this->set('temperaturatransporte', $temperaturatransporte);
        $this->set('_serialize', ['temperaturatransporte']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $temperaturatransporte = $this->Temperaturatransporte->newEntity();
        if ($this->request->is('post')) {
            $temperaturatransporte = $this->Temperaturatransporte->patchEntity($temperaturatransporte, $this->request->data);
            if ($this->Temperaturatransporte->save($temperaturatransporte)) {
                $this->Flash->success('The temperaturatransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The temperaturatransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('temperaturatransporte'));
        $this->set('_serialize', ['temperaturatransporte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Temperaturatransporte id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $temperaturatransporte = $this->Temperaturatransporte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $temperaturatransporte = $this->Temperaturatransporte->patchEntity($temperaturatransporte, $this->request->data);
            if ($this->Temperaturatransporte->save($temperaturatransporte)) {
                $this->Flash->success('The temperaturatransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The temperaturatransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('temperaturatransporte'));
        $this->set('_serialize', ['temperaturatransporte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Temperaturatransporte id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $temperaturatransporte = $this->Temperaturatransporte->get($id);
        if ($this->Temperaturatransporte->delete($temperaturatransporte)) {
            $this->Flash->success('The temperaturatransporte has been deleted.');
        } else {
            $this->Flash->error('The temperaturatransporte could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
