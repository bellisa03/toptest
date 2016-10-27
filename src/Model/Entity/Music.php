<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Music extends Entity
{
	var $albumTitle;
	var $artistName;
	var $genreID;
	var $milliseconds;
	var $trackID;
	var $trackTitle;
}