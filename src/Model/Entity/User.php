<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{
	public $username;
	public $password;
	public $role;
	
	public function getUser(){

		$this->username = 'usertest';
		$this->password = 'test';
		$this->role = 'user';
		
		return $this;
	}
}
