<?php

namespace Dashboard\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{


    public function loginAction()
    {
        dump($this->container->get('kernel')->getBundle('AcmeDemoBundle')->getPath());
        die();
        return $this->redirect('login');
    }

}
