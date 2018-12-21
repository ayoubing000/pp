<?php

namespace Dashboard\PpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DashboardPpBundle:Default:index.html.twig');
    }
}
