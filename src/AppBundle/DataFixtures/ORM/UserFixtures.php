<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Photo;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Crea los datos de prueba para la entidad Photo.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class PhotoFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 10;
    }

    public function load(ObjectManager $manager)
    {
        // Insertamos una foto:
        $photo = new Photo();

        $photo->setFileName("aula-de-los-cursos-01.jpg");
        $photo->setName("Aula 1");
        $photo->setSlug("aula-1");
        $photo->setDescription("Vista frontal del aula");
        $photo->setTitle("Vista frontal del aula para los cursos");
        $photo->setAlt("aula de cursos, vista frontal");
        $photo->setWidth("1440");
        $photo->setHeight("1080");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("aula-de-los-cursos-02.jpg");
        $photo->setName("Aula 2");
        $photo->setSlug("aula-2");
        $photo->setDescription("Vista trasera del aula");
        $photo->setTitle("Vista tresera del aula para los cursos");
        $photo->setAlt("aula de cursos, vista trasera");
        $photo->setWidth("1328");
        $photo->setHeight("747");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("aula-de-los-cursos-03.jpg");
        $photo->setName("Aula 3");
        $photo->setSlug("aula-3");
        $photo->setDescription("Otra vista trasera del aula");
        $photo->setTitle("Otra vista tresera del aula para los cursos");
        $photo->setAlt("aula de cursos, vista trasera");
        $photo->setWidth("1328");
        $photo->setHeight("747");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("trabajando-en-taller-de-servicio-tecnico.jpg");
        $photo->setName("Taller 1");
        $photo->setSlug("taller-1");
        $photo->setDescription("Reparando en el taller");
        $photo->setTitle("Reparando smartphone en el Taller");
        $photo->setAlt("trabajador reparando smartphone");
        $photo->setWidth("900");
        $photo->setHeight("1600");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("mesa-del-taller-de-servicio-tecnico.jpg");
        $photo->setName("Taller 2");
        $photo->setSlug("taller-2");
        $photo->setDescription("Vista de la mesa de trabajo");
        $photo->setTitle("Vista de la mesa de trabajo del taller");
        $photo->setAlt("Mesa de trabajo del taller");
        $photo->setWidth("1328");
        $photo->setHeight("747");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("fachada-de-la-tienda.jpg");
        $photo->setName("Fachada");
        $photo->setSlug("fachada");
        $photo->setDescription("Fachada de la tienda");
        $photo->setTitle("Foto de la fachada de la tienda");
        $photo->setAlt("fachada de la tienda");
        $photo->setWidth("1328");
        $photo->setHeight("747");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("escaparate-de-la-tienda.jpg");
        $photo->setName("Escaparate");
        $photo->setSlug("escaparate");
        $photo->setDescription("Escaparate de la tienda");
        $photo->setTitle("Foto del escaparate de la tienda");
        $photo->setAlt("escaparate de la tienda");
        $photo->setWidth("1440");
        $photo->setHeight("1080");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("vitrina-de-la-tienda-01.jpg");
        $photo->setName("Vitrina 1");
        $photo->setSlug("vitrina-1");
        $photo->setDescription("Vista frontal de la vitrina de la tienda");
        $photo->setTitle("Vitrina de la tienda, vista frontal");
        $photo->setAlt("vitrina de la tienda, vista frontal");
        $photo->setWidth("1440");
        $photo->setHeight("1080");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("vitrina-de-la-tienda-02.jpg");
        $photo->setName("Vitrina 2");
        $photo->setSlug("vitrina-2");
        $photo->setDescription("Vitrina de la tienda, vista desde arriba");
        $photo->setTitle("Vitrina de la tienda, vista desde arriba");
        $photo->setAlt("vitrina de la tienda, vista desde arriba");
        $photo->setWidth("1440");
        $photo->setHeight("1080");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("estantería-de-la-tienda-01.jpg");
        $photo->setName("Estantería 1");
        $photo->setSlug("estanteria-1");
        $photo->setDescription("Estantería para los componentes");
        $photo->setTitle("Estantería de componentes");
        $photo->setAlt("estantería de componentes");
        $photo->setWidth("810");
        $photo->setHeight("1080");

        $manager->persist($photo);

        // Insertamos otra foto:
        $photo = new Photo();

        $photo->setFileName("estantería-de-la-tienda-02.jpg");
        $photo->setName("Estantería 2");
        $photo->setSlug("estanteria-2");
        $photo->setDescription("Estantería para las fundas de smartphone");
        $photo->setTitle("Estantería de fundas para smartphone");
        $photo->setAlt("estantería de fundas para smartphones");
        $photo->setWidth("810");
        $photo->setHeight("1080");

        $manager->persist($photo);

        // Persistimos la base de datos
        $manager->flush();
    }
}
