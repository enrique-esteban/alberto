<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Imei;
use AppBundle\Entity\Photo;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadImeis extends AbstractFixture implements OrderedFixtureInterface
{


    public function load(ObjectManager $manager)
    {
        // Insertamos un IMEI
        $imei = new Imei();

        $imei->setCode('548313559520658');
        $imei->setSale($this->getReference('sale-iphone-7'));

        $manager->persist($imei);

        // Insertamos otro IMEI
        $imei = new Imei();

        $imei->setCode('579843559520658');
        $imei->setSale($this->getReference('sale-iphone-7-plus'));

        $manager->persist($imei);

        // Insertamos otro IMEI
        $imei = new Imei();

        $imei->setCode('358965559520658');
        $imei->setSale($this->getReference('sale-moto-g5-plus'));

        $manager->persist($imei);

        // Insertamos otro IMEI
        $imei = new Imei();

        $imei->setCode('568563559520658');
        $imei->setSale($this->getReference('sale-moto-g5-plus'));

        $manager->persist($imei);

        // Insertamos otro IMEI
        $imei = new Imei();

        $imei->setCode('895653559520658');
        $imei->setSale($this->getReference('sale-galaxy-s7-edge'));

        $manager->persist($imei);

        // Insertamos otro IMEI
        $imei = new Imei();

        $imei->setCode('562313559520658');
        $imei->setSale($this->getReference('sale-galaxy-s7-edge'));

        $manager->persist($imei);

        // Insertamos otro IMEI
        $imei = new Imei();

        $imei->setCode('345668559520658');
        $imei->setSale($this->getReference('sale-huawei-p8-lite'));

        $manager->persist($imei);

        // Insertamos otro IMEI
        $imei = new Imei();

        $imei->setCode('856863559520658');
        $imei->setSale($this->getReference('sale-bq-aquaris-x5'));

        $manager->persist($imei);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 40;
    }
}
