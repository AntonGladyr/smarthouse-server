<?php

namespace RESTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TemperaturesController extends Controller
{
    private $DB;


    /**
     * @Route("/temperatures/current")
     */
    public function currentTemperaturesAction()
    {
        $this->DB = $this->get("database.access");
        return new Response(json_encode($this->DB->selectCurrentTemperatures()));
    }
    
    
    /**
     * @Route("/temperatures/all")
     */
    public function monthTemperaturesAction()
    {
        $this->DB = $this->get("database.access");
        return new Response(json_encode($this->DB->selectAllTemperatures()));
    }

}
