<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table(name="State")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StateRepository")
 * @ORM\HasLifecycleCallbacks()
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class State
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
     * @ORM\Column(name="name", type="string", length=100, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * One Receipt has Many Features.
     * @ORM\OneToMany(targetEntity="Receipt", mappedBy="state")
     */
    private $receipts;

    /**
     * One Receipt has Many Features.
     * @ORM\OneToMany(targetEntity="Invoice", mappedBy="state")
     */
    private $invoices;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->receipts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->invoices = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return State
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return State
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return State
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
     * Add receipt
     *
     * @param \AppBundle\Entity\Receipt $receipt
     *
     * @return State
     */
    public function addReceipt(\AppBundle\Entity\Receipt $receipt)
    {
        $this->receipts[] = $receipt;

        return $this;
    }

    /**
     * Remove receipt
     *
     * @param \AppBundle\Entity\Receipt $receipt
     */
    public function removeReceipt(\AppBundle\Entity\Receipt $receipt)
    {
        $this->receipts->removeElement($receipt);
    }

    /**
     * Get receipts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReceipts()
    {
        return $this->receipts;
    }

    /**
     * Add invoice
     *
     * @param \AppBundle\Entity\Invoice $invoice
     *
     * @return State
     */
    public function addInvoice(\AppBundle\Entity\Invoice $invoice)
    {
        $this->invoices[] = $invoice;

        return $this;
    }

    /**
     * Remove invoice
     *
     * @param \AppBundle\Entity\Invoice $invoice
     */
    public function removeInvoice(\AppBundle\Entity\Invoice $invoice)
    {
        $this->invoices->removeElement($invoice);
    }

    /**
     * Get invoices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * @return array
     */
    public function getNameAndColor()
    {
        return array(
            'name' => $this->getName(),
            'color' => $this->getColor()
        );
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
    /**
     * HasLifecycleCallbacks: Se elimina el formato de CKEditor antes de guardarla en la base de datos
     *
     * @ORM\PreFlush()
     */
    public function editDescription()
    {
        // Quitamos las etiquetas HTML:
        $this->description = strip_tags($this->description);

        // Decodificamos también las caracteres especiales de HTML:
        $this->description = html_entity_decode($this->description);

        // Eliminamos los posibles espacios en blanco que hayan quedado
        $this->description = trim($this->description);
    }
}
