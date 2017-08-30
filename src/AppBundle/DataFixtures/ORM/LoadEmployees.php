<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Employee;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadEmployees extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;


    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $encoder = $this->container->get('security.password_encoder');

        // Añadimos un administrador (Admin):
        $employee = new Employee();

        $employee->setUsername('admin');
        $employee->setName('admin');
        $employee->setLastName('admin');
        $employee->setTelephone(null);
        $employee->setAddress(null);
        $employee->setEmail('admin@admin.com');
        $employee->setType('Administrador web');
        $employee->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));
        $employee->setEnabled(true);

        $plainPassword = 'ys1fdm.*';
        $encodedPassword = $encoder->encodePassword($employee, $plainPassword);

        $employee->setPlainPassword($plainPassword);
        $employee->setPassword($encodedPassword);

        $this->addReference('employee-admin', $employee);
        $manager->persist($employee);

        // Añadimos otro administrador (Alberto):
        $employee = new Employee();

        $employee->setUsername('alberto');
        $employee->setName('Alberto');
        $employee->setLastName('Rivera');
        $employee->setTelephone('686674942');
        $employee->setAddress(null);
        $employee->setEmail('nadocamerx@gmail.com');
        $employee->setType('Chupamingas');
        $employee->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));
        $employee->setEnabled(true);

        $plainPassword = '06tisotexper';
        $encodedPassword = $encoder->encodePassword($employee, $plainPassword);

        $employee->setPlainPassword($plainPassword);
        $employee->setPassword($encodedPassword);

        $this->addReference('employee-alberto', $employee);
        $manager->persist($employee);

        // Añadimos otro administrador (Florin):
        $employee = new Employee();

        $employee->setUsername('florin');
        $employee->setName('Florin');
        $employee->setLastName('Olaru');
        $employee->setTelephone('642851371');
        $employee->setAddress(null);
        $employee->setEmail('expertosit06@gmail.com');
        $employee->setType('Dueño');
        $employee->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));
        $employee->setEnabled(true);

        $plainPassword = '16tisotexper';
        $encodedPassword = $encoder->encodePassword($employee, $plainPassword);

        $employee->setPlainPassword($plainPassword);
        $employee->setPassword($encodedPassword);

        $this->addReference('employee-florin', $employee);
        $manager->persist($employee);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }

}
