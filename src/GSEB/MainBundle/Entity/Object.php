<?php

namespace GSEB\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object
 *
 * @ORM\Table(name="object")
 * @ORM\Entity(repositoryClass="GSEB\MainBundle\Repository\ObjectRepository")
 */
class Object
{    

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="objtype_id", type="integer")
     */
    private $objtypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set objtypeId
     *
     * @param integer $objtypeId
     *
     * @return Object
     */
    public function setObjtypeId($objtypeId)
    {
        $this->objtypeId = $objtypeId;

        return $this;
    }

    /**
     * Get objtypeId
     *
     * @return int
     */
    public function getObjtypeId()
    {
        return $this->objtypeId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Object
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}
