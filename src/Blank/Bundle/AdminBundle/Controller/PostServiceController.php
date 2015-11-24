<?php

namespace Blank\Bundle\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\DiExtraBundle\Annotation as DI;

use Blank\Bundle\AdminBundle\Entity\Post;
use Blank\Bundle\AdminBundle\Entity\PostRepository;

/**
 * @Route("/post_svc", service="admin.post_svc.controller")
 */
class PostServiceController
{


  private $em,
        $post;

   function __construct(\Doctrine\ORM\EntityManager $em, PostRepository $post)
   {
       $this->em = $em;
       $this->post = $post;
   }
    /**
     * @Route("/post/{id}")
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
     * @Route("/get/{id}")
     * @Template()
     */
    public function getAction($id)
    {

        $post = $this->post->find($id);
        return array('post' => $post);
    }



}
