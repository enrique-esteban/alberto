<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table(name="Invoice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvoiceRepository")
 * @ORM\HasLifecycleCallbacks()
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Invoice
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
     * @ORM\Column(name="client_dni", type="string", length=50, nullable=false)
     */
    private $clientDni;

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
     * @ORM\ManyToOne(targetEntity="Employee", inversedBy="invoices")
     * @ORM\JoinColumn(name="employee_assigned", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $employee;

    /**
     * @ORM\OneToMany(targetEntity="Item", mappedBy="invoice", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $items;

    /**
     * @ORM\ManyToOne(targetEntity="State", inversedBy="invoices")
     * @ORM\JoinColumn(name="state", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
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
     * @return Invoice
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
     * @return Invoice
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
     * @return string
     */
    public function getClientDni()
    {
        return $this->clientDni;
    }

    /**
     * @param string $clientDni
     */
    public function setClientDni($clientDni)
    {
        $this->clientDni = $clientDni;
    }

    /**
     * Set clientPhone
     *
     * @param string $clientPhone
     *
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Invoice
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
     * Set employee
     *
     * @param \AppBundle\Entity\Employee $employee
     *
     * @return Invoice
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
     * @return Invoice
     */
    public function addItem(\AppBundle\Entity\Item $item)
    {
        $this->items[] = $item;
        $item->setInvoice($this);

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
     * @return Invoice
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
