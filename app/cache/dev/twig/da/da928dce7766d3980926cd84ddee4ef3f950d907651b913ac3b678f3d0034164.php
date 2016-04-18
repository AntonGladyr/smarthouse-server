<?php

/* Pages/home.html.twig */
class __TwigTemplate_01b7c1a48758af0591f631fcf7c08c95c9ab3d089a2d41a6c62118812746c96f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Pages/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9126bad40d406a35b2c2c7b290315ae38bc0d0c9c219d4646591a735eb13a16e = $this->env->getExtension("native_profiler");
        $__internal_9126bad40d406a35b2c2c7b290315ae38bc0d0c9c219d4646591a735eb13a16e->enter($__internal_9126bad40d406a35b2c2c7b290315ae38bc0d0c9c219d4646591a735eb13a16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pages/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9126bad40d406a35b2c2c7b290315ae38bc0d0c9c219d4646591a735eb13a16e->leave($__internal_9126bad40d406a35b2c2c7b290315ae38bc0d0c9c219d4646591a735eb13a16e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f3931f738572cb942542bdf77d41b9b389cb265ae57280b419e0573740dc125 = $this->env->getExtension("native_profiler");
        $__internal_3f3931f738572cb942542bdf77d41b9b389cb265ae57280b419e0573740dc125->enter($__internal_3f3931f738572cb942542bdf77d41b9b389cb265ae57280b419e0573740dc125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Nothing to do here. Lol.
";
        
        $__internal_3f3931f738572cb942542bdf77d41b9b389cb265ae57280b419e0573740dc125->leave($__internal_3f3931f738572cb942542bdf77d41b9b389cb265ae57280b419e0573740dc125_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4677d679425bc906ffe888f9e2ae556394c204fe39b5753fba0822709df515f = $this->env->getExtension("native_profiler");
        $__internal_c4677d679425bc906ffe888f9e2ae556394c204fe39b5753fba0822709df515f->enter($__internal_c4677d679425bc906ffe888f9e2ae556394c204fe39b5753fba0822709df515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>

</style>
";
        
        $__internal_c4677d679425bc906ffe888f9e2ae556394c204fe39b5753fba0822709df515f->leave($__internal_c4677d679425bc906ffe888f9e2ae556394c204fe39b5753fba0822709df515f_prof);

    }

    public function getTemplateName()
    {
        return "Pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* Nothing to do here. Lol.*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* */
/* </style>*/
/* {% endblock %}*/
/* */
