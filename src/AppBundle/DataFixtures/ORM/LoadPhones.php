<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Phone;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadPhones extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Insertamos un dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-samsung'));
        $phone->setName('Galaxy J5');
        $phone->setWebPage('http://www.samsung.com/es/smartphones/galaxy-j5-2016-j510fd/SM-J510FZDUPHE/');

        $this->addReference('phone-galaxy-j5', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-samsung'));
        $phone->setName('Galaxy S7');
        $phone->setWebPage('http://www.samsung.com/es/smartphones/galaxy-s7/');

        $this->addReference('phone-galaxy-s7', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-samsung'));
        $phone->setName('Galaxy S7 edge');
        $phone->setWebPage('http://www.samsung.com/es/smartphones/galaxy-s7/');

        $this->addReference('phone-galaxy-s7-edge', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-samsung'));
        $phone->setName('Galaxy Tab S');
        $phone->setWebPage('http://www.samsung.com/es/tablets/galaxy-tab-s/');

        $this->addReference('phone-galaxy-tab-s', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-samsung'));
        $phone->setName('Galaxy Tab A');
        $phone->setWebPage('http://www.samsung.com/es/tablets/galaxy-tab-a/');

        $this->addReference('phone-galaxy-tab-a', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-apple'));
        $phone->setName('iPhone 7');
        $phone->setWebPage('https://www.apple.com/es/iphone-7/');

        $this->addReference('phone-iphone-7', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-apple'));
        $phone->setName('iPhone 7 plus');
        $phone->setWebPage('https://www.apple.com/es/iphone-7/');

        $this->addReference('phone-iphone-7-plus', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-apple'));
        $phone->setName('iPhone 6s');
        $phone->setWebPage('https://www.apple.com/es/shop/buy-iphone/iphone6');

        $this->addReference('phone-iphone-6s', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-apple'));
        $phone->setName('iPhone SE');
        $phone->setWebPage('https://www.apple.com/es/iphone-se/');

        $this->addReference('phone-iphone-se', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-apple'));
        $phone->setName('iPad Pro');
        $phone->setWebPage('https://www.apple.com/es/ipad-pro/');

        $this->addReference('phone-ipad-pro', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-apple'));
        $phone->setName('iPad Mini 4');
        $phone->setWebPage('https://www.apple.com/es/ipad-mini-4/');

        $this->addReference('phone-ipad-mini-4', $phone);
        $manager->persist($phone);
        // Persistimos la base de datos
        $manager->flush();

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-oppo'));
        $phone->setName('R9s');
        $phone->setWebPage('http://www.oppo.com/en/smartphone-r9s/');

        $this->addReference('phone-oppo-r9s', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-huawei'));
        $phone->setName('P8 Lite');
        $phone->setWebPage('http://www.huaweispain.com/smartphones/huawei-p8-lite/');

        $this->addReference('phone-huawei-p8-lite', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-huawei'));
        $phone->setName('P9 Lite');
        $phone->setWebPage('http://www.huaweispain.com/smartphones/huawei-p9-lite/');

        $this->addReference('phone-huawei-p9-lite', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-bq'));
        $phone->setName('Aquaris X5');
        $phone->setWebPage('https://www.bq.com/es/aquaris-x5');

        $this->addReference('phone-bq-aquaris-x5', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-bq'));
        $phone->setName('Aquaris M5');
        $phone->setWebPage('https://www.bq.com/es/aquaris-m5');

        $this->addReference('phone-bq-aquaris-m5', $phone);
        $manager->persist($phone);

        // Insertamos otro dispositivo:
        $phone = new Phone();

        $phone->setBrand($this->getReference('brand-moto'));
        $phone->setName('G5 Plus');
        $phone->setWebPage('https://www.motorola.es/products/moto-g-plus');

        $this->addReference('phone-moto-g5-plus', $phone);
        $manager->persist($phone);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 20;
    }
}
