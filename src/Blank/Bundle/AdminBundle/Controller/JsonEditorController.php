<?php

namespace Blank\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/json-editor", service="admin.json_editor.controller")
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
        $path = $this->root.'/Resources/translations/messages.'.$request->getLocale().'.new.json';
        if (file_exists($path)) {
            $content = file_get_contents($path);
        } else {
            $content = '{}';
        }

        return array('json' => $content);
    }

    /**
     * @Rest\Post("/post", name="admin_json_editor_post")
     * @Rest\View()
     *
     * @return
     */
    public function postAction(Request $request)
    {
        $path = $this->root.'/Resources/translations/messages.'.$request->getLocale().'.new.json';
        file_put_contents(
            $path,
            file_get_contents('php://input')
        );

        return array();
    }

    /**
     * @Rest\Post("/publish", name="admin_json_editor_publish")
     * @Rest\View()
     *
     * @return
     */
    public function publishAction(Request $request)
    {
        $path = $this->root.'/Resources/translations/messages.'.$request->getLocale().'.json';
        file_put_contents(
            $path,
            file_get_contents('php://input')
        );
	$fs = new \Symfony\Component\Filesystem\Filesystem();
	$fs->remove($this->root.'/cache/prod/translations');
        return array();
    }

    /**
     * @Rest\Post("/image-upload", name="admin_json_editor_image_upload")
     * @Rest\View()
     *
     * @return
     */
    public function imageUploadAction(Request $request)
    {
        $fileName = $request->get('filename');
        if (!$fileName) {
            return '';
        }
        $path = $this->root.'/../web/uploads/'.$fileName;
        file_put_contents(
                    $path,
                    file_get_contents('php://input')
                );

        return '';
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
