<?php

/* base.html.twig */
class __TwigTemplate_141fe2b7bc4bc8864011590c53f771ace43136840a2e464e6bdc2849282707f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_501032b90eec95c2278f862fa845c94d9f4ab337e12bb1d132cc151f497f1508 = $this->env->getExtension("native_profiler");
        $__internal_501032b90eec95c2278f862fa845c94d9f4ab337e12bb1d132cc151f497f1508->enter($__internal_501032b90eec95c2278f862fa845c94d9f4ab337e12bb1d132cc151f497f1508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_501032b90eec95c2278f862fa845c94d9f4ab337e12bb1d132cc151f497f1508->leave($__internal_501032b90eec95c2278f862fa845c94d9f4ab337e12bb1d132cc151f497f1508_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_778c50212db5e63dc61d424a4b36dde10bd9d1caffa26cfb48395783d80a38ce = $this->env->getExtension("native_profiler");
        $__internal_778c50212db5e63dc61d424a4b36dde10bd9d1caffa26cfb48395783d80a38ce->enter($__internal_778c50212db5e63dc61d424a4b36dde10bd9d1caffa26cfb48395783d80a38ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_778c50212db5e63dc61d424a4b36dde10bd9d1caffa26cfb48395783d80a38ce->leave($__internal_778c50212db5e63dc61d424a4b36dde10bd9d1caffa26cfb48395783d80a38ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24e6b47fbc176d32a16cdf26e4ff5939942cd59a5e8b7f32b2d1dc09f7a9ccaa = $this->env->getExtension("native_profiler");
        $__internal_24e6b47fbc176d32a16cdf26e4ff5939942cd59a5e8b7f32b2d1dc09f7a9ccaa->enter($__internal_24e6b47fbc176d32a16cdf26e4ff5939942cd59a5e8b7f32b2d1dc09f7a9ccaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_24e6b47fbc176d32a16cdf26e4ff5939942cd59a5e8b7f32b2d1dc09f7a9ccaa->leave($__internal_24e6b47fbc176d32a16cdf26e4ff5939942cd59a5e8b7f32b2d1dc09f7a9ccaa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_18f1cb7a87f098e74bed58a167c96b8179cba8d097d0c99db0d93018a46842d6 = $this->env->getExtension("native_profiler");
        $__internal_18f1cb7a87f098e74bed58a167c96b8179cba8d097d0c99db0d93018a46842d6->enter($__internal_18f1cb7a87f098e74bed58a167c96b8179cba8d097d0c99db0d93018a46842d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18f1cb7a87f098e74bed58a167c96b8179cba8d097d0c99db0d93018a46842d6->leave($__internal_18f1cb7a87f098e74bed58a167c96b8179cba8d097d0c99db0d93018a46842d6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b53304408b5db1e8f2bac9539933c7808712b7579721014fd40309ff93fe79b = $this->env->getExtension("native_profiler");
        $__internal_8b53304408b5db1e8f2bac9539933c7808712b7579721014fd40309ff93fe79b->enter($__internal_8b53304408b5db1e8f2bac9539933c7808712b7579721014fd40309ff93fe79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b53304408b5db1e8f2bac9539933c7808712b7579721014fd40309ff93fe79b->leave($__internal_8b53304408b5db1e8f2bac9539933c7808712b7579721014fd40309ff93fe79b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
