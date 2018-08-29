<?php

namespace GSEB\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rackspace
 *
 * @ORM\Table(name="rackspace")
 * @ORM\Entity(repositoryClass="GSEB\MainBundle\Repository\RackspaceRepository")
 */
class Rackspace
{
    /**
     * @ORM\ManyToOne(targetEntity="GSEB\MainBundle\Entity\Object", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $object;   
    
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
     * @ORM\Column(name="unit_no", type="integer")
     */
    private $unitNo;

    /**
     * @var int
     *
     * @ORM\Column(name="atom", type="integer")
     */
    private $atom;

    /**
     * @var int
     *
     * @ORM\Column(name="rack_id", type="integer")
     */
    private $rackId;

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
     * Set unitNo
     *
     * @param integer $unitNo
     *
     * @return Rackspace
     */
    public function setUnitNo($unitNo)
    {
        $this->unitNo = $unitNo;

        return $this;
    }

    /**
     * Get unitNo
     *
     * @return int
     */
    public function getUnitNo()
    {
        return $this->unitNo;
    }

    /**
     * Set atom
     *
     * @param integer $atom
     *
     * @return Rackspace
     */
    public function setAtom($atom)
    {
        $this->atom = $atom;

        return $this;
    }

    /**
     * Get atom
     *
     * @return int
     */
    public function getAtom()
    {
        return $this->atom;
    }

    /**
     * Set rackId
     *
     * @param integer $rackId
     *
     * @return Rackspace
     */
    public function setRackId($rackId)
    {
        $this->rackId = $rackId;

        return $this;
    }

    /**
     * Get rackId
     *
     * @return integer
     */
    public function getRackId()
    {
        return $this->rackId;
    }

    /**
     * Set object
     *
     * @param \GSEB\MainBundle\Entity\Object $object
     *
     * @return Rackspace
     */
    public function setObject(\GSEB\MainBundle\Entity\Object $object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return \GSEB\MainBundle\Entity\Object
     */
    public function getObject()
    {
        return $this->object;
    }
}
