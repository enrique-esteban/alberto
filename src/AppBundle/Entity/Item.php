<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receipt
 *
 * @ORM\Table(name="Item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemRepository")
 * @ORM\HasLifecycleCallbacks()
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Item
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Receipt", inversedBy="items")
     * @ORM\JoinColumn(name="receipt_id", referencedColumnName="id", nullable=true)
     */
    private $receipt;

    /**
     * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="items")
     * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id", nullable=true)
     */
    private $invoice;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="smallint", length=50)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="cost", type="float", nullable=true)
     */
    private $cost;

    /**
     * @var float
     *
     * @ORM\Column(name="advance", type="float", nullable=true)
     */
    private $advance;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="integer", nullable=true)
     */
    private $discount;

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
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
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
     * @return Item
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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Item
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set cost
     *
     * @param float $cost
     *
     * @return Item
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set advance
     *
     * @param float $advance
     *
     * @return Item
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
     * @return Item
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
     * Set receipt
     *
     * @param \AppBundle\Entity\Receipt $receipt
     *
     * @return Item
     */
    public function setReceipt(\AppBundle\Entity\Receipt $receipt = null)
    {
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * Get receipt
     *
     * @return \AppBundle\Entity\Receipt
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * Set invoice
     *
     * @param \AppBundle\Entity\Invoice $invoice
     *
     * @return Item
     */
    public function setInvoice(\AppBundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \AppBundle\Entity\Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * HasLifecycleCallbacks
     *
     * @ORM\PreFlush
     */
    public function preFlush()
    {
        // Se quita los espacios en blanco y las etiquetas html
        if ($this->description)
        {
//            // Se quita las etiquetas <p> del principio y el final
//            $this->description = substr($this->description, 3, -4);
//            // Se quita los caracteres especiales de html
//            $this->description = html_entity_decode(htmlspecialchars_decode($this->description, ENT_QUOTES));
            // Por ultimo se quita los posibles espacios en blanco al final y al principio de la cadena
            $this->description = trim($this->description);
        }
    }

    /**
     * HasLifecycleCallbacks
     *
     * @ORM\PrePersist
    */
    public function prePersist()
    {
        // Añadimos un valor por defecto a quantity si no existe ninguno
        if (!$this->quantity) {
            $this->quantity = 1;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if ($this->getCost()) {
            $total = $this->getCost() * $this->getQuantity();

            return $this->getName().' 
            - #'.$this->getQuantity().' - '.$total.' €';
        }

        return $this->getName().' - #'.$this->getQuantity().' - 0 €';
    }
}
