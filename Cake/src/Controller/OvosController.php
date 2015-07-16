<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Ovos Controller
 *
 * @property \App\Model\Table\OvosTable $Ovos */
class OvosController extends AppController
{
    /**
     * viewAllInfo method
     * 
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID|null $id Bequer id.
     * @return void
     */
    public function viewAllInfo($idBequer = null)
    {
    	Time::$defaultLocale = 'pt-BR';
        $this->set('fk_bequer', $idBequer);
        $ovosQuery = $this->Ovos->find('all')->where(['fk_bequer' => $idBequer]);
                
        $this->paginate = [ 'maxLimit' => 15, 'order' => ['Ovos.data_origem_dos_ovos' => 'desc'] ];   
        $this->set('ovos', $this->paginate($ovosQuery));
    }

    /**
     * deleteNoReturn method
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID|null idAliquota Aliquota id, UUID|null $idBequer Bequer id, int|null $idBequer Numero do Bequer
     * @return void Redireciona para mesma pagina.
     */
    public function deleteNoReturn($idOvo = null,$idBequer = null,$n_bequer = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ovo = $this->Ovos->get($idOvo);
        if ($this->Ovos->delete($ovo)) {
            $this->Flash->success('Ovo apagado com sucesso.');
        } else {
            $this->Flash->error('Não foi possível apagar o ovo. Por favor, tente novamente.');
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
        Time::$defaultLocale = 'pt-BR';
        $ovosQuery = $this->Ovos->find('all')->where(['fk_bequer' => $idBequer]);
        $this->paginate = [ 'maxLimit' => 3 ];
        $this->set('ListOvos', $this->paginate($ovosQuery));

        $ovo = $this->Ovos->newEntity();
        $this->set('n_bequer', $n_bequer);
        if ($this->request->is('post')) {
            $ovo = $this->Ovos->patchEntity($ovo, $this->request->data);
            $ovo->set(['fk_bequer' => $idBequer]);
            if ($this->Ovos->save($ovo)) {
                $this->Flash->success('Ovo salvo com sucesso.');
                return $this->redirect(['action' => 'list_add', $idBequer, $n_bequer]);
            } else {
                $this->Flash->error('Não foi possível salvar o ovo. Por favor, tente novamente.');
            }
        }
        $this->set(compact('ovo'));
        $this->set('_serialize', ['ovo']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ovos', $this->paginate($this->Ovos));
        $this->set('_serialize', ['ovos']);
    }

    /**
     * View method
     *
     * @param string|null $id Ovo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ovo = $this->Ovos->get($id, [
            'contain' => []
        ]);
        $this->set('ovo', $ovo);
        $this->set('_serialize', ['ovo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ovo = $this->Ovos->newEntity();
        if ($this->request->is('post')) {
            $ovo = $this->Ovos->patchEntity($ovo, $this->request->data);
            if ($this->Ovos->save($ovo)) {
                $this->Flash->success('The ovo has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ovo could not be saved. Please, try again.');
            }
        }
        $this->set(compact('ovo'));
        $this->set('_serialize', ['ovo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ovo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ovo = $this->Ovos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ovo = $this->Ovos->patchEntity($ovo, $this->request->data);
            if ($this->Ovos->save($ovo)) {
                $this->Flash->success('The ovo has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ovo could not be saved. Please, try again.');
            }
        }
        $this->set(compact('ovo'));
        $this->set('_serialize', ['ovo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ovo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ovo = $this->Ovos->get($id);
        if ($this->Ovos->delete($ovo)) {
            $this->Flash->success('The ovo has been deleted.');
        } else {
            $this->Flash->error('The ovo could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
