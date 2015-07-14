<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mortalidadespupas Controller
 *
 * @property \App\Model\Table\MortalidadespupasTable $Mortalidadespupas */
class MortalidadespupasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('mortalidadespupas', $this->paginate($this->Mortalidadespupas));
        $this->set('_serialize', ['mortalidadespupas']);
    }

    /**
     * View method
     *
     * @param string|null $id Mortalidadespupa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mortalidadespupa = $this->Mortalidadespupas->get($id, [
            'contain' => []
        ]);
        $this->set('mortalidadespupa', $mortalidadespupa);
        $this->set('_serialize', ['mortalidadespupa']);
    }

    public function list_add($idLote = null, $codigo_lote)
    {  

         $this->loadModel('Lotegaiolas');

        $query = $this->Mortalidadespupas->find('all')->where(['fk_lotegaiolas' => $idLote]);
        $this->paginate = [ 'maxLimit' => 3 ];
        $this->set('mortalidadespupas', $this->paginate($query));


        $this->set('codigo_lote', $codigo_lote);
        $mortalidadespupa = $this->Mortalidadespupas->newEntity();
        

        if ($this->request->is('post')) {
            $mortalidadespupa = $this->Mortalidadespupas->patchEntity($mortalidadespupa, $this->request->data);
            $mortalidadespupa->set(['fk_lotegaiolas' => $idLote]);
            if ($this->Mortalidadespupas->save($mortalidadespupa)) {
                $this->Flash->success('Mortalidade adicionada com sucesso.');
                return $this->redirect(['action' => 'list_add', $idLote, $codigo_lote]);
            } else {
                $this->Flash->error('Não foi possível adicionar a produção. Por favor, tente novamente.');
            }
        }
        $this->set(compact('mortalidadespupa'));
        $this->set('_serialize', ['mortalidadespupa']);
    }


    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mortalidadespupa = $this->Mortalidadespupas->newEntity();
        if ($this->request->is('post')) {
            $mortalidadespupa = $this->Mortalidadespupas->patchEntity($mortalidadespupa, $this->request->data);
            if ($this->Mortalidadespupas->save($mortalidadespupa)) {
                $this->Flash->success('The mortalidadespupa has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The mortalidadespupa could not be saved. Please, try again.');
            }
        }
        $this->set(compact('mortalidadespupa'));
        $this->set('_serialize', ['mortalidadespupa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mortalidadespupa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mortalidadespupa = $this->Mortalidadespupas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mortalidadespupa = $this->Mortalidadespupas->patchEntity($mortalidadespupa, $this->request->data);
            if ($this->Mortalidadespupas->save($mortalidadespupa)) {
                $this->Flash->success('The mortalidadespupa has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The mortalidadespupa could not be saved. Please, try again.');
            }
        }
        $this->set(compact('mortalidadespupa'));
        $this->set('_serialize', ['mortalidadespupa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mortalidadespupa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mortalidadespupa = $this->Mortalidadespupas->get($id);
        if ($this->Mortalidadespupas->delete($mortalidadespupa)) {
            $this->Flash->success('The mortalidadespupa has been deleted.');
        } else {
            $this->Flash->error('The mortalidadespupa could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
