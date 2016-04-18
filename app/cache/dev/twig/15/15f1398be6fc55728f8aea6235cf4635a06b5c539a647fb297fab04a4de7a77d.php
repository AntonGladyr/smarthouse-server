<?php

/* WebViewsBundle:Pages:home.html.twig */
class __TwigTemplate_855e27c23d062569d23a76a25a2a7029d24be494ea0aeb85f484367044556c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WebViewsBundle:Pages:home.html.twig", 1);
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
        $__internal_dda2eca28b435476a888d86139eaf206840a31b687a030a2b0474939d937f3e6 = $this->env->getExtension("native_profiler");
        $__internal_dda2eca28b435476a888d86139eaf206840a31b687a030a2b0474939d937f3e6->enter($__internal_dda2eca28b435476a888d86139eaf206840a31b687a030a2b0474939d937f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda2eca28b435476a888d86139eaf206840a31b687a030a2b0474939d937f3e6->leave($__internal_dda2eca28b435476a888d86139eaf206840a31b687a030a2b0474939d937f3e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5f48a71da6fd745f9c60d35762fcc8cd453c96a5b6ed5a1d3e8032738191899 = $this->env->getExtension("native_profiler");
        $__internal_e5f48a71da6fd745f9c60d35762fcc8cd453c96a5b6ed5a1d3e8032738191899->enter($__internal_e5f48a71da6fd745f9c60d35762fcc8cd453c96a5b6ed5a1d3e8032738191899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Not implemented
";
        
        $__internal_e5f48a71da6fd745f9c60d35762fcc8cd453c96a5b6ed5a1d3e8032738191899->leave($__internal_e5f48a71da6fd745f9c60d35762fcc8cd453c96a5b6ed5a1d3e8032738191899_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ca641e97fcd88a5b78244c853624dc860161042d697c8c751612c0704d73d03 = $this->env->getExtension("native_profiler");
        $__internal_2ca641e97fcd88a5b78244c853624dc860161042d697c8c751612c0704d73d03->enter($__internal_2ca641e97fcd88a5b78244c853624dc860161042d697c8c751612c0704d73d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>

</style>
";
        
        $__internal_2ca641e97fcd88a5b78244c853624dc860161042d697c8c751612c0704d73d03->leave($__internal_2ca641e97fcd88a5b78244c853624dc860161042d697c8c751612c0704d73d03_prof);

    }

    public function getTemplateName()
    {
        return "WebViewsBundle:Pages:home.html.twig";
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
/* Not implemented*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* */
/* </style>*/
/* {% endblock %}*/
/* */
