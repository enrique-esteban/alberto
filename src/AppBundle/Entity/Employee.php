<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Employee
 *
 * @ORM\Table(name="Employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Employee extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    protected $lastName;

//    /**
//     * @var string
//     *
//     * @ORM\Column(name="email", type="string", length=255, unique=true)
//     */
//    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    protected $address;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    protected $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100)
     */
    protected $type;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Repair", mappedBy="repairAssigned")
     */
    protected $repairs;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Sale", mappedBy="seller")
     */
    protected $sales;
    

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Employee
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Employee
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Employee
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Employee
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Employee
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add repair
     *
     * @param \AppBundle\Entity\Repair $repair
     *
     * @return Employee
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
     * @return Employee
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
     * @return null|string
     */
    public function getCompleteName()
    {
        if ($this->getName() && $this->getLastName()) {
            return $this->getName().' '.$this->getLastName();
        }
        elseif ($this->getName()) {
            return $this->getName();
        }
        elseif ($this->getLastName()) {
            return $this->getLastName();
        }
        else {
            return null;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if ($this->getName() && $this->getLastName()) {
            return $this->getName().' '.$this->getLastName().' <'.$this->getUsername().'>';
        }
        elseif ($this->getName()) {
            return $this->getName().' <'.$this->getUsername().'>';
        }
        else {
            return $this->getUsername();
        }
    }
}
