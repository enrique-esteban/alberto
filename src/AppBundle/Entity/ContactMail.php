<?php

namespace AppBundle\Entity;

// Paquete base para los validadores:
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entidad que representas los emails enviados a través del formulario de contacto.
 * 
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class ContactMail
{
    /**
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @Assert\NotBlank()
     */
    protected $email;

    /**
     * @Assert\NotBlank()
     */
    protected $subject;

    /**
     * @Assert\NotBlank()
     */
    protected $body;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }
}