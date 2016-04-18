<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_792af31a7c8f95c891527f12818a4604ff04c6813c4dd868bc00c53664716c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc90a88dbf72849c4d580cf776c1c9b001fdbf32e0cf29fb6e30bad7530c53c5 = $this->env->getExtension("native_profiler");
        $__internal_bc90a88dbf72849c4d580cf776c1c9b001fdbf32e0cf29fb6e30bad7530c53c5->enter($__internal_bc90a88dbf72849c4d580cf776c1c9b001fdbf32e0cf29fb6e30bad7530c53c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc90a88dbf72849c4d580cf776c1c9b001fdbf32e0cf29fb6e30bad7530c53c5->leave($__internal_bc90a88dbf72849c4d580cf776c1c9b001fdbf32e0cf29fb6e30bad7530c53c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5100deff47b61a4bcbdce05f963b786de61ba1e65863c3ed0a05bb16f9cee5d2 = $this->env->getExtension("native_profiler");
        $__internal_5100deff47b61a4bcbdce05f963b786de61ba1e65863c3ed0a05bb16f9cee5d2->enter($__internal_5100deff47b61a4bcbdce05f963b786de61ba1e65863c3ed0a05bb16f9cee5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5100deff47b61a4bcbdce05f963b786de61ba1e65863c3ed0a05bb16f9cee5d2->leave($__internal_5100deff47b61a4bcbdce05f963b786de61ba1e65863c3ed0a05bb16f9cee5d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6134e6a0aa74a0ecb3ff7391f28b712e2154c9cbc9b0cdad6b0e1f25506f17f4 = $this->env->getExtension("native_profiler");
        $__internal_6134e6a0aa74a0ecb3ff7391f28b712e2154c9cbc9b0cdad6b0e1f25506f17f4->enter($__internal_6134e6a0aa74a0ecb3ff7391f28b712e2154c9cbc9b0cdad6b0e1f25506f17f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6134e6a0aa74a0ecb3ff7391f28b712e2154c9cbc9b0cdad6b0e1f25506f17f4->leave($__internal_6134e6a0aa74a0ecb3ff7391f28b712e2154c9cbc9b0cdad6b0e1f25506f17f4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bf4456b562b2e269b5a286c53eed217087897e1e16032047243dabeff5680d6 = $this->env->getExtension("native_profiler");
        $__internal_5bf4456b562b2e269b5a286c53eed217087897e1e16032047243dabeff5680d6->enter($__internal_5bf4456b562b2e269b5a286c53eed217087897e1e16032047243dabeff5680d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5bf4456b562b2e269b5a286c53eed217087897e1e16032047243dabeff5680d6->leave($__internal_5bf4456b562b2e269b5a286c53eed217087897e1e16032047243dabeff5680d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
