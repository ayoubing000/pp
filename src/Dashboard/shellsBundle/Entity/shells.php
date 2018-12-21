<?php
/**
 * Created by PhpStorm.
 * User: ayoub
 * Date: 20/12/2018
 * Time: 21:59
 */

namespace Dashboard\shellsBundle\Entity;


/**
 * @ORM\Entity
 * @ORM\Table(name="shells")
 */


class shells
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $urlhost;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $hostname;


    /**
     * @ORM\Column(type="string",nullable=true, length=255)
     */
    private $date;

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
    public function getUrlhost()
    {
        return $this->urlhost;
    }

    /**
     * @param mixed $urlhost
     */
    public function setUrlhost($urlhost)
    {
        $this->urlhost = $urlhost;
    }

    /**
     * @return mixed
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @param mixed $hostname
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

}
