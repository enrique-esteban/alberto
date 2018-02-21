<?php
namespace AppBundle\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;


/**
 * Class AppExtension
 * @package AppBundle\Twig\Extension
 */
class AppExtension extends AbstractExtension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            new TwigFilter('phone', array($this, 'phoneFilter')),
            new TwigFilter('dni', array($this, 'dniFilter')),
        );
    }

    /**
     * @param $phone
     * @return string
     */
    public function phoneFilter($phone)
    {
        $phone = str_replace(array(" ", "-"), array(""), $phone);
        $start = strlen($phone);
        $formattedPhoneNumber = '';

        while($start >= 0) {
            $formattedPhoneNumber = substr($phone, $start, 3) . " " . $formattedPhoneNumber;
            $start -= 3;
        }

        return $formattedPhoneNumber;
    }

    public function dniFilter($dni)
    {
        return substr($dni,0,-1).'-'.substr($dni, -1);
    }
}