<?php

namespace AppBundle\Controller;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

/**
 * Controlador personalizado de EasyAdminBundle para integrar FOSUserBundle.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class AdminController extends BaseAdminController
{
    /**
     * Acción para crear nuevos usuarios mediante el 'user manager' de FOSUserBundle
     *
     * @return \FOS\UserBundle\Model\UserInterface|mixed
     */
    public function createNewEmployeeEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    /**
     * @param $user
     */
    public function prePersistEmployeeEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    /**
     * @param $user
     */
    public function preUpdateEmployeeEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    /**
     * @param $entity
     */
    protected function prePersistInvoiceEntity($entity)
    {
        $em = $this->getDoctrine()->getManager();
        
        $date = new \DateTime('now');
        $year = $date->format('Y');

        $invoices = $em->getRepository('AppBundle:Invoice')->findByYear($year);

        $maxNum = 1;
        foreach ($invoices as $invoice) {
            $numCode = (int) substr($invoice->getCode(), -5);
            if ($numCode > $maxNum) {
                $maxNum = $numCode;
            }
        }

        $entity->setCode($year.'/'.str_pad($maxNum + 1,'5','0',STR_PAD_LEFT));
    }
}
