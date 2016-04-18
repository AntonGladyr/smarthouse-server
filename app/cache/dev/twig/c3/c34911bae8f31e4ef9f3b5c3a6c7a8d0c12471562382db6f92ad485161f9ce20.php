<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_606e9d56c776ada292db012360f20908a92dbbda986ef8f556d646dbd5714119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_17e53ca446c0c6f872158c67aef1dd375e0d29c75a911e90344ec7301004f9b5 = $this->env->getExtension("native_profiler");
        $__internal_17e53ca446c0c6f872158c67aef1dd375e0d29c75a911e90344ec7301004f9b5->enter($__internal_17e53ca446c0c6f872158c67aef1dd375e0d29c75a911e90344ec7301004f9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e53ca446c0c6f872158c67aef1dd375e0d29c75a911e90344ec7301004f9b5->leave($__internal_17e53ca446c0c6f872158c67aef1dd375e0d29c75a911e90344ec7301004f9b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_414921031de03f83e9c0ab3dae96b1765fda20594ad5a96f9949d4e18ff8f86a = $this->env->getExtension("native_profiler");
        $__internal_414921031de03f83e9c0ab3dae96b1765fda20594ad5a96f9949d4e18ff8f86a->enter($__internal_414921031de03f83e9c0ab3dae96b1765fda20594ad5a96f9949d4e18ff8f86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_414921031de03f83e9c0ab3dae96b1765fda20594ad5a96f9949d4e18ff8f86a->leave($__internal_414921031de03f83e9c0ab3dae96b1765fda20594ad5a96f9949d4e18ff8f86a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0342b676aa1952ee0159458ff2bc022f1ed5452e7a07992b27b64c354339e4db = $this->env->getExtension("native_profiler");
        $__internal_0342b676aa1952ee0159458ff2bc022f1ed5452e7a07992b27b64c354339e4db->enter($__internal_0342b676aa1952ee0159458ff2bc022f1ed5452e7a07992b27b64c354339e4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0342b676aa1952ee0159458ff2bc022f1ed5452e7a07992b27b64c354339e4db->leave($__internal_0342b676aa1952ee0159458ff2bc022f1ed5452e7a07992b27b64c354339e4db_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a95cc8007c751a3c342caa317c0621fd7210e73a1fdefe46d31c83bb6a36dba5 = $this->env->getExtension("native_profiler");
        $__internal_a95cc8007c751a3c342caa317c0621fd7210e73a1fdefe46d31c83bb6a36dba5->enter($__internal_a95cc8007c751a3c342caa317c0621fd7210e73a1fdefe46d31c83bb6a36dba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a95cc8007c751a3c342caa317c0621fd7210e73a1fdefe46d31c83bb6a36dba5->leave($__internal_a95cc8007c751a3c342caa317c0621fd7210e73a1fdefe46d31c83bb6a36dba5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
