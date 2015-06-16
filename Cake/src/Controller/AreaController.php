<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Area Controller
 *
 * @property \App\Model\Table\AreaTable $Area */
class AreaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('area', $this->paginate($this->Area));
        $this->set('_serialize', ['area']);
    }

    /**
     * View method
     *
     * @param string|null $id Area id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => []
        ]);
        $this->set('area', $area);
        $this->set('_serialize', ['area']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $area = $this->Area->newEntity();
        if ($this->request->is('post')) {
            $area = $this->Area->patchEntity($area, $this->request->data);
            if ($this->Area->save($area)) {
                $this->Flash->success('The area has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The area could not be saved. Please, try again.');
            }
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $area = $this->Area->patchEntity($area, $this->request->data);
            if ($this->Area->save($area)) {
                $this->Flash->success('The area has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The area could not be saved. Please, try again.');
            }
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Area id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $area = $this->Area->get($id);
        if ($this->Area->delete($area)) {
            $this->Flash->success('The area has been deleted.');
        } else {
            $this->Flash->error('The area could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
