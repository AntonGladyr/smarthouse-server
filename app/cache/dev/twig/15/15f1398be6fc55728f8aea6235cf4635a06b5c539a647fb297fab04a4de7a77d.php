<?php

/* WebViewsBundle:Pages:home.html.twig */
class __TwigTemplate_855e27c23d062569d23a76a25a2a7029d24be494ea0aeb85f484367044556c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebViewsBundle:Pages:base.html.twig", "WebViewsBundle:Pages:home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebViewsBundle:Pages:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6672918fe461489adcdfbe3daa8627527044748b0a0d2903e50e7927712c239 = $this->env->getExtension("native_profiler");
        $__internal_d6672918fe461489adcdfbe3daa8627527044748b0a0d2903e50e7927712c239->enter($__internal_d6672918fe461489adcdfbe3daa8627527044748b0a0d2903e50e7927712c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6672918fe461489adcdfbe3daa8627527044748b0a0d2903e50e7927712c239->leave($__internal_d6672918fe461489adcdfbe3daa8627527044748b0a0d2903e50e7927712c239_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3601ca8f5f91c58ab18990cc3fe27a75b494877a862a38cee23931f159540a1b = $this->env->getExtension("native_profiler");
        $__internal_3601ca8f5f91c58ab18990cc3fe27a75b494877a862a38cee23931f159540a1b->enter($__internal_3601ca8f5f91c58ab18990cc3fe27a75b494877a862a38cee23931f159540a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Not implemented
";
        
        $__internal_3601ca8f5f91c58ab18990cc3fe27a75b494877a862a38cee23931f159540a1b->leave($__internal_3601ca8f5f91c58ab18990cc3fe27a75b494877a862a38cee23931f159540a1b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a119e57821a1776a5d00338f840f30bf42ee4e58df91373410f9c755f2c9a34b = $this->env->getExtension("native_profiler");
        $__internal_a119e57821a1776a5d00338f840f30bf42ee4e58df91373410f9c755f2c9a34b->enter($__internal_a119e57821a1776a5d00338f840f30bf42ee4e58df91373410f9c755f2c9a34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>

</style>
";
        
        $__internal_a119e57821a1776a5d00338f840f30bf42ee4e58df91373410f9c755f2c9a34b->leave($__internal_a119e57821a1776a5d00338f840f30bf42ee4e58df91373410f9c755f2c9a34b_prof);

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
/* {% extends 'WebViewsBundle:Pages:base.html.twig' %}*/
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
