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
        $__internal_2c0ea7114c444dd6808d72319d44983d54c2eac501c1c04603d2c5e7529c28c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0ea7114c444dd6808d72319d44983d54c2eac501c1c04603d2c5e7529c28c1->enter($__internal_2c0ea7114c444dd6808d72319d44983d54c2eac501c1c04603d2c5e7529c28c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c0ea7114c444dd6808d72319d44983d54c2eac501c1c04603d2c5e7529c28c1->leave($__internal_2c0ea7114c444dd6808d72319d44983d54c2eac501c1c04603d2c5e7529c28c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bdbb7c2cdefaa9aae7ece8fb4d7bc713a0c68b55cfd7e3b7a9aa8575538437a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbb7c2cdefaa9aae7ece8fb4d7bc713a0c68b55cfd7e3b7a9aa8575538437a6->enter($__internal_bdbb7c2cdefaa9aae7ece8fb4d7bc713a0c68b55cfd7e3b7a9aa8575538437a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bdbb7c2cdefaa9aae7ece8fb4d7bc713a0c68b55cfd7e3b7a9aa8575538437a6->leave($__internal_bdbb7c2cdefaa9aae7ece8fb4d7bc713a0c68b55cfd7e3b7a9aa8575538437a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eced7ec6d77c8a3641d0f863916ae0cb662cde0a0cff04805ced83eaf194f3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eced7ec6d77c8a3641d0f863916ae0cb662cde0a0cff04805ced83eaf194f3d1->enter($__internal_eced7ec6d77c8a3641d0f863916ae0cb662cde0a0cff04805ced83eaf194f3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eced7ec6d77c8a3641d0f863916ae0cb662cde0a0cff04805ced83eaf194f3d1->leave($__internal_eced7ec6d77c8a3641d0f863916ae0cb662cde0a0cff04805ced83eaf194f3d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4471c41aa4cbed4f0f79bd511052a779bf4ce30edfcb46e979351bec3423a232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4471c41aa4cbed4f0f79bd511052a779bf4ce30edfcb46e979351bec3423a232->enter($__internal_4471c41aa4cbed4f0f79bd511052a779bf4ce30edfcb46e979351bec3423a232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4471c41aa4cbed4f0f79bd511052a779bf4ce30edfcb46e979351bec3423a232->leave($__internal_4471c41aa4cbed4f0f79bd511052a779bf4ce30edfcb46e979351bec3423a232_prof);

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
