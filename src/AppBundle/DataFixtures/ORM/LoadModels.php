<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Model;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadModels extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Insertamos un dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-samsung'));
        $model->setName('Galaxy J5');
        $model->setWebPage('http://www.samsung.com/es/smartphones/galaxy-j5-2016-j510fd/SM-J510FZDUPHE/');
        $model->setImage(null);

        $this->addReference('model-galaxy-j5', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-samsung'));
        $model->setName('Galaxy S7');
        $model->setWebPage('http://www.samsung.com/es/smartphones/galaxy-s7/');
        $model->setImage(null);

        $this->addReference('model-galaxy-s7', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-samsung'));
        $model->setName('Galaxy S7 edge');
        $model->setWebPage('http://www.samsung.com/es/smartphones/galaxy-s7/');
        $model->setImage(null);

        $this->addReference('model-galaxy-s7-edge', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-samsung'));
        $model->setName('Galaxy Tab S');
        $model->setWebPage('http://www.samsung.com/es/tablets/galaxy-tab-s/');
        $model->setImage(null);

        $this->addReference('model-galaxy-tab-s', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-samsung'));
        $model->setName('Galaxy Tab A');
        $model->setWebPage('http://www.samsung.com/es/tablets/galaxy-tab-a/');
        $model->setImage(null);

        $this->addReference('model-galaxy-tab-a', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-apple'));
        $model->setName('iPhone 7');
        $model->setWebPage('https://www.apple.com/es/iphone-7/');
        $model->setImage(null);

        $this->addReference('model-iphone-7', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-apple'));
        $model->setName('iPhone 7 plus');
        $model->setWebPage('https://www.apple.com/es/iphone-7/');
        $model->setImage(null);

        $this->addReference('model-iphone-7-plus', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-apple'));
        $model->setName('iPhone 6s');
        $model->setWebPage('https://www.apple.com/es/shop/buy-iphone/iphone6');
        $model->setImage(null);

        $this->addReference('model-iphone-6s', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-apple'));
        $model->setName('iPhone SE');
        $model->setWebPage('https://www.apple.com/es/iphone-se/');
        $model->setImage(null);

        $this->addReference('model-iphone-se', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-apple'));
        $model->setName('iPad Pro');
        $model->setWebPage('https://www.apple.com/es/ipad-pro/');
        $model->setImage(null);

        $this->addReference('model-ipad-pro', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-apple'));
        $model->setName('iPad Mini 4');
        $model->setWebPage('https://www.apple.com/es/ipad-mini-4/');
        $model->setImage(null);

        $this->addReference('model-ipad-mini-4', $model);
        $manager->persist($model);
        // Persistimos la base de datos
        $manager->flush();

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-oppo'));
        $model->setName('R9s');
        $model->setWebPage('http://www.oppo.com/en/smartmodel-r9s/');
        $model->setImage(null);

        $this->addReference('model-oppo-r9s', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-huawei'));
        $model->setName('P8 Lite 2017');
        $model->setWebPage('http://www.huaweispain.com/smartphones/huawei-p8-lite/');
        $model->setImage('huawei-p8-lite.jpg');

        $this->addReference('model-huawei-p8-lite', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-huawei'));
        $model->setName('Y7 Toronto');
        $model->setWebPage(null);
        $model->setImage('huawei-y7-toronto.jpg');

        $this->addReference('model-huawei-y7-toronto', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-huawei'));
        $model->setName('P9 Lite');
        $model->setWebPage('http://www.huaweispain.com/smartphones/huawei-p9-lite/');
        $model->setImage(null);

        $this->addReference('model-huawei-p9-lite', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-bq'));
        $model->setName('Aquaris X5');
        $model->setWebPage('https://www.bq.com/es/aquaris-x5');
        $model->setImage(null);

        $this->addReference('model-bq-aquaris-x5', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-bq'));
        $model->setName('Aquaris M5');
        $model->setWebPage('https://www.bq.com/es/aquaris-m5');
        $model->setImage(null);

        $this->addReference('model-bq-aquaris-m5', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-moto'));
        $model->setName('G5 Plus');
        $model->setWebPage('https://www.motorola.es/products/moto-g-plus');
        $model->setImage(null);

        $this->addReference('model-moto-g5-plus', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-honor'));
        $model->setName('6A');
        $model->setWebPage(null);
        $model->setImage('honor-6a.jpg');

        $this->addReference('model-honor-6a', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-alcatel'));
        $model->setName('8079');
        $model->setWebPage(null);
        $model->setImage('alcatel-8079.jpg');

        $this->addReference('model-alcatel-8079', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-alcatel'));
        $model->setName('U5 3G');
        $model->setWebPage(null);
        $model->setImage('alcatel-u5.jpg');

        $this->addReference('model-alcatel-u53g', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-zte'));
        $model->setName('Blade A612');
        $model->setWebPage(null);
        $model->setImage('zte-blade-a612.jpg');

        $this->addReference('model-zte-blade-a612', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-zte'));
        $model->setName('Blade L7');
        $model->setWebPage(null);
        $model->setImage('zte-blade-l7.jpg');

        $this->addReference('model-zte-blade-l7', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-innjoo'));
        $model->setName('Fire 4');
        $model->setWebPage(null);
        $model->setImage('innjoo-fire-4.jpg');

        $this->addReference('model-innjoo-fire-4', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-innjoo'));
        $model->setName('F4');
        $model->setWebPage(null);
        $model->setImage('innjoo-f4.jpg');

        $this->addReference('model-innjoo-f4', $model);
        $manager->persist($model);

        // Insertamos otro dispositivo:
        $model = new Model();

        $model->setBrand($this->getReference('brand-nubia'));
        $model->setName('N1 Lite');
        $model->setWebPage(null);
        $model->setImage('nubia-n1-lite.jpg');

        $this->addReference('model-nubia-n1-lite', $model);
        $manager->persist($model);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 20;
    }
}
