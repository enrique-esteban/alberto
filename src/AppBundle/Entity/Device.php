<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table(name="Device")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DeviceRepository")
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Device
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
     * @ORM\ManyToOne(targetEntity="Phone", inversedBy="devices")
     * @ORM\JoinColumn(name="phone_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=100)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_size", type="string", length=100)
     */
    private $storageSize;

    /**
     * @var string
     *
     * @ORM\Column(name="imei_primary", type="string", length=20, unique=true)
     */
    private $imeiPrimary;

    /**
     * @var string
     *
     * @ORM\Column(name="imei_secondary", type="string", length=20, nullable=true, unique=true)
     */
    private $imeiSecondary;


    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Repair", mappedBy="device")
     */
    private $repairs;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Sale", mappedBy="device")
     */
    private $sales;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repairs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sales = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set color
     *
     * @param string $color
     *
     * @return Device
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set storageSize
     *
     * @param string $storageSize
     *
     * @return Device
     */
    public function setStorageSize($storageSize)
    {
        $this->storageSize = $storageSize;

        return $this;
    }

    /**
     * Get storageSize
     *
     * @return string
     */
    public function getStorageSize()
    {
        return $this->storageSize;
    }

    /**
     * Set imeiPrimary
     *
     * @param string $imeiPrimary
     *
     * @return Device
     */
    public function setImeiPrimary($imeiPrimary)
    {
        $this->imeiPrimary = $imeiPrimary;

        return $this;
    }

    /**
     * Get imeiPrimary
     *
     * @return string
     */
    public function getImeiPrimary()
    {
        return $this->imeiPrimary;
    }

    /**
     * Set imeiSecondary
     *
     * @param string $imeiSecondary
     *
     * @return Device
     */
    public function setImeiSecondary($imeiSecondary)
    {
        $this->imeiSecondary = $imeiSecondary;

        return $this;
    }

    /**
     * Get imeiSecondary
     *
     * @return string
     */
    public function getImeiSecondary()
    {
        return $this->imeiSecondary;
    }

    /**
     * Set model
     *
     * @param \AppBundle\Entity\Phone $phone
     *
     * @return Device
     */
    public function setPhone(\AppBundle\Entity\Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get model
     *
     * @return \AppBundle\Entity\Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add repair
     *
     * @param \AppBundle\Entity\Repair $repair
     *
     * @return Device
     */
    public function addRepair(\AppBundle\Entity\Repair $repair)
    {
        $this->repairs[] = $repair;

        return $this;
    }

    /**
     * Remove repair
     *
     * @param \AppBundle\Entity\Repair $repair
     */
    public function removeRepair(\AppBundle\Entity\Repair $repair)
    {
        $this->repairs->removeElement($repair);
    }

    /**
     * Get repairs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepairs()
    {
        return $this->repairs;
    }

    /**
     * Add sale
     *
     * @param \AppBundle\Entity\Sale $sale
     *
     * @return Device
     */
    public function addSale(\AppBundle\Entity\Sale $sale)
    {
        $this->sales[] = $sale;

        return $this;
    }

    /**
     * Remove sale
     *
     * @param \AppBundle\Entity\Sale $sale
     */
    public function removeSale(\AppBundle\Entity\Sale $sale)
    {
        $this->sales->removeElement($sale);
    }

    /**
     * Get sales
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return (string)$this->getPhone().' <'.$this->getImeiPrimary().'>';
    }
}
