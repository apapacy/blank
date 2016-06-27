<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
      die($name);
        return array('name' => $name);

    }


    /**
     * @Route("/create")
     * @Template()
     */
    public function createAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        for ($i=0; $i < 100000; $i++) {
            $product = new \Acme\StoreBundle\Document\Product();
            $product->setName('A Foo Bar');
            $product->setPrice('19.99');

            $dm->persist($product);
            //$dm->flush();
        }
        //$dm->persist($product);
        $dm->flush();

        return new Response('Created product id '.$product->getId());
    }



}
