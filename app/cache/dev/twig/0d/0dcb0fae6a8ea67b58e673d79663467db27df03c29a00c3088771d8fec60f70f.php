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
        $__internal_7240f9b74d5a326f7e584c91d03959087f7cb5ed1023c3872f47ef83f37aea9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7240f9b74d5a326f7e584c91d03959087f7cb5ed1023c3872f47ef83f37aea9d->enter($__internal_7240f9b74d5a326f7e584c91d03959087f7cb5ed1023c3872f47ef83f37aea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7240f9b74d5a326f7e584c91d03959087f7cb5ed1023c3872f47ef83f37aea9d->leave($__internal_7240f9b74d5a326f7e584c91d03959087f7cb5ed1023c3872f47ef83f37aea9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57942940835b800c78a95f7f1c3c26d5ae23d5b5c9003997d600f8a0f72325ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57942940835b800c78a95f7f1c3c26d5ae23d5b5c9003997d600f8a0f72325ee->enter($__internal_57942940835b800c78a95f7f1c3c26d5ae23d5b5c9003997d600f8a0f72325ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57942940835b800c78a95f7f1c3c26d5ae23d5b5c9003997d600f8a0f72325ee->leave($__internal_57942940835b800c78a95f7f1c3c26d5ae23d5b5c9003997d600f8a0f72325ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab27d0ddf2eddaa9034811ebc5698dda37b7f92ce082b1faf4a5c6344882ef3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab27d0ddf2eddaa9034811ebc5698dda37b7f92ce082b1faf4a5c6344882ef3e->enter($__internal_ab27d0ddf2eddaa9034811ebc5698dda37b7f92ce082b1faf4a5c6344882ef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab27d0ddf2eddaa9034811ebc5698dda37b7f92ce082b1faf4a5c6344882ef3e->leave($__internal_ab27d0ddf2eddaa9034811ebc5698dda37b7f92ce082b1faf4a5c6344882ef3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3def351cdefad7f96c1bd32fe9dc8c968f00e77e1562aad97d4150ccacbd2c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3def351cdefad7f96c1bd32fe9dc8c968f00e77e1562aad97d4150ccacbd2c8c->enter($__internal_3def351cdefad7f96c1bd32fe9dc8c968f00e77e1562aad97d4150ccacbd2c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3def351cdefad7f96c1bd32fe9dc8c968f00e77e1562aad97d4150ccacbd2c8c->leave($__internal_3def351cdefad7f96c1bd32fe9dc8c968f00e77e1562aad97d4150ccacbd2c8c_prof);

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
