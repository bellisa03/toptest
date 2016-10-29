<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Music extends Entity
{
	public $albumTitle;
	public $artistName;
	public $genreID;
	public $milliseconds;
	public $trackID;
	public $trackTitle;
}