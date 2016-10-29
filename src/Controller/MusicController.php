<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use App\Model\Entity\Music;
use App\Model\Entity\MusicGenre;

class MusicController extends AppController
{
	public function index($id) {
		$soapClient = new \SoapClient('http://www.it4today.com/chinook/ChinookService.svc?wsdl');
		
		$resultWebService = $soapClient->GetMusicTrack(["trackID" => $id]);
		
		$trackResult = $resultWebService->GetMusicTrackResult;
		$track = new Music();
			
		if ($trackResult != null){
			
			$track->albumTitle = $trackResult->AlbumTitle;
			$track->artistName = $trackResult->ArtistName;
			//$track->genreID = $trackResult->GenreID;
			$track->milliseconds = $trackResult->Milliseconds;
			$track->trackID = $trackResult->TrackId;
			$track->trackTitle = $trackResult->TrackTitle;
			
		}
		
		$this->set('track', $track);
		
	}
	
	public function getGenre($id){
		$soapClient = new \SoapClient('http://www.it4today.com/chinook/ChinookService.svc?wsdl');
		
		$resultWebService = $soapClient->GetMusicGenreTracks(["genreID" => $id]);
		
		$tracksResult[] = $resultWebService->GetMusicGenreTracksResult;
		
		
		
		
		
		
	}
	
	public function beforeFilter(Event $event){
		
		$this->Auth->allow(['index', 'getGenre']);
	}
}