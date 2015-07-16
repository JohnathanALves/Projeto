<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;


/**
 * Lotebandejas Controller
 *
 * @property \App\Model\Table\LotebandejasTable $Lotebandejas */
class LotebandejasController extends AppController
{
    /**
     * viewAllInfo method
     * 
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID $idlotebandejas Primary key loteBandejas.
     * @return void
     */
    public function viewAllInfo($idlotebandejas = null)
    {
        Time::$defaultLocale = 'pt-BR';
        $this->loadModel('Alimentacao');
        $alimeQuery = $this->Alimentacao->find('all')->where(['fk_lotebandejas' => $idlotebandejas]);
        $lotebandeja = $this->Lotebandejas->get($idlotebandejas, [
            'contain' => []
        ]);
        
        $this->paginate = [ 'maxLimit' => 11 ];   
        $this->set('alimentacao', $this->paginate($alimeQuery));
        $this->set('lotebandeja', $lotebandeja);
        $this->set('_serialize', ['lotebandeja']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('lotebandejas', $this->paginate($this->Lotebandejas));
        $this->set('_serialize', ['lotebandejas']);
    }

    /**
     * View method
     *
     * @param string|null $id Lotebandeja id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lotebandeja = $this->Lotebandejas->get($id, [
            'contain' => []
        ]);
        $this->set('lotebandeja', $lotebandeja);
        $this->set('_serialize', ['lotebandeja']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lotebandeja = $this->Lotebandejas->newEntity();
        if ($this->request->is('post')) {
            $lotebandeja = $this->Lotebandejas->patchEntity($lotebandeja, $this->request->data);
            if ($this->Lotebandejas->save($lotebandeja)) {
                $this->Flash->success('Cadastro de lote da bandeja adicionado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Não foi possível adicionar o cadastro de lote da bandeja. Por favor, tente novamente.');
            }
        }
        $this->set(compact('lotebandeja'));
        $this->set('_serialize', ['lotebandeja']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lotebandeja id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lotebandeja = $this->Lotebandejas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lotebandeja = $this->Lotebandejas->patchEntity($lotebandeja, $this->request->data);
            if ($this->Lotebandejas->save($lotebandeja)) {
                $this->Flash->success('Cadastro de lote da bandeja editado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Não foi possível editar o cadastro de lote da bandeja. Por favor, tente novamente.');
            }
        }
        $this->set(compact('lotebandeja'));
        $this->set('_serialize', ['lotebandeja']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lotebandeja id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->loadModel('Alimentacao');
        $this->loadModel('Separacoes');

        $this->request->allowMethod(['post', 'delete']);
        $lotebandeja = $this->Lotebandejas->get($id);

        $alimentacaoCount = $this->Alimentacao->find('all')->where(['fk_lotebandejas' => $id])->count();
        $separacaoCount = $this->Separacoes->find('all')->where(['fk_lotebandejas' => $id])->count();
        
        if ($alimentacaoCount == 0 && $separacaoCount == 0 && $this->Lotebandejas->delete($lotebandeja)) {
            $this->Flash->success('Cadastro de lote da bandeja removido com sucesso.');
        } else {
            $this->Flash->error('Não foi possível remover o cadastro de lote da bandeja.Remova todas os cadastros de alimentação e separação e tente novamente.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
