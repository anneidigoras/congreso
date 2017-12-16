<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_864bc065b4049f7dcbb50bc10da891fe8a473888403c2c762b125cc430fd1be1 extends Twig_Template
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
        $__internal_6f55126d2ba7f27c8221c9135eebd90ec93eda6d10386c5e5395a6a1b7b764dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f55126d2ba7f27c8221c9135eebd90ec93eda6d10386c5e5395a6a1b7b764dd->enter($__internal_6f55126d2ba7f27c8221c9135eebd90ec93eda6d10386c5e5395a6a1b7b764dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f55126d2ba7f27c8221c9135eebd90ec93eda6d10386c5e5395a6a1b7b764dd->leave($__internal_6f55126d2ba7f27c8221c9135eebd90ec93eda6d10386c5e5395a6a1b7b764dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df635d2719f96d0903e602d6a9f6c10e307f257908932bf4c1558b3a4b9fb461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df635d2719f96d0903e602d6a9f6c10e307f257908932bf4c1558b3a4b9fb461->enter($__internal_df635d2719f96d0903e602d6a9f6c10e307f257908932bf4c1558b3a4b9fb461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_df635d2719f96d0903e602d6a9f6c10e307f257908932bf4c1558b3a4b9fb461->leave($__internal_df635d2719f96d0903e602d6a9f6c10e307f257908932bf4c1558b3a4b9fb461_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b391012432b7d7b16154a4feaf2336b499197d6d5275052a98e3c8fbbb6d6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b391012432b7d7b16154a4feaf2336b499197d6d5275052a98e3c8fbbb6d6fa->enter($__internal_7b391012432b7d7b16154a4feaf2336b499197d6d5275052a98e3c8fbbb6d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7b391012432b7d7b16154a4feaf2336b499197d6d5275052a98e3c8fbbb6d6fa->leave($__internal_7b391012432b7d7b16154a4feaf2336b499197d6d5275052a98e3c8fbbb6d6fa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89c56d07feb2c80bf78dedd6a5a92eb922a9b10a2fcde7cb21f02f91dd7b8962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c56d07feb2c80bf78dedd6a5a92eb922a9b10a2fcde7cb21f02f91dd7b8962->enter($__internal_89c56d07feb2c80bf78dedd6a5a92eb922a9b10a2fcde7cb21f02f91dd7b8962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_89c56d07feb2c80bf78dedd6a5a92eb922a9b10a2fcde7cb21f02f91dd7b8962->leave($__internal_89c56d07feb2c80bf78dedd6a5a92eb922a9b10a2fcde7cb21f02f91dd7b8962_prof);

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
