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
        $__internal_57489b51f46f2d5a7b203b1daf5f4f1b4c04c05770363a08057bd9b2d3553541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57489b51f46f2d5a7b203b1daf5f4f1b4c04c05770363a08057bd9b2d3553541->enter($__internal_57489b51f46f2d5a7b203b1daf5f4f1b4c04c05770363a08057bd9b2d3553541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57489b51f46f2d5a7b203b1daf5f4f1b4c04c05770363a08057bd9b2d3553541->leave($__internal_57489b51f46f2d5a7b203b1daf5f4f1b4c04c05770363a08057bd9b2d3553541_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3dee7b4baac10a57058d1bc9031e055b1935302421db1bb3d75bc235110d5816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dee7b4baac10a57058d1bc9031e055b1935302421db1bb3d75bc235110d5816->enter($__internal_3dee7b4baac10a57058d1bc9031e055b1935302421db1bb3d75bc235110d5816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3dee7b4baac10a57058d1bc9031e055b1935302421db1bb3d75bc235110d5816->leave($__internal_3dee7b4baac10a57058d1bc9031e055b1935302421db1bb3d75bc235110d5816_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2cd2401d8f6efa15771ab40cdf0f0e2e751a204d386fd195bd1a2b1aea56b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cd2401d8f6efa15771ab40cdf0f0e2e751a204d386fd195bd1a2b1aea56b31->enter($__internal_e2cd2401d8f6efa15771ab40cdf0f0e2e751a204d386fd195bd1a2b1aea56b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2cd2401d8f6efa15771ab40cdf0f0e2e751a204d386fd195bd1a2b1aea56b31->leave($__internal_e2cd2401d8f6efa15771ab40cdf0f0e2e751a204d386fd195bd1a2b1aea56b31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ca7ae854a6a1a15d23ea7636ad9fe5bccb8c738dbfcee05bdfec588dd2236bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca7ae854a6a1a15d23ea7636ad9fe5bccb8c738dbfcee05bdfec588dd2236bd->enter($__internal_2ca7ae854a6a1a15d23ea7636ad9fe5bccb8c738dbfcee05bdfec588dd2236bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ca7ae854a6a1a15d23ea7636ad9fe5bccb8c738dbfcee05bdfec588dd2236bd->leave($__internal_2ca7ae854a6a1a15d23ea7636ad9fe5bccb8c738dbfcee05bdfec588dd2236bd_prof);

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
