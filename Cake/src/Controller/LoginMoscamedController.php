<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @author        Leonardo Cavalcante, Gustavo Marques
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Login;
use Cake\ORM\TableRegistry;



class LoginMoscamedController extends AppController
{

    /**
     * Logout method
     *
     * @return void
     */
    public function delete($id = null)
    {
        $loginTable = TableRegistry::get('Login');
        $this->request->allowMethod(['post', 'delete']);
        $login = $loginTable->get($id);
        if ($loginTable->delete($login)) {
            $this->Flash->success('O usuário foi deletado.');
        } else {
            $this->Flash->error('O usuario não pôde ser deletado. Por favor, tente novamente.');
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Login id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $loginTable = TableRegistry::get('Login');
        //$query = $login->find('all');
        
        $login = $loginTable->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $login = $loginTable->patchEntity($login, $this->request->data);
            if ($loginTable->save($login)) {
                $this->Flash->success('The login has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Não foi possível salvar o usuário. Por favor, tente novamente mais tarde.');
            }
        }
        $this->set(compact('login'));
        $this->set('_serialize', ['login']);
    }
    
    /**
     * Logout method
     *
     * @return void
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $reg = TableRegistry::get('Login');
            $login=$reg->newEntity( $this->request->data() );
            if ($reg->save($login)) {
                return $this->redirect(['action' => 'index']);
                //return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error('Não foi possível salvar o usuário. Por favor, tente novamente mais tarde.');
            }
        }
    }

    /**
     * Login method
     *
     * @return void
     */
    public function login()
    {
        $this->layout = 'loginMoscamed'; 
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect('/'); // login redirect
            }
            $this->Flash->error('Seu nome de usuário ou senha está incorreta.');
        }
    }   

    /**
     * View method
     *
     * @return void
     */
    public function view($id = null)
    {
        $login = $this->Login->get($id, [
            'contain' => []
        ]);
        $this->set('login', $login);
        $this->set('_serialize', ['login']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        // Stuff
        $reg = TableRegistry::get('Login');
        $this->set('login', $this->paginate($reg));
        $this->set('_serialize', ['login']);

        // Our layout
        // $this->layout = 'loginMoscamed'; 
    }
}
