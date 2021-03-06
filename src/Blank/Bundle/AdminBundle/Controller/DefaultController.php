<?php

namespace Blank\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\Controller\Annotations as Rest;


class DefaultController extends Controller
{
    /**
     * @Rest\Route("/hello/{name}")
     * @Rest\View()
     */
    public function indexAction($name)
    {
        //return ;//$this->forward('admin.post.controller:getAction', array('id' => $name));
        //die('15');
        return array('name' => $name);
    }
}
