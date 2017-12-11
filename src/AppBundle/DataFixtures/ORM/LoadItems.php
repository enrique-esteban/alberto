<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Item;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadItems extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Insertamos una reparación
        $item = new Item();

        $item->setReceipt($this->getReference('receipt-a'));
        $item->setType('Recibo');
        $item->setName('Samsung Galaxy S7');
        $item->setDescription('No enciende la pantalla');
        $item->setQuantity(1);
        $item->setCost(150);
        $item->setAdvance(0);
        $item->setDiscount(0);

        $manager->persist($item);

        // Insertamos otra reparación
        $item = new Item();

        $item->setReceipt($this->getReference('receipt-b'));
        $item->setType('Recibo');
        $item->setName('Iphone 7');
        $item->setDescription('Pantalla Rota');
        $item->setQuantity(1);
        $item->setCost(200);
        $item->setAdvance(10);
        $item->setDiscount(0);

        $manager->persist($item);

        // Insertamos una reparación
        $item = new Item();

        $item->setReceipt($this->getReference('receipt-c'));
        $item->setType('Recibo');
        $item->setName('Samsung Galaxy Tab S');
        $item->setDescription('No tiene cobertura');
        $item->setQuantity(1);
        $item->setCost(100);
        $item->setAdvance(0);
        $item->setDiscount(50);

        $manager->persist($item);

        // Insertamos una reparación
        $item = new Item();

        $item->setReceipt($this->getReference('receipt-d'));
        $item->setType('Recibo');
        $item->setName('Ipad mini 4');
        $item->setDescription('Pantalla rota');
        $item->setQuantity(1);
        $item->setCost(250);
        $item->setAdvance(0);
        $item->setDiscount(0);

        $manager->persist($item);

        // Insertamos una reparación
        $item = new Item();

        $item->setReceipt($this->getReference('receipt-e'));
        $item->setType('Recibo');
        $item->setName('Oppo R9S');
        $item->setDescription('La batería no funciona');
        $item->setQuantity(1);
        $item->setCost(100);
        $item->setAdvance(0);
        $item->setDiscount(0);

        $manager->persist($item);

        // Insertamos una reparación
        $item = new Item();

        $item->setReceipt($this->getReference('receipt-f'));
        $item->setType('Recibo');
        $item->setName('Iphone SE');
        $item->setDescription('Botón de bloqueo no funciona');
        $item->setQuantity(1);
        $item->setCost(120.50);
        $item->setAdvance(0);
        $item->setDiscount(0);

        $manager->persist($item);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 40;
    }
}
