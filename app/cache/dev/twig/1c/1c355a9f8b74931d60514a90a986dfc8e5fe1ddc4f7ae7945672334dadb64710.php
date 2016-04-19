<?php

/* WebViewsBundle:Pages:controls.html.twig */
class __TwigTemplate_dddd71c9fd6643f2ee72502cd4b0d502e7fad621ce65642f4c215df44cc29f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebViewsBundle:Pages:base.html.twig", "WebViewsBundle:Pages:controls.html.twig", 1);
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
        $__internal_1269d968a58bc87755bf24ce8dec2912b93b277401b58bfec23fabfbd95d49d2 = $this->env->getExtension("native_profiler");
        $__internal_1269d968a58bc87755bf24ce8dec2912b93b277401b58bfec23fabfbd95d49d2->enter($__internal_1269d968a58bc87755bf24ce8dec2912b93b277401b58bfec23fabfbd95d49d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:controls.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1269d968a58bc87755bf24ce8dec2912b93b277401b58bfec23fabfbd95d49d2->leave($__internal_1269d968a58bc87755bf24ce8dec2912b93b277401b58bfec23fabfbd95d49d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ed14bf5469dacd28f2c9be353f0ce216ab20d69faa1b49d0a02deb34be4cc07 = $this->env->getExtension("native_profiler");
        $__internal_4ed14bf5469dacd28f2c9be353f0ce216ab20d69faa1b49d0a02deb34be4cc07->enter($__internal_4ed14bf5469dacd28f2c9be353f0ce216ab20d69faa1b49d0a02deb34be4cc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Not implemented
";
        
        $__internal_4ed14bf5469dacd28f2c9be353f0ce216ab20d69faa1b49d0a02deb34be4cc07->leave($__internal_4ed14bf5469dacd28f2c9be353f0ce216ab20d69faa1b49d0a02deb34be4cc07_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c95ee250f64f0bb88a7d3f396403ca24372c9f3ca8d3d1a192ce432763aa023 = $this->env->getExtension("native_profiler");
        $__internal_0c95ee250f64f0bb88a7d3f396403ca24372c9f3ca8d3d1a192ce432763aa023->enter($__internal_0c95ee250f64f0bb88a7d3f396403ca24372c9f3ca8d3d1a192ce432763aa023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <style>

    </style>
";
        
        $__internal_0c95ee250f64f0bb88a7d3f396403ca24372c9f3ca8d3d1a192ce432763aa023->leave($__internal_0c95ee250f64f0bb88a7d3f396403ca24372c9f3ca8d3d1a192ce432763aa023_prof);

    }

    public function getTemplateName()
    {
        return "WebViewsBundle:Pages:controls.html.twig";
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
/*     Not implemented*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/* */
/*     </style>*/
/* {% endblock %}*/
/* */
