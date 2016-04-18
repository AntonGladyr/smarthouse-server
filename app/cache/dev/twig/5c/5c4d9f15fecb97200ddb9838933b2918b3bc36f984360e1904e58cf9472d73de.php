<?php

/* base.html.twig */
class __TwigTemplate_5cc5172bdde16530bda5c94a67645c7d4d1665ef843491f32524047a94727a45 extends Twig_Template
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
        $__internal_c68319ed679cc390ca9c84957bff4f891d50c808b39045b3568bd513ba40b361 = $this->env->getExtension("native_profiler");
        $__internal_c68319ed679cc390ca9c84957bff4f891d50c808b39045b3568bd513ba40b361->enter($__internal_c68319ed679cc390ca9c84957bff4f891d50c808b39045b3568bd513ba40b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c68319ed679cc390ca9c84957bff4f891d50c808b39045b3568bd513ba40b361->leave($__internal_c68319ed679cc390ca9c84957bff4f891d50c808b39045b3568bd513ba40b361_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72780d8a85960756f1701f5d5e80b5b33c3ef809c4d65895af50237b90e96493 = $this->env->getExtension("native_profiler");
        $__internal_72780d8a85960756f1701f5d5e80b5b33c3ef809c4d65895af50237b90e96493->enter($__internal_72780d8a85960756f1701f5d5e80b5b33c3ef809c4d65895af50237b90e96493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_72780d8a85960756f1701f5d5e80b5b33c3ef809c4d65895af50237b90e96493->leave($__internal_72780d8a85960756f1701f5d5e80b5b33c3ef809c4d65895af50237b90e96493_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f1051d8d9d6c687fe681fafba27111dfb02d0858ae4f5ed1370dce38f109041 = $this->env->getExtension("native_profiler");
        $__internal_8f1051d8d9d6c687fe681fafba27111dfb02d0858ae4f5ed1370dce38f109041->enter($__internal_8f1051d8d9d6c687fe681fafba27111dfb02d0858ae4f5ed1370dce38f109041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f1051d8d9d6c687fe681fafba27111dfb02d0858ae4f5ed1370dce38f109041->leave($__internal_8f1051d8d9d6c687fe681fafba27111dfb02d0858ae4f5ed1370dce38f109041_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c870c715b99a9b35c74b57de94ece391805aa18ebdf7ee2884bad6b87da6b425 = $this->env->getExtension("native_profiler");
        $__internal_c870c715b99a9b35c74b57de94ece391805aa18ebdf7ee2884bad6b87da6b425->enter($__internal_c870c715b99a9b35c74b57de94ece391805aa18ebdf7ee2884bad6b87da6b425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c870c715b99a9b35c74b57de94ece391805aa18ebdf7ee2884bad6b87da6b425->leave($__internal_c870c715b99a9b35c74b57de94ece391805aa18ebdf7ee2884bad6b87da6b425_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3c482b062a942823afaf499c7aa1d3d975b508ea747e2aec5d6fce4cff70e8a = $this->env->getExtension("native_profiler");
        $__internal_e3c482b062a942823afaf499c7aa1d3d975b508ea747e2aec5d6fce4cff70e8a->enter($__internal_e3c482b062a942823afaf499c7aa1d3d975b508ea747e2aec5d6fce4cff70e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e3c482b062a942823afaf499c7aa1d3d975b508ea747e2aec5d6fce4cff70e8a->leave($__internal_e3c482b062a942823afaf499c7aa1d3d975b508ea747e2aec5d6fce4cff70e8a_prof);

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
