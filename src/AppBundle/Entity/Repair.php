<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repair
 *
 * @ORM\Table(name="Repair")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RepairRepository")
 * @ORM\HasLifecycleCallbacks()
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Repair
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
     * Many Features have One Client.
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="repairs")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $client;

    /**
     * Many Features have One Client.
     * @ORM\ManyToOne(targetEntity="Employee", inversedBy="repairs")
     * @ORM\JoinColumn(name="repair_assigned", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $repairAssigned;

    /**
     * Many Features have One Client.
     * @ORM\ManyToOne(targetEntity="Device", inversedBy="repairs", cascade={"persist"})
     * @ORM\JoinColumn(name="device_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $device;

    /**
    * Many Features have One Client.
    * @ORM\ManyToOne(targetEntity="State", inversedBy="repairs")
    * @ORM\JoinColumn(name="state", referencedColumnName="id", onDelete="CASCADE", nullable=false)
    */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="cost", type="float")
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
     * @ORM\Column(name="discount", type="float", nullable=true)
     */
    private $discount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="datetime", nullable=true)
     */
    private $deliveryDate;

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
     * @return Repair
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
     * Set description
     *
     * @param string $description
     *
     * @return Repair
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
     * Set cost
     *
     * @param float $cost
     *
     * @return Repair
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
     * @return Repair
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
     * @return Repair
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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Repair
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     *
     * @return Repair
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
     * Set client
     *
     * @param \AppBundle\Entity\Client $client
     *
     * @return Repair
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
     * Set repairAssigned
     *
     * @param \AppBundle\Entity\Employee $repairAssigned
     *
     * @return Repair
     */
    public function setRepairAssigned(\AppBundle\Entity\Employee $repairAssigned = null)
    {
        $this->repairAssigned = $repairAssigned;

        return $this;
    }

    /**
     * Get repairAssigned
     *
     * @return \AppBundle\Entity\Employee
     */
    public function getRepairAssigned()
    {
        return $this->repairAssigned;
    }

    /**
     * Set device
     *
     * @param \AppBundle\Entity\Device $device
     *
     * @return Repair
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
     * Set state
     *
     * @param \AppBundle\Entity\State $state
     *
     * @return Repair
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

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getClient().' - '.$this->getDevice().' - <'.$this->getCode().'>';
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
        $this->startDate = $date;

        // Creamos un código de compra usando la hora Unix actual, en caso de que no haya sido establecido manualmente
        if (!$this->code) {
            $this->code = $date->format('U');
        }
    }

    /**
     * HasLifecycleCallbacks: Quitamos las etiquetas html de la descripcion
     *
     * @ORM\PreFlush
     */
    public function removeHtmlChartSet()
    {
        if ($this->description)
        {
            // Se quita las etiquetas <p> del principio y el final
            $this->description = substr($this->description, 3, -4);

            // Se quita los caracteres especiales de html
            $this->description = html_entity_decode(htmlspecialchars_decode($this->description, ENT_QUOTES));

            // Por ultimo se quita los posibles espacios en blanco al final y al principio de la cadena
            $this->description = trim($this->description);
        }
    }
}
