<?php

namespace MireiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MireiaBundle:Default:index.html.twig');
    }
    
     public function helloAction()
    {
        //return $this->render('MireiaBundle:Default:index.html.twig');
         echo "<h1>Hello World!!!</h1>";
         die();
    }
}
