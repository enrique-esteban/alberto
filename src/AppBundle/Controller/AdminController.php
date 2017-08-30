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

    public function preUpdateEmployeeEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
}
