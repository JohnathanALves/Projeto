<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ovos Controller
 *
 * @property \App\Model\Table\OvosTable $Ovos */
class OvosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ovos', $this->paginate($this->Ovos));
        $this->set('_serialize', ['ovos']);
    }

    /**
     * View method
     *
     * @param string|null $id Ovo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ovo = $this->Ovos->get($id, [
            'contain' => []
        ]);
        $this->set('ovo', $ovo);
        $this->set('_serialize', ['ovo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ovo = $this->Ovos->newEntity();
        if ($this->request->is('post')) {
            $ovo = $this->Ovos->patchEntity($ovo, $this->request->data);
            if ($this->Ovos->save($ovo)) {
                $this->Flash->success('The ovo has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ovo could not be saved. Please, try again.');
            }
        }
        $this->set(compact('ovo'));
        $this->set('_serialize', ['ovo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ovo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ovo = $this->Ovos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ovo = $this->Ovos->patchEntity($ovo, $this->request->data);
            if ($this->Ovos->save($ovo)) {
                $this->Flash->success('The ovo has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ovo could not be saved. Please, try again.');
            }
        }
        $this->set(compact('ovo'));
        $this->set('_serialize', ['ovo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ovo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ovo = $this->Ovos->get($id);
        if ($this->Ovos->delete($ovo)) {
            $this->Flash->success('The ovo has been deleted.');
        } else {
            $this->Flash->error('The ovo could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
