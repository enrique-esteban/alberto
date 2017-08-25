<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Employee
 *
 * @ORM\Table(name="Employee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeeRepository")
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class Employee implements UserInterface, \Serializable
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
     * @ORM\Column(name="username", type="string", length=100, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, unique=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=100)
     */
    private $role;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Repair", mappedBy="repairAssigned")
     */
    private $repairs;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Sale", mappedBy="seller")
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
     * Set username
     *
     * @param string $username
     *
     * @return Employee
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Employee
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

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
     * Set email
     *
     * @param string $email
     *
     * @return Employee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
     * Set role
     *
     * @param string $role
     *
     * @return Employee
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Employee
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
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
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return array($this->role);
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * String representation of object
     * @see \Serializable::serialize()
     *
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @see \Serializable::unserialize()
     *
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }

    public function getCompleteName () {
        if ($this->name && $this->lastName) {
            return $this->name.' '.$this->lastName;
        }
        elseif ($this->name) {
            return $this->name;
        }
        else {
            return null;
        }
    }

    public function __toString()
    {
        if ($this->name && $this->lastName) {
            return $this->name.' '.$this->lastName.' <'.$this->username.'>';
        }
        elseif ($this->name) {
            return $this->name.' <'.$this->username.'>';
        }
        else {
            return $this->username;
        }
    }
}
