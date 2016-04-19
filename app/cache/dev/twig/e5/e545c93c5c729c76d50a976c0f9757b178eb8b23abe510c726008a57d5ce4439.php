<?php

/* WebViewsBundle:Pages:water.html.twig */
class __TwigTemplate_9d6b9944bfe61829f13a1336d1d7350bbe60832a1dde16a4281566288a4feec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebViewsBundle:Pages:base.html.twig", "WebViewsBundle:Pages:water.html.twig", 1);
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
        $__internal_9499adf6f19f37895286e16766a3994a30b5ad3f7649b62deb5a8571ae8673b9 = $this->env->getExtension("native_profiler");
        $__internal_9499adf6f19f37895286e16766a3994a30b5ad3f7649b62deb5a8571ae8673b9->enter($__internal_9499adf6f19f37895286e16766a3994a30b5ad3f7649b62deb5a8571ae8673b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:water.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9499adf6f19f37895286e16766a3994a30b5ad3f7649b62deb5a8571ae8673b9->leave($__internal_9499adf6f19f37895286e16766a3994a30b5ad3f7649b62deb5a8571ae8673b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b99c1f799c0f68cbc2c7a4609b109fae08eed1aefa174f3899bc9f11b991f1d5 = $this->env->getExtension("native_profiler");
        $__internal_b99c1f799c0f68cbc2c7a4609b109fae08eed1aefa174f3899bc9f11b991f1d5->enter($__internal_b99c1f799c0f68cbc2c7a4609b109fae08eed1aefa174f3899bc9f11b991f1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Not implemented
";
        
        $__internal_b99c1f799c0f68cbc2c7a4609b109fae08eed1aefa174f3899bc9f11b991f1d5->leave($__internal_b99c1f799c0f68cbc2c7a4609b109fae08eed1aefa174f3899bc9f11b991f1d5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f1c38ea7e2c264e281611b03e341ba0adf6d26e81f630213fa1ebe20b7cede4 = $this->env->getExtension("native_profiler");
        $__internal_2f1c38ea7e2c264e281611b03e341ba0adf6d26e81f630213fa1ebe20b7cede4->enter($__internal_2f1c38ea7e2c264e281611b03e341ba0adf6d26e81f630213fa1ebe20b7cede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <style>

    </style>
";
        
        $__internal_2f1c38ea7e2c264e281611b03e341ba0adf6d26e81f630213fa1ebe20b7cede4->leave($__internal_2f1c38ea7e2c264e281611b03e341ba0adf6d26e81f630213fa1ebe20b7cede4_prof);

    }

    public function getTemplateName()
    {
        return "WebViewsBundle:Pages:water.html.twig";
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
