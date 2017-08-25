<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="Sale")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SaleRepository")
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Sale
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
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="Device", inversedBy="sales", cascade={"persist"})
     * @ORM\JoinColumn(name="device_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $device;

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
     * @ORM\Column(name="category", type="string", length=1)
     */
    private $category;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Imei", mappedBy="sale")
     */
    private $imeis;

    /**
     * Many Features have One Client.
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="sales")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    private $client;

    /**
     * Many Features have One Client.
     * @ORM\ManyToOne(targetEntity="Employee", inversedBy="sales")
     * @ORM\JoinColumn(name="employee_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $seller;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="advance", type="float", nullable=true)
     */
    private $advance;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float", nullable=true)
     */
    private $discount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * Many Features have One Client.
     * @ORM\ManyToOne(targetEntity="State", inversedBy="sales")
     * @ORM\JoinColumn(name="state", referencedColumnName="id", onDelete="CASCADE")
     */
    private $state;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->imeis = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Sale
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
     * @return Sale
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
     * Set category
     *
     * @param string $category
     *
     * @return Sale
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Sale
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set advance
     *
     * @param float $advance
     *
     * @return Sale
     */
    public function setAdvance($advance)
    {
        $this->advance = $advance;

        return $this;
    }

    /**
     * Get advance
     *
     * @return float
     */
    public function getAdvance()
    {
        return $this->advance;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return Sale
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Sale
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set device
     *
     * @param \AppBundle\Entity\Device $device
     *
     * @return Sale
     */
    public function setDevice(\AppBundle\Entity\Device $device = null)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return \AppBundle\Entity\Device
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Add imei
     *
     * @param \AppBundle\Entity\Imei $imei
     *
     * @return Sale
     */
    public function addImei(\AppBundle\Entity\Imei $imei)
    {
        $this->imeis[] = $imei;

        return $this;
    }

    /**
     * Remove imei
     *
     * @param \AppBundle\Entity\Imei $imei
     */
    public function removeImei(\AppBundle\Entity\Imei $imei)
    {
        $this->imeis->removeElement($imei);
    }

    /**
     * Get imeis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImeis()
    {
        return $this->imeis;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Sale
     */
    public function setClient(\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set seller
     *
     * @param \AppBundle\Entity\Employee $seller
     *
     * @return Sale
     */
    public function setSeller(\AppBundle\Entity\Employee $seller = null)
    {
        $this->seller = $seller;

        return $this;
    }

    /**
     * Get seller
     *
     * @return \AppBundle\Entity\Employee
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Set state
     *
     * @param \AppBundle\Entity\State $state
     *
     * @return Sale
     */
    public function setState(\AppBundle\Entity\State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \AppBundle\Entity\State
     */
    public function getState()
    {
        return $this->state;
    }
}