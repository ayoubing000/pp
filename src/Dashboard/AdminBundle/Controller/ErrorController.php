<?php

namespace Dashboard\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErrorController extends Controller
{
    public function ErrorAction()
    {
      return $this->render("@DashboardAdmin/Default/error.html.twig");
    }

}
