<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aliquota Controller
 *
 * @property \App\Model\Table\AliquotaTable $Aliquota */
class AliquotaController extends AppController
{
    /**
     * viewAllInfo method
     * 
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID|null $id Bequer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function viewAllInfo($idBequer = null)
    {

        $this->set('fk_bequer', $idBequer);
        $aliquotaQuery = $this->Aliquota->find('all')->where(['fk_bequer' => $idBequer]);
                
        $this->paginate = [ 'maxLimit' => 15, 'order' => ['Aliquota.n_aliquota' => 'desc'] ];   
        $this->set('aliquota', $this->paginate($aliquotaQuery));
    }

    /**
     * deleteNoReturn method
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID|null idAliquota Aliquota id, UUID|null $idBequer Bequer id, int|null $idBequer Numero do Bequer
     * @return void Redireciona para mesma pagina.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function deleteNoReturn($idAliquota = null,$idBequer = null,$n_bequer = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aliquotum = $this->Aliquota->get($idAliquota);
        if ($this->Aliquota->delete($aliquotum)) {
            $this->Flash->success('Aliquota apagada com sucesso.');
        } else {
            $this->Flash->error('Não foi possível apagar a aliquota. Por favor, tente novamente.');
        }
        return $this->redirect(['action' => 'list_add', $idBequer, $n_bequer]);
    }

    /**
     * list_add method
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param string|null $idBequer Bequer id, string|null $idBequer Numero do Bequer
     * @return void Redireciona para mesma pagina.
     */
    public function list_add($idBequer = null,$n_bequer = null)
    {  
        $aliquotaQuery = $this->Aliquota->find('all')->where(['fk_bequer' => $idBequer]);
        $this->paginate = [ 'maxLimit' => 3 ];
        $this->set('ListAliquota', $this->paginate($aliquotaQuery));

        $aliquotum = $this->Aliquota->newEntity();
        $this->set('n_bequer', $n_bequer);
        if ($this->request->is('post')) {
            $aliquotum = $this->Aliquota->patchEntity($aliquotum, $this->request->data);
            $aliquotum->set([
                'fk_bequer' => $idBequer
            ]);
            if ($this->Aliquota->save($aliquotum)) {
                $this->Flash->success('Aliquota adicionado com sucesso.');
                return $this->redirect(['action' => 'list_add', $idBequer, $n_bequer]);
            } else {
                $this->Flash->error('Não foi possível salvar a aliquota. Por favor, tente novamente.');
            }
        }
        $this->set(compact('aliquotum'));
        $this->set('_serialize', ['aliquotum']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('aliquota', $this->paginate($this->Aliquota));
        $this->set('_serialize', ['aliquota']);
    }

    /**
     * View method
     *
     * @param string|null $id Aliquotum id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aliquotum = $this->Aliquota->get($id, [
            'contain' => []
        ]);
        $this->set('aliquotum', $aliquotum);
        $this->set('_serialize', ['aliquotum']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aliquotum = $this->Aliquota->newEntity();
        if ($this->request->is('post')) {
            $aliquotum = $this->Aliquota->patchEntity($aliquotum, $this->request->data);
            if ($this->Aliquota->save($aliquotum)) {
                $this->Flash->success('The aliquotum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The aliquotum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('aliquotum'));
        $this->set('_serialize', ['aliquotum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aliquotum id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aliquotum = $this->Aliquota->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aliquotum = $this->Aliquota->patchEntity($aliquotum, $this->request->data);
            if ($this->Aliquota->save($aliquotum)) {
                $this->Flash->success('The aliquotum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The aliquotum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('aliquotum'));
        $this->set('_serialize', ['aliquotum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aliquotum id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aliquotum = $this->Aliquota->get($id);
        if ($this->Aliquota->delete($aliquotum)) {
            $this->Flash->success('The aliquotum has been deleted.');
        } else {
            $this->Flash->error('The aliquotum could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
