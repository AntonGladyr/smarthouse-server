<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_622606caeb339a7faeb8f820efd230d159293cf0c8f1c3fb6b3b2d27166d6e11 extends Twig_Template
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
        $__internal_be8571723829bd743fe9bae3d6735db8b061617994bda1cda65c413b33eb8ccc = $this->env->getExtension("native_profiler");
        $__internal_be8571723829bd743fe9bae3d6735db8b061617994bda1cda65c413b33eb8ccc->enter($__internal_be8571723829bd743fe9bae3d6735db8b061617994bda1cda65c413b33eb8ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be8571723829bd743fe9bae3d6735db8b061617994bda1cda65c413b33eb8ccc->leave($__internal_be8571723829bd743fe9bae3d6735db8b061617994bda1cda65c413b33eb8ccc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5dac8495079fbd1e14a267139987f04e86297774e488ed9db61afb46a7642811 = $this->env->getExtension("native_profiler");
        $__internal_5dac8495079fbd1e14a267139987f04e86297774e488ed9db61afb46a7642811->enter($__internal_5dac8495079fbd1e14a267139987f04e86297774e488ed9db61afb46a7642811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5dac8495079fbd1e14a267139987f04e86297774e488ed9db61afb46a7642811->leave($__internal_5dac8495079fbd1e14a267139987f04e86297774e488ed9db61afb46a7642811_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64efe2ad9fca7eda0ab67ca26fedf22eef0fc1b59c5f2ab8a7fbab2689a0c054 = $this->env->getExtension("native_profiler");
        $__internal_64efe2ad9fca7eda0ab67ca26fedf22eef0fc1b59c5f2ab8a7fbab2689a0c054->enter($__internal_64efe2ad9fca7eda0ab67ca26fedf22eef0fc1b59c5f2ab8a7fbab2689a0c054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64efe2ad9fca7eda0ab67ca26fedf22eef0fc1b59c5f2ab8a7fbab2689a0c054->leave($__internal_64efe2ad9fca7eda0ab67ca26fedf22eef0fc1b59c5f2ab8a7fbab2689a0c054_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e879d116ffc347ec89b95134a41e8457e13046992f4ae2bd6c899d821997efd9 = $this->env->getExtension("native_profiler");
        $__internal_e879d116ffc347ec89b95134a41e8457e13046992f4ae2bd6c899d821997efd9->enter($__internal_e879d116ffc347ec89b95134a41e8457e13046992f4ae2bd6c899d821997efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e879d116ffc347ec89b95134a41e8457e13046992f4ae2bd6c899d821997efd9->leave($__internal_e879d116ffc347ec89b95134a41e8457e13046992f4ae2bd6c899d821997efd9_prof);

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
