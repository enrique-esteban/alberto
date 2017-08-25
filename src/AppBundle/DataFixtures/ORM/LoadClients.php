<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Client;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadClients extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       /* foreach (range(0, 9) as $i) {
            $client = new Client();

            $client->setName('Client'.$i);
            $client->setLastName(null);
            $client->setEmail('user'.$i.'@example.com');
            $client->setTelephone(rand(600000000, 699999999));
            $client->setAddress(null);

            $this->addReference('client-'.$i, $client);
            $manager->persist($client);
        }*/

        // Añadimos un cliente de pruebas:
        $client = new Client();

        $client->setName('Andrea');
        $client->setLastName('Olaru');
        $client->setEmail('andrea@example.com');
        $client->setTelephone(rand(600000000, 699999999));
        $client->setAddress(null);

        $this->addReference('client-andrea', $client);
        $manager->persist($client);

        // Añadimos otro cliente de pruebas:
        $client = new Client();

        $client->setName('Enrique');
        $client->setLastName('Esteban');
        $client->setEmail('enrique@example.com');
        $client->setTelephone(rand(600000000, 699999999));
        $client->setAddress('Calle Martinica nº 5');

        $this->addReference('client-enrique', $client);
        $manager->persist($client);

        // Añadimos otro cliente de pruebas:
        $client = new Client();

        $client->setName('Antonio');
        $client->setLastName('Rodriguez');
        $client->setEmail('antonio@example.com');
        $client->setTelephone(rand(600000000, 699999999));
        $client->setAddress(null);

        $this->addReference('client-antonio', $client);
        $manager->persist($client);

        // Añadimos otro cliente de pruebas:
        $client = new Client();

        $client->setName('Juan');
        $client->setLastName('Benitez');
        $client->setEmail('juan@example.com');
        $client->setTelephone(rand(600000000, 699999999));
        $client->setAddress(null);

        $this->addReference('client-juan', $client);
        $manager->persist($client);

        // Añadimos otro cliente de pruebas:
        $client = new Client();

        $client->setName('José');
        $client->setLastName('Sanduvete');
        $client->setEmail('jose@example.com');
        $client->setTelephone(rand(600000000, 699999999));
        $client->setAddress(null);

        $this->addReference('client-jose', $client);
        $manager->persist($client);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }

}
