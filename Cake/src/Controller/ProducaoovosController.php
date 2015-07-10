<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Producaoovos Controller
 *
 * @property \App\Model\Table\ProducaoovosTable $Producaoovos */
class ProducaoovosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('producaoovos', $this->paginate($this->Producaoovos));
        $this->set('_serialize', ['producaoovos']);
    }

    /**
     * View method
     *
     * @param string|null $id Producaoovo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producaoovo = $this->Producaoovos->get($id, [
            'contain' => []
        ]);
        $this->set('producaoovo', $producaoovo);
        $this->set('_serialize', ['producaoovo']);
    }


    public function list_add($idLote = null,$codigo_lote)
    {  

        $this->loadModel('Lotegaiolas');

        $query = $this->Producaoovos->find('all')->where(['fk_lotegaiolas' => $idLote]);
        $this->paginate = [ 'maxLimit' => 3 ];
        $this->set('producaoovos', $this->paginate($query));

        //$codigo_lote = $this->Lotegaiolas->find('list', [ 'value' => 'lotegaiolasid','valueField' => 'codigo_lote' ]);
        //$this->set('options_lote', $codigo_lote);
        $this->set('codigo_lote', $codigo_lote);
        $producaoovo = $this->Producaoovos->newEntity();

        if ($this->request->is('post')) {
            $producaoovo = $this->Producaoovos->patchEntity($producaoovo, $this->request->data);
            $producaoovo->set(['fk_lotegaiolas' => $idLote]);
            if ($this->Producaoovos->save($producaoovo)) {
                $this->Flash->success('Producao adicionada com sucesso.');
                return $this->redirect(['action' => 'list_add', $idLote,$codigo_lote]);
            } else {
                $this->Flash->error('Não foi possível adicionar a produção. Por favor, tente novamente.');
            }
        }
        $this->set(compact('producaoovo'));
        $this->set('_serialize', ['producaoovo']);
    }


    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $producaoovo = $this->Producaoovos->newEntity();
        if ($this->request->is('post')) {
            $producaoovo = $this->Producaoovos->patchEntity($producaoovo, $this->request->data);
            if ($this->Producaoovos->save($producaoovo)) {
                $this->Flash->success('The producaoovo has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The producaoovo could not be saved. Please, try again.');
            }
        }
        $this->set(compact('producaoovo'));
        $this->set('_serialize', ['producaoovo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Producaoovo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producaoovo = $this->Producaoovos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producaoovo = $this->Producaoovos->patchEntity($producaoovo, $this->request->data);
            if ($this->Producaoovos->save($producaoovo)) {
                $this->Flash->success('The producaoovo has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The producaoovo could not be saved. Please, try again.');
            }
        }
        $this->set(compact('producaoovo'));
        $this->set('_serialize', ['producaoovo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Producaoovo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producaoovo = $this->Producaoovos->get($id);
        if ($this->Producaoovos->delete($producaoovo)) {
            $this->Flash->success('The producaoovo has been deleted.');
        } else {
            $this->Flash->error('The producaoovo could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
