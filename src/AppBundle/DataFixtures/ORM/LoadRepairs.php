<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Repair;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadRepairs extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Insertamos una reparación
        $repair = new Repair();

        $repair->setClient($this->getReference('client-andrea'));
        $repair->setCode('1A1A1A1A1A');
        $repair->setDevice($this->getReference('device-galaxy-s7'));
        $repair->setRepaierAssigned($this->getReference('employee-alberto'));
        $repair->setDescription('No enciende la pantalla');
        $repair->setState($this->getReference('state-en-progreso'));
        $repair->setCost(150);
        $repair->setAdvance(0);
        $repair->setDiscount(0);
        $repair->setStartDate(new \DateTime('now -'.rand(5, 9).' days'));
        $repair->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('repair-a', $repair);
        $manager->persist($repair);

        // Insertamos otra reparación
        $repair = new Repair();

        $repair->setClient($this->getReference('client-enrique'));
        $repair->setCode('2B2B2B2B2B');
        $repair->setDevice($this->getReference('device-iphone-7'));
        $repair->setRepaierAssigned($this->getReference('employee-florin'));
        $repair->setDescription('Pantalla Rota');
        $repair->setState($this->getReference('state-en-progreso'));
        $repair->setCost(200);
        $repair->setAdvance(10);
        $repair->setDiscount(0);
        $repair->setStartDate(new \DateTime('now -'.rand(5, 9).' days'));
        $repair->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('repair-b', $repair);
        $manager->persist($repair);

        // Insertamos una reparación
        $repair = new Repair();

        $repair->setClient($this->getReference('client-juan'));
        $repair->setCode('3C3C3C3C3C');
        $repair->setDevice($this->getReference('device-galaxy-tab-s'));
        $repair->setRepaierAssigned($this->getReference('employee-alberto'));
        $repair->setDescription('No tiene cobertura');
        $repair->setState($this->getReference('state-para-entrega'));
        $repair->setCost(100);
        $repair->setAdvance(0);
        $repair->setDiscount(50);
        $repair->setStartDate(new \DateTime('now -'.rand(5, 9).' days'));
        $repair->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('repair-c', $repair);
        $manager->persist($repair);

        // Insertamos una reparación
        $repair = new Repair();

        $repair->setClient($this->getReference('client-antonio'));
        $repair->setCode('4D4D4D4D4D');
        $repair->setDevice($this->getReference('device-ipad-mini-4'));
        $repair->setRepaierAssigned($this->getReference('employee-florin'));
        $repair->setDescription('Pantalla rota');
        $repair->setState($this->getReference('state-para-entrega'));
        $repair->setCost(250);
        $repair->setAdvance(0);
        $repair->setDiscount(0);
        $repair->setStartDate(new \DateTime('now -'.rand(5, 9).' days'));
        $repair->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('repair-d', $repair);
        $manager->persist($repair);

        // Insertamos una reparación
        $repair = new Repair();

        $repair->setClient($this->getReference('client-jose'));
        $repair->setCode('5E5E5E5E5E');
        $repair->setDevice($this->getReference('device-oppo-r9s'));
        $repair->setRepaierAssigned($this->getReference('employee-alberto'));
        $repair->setDescription('La batería no funciona');
        $repair->setState($this->getReference('state-entregado'));
        $repair->setCost(100);
        $repair->setAdvance(0);
        $repair->setDiscount(0);
        $repair->setStartDate(new \DateTime('now -'.rand(5, 9).' days'));
        $repair->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('repair-e', $repair);
        $manager->persist($repair);

        // Insertamos una reparación
        $repair = new Repair();

        $repair->setClient($this->getReference('client-andrea'));
        $repair->setCode('6F6F6F6F6F');
        $repair->setDevice($this->getReference('device-iphone-se'));
        $repair->setRepaierAssigned($this->getReference('employee-florin'));
        $repair->setDescription('Botón de bloqueo no funciona');
        $repair->setState($this->getReference('state-entregado'));
        $repair->setCost(120.50);
        $repair->setAdvance(0);
        $repair->setDiscount(0);
        $repair->setStartDate(new \DateTime('now -'.rand(5, 9).' days'));
        $repair->setDeliveryDate(new \DateTime('now -'.rand(0, 4).' days'));

        $this->addReference('repair-f', $repair);
        $manager->persist($repair);
        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 20;
    }
}
