<?php

namespace App\Controller;

class UsersController extends AppController
{
	public function initialize(){
		parent::initialize();
		$this->Auth->allow(['logout']);
	}
	
	
	public function login() {
		if ($this->request->is('post')){
			$user = $this->Auth->identify();
			
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