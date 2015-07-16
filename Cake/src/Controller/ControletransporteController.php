<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controletransporte Controller
 *
 * @property \App\Model\Table\ControletransporteTable $Controletransporte */
class ControletransporteController extends AppController
{
    public function viewAllInfo($lote_transporte_id = null)
    {
        $query = $this->Controletransporte->find('all')->where( ['fk_lotetransporte' => $lote_transporte_id] );

        $this->set('lote_transporte_id', $lote_transporte_id);
        $this->set('list_ctrl_trans', $this->paginate($query));
        $this->set('lote_transporte_id', $lote_transporte_id);
        $this->set('_serialize', ['controletransporte']);
    }

    public function list_add($lote_transporte_id = null) 
    {
        $query = $this->Controletransporte->find('all')->where( ['fk_lotetransporte' => $lote_transporte_id] );
   
        $this->paginate = [ 'maxLimit' => 5 ];
        $this->set('list_ctrl_trans', $this->paginate($query));
        $this->set('lote_transporte_id', $lote_transporte_id);

        $c_transporte = $this->Controletransporte->newEntity();

        if ($this->request->is('post')) {
            $c_transporte = $this->Controletransporte->patchEntity($c_transporte, $this->request->data);
            $c_transporte->set( ['fk_lotetransporte' => $lote_transporte_id] );

            $time_controle = $this->request->data('hora_controle');
            $c_transporte->set(['hora_controle' => $time_controle['hour'].':'.$time_controle['minute']]);

            if ($this->Controletransporte->save($c_transporte)) {
                $this->Flash->success('O controle do transporte foi salvo.');
                return $this->redirect(['action' => 'list_add', $lote_transporte_id]);
            } else {
                $this->Flash->error('O controle do transporte não pôde ser salvo. Por favor, tente novamente.');
            }
        }
        $this->set(compact('c_transporte'));
        $this->set('_serialize', ['c_transporte']);
    }

    public function deleteNoReturn($id = null, $lote_transporte_id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $c_transporte = $this->Controletransporte->get($id);

        if ($this->Controletransporte->delete($c_transporte)) {
            $this->Flash->success('A célula foi deletada.');
        } else {
            $this->Flash->error('A célula não pôde ser deletada, por favor, tente novamente.');
        }
        return $this->redirect(['action' => 'list_add', $lote_transporte_id]);
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('controletransporte', $this->paginate($this->Controletransporte));
        $this->set('_serialize', ['controletransporte']);
    }

    /**
     * View method
     *
     * @param string|null $id Controletransporte id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controletransporte = $this->Controletransporte->get($id, [
            'contain' => []
        ]);
        $this->set('controletransporte', $controletransporte);
        $this->set('_serialize', ['controletransporte']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controletransporte = $this->Controletransporte->newEntity();
        if ($this->request->is('post')) {
            $controletransporte = $this->Controletransporte->patchEntity($controletransporte, $this->request->data);
            if ($this->Controletransporte->save($controletransporte)) {
                $this->Flash->success('The controletransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controletransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controletransporte'));
        $this->set('_serialize', ['controletransporte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Controletransporte id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controletransporte = $this->Controletransporte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controletransporte = $this->Controletransporte->patchEntity($controletransporte, $this->request->data);
            if ($this->Controletransporte->save($controletransporte)) {
                $this->Flash->success('The controletransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controletransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controletransporte'));
        $this->set('_serialize', ['controletransporte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Controletransporte id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controletransporte = $this->Controletransporte->get($id);
        if ($this->Controletransporte->delete($controletransporte)) {
            $this->Flash->success('The controletransporte has been deleted.');
        } else {
            $this->Flash->error('The controletransporte could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
