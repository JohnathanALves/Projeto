<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lotegaiolas Controller
 *
 * @property \App\Model\Table\LotegaiolasTable $Lotegaiolas */
class LotegaiolasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('lotegaiolas', $this->paginate($this->Lotegaiolas));
        $this->set('_serialize', ['lotegaiolas']);
    }

    /**
     * View method
     *
     * @param string|null $id Lotegaiola id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lotegaiola = $this->Lotegaiolas->get($id, [
            'contain' => []
        ]);
        $this->set('lotegaiola', $lotegaiola);
        $this->set('_serialize', ['lotegaiola']);
    }
    
     public function view_All_Info($fk_lotegaiolas = null,$codigo_lote)
    {
        $this->loadModel('producaoovos');
        $this->loadModel('mortalidadespupas');

        $producaoovos = $this->producaoovos->find('all')->where(['fk_lotegaiolas' => $fk_lotegaiolas]);
        //$lotegaiola  =  $this->Lotegaiolas->find('all')->where(['codigo_lote' => $codigo_lote]);  // alterar
        $lotegaiola = $codigo_lote;

        //$lotegaiola = $this->Lotegaiolas->get($fk_lotegaiolas, [
        //   'contain' => []
        //]);    -- Arrumar

        $mortalidadepupas = $this->mortalidadespupas->find('all')->where(['fk_lotegaiolas' => $fk_lotegaiolas]);
        
        $this->paginate = [ 'maxLimit' => 3 ];   
        $this->set('producaoovos', $this->paginate($producaoovos));
        $this->set('mortalidadespupas', $this->paginate($mortalidadepupas));
        $this->set('lotegaiolas', $codigo_lote);
        $this->set('_serialize', ['lotegaiola']);


    }



    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lotegaiola = $this->Lotegaiolas->newEntity();
        if ($this->request->is('post')) {
            $lotegaiola = $this->Lotegaiolas->patchEntity($lotegaiola, $this->request->data);
            if ($this->Lotegaiolas->save($lotegaiola)) {
                $this->Flash->success('The lotegaiola has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotegaiola could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotegaiola'));
        $this->set('_serialize', ['lotegaiola']);
    }


    public function add_dependant() {
        $this->loadModel('Montagem');
        $lotesDisponiveis = $this->Montagem->find('all')->where(["tipo_bandeja ~*"=>"c"]);
        $this->set('montagem',  $this->paginate($lotesDisponiveis));
        $this->set('_serialize', ['montagem']);
    }

    public function new_lote($id=null) {
        $lotegaiola = $this->Lotegaiolas->newEntity();
        $lotegaiola->set(['codigo_lote'=>$id]);
            if ($this->Lotegaiolas->save($lotegaiola)) {
                $this->Flash->success('Novo lote de gaiolas salvo com sucesso.');
            } else {
                $this->Flash->error('O Lote de gaiolas não pôde ser salvo. Tente novamente.');
            }
    }

    /**
     * Edit method
     *
     * @param string|null $id Lotegaiola id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lotegaiola = $this->Lotegaiolas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lotegaiola = $this->Lotegaiolas->patchEntity($lotegaiola, $this->request->data);
            if ($this->Lotegaiolas->save($lotegaiola)) {
                $this->Flash->success('The lotegaiola has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotegaiola could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotegaiola'));
        $this->set('_serialize', ['lotegaiola']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lotegaiola id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $this->loadModel('producaoovos');
        $this->loadModel('mortalidadespupas');

        //$producaoovos = $this->producaoovos->find('all')->delete()->where(['fk_lotegaiolas' => $id])->execute();
        //$mortalidadepupas = $this->mortalidadespupas->find('all')->delete()->where(['fk_lotegaiolas' => $id])->execute();
        $lotegaiola = $this->Lotegaiolas->get($id);
        if ($this->Lotegaiolas->delete($lotegaiola)) {
            $this->Flash->success('The lotegaiola has been deleted.');
        } else {
            $this->Flash->error('The lotegaiola could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
