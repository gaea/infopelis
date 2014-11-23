<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // gaea_movies_infopelis_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gaea_movies_infopelis_index');
            }

            return array (  '_controller' => 'Gaea\\Bundle\\Movies\\InfopelisBundle\\Controller\\SearchController::indexAction',  '_route' => 'gaea_movies_infopelis_index',);
        }

        // gaea_movies_infopelis_search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Gaea\\Bundle\\Movies\\InfopelisBundle\\Controller\\SearchController::searchAction',  '_route' => 'gaea_movies_infopelis_search',);
        }

        // gaea_movies_infopelis_actor_detail
        if (0 === strpos($pathinfo, '/actorDetail') && preg_match('#^/actorDetail/(?P<id>[^/]++)(?:/(?P<order>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gaea_movies_infopelis_actor_detail')), array (  '_controller' => 'Gaea\\Bundle\\Movies\\InfopelisBundle\\Controller\\SearchController::actorDetailAction',  'order' => 'DESC',));
        }

        // gaea_movies_infopelis_movie_detail
        if (0 === strpos($pathinfo, '/movieDetail') && preg_match('#^/movieDetail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gaea_movies_infopelis_movie_detail')), array (  '_controller' => 'Gaea\\Bundle\\Movies\\InfopelisBundle\\Controller\\SearchController::movieDetailAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
