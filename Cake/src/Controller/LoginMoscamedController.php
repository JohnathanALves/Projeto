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
     * Edit method
     *
     * @param string|null $id Login id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $login = TableRegistry::get('Login');
        $query = $login->find('all');
        
        /*
        $login = $this->Login->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $login = $this->Login->patchEntity($login, $this->request->data);
            if ($this->Login->save($login)) {
                $this->Flash->success('The login has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The login could not be saved. Please, try again.');
            }
        }
        $this->set(compact('login'));
        $this->set('_serialize', ['login']); */
    }
    
    /**
     * NAME method
     *
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $reg = TableRegistry::get('Login');
            $login=$reg->newEntity( $this->request->data() );
            //$login->usuario="novo";
            //$login->email='novo@login.com';
            //$login->set('senha','login');
            if ($reg->save($login)) {
                //return $this->redirect(['action' => 'index']);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else {
                    $this->Flash->error('The login could not be saved. Please, try again.');
            }
        }
    }

    public function login()
    {
        $this->layout = 'loginMoscamed'; 
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }   

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        // Stuff
        $this->layout = 'loginMoscamed';    
    }
}
