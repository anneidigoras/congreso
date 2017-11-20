<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
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
        $__internal_d8509826a06ca231e170b624671183e5b0b91cbf047d12041012fe2aabae9567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8509826a06ca231e170b624671183e5b0b91cbf047d12041012fe2aabae9567->enter($__internal_d8509826a06ca231e170b624671183e5b0b91cbf047d12041012fe2aabae9567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8509826a06ca231e170b624671183e5b0b91cbf047d12041012fe2aabae9567->leave($__internal_d8509826a06ca231e170b624671183e5b0b91cbf047d12041012fe2aabae9567_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_824d57fd71822f414bd2203e60a3a4fde06249ecf5364e13be08652edb0aed77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824d57fd71822f414bd2203e60a3a4fde06249ecf5364e13be08652edb0aed77->enter($__internal_824d57fd71822f414bd2203e60a3a4fde06249ecf5364e13be08652edb0aed77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_824d57fd71822f414bd2203e60a3a4fde06249ecf5364e13be08652edb0aed77->leave($__internal_824d57fd71822f414bd2203e60a3a4fde06249ecf5364e13be08652edb0aed77_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dedaa48c9537f360dd7697fb77b8de7baad67d0d96e743c85f965eed9c54cda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedaa48c9537f360dd7697fb77b8de7baad67d0d96e743c85f965eed9c54cda1->enter($__internal_dedaa48c9537f360dd7697fb77b8de7baad67d0d96e743c85f965eed9c54cda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dedaa48c9537f360dd7697fb77b8de7baad67d0d96e743c85f965eed9c54cda1->leave($__internal_dedaa48c9537f360dd7697fb77b8de7baad67d0d96e743c85f965eed9c54cda1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f5500016af5345386ccab71d0573c96a591ee97abb2414e213bf49e7e9e08a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5500016af5345386ccab71d0573c96a591ee97abb2414e213bf49e7e9e08a1->enter($__internal_1f5500016af5345386ccab71d0573c96a591ee97abb2414e213bf49e7e9e08a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f5500016af5345386ccab71d0573c96a591ee97abb2414e213bf49e7e9e08a1->leave($__internal_1f5500016af5345386ccab71d0573c96a591ee97abb2414e213bf49e7e9e08a1_prof);

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
