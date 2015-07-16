<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Bequer Controller
 *
 * @property \App\Model\Table\BequerTable $Bequer */
class BequerController extends AppController
{
    /**
     * viewAllInfo method
     * 
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param string|null $id Bequer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function viewAllInfo($id = null)
    {
        Time::$defaultLocale = 'pt-BR';
        $this->loadModel('Ovos');
        $this->loadModel('Aliquota');
        $ovosRecentes = $this->Ovos->find('all')->where(['fk_bequer' => $id]);
        $aliquotaRecentes = $this->Aliquota->find('all')->where(['fk_bequer' => $id]);
        $bequer = $this->Bequer->get($id, [
            'contain' => []
        ]);
        
        $this->paginate = [ 'maxLimit' => 3, 'order' => ['Ovos.data_origem_dos_ovos' => 'desc', 'Aliquota.n_aliquota' => 'desc'] ];   
        $this->set('ovos', $this->paginate($ovosRecentes));
        $this->set('aliquota', $this->paginate($aliquotaRecentes));
        $this->set('bequer', $bequer);
        $this->set('_serialize', ['bequer']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        Time::$defaultLocale = 'pt-BR';
        $this->set('bequer', $this->paginate($this->Bequer));
        $this->set('_serialize', ['bequer']);
    }

    /**
     * View method
     *
     * @param string|null $id Bequer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bequer = $this->Bequer->get($id, [
            'contain' => []
        ]);
        $this->set('bequer', $bequer);
        $this->set('_serialize', ['bequer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bequer = $this->Bequer->newEntity();
        if ($this->request->is('post')) {
            $bequer = $this->Bequer->patchEntity($bequer, $this->request->data);
            
            $fim_eclosao = $this->request->data('fim_eclosao');
            $inicio_eclosao = $this->request->data('inicio_eclosao');

            $bequer->set(['hora_fim_eclosao' => $fim_eclosao['hour'].':'.$fim_eclosao['minute'] ]);
            $bequer->set(['data_fim_eclosao' => $fim_eclosao['year'].'-'.$fim_eclosao['month'].'-'.$fim_eclosao['day'] ]);
            $bequer->set(['hora_inicio_eclosao' => $inicio_eclosao['hour'].':'.$inicio_eclosao['minute'] ]);
            $bequer->set(['data_inicio_eclosao' => $inicio_eclosao['year'].'-'.$inicio_eclosao['month'].'-'.$inicio_eclosao['day'] ]);

            if ($this->Bequer->save($bequer)) {
                $this->Flash->success('O béquer foi salvo com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Não foi possível salvar esse béquer.');
            }
        }
        $this->set(compact('bequer'));
        $this->set('_serialize', ['bequer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bequer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bequer = $this->Bequer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bequer = $this->Bequer->patchEntity($bequer, $this->request->data);
            if ($this->Bequer->save($bequer)) {
                $this->Flash->success('O béquer foi salvo com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Não foi possível salvar esse béquer.');
            }
        }
        $this->set(compact('bequer'));
        $this->set('_serialize', ['bequer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bequer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->loadModel('Ovos');
        $this->loadModel('Aliquota');

        $this->request->allowMethod(['post', 'delete']);
        $bequer = $this->Bequer->get($id);
        $ovos = $this->Ovos->find('all')->where(['fk_bequer' => $id])->count();
        $aliquota = $this->Aliquota->find('all')->where(['fk_bequer' => $id])->count();
        
        if ($ovos == 0 && $aliquota == 0 && $this->Bequer->delete($bequer)) {
            $this->Flash->success('O béquer foi removido com sucesso.');
        } else {
            $this->Flash->error('Não foi possível apagar esse béquer. Remova todas as alíquotas e ovos e tente novamente.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
