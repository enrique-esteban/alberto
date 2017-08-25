<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * Device
 *
 * @ORM\Table(name="Device", uniqueConstraints={@UniqueConstraint(name="device_unique", columns={"brand", "model"})})
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
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=100)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="web_page", type="string", length=255, nullable=true)
     */
    private $webPage;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=true)
     */
    private $icon;

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
     * Set brand
     *
     * @param string $brand
     *
     * @return Device
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Device
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set webPage
     *
     * @param string $webPage
     *
     * @return Device
     */
    public function setWebPage($webPage)
    {
        $this->webPage = $webPage;

        return $this;
    }

    /**
     * Get webPage
     *
     * @return string
     */
    public function getWebPage()
    {
        return $this->webPage;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Device
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
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

    public function __toString()
    {
        return $this->brand.' '.$this->model;
    }
}
