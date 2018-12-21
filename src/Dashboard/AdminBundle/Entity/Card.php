<?php
/**
 * Created by PhpStorm.
 * User: ayoub
 * Date: 27/11/2018
 * Time: 17:06
 */

namespace Dashboard\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="card")
 */


class Card
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id ;

    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $user;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $pass;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $fname;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $lname;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $dob;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $address;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $town;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $state;

    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $country;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $postcode;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $telephone;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $ssn;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $ccname;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $ccno;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $ccexp;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $vbvsecure;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $secode;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $citizenid;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $qatarid;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $naid;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $bans;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $passport;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $civilid;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $numbid;




    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $climit;




    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $acno;




    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $sortcode;




    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $q1;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $a1;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $ip;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $agent;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $ccbrand;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $cctype;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $cclevel;



    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $ccbank;

    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $statut;
    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="boolean" ,options={"default":"0"}, length=255)
     */
    private $undo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $add_date;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param mixed $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * @param mixed $ssn
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;
    }

    /**
     * @return mixed
     */
    public function getCcname()
    {
        return $this->ccname;
    }

    /**
     * @param mixed $ccname
     */
    public function setCcname($ccname)
    {
        $this->ccname = $ccname;
    }

    /**
     * @return mixed
     */
    public function getCcno()
    {
        return $this->ccno;
    }

    /**
     * @param mixed $ccno
     */
    public function setCcno($ccno)
    {
        $this->ccno = $ccno;
    }

    /**
     * @return mixed
     */
    public function getCcexp()
    {
        return $this->ccexp;
    }

    /**
     * @param mixed $ccexp
     */
    public function setCcexp($ccexp)
    {
        $this->ccexp = $ccexp;
    }

    /**
     * @return mixed
     */
    public function getVbvsecure()
    {
        return $this->vbvsecure;
    }

    /**
     * @param mixed $vbvsecure
     */
    public function setVbvsecure($vbvsecure)
    {
        $this->vbvsecure = $vbvsecure;
    }

    /**
     * @return mixed
     */
    public function getSecode()
    {
        return $this->secode;
    }

    /**
     * @param mixed $secode
     */
    public function setSecode($secode)
    {
        $this->secode = $secode;
    }

    /**
     * @return mixed
     */
    public function getCitizenid()
    {
        return $this->citizenid;
    }

    /**
     * @param mixed $citizenid
     */
    public function setCitizenid($citizenid)
    {
        $this->citizenid = $citizenid;
    }

    /**
     * @return mixed
     */
    public function getQatarid()
    {
        return $this->qatarid;
    }

    /**
     * @param mixed $qatarid
     */
    public function setQatarid($qatarid)
    {
        $this->qatarid = $qatarid;
    }

    /**
     * @return mixed
     */
    public function getNaid()
    {
        return $this->naid;
    }

    /**
     * @param mixed $naid
     */
    public function setNaid($naid)
    {
        $this->naid = $naid;
    }

    /**
     * @return mixed
     */
    public function getBans()
    {
        return $this->bans;
    }

    /**
     * @param mixed $bans
     */
    public function setBans($bans)
    {
        $this->bans = $bans;
    }

    /**
     * @return mixed
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @param mixed $passport
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;
    }

    /**
     * @return mixed
     */
    public function getCivilid()
    {
        return $this->civilid;
    }

    /**
     * @param mixed $civilid
     */
    public function setCivilid($civilid)
    {
        $this->civilid = $civilid;
    }

    /**
     * @return mixed
     */
    public function getNumbid()
    {
        return $this->numbid;
    }

    /**
     * @param mixed $numbid
     */
    public function setNumbid($numbid)
    {
        $this->numbid = $numbid;
    }

    /**
     * @return mixed
     */
    public function getClimit()
    {
        return $this->climit;
    }

    /**
     * @param mixed $climit
     */
    public function setClimit($climit)
    {
        $this->climit = $climit;
    }

    /**
     * @return mixed
     */
    public function getAcno()
    {
        return $this->acno;
    }

    /**
     * @param mixed $acno
     */
    public function setAcno($acno)
    {
        $this->acno = $acno;
    }

    /**
     * @return mixed
     */
    public function getSortcode()
    {
        return $this->sortcode;
    }

    /**
     * @param mixed $sortcode
     */
    public function setSortcode($sortcode)
    {
        $this->sortcode = $sortcode;
    }

    /**
     * @return mixed
     */
    public function getQ1()
    {
        return $this->q1;
    }

    /**
     * @param mixed $q1
     */
    public function setQ1($q1)
    {
        $this->q1 = $q1;
    }

    /**
     * @return mixed
     */
    public function getA1()
    {
        return $this->a1;
    }

    /**
     * @param mixed $a1
     */
    public function setA1($a1)
    {
        $this->a1 = $a1;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param mixed $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    }

    /**
     * @return mixed
     */
    public function getCcbrand()
    {
        return $this->ccbrand;
    }

    /**
     * @param mixed $ccbrand
     */
    public function setCcbrand($ccbrand)
    {
        $this->ccbrand = $ccbrand;
    }

    /**
     * @return mixed
     */
    public function getCctype()
    {
        return $this->cctype;
    }

    /**
     * @param mixed $cctype
     */
    public function setCctype($cctype)
    {
        $this->cctype = $cctype;
    }

    /**
     * @return mixed
     */
    public function getCclevel()
    {
        return $this->cclevel;
    }

    /**
     * @param mixed $cclevel
     */
    public function setCclevel($cclevel)
    {
        $this->cclevel = $cclevel;
    }

    /**
     * @return mixed
     */
    public function getCcbank()
    {
        return $this->ccbank;
    }

    /**
     * @param mixed $ccbank
     */
    public function setCcbank($ccbank)
    {
        $this->ccbank = $ccbank;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getAddDate()
    {
        return $this->add_date;
    }

    /**
     * @param mixed $add_date
     */
    public function setAddDate($add_date)
    {
        $this->add_date = $add_date;
    }
    /**
     * @return mixed
     */
    public function getUndo()
    {
        return $this->undo;
    }

    /**
     * @param mixed $undo
     */
    public function setUndo($undo)
    {
        $this->undo = $undo;
    }

}