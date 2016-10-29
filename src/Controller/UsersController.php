<?php

namespace App\Controller;
use App\Model\Entity\User;

class UsersController extends AppController
{
	public function initialize(){
		parent::initialize();
		$this->Auth->allow(['logout']);

		$user = new User();
		$user->username = 'usertest';
		$user->password = 'test';
		$user->role = 'user'; // to change with model and DB
	
	}
	
	
	public function login() {
		if ($this->request->is('post')){
			//$user = $this->Auth->identify();
			
			$this->request->session()->write("usercontext", $user);
			$this->request->session()->check("usercontext");
			
			if ($user){
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