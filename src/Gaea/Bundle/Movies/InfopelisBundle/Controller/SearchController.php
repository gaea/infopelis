<?php
/**
 * This file is part of the infopelis aplication created by Gustavo Espinosa.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Gaea
 * @author Gustavo Espinosa <gaea.uv@gmail.com>
 * @version 0.0.1
 */
namespace Gaea\Bundle\Movies\InfopelisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Tmdb\Client;

/**
 * Class SearchController
 * @package Gaea\Bundle\Movies\InfopelisBundle\Controller
 */
class SearchController extends Controller
{  
	/**
     * Get the discovery movies or movies (search for movies by title) information and show a list results
     *
     * @param Request $request
     * @return mixed
     */
	public function indexAction(Request $request)
    {
     * @param  array $parameters
     * @param  array $headers
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
	
	/**
     * Search for people by name and show a list results.
     *
     * @param Request $request
     * @return mixed
     */
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
    
     /**
     * Get the general actor information and movie credits for a specific id.
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function actorDetailAction(Request $request, $id)
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
    
    /**
     * Get the general movie information, cast and crew information for a specific id.
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
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
