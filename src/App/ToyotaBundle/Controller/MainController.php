<?php

namespace App\ToyotaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppToyotaBundle:Auto')->findAll();
        
        return $this->render('AppToyotaBundle:Main:index.html.twig', array('entities' => $entities));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppToyotaBundle:Auto')->find($id);
 
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Auto entity.');
        }
        
        $model = $entity->getModel()->getTitle();
        
        return $this->render('AppToyotaBundle:Main:show.html.twig', array('entity' => $entity, 'model'=>$model));
    }
}