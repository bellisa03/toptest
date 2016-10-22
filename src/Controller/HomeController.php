<?php

namespace App\Controller;

class HomeController extends AppController
{
	public function index() {
		
	}
	
	public function beforeFilter(){
		
		$this->Auth->allow(['index']);
	}
}