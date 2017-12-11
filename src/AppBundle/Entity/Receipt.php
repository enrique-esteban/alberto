<?php

namespace AppBundle\Entity;

use AppBundle\AppBundle;
use Doctrine\ORM\Mapping as ORM;

/**
 * Receipt
 *
 * @ORM\Table(name="Receipt")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReceiptRepository")
 * @ORM\HasLifecycleCallbacks()
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Receipt
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
     * @ORM\Column(name="code", type="string", length=15, unique=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="client_name", type="string", length=50, nullable=false)
     */
    private $clientName;

    /**
     * @var string
     *
     * @ORM\Column(name="client_phone", type="string", length=50, nullable=false)
     */
    private $clientPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="client_email", type="string", length=50, nullable=true)
     */
    private $clientEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="client_address", type="string", length=50, nullable=true)
     */
    private $clientAddress;

    /**
     * Many Features have One Client.
     * @ORM\ManyToOne(targetEntity="Employee", inversedBy="receipt")
     * @ORM\JoinColumn(name="employee_assigned", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $employee;

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="boolean", nullable=false)
     */
    private $tax;

    /**
     * @ORM\OneToMany(targetEntity="Item", mappedBy="receipt", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $items;

    /**
    * @ORM\ManyToOne(targetEntity="State", inversedBy="repairs")
    * @ORM\JoinColumn(name="state", referencedColumnName="id", onDelete="CASCADE", nullable=false)
    */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createdAt;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="datetime", nullable=true)
     */
    private $deliveryDate;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set code
     *
     * @param string $code
     *
     * @return Receipt
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
     * Set clientName
     *
     * @param string $clientName
     *
     * @return Receipt
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set clientPhone
     *
     * @param string $clientPhone
     *
     * @return Receipt
     */
    public function setClientPhone($clientPhone)
    {
        $this->clientPhone = $clientPhone;

        return $this;
    }

    /**
     * Get clientPhone
     *
     * @return string
     */
    public function getClientPhone()
    {
        return $this->clientPhone;
    }

    /**
     * Set clientEmail
     *
     * @param string $clientEmail
     *
     * @return Receipt
     */
    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }

    /**
     * Get clientEmail
     *
     * @return string
     */
    public function getClientEmail()
    {
        return $this->clientEmail;
    }

    /**
     * Set clientAddress
     *
     * @param string $clientAddress
     *
     * @return Receipt
     */
    public function setClientAddress($clientAddress)
    {
        $this->clientAddress = $clientAddress;

        return $this;
    }

    /**
     * Get clientAddress
     *
     * @return string
     */
    public function getClientAddress()
    {
        return $this->clientAddress;
    }

    /**
     * Set tax
     *
     * @param boolean $tax
     *
     * @return Receipt
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return boolean
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Receipt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     *
     * @return Receipt
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set employee
     *
     * @param \AppBundle\Entity\Employee $employee
     *
     * @return Receipt
     */
    public function setEmployee(\AppBundle\Entity\Employee $employee)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \AppBundle\Entity\Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Add item
     *
     * @param \AppBundle\Entity\Item $item
     *
     * @return Receipt
     */
    public function addItem(\AppBundle\Entity\Item $item)
    {
        $this->items[] = $item;
        $item->setReceipt($this);

        return $this;
    }

    /**
     * Remove item
     *
     * @param \AppBundle\Entity\Item $item
     */
    public function removeItem(\AppBundle\Entity\Item $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set state
     *
     * @param \AppBundle\Entity\State $state
     *
     * @return Receipt
     */
    public function setState(\AppBundle\Entity\State $state)
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

    /**
     * @return string
     */
    public function __toString()
    {
        return 'Cliente: '.$this->getClientName().' - Code: '.$this->getCode();
    }

    /**
     * HasLifecycleCallbacks: Establecemos algunos valores automáticamente antes de persistir la entidad
     *
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $date = new \DateTime('now');
        // Establecemos la fecha de inicio
        $this->createdAt = $date;
        // Creamos un código de compra usando la hora Unix actual, en caso de que no haya sido establecido manualmente
        if (!$this->code) {
            $this->code = $date->format('U');
        }
    }
}
