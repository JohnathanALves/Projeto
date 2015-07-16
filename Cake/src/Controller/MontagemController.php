<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Montagem Controller
 *
 * @property \App\Model\Table\MontagemTable $Montagem */
class MontagemController extends AppController
{
	/**
     * viewAllInfo method
     * 
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID $fk_lotebandejas Foreign key loteBandejas.
     * @return void
     */
    public function viewAllInfo($fk_lotebandejas = null)
    {
        Time::$defaultLocale = 'pt-BR';
        $this->loadModel('bequer');
        $this->loadModel('lotebandejas');

        $montagemQuery = $this->Montagem->find('all', ['limit' => 1])->where(['fk_lotebandejas' => $fk_lotebandejas]);
        $loteQuery = $this->lotebandejas->find('all')->where(['lotebandejasid' => $fk_lotebandejas]);
        $bequerJoin = $this->bequer->find('all')->join([
        'table' => 'montagem',
        'alias' => 'c',
        'type' => 'INNER',
        'conditions' => [
        		'c.fk_lotebandejas' => $fk_lotebandejas,
                'c.fk_bequer = Bequer.bequerid',
            ]
        ]);

        $this->paginate = [ 'maxLimit' => 4 ];   
        $this->set('bequer', $this->paginate($bequerJoin));
        
        $this->set('lotebandejas', $loteQuery);
        $this->set('montagem', $montagemQuery );
        $this->set('_serialize', ['montagem']);
    }
    
    /**
     * Index method
     *
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @return void
     */
    public function indexTodos()
    {
        Time::$defaultLocale = 'pt-BR';
        $this->set('montagem', $this->paginate($this->Montagem->find('all') ));
        $this->set('_serialize', ['montagem']);
    }

    /**
     * Index method
     *
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @return void
     */
    public function index()
    {
        Time::$defaultLocale = 'pt-BR';
        $this->set('montagem', $this->paginate($this->Montagem->find('all')->distinct(['fk_lotebandejas'])));
        $this->set('_serialize', ['montagem']);
    }

    /**
     * View method
     *
     * @param string|null $id Montagem id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $montagem = $this->Montagem->get($id, [
            'contain' => []
        ]);
        $this->set('montagem', $montagem);
        $this->set('_serialize', ['montagem']);
    }

    /**
     * Add method
     *
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        Time::$defaultLocale = 'pt-BR';
        $this->loadModel('Lotebandejas');
        $this->loadModel('Bequer');

        //$lotesRecentes = $this->Lotebandejas->find('all', ['fields' => 'codigo']);
        $lotesDisponiveis = $this->Lotebandejas->find('all')->join([
        'table' => 'montagem',
        'type' => 'LEFT',
        'alias' => 'c',
        'conditions' => [
                'c.fk_lotebandejas = lotebandejas.lotebandejasid',
            ]
        ])->where(['c.fk_bequer IS NULL']);

        $lotesList = $lotesDisponiveis->find('list', ['value' => 'lotebandejasid','valueField' => 'codigo' ]);
        $this->set('optionLotes', $lotesList);

        $bequerList = $this->Bequer->find('list', [ 'value' => 'bequerid','valueField' => 'n_bequer' , 'order' => ['n_bequer' => 'desc']]);
        $this->set('optionBequer', $bequerList);

        $montagem = $this->Montagem->newEntity();
        if ($this->request->is('post')) {
            $arrayBequer = $this->request->data('list_bequer');
            if($arrayBequer == '')
                $this->Flash->error('Por favor selecione um béquer.');
            else
            {
                $lotebandejasForm = $this->request->data('fk_lotebandejas');
                $lotebandejasQuery = $this->Lotebandejas->get($lotebandejasForm);
                $tipoBandejaConst= $this->request->data('tipo_bandeja').$lotebandejasQuery->codigo;
                foreach ($arrayBequer as $value) {
                    $montagem = $this->Montagem->newEntity();
                    $montagem = $this->Montagem->patchEntity($montagem, $this->request->data);
                    $montagem->set(['fk_bequer' => $value ]);
                    $montagem->set(['tipo_bandeja' => $tipoBandejaConst]);

                    if ($this->Montagem->save($montagem)) {
                        $this->Flash->success('Cadastro de montagem adicionado com sucesso.');
                    } else {
                        $this->Flash->error('Não foi possível adicionar o cadastro de montagem. Por favor, tente novamente.');
                    }
                }
                return $this->redirect(['action' => 'index']);
            }
            
        }
        $this->set(compact('montagem'));
        $this->set('_serialize', ['montagem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Montagem id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $montagem = $this->Montagem->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $montagem = $this->Montagem->patchEntity($montagem, $this->request->data);
            if ($this->Montagem->save($montagem)) {
                $this->Flash->success('Cadastro de montagem editado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Não foi possível editar o cadastro de montagem. Por favor, tente novamente.');
            }
        }
        $this->set(compact('montagem'));
        $this->set('_serialize', ['montagem']);
    }

    /**
     * Delete method
     *
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param string|null $id Montagem id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function deleteAll($id = null)
    {
        //$this->deleteAll(['fk_lotebandejas' => $id])

        $this->request->allowMethod(['post', 'delete']);
        //$montagem = $this->Montagem->get($id);
        $montagemArray = $this->Montagem->find('all')->where(['fk_lotebandejas' => $id]);
        foreach ($montagemArray as $value)
        {
            if ($this->Montagem->delete($value)) {
                $this->Flash->success('Cadastro de montagem removido com sucesso.');
            } else {
                $this->Flash->error('Não foi possível remover o cadastro de montagem. Por favor, tente novamente.');
                return $this->redirect(['action' => 'index']);
            }
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Montagem id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $montagem = $this->Montagem->get($id);
        if ($this->Montagem->delete($montagem)) {
            $this->Flash->success('Cadastro de montagem removido com sucesso.');
        } else {
            $this->Flash->error('Não foi possível remover o cadastro de montagem. Por favor, tente novamente.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
