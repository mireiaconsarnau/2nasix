<?php
 
namespace MireiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MireiaController extends Controller
{
     public function adeuAction(Request $request)
    {
        return $this->render('MireiaBundle:Default:index.html.twig',
                array('text'=> "Venim del controlador".$request->get("text")
                ));
        // echo "<h1>Bye!!!</h1>";
         //die();
    }
    public function adeu2Action($variable1)
    {
        return $this->render('MireiaBundle:Default:index.html.twig',
                array('text'=> "Venim del controlador".$variable1
                ));
        // echo "<h1>Bye!!!</h1>";
         //die();
    }
    public function provaAction()
    {
        return $this->render('MireiaBundle:Default:prova.html.twig',
                array('text'=> "Venim del controlador"));

    }
}
