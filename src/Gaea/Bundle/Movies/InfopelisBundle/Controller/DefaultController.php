<?php

namespace Gaea\Bundle\Movies\InfopelisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {	
        return $this->render('GaeaMoviesInfopelisBundle:Default:index.html.twig', array());
    }
}
