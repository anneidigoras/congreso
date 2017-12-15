<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c79dc4721822c3da769f6e883fd81b1d7f92d660e13d05deff15f545a258dab extends Twig_Template
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
        $__internal_5ddc3f584ad0de1d4626cc892513ef0fc3301fa6cd0fc74b543232d6aa49c3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddc3f584ad0de1d4626cc892513ef0fc3301fa6cd0fc74b543232d6aa49c3b4->enter($__internal_5ddc3f584ad0de1d4626cc892513ef0fc3301fa6cd0fc74b543232d6aa49c3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ddc3f584ad0de1d4626cc892513ef0fc3301fa6cd0fc74b543232d6aa49c3b4->leave($__internal_5ddc3f584ad0de1d4626cc892513ef0fc3301fa6cd0fc74b543232d6aa49c3b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_daca89e10af702e64dfd8aa323b3bd99f196eddc3f106ead27b60136e7282299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daca89e10af702e64dfd8aa323b3bd99f196eddc3f106ead27b60136e7282299->enter($__internal_daca89e10af702e64dfd8aa323b3bd99f196eddc3f106ead27b60136e7282299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_daca89e10af702e64dfd8aa323b3bd99f196eddc3f106ead27b60136e7282299->leave($__internal_daca89e10af702e64dfd8aa323b3bd99f196eddc3f106ead27b60136e7282299_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dac631901e9d298e94959fab6da0cd237ca60c1c6b745205c582a2a7cc8747a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac631901e9d298e94959fab6da0cd237ca60c1c6b745205c582a2a7cc8747a7->enter($__internal_dac631901e9d298e94959fab6da0cd237ca60c1c6b745205c582a2a7cc8747a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dac631901e9d298e94959fab6da0cd237ca60c1c6b745205c582a2a7cc8747a7->leave($__internal_dac631901e9d298e94959fab6da0cd237ca60c1c6b745205c582a2a7cc8747a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e996fbfa24402478db7e656edca8889a244c12084ac8565df666b8930e72eaf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e996fbfa24402478db7e656edca8889a244c12084ac8565df666b8930e72eaf3->enter($__internal_e996fbfa24402478db7e656edca8889a244c12084ac8565df666b8930e72eaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e996fbfa24402478db7e656edca8889a244c12084ac8565df666b8930e72eaf3->leave($__internal_e996fbfa24402478db7e656edca8889a244c12084ac8565df666b8930e72eaf3_prof);

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
