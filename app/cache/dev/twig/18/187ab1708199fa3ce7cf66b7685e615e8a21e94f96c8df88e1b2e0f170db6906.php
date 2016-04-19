<?php

/* WebViewsBundle:Pages:power.html.twig */
class __TwigTemplate_9137855e364a9fad45e7605b7b82580e4aadf86de0474186b5537c3271e3e674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebViewsBundle:Pages:base.html.twig", "WebViewsBundle:Pages:power.html.twig", 1);
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
        $__internal_6827bee6cb726ebae6afbf932ac53b26e6e8bd33499072b8fb30f32a5c7e806e = $this->env->getExtension("native_profiler");
        $__internal_6827bee6cb726ebae6afbf932ac53b26e6e8bd33499072b8fb30f32a5c7e806e->enter($__internal_6827bee6cb726ebae6afbf932ac53b26e6e8bd33499072b8fb30f32a5c7e806e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:power.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6827bee6cb726ebae6afbf932ac53b26e6e8bd33499072b8fb30f32a5c7e806e->leave($__internal_6827bee6cb726ebae6afbf932ac53b26e6e8bd33499072b8fb30f32a5c7e806e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b606d02e8f1cfbedfff2c87fcab06a8487900c5bb859bac434ff52eaf28cca8a = $this->env->getExtension("native_profiler");
        $__internal_b606d02e8f1cfbedfff2c87fcab06a8487900c5bb859bac434ff52eaf28cca8a->enter($__internal_b606d02e8f1cfbedfff2c87fcab06a8487900c5bb859bac434ff52eaf28cca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Not implemented
";
        
        $__internal_b606d02e8f1cfbedfff2c87fcab06a8487900c5bb859bac434ff52eaf28cca8a->leave($__internal_b606d02e8f1cfbedfff2c87fcab06a8487900c5bb859bac434ff52eaf28cca8a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6eaae20308533ef7d3827d41f631f057af2724de69ccd11f2bd8aedb7f6a216 = $this->env->getExtension("native_profiler");
        $__internal_b6eaae20308533ef7d3827d41f631f057af2724de69ccd11f2bd8aedb7f6a216->enter($__internal_b6eaae20308533ef7d3827d41f631f057af2724de69ccd11f2bd8aedb7f6a216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <style>

    </style>
";
        
        $__internal_b6eaae20308533ef7d3827d41f631f057af2724de69ccd11f2bd8aedb7f6a216->leave($__internal_b6eaae20308533ef7d3827d41f631f057af2724de69ccd11f2bd8aedb7f6a216_prof);

    }

    public function getTemplateName()
    {
        return "WebViewsBundle:Pages:power.html.twig";
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
