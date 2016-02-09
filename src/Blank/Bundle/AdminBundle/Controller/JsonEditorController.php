<?php

namespace Blank\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/json-editor", service="admin.json_editor.controller")
 */
class JsonEditorController
{
    private $twig;
    private $root;
    public function __construct($twig, $root)
    {
        $this->twig = $twig;
        $this->root = $root;
    }

    /**
     * @Rest\Get("/get", name="admin_json_editor_get")
     * @Rest\View()
     *
     * @return
     */
    public function getAction(Request $request)
    {
        $path = $this->root.'/Resources/translations/messages.'.$request->getLocale().'.json';
        if (file_exists($path)) {
            $content = file_get_contents($path);
        } else {
            $content = '{}';
        }

        return array('json' => $content);
    }
}

/*
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
