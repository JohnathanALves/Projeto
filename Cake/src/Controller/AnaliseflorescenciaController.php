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
     * List_add method
     *
     * @author Leonardo Cavalcante do Prado, Angelo Gustavo, Gabriel Rafael
    */
    public function list_add($controle_id = null, $separacao_id = null) 
    {
        $query = $this->Analiseflorescencia->find('all')->where( ['fk_controle' => $controle_id] );
        $this->paginate = [ 'maxLimit' => 5 ];
        $this->set('list_analiseflorescencia', $this->paginate($query));
        $this->set('controle_id', $controle_id);
        $this->set('separacao_id', $separacao_id);

        $analiseflorescencia = $this->Analiseflorescencia->newEntity();
        if ($this->request->is('post')) {
            $analiseflorescencia = $this->Analiseflorescencia->patchEntity($analiseflorescencia, $this->request->data);
            $analiseflorescencia->set( ['fk_controle' => $controle_id] );

            if ($this->Analiseflorescencia->save($analiseflorescencia)) {
                $this->Flash->success('O controle da análise de fluorescência foi salvo.');
                return $this->redirect(['action' => 'list_add', $controle_id, $separacao_id]);
            } else {
                $this->Flash->error('O controle da análise de fluorescência não pôde ser salvo, por favor, tente novamente.');
            }
        }
        $this->set(compact('analiseflorescencia'));
        $this->set('_serialize', ['analiseflorescencia']);
    }

    /**
     * DeleteNoReturn method
     *
     * @author Leonardo Cavalcante do Prado, Angelo Gustavo
     * @param string|null $id Analiseflorescencia id.
     * @return void Redirects to list_add.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function deleteNoReturn($id = null, $controle_id = null, $separacao_id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $analiseflorescencia = $this->Analiseflorescencia->get($id);
        if ($this->Analiseflorescencia->delete($analiseflorescencia)) {
            $this->Flash->success('O controle da análise de fluorescência foi deletado.');
        } else {
            $this->Flash->error('O controle da análise de fluorescência não pôde ser deletada, por favor, tente novamente.');
        }
        return $this->redirect(['action' => 'list_add', $controle_id, $separacao_id]);
    }
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
