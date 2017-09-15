<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Device;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadDevices extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Insertamos una factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-iphone-7'));
        $device->setColor('negro');
        $device->setStorageSize('128 Gb');
        $device->setImeiPrimary('548313559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-iphone-7', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-iphone-7'));
        $device->setColor('negro');
        $device->setStorageSize('128 Gb');
        $device->setImeiPrimary('316546334520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-iphone-7-2', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-iphone-7-plus'));
        $device->setColor('oro rosa');
        $device->setStorageSize('512 Gb');
        $device->setImeiPrimary('579843559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-iphone-7-plus', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-ipad-mini-4'));
        $device->setColor('oro');
        $device->setStorageSize('512 Gb');
        $device->setImeiPrimary('342433559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-ipad-mini-4', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-iphone-se'));
        $device->setColor('negro');
        $device->setStorageSize('512 Gb');
        $device->setImeiPrimary('798435556520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-iphone-se', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-moto-g5-plus'));
        $device->setColor('blanco');
        $device->setStorageSize('64 Gb');
        $device->setImeiPrimary('358965559520658');
        $device->setImeiSecondary('568563559520658');

        $this->addReference('device-moto-g5-plus', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-galaxy-s7'));
        $device->setColor('plata');
        $device->setStorageSize('256 Gb');
        $device->setImeiPrimary('562321345451654');
        $device->setImeiSecondary('562151365435435');

        $this->addReference('device-galaxy-s7', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-galaxy-s7-edge'));
        $device->setColor('negro');
        $device->setStorageSize('128 Gb');
        $device->setImeiPrimary('895653559520658');
        $device->setImeiSecondary('562313559520658');

        $this->addReference('device-galaxy-s7-edge', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-galaxy-tab-s'));
        $device->setColor('blanca');
        $device->setStorageSize('128 Gb');
        $device->setImeiPrimary('342370878903242');
        $device->setImeiSecondary(null);

        $this->addReference('device-galaxy-tab-s', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-oppo-r9s'));
        $device->setColor('negro');
        $device->setStorageSize('32 Gb');
        $device->setImeiPrimary('565268559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-oppo-r9s', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-huawei-p8-lite'));
        $device->setColor('negro');
        $device->setStorageSize('32 Gb');
        $device->setImeiPrimary('345668559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-huawei-p8-lite', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setPhone($this->getReference('phone-bq-aquaris-x5'));
        $device->setColor('rojo');
        $device->setStorageSize('32 Gb');
        $device->setImeiPrimary('856863559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-bq-aquaris-x5', $device);
        $manager->persist($device);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 30;
    }
}