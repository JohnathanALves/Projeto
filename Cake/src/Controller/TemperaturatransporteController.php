<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Temperaturatransporte Controller
 *
 * @property \App\Model\Table\TemperaturatransporteTable $Temperaturatransporte */
class TemperaturatransporteController extends AppController
{  
    /**
     * viewAllInfo method
     * 
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @param UUID $fk_lotetransporte Foreign key loteTransporte.
     * @return void
     */
    public function viewAllInfo($lotebandejasid = null)
    {
        Time::$defaultLocale = 'pt-BR';
        $this->loadModel('Lotetransporte');
        $this->loadModel('Separacoes');
        $this->loadModel('Lotebandejas');

        $temperaturaTransQuery = $this->Temperaturatransporte->find('all')
            ->join([
                'g' => [
                    'table' => 'lotetransporte',
                    'type' => 'INNER',
                    'conditions' => ['g.lotetransporteid = temperaturatransporte.fk_lotetransporte'],
                ],
                'u' => [
                    'table' => 'separacoes',
                    'type' => 'INNER',
                    'conditions' => [   'u.separacoesid = g.fk_separacao',
                                        'fk_lotebandejas' => $lotebandejasid
                                    ]
                ]
            ]);
        $loteTransporteQuery = $this->Lotetransporte->get($temperaturaTransQuery->first()->fk_lotetransporte, ['contain' => []]);
        
        
        $this->set('lotetransporte',  $loteTransporteQuery);    
        $this->paginate = [ 'maxLimit' => 11 ];   
        $this->set('temperaturatransporte', $this->paginate($temperaturaTransQuery));
        $this->set('_serialize', ['temperaturatransporte']);
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
        $this->set('temperaturatransporte', $this->paginate($this->Temperaturatransporte));
        $this->set('_serialize', ['temperaturatransporte']);
    }

    /**
     * Index method
     *
     * @author Gustavo Marques | Genival Rocha | Caroline Machado
     * @return void
     */
    public function index()
    {

        $this->loadModel('Lotetransporte');
        $this->loadModel('Separacoes');
        $this->loadModel('Lotebandejas');

        $lotebandejasQuery = $this->Lotebandejas->find('all')
            ->join([
            'g' => [
                'table' => 'separacoes',
                'type' => 'INNER',
                'conditions' => 'g.fk_lotebandejas = lotebandejas.lotebandejasid',
            ],
            'u' => [
                'table' => 'lotetransporte',
                'type' => 'INNER',
                'conditions' => 'u.fk_separacao = g.separacoesid',
            ],
            't' => [
                'table' => 'temperaturatransporte',
                'type' => 'INNER',
                'conditions' => 't.fk_lotetransporte = u.lotetransporteid',
            ]
            ])->distinct(['codigo']);

        $this->set('lotebandejas', $this->paginate($lotebandejasQuery));
        $this->set('_serialize', ['lotetransporte']);
    }

    /**
     * View method
     *
     * @param string|null $id Temperaturatransporte id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $temperaturatransporte = $this->Temperaturatransporte->get($id, [
            'contain' => []
        ]);
        $this->set('temperaturatransporte', $temperaturatransporte);
        $this->set('_serialize', ['temperaturatransporte']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        Time::$defaultLocale = 'pt-BR';
        $this->loadModel('Lotetransporte');
        $lotesDisponiveis = $this->Lotetransporte->find('all');
        $lotesList = $lotesDisponiveis->find('list', ['value' => 'lotetransporteid','valueField' => 'n_transporte' ]);
        $this->set('optionLotes', $lotesList);
        $temperaturatransporte = $this->Temperaturatransporte->newEntity();

        if ($this->request->is('post')) {
            $temperaturatransporte = $this->Temperaturatransporte->patchEntity($temperaturatransporte, $this->request->data);
            $hora_leitura = $this->request->data('hora_leitura');
            $temperaturatransporte->set(['hora_leitura' => $hora_leitura['hour'].':'.$hora_leitura['minute'] ]);
            
            if ($this->Temperaturatransporte->save($temperaturatransporte)) {
                $this->Flash->success('The temperaturatransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The temperaturatransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('temperaturatransporte'));
        $this->set('_serialize', ['temperaturatransporte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Temperaturatransporte id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $temperaturatransporte = $this->Temperaturatransporte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $temperaturatransporte = $this->Temperaturatransporte->patchEntity($temperaturatransporte, $this->request->data);
            if ($this->Temperaturatransporte->save($temperaturatransporte)) {
                $this->Flash->success('The temperaturatransporte has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The temperaturatransporte could not be saved. Please, try again.');
            }
        }
        $this->set(compact('temperaturatransporte'));
        $this->set('_serialize', ['temperaturatransporte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Temperaturatransporte id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $temperaturatransporte = $this->Temperaturatransporte->get($id);
        if ($this->Temperaturatransporte->delete($temperaturatransporte)) {
            $this->Flash->success('The temperaturatransporte has been deleted.');
        } else {
            $this->Flash->error('The temperaturatransporte could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
