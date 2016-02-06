<?php

namespace Blank\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Blank\Bundle\AdminBundle\Entity\Mail;

/**
 * @Route("/api/mail", service="admin.mail.controller")
 */
class MailController
{
    private $mailer;
    private $twig;
    public function __construct($mailer, $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    /**
     * @ParamConverter("post", converter="fos_rest.request_body", class="Blank\Bundle\AdminBundle\Entity\Mail")
     * @Rest\Post("/post", name="admin_mail_create")
     * @Rest\View()
     *
     * @param Mail mail
     *
     * @return Mail
     */
    public function postAction(Mail $mail)
    {
      for ($i = 0;$i < 100;++$i) {

        $message = \Swift_Message::newInstance()
              ->setSubject('Hello Email 1++')
              ->setFrom('An6rey@gmail.com')
              ->setTo('An6rey@gmail.com')
              ->setBody(
              $this->twig->render(
                                    'BlankAdminBundle:Mail:body.html.twig',
                                     (array) $mail
                                ), 'text/html');
            $status = $this->mailer->send($message);
            $mail->setName($i);
        }

        return $mail;
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
