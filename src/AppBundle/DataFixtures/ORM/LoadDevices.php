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
        // Insertamos un dispositivo:
        $device = new Device();

        $device->setBrand('Samsung');
        $device->setIcon('samsung.jpg');
        $device->setModel('Galaxy J5');
        $device->setWebPage('http://www.samsung.com/es/smartphones/galaxy-j5-2016-j510fd/SM-J510FZDUPHE/');

        $this->addReference('device-galaxy-j5', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Samsung');
        $device->setIcon('samsung.jpg');
        $device->setModel('Galaxy S7');
        $device->setWebPage('http://www.samsung.com/es/smartphones/galaxy-s7/');

        $this->addReference('device-galaxy-s7', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Samsung');
        $device->setIcon('samsung.jpg');
        $device->setModel('Galaxy S7 edge');
        $device->setWebPage('http://www.samsung.com/es/smartphones/galaxy-s7/');

        $this->addReference('device-galaxy-s7-edge', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Samsung');
        $device->setIcon('samsung.jpg');
        $device->setModel('Galaxy Tab S');
        $device->setWebPage('http://www.samsung.com/es/tablets/galaxy-tab-s/');

        $this->addReference('device-galaxy-tab-s', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Samsung');
        $device->setIcon('samsung.jpg');
        $device->setModel('Galaxy Tab A');
        $device->setWebPage('http://www.samsung.com/es/tablets/galaxy-tab-a/');

        $this->addReference('device-galaxy-tab-a', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Apple');
        $device->setIcon('apple.jpg');
        $device->setModel('iPhone 7');
        $device->setWebPage('https://www.apple.com/es/iphone-7/');

        $this->addReference('device-iphone-7', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Apple');
        $device->setIcon('apple.jpg');
        $device->setModel('iPhone 7 plus');
        $device->setWebPage('https://www.apple.com/es/iphone-7/');

        $this->addReference('device-iphone-7-plus', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Apple');
        $device->setIcon('apple.jpg');
        $device->setModel('iPhone 6s');
        $device->setWebPage('https://www.apple.com/es/shop/buy-iphone/iphone6');

        $this->addReference('device-iphone-6s', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Apple');
        $device->setIcon('apple.jpg');
        $device->setModel('iPhone SE');
        $device->setWebPage('https://www.apple.com/es/iphone-se/');

        $this->addReference('device-iphone-se', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Apple');
        $device->setIcon('apple.jpg');
        $device->setModel('iPad Pro');
        $device->setWebPage('https://www.apple.com/es/ipad-pro/');

        $this->addReference('device-ipad-pro', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Apple');
        $device->setIcon('apple.jpg');
        $device->setModel('iPad Mini 4');
        $device->setWebPage('https://www.apple.com/es/ipad-mini-4/');

        $this->addReference('device-ipad-mini-4', $device);
        $manager->persist($device);
        // Persistimos la base de datos
        $manager->flush();

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Oppo');
        $device->setIcon('oppo.jpg');
        $device->setModel('R9s');
        $device->setWebPage('http://www.oppo.com/en/smartphone-r9s/');

        $this->addReference('device-oppo-r9s', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Huawei');
        $device->setIcon('huawei.jpg');
        $device->setModel('P8 Lite');
        $device->setWebPage('http://www.huaweispain.com/smartphones/huawei-p8-lite/');

        $this->addReference('device-huawei-p8-lite', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Huawei');
        $device->setIcon('huawei.jpg');
        $device->setModel('P9 Lite');
        $device->setWebPage('http://www.huaweispain.com/smartphones/huawei-p9-lite/');

        $this->addReference('device-huawei-p9-lite', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('BQ');
        $device->setIcon('bq.jpg');
        $device->setModel('Aquaris X5');
        $device->setWebPage('https://www.bq.com/es/aquaris-x5');

        $this->addReference('device-bq-aquaris-x5', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('BQ');
        $device->setIcon('bq.jpg');
        $device->setModel('Aquaris M5');
        $device->setWebPage('https://www.bq.com/es/aquaris-m5');

        $this->addReference('device-bq-aquaris-m5', $device);
        $manager->persist($device);

        // Insertamos otro dispositivo:
        $device = new Device();

        $device->setBrand('Moto');
        $device->setIcon('motorola.jpg');
        $device->setModel('G5 Plus');
        $device->setWebPage('https://www.motorola.es/products/moto-g-plus');

        $this->addReference('device-moto-g5-plus', $device);
        $manager->persist($device);
    }

    public function getOrder()
    {
        return 10;
    }
}
