<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;


class UsersTable extends Table
{

	public function findUsers(){
		$user = new User();
		$user->username = 'usertest';
		$user->password = 'test';
		
		return $user;
	}
	

}
