<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6fdae3fb53f210e989850cf4a8debe9a98618f69ac1d5232df0455b33c9b196a extends Twig_Template
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
        $__internal_68d54c6a1540b23ed26b0c63a707734c3446323c5f016e23547361fcfe600f91 = $this->env->getExtension("native_profiler");
        $__internal_68d54c6a1540b23ed26b0c63a707734c3446323c5f016e23547361fcfe600f91->enter($__internal_68d54c6a1540b23ed26b0c63a707734c3446323c5f016e23547361fcfe600f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d54c6a1540b23ed26b0c63a707734c3446323c5f016e23547361fcfe600f91->leave($__internal_68d54c6a1540b23ed26b0c63a707734c3446323c5f016e23547361fcfe600f91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2210aa54a0293ac01dc994c11870cefc41bca58e1ce71a8823c218180d0c226c = $this->env->getExtension("native_profiler");
        $__internal_2210aa54a0293ac01dc994c11870cefc41bca58e1ce71a8823c218180d0c226c->enter($__internal_2210aa54a0293ac01dc994c11870cefc41bca58e1ce71a8823c218180d0c226c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2210aa54a0293ac01dc994c11870cefc41bca58e1ce71a8823c218180d0c226c->leave($__internal_2210aa54a0293ac01dc994c11870cefc41bca58e1ce71a8823c218180d0c226c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a5ef2fa0ebd8b4fe2de936e867bbcf1e0441b995523e6bff1384600cde0358c = $this->env->getExtension("native_profiler");
        $__internal_2a5ef2fa0ebd8b4fe2de936e867bbcf1e0441b995523e6bff1384600cde0358c->enter($__internal_2a5ef2fa0ebd8b4fe2de936e867bbcf1e0441b995523e6bff1384600cde0358c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a5ef2fa0ebd8b4fe2de936e867bbcf1e0441b995523e6bff1384600cde0358c->leave($__internal_2a5ef2fa0ebd8b4fe2de936e867bbcf1e0441b995523e6bff1384600cde0358c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d0862eb7f2135845a54ae9cf6968f07cf2d0484e30bae4843eb2f29f25f096d = $this->env->getExtension("native_profiler");
        $__internal_5d0862eb7f2135845a54ae9cf6968f07cf2d0484e30bae4843eb2f29f25f096d->enter($__internal_5d0862eb7f2135845a54ae9cf6968f07cf2d0484e30bae4843eb2f29f25f096d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d0862eb7f2135845a54ae9cf6968f07cf2d0484e30bae4843eb2f29f25f096d->leave($__internal_5d0862eb7f2135845a54ae9cf6968f07cf2d0484e30bae4843eb2f29f25f096d_prof);

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
