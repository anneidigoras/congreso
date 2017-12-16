<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c6343f04462c31c86b1eca1d2159882ceef96e332346a86037234bac13ce4fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6343f04462c31c86b1eca1d2159882ceef96e332346a86037234bac13ce4fcf->enter($__internal_c6343f04462c31c86b1eca1d2159882ceef96e332346a86037234bac13ce4fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6343f04462c31c86b1eca1d2159882ceef96e332346a86037234bac13ce4fcf->leave($__internal_c6343f04462c31c86b1eca1d2159882ceef96e332346a86037234bac13ce4fcf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39cf85668e840f5b4a73df20762c642a5076e9b2e760f8f04f5f8a30c8bc3d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cf85668e840f5b4a73df20762c642a5076e9b2e760f8f04f5f8a30c8bc3d43->enter($__internal_39cf85668e840f5b4a73df20762c642a5076e9b2e760f8f04f5f8a30c8bc3d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39cf85668e840f5b4a73df20762c642a5076e9b2e760f8f04f5f8a30c8bc3d43->leave($__internal_39cf85668e840f5b4a73df20762c642a5076e9b2e760f8f04f5f8a30c8bc3d43_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_214399295c18fdba7a235186ad0e70a80a1691fc37f8b612d8671598d65dfa0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214399295c18fdba7a235186ad0e70a80a1691fc37f8b612d8671598d65dfa0a->enter($__internal_214399295c18fdba7a235186ad0e70a80a1691fc37f8b612d8671598d65dfa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_214399295c18fdba7a235186ad0e70a80a1691fc37f8b612d8671598d65dfa0a->leave($__internal_214399295c18fdba7a235186ad0e70a80a1691fc37f8b612d8671598d65dfa0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7c98b5dd9e86c5698653ea5bcc6d869c37c5b75bad11874f1a91251d71dc7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c98b5dd9e86c5698653ea5bcc6d869c37c5b75bad11874f1a91251d71dc7ef->enter($__internal_c7c98b5dd9e86c5698653ea5bcc6d869c37c5b75bad11874f1a91251d71dc7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7c98b5dd9e86c5698653ea5bcc6d869c37c5b75bad11874f1a91251d71dc7ef->leave($__internal_c7c98b5dd9e86c5698653ea5bcc6d869c37c5b75bad11874f1a91251d71dc7ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
