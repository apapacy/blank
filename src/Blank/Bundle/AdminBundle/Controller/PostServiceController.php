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
use FOS\RestBundle\View\View;
use JMS\DiExtraBundle\Annotation as DI;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Blank\Bundle\AdminBundle\Entity\Post;
use Blank\Bundle\AdminBundle\Entity\PostRepository;

/**
 * @Route("/post", service="admin.post.controller")
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
     * @Cache(expires="+0 minutes", public=true)
     * @Rest\Get("/get/{post}", name="admi_post_read_one", defaults={"_format": "json"})
     * @Rest\View()
     * @param Post post
     * @return Post
     *
     */
    public function getAction(Post $post)
    {
        return $post;
    }

    /**
     * @Cache(expires="+0 minutes", public=true)
     * @Rest\Get("/get.{_format}", name="admin_post_read_list", defaults={"_format"="json"})
     * @Rest\View(serializerGroups={"list"})
     * @return array
     *
     */
    public function getListAction()
    {
        return $this->post->findAll();
    }

    /**
     * @Rest\Put("/put", name="post_svc_put")
     * @ParamConverter("post", converter="fos_rest.request_body", class="Blank\Bundle\AdminBundle\Entity\Post")
     * @return Post
     * @000Template()
     */
    public function putAction(Post $post)
    {
      //$this->post->update($post);
      //$this->em->persist($post);
      $this->em->flush();
      return $post;
    }


}

/**
   * 1PreAuthorize("hasRole('ROLE_ADMIN')")
   * 1Rest\Post("/rest", defaults={"_format": "json"}, name="three_ugc_post_create")
   * 1ParamConverter("ugcPost",
   *      converter="fos_rest.request_body",
   *      class="Three\Bundle\AppBundle\Entity\UgcPost"
   * )
   * 1Rest\View()
   * 1param UgcPost $ugcPost
   * 1param ConstraintViolationListInterface $validationErrors
   * 1return UgcPost
   */
