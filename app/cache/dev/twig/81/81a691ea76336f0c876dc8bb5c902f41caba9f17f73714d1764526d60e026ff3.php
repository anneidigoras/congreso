<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc6e79cccfa51eee8f5d744d8dd937fef3aff61486ad560fa6713e8f48aa1443 extends Twig_Template
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
        $__internal_f2702049e26e7bf6c5ec68567e58d632cd902a38ef3d98f3e1364ccc936ee3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2702049e26e7bf6c5ec68567e58d632cd902a38ef3d98f3e1364ccc936ee3ec->enter($__internal_f2702049e26e7bf6c5ec68567e58d632cd902a38ef3d98f3e1364ccc936ee3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2702049e26e7bf6c5ec68567e58d632cd902a38ef3d98f3e1364ccc936ee3ec->leave($__internal_f2702049e26e7bf6c5ec68567e58d632cd902a38ef3d98f3e1364ccc936ee3ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca8f992c80ed9e72b7dbfd687b1f177cfb690852b5ccf63fcf7f95ce444bd258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8f992c80ed9e72b7dbfd687b1f177cfb690852b5ccf63fcf7f95ce444bd258->enter($__internal_ca8f992c80ed9e72b7dbfd687b1f177cfb690852b5ccf63fcf7f95ce444bd258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ca8f992c80ed9e72b7dbfd687b1f177cfb690852b5ccf63fcf7f95ce444bd258->leave($__internal_ca8f992c80ed9e72b7dbfd687b1f177cfb690852b5ccf63fcf7f95ce444bd258_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_998d5c12e6d26a09ae7a439ac101cbea48ec7fb914bc6776f0fb062a8f3412f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998d5c12e6d26a09ae7a439ac101cbea48ec7fb914bc6776f0fb062a8f3412f2->enter($__internal_998d5c12e6d26a09ae7a439ac101cbea48ec7fb914bc6776f0fb062a8f3412f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_998d5c12e6d26a09ae7a439ac101cbea48ec7fb914bc6776f0fb062a8f3412f2->leave($__internal_998d5c12e6d26a09ae7a439ac101cbea48ec7fb914bc6776f0fb062a8f3412f2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_814f090484119e20506c85e6e61b59da5a35ef033643989203764293082e63c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814f090484119e20506c85e6e61b59da5a35ef033643989203764293082e63c6->enter($__internal_814f090484119e20506c85e6e61b59da5a35ef033643989203764293082e63c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_814f090484119e20506c85e6e61b59da5a35ef033643989203764293082e63c6->leave($__internal_814f090484119e20506c85e6e61b59da5a35ef033643989203764293082e63c6_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
