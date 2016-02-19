<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e0b4a01a8c9de65796d71f39b38360b1f38c3d022303f0db0f5b1d59b4a2489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f02cfd4420f93e68ace261ceb8a6f744fa391fbe112b29a8cb72499b46d9f34b = $this->env->getExtension("native_profiler");
        $__internal_f02cfd4420f93e68ace261ceb8a6f744fa391fbe112b29a8cb72499b46d9f34b->enter($__internal_f02cfd4420f93e68ace261ceb8a6f744fa391fbe112b29a8cb72499b46d9f34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f02cfd4420f93e68ace261ceb8a6f744fa391fbe112b29a8cb72499b46d9f34b->leave($__internal_f02cfd4420f93e68ace261ceb8a6f744fa391fbe112b29a8cb72499b46d9f34b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6da5cb6497806bf585328068ec5bd6942bec950a7884faa62bcfeb61aa148a47 = $this->env->getExtension("native_profiler");
        $__internal_6da5cb6497806bf585328068ec5bd6942bec950a7884faa62bcfeb61aa148a47->enter($__internal_6da5cb6497806bf585328068ec5bd6942bec950a7884faa62bcfeb61aa148a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6da5cb6497806bf585328068ec5bd6942bec950a7884faa62bcfeb61aa148a47->leave($__internal_6da5cb6497806bf585328068ec5bd6942bec950a7884faa62bcfeb61aa148a47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_56c5b166f1c02e3a4bdca675a7d974bf4dc6f745948ec06b5c6d89ec66a6febc = $this->env->getExtension("native_profiler");
        $__internal_56c5b166f1c02e3a4bdca675a7d974bf4dc6f745948ec06b5c6d89ec66a6febc->enter($__internal_56c5b166f1c02e3a4bdca675a7d974bf4dc6f745948ec06b5c6d89ec66a6febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_56c5b166f1c02e3a4bdca675a7d974bf4dc6f745948ec06b5c6d89ec66a6febc->leave($__internal_56c5b166f1c02e3a4bdca675a7d974bf4dc6f745948ec06b5c6d89ec66a6febc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef9a722c8aac9a2c52711b72857b87fa82d0d77a5b2689c92fac80198f0ce690 = $this->env->getExtension("native_profiler");
        $__internal_ef9a722c8aac9a2c52711b72857b87fa82d0d77a5b2689c92fac80198f0ce690->enter($__internal_ef9a722c8aac9a2c52711b72857b87fa82d0d77a5b2689c92fac80198f0ce690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ef9a722c8aac9a2c52711b72857b87fa82d0d77a5b2689c92fac80198f0ce690->leave($__internal_ef9a722c8aac9a2c52711b72857b87fa82d0d77a5b2689c92fac80198f0ce690_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
