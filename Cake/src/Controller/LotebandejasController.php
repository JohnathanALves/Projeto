<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lotebandejas Controller
 *
 * @property \App\Model\Table\LotebandejasTable $Lotebandejas */
class LotebandejasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function viewAllInfo($id = null)
    {
        $this->loadModel('Alimentacao');

        $alimeRecente = $this->Alimentacao->find('all')->where(['fk_lotebandejas' => $id]);

        $lotebandeja = $this->Lotebandejas->get($id, [
            'contain' => []
        ]);
        
        //$this->paginate = [ 'maxLimit' => 3, 'order' => ['Ovos.data_origem_dos_ovos' => 'desc', 'Aliquota.n_aliquota' => 'desc'] ];   
        $this->set('alimentacao', $this->paginate($alimeRecente));
        
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
                $this->Flash->success('The lotebandeja has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotebandeja could not be saved. Please, try again.');
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
                $this->Flash->success('The lotebandeja has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotebandeja could not be saved. Please, try again.');
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
        
        $this->request->allowMethod(['post', 'delete']);
        $alimentacao = $this->Alimentacao->find('all')->where(['fk_lotebandejas' => $id])->count();;
        $lotebandeja = $this->Lotebandejas->get($id);
        if ($alimentacao == 0 && $this->Lotebandejas->delete($lotebandeja)) {
            $this->Flash->success('O lote de bandejas foi removido com sucesso.');
        } else {
            $this->Flash->error('Não é possível apagar esse lote. Remova todas os cadastros de alimentação e tente novamente.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
