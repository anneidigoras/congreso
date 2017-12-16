<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_922862c747889c6597696f2ee555acf7a8085dc2f5bacb88b5279099bf01820a extends Twig_Template
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
        $__internal_4040895c7514a32e6aede4ff99c8d3a8829648e359aca2a07d858bcc6609e6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4040895c7514a32e6aede4ff99c8d3a8829648e359aca2a07d858bcc6609e6dd->enter($__internal_4040895c7514a32e6aede4ff99c8d3a8829648e359aca2a07d858bcc6609e6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4040895c7514a32e6aede4ff99c8d3a8829648e359aca2a07d858bcc6609e6dd->leave($__internal_4040895c7514a32e6aede4ff99c8d3a8829648e359aca2a07d858bcc6609e6dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e402fd88dc3c5d676af721e8eb28e8b572d425d4ef9d35653f77a01ec6e7905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e402fd88dc3c5d676af721e8eb28e8b572d425d4ef9d35653f77a01ec6e7905->enter($__internal_5e402fd88dc3c5d676af721e8eb28e8b572d425d4ef9d35653f77a01ec6e7905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5e402fd88dc3c5d676af721e8eb28e8b572d425d4ef9d35653f77a01ec6e7905->leave($__internal_5e402fd88dc3c5d676af721e8eb28e8b572d425d4ef9d35653f77a01ec6e7905_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83d677da39c48f6d70dccb7b1be1d872f86aa999bedaccfc92f034161604300b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d677da39c48f6d70dccb7b1be1d872f86aa999bedaccfc92f034161604300b->enter($__internal_83d677da39c48f6d70dccb7b1be1d872f86aa999bedaccfc92f034161604300b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_83d677da39c48f6d70dccb7b1be1d872f86aa999bedaccfc92f034161604300b->leave($__internal_83d677da39c48f6d70dccb7b1be1d872f86aa999bedaccfc92f034161604300b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4694ba4594e5a19ecc0cb01e90de560ae6427a813788f7293261d3ddfbb3a8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4694ba4594e5a19ecc0cb01e90de560ae6427a813788f7293261d3ddfbb3a8ff->enter($__internal_4694ba4594e5a19ecc0cb01e90de560ae6427a813788f7293261d3ddfbb3a8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4694ba4594e5a19ecc0cb01e90de560ae6427a813788f7293261d3ddfbb3a8ff->leave($__internal_4694ba4594e5a19ecc0cb01e90de560ae6427a813788f7293261d3ddfbb3a8ff_prof);

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
