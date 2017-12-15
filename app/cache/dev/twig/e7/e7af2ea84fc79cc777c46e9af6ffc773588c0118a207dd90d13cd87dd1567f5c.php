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
        $__internal_375dabcb4aea290bb0de4924e0722953b46e6734dfee805106d37204651eff39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375dabcb4aea290bb0de4924e0722953b46e6734dfee805106d37204651eff39->enter($__internal_375dabcb4aea290bb0de4924e0722953b46e6734dfee805106d37204651eff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375dabcb4aea290bb0de4924e0722953b46e6734dfee805106d37204651eff39->leave($__internal_375dabcb4aea290bb0de4924e0722953b46e6734dfee805106d37204651eff39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6725cdbf8d64986c552326bbe6a63769233fe1f99937dc8f90195a4d46b4f6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6725cdbf8d64986c552326bbe6a63769233fe1f99937dc8f90195a4d46b4f6c0->enter($__internal_6725cdbf8d64986c552326bbe6a63769233fe1f99937dc8f90195a4d46b4f6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6725cdbf8d64986c552326bbe6a63769233fe1f99937dc8f90195a4d46b4f6c0->leave($__internal_6725cdbf8d64986c552326bbe6a63769233fe1f99937dc8f90195a4d46b4f6c0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25bb470acea45db43d27df2d0fcfe638c1a43bc500dbd11d30fc68af1591c51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bb470acea45db43d27df2d0fcfe638c1a43bc500dbd11d30fc68af1591c51f->enter($__internal_25bb470acea45db43d27df2d0fcfe638c1a43bc500dbd11d30fc68af1591c51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25bb470acea45db43d27df2d0fcfe638c1a43bc500dbd11d30fc68af1591c51f->leave($__internal_25bb470acea45db43d27df2d0fcfe638c1a43bc500dbd11d30fc68af1591c51f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4eaf309666bd466c5a4a7ff2ca91cce30fdc8c323f345b1110a2e1fb66770caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eaf309666bd466c5a4a7ff2ca91cce30fdc8c323f345b1110a2e1fb66770caf->enter($__internal_4eaf309666bd466c5a4a7ff2ca91cce30fdc8c323f345b1110a2e1fb66770caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4eaf309666bd466c5a4a7ff2ca91cce30fdc8c323f345b1110a2e1fb66770caf->leave($__internal_4eaf309666bd466c5a4a7ff2ca91cce30fdc8c323f345b1110a2e1fb66770caf_prof);

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
