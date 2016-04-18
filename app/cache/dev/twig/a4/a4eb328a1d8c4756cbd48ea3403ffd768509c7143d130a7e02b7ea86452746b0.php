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
        $__internal_48887091367be27ee15b6cabf83f7061e1734da3d4d626a59736689f6c336374 = $this->env->getExtension("native_profiler");
        $__internal_48887091367be27ee15b6cabf83f7061e1734da3d4d626a59736689f6c336374->enter($__internal_48887091367be27ee15b6cabf83f7061e1734da3d4d626a59736689f6c336374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48887091367be27ee15b6cabf83f7061e1734da3d4d626a59736689f6c336374->leave($__internal_48887091367be27ee15b6cabf83f7061e1734da3d4d626a59736689f6c336374_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70b9efb1b3e20dd0066585fa6aab2274557e15fff53c2c7c7be654a4cd798979 = $this->env->getExtension("native_profiler");
        $__internal_70b9efb1b3e20dd0066585fa6aab2274557e15fff53c2c7c7be654a4cd798979->enter($__internal_70b9efb1b3e20dd0066585fa6aab2274557e15fff53c2c7c7be654a4cd798979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_70b9efb1b3e20dd0066585fa6aab2274557e15fff53c2c7c7be654a4cd798979->leave($__internal_70b9efb1b3e20dd0066585fa6aab2274557e15fff53c2c7c7be654a4cd798979_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_851039688bb7a7c561929548834200b17fe7f1e9aea736b16a0e88eb1f9e7c51 = $this->env->getExtension("native_profiler");
        $__internal_851039688bb7a7c561929548834200b17fe7f1e9aea736b16a0e88eb1f9e7c51->enter($__internal_851039688bb7a7c561929548834200b17fe7f1e9aea736b16a0e88eb1f9e7c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_851039688bb7a7c561929548834200b17fe7f1e9aea736b16a0e88eb1f9e7c51->leave($__internal_851039688bb7a7c561929548834200b17fe7f1e9aea736b16a0e88eb1f9e7c51_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69044051104a22eb953ee1e56dfe0a85288972edce026ac726da79e4ca9f4189 = $this->env->getExtension("native_profiler");
        $__internal_69044051104a22eb953ee1e56dfe0a85288972edce026ac726da79e4ca9f4189->enter($__internal_69044051104a22eb953ee1e56dfe0a85288972edce026ac726da79e4ca9f4189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_69044051104a22eb953ee1e56dfe0a85288972edce026ac726da79e4ca9f4189->leave($__internal_69044051104a22eb953ee1e56dfe0a85288972edce026ac726da79e4ca9f4189_prof);

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
