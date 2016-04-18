<?php

/* WebViewsBundle:Pages:home.html.twig */
class __TwigTemplate_704c4d3ccc8f6f6ee6115e4722b17fc9c3150c69e58beab32371d44c792034b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WebViewsBundle:Pages:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_2f8245fcf8f864710ff05083c5c07f7a23c7880a1aa9465566e4e7e632522cee = $this->env->getExtension("native_profiler");
        $__internal_2f8245fcf8f864710ff05083c5c07f7a23c7880a1aa9465566e4e7e632522cee->enter($__internal_2f8245fcf8f864710ff05083c5c07f7a23c7880a1aa9465566e4e7e632522cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebViewsBundle:Pages:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f8245fcf8f864710ff05083c5c07f7a23c7880a1aa9465566e4e7e632522cee->leave($__internal_2f8245fcf8f864710ff05083c5c07f7a23c7880a1aa9465566e4e7e632522cee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee137ff10fb7dcebd7389470be400b3e6870da3fc4ec50a11feba34651183fb1 = $this->env->getExtension("native_profiler");
        $__internal_ee137ff10fb7dcebd7389470be400b3e6870da3fc4ec50a11feba34651183fb1->enter($__internal_ee137ff10fb7dcebd7389470be400b3e6870da3fc4ec50a11feba34651183fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "It's all ok
";
        
        $__internal_ee137ff10fb7dcebd7389470be400b3e6870da3fc4ec50a11feba34651183fb1->leave($__internal_ee137ff10fb7dcebd7389470be400b3e6870da3fc4ec50a11feba34651183fb1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0199a38173c69d635475d413a490cfa220caeef0925ecee0ae4624f0c38356 = $this->env->getExtension("native_profiler");
        $__internal_bf0199a38173c69d635475d413a490cfa220caeef0925ecee0ae4624f0c38356->enter($__internal_bf0199a38173c69d635475d413a490cfa220caeef0925ecee0ae4624f0c38356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "Nothing to do here. Lol.
";
        
        $__internal_bf0199a38173c69d635475d413a490cfa220caeef0925ecee0ae4624f0c38356->leave($__internal_bf0199a38173c69d635475d413a490cfa220caeef0925ecee0ae4624f0c38356_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4218bbdc09042c10597859d99e97ec40a9e59ccd74f5030bd24d2a2adfe12fa0 = $this->env->getExtension("native_profiler");
        $__internal_4218bbdc09042c10597859d99e97ec40a9e59ccd74f5030bd24d2a2adfe12fa0->enter($__internal_4218bbdc09042c10597859d99e97ec40a9e59ccd74f5030bd24d2a2adfe12fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "<style>

</style>
";
        
        $__internal_4218bbdc09042c10597859d99e97ec40a9e59ccd74f5030bd24d2a2adfe12fa0->leave($__internal_4218bbdc09042c10597859d99e97ec40a9e59ccd74f5030bd24d2a2adfe12fa0_prof);

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
        return array (  70 => 12,  64 => 11,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title%}*/
/* It's all ok*/
/* {% endblock %}*/
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
