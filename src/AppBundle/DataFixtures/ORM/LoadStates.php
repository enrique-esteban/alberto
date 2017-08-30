<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\State;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class LoadStates extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
//        [12:50, 10/8/2017] +34 677 80 09 59: n progreso (green color): The Smarphone is being repaire
//        [12:51, 10/8/2017] +34 677 80 09 59: Para entrega (orange color): The smarphone is alright repaired
//        [12:51, 10/8/2017] +34 677 80 09 59: Desde aprobar (grey color) ???
//        [12:53, 10/8/2017] +34 677 80 09 59: Entregado (red color): The smarthphone is with its owner and charged
//        [12:54, 10/8/2017] +34 677 80 09 59: Cancelado (black color): the owner recover the smartphone without repair it
        // Insertamos un estado
        $state = new State();

        $state->setName('En progreso');
        $state->setDescription('La reparación está en progreso');
        $state->setColor('Orange');

        $this->addReference('state-en-progreso', $state);
        $manager->persist($state);

        // Insertamos otro estado
        $state = new State();

        $state->setName('Para entregar');
        $state->setDescription('El dispositivo ha sido reparado o vendido, pero no ha sido entregado al dueño');
        $state->setColor('Blue');

        $this->addReference('state-para-entrega', $state);
        $manager->persist($state);

        // Insertamos otro estado
        $state = new State();

        $state->setName('En venta');
        $state->setDescription('El dispositivo está en venta');
        $state->setColor('Orange');

        $this->addReference('state-para-venta', $state);
        $manager->persist($state);

        // Insertamos otro estado
        $state = new State();

        $state->setName('Aprobación pendiente');
        $state->setDescription('El dispositivo no ha sido aprobado para la venta o reparación');
        $state->setColor('Red');

        $this->addReference('state-aprobacion-pendiente', $state);
        $manager->persist($state);

        // Insertamos otro estado
        $state = new State();

        $state->setName('Entregado');
        $state->setDescription('El dispositivo ha sido reparado o vendido y entregado a su dueño');
        $state->setColor('Green');

        $this->addReference('state-entregado', $state);
        $manager->persist($state);

        // Insertamos otro estado
        $state = new State();

        $state->setName('Cancelado');
        $state->setDescription('La compra o reparación ha sido cancelada');
        $state->setColor('Grey');

        $this->addReference('state-cancelado', $state);
        $manager->persist($state);

        // Persistimos la base de datos
        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }
}
