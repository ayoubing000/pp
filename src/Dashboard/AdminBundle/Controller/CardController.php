<?php

namespace Dashboard\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse ;

class CardController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cards = $em->getRepository('DashboardAdminBundle:Card')->findByCommentaire('True');
        return   $this->render('@DashboardAdmin/Default/index.html.twig', array(
            'cards' => $cards,
        ));
    }
    public function pkgsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cart = $em->getRepository('DashboardAdminBundle:Card')->find($id);
        return $this->render('@DashboardAdmin/Default/kaaba.html.twig', array(
            'cards' => $cart,
            ));
    }
    public function DelAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->get('id');
        $undo = $request->get('undo');
        //$id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $q = $em->getRepository('DashboardAdminBundle:Card')->find($id);
        $q->setCommentaire("$undo");
        $em->flush();
        return new JsonResponse(array("success" => true, 'message' => 'The record is in use, you can\'t delete the record!'));
    }

}
