<?php

/* BlankAdminBundle:JsonEditor:get.html.twig */
class __TwigTemplate_716b62174d9c9c4bb844f62ea3483c591f849f93b67c17dbe8a8ce55a9098e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7c01b46ba75c9f3c242844b7e1ccaf0a8b6b55103289910b9144f36d04eabb3 = $this->env->getExtension("native_profiler");
        $__internal_b7c01b46ba75c9f3c242844b7e1ccaf0a8b6b55103289910b9144f36d04eabb3->enter($__internal_b7c01b46ba75c9f3c242844b7e1ccaf0a8b6b55103289910b9144f36d04eabb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlankAdminBundle:JsonEditor:get.html.twig"));

        // line 1
        echo "<html>
<head>
    <link00 rel='stylesheet' href='/assets/bootstrap/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='/assets/foundation-5.5.3/css/foundation.css'>
    <link00 rel='stylesheet' href='/assets/foundation-5.5.3/css/normalize.css'>
    <script src=\"/assets/js/require.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/js/admin/require.config.js\" type=\"text/javascript\"></script>
</head>
<div class='container'>
    <div class='row'>
        <div class='col-md-8'>
            <h2>Редактирование контента</h2>
            <p>Для обновления данных на веб-странице нажмите копку
                <input type=\"button\" value=\"Опубликовать\" id=\"save\">
            </p>

            <div id='editor'></div>
        </div>
        <div class='col-md-4'>
            <h2>Просмотр заказов</h2>
            <p><form action=\"/admin/post/0/10\"><input type=\"submit\" value=\"Перейти\"></form></p>

            <textarea style=\"display:none\" id='output' style='width: 100%; height: 300px; font-family: monospace;'>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["json"]) ? $context["json"] : $this->getContext($context, "json")), "html", null, true);
        echo "</textarea>

            <h2></h2>

            <textarea id='validate' style='display:none;width: 100%; height: 200px; font-family: monospace;' readonly disabled></textarea>
        </div>
    </div>
</div>
</body>
";
        
        $__internal_b7c01b46ba75c9f3c242844b7e1ccaf0a8b6b55103289910b9144f36d04eabb3->leave($__internal_b7c01b46ba75c9f3c242844b7e1ccaf0a8b6b55103289910b9144f36d04eabb3_prof);

    }

    public function getTemplateName()
    {
        return "BlankAdminBundle:JsonEditor:get.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <link00 rel='stylesheet' href='/assets/bootstrap/dist/css/bootstrap.min.css'>*/
/*     <link rel='stylesheet' href='/assets/foundation-5.5.3/css/foundation.css'>*/
/*     <link00 rel='stylesheet' href='/assets/foundation-5.5.3/css/normalize.css'>*/
/*     <script src="/assets/js/require.js" type="text/javascript"></script>*/
/*     <script src="/assets/js/admin/require.config.js" type="text/javascript"></script>*/
/* </head>*/
/* <div class='container'>*/
/*     <div class='row'>*/
/*         <div class='col-md-8'>*/
/*             <h2>Редактирование контента</h2>*/
/*             <p>Для обновления данных на веб-странице нажмите копку*/
/*                 <input type="button" value="Опубликовать" id="save">*/
/*             </p>*/
/* */
/*             <div id='editor'></div>*/
/*         </div>*/
/*         <div class='col-md-4'>*/
/*             <h2>Просмотр заказов</h2>*/
/*             <p><form action="/admin/post/0/10"><input type="submit" value="Перейти"></form></p>*/
/* */
/*             <textarea style="display:none" id='output' style='width: 100%; height: 300px; font-family: monospace;'>{{ json  }}</textarea>*/
/* */
/*             <h2></h2>*/
/* */
/*             <textarea id='validate' style='display:none;width: 100%; height: 200px; font-family: monospace;' readonly disabled></textarea>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* */
