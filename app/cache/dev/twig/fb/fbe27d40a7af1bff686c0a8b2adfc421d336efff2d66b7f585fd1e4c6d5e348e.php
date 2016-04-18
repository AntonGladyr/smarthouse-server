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
        $__internal_44873a3a9a77ac7aa793872614b16402d3f1dd6045728460517e33b5cfb9d891 = $this->env->getExtension("native_profiler");
        $__internal_44873a3a9a77ac7aa793872614b16402d3f1dd6045728460517e33b5cfb9d891->enter($__internal_44873a3a9a77ac7aa793872614b16402d3f1dd6045728460517e33b5cfb9d891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44873a3a9a77ac7aa793872614b16402d3f1dd6045728460517e33b5cfb9d891->leave($__internal_44873a3a9a77ac7aa793872614b16402d3f1dd6045728460517e33b5cfb9d891_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e31578380e2d0861dbdd310ad24feb02ec6495af6b1caf9e3f2e05d51a7de65e = $this->env->getExtension("native_profiler");
        $__internal_e31578380e2d0861dbdd310ad24feb02ec6495af6b1caf9e3f2e05d51a7de65e->enter($__internal_e31578380e2d0861dbdd310ad24feb02ec6495af6b1caf9e3f2e05d51a7de65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e31578380e2d0861dbdd310ad24feb02ec6495af6b1caf9e3f2e05d51a7de65e->leave($__internal_e31578380e2d0861dbdd310ad24feb02ec6495af6b1caf9e3f2e05d51a7de65e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc5420c6794828aad3c42653b08d46bdcc4d4fb8e07ec4cc14240f448cf51e93 = $this->env->getExtension("native_profiler");
        $__internal_bc5420c6794828aad3c42653b08d46bdcc4d4fb8e07ec4cc14240f448cf51e93->enter($__internal_bc5420c6794828aad3c42653b08d46bdcc4d4fb8e07ec4cc14240f448cf51e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc5420c6794828aad3c42653b08d46bdcc4d4fb8e07ec4cc14240f448cf51e93->leave($__internal_bc5420c6794828aad3c42653b08d46bdcc4d4fb8e07ec4cc14240f448cf51e93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c1dec102805a7259587ed3cb68bbd02b5a712a1cc707b07f0b1d689fbce9cc9 = $this->env->getExtension("native_profiler");
        $__internal_0c1dec102805a7259587ed3cb68bbd02b5a712a1cc707b07f0b1d689fbce9cc9->enter($__internal_0c1dec102805a7259587ed3cb68bbd02b5a712a1cc707b07f0b1d689fbce9cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c1dec102805a7259587ed3cb68bbd02b5a712a1cc707b07f0b1d689fbce9cc9->leave($__internal_0c1dec102805a7259587ed3cb68bbd02b5a712a1cc707b07f0b1d689fbce9cc9_prof);

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
