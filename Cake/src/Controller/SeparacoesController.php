<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\View\Helper\FormHelper;
/**
 * Separacoes Controller
 *
 * @property \App\Model\Table\SeparacoesTable $Separacoes */
class SeparacoesController extends AppController
{
    public $helpers = ['Form'];
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('separacoes', $this->paginate($this->Separacoes));
        $this->set('_serialize', ['separacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Separaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Lotebandejas');
        $tmp = $this->Separacoes->get($id);

        $Lote = $this->Lotebandejas->get( $this->Separacoes->get($id)->fk_lotebandejas );
        $this->set('lote_cod', $Lote->codigo);

        $separaco = $this->Separacoes->get($id, [
            'contain' => []
        ]);

        $this->set('separaco', $separaco);
        $this->set('_serialize', ['separaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Lotebandejas');
        $lotes = $this->Lotebandejas->find('all');

        $lotesList = $lotes->find('list', [ 'value' => 'lotebandejasid', 'valueField' => 'codigo' ]);
        $this->set('options', $lotesList);

        $separaco = $this->Separacoes->newEntity();

        if ($this->request->is('post')) {
            $separaco = $this->Separacoes->patchEntity($separaco, $this->request->data);

            $time_separacao = $this->request->data('time_separacao');
            
            $separaco->set(['data_separacao' => $time_separacao['year'].'-'.$time_separacao['month'].'-'.$time_separacao['day']]);
            $separaco->set(['hora_finalizacao' => $time_separacao['hour'].':'.$time_separacao['minute']]);

            if ($this->Separacoes->save($separaco)) {
                $this->Flash->success('The separaco has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The separaco could not be saved. Please, try again.');
            }
        }
        $this->set(compact('separaco'));
        $this->set('_serialize', ['separaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Separaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $separaco = $this->Separacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $separaco = $this->Separacoes->patchEntity($separaco, $this->request->data);
            if ($this->Separacoes->save($separaco)) {
                $this->Flash->success('The separaco has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The separaco could not be saved. Please, try again.');
            }
        }
        $this->set(compact('separaco'));
        $this->set('_serialize', ['separaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Separaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $separaco = $this->Separacoes->get($id);
        if ($this->Separacoes->delete($separaco)) {
            $this->Flash->success('The separaco has been deleted.');
        } else {
            $this->Flash->error('The separaco could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
