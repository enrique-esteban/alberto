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

        $device->setModel($this->getReference('model-iphone-7'));
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

        $device->setModel($this->getReference('model-iphone-7'));
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

        $device->setModel($this->getReference('model-iphone-7-plus'));
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

        $device->setModel($this->getReference('model-ipad-mini-4'));
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

        $device->setModel($this->getReference('model-iphone-se'));
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

        $device->setModel($this->getReference('model-moto-g5-plus'));
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

        $device->setModel($this->getReference('model-galaxy-s7'));
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

        $device->setModel($this->getReference('model-galaxy-s7-edge'));
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

        $device->setModel($this->getReference('model-galaxy-tab-s'));
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

        $device->setModel($this->getReference('model-oppo-r9s'));
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

        $device->setModel($this->getReference('model-huawei-p8-lite'));
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

        $device->setModel($this->getReference('model-huawei-y7-toronto'));
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

        $device->setModel($this->getReference('model-bq-aquaris-x5'));
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

        $device->setModel($this->getReference('model-honor-6a'));
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

        $device->setModel($this->getReference('model-alcatel-8079'));
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

        $device->setModel($this->getReference('model-alcatel-u53g'));
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

        $device->setModel($this->getReference('model-zte-blade-l7'));
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

        $device->setModel($this->getReference('model-zte-blade-a612'));
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

        $device->setModel($this->getReference('model-innjoo-fire-4'));
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

        $device->setModel($this->getReference('model-innjoo-f4'));
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

        $device->setModel($this->getReference('model-nubia-n1-lite'));
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