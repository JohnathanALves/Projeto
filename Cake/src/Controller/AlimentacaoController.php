<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Alimentacao Controller
 *
 * @property \App\Model\Table\AlimentacaoTable $Alimentacao */
class AlimentacaoController extends AppController
{

    /**
     * viewAllInfo method
     * 
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID|null $fk_lotebandejas Foreign key lotebandejas.
     * @return void
     */
    public function viewAllInfo($fk_lotebandejas = null)
    {
        Time::$defaultLocale = 'pt-BR';
        $this->set('fk_lotebandejas', $fk_lotebandejas);
        $alimentacaoQuery = $this->Alimentacao->find('all')->where(['fk_lotebandejas' => $fk_lotebandejas]);
                
        $this->paginate = [ 'maxLimit' => 15, 'order' => ['Ovos.data_origem_dos_ovos' => 'desc'] ];   
        $this->set('alimentacao', $this->paginate($alimentacaoQuery));
        
    }

    /**
     * deleteNoReturn method
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID|null idAlimentacao Alimentacao id, UUID|null $fk_lotebandejas Foreign key lotebandejas, int|null $n_bandeja Numero da bandeja
     * @return void Redireciona para mesma pagina.
     */
    public function deleteNoReturn($idAlimentacao = null,$fk_lotebandejas = null,$n_bandeja = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alimentacao = $this->Alimentacao->get($idAlimentacao);
        if ($this->Alimentacao->delete($alimentacao)) {
            $this->Flash->success('Cadastro de Alimentação apagado com sucesso.');
        } else {
            $this->Flash->error('Não foi possível apagar o cadastro de alimentação. Por favor, tente novamente.');
        }
        return $this->redirect(['action' => 'list_add', $fk_lotebandejas, $n_bandeja]);
    }

    /**
     * list_add method
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID|null idAlimentacao Alimentacao id, UUID|null $fk_lotebandejas Foreign key lotebandejas, int|null $n_bandeja Numero da bandeja
     * @return void Redireciona para mesma pagina.
     */
    public function list_add($fk_lotebandejas = null,$n_bandeja = null)
    {  
        Time::$defaultLocale = 'pt-BR';
        $alimentacaoQuery = $this->Alimentacao->find('all')->where(['fk_lotebandejas' => $fk_lotebandejas]);
        $this->paginate = [ 'maxLimit' => 3 ];
        $this->set('ListAlimentacao', $this->paginate($alimentacaoQuery));

        $alimentacao = $this->Alimentacao->newEntity();
        $this->set('n_bandeja', $n_bandeja);
        if ($this->request->is('post')) {
            $alimentacao = $this->Alimentacao->patchEntity($alimentacao, $this->request->data);
            $alimentacao->set([
                'fk_lotebandejas' => $fk_lotebandejas
            ]);
            if ($this->Alimentacao->save($alimentacao)) {
                $this->Flash->success('Cadastro de Alimentação adicionado com sucesso.');
                return $this->redirect(['action' => 'list_add', $fk_lotebandejas, $n_bandeja]);
            } else {
                $this->Flash->error('Não foi possível adicionar o cadastro de alimentação. Por favor, tente novamente.');
            }
        }
        $this->set(compact('alimentacao'));
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('alimentacao', $this->paginate($this->Alimentacao));
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Alimentacao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alimentacao = $this->Alimentacao->get($id, [
            'contain' => []
        ]);
        $this->set('alimentacao', $alimentacao);
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alimentacao = $this->Alimentacao->newEntity();
        if ($this->request->is('post')) {
            $alimentacao = $this->Alimentacao->patchEntity($alimentacao, $this->request->data);
            if ($this->Alimentacao->save($alimentacao)) {
                $this->Flash->success('Cadastro de Alimentação adicionado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Não foi possível adicionar o cadastro de alimentação. Por favor, tente novamente.');
            }
        }
        $this->set(compact('alimentacao'));
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alimentacao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alimentacao = $this->Alimentacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alimentacao = $this->Alimentacao->patchEntity($alimentacao, $this->request->data);
            if ($this->Alimentacao->save($alimentacao)) {
                $this->Flash->success('Cadastro de Alimentação editado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Não foi possível editar esse cadastro de alimentação. Por favor, tente novamente.');
            }
        }
        $this->set(compact('alimentacao'));
        $this->set('_serialize', ['alimentacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alimentacao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alimentacao = $this->Alimentacao->get($id);
        if ($this->Alimentacao->delete($alimentacao)) {
            $this->Flash->success('The alimentacao has been deleted.');
        } else {
            $this->Flash->error('The alimentacao could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
