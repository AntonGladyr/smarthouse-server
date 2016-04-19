<?php

/* WebViewsBundle:Pages:info.html.twig */
class __TwigTemplate_f626e2d009a58c71b6600e0969e26ba97bec766c540bd17c9d72ed896a130922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebViewsBundle:Pages:base.html.twig", "WebViewsBundle:Pages:info.html.twig", 1);
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
        $__internal_67e777831bd35a63065cd195642c68315e43d44a5015a0fc767f2b0977f63462 = $this->env->getExtension("native_profiler");
        $__internal_67e777831bd35a63065cd195642c68315e43d44a5015a0fc767f2b0977f63462->enter($__internal_67e777831bd35a63065cd195642c68315e43d44a5015a0fc767f2b0977f63462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e777831bd35a63065cd195642c68315e43d44a5015a0fc767f2b0977f63462->leave($__internal_67e777831bd35a63065cd195642c68315e43d44a5015a0fc767f2b0977f63462_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dbc3d6505f979de6ee221df01dc0d3e9e0a885365885d4331d974b8d7cd798f = $this->env->getExtension("native_profiler");
        $__internal_0dbc3d6505f979de6ee221df01dc0d3e9e0a885365885d4331d974b8d7cd798f->enter($__internal_0dbc3d6505f979de6ee221df01dc0d3e9e0a885365885d4331d974b8d7cd798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Not implemented
";
        
        $__internal_0dbc3d6505f979de6ee221df01dc0d3e9e0a885365885d4331d974b8d7cd798f->leave($__internal_0dbc3d6505f979de6ee221df01dc0d3e9e0a885365885d4331d974b8d7cd798f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59902ac382913a8a27706d4b6e989e99d1f065335c9dd37b7bf2f28fd76ffb95 = $this->env->getExtension("native_profiler");
        $__internal_59902ac382913a8a27706d4b6e989e99d1f065335c9dd37b7bf2f28fd76ffb95->enter($__internal_59902ac382913a8a27706d4b6e989e99d1f065335c9dd37b7bf2f28fd76ffb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <style>

    </style>
";
        
        $__internal_59902ac382913a8a27706d4b6e989e99d1f065335c9dd37b7bf2f28fd76ffb95->leave($__internal_59902ac382913a8a27706d4b6e989e99d1f065335c9dd37b7bf2f28fd76ffb95_prof);

    }

    public function getTemplateName()
    {
        return "WebViewsBundle:Pages:info.html.twig";
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
