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
        $__internal_23c68c1523fab26f8eeab45f244e955a26857f4dfeb4e04693cfcbb901816801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c68c1523fab26f8eeab45f244e955a26857f4dfeb4e04693cfcbb901816801->enter($__internal_23c68c1523fab26f8eeab45f244e955a26857f4dfeb4e04693cfcbb901816801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c68c1523fab26f8eeab45f244e955a26857f4dfeb4e04693cfcbb901816801->leave($__internal_23c68c1523fab26f8eeab45f244e955a26857f4dfeb4e04693cfcbb901816801_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ba26f1ffc65a5c2a8777f71469c4df4217f1273ff456d51e4dafbf447747fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba26f1ffc65a5c2a8777f71469c4df4217f1273ff456d51e4dafbf447747fa3->enter($__internal_7ba26f1ffc65a5c2a8777f71469c4df4217f1273ff456d51e4dafbf447747fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ba26f1ffc65a5c2a8777f71469c4df4217f1273ff456d51e4dafbf447747fa3->leave($__internal_7ba26f1ffc65a5c2a8777f71469c4df4217f1273ff456d51e4dafbf447747fa3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba04010810167ba2cb4feb46c92a5e070b012084f5c74d1a1d2dfc043b1e0f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba04010810167ba2cb4feb46c92a5e070b012084f5c74d1a1d2dfc043b1e0f88->enter($__internal_ba04010810167ba2cb4feb46c92a5e070b012084f5c74d1a1d2dfc043b1e0f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba04010810167ba2cb4feb46c92a5e070b012084f5c74d1a1d2dfc043b1e0f88->leave($__internal_ba04010810167ba2cb4feb46c92a5e070b012084f5c74d1a1d2dfc043b1e0f88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1a76920a4a40a5e5d367bd45b8aa4df968faa2758c6df8ea43e7b27f2d49958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a76920a4a40a5e5d367bd45b8aa4df968faa2758c6df8ea43e7b27f2d49958->enter($__internal_f1a76920a4a40a5e5d367bd45b8aa4df968faa2758c6df8ea43e7b27f2d49958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f1a76920a4a40a5e5d367bd45b8aa4df968faa2758c6df8ea43e7b27f2d49958->leave($__internal_f1a76920a4a40a5e5d367bd45b8aa4df968faa2758c6df8ea43e7b27f2d49958_prof);

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
