<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lotetransporte Controller
 *
 * @property \App\Model\Table\LotetransporteTable $Lotetransporte */
class LotetransporteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {   
        $this->loadModel('Separacoes');
        $this->set('lotetransporte', $this->paginate($this->Lotetransporte));
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * View method
     *
     * @param string|null $id Lotetransporte id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Separacoes');

        $lotetransporte = $this->Lotetransporte->get($id, [
            'contain' => []
        ]);

        $query = $this->Separacoes->find('all')->where( ['separacoesid' => $lotetransporte->fk_separacao] );

        $this->set('n_separacao', $query->first()->n_separacao);
        $this->set('lotetransporte', $lotetransporte);
        $this->set('_serialize', ['lotetransporte']);
    }


    public function add_inicio() 
    {   
        $this->loadModel('Separacoes');
        $separacoes = $this->Separacoes->find('all');

        $separacoes_list = $separacoes->find('list', [ 'value' => 'separacoesid', 'valueField' => 'n_separacao' ]);
        $this->set('options', $separacoes_list);

        $lotetransporte = $this->Lotetransporte->newEntity();
        if ($this->request->is('post')) {
            $lotetransporte = $this->Lotetransporte->patchEntity($lotetransporte, $this->request->data);

            // adicionando informações padrão

            $lotetransporte->set('data_recebimento', null);
            $lotetransporte->set('hora_chegada_lemi', '00:00');
            $lotetransporte->set('qtd_c25_completas_recebimento', -1);
            $lotetransporte->set('qtd_celulas_incompletas_recebimento', -1);
            $lotetransporte->set('nome_encarregado_montagem_rd11', '');
            $lotetransporte->set('hora_inicio_montagem_rd11', '00:00');
            $lotetransporte->set('hora_termino_montagem_rd11', '00:00');
            $lotetransporte->set('qnt_celula_rd11', -1);
            $lotetransporte->set('qnt_rd11_montadas', -1);
            $lotetransporte->set('qnt_total_machos_enviados', -1);

            if ($this->Lotetransporte->save($lotetransporte)) {
                $this->Flash->success('The lotetransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotetransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotetransporte'));
        $this->set('_serialize', ['lotetransporte']);
    }

    public function add_fim($id = null)
    {
        $lotetransporte = $this->Lotetransporte->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            //adicionando de 1 por 1
            $new_info = $this->request->data('data_recebimento');
            $lotetransporte->set( ['data_recebimento' => $new_info['year'].'-'.$new_info['month'].'-'.$new_info['day']] );

            $new_info = $this->request->data('hora_chegada_lemi');

            $lotetransporte->set( ['hora_chegada_lemi' => $new_info ]);

            $new_info = $this->request->data('qtd_c25_completas_recebimento');
            $lotetransporte->set( ['qtd_c25_completas_recebimento' => $new_info] );

            $new_info = $this->request->data('qtd_celulas_incompletas_recebimento');
            $lotetransporte->set( ['qtd_celulas_incompletas_recebimento' => $new_info] );

            $new_info = $this->request->data('nome_encarregado_montagem_rd11');
            $lotetransporte->set( ['nome_encarregado_montagem_rd11' => $new_info] );

            $new_info = $this->request->data('hora_inicio_montagem_rd11');
            $lotetransporte->set( ['hora_inicio_montagem_rd11' => $new_info] );

            $new_info = $this->request->data('hora_termino_montagem_rd11');
            $lotetransporte->set( ['hora_termino_montagem_rd11' => $new_info] );

            $new_info = $this->request->data('qnt_celula_rd11');
            $lotetransporte->set( ['qnt_celula_rd11' => $new_info] );

            $new_info = $this->request->data('qnt_rd11_montadas');
            $lotetransporte->set( ['qnt_rd11_montadas' => $new_info] );

            $new_info = $this->request->data('qnt_total_machos_enviados');
            $lotetransporte->set( ['qnt_total_machos_enviados' => $new_info] );

            if ($this->Lotetransporte->save($lotetransporte)) {
                $this->Flash->success('The lotetransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotetransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotetransporte'));
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lotetransporte = $this->Lotetransporte->newEntity();
        if ($this->request->is('post')) {
            $lotetransporte = $this->Lotetransporte->patchEntity($lotetransporte, $this->request->data);
            if ($this->Lotetransporte->save($lotetransporte)) {
                $this->Flash->success('The lotetransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotetransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotetransporte'));
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lotetransporte id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lotetransporte = $this->Lotetransporte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lotetransporte = $this->Lotetransporte->patchEntity($lotetransporte, $this->request->data);
            if ($this->Lotetransporte->save($lotetransporte)) {
                $this->Flash->success('The lotetransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The lotetransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('lotetransporte'));
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lotetransporte id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lotetransporte = $this->Lotetransporte->get($id);
        if ($this->Lotetransporte->delete($lotetransporte)) {
            $this->Flash->success('The lotetransporte has been deleted.');
        } else {
            $this->Flash->error('The lotetransporte could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
