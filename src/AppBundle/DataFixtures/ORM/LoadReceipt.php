<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Receipt;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadReceipt extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Insertamos una reparación
        $receipt = new Receipt();

        $receipt->setCode('1A1A1A1A1A');
        $receipt->setClientName('Andrea Olaru');
        $receipt->setClientPhone('600111222');
        $receipt->setClientEmail(null);
        $receipt->setClientAddress(null);
        $receipt->setEmployee($this->getReference('employee-alberto'));
        $receipt->setTax(false);
        $receipt->setState($this->getReference('state-en-progreso'));
        $receipt->setCreatedAt(new \DateTime('now -'.rand(5, 9).' days'));
        $receipt->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('receipt-a', $receipt);
        $manager->persist($receipt);

        // Insertamos otra reparación
        $receipt = new Receipt();

        $receipt->setCode('2B2B2B2B2B');
        $receipt->setClientName('Enrique Esteban');
        $receipt->setClientPhone('600111222');
        $receipt->setClientEmail(null);
        $receipt->setClientAddress(null);
        $receipt->setEmployee($this->getReference('employee-florin'));
        $receipt->setTax(false);
        $receipt->setState($this->getReference('state-en-progreso'));
        $receipt->setCreatedAt(new \DateTime('now -'.rand(5, 9).' days'));
        $receipt->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));
        $this->addReference('receipt-b', $receipt);
        $manager->persist($receipt);

        // Insertamos una reparación
        $receipt = new Receipt();

        $receipt->setCode('3C3C3C3C3C');
        $receipt->setClientName('Juan Lopez');
        $receipt->setClientPhone('600111222');
        $receipt->setClientEmail(null);
        $receipt->setClientAddress(null);
        $receipt->setEmployee($this->getReference('employee-alberto'));
        $receipt->setTax(false);
        $receipt->setState($this->getReference('state-para-entrega'));
        $receipt->setCreatedAt(new \DateTime('now -'.rand(5, 9).' days'));
        $receipt->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('receipt-c', $receipt);
        $manager->persist($receipt);

        // Insertamos una reparación
        $receipt = new Receipt();

        $receipt->setCode('4D4D4D4D4D');
        $receipt->setClientName('Antonio Benitez');
        $receipt->setClientPhone('600111222');
        $receipt->setClientEmail(null);
        $receipt->setClientAddress(null);
        $receipt->setEmployee($this->getReference('employee-florin'));
        $receipt->setTax(false);
        $receipt->setState($this->getReference('state-para-entrega'));
        $receipt->setCreatedAt(new \DateTime('now -'.rand(5, 9).' days'));
        $receipt->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('receipt-d', $receipt);
        $manager->persist($receipt);

        // Insertamos una reparación
        $receipt = new Receipt();

        $receipt->setCode('5E5E5E5E5E');
        $receipt->setClientName('José Sanduvete');
        $receipt->setClientPhone('600111222');
        $receipt->setClientEmail(null);
        $receipt->setClientAddress(null);
        $receipt->setEmployee($this->getReference('employee-alberto'));
        $receipt->setTax(false);
        $receipt->setState($this->getReference('state-entregado'));
        $receipt->setCreatedAt(new \DateTime('now -'.rand(5, 9).' days'));
        $receipt->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('receipt-e', $receipt);
        $manager->persist($receipt);

        // Insertamos una reparación
        $receipt = new Receipt();

        $receipt->setCode('6F6F6F6F6F');
        $receipt->setClientName('Andrea Olaru');
        $receipt->setClientPhone('600111222');
        $receipt->setClientEmail(null);
        $receipt->setClientAddress(null);
        $receipt->setEmployee($this->getReference('employee-florin'));
        $receipt->setTax(false);
        $receipt->setState($this->getReference('state-entregado'));
        $receipt->setCreatedAt(new \DateTime('now -'.rand(5, 9).' days'));
        $receipt->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('receipt-f', $receipt);
        $manager->persist($receipt);
        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 30;
    }
}
