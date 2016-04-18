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
        $__internal_e1bb767e89ad4acfdfdea368c997a050448fcfc16fcc4d7b14191a6de3d0d8f2 = $this->env->getExtension("native_profiler");
        $__internal_e1bb767e89ad4acfdfdea368c997a050448fcfc16fcc4d7b14191a6de3d0d8f2->enter($__internal_e1bb767e89ad4acfdfdea368c997a050448fcfc16fcc4d7b14191a6de3d0d8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1bb767e89ad4acfdfdea368c997a050448fcfc16fcc4d7b14191a6de3d0d8f2->leave($__internal_e1bb767e89ad4acfdfdea368c997a050448fcfc16fcc4d7b14191a6de3d0d8f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_565622eae67ef87dc047c87f8596dc67c5a8e93bb7d6d9db2aae960f7d6d5f79 = $this->env->getExtension("native_profiler");
        $__internal_565622eae67ef87dc047c87f8596dc67c5a8e93bb7d6d9db2aae960f7d6d5f79->enter($__internal_565622eae67ef87dc047c87f8596dc67c5a8e93bb7d6d9db2aae960f7d6d5f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Nothing to do here. Lol.
";
        
        $__internal_565622eae67ef87dc047c87f8596dc67c5a8e93bb7d6d9db2aae960f7d6d5f79->leave($__internal_565622eae67ef87dc047c87f8596dc67c5a8e93bb7d6d9db2aae960f7d6d5f79_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56a7612922dcb88665b543f444d990f535facb2d44a75cfec0899d6c9b2f23a4 = $this->env->getExtension("native_profiler");
        $__internal_56a7612922dcb88665b543f444d990f535facb2d44a75cfec0899d6c9b2f23a4->enter($__internal_56a7612922dcb88665b543f444d990f535facb2d44a75cfec0899d6c9b2f23a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>

</style>
";
        
        $__internal_56a7612922dcb88665b543f444d990f535facb2d44a75cfec0899d6c9b2f23a4->leave($__internal_56a7612922dcb88665b543f444d990f535facb2d44a75cfec0899d6c9b2f23a4_prof);

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
/* Nothing to do here. Lol.*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* */
/* </style>*/
/* {% endblock %}*/
/* */
