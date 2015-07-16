<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;

/**
 * Amostrarepasse Controller
 *
 * @property \App\Model\Table\AmostrarepasseTable $Amostrarepasse */
class AmostrarepasseController extends AppController
{

    /**
    * List add
    * 
    * @param controle_id 
    * @author Leonardo Cavalcante do Prado, Angelo Gustavo, Gabriel Rafal
    * @return void or, if a post method is called, the redirect action
    */
    public function list_add( $controle_id = null , $separacao_id = null) 
    {
        $query = $this->Amostrarepasse->find('all')->where( ['fk_controle' => $controle_id] );

        $this->paginate = [ 'maxLimit' => 5 ];
        $this->set('amostras', $this->paginate($query));
        $this->set('controle_id', $controle_id);
        $this->set('separacao_id', $separacao_id);
        
        $amostrarepasse = $this->Amostrarepasse->newEntity();

        $validator = new Validator();

        $validator->add(
            'n_amostra', 'custom', [
                'rule' => function($num_amostra) {
                    $query = $this->Amostrarepasse->find('All')->where( ['n_amostra' => $num_amostra] );
                    if( $query->isEmpty() )
                        return true;
                    else 
                        return false;
                } 
            ] 
        );

        if ($this->request->is('post')) {
            $amostrarepasse = $this->Amostrarepasse->patchEntity($amostrarepasse, $this->request->data);
            $amostrarepasse->set(['fk_controle' => $controle_id]);

            $error = $validator->errors($amostrarepasse->toArray());
            
            if (empty($error)) {
                $this->Amostrarepasse->save($amostrarepasse);
                $this->Flash->success('O repasse da amostra foi salvo.');
                return $this->redirect(['action' => 'list_add', $controle_id, $separacao_id]);
            } else {
                $this->Flash->error('O repasse da amostra não pôde ser salvo, por favor, tente novamente.');
            }
        }
        $this->set(compact('amostrarepasse'));
        $this->set('_serialize', ['amostrarepasse']);
    }


    /**
    * DeletNoReturn method
    * 
    * @param  id, controle_id 
    * @author Leonardo Cavalcante do Prado, Angelo Gustavo e Gabriel Rafael
    * @return the redirect action
    */
    public function deleteNoReturn($id = null, $controle_id = null, $separacao_id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amostrarepasse = $this->Amostrarepasse->get($id);
        if ($this->Amostrarepasse->delete($amostrarepasse)) {
            $this->Flash->success('O repasse da amostra foi deletado.');
        } else {
            $this->Flash->error('O repasse da amostra não pôde ser deletado, por favor tente novamente.');
        }
        return $this->redirect( ['action'=> 'list_add', $controle_id, $separacao_id] );
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('amostrarepasse', $this->paginate($this->Amostrarepasse));
        $this->set('_serialize', ['amostrarepasse']);
    }

    /**
     * View method
     *
     * @param string|null $id Amostrarepasse id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $amostrarepasse = $this->Amostrarepasse->get($id, [
            'contain' => []
        ]);
        $this->set('amostrarepasse', $amostrarepasse);
        $this->set('_serialize', ['amostrarepasse']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $amostrarepasse = $this->Amostrarepasse->newEntity();
        if ($this->request->is('post')) {
            $amostrarepasse = $this->Amostrarepasse->patchEntity($amostrarepasse, $this->request->data);
            if ($this->Amostrarepasse->save($amostrarepasse)) {
                $this->Flash->success('The amostrarepasse has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The amostrarepasse could not be saved. Please, try again.');
            }
        }
        $this->set(compact('amostrarepasse'));
        $this->set('_serialize', ['amostrarepasse']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Amostrarepasse id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $amostrarepasse = $this->Amostrarepasse->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amostrarepasse = $this->Amostrarepasse->patchEntity($amostrarepasse, $this->request->data);
            if ($this->Amostrarepasse->save($amostrarepasse)) {
                $this->Flash->success('The amostrarepasse has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The amostrarepasse could not be saved. Please, try again.');
            }
        }
        $this->set(compact('amostrarepasse'));
        $this->set('_serialize', ['amostrarepasse']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Amostrarepasse id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amostrarepasse = $this->Amostrarepasse->get($id);
        if ($this->Amostrarepasse->delete($amostrarepasse)) {
            $this->Flash->success('The amostrarepasse has been deleted.');
        } else {
            $this->Flash->error('The amostrarepasse could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
