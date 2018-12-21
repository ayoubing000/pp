<?php

namespace Dashboard\shellsBundle\Controller;

use Dashboard\shellsBundle\DashboardshellsBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Dashboardshells/Default/index.html.twig');
    }
}
