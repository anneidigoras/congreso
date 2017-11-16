<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c13750a9193d6a6d88e33f1e18c96c5c8f11b0beae02a47a46260c6c6f2c4ad extends Twig_Template
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
        $__internal_0e12cd6df7d951df1012bc8ba6e2aa51d9a628ac2481ba0813433274dec995f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e12cd6df7d951df1012bc8ba6e2aa51d9a628ac2481ba0813433274dec995f0->enter($__internal_0e12cd6df7d951df1012bc8ba6e2aa51d9a628ac2481ba0813433274dec995f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e12cd6df7d951df1012bc8ba6e2aa51d9a628ac2481ba0813433274dec995f0->leave($__internal_0e12cd6df7d951df1012bc8ba6e2aa51d9a628ac2481ba0813433274dec995f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b46dd8cffdc7f9073f01cdb5a13a6cf8e41f6deaedbe264cfa6dfe21aaa70156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46dd8cffdc7f9073f01cdb5a13a6cf8e41f6deaedbe264cfa6dfe21aaa70156->enter($__internal_b46dd8cffdc7f9073f01cdb5a13a6cf8e41f6deaedbe264cfa6dfe21aaa70156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b46dd8cffdc7f9073f01cdb5a13a6cf8e41f6deaedbe264cfa6dfe21aaa70156->leave($__internal_b46dd8cffdc7f9073f01cdb5a13a6cf8e41f6deaedbe264cfa6dfe21aaa70156_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0699fbbd40f47a0cb391147c849c138921babb44d6882c4636401ff6a44939c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0699fbbd40f47a0cb391147c849c138921babb44d6882c4636401ff6a44939c5->enter($__internal_0699fbbd40f47a0cb391147c849c138921babb44d6882c4636401ff6a44939c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0699fbbd40f47a0cb391147c849c138921babb44d6882c4636401ff6a44939c5->leave($__internal_0699fbbd40f47a0cb391147c849c138921babb44d6882c4636401ff6a44939c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17cfa3c177f14b7afb8a0a3f8f2faad887744eceecb9631a47c741872bf3b799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cfa3c177f14b7afb8a0a3f8f2faad887744eceecb9631a47c741872bf3b799->enter($__internal_17cfa3c177f14b7afb8a0a3f8f2faad887744eceecb9631a47c741872bf3b799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17cfa3c177f14b7afb8a0a3f8f2faad887744eceecb9631a47c741872bf3b799->leave($__internal_17cfa3c177f14b7afb8a0a3f8f2faad887744eceecb9631a47c741872bf3b799_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
