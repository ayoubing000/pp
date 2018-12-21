<?php

namespace Dashboard\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse ;

class CardController extends Controller
{
    public function indexAction()
    {   $url = $_SERVER['HTTP_REFERER'];
        $url = str_rot13($url);
        $url = base64_encode($url);
        //$url = base64_decode($url);
        //$url = str_rot13($url);

       //$url = base64_decode($url);
        //crypto_aead_aes256gcm_encrypt();
        $em = $this->getDoctrine()->getManager();
        $cards = $em->getRepository('DashboardAdminBundle:Card')->findAll();
        //findByCommentaire('True');
        return   $this->render('@DashboardAdmin/Default/index.html.twig', array(
            'cards' => $cards,'ur'=>$url
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

    public function SeenAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $updata = $em->getRepository('DashboardAdminBundle:Card')->find($id);
        $updata->setStatut("1");
        $em->flush();
        return new JsonResponse(array("success" => true));

    }

    public function FreshAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $upda = $em->getRepository('DashboardAdminBundle:Card')->find($id);
        $upda->setStatut("0");
        $em->flush();
        return new JsonResponse(array("success" => true));

    }
    public  function CommentAction()
    {
        $request = Request::createFromGlobals();
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $q = $em->getRepository('DashboardAdminBundle:Card')->find($id);
        $comm = $q->getCommentaire();
        $em->flush();
        return new JsonResponse(array('comment' => $comm));

    }
    public function SaveAction(Request $request)
    {
        $data = $request->request->get('val');
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $upda = $em->getRepository('DashboardAdminBundle:Card')->find($id);
        $upda->setCommentaire($data);
        $em->flush();
        return new JsonResponse(array("success" => true));

    }
}
