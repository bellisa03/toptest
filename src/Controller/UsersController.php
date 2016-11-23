<?php

namespace App\Controller;
use App\Model\Entity\User;
use Cake\Event\Event;

class UsersController extends AppController
{

	public function beforeFilter(Event $event){
	
		$user = $this->Auth->user();
		$this->set('user', $user);
	}
	
	public function initialize(){
		parent::initialize();
		$this->Auth->allow(['logout']);
	}
	
	
	public function login() {
		if ($this->request->is('post')){
			//$user = $this->Auth->identify();
			$username = $this->request->data['username']; 
			$pwd = $this->request->data['password'];
			
			if($username == 'usertest' && $pwd == 'pwd'){
				$user = new User();
				$user->username = $username;
				$user->password = $pwd;
				$user->role = 'user';
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('Votre username ou votre mot de passe est incorrect!');
		}
	}
	
	public function logout(){
		$this->Flash->success('Vous êtes maintenant déconnecté.');
		return $this->redirect($this->Auth->logout());
	}
	
	
}