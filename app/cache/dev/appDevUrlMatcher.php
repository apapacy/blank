<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/25d8c7f')) {
            // _assetic_25d8c7f
            if ($pathinfo === '/css/25d8c7f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '25d8c7f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_25d8c7f',);
            }

            // _assetic_25d8c7f_0
            if ($pathinfo === '/css/25d8c7f_part_1_styles_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '25d8c7f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_25d8c7f_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/73a0cd7')) {
            // _assetic_73a0cd7
            if ($pathinfo === '/js/73a0cd7.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '73a0cd7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_73a0cd7',);
            }

            // _assetic_73a0cd7_0
            if ($pathinfo === '/js/73a0cd7_go.js_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '73a0cd7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_73a0cd7_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // en__RG__root
        if ($pathinfo === '/en/admin') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/ru/admin',  'permanent' => true,  '_locale' => 'en',  '_route' => 'en__RG__root',);
        }

        // de__RG__root
        if ($pathinfo === '/de/admin') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/ru/admin',  'permanent' => true,  '_locale' => 'de',  '_route' => 'de__RG__root',);
        }

        // ru__RG__root
        if ($pathinfo === '/ru/admin') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/ru/admin',  'permanent' => true,  '_locale' => 'ru',  '_route' => 'ru__RG__root',);
        }

        // fr__RG__root
        if ($pathinfo === '/fr/admin') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/ru/admin',  'permanent' => true,  '_locale' => 'fr',  '_route' => 'fr__RG__root',);
        }

        // __RG__root
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/ru/admin',  'permanent' => true,  '_locale' => '',  '_route' => '__RG__root',);
        }

        // en__RG__blank_admin_default_index
        if (0 === strpos($pathinfo, '/en/hello') && preg_match('#^/en/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__blank_admin_default_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
        }

        // de__RG__blank_admin_default_index
        if (0 === strpos($pathinfo, '/de/hello') && preg_match('#^/de/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__blank_admin_default_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'de',));
        }

        // ru__RG__blank_admin_default_index
        if (0 === strpos($pathinfo, '/ru/hello') && preg_match('#^/ru/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__blank_admin_default_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'ru',));
        }

        // fr__RG__blank_admin_default_index
        if (0 === strpos($pathinfo, '/fr/hello') && preg_match('#^/fr/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__blank_admin_default_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',));
        }

        // __RG__blank_admin_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '__RG__blank_admin_default_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_locale' => '',));
        }

        // en__RG__admin_json_editor_get
        if ($pathinfo === '/en/admin/json-editor/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_json_editor_get;
            }

            return array (  '_controller' => 'admin.json_editor.controller:getAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_json_editor_get',);
        }
        not_en__RG__admin_json_editor_get:

        // de__RG__admin_json_editor_get
        if ($pathinfo === '/de/admin/json-editor/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_json_editor_get;
            }

            return array (  '_controller' => 'admin.json_editor.controller:getAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_json_editor_get',);
        }
        not_de__RG__admin_json_editor_get:

        // ru__RG__admin_json_editor_get
        if ($pathinfo === '/ru/admin/json-editor/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ru__RG__admin_json_editor_get;
            }

            return array (  '_controller' => 'admin.json_editor.controller:getAction',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_json_editor_get',);
        }
        not_ru__RG__admin_json_editor_get:

        // fr__RG__admin_json_editor_get
        if ($pathinfo === '/fr/admin/json-editor/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__admin_json_editor_get;
            }

            return array (  '_controller' => 'admin.json_editor.controller:getAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_json_editor_get',);
        }
        not_fr__RG__admin_json_editor_get:

        // __RG__admin_json_editor_get
        if ($pathinfo === '/admin/json-editor/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not___RG__admin_json_editor_get;
            }

            return array (  '_controller' => 'admin.json_editor.controller:getAction',  '_locale' => '',  '_route' => '__RG__admin_json_editor_get',);
        }
        not___RG__admin_json_editor_get:

        // en__RG__admin_json_editor_post
        if ($pathinfo === '/en/admin/json-editor/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_json_editor_post;
            }

            return array (  '_controller' => 'admin.json_editor.controller:postAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_json_editor_post',);
        }
        not_en__RG__admin_json_editor_post:

        // de__RG__admin_json_editor_post
        if ($pathinfo === '/de/admin/json-editor/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_json_editor_post;
            }

            return array (  '_controller' => 'admin.json_editor.controller:postAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_json_editor_post',);
        }
        not_de__RG__admin_json_editor_post:

        // ru__RG__admin_json_editor_post
        if ($pathinfo === '/ru/admin/json-editor/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ru__RG__admin_json_editor_post;
            }

            return array (  '_controller' => 'admin.json_editor.controller:postAction',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_json_editor_post',);
        }
        not_ru__RG__admin_json_editor_post:

        // fr__RG__admin_json_editor_post
        if ($pathinfo === '/fr/admin/json-editor/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__admin_json_editor_post;
            }

            return array (  '_controller' => 'admin.json_editor.controller:postAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_json_editor_post',);
        }
        not_fr__RG__admin_json_editor_post:

        // __RG__admin_json_editor_post
        if ($pathinfo === '/admin/json-editor/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not___RG__admin_json_editor_post;
            }

            return array (  '_controller' => 'admin.json_editor.controller:postAction',  '_locale' => '',  '_route' => '__RG__admin_json_editor_post',);
        }
        not___RG__admin_json_editor_post:

        // en__RG__admin_json_editor_publish
        if ($pathinfo === '/en/admin/json-editor/publish') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_json_editor_publish;
            }

            return array (  '_controller' => 'admin.json_editor.controller:publishAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_json_editor_publish',);
        }
        not_en__RG__admin_json_editor_publish:

        // de__RG__admin_json_editor_publish
        if ($pathinfo === '/de/admin/json-editor/publish') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_json_editor_publish;
            }

            return array (  '_controller' => 'admin.json_editor.controller:publishAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_json_editor_publish',);
        }
        not_de__RG__admin_json_editor_publish:

        // ru__RG__admin_json_editor_publish
        if ($pathinfo === '/ru/admin/json-editor/publish') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ru__RG__admin_json_editor_publish;
            }

            return array (  '_controller' => 'admin.json_editor.controller:publishAction',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_json_editor_publish',);
        }
        not_ru__RG__admin_json_editor_publish:

        // fr__RG__admin_json_editor_publish
        if ($pathinfo === '/fr/admin/json-editor/publish') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__admin_json_editor_publish;
            }

            return array (  '_controller' => 'admin.json_editor.controller:publishAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_json_editor_publish',);
        }
        not_fr__RG__admin_json_editor_publish:

        // __RG__admin_json_editor_publish
        if ($pathinfo === '/admin/json-editor/publish') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not___RG__admin_json_editor_publish;
            }

            return array (  '_controller' => 'admin.json_editor.controller:publishAction',  '_locale' => '',  '_route' => '__RG__admin_json_editor_publish',);
        }
        not___RG__admin_json_editor_publish:

        // en__RG__admin_json_editor_image_upload
        if ($pathinfo === '/en/admin/json-editor/image-upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_json_editor_image_upload;
            }

            return array (  '_controller' => 'admin.json_editor.controller:imageUploadAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_json_editor_image_upload',);
        }
        not_en__RG__admin_json_editor_image_upload:

        // de__RG__admin_json_editor_image_upload
        if ($pathinfo === '/de/admin/json-editor/image-upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_json_editor_image_upload;
            }

            return array (  '_controller' => 'admin.json_editor.controller:imageUploadAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_json_editor_image_upload',);
        }
        not_de__RG__admin_json_editor_image_upload:

        // ru__RG__admin_json_editor_image_upload
        if ($pathinfo === '/ru/admin/json-editor/image-upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ru__RG__admin_json_editor_image_upload;
            }

            return array (  '_controller' => 'admin.json_editor.controller:imageUploadAction',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_json_editor_image_upload',);
        }
        not_ru__RG__admin_json_editor_image_upload:

        // fr__RG__admin_json_editor_image_upload
        if ($pathinfo === '/fr/admin/json-editor/image-upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__admin_json_editor_image_upload;
            }

            return array (  '_controller' => 'admin.json_editor.controller:imageUploadAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_json_editor_image_upload',);
        }
        not_fr__RG__admin_json_editor_image_upload:

        // __RG__admin_json_editor_image_upload
        if ($pathinfo === '/admin/json-editor/image-upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not___RG__admin_json_editor_image_upload;
            }

            return array (  '_controller' => 'admin.json_editor.controller:imageUploadAction',  '_locale' => '',  '_route' => '__RG__admin_json_editor_image_upload',);
        }
        not___RG__admin_json_editor_image_upload:

        // en__RG__admin_mail_create
        if ($pathinfo === '/en/api/mail/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_mail_create;
            }

            return array (  '_controller' => 'admin.mail.controller:postAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_mail_create',);
        }
        not_en__RG__admin_mail_create:

        // de__RG__admin_mail_create
        if ($pathinfo === '/de/api/mail/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_mail_create;
            }

            return array (  '_controller' => 'admin.mail.controller:postAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_mail_create',);
        }
        not_de__RG__admin_mail_create:

        // ru__RG__admin_mail_create
        if ($pathinfo === '/ru/api/mail/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ru__RG__admin_mail_create;
            }

            return array (  '_controller' => 'admin.mail.controller:postAction',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_mail_create',);
        }
        not_ru__RG__admin_mail_create:

        // fr__RG__admin_mail_create
        if ($pathinfo === '/fr/api/mail/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__admin_mail_create;
            }

            return array (  '_controller' => 'admin.mail.controller:postAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_mail_create',);
        }
        not_fr__RG__admin_mail_create:

        // __RG__admin_mail_create
        if ($pathinfo === '/api/mail/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not___RG__admin_mail_create;
            }

            return array (  '_controller' => 'admin.mail.controller:postAction',  '_locale' => '',  '_route' => '__RG__admin_mail_create',);
        }
        not___RG__admin_mail_create:

        // en__RG__blank_admin_post_index
        if (0 === strpos($pathinfo, '/en/post_plain/post') && preg_match('#^/en/post_plain/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__blank_admin_post_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::indexAction',  '_locale' => 'en',));
        }

        // de__RG__blank_admin_post_index
        if (0 === strpos($pathinfo, '/de/post_plain/post') && preg_match('#^/de/post_plain/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__blank_admin_post_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::indexAction',  '_locale' => 'de',));
        }

        // ru__RG__blank_admin_post_index
        if (0 === strpos($pathinfo, '/ru/post_plain/post') && preg_match('#^/ru/post_plain/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__blank_admin_post_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::indexAction',  '_locale' => 'ru',));
        }

        // fr__RG__blank_admin_post_index
        if (0 === strpos($pathinfo, '/fr/post_plain/post') && preg_match('#^/fr/post_plain/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__blank_admin_post_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::indexAction',  '_locale' => 'fr',));
        }

        // __RG__blank_admin_post_index
        if (0 === strpos($pathinfo, '/post_plain/post') && preg_match('#^/post_plain/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '__RG__blank_admin_post_index')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::indexAction',  '_locale' => '',));
        }

        // en__RG__blank_admin_post_get
        if (0 === strpos($pathinfo, '/en/post_plain/get') && preg_match('#^/en/post_plain/get/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__blank_admin_post_get;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__blank_admin_post_get')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::getAction',  '_locale' => 'en',));
        }
        not_en__RG__blank_admin_post_get:

        // de__RG__blank_admin_post_get
        if (0 === strpos($pathinfo, '/de/post_plain/get') && preg_match('#^/de/post_plain/get/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__blank_admin_post_get;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__blank_admin_post_get')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::getAction',  '_locale' => 'de',));
        }
        not_de__RG__blank_admin_post_get:

        // ru__RG__blank_admin_post_get
        if (0 === strpos($pathinfo, '/ru/post_plain/get') && preg_match('#^/ru/post_plain/get/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ru__RG__blank_admin_post_get;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__blank_admin_post_get')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::getAction',  '_locale' => 'ru',));
        }
        not_ru__RG__blank_admin_post_get:

        // fr__RG__blank_admin_post_get
        if (0 === strpos($pathinfo, '/fr/post_plain/get') && preg_match('#^/fr/post_plain/get/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__blank_admin_post_get;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__blank_admin_post_get')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::getAction',  '_locale' => 'fr',));
        }
        not_fr__RG__blank_admin_post_get:

        // __RG__blank_admin_post_get
        if (0 === strpos($pathinfo, '/post_plain/get') && preg_match('#^/post_plain/get/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not___RG__blank_admin_post_get;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '__RG__blank_admin_post_get')), array (  '_controller' => 'Blank\\Bundle\\AdminBundle\\Controller\\PostController::getAction',  '_locale' => '',));
        }
        not___RG__blank_admin_post_get:

        // en__RG__admin_post_read_one
        if (0 === strpos($pathinfo, '/en/post/get') && preg_match('#^/en/post/get/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_post_read_one;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_post_read_one')), array (  '_controller' => 'admin.post.controller:getAction',  '_locale' => 'en',));
        }
        not_en__RG__admin_post_read_one:

        // de__RG__admin_post_read_one
        if (0 === strpos($pathinfo, '/de/post/get') && preg_match('#^/de/post/get/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_post_read_one;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'de__RG__admin_post_read_one')), array (  '_controller' => 'admin.post.controller:getAction',  '_locale' => 'de',));
        }
        not_de__RG__admin_post_read_one:

        // ru__RG__admin_post_read_one
        if (0 === strpos($pathinfo, '/ru/post/get') && preg_match('#^/ru/post/get/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ru__RG__admin_post_read_one;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ru__RG__admin_post_read_one')), array (  '_controller' => 'admin.post.controller:getAction',  '_locale' => 'ru',));
        }
        not_ru__RG__admin_post_read_one:

        // fr__RG__admin_post_read_one
        if (0 === strpos($pathinfo, '/fr/post/get') && preg_match('#^/fr/post/get/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__admin_post_read_one;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_post_read_one')), array (  '_controller' => 'admin.post.controller:getAction',  '_locale' => 'fr',));
        }
        not_fr__RG__admin_post_read_one:

        // __RG__admin_post_read_one
        if (0 === strpos($pathinfo, '/post/get') && preg_match('#^/post/get/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not___RG__admin_post_read_one;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '__RG__admin_post_read_one')), array (  '_controller' => 'admin.post.controller:getAction',  '_locale' => '',));
        }
        not___RG__admin_post_read_one:

        // en__RG__admin_post_read_list
        if ($pathinfo === '/en/post/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__admin_post_read_list;
            }

            return array (  '_controller' => 'admin.post.controller:getListAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_post_read_list',);
        }
        not_en__RG__admin_post_read_list:

        // de__RG__admin_post_read_list
        if ($pathinfo === '/de/post/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_de__RG__admin_post_read_list;
            }

            return array (  '_controller' => 'admin.post.controller:getListAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_post_read_list',);
        }
        not_de__RG__admin_post_read_list:

        // ru__RG__admin_post_read_list
        if ($pathinfo === '/ru/post/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ru__RG__admin_post_read_list;
            }

            return array (  '_controller' => 'admin.post.controller:getListAction',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_post_read_list',);
        }
        not_ru__RG__admin_post_read_list:

        // fr__RG__admin_post_read_list
        if ($pathinfo === '/fr/post/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__admin_post_read_list;
            }

            return array (  '_controller' => 'admin.post.controller:getListAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_post_read_list',);
        }
        not_fr__RG__admin_post_read_list:

        // __RG__admin_post_read_list
        if ($pathinfo === '/post/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not___RG__admin_post_read_list;
            }

            return array (  '_controller' => 'admin.post.controller:getListAction',  '_locale' => '',  '_route' => '__RG__admin_post_read_list',);
        }
        not___RG__admin_post_read_list:

        // en__RG__admin_post_create_one
        if ($pathinfo === '/en/post/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__admin_post_create_one;
            }

            return array (  '_controller' => 'admin.post.controller:postAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_post_create_one',);
        }
        not_en__RG__admin_post_create_one:

        // de__RG__admin_post_create_one
        if ($pathinfo === '/de/post/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_de__RG__admin_post_create_one;
            }

            return array (  '_controller' => 'admin.post.controller:postAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_post_create_one',);
        }
        not_de__RG__admin_post_create_one:

        // ru__RG__admin_post_create_one
        if ($pathinfo === '/ru/post/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ru__RG__admin_post_create_one;
            }

            return array (  '_controller' => 'admin.post.controller:postAction',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_post_create_one',);
        }
        not_ru__RG__admin_post_create_one:

        // fr__RG__admin_post_create_one
        if ($pathinfo === '/fr/post/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__admin_post_create_one;
            }

            return array (  '_controller' => 'admin.post.controller:postAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_post_create_one',);
        }
        not_fr__RG__admin_post_create_one:

        // __RG__admin_post_create_one
        if ($pathinfo === '/post/post') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not___RG__admin_post_create_one;
            }

            return array (  '_controller' => 'admin.post.controller:postAction',  '_locale' => '',  '_route' => '__RG__admin_post_create_one',);
        }
        not___RG__admin_post_create_one:

        // en__RG__admin_put_update_one
        if ($pathinfo === '/en/post/put') {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_en__RG__admin_put_update_one;
            }

            return array (  '_controller' => 'admin.post.controller:putAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_put_update_one',);
        }
        not_en__RG__admin_put_update_one:

        // de__RG__admin_put_update_one
        if ($pathinfo === '/de/post/put') {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_de__RG__admin_put_update_one;
            }

            return array (  '_controller' => 'admin.post.controller:putAction',  '_locale' => 'de',  '_route' => 'de__RG__admin_put_update_one',);
        }
        not_de__RG__admin_put_update_one:

        // ru__RG__admin_put_update_one
        if ($pathinfo === '/ru/post/put') {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_ru__RG__admin_put_update_one;
            }

            return array (  '_controller' => 'admin.post.controller:putAction',  '_locale' => 'ru',  '_route' => 'ru__RG__admin_put_update_one',);
        }
        not_ru__RG__admin_put_update_one:

        // fr__RG__admin_put_update_one
        if ($pathinfo === '/fr/post/put') {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_fr__RG__admin_put_update_one;
            }

            return array (  '_controller' => 'admin.post.controller:putAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_put_update_one',);
        }
        not_fr__RG__admin_put_update_one:

        // __RG__admin_put_update_one
        if ($pathinfo === '/post/put') {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not___RG__admin_put_update_one;
            }

            return array (  '_controller' => 'admin.post.controller:putAction',  '_locale' => '',  '_route' => '__RG__admin_put_update_one',);
        }
        not___RG__admin_put_update_one:

        // en__RG__homepage
        if (rtrim($pathinfo, '/') === '/en') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__homepage',);
        }

        // de__RG__homepage
        if (rtrim($pathinfo, '/') === '/de') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'de__RG__homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'de',  '_route' => 'de__RG__homepage',);
        }

        // ru__RG__homepage
        if (rtrim($pathinfo, '/') === '/ru') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ru__RG__homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'ru',  '_route' => 'ru__RG__homepage',);
        }

        // fr__RG__homepage
        if (rtrim($pathinfo, '/') === '/fr') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__homepage',);
        }

        // __RG__homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '__RG__homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => '',  '_route' => '__RG__homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
