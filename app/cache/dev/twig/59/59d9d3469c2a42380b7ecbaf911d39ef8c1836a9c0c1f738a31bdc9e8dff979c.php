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
        $__internal_5b6b8f2c3d9e2e319f899cf08431bee0c0c81b906863969318098cb4182b8762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6b8f2c3d9e2e319f899cf08431bee0c0c81b906863969318098cb4182b8762->enter($__internal_5b6b8f2c3d9e2e319f899cf08431bee0c0c81b906863969318098cb4182b8762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6b8f2c3d9e2e319f899cf08431bee0c0c81b906863969318098cb4182b8762->leave($__internal_5b6b8f2c3d9e2e319f899cf08431bee0c0c81b906863969318098cb4182b8762_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82e471093ac57a21a6a39d3bd1998a12d832abf42602e49148742c1d62b483ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e471093ac57a21a6a39d3bd1998a12d832abf42602e49148742c1d62b483ca->enter($__internal_82e471093ac57a21a6a39d3bd1998a12d832abf42602e49148742c1d62b483ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_82e471093ac57a21a6a39d3bd1998a12d832abf42602e49148742c1d62b483ca->leave($__internal_82e471093ac57a21a6a39d3bd1998a12d832abf42602e49148742c1d62b483ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93012a1cb3059e9fae3933eeb3b43b06b4faa3bc62910be16adb1245deaabaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93012a1cb3059e9fae3933eeb3b43b06b4faa3bc62910be16adb1245deaabaf8->enter($__internal_93012a1cb3059e9fae3933eeb3b43b06b4faa3bc62910be16adb1245deaabaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93012a1cb3059e9fae3933eeb3b43b06b4faa3bc62910be16adb1245deaabaf8->leave($__internal_93012a1cb3059e9fae3933eeb3b43b06b4faa3bc62910be16adb1245deaabaf8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_485f8aa547553d7b8b425f6d81e26e4ef259ff2d3ae4c8e71756e87eccd54bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485f8aa547553d7b8b425f6d81e26e4ef259ff2d3ae4c8e71756e87eccd54bca->enter($__internal_485f8aa547553d7b8b425f6d81e26e4ef259ff2d3ae4c8e71756e87eccd54bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_485f8aa547553d7b8b425f6d81e26e4ef259ff2d3ae4c8e71756e87eccd54bca->leave($__internal_485f8aa547553d7b8b425f6d81e26e4ef259ff2d3ae4c8e71756e87eccd54bca_prof);

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
