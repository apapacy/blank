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
 * @Route("/post_plain")
 */
class PostController
{

    /**
     * @DI\Inject("doctrine.orm.default_entity_manager")
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @DI\Inject("admin.repository.post")
     * @var Blank\Bundle\AdminBundle\Entity\PostRepository
     */
    private $post;


    /**
     * @DI\Inject("templating")
     */
    private $templating;

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
        return $this->templating->renderResponse('Post/index.html.twig', array('post' => $post));
    }

    /**
     * @Route("/get/{id}")
     * @Template()
     * @Rest\View()
     * @Method("Get")
     */
    public function getAction(Post $post)
    {
        //$post = $this->post->find($id);
        //print_r($post);
        //die('*');
        return $post;
    }

}
