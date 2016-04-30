<?php

namespace RESTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TemperaturesController extends Controller
{
    private $DB;
    
    
    function __construct()
    {

    }

    /**
     * @Route("/temperatures/current")
     */
    public function currentTemperaturesAction()
    {
        $this->DB = $this->get("database.access");
        
        
        return new Response("LOL");
    }
    
    
    /**
     * @Route("/temperatures/month")
     */
    public function monthTemperaturesAction()
    {
        // ...
    }

}
