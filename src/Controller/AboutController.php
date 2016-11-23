<?php

namespace App\Controller;

use Cake\Event\Event;

class AboutController extends AppController
{
	public function index() {
		
	}
	
	public function beforeFilter(Event $event){
	
		$user = $this->Auth->user();
		$this->set('user', $user);
	}
}