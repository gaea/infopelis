<?php

namespace Gaea\Bundle\Movies\InfopelisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Tmdb\Client;
use Tmdb\Model\Search\SearchQuery\PersonSearchQuery;
use Tmdb\Repository\SearchRepository;
use Tmdb\Repository\PeopleRepository;

class SearchController extends Controller
{  
	public function indexAction(Request $request)
    {
		$movieTitle = $request->get('movie');
		$client = new Client($this->get('TmdbToken'));
		$movies = array();
		$search = false;
		
		if($movieTitle != '')
		{
			$search = true;
			$movies = $client->getSearchApi()->searchMovies($movieTitle);
		}
		else
		{
			$movies = $client->getDiscoverApi()->discoverMovies(array(
				'page' => 1,
				'language' => 'en',
				't' => 'terminator'
			));
		}
		
		$releaseDates = array();
			
		foreach ($movies['results'] as $movie) {
			$releaseDates[] = $movie['release_date'];
		}
		
		array_multisort($releaseDates, SORT_DESC, $movies['results']);
		$movies = array('search' => $search, 'movies' => $movies['results']);
		
        return $this->render('GaeaMoviesInfopelisBundle:Default:index.html.twig', $movies);
    }
	 
    public function searchAction(Request $request)
    {
		$actor = $request->get('actor');
		$result = array('results' => array());
		
		if($actor != null && $actor != '') 
		{
			$client = new Client($this->get('TmdbToken'));
			$result = $client->getSearchApi()->searchPersons($actor);
		}
		
        return $this->render('GaeaMoviesInfopelisBundle:Default:search.html.twig', $result);
    }
    
    public function actorDetailAction(Request $request, $id, $order)
    {
		$actorId = $id;
		$actorInfo = array();
		$movies = array();
		$releaseDates = array();
		
		if($actorId != null && $actorId != '') 
		{
			$client = new Client($this->get('TmdbToken'));
			
			$info = $client->getPeopleApi()->getPerson($actorId);
			$movies = $client->getPeopleApi()->getMovieCredits($actorId);
			$movies = $movies['cast'];
			
			foreach ($movies as $movie) 
			{
				$releaseDates[] = $movie['release_date'];
			}
			
			array_multisort($releaseDates, SORT_DESC, $movies);
			
			$actorInfo = array('info' => $info, 'movies' => $movies);
		}
		
        return $this->render('GaeaMoviesInfopelisBundle:Default:actorDetail.html.twig', $actorInfo);
    }
    
    public function movieDetailAction(Request $request, $id)
    {
		$movieId = $id;
		$movieInfo = array();
		
		if($movieId != null && $movieId != '') 
		{
			$client = new Client($this->get('TmdbToken'));
			
			$info = $client->getMoviesApi()->getMovie($movieId);
			
			$credits = $client->getMoviesApi()->getCredits($movieId);
			
			$actorInfo = array('info' => $info, 'credits' => $credits['cast']);
		}
		
        return $this->render('GaeaMoviesInfopelisBundle:Default:movieDetail.html.twig', $actorInfo);
    }
}
