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
     * @ORM\ManyToOne(targetEntity="Model", inversedBy="devices")
     * @ORM\JoinColumn(name="phone_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="screen", type="string", length=100, nullable=true)
     */
    private $screen;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu", type="string", length=100, nullable=true)
     */
    private $cpu;

    /**
     * @var string
     *
     * @ORM\Column(name="ram", type="string", length=100, nullable=true)
     */
    private $ram;

    /**
     * @var string
     *
     * @ORM\Column(name="camera", type="string", length=100, nullable=true)
     */
    private $camera;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=100, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_size", type="string", length=100, nullable=true)
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

//    /**
//     * One Product has Many Features.
//     * @ORM\OneToMany(targetEntity="Imei", mappedBy="device")
//     */
//    private $imeis;

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
        //$this->imeis = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return string
     */
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * @param string $screen
     */
    public function setScreen($screen)
    {
        $this->screen = $screen;
    }

    /**
     * @return string
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @param string $cpu
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * @return string
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @param string $ram
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    /**
     * @return string
     */
    public function getCamera()
    {
        return $this->camera;
    }

    /**
     * @param string $camera
     */
    public function setCamera($camera)
    {
        $this->camera = $camera;
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
     * @param \AppBundle\Entity\Model $model
     *
     * @return Device
     */
    public function setModel(\AppBundle\Entity\Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \AppBundle\Entity\Model
     */
    public function getModel()
    {
        return $this->model;
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

//    /**
//     * Add imei
//     *
//     * @param \AppBundle\Entity\Imei $imei
//     *
//     * @return Device
//     */
//    public function addImei(\AppBundle\Entity\Imei $imei)
//    {
//        $this->imeis[] = $imei;
//
//        return $this;
//    }
//
//    /**
//     * Remove imei
//     *
//     * @param \AppBundle\Entity\Imei $imei
//     */
//    public function removeImei(\AppBundle\Entity\Imei $imei)
//    {
//        $this->imeis->removeElement($imei);
//    }
//
//    /**
//     * Get imeis
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getImeis()
//    {
//        return $this->imeis;
//    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return (string)$this->getModel().' <'.$this->getImeiPrimary().'>';
    }
}
