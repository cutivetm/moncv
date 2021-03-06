<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/cv/{name}/{firstname}", name="homepage")
     * @Template()
     */
    public function indexAction($name = "Marine", $firstname= "Cutivet")
    
    //(Request $request)
    //($name = "")
    {
        // replace this example code with whatever you need
        //return array('name' => $name);
        return array('name' => $name, 'firstname' => $firstname);
    }
}
