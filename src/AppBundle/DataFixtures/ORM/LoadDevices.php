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

        $device->setBrand('Apple');
        $device->setModel('iPhone 7');
        $device->setWebPage('https://www.apple.com/es/iphone-7/');
        $device->setImage(null);
        $device->setColor('negro');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('128 Gb');
        $device->setImeiPrimary('548313559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-iphone-7', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Apple');
        $device->setModel('iPhone 7');
        $device->setWebPage('https://www.apple.com/es/iphone-7/');
        $device->setImage(null);
        $device->setColor('negro');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('128 Gb');
        $device->setImeiPrimary('316546334520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-iphone-7-2', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Apple');
        $device->setModel('iPhone 7 Plus');
        $device->setWebPage('https://www.apple.com/es/iphone-7/');
        $device->setImage(null);
        $device->setColor('oro rosa');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('512 Gb');
        $device->setImeiPrimary('579843559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-iphone-7-plus', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Apple');
        $device->setModel('iPad Mini 4');
        $device->setWebPage('https://www.apple.com/es/ipad-mini-4/');
        $device->setImage(null);
        $device->setColor('oro');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('512 Gb');
        $device->setImeiPrimary('342433559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-ipad-mini-4', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Apple');
        $device->setModel('iPhone SE');
        $device->setWebPage('https://www.apple.com/es/iphone-se/');
        $device->setImage(null);
        $device->setColor('negro');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('512 Gb');
        $device->setImeiPrimary('798435556520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-iphone-se', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Moto');
        $device->setModel('G5 Plus');
        $device->setWebPage('https://www.motorola.es/products/moto-g-plus');
        $device->setImage(null);
        $device->setColor('blanco');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('64 Gb');
        $device->setImeiPrimary('358965559520658');
        $device->setImeiSecondary('568563559520658');

        $this->addReference('device-moto-g5-plus', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Samsung');
        $device->setModel('Galaxy S7');
        $device->setWebPage('http://www.samsung.com/es/smartphones/galaxy-s7/');
        $device->setImage(null);
        $device->setColor('plata');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('256 Gb');
        $device->setImeiPrimary('562321345451654');
        $device->setImeiSecondary('562151365435435');

        $this->addReference('device-galaxy-s7', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Samsung');
        $device->setModel('Galaxy S7 edge');
        $device->setWebPage('http://www.samsung.com/es/smartphones/galaxy-s7/');
        $device->setImage(null);
        $device->setColor('negro');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('128 Gb');
        $device->setImeiPrimary('895653559520658');
        $device->setImeiSecondary('562313559520658');

        $this->addReference('device-galaxy-s7-edge', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Samsung');
        $device->setModel('Galaxy Tab S');
        $device->setWebPage('http://www.samsung.com/es/tablets/galaxy-tab-s/');
        $device->setImage(null);
        $device->setColor('blanca');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('128 Gb');
        $device->setImeiPrimary('342370878903242');
        $device->setImeiSecondary(null);

        $this->addReference('device-galaxy-tab-s', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Oppo');
        $device->setModel('R9s');
        $device->setWebPage('http://www.oppo.com/en/smartmodel-r9s/');
        $device->setImage(null);
        $device->setColor('negro');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('32 Gb');
        $device->setImeiPrimary('565268559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-oppo-r9s', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Huawei');
        $device->setModel('P8 Lite 2017');
        $device->setWebPage('http://www.huaweispain.com/smartphones/huawei-p8-lite/');
        $device->setImage('huawei-p8-lite.jpg');
        $device->setColor('negro');
        $device->setScreen('5" HD');
        $device->setCpu('Quad core 2.1 Ghz');
        $device->setRam('3GB');
        $device->setCamera('12Mpx/8Mpx');
        $device->setStorageSize('32 Gb');
        $device->setImeiPrimary('huawai-p8-lite');
        $device->setImeiSecondary(null);

        $this->addReference('device-huawei-p8-lite', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Huawei');
        $device->setModel('Y7 Toronto');
        $device->setWebPage(null);
        $device->setImage('huawei-y7-toronto.jpg');
        $device->setScreen('5,5" HD');
        $device->setCpu('Octa core 1.4 y 1.1 GHz');
        $device->setRam('2GB');
        $device->setCamera('12Mpx/8Mpx');
        $device->setColor(null);
        $device->setStorageSize('16GB');
        $device->setImeiPrimary('huawai-y7-toronto');
        $device->setImeiSecondary(null);

        $this->addReference('device-huawei-y7-toronto', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('BQ');
        $device->setModel('Aquaris X5');
        $device->setWebPage('https://www.bq.com/es/aquaris-x5');
        $device->setImage(null);
        $device->setColor('rojo');
        $device->setScreen(null);
        $device->setCpu(null);
        $device->setRam(null);
        $device->setCamera(null);
        $device->setStorageSize('32 Gb');
        $device->setImeiPrimary('856863559520658');
        $device->setImeiSecondary(null);

        $this->addReference('device-bq-aquaris-x5', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Honor');
        $device->setModel('6A');
        $device->setWebPage(null);
        $device->setImage('honor-6a.jpg');
        $device->setColor(null);
        $device->setScreen('5" HD');
        $device->setCpu('Octa core 1.4 y 1.1 Ghz');
        $device->setRam('3GB');
        $device->setCamera('13Mpx/5Mpx');
        $device->setStorageSize('16GB');
        $device->setImeiPrimary('mas-movil-honor-6a');
        $device->setImeiSecondary(null);

        $this->addReference('device-honor-6a', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Alcatel');
        $device->setModel('8079');
        $device->setWebPage(null);
        $device->setImage('alcatel-8079.jpg');
        $device->setColor(null);
        $device->setScreen('10.1" HD');
        $device->setCpu('Quad core 1.3 GHz');
        $device->setRam('1GB');
        $device->setCamera('2Mpx/0.3Mpx');
        $device->setStorageSize('8GB');
        $device->setImeiPrimary('alcatel-8079');
        $device->setImeiSecondary(null);

        $this->addReference('device-alcatel-8079', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Alcatel');
        $device->setModel('U5 3G');
        $device->setWebPage(null);
        $device->setImage('alcatel-u5.jpg');
        $device->setColor(null);
        $device->setScreen('5" HD');
        $device->setCpu('Quad core 1.3 GHz');
        $device->setRam('1GB');
        $device->setCamera('8Mpx/5Mpx');
        $device->setStorageSize('8GB');
        $device->setImeiPrimary('alcatel-u53g');
        $device->setImeiSecondary(null);

        $this->addReference('device-alcatel-u53g', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('ZTE');
        $device->setModel('Blade L7');
        $device->setWebPage(null);
        $device->setImage('zte-blade-l7.jpg');
        $device->setColor(null);
        $device->setScreen('5" HD');
        $device->setCpu('Quad core 1.2 GHz');
        $device->setRam('1GB');
        $device->setCamera('8Mpx/5Mpx');
        $device->setStorageSize('8GB');
        $device->setImeiPrimary('zte-blade-l7');
        $device->setImeiSecondary(null);

        $this->addReference('device-zte-blade-l7', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('ZTE');
        $device->setModel('Blade A612');
        $device->setWebPage(null);
        $device->setImage('zte-blade-a612.jpg');
        $device->setColor(null);
        $device->setScreen('5" HD');
        $device->setCpu('Quad core 1.0 GHz');
        $device->setRam('1GB');
        $device->setCamera('13Mpx/2Mpx');
        $device->setStorageSize('16Gb');
        $device->setImeiPrimary('zte-blade-a612');
        $device->setImeiSecondary(null);

        $this->addReference('device-zte-blade-a612', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Innjoo');
        $device->setModel('Fire 4');
        $device->setWebPage(null);
        $device->setImage('innjoo-fire-4.jpg');
        $device->setColor(null);
        $device->setScreen('5" HD');
        $device->setCpu('Quad core 1.3 GHz');
        $device->setRam('2Gb');
        $device->setCamera('13Mpx/5Mpx');
        $device->setStorageSize('16GB');
        $device->setImeiPrimary('innjoo-fire-4');
        $device->setImeiSecondary(null);

        $this->addReference('device-innjoo-fire-4', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Innjoo');
        $device->setModel('F4');
        $device->setWebPage(null);
        $device->setImage('innjoo-f4.jpg');
        $device->setColor('Negro, Blanco o Dorado');
        $device->setScreen('10,1" HD');
        $device->setCpu('Quad core 1.3 GHz');
        $device->setRam('1GB');
        $device->setCamera(null);
        $device->setStorageSize('16GB');
        $device->setImeiPrimary('innjoo-f4');
        $device->setImeiSecondary(null);

        $this->addReference('device-innjoo-f4', $device);
        $manager->persist($device);

        // Insertamos otra factura de compra
        $device = new Device();

        $device->setBrand('Nubia');
        $device->setModel('N1 Lite');
        $device->setWebPage(null);
        $device->setImage('nubia-n1-lite.jpg');
        $device->setColor(null);
        $device->setScreen('5,5" HD');
        $device->setCpu('Quad core 1.3 GHz');
        $device->setRam('2GB');
        $device->setCamera('8Mpx/5Mpx');
        $device->setStorageSize('16GB');
        $device->setImeiPrimary('nubia-n1-lite');
        $device->setImeiSecondary(null);

        $this->addReference('device-nubia-n1-lite', $device);
        $manager->persist($device);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 30;
    }
}