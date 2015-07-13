<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;

/**
 * Costagem Controller
 *
 * @property \App\Model\Table\CostagemTable $Costagem */
class CostagemController extends AppController
{

    /**
    * List add
    * 
    * @param separacoes_id 
    * @author Leonardo Cavalcante do Prado
    * @return void or, if a post method is called, the redirect action
    */
    public function list_add( $separacoes_id = null ) 
    {
        $query = $this->Costagem->find('all')->where( ['fk_separacoes' => $separacoes_id] );
        $this->paginate = [ 'maxLimit' => 5 ];
        $this->set('costagens', $this->paginate($query));
        $this->set('separacoes_id', $separacoes_id);
        
        $costagem = $this->Costagem->newEntity();
        $validator = new Validator();

        $validator->add(
            'n_amostra', 'custom', [
                'rule' => function($num_amostra) {
                    $query = $this->Costagem->find('All')->where( ['n_amostra' => $num_amostra] );
                    if( $query->isEmpty() )
                        return true;
                    else 
                        return false;
                } 
            ] 
        );

        if ($this->request->is('post')) {
            $costagem = $this->Costagem->patchEntity($costagem, $this->request->data);
            $costagem->set(['fk_separacoes' => $separacoes_id]);

            $errors = $validator->errors($costagem->toArray());

            if (empty($errors)) {
                $this->Costagem->save($costagem);
                $this->Flash->success('A contagem foi salva.');
                return $this->redirect(['action' => 'list_add', $separacoes_id]);
            } else {
                $this->Flash->error('A contagem não pôde ser salva, por favor, tente novamente.');
            }
        }
        $this->set(compact('costagem'));
        $this->set('_serialize', ['costagem']);
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
        $this->request->allowMethod(['post', 'delete']);
        $costagem = $this->Costagem->get($id);
        if ($this->Costagem->delete($costagem)) {
            $this->Flash->success('A contagem foi deletada.');
        } else {
            $this->Flash->error('A contagem não pôde ser deletada, por favor tente novamente.');
        }
        // return $this->redirect(['action' => 'index']);
        return $this->redirect( ['action'=> 'list_add', $separacoes_id]);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('costagem', $this->paginate($this->Costagem));
        $this->set('_serialize', ['costagem']);
    }

    /**
     * View method
     *
     * @param string|null $id Costagem id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $costagem = $this->Costagem->get($id, [
            'contain' => []
        ]);
        $this->set('costagem', $costagem);
        $this->set('_serialize', ['costagem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $costagem = $this->Costagem->newEntity();
        if ($this->request->is('post')) {
            $costagem = $this->Costagem->patchEntity($costagem, $this->request->data);
            if ($this->Costagem->save($costagem)) {
                $this->Flash->success('The costagem has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The costagem could not be saved. Please, try again.');
            }
        }
        $this->set(compact('costagem'));
        $this->set('_serialize', ['costagem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Costagem id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $costagem = $this->Costagem->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $costagem = $this->Costagem->patchEntity($costagem, $this->request->data);
            if ($this->Costagem->save($costagem)) {
                $this->Flash->success('The costagem has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The costagem could not be saved. Please, try again.');
            }
        }
        $this->set(compact('costagem'));
        $this->set('_serialize', ['costagem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Costagem id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $costagem = $this->Costagem->get($id);
        if ($this->Costagem->delete($costagem)) {
            $this->Flash->success('The costagem has been deleted.');
        } else {
            $this->Flash->error('The costagem could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

