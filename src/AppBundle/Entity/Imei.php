<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imei
 *
 * @ORM\Table(name="imei")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImeiRepository")
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Imei
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, unique=true)
     */
    private $code;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="Sale", inversedBy="imeis")
     * @ORM\JoinColumn(name="sale_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $sale;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Imei
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set sale
     *
     * @param \AppBundle\Entity\Sale $sale
     *
     * @return Imei
     */
    public function setSale(\AppBundle\Entity\Sale $sale = null)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get sale
     *
     * @return \AppBundle\Entity\Sale
     */
    public function getSale()
    {
        return $this->sale;
    }
}
