<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Brand;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadBrands extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Insertamos un marca:
        $brand = new Brand();

        $brand->setName('Alcatel');
        $brand->setImage('alcatel.jpg');

        $this->addReference('brand-alcatel', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('Apple');
        $brand->setImage('apple.jpg');

        $this->addReference('brand-apple', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('BQ');
        $brand->setImage('bq.jpg');

        $this->addReference('brand-bq', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('Doogee');
        $brand->setImage('doogee.jpg');

        $this->addReference('brand-doogee', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('Honor');
        $brand->setImage('honor.jpg');

        $this->addReference('brand-honor', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('HTC');
        $brand->setImage('htc.jpg');

        $this->addReference('brand-htc', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('Huawei');
        $brand->setImage('huawei.jpg');

        $this->addReference('brand-huawei', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('Lenovo');
        $brand->setImage('lenovo.jpg');

        $this->addReference('brand-lenovo', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('LG');
        $brand->setImage('lg.jpg');

        $this->addReference('brand-lg', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('Moto');
        $brand->setImage('motorola.jpg');

        $this->addReference('brand-moto', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('Oppo');
        $brand->setImage('oppo.jpg');

        $this->addReference('brand-oppo', $brand);
        $manager->persist($brand);

        // Insertamos otra marca:
        $brand = new Brand();

        $brand->setName('Samsung');
        $brand->setImage('samsung.jpg');

        $this->addReference('brand-samsung', $brand);
        $manager->persist($brand);

        // Insertamos otro dispositivo:
        $brand = new Brand();

        $brand->setName('Sony');
        $brand->setImage('sony.jpg');

        $this->addReference('brand-sony', $brand);
        $manager->persist($brand);

        // Insertamos otro dispositivo:
        $brand = new Brand();

        $brand->setName('Wiko');
        $brand->setImage('wiko.jpg');

        $this->addReference('brand-wiko', $brand);
        $manager->persist($brand);

        // Insertamos otro dispositivo:
        $brand = new Brand();

        $brand->setName('Xiaomi');
        $brand->setImage('xiaomi.jpg');

        $this->addReference('brand-xiaomi', $brand);
        $manager->persist($brand);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }
}
