<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Celula Controller
 *
 * @property \App\Model\Table\CelulaTable $Celula */
class CelulaController extends AppController
{
    public function viewAllInfo($controle_transporte_id = null, $lote_id = null)
    {
        $query = $this->Celula->find('all')->where( ['fk_controletransporte' => $controle_transporte_id] );
        //$this->paginate = [ 'maxLimit' => 5 ];

        $this->set('list_celula', $this->paginate($query));

        $this->set('lote_id', $lote_id);
        $this->set('controle_transporte_id', $controle_transporte_id);

        $this->set('_serialize', ['celula']);
    }

    public function list_add($controle_transporte_id = null, $lote_id = null) 
    {
        $query = $this->Celula->find('all')->where( ['fk_controletransporte' => $controle_transporte_id] );
        $this->paginate = [ 'maxLimit' => 5 ];
        
        $this->set('list_celula', $this->paginate($query));
        $this->set('controle_transporte_id', $controle_transporte_id);
        $this->set('lote_id', $lote_id);

        $celula = $this->Celula->newEntity();

        if ($this->request->is('post')) {
            $celula = $this->Celula->patchEntity($celula, $this->request->data);
            $celula->set( ['fk_controletransporte' => $controle_transporte_id] );

            if ($this->Celula->save($celula)) {
                $this->Flash->success('A célula foi salva.');
                return $this->redirect(['action' => 'list_add', $controle_transporte_id, $lote_id]);
            } else {
                $this->Flash->error('A célula não pôde ser salva. Por favor, tente novamente.');
            }
        }
        $this->set(compact('celula'));
        $this->set('_serialize', ['celula']);
    }

    public function deleteNoReturn($id = null, $controle_transporte_id = null, $lote_id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $celula = $this->Celula->get($id);

        if ($this->Celula->delete($celula)) {
            $this->Flash->success('A célula foi deletada.');
        } else {
            $this->Flash->error('A célula não pôde ser deletada, por favor, tente novamente.');
        }
        return $this->redirect(['action' => 'list_add', $controle_transporte_id, $lote_id]);
    }

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
