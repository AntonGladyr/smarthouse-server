<?php

/* WebViewsBundle:Pages:temperature.html.twig */
class __TwigTemplate_ed13852ab0761cdb5c10834283870332639dc0662445ab8b5e4e2052e4ca43e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebViewsBundle:Pages:base.html.twig", "WebViewsBundle:Pages:temperature.html.twig", 1);
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
        $__internal_99487bd9c111a51fabe26b703a2b0f19c1dedfe01cd5f7fc1792c39ec15ab19d = $this->env->getExtension("native_profiler");
        $__internal_99487bd9c111a51fabe26b703a2b0f19c1dedfe01cd5f7fc1792c39ec15ab19d->enter($__internal_99487bd9c111a51fabe26b703a2b0f19c1dedfe01cd5f7fc1792c39ec15ab19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:temperature.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99487bd9c111a51fabe26b703a2b0f19c1dedfe01cd5f7fc1792c39ec15ab19d->leave($__internal_99487bd9c111a51fabe26b703a2b0f19c1dedfe01cd5f7fc1792c39ec15ab19d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5478828c079a7833b9c65913afe90872064918f960dac46c9c7b2075d69aa87 = $this->env->getExtension("native_profiler");
        $__internal_d5478828c079a7833b9c65913afe90872064918f960dac46c9c7b2075d69aa87->enter($__internal_d5478828c079a7833b9c65913afe90872064918f960dac46c9c7b2075d69aa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Not implemented
";
        
        $__internal_d5478828c079a7833b9c65913afe90872064918f960dac46c9c7b2075d69aa87->leave($__internal_d5478828c079a7833b9c65913afe90872064918f960dac46c9c7b2075d69aa87_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e4c5e426d48c36cd63b20dc62a2f9c191645851da4464a758f1c9f959e11caf = $this->env->getExtension("native_profiler");
        $__internal_5e4c5e426d48c36cd63b20dc62a2f9c191645851da4464a758f1c9f959e11caf->enter($__internal_5e4c5e426d48c36cd63b20dc62a2f9c191645851da4464a758f1c9f959e11caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <style>

    </style>
";
        
        $__internal_5e4c5e426d48c36cd63b20dc62a2f9c191645851da4464a758f1c9f959e11caf->leave($__internal_5e4c5e426d48c36cd63b20dc62a2f9c191645851da4464a758f1c9f959e11caf_prof);

    }

    public function getTemplateName()
    {
        return "WebViewsBundle:Pages:temperature.html.twig";
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
