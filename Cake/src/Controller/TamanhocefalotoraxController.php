<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;

/**
 * Tamanhocefalotorax Controller
 *
 * @property \App\Model\Table\TamanhocefalotoraxTable $Tamanhocefalotorax */
class TamanhocefalotoraxController extends AppController
{
     /**
     * List_add method
     *
     * @author Leonardo Cavalcante do Prado, Angelo Gustavo, Gabriel Rafael
    */
    public function list_add($controle_id = null, $separacao_id = null) 
    {
        $query = $this->Tamanhocefalotorax->find('all')->where( ['fk_controle' => $controle_id] );
        $this->paginate = [ 'maxLimit' => 5 ];
        $this->set('list_tamanhocefalotorax', $this->paginate($query));
        $this->set('controle_id', $controle_id);
        $this->set('separacao_id', $separacao_id);

        $validator = new Validator();

        $validator->add(
            'n_replicata', 'custom', [
                'rule' => function($num_replicata) {
                    $query = $this->Tamanhocefalotorax->find('All')->where( ['n_replicata' => $num_replicata] );
                    if( $query->isEmpty() )
                        return true;
                    else 
                        return false;
                } 
            ] 
        );

        $tamanhocefalotorax = $this->Tamanhocefalotorax->newEntity();

        if ($this->request->is('post')) {
            $tamanhocefalotorax = $this->Tamanhocefalotorax->patchEntity($tamanhocefalotorax, $this->request->data);
            $tamanhocefalotorax->set( ['fk_controle' => $controle_id] );

            $error = $validator->errors($tamanhocefalotorax->toArray());

            if (empty($error)) {
                $this->Tamanhocefalotorax->save($tamanhocefalotorax);
                $this->Flash->success('O registro de tamanho do cefalotórax foi salvo.');
                return $this->redirect(['action' => 'list_add', $controle_id, $separacao_id]);
            } else {
                $this->Flash->error('O registro de tamanho do cefalotórax não pôde ser salvo, por favor, tente novamente.');
            }
        }
        $this->set(compact('tamanhocefalotorax'));
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * DeleteNoReturn method
     *
     * @author Leonardo Cavalcante do Prado, Angelo Gustavo, Gabriel Rafael
     * @param string|null $id Tamanhocefalotorax id.
     * @return void Redirects to list_add.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function deleteNoReturn($id = null, $controle_id = null, $separacao_id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tamanhocefalotorax = $this->Tamanhocefalotorax->get($id);
        if ($this->Tamanhocefalotorax->delete($tamanhocefalotorax)) {
            $this->Flash->success('O registro de tamanho do cefalotórax foi deletado.');
        } else {
            $this->Flash->error('O registro de tamanho do cefalotórax não pôde ser deletada, por favor, tente novamente.');
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
        $this->set('tamanhocefalotorax', $this->paginate($this->Tamanhocefalotorax));
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * View method
     *
     * @param string|null $id Tamanhocefalotorax id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tamanhocefalotorax = $this->Tamanhocefalotorax->get($id, [
            'contain' => []
        ]);
        $this->set('tamanhocefalotorax', $tamanhocefalotorax);
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tamanhocefalotorax = $this->Tamanhocefalotorax->newEntity();
        if ($this->request->is('post')) {
            $tamanhocefalotorax = $this->Tamanhocefalotorax->patchEntity($tamanhocefalotorax, $this->request->data);
            if ($this->Tamanhocefalotorax->save($tamanhocefalotorax)) {
                $this->Flash->success('The tamanhocefalotorax has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tamanhocefalotorax could not be saved. Please, try again.');
            }
        }
        $this->set(compact('tamanhocefalotorax'));
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tamanhocefalotorax id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tamanhocefalotorax = $this->Tamanhocefalotorax->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tamanhocefalotorax = $this->Tamanhocefalotorax->patchEntity($tamanhocefalotorax, $this->request->data);
            if ($this->Tamanhocefalotorax->save($tamanhocefalotorax)) {
                $this->Flash->success('The tamanhocefalotorax has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tamanhocefalotorax could not be saved. Please, try again.');
            }
        }
        $this->set(compact('tamanhocefalotorax'));
        $this->set('_serialize', ['tamanhocefalotorax']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tamanhocefalotorax id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tamanhocefalotorax = $this->Tamanhocefalotorax->get($id);
        if ($this->Tamanhocefalotorax->delete($tamanhocefalotorax)) {
            $this->Flash->success('The tamanhocefalotorax has been deleted.');
        } else {
            $this->Flash->error('The tamanhocefalotorax could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
