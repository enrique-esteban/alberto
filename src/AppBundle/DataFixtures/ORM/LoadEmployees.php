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

        $employee->setUsername('enrique');
        $employee->setName('Enrique');
        $employee->setDni(null);
        $employee->setLastName('Esteban');
        $employee->setTelephone('677800959');
        $employee->setAddress(null);
        $employee->setEmail('ense.esteban@gmail.com');
        $employee->setType('Administrador web');
        $employee->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));
        $employee->setEnabled(true);
        $employee->setPassword('$2y$13$FQuJP0QqrSCsThSeqye30.ZPEAyLL./HLB0my190L/5sqXd8vpzFq');
//        $plainPassword = 'admin';
//        $encodedPassword = $encoder->encodePassword($employee, $plainPassword);
//
//        $employee->setPlainPassword($plainPassword);
//        $employee->setPassword($encodedPassword);

        $this->addReference('employee-admin', $employee);
        $manager->persist($employee);

        // Añadimos otro administrador (Alberto):
        $employee = new Employee();

        $employee->setUsername('alberto');
        $employee->setName('Alberto');
        $employee->setDni(null);
        $employee->setLastName('Rivera');
        $employee->setTelephone('686674942');
        $employee->setAddress(null);
        $employee->setEmail('nadocamerx@gmail.com');
        $employee->setType('Chupamingas;abrazafarolas');
        $employee->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));
        $employee->setEnabled(true);
        $employee->setPassword('$2y$13$FQuJP0QqrSCsThSeqye30.ZPEAyLL./HLB0my190L/5sqXd8vpzFq');
//        $plainPassword = 'alberto';
//        $encodedPassword = $encoder->encodePassword($employee, $plainPassword);
//
//        $employee->setPlainPassword($plainPassword);
//        $employee->setPassword($encodedPassword);

        $this->addReference('employee-alberto', $employee);
        $manager->persist($employee);

        // Añadimos otro administrador (Florin):
        $employee = new Employee();

        $employee->setUsername('florin');
        $employee->setName('Florin');
        $employee->setDni(null);
        $employee->setLastName('Olaru');
        $employee->setTelephone('642851371');
        $employee->setAddress(null);
        $employee->setEmail('expertosit06@gmail.com');
        $employee->setType('Dueño;Dios');
        $employee->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));
        $employee->setEnabled(true);
        $employee->setPassword('$2y$13$FQuJP0QqrSCsThSeqye30.ZPEAyLL./HLB0my190L/5sqXd8vpzFq');
//        $plainPassword = 'florin';
//        $encodedPassword = $encoder->encodePassword($employee, $plainPassword);
//
//        $employee->setPlainPassword($plainPassword);
//        $employee->setPassword($encodedPassword);

        $this->addReference('employee-florin', $employee);
        $manager->persist($employee);

        // Añadimos otro administrador (Carlos):
        $employee = new Employee();

        $employee->setUsername('carlos');
        $employee->setName('Carlos');
        $employee->setDni(null);
        $employee->setLastName(null);
        $employee->setTelephone('628406103');
        $employee->setAddress(null);
        $employee->setEmail('carlos@carlos.com');
        $employee->setType('Técnico;CM;Public Asisstance Manager');
        $employee->setRoles(array('ROLE_ADMIN', 'ROLE_USER'));
        $employee->setEnabled(true);
        $employee->setPassword('$2y$13$FQuJP0QqrSCsThSeqye30.ZPEAyLL./HLB0my190L/5sqXd8vpzFq');
//        $plainPassword = 'carlos';
//        $encodedPassword = $encoder->encodePassword($employee, $plainPassword);
//
//        $employee->setPlainPassword($plainPassword);
//        $employee->setPassword($encodedPassword);

        $this->addReference('employee-carlos', $employee);
        $manager->persist($employee);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }

}
