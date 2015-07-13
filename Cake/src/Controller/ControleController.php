<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controle Controller
 *
 * @property \App\Model\Table\ControleTable $Controle */
class ControleController extends AppController
{

    /**
     * List_add method
     *
     * @author Leonardo Cavalcante do Prado
    */
    public function list_add($separacoes_id = null) 
    {
        $query = $this->Controle->find('all')->where( ['fk_separacoes' => $separacoes_id] );
        $this->paginate = [ 'maxLimit' => 5 ];
        $this->set('Controles', $this->paginate($query));
        $this->set('separacoes_id', $separacoes_id);

        $controle = $this->Controle->newEntity();
        if ($this->request->is('post')) {
            $controle = $this->Controle->patchEntity($controle, $this->request->data);
            $controle->set( ['fk_separacoes' => $separacoes_id] );

            if ($this->Controle->save($controle)) {
                $this->Flash->success('O controle foi salvo.');
                return $this->redirect(['action' => 'list_add', $separacoes_id]);
            } else {
                $this->Flash->error('O controle não pôde ser salvo, por favor, tente novamente.');
            }
        }
        $this->set(compact('controle'));
        $this->set('_serialize', ['controle']);
    }

    /**
    * DeletNoReturn method
    * 
    * @param  id, separacoes_id 
    * @author Leonardo Cavalcante do Prado
    * @return the redirect action
    */
    public function deleteNoReturn($id = null, $separacoes_id = null)
    {
        $this->loadModel('Tetraciclina');
        $this->loadModel('Amostrarepasse');
        $this->loadModel('Analiseflorescencia');
        $this->loadModel('Tamanhocefalotorax');

        $this->request->allowMethod(['post', 'delete']);
        $controle = $this->Controle->get($id);

        $contTetraciclina = $this->Tetraciclina->find('all')->where(['fk_controle' => $id])->count();
        $contAmostraRepasse = $this->Amostrarepasse->find('all')->where(['fk_controle' => $id])->count();
        $contAnaliseFlorescencia = $this->Analiseflorescencia->find('all')->where(['fk_controle' => $id])->count();
        $contTamanhoCefalotorax = $this->Tamanhocefalotorax->find('all')->where(['fk_controle' => $id])->count();

        if ($contTetraciclina == 0 && $contAmostraRepasse == 0 && $contAnaliseFlorescencia == 0 && $contTamanhoCefalotorax == 0 && $this->Controle->delete($controle)) {
            $this->Flash->success('O controle foi deletado.');
        } else {
            $this->Flash->error('O controle não pôde ser deletado, por favor, tente novamente');
        }
        return $this->redirect(['action' => 'list_add', $separacoes_id]);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('controle', $this->paginate($this->Controle));
        $this->set('_serialize', ['controle']);
    }

    /**
     * View method
     *
     * @param string|null $id Controle id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null, $separacoes_id = null)
    {
        $controle = $this->Controle->get($id, [
            'contain' => []
        ]);
        $this->set('separacoes_id', $separacoes_id);
        $this->set('controle', $controle);
        $this->set('_serialize', ['controle']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controle = $this->Controle->newEntity();
        if ($this->request->is('post')) {
            $controle = $this->Controle->patchEntity($controle, $this->request->data);
            if ($this->Controle->save($controle)) {
                $this->Flash->success('The controle has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controle could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controle'));
        $this->set('_serialize', ['controle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Controle id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controle = $this->Controle->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controle = $this->Controle->patchEntity($controle, $this->request->data);
            if ($this->Controle->save($controle)) {
                $this->Flash->success('The controle has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The controle could not be saved. Please, try again.');
            }
        }
        $this->set(compact('controle'));
        $this->set('_serialize', ['controle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Controle id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controle = $this->Controle->get($id);
        if ($this->Controle->delete($controle)) {
            $this->Flash->success('The separaco has been deleted.');
        } else {
            $this->Flash->error('The separaco could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
