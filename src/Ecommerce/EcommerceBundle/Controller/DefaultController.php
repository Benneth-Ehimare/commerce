<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
//        $tonton = 'Olivier';
        $mama = array('mama', 'papa', 'uncle');
        $tontons = array('tonton1','tonton2','tonton3');
        $image = array('image');

        return $this->render('default:index.html.twig', array('name' => $name,
                                                                                    'tontons' => $tontons,
                                                                                     'mama' => $mama,
                                                                                      'image' => $image,));
    }


    /**
     * @Route("/hello/{name}", name="_demo_hello")
     */
    public function helloAction($name)
    {
        // replace this example code with whatever you need
        return array('name' => $name);
    }

    /**
     * @Route("/Eben", name="Eben")
     */
    public function EbenAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/Eben.html.twig');
    }


    /**
     * @Route("/you", name="homepage")
     */
    public function youAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/youben.html.twig');
    }

    /**
     * @Route("/layout", name="layout")
     */
    public function layoutAction()
    {
        // replace this example code with whatever you need
        return $this->render('Romain:ben.html.twig');
    }
//
//    public function menuAction()
//    {
//        // replace this example code with whatever you need
//        return $this->render('EcommerceEcommerceBundle:Romain:init.html.twig');
//    }





}



