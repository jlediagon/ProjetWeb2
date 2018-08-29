<?php

namespace GSEB\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attribut
 *
 * @ORM\Table(name="attribut")
 * @ORM\Entity(repositoryClass="GSEB\MainBundle\Repository\AttributRepository")
 */
class Attribut
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
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="attr_id", type="integer")
     */
    private $attrId;
    
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
     * Set value
     *
     * @param string $value
     *
     * @return Attribut
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set attrId
     *
     * @param integer $attrId
     *
     * @return Attribut
     */
    public function setAttrId($attrId)
    {
        $this->attrId = $attrId;

        return $this;
    }

    /**
     * Get attrId
     *
     * @return integer
     */
    public function getAttrId()
    {
        return $this->attrId;
    }


    /**
     * Set object
     *
     * @param \GSEB\MainBundle\Entity\Object $object
     *
     * @return Attribut
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
