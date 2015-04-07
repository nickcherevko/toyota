<?php

namespace App\ToyotaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppToyotaBundle:Hello:index.html.twig', array('name' => $name));
    }
}