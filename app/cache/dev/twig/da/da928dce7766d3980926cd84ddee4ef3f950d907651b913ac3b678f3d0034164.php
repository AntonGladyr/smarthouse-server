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
        $__internal_6aeb6976185a6b1e51f7a7a47d23c1cc5b901813412c62a4c535ab08b277e759 = $this->env->getExtension("native_profiler");
        $__internal_6aeb6976185a6b1e51f7a7a47d23c1cc5b901813412c62a4c535ab08b277e759->enter($__internal_6aeb6976185a6b1e51f7a7a47d23c1cc5b901813412c62a4c535ab08b277e759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Pages/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aeb6976185a6b1e51f7a7a47d23c1cc5b901813412c62a4c535ab08b277e759->leave($__internal_6aeb6976185a6b1e51f7a7a47d23c1cc5b901813412c62a4c535ab08b277e759_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a7d731f2fb4d996b57e2504748043181b3abb33d10f5756b343e27f64e9284 = $this->env->getExtension("native_profiler");
        $__internal_52a7d731f2fb4d996b57e2504748043181b3abb33d10f5756b343e27f64e9284->enter($__internal_52a7d731f2fb4d996b57e2504748043181b3abb33d10f5756b343e27f64e9284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Not implemented
";
        
        $__internal_52a7d731f2fb4d996b57e2504748043181b3abb33d10f5756b343e27f64e9284->leave($__internal_52a7d731f2fb4d996b57e2504748043181b3abb33d10f5756b343e27f64e9284_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f302042c61dd01e1ee5e56eb24f4d702ab7384c7b2473d3e987bc56a62c52d4 = $this->env->getExtension("native_profiler");
        $__internal_7f302042c61dd01e1ee5e56eb24f4d702ab7384c7b2473d3e987bc56a62c52d4->enter($__internal_7f302042c61dd01e1ee5e56eb24f4d702ab7384c7b2473d3e987bc56a62c52d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>

</style>
";
        
        $__internal_7f302042c61dd01e1ee5e56eb24f4d702ab7384c7b2473d3e987bc56a62c52d4->leave($__internal_7f302042c61dd01e1ee5e56eb24f4d702ab7384c7b2473d3e987bc56a62c52d4_prof);

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
/* Not implemented*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* */
/* </style>*/
/* {% endblock %}*/
/* */
