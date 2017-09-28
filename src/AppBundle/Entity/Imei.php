<?php
//
//namespace AppBundle\Entity;
//
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * Imei (se añadirá más adelante a producción)
// *
// * @ORM\Table(name="Imei")
// * @ORM\Entity(repositoryClass="AppBundle\Repository\ImeiRepository")
// *
// * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
// */
//class Imei
//{
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="id", type="integer")
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="AUTO")
//     */
//    private $id;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="code", type="string", length=20, unique=true)
//     */
//    private $code;
//
//    /**
//     * Many Features have One Product.
//     * @ORM\ManyToOne(targetEntity="Device", inversedBy="imeis")
//     * @ORM\JoinColumn(name="device_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
//     */
//    private $device;
//
//    /**
//     * Get id
//     *
//     * @return integer
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * Set code
//     *
//     * @param string $code
//     *
//     * @return Imei
//     */
//    public function setCode($code)
//    {
//        $this->code = $code;
//
//        return $this;
//    }
//
//    /**
//     * Get code
//     *
//     * @return string
//     */
//    public function getCode()
//    {
//        return $this->code;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getDevice()
//    {
//        return $this->device;
//    }
//
//    /**
//     * @param mixed $device
//     */
//    public function setDevice($device)
//    {
//        $this->device = $device;
//    }
//
//    /**
//     * @return string
//     */
//    public function __toString()
//    {
//        return $this->getCode();
//    }
//}
