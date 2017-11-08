<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Sale;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadSales extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Insertamos una factura de compra
        $sale = new Sale();

        $sale->setCode('1A1A1A1A1A');
        $sale->setDevice($this->getReference('device-iphone-7'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-florin'));
        $sale->setPrice(450.00);
        $sale->setPriceFinanced(0);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Reacondicionado');
        $sale->setSaleDate(null);

        $this->addReference('sale-iphone-7', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('2B2B2B2B2B');
        $sale->setDevice($this->getReference('device-iphone-7-plus'));
        $sale->setCategory('A');
        $sale->setClient($this->getReference('client-andrea'));
        $sale->setSeller($this->getReference('employee-alberto'));
        $sale->setPrice(500.00);
        $sale->setPriceFinanced(0);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-entregado'));
        $sale->setType('Reacondicionado');
        $sale->setSaleDate(new \DateTime('Now -'.rand(0, 5).'days'));

        $this->addReference('sale-iphone-7-plus', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('3C3C3C3C3C');
        $sale->setDevice($this->getReference('device-moto-g5-plus'));
        $sale->setCategory('B');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-florin'));
        $sale->setPrice(150.00);
        $sale->setPriceFinanced(0);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(50);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Reacondicionado');
        $sale->setSaleDate(null);

        $this->addReference('sale-moto-g5-plus', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('4D4D4D4D4D');
        $sale->setDevice($this->getReference('device-galaxy-s7-edge'));
        $sale->setCategory('B');
        $sale->setClient($this->getReference('client-antonio'));
        $sale->setSeller($this->getReference('employee-alberto'));
        $sale->setPrice(350.00);
        $sale->setPriceFinanced(0);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-entregado'));
        $sale->setType('Reacondicionado');
        $sale->setSaleDate(new \DateTime('Now -'.rand(0, 5).'days'));

        $this->addReference('sale-galaxy-s7-edge', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('5E5E5E5E5E');
        $sale->setDevice($this->getReference('device-huawei-p8-lite'));
        $sale->setCategory('C');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-florin'));
        $sale->setPrice(100.00);
        $sale->setPriceFinanced(0);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(100);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Reacondicionado');
        $sale->setSaleDate(null);

        $this->addReference('sale-huawei-p8-lite', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('6F6F6F6F6F');
        $sale->setDevice($this->getReference('device-bq-aquaris-x5'));
        $sale->setCategory('C');
        $sale->setClient($this->getReference('client-jose'));
        $sale->setSeller($this->getReference('employee-alberto'));
        $sale->setPrice(75.00);
        $sale->setPriceFinanced(0);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-entregado'));
        $sale->setType('Reacondicionado');
        $sale->setSaleDate(new \DateTime('Now -'.rand(0, 5).'days'));

        $this->addReference('sale-bq-aquaris-x5', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('1111111111');
        $sale->setDevice($this->getReference('device-huawei-p8-lite'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(239);
        $sale->setPriceFinanced(9.96);
        $sale->setOpeningCosts(22.79);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-huawei-p8-lite-masmovil', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('2222222222');
        $sale->setDevice($this->getReference('device-huawei-y7-toronto'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(219);
        $sale->setPriceFinanced(9.13);
        $sale->setOpeningCosts(20.88);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-huawei-y7-toronto', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('3333333333');
        $sale->setDevice($this->getReference('device-honor-6a'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(169);
        $sale->setPriceFinanced(7.04);
        $sale->setOpeningCosts(16.11);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-honor-6a', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('4444444444');
        $sale->setDevice($this->getReference('device-alcatel-8079'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(99.90);
        $sale->setPriceFinanced(null);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-alcatel-8079', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('5555555555');
        $sale->setDevice($this->getReference('device-alcatel-u53g'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(79.99);
        $sale->setPriceFinanced(null);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-alcatel-u53g', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('6666666666');
        $sale->setDevice($this->getReference('device-zte-blade-a612'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(139);
        $sale->setPriceFinanced(5.79);
        $sale->setOpeningCosts(13.25);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-zte-blade-a612', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('7777777777');
        $sale->setDevice($this->getReference('device-zte-blade-l7'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(89);
        $sale->setPriceFinanced(null);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-zte-blade-l7', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('8888888888');
        $sale->setDevice($this->getReference('device-innjoo-fire-4'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(149.95);
        $sale->setPriceFinanced(6.25);
        $sale->setOpeningCosts(14.30);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-innjoo-fire-4', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('9999999999');
        $sale->setDevice($this->getReference('device-innjoo-f4'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(99.9);
        $sale->setPriceFinanced(null);
        $sale->setOpeningCosts(null);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-innjoo-f4', $sale);
        $manager->persist($sale);

        // Insertamos otra factura de compra
        $sale = new Sale();

        $sale->setCode('1010101010');
        $sale->setDevice($this->getReference('device-nubia-n1-lite'));
        $sale->setCategory('A');
        $sale->setClient(null);
        $sale->setSeller($this->getReference('employee-carlos'));
        $sale->setPrice(120);
        $sale->setPriceFinanced(5);
        $sale->setOpeningCosts(11.44);
        $sale->setAdvance(0);
        $sale->setDiscount(0);
        $sale->setState($this->getReference('state-para-venta'));
        $sale->setType('Nuevo');
        $sale->setSaleDate(new \DateTime('now'));

        $this->addReference('sale-nubia-n1-lite', $sale);
        $manager->persist($sale);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 40;
    }
}