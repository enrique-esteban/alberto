<?php
//
//namespace AppBundle\DataFixtures\ORM;
//
//use AppBundle\Entity\Imei;
//use AppBundle\Entity\Photo;
//use Doctrine\Common\DataFixtures\AbstractFixture;
//use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
//use Doctrine\Common\Persistence\ObjectManager;
//
///**
// * Crea los datos de prueba para la entidad Photo.
// *
// * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
// */
//class LoadImeis extends AbstractFixture implements OrderedFixtureInterface
//{
//
//
//    public function load(ObjectManager $manager)
//    {
//        // Insertamos un IMEI
//        $imei = new Imei();
//
//        $imei->setCode('548313559520658');
//        $imei->setDevice($this->getReference('device-iphone-7'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('316546334520658');
//        $imei->setDevice($this->getReference('device-iphone-7-2'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('579843559520658');
//        $imei->setDevice($this->getReference('device-iphone-7-plus'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('342433559520658');
//        $imei->setDevice($this->getReference('device-ipad-mini-4'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('798435556520658');
//        $imei->setDevice($this->getReference('device-iphone-se'));
//
//        $manager->persist($imei);
//
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('358965559520658');
//        $imei->setDevice($this->getReference('device-moto-g5-plus'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('568563559520658');
//        $imei->setDevice($this->getReference('device-moto-g5-plus'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('562321345451654');
//        $imei->setDevice($this->getReference('device-galaxy-s7'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('562151365435435');
//        $imei->setDevice($this->getReference('device-galaxy-s7'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('895653559520658');
//        $imei->setDevice($this->getReference('device-galaxy-s7-edge'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('562313559520658');
//        $imei->setDevice($this->getReference('device-galaxy-s7-edge'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('342370878903242');
//        $imei->setDevice($this->getReference('device-galaxy-tab-s'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('565268559520658');
//        $imei->setDevice($this->getReference('device-oppo-r9s'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('345668559520658');
//        $imei->setDevice($this->getReference('device-huawei-p8-lite'));
//
//        $manager->persist($imei);
//
//        // Insertamos otro IMEI
//        $imei = new Imei();
//
//        $imei->setCode('856863559520658');
//        $imei->setDevice($this->getReference('device-bq-aquaris-x5'));
//
//        $manager->persist($imei);
//
//        // Persistimos la base de datos
//        $manager->flush();
//    }
//
//    public function getOrder()
//    {
//        return 40;
//    }
//}
