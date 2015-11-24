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

/**
 */
class PostController
{


    //Doctrine\ORM\EntityManager $em;

   /**
    * @DI\InjectParams({
    *     "em" = @DI\Inject("doctrine.orm.default_entity_manager"),
    *     "post" = @DI\Inject("admin.repository.post")
    * })
    */
   function __construct($em, $post){
       $this->em = $em;
       $this->post = $post;
   }

    /**
     * @Route("/post/post/{id}")
     * @Template()
     */
    public function indexAction($id)
    {
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

    /**
     * @Route("/post/get/{id}")
     * @Template()
     */
    public function getAction($id)
    {
        $post = $this->post->find($id);
        return array('post' => $post);
    }



}

