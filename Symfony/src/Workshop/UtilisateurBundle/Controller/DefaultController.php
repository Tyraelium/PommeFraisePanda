<?php

namespace Workshop\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WorkshopUtilisateurBundle:Default:index.html.twig');
    }
}
