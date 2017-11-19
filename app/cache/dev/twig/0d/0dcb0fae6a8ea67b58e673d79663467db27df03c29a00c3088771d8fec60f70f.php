<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
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
        $__internal_6c7313b111ae67eb51efc546455475f4dd115d1453080ca3839db4e083a0f86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7313b111ae67eb51efc546455475f4dd115d1453080ca3839db4e083a0f86e->enter($__internal_6c7313b111ae67eb51efc546455475f4dd115d1453080ca3839db4e083a0f86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c7313b111ae67eb51efc546455475f4dd115d1453080ca3839db4e083a0f86e->leave($__internal_6c7313b111ae67eb51efc546455475f4dd115d1453080ca3839db4e083a0f86e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_132908516cbe7680ab84d8a12b8d4b03302ffdff216e62d8319650524654bfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132908516cbe7680ab84d8a12b8d4b03302ffdff216e62d8319650524654bfcb->enter($__internal_132908516cbe7680ab84d8a12b8d4b03302ffdff216e62d8319650524654bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_132908516cbe7680ab84d8a12b8d4b03302ffdff216e62d8319650524654bfcb->leave($__internal_132908516cbe7680ab84d8a12b8d4b03302ffdff216e62d8319650524654bfcb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_362bc740d6f01b35ae540a731fc661126b6a1257892ec5e3b30d8f6c4469281a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362bc740d6f01b35ae540a731fc661126b6a1257892ec5e3b30d8f6c4469281a->enter($__internal_362bc740d6f01b35ae540a731fc661126b6a1257892ec5e3b30d8f6c4469281a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_362bc740d6f01b35ae540a731fc661126b6a1257892ec5e3b30d8f6c4469281a->leave($__internal_362bc740d6f01b35ae540a731fc661126b6a1257892ec5e3b30d8f6c4469281a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3379c591acf52a191cbab03500c4b3a868c36ba122dbbc3bb2af819ff2295c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3379c591acf52a191cbab03500c4b3a868c36ba122dbbc3bb2af819ff2295c91->enter($__internal_3379c591acf52a191cbab03500c4b3a868c36ba122dbbc3bb2af819ff2295c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3379c591acf52a191cbab03500c4b3a868c36ba122dbbc3bb2af819ff2295c91->leave($__internal_3379c591acf52a191cbab03500c4b3a868c36ba122dbbc3bb2af819ff2295c91_prof);

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
