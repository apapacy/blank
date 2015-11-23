<?php

namespace Blank\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\DiExtraBundle\Annotation as DI;


use Blank\Bundle\AdminBundle\Entity\Post;

class PostController extends Controller
{

   /**
    * @DI\Inject("doctrine.orm.entity_manager")
    * @var EntityManagerInterface
    */
   public $em;

    /**
     * @Route("/post/{id}")
     * @Template()
     */
    public function indexAction($id)
    {
        //$em =  $this->container->get('doctrine.orm.default_entity_manager');
        $post = new Post();
        $post->setName('Александр');
        $post->setPhone('097 758 11 54');
        $post->setEmail('admin@local.host');
        $post->setProduct('phone Elari (red)');
        $post->setPrice(1389);
        $post->setPlace('Харьков');
        $post->setTransport("novapochta");
        $post->setPayMethod("cache");
        $this->em->persist($post);
        $this->em->flush();
        return array('post' => $post);
    }
}

