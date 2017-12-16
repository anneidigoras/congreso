<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cadc4050a9bb0fcfd56ec9170b9e4eceedc520342ba1626dc7eea2926c9443fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_dd7e25ea5955f71943ed357eb715b9ca062d4702958b9d0f4970eff0e4794406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7e25ea5955f71943ed357eb715b9ca062d4702958b9d0f4970eff0e4794406->enter($__internal_dd7e25ea5955f71943ed357eb715b9ca062d4702958b9d0f4970eff0e4794406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd7e25ea5955f71943ed357eb715b9ca062d4702958b9d0f4970eff0e4794406->leave($__internal_dd7e25ea5955f71943ed357eb715b9ca062d4702958b9d0f4970eff0e4794406_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e08c032f0deb134bd7e23084cea0cdb1b88b987e083c93df86f1684a61d8d0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08c032f0deb134bd7e23084cea0cdb1b88b987e083c93df86f1684a61d8d0eb->enter($__internal_e08c032f0deb134bd7e23084cea0cdb1b88b987e083c93df86f1684a61d8d0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e08c032f0deb134bd7e23084cea0cdb1b88b987e083c93df86f1684a61d8d0eb->leave($__internal_e08c032f0deb134bd7e23084cea0cdb1b88b987e083c93df86f1684a61d8d0eb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f293bf9c22eaf356dcb1d209a2728c0a91eda610f59a26b0a70895615b4cff72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f293bf9c22eaf356dcb1d209a2728c0a91eda610f59a26b0a70895615b4cff72->enter($__internal_f293bf9c22eaf356dcb1d209a2728c0a91eda610f59a26b0a70895615b4cff72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f293bf9c22eaf356dcb1d209a2728c0a91eda610f59a26b0a70895615b4cff72->leave($__internal_f293bf9c22eaf356dcb1d209a2728c0a91eda610f59a26b0a70895615b4cff72_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c559836773568b421682e74aa3d109667cfb34c0d0b26fff5276186b7a42883b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c559836773568b421682e74aa3d109667cfb34c0d0b26fff5276186b7a42883b->enter($__internal_c559836773568b421682e74aa3d109667cfb34c0d0b26fff5276186b7a42883b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c559836773568b421682e74aa3d109667cfb34c0d0b26fff5276186b7a42883b->leave($__internal_c559836773568b421682e74aa3d109667cfb34c0d0b26fff5276186b7a42883b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
