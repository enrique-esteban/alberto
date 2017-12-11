<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * Device
 *
 * @ORM\Table(name="Device")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DeviceRepository")
 *
 * @Vich\Uploadable
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
     * It only stores the name of the image associated with the product.
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="brand_image", fileNameProperty="image")
     *
     * @var File
     */
    private $imageFile;

    /**
     * Entidad creada para consistir el event listeners, de lo contrario, no sera llamado
     *
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="web_page", type="string", length=255, nullable=true)
     */
    private $webPage;

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
     * @ORM\Column(name="imei_primary", type="string", length=20, nullable=true, unique=true)
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
     * @ORM\OneToMany(targetEntity="Sale", mappedBy="device")
     */
    private $sales;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set image
     *
     * @param string $image
     *
     * @return Device
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set imageFile
     *
     * @param File|null $imageFile
     * @return $this
     */
    public function setImageFile(File $imageFile = null)
    {
        $this->imageFile = $imageFile;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($imageFile) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get imageFile
     *
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Device
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
     * Set screen
     *
     * @param string $screen
     *
     * @return Device
     */
    public function setScreen($screen)
    {
        $this->screen = $screen;

        return $this;
    }

    /**
     * Get screen
     *
     * @return string
     */
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * Set cpu
     *
     * @param string $cpu
     *
     * @return Device
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    /**
     * Get cpu
     *
     * @return string
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Set ram
     *
     * @param string $ram
     *
     * @return Device
     */
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get ram
     *
     * @return string
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set camera
     *
     * @param string $camera
     *
     * @return Device
     */
    public function setCamera($camera)
    {
        $this->camera = $camera;

        return $this;
    }

    /**
     * Get camera
     *
     * @return string
     */
    public function getCamera()
    {
        return $this->camera;
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
        if ($this->getImeiPrimary()) {
            return $this->getBrand(). ' '.$this->getModel().' - IMEI: '.$this->getImeiPrimary();
        }
        else {
            return $this->getBrand(). ' '.$this->getModel();
        }
    }
}
