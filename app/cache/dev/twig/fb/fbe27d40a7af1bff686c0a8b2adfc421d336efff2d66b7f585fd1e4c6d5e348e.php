<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_90b8e3ecc906b09af81dcd5191df9642334db9d76251a3f01c0de72189f43a12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2072a56db5434ad4de9fce1f4a508b4c1a300928058e8a4539dfe2561bc3b62 = $this->env->getExtension("native_profiler");
        $__internal_d2072a56db5434ad4de9fce1f4a508b4c1a300928058e8a4539dfe2561bc3b62->enter($__internal_d2072a56db5434ad4de9fce1f4a508b4c1a300928058e8a4539dfe2561bc3b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2072a56db5434ad4de9fce1f4a508b4c1a300928058e8a4539dfe2561bc3b62->leave($__internal_d2072a56db5434ad4de9fce1f4a508b4c1a300928058e8a4539dfe2561bc3b62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aee8982ead411419712820a60b096ad4324862870b9d01c5a165413246ba2af1 = $this->env->getExtension("native_profiler");
        $__internal_aee8982ead411419712820a60b096ad4324862870b9d01c5a165413246ba2af1->enter($__internal_aee8982ead411419712820a60b096ad4324862870b9d01c5a165413246ba2af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aee8982ead411419712820a60b096ad4324862870b9d01c5a165413246ba2af1->leave($__internal_aee8982ead411419712820a60b096ad4324862870b9d01c5a165413246ba2af1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_189415cc960c63afd197db26b9e2b3178685bfa4bdb5ec9e47e55a26096e6920 = $this->env->getExtension("native_profiler");
        $__internal_189415cc960c63afd197db26b9e2b3178685bfa4bdb5ec9e47e55a26096e6920->enter($__internal_189415cc960c63afd197db26b9e2b3178685bfa4bdb5ec9e47e55a26096e6920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_189415cc960c63afd197db26b9e2b3178685bfa4bdb5ec9e47e55a26096e6920->leave($__internal_189415cc960c63afd197db26b9e2b3178685bfa4bdb5ec9e47e55a26096e6920_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f8790618e456dbdd820d90a816e6f609ba0214e6a84513ccb3ef24b4dcf73d9 = $this->env->getExtension("native_profiler");
        $__internal_6f8790618e456dbdd820d90a816e6f609ba0214e6a84513ccb3ef24b4dcf73d9->enter($__internal_6f8790618e456dbdd820d90a816e6f609ba0214e6a84513ccb3ef24b4dcf73d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f8790618e456dbdd820d90a816e6f609ba0214e6a84513ccb3ef24b4dcf73d9->leave($__internal_6f8790618e456dbdd820d90a816e6f609ba0214e6a84513ccb3ef24b4dcf73d9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
