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
        $__internal_1e0c4cd138b2b599b26984cb2d5a952809ec2381981ec0b5f08a8279db1d3782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0c4cd138b2b599b26984cb2d5a952809ec2381981ec0b5f08a8279db1d3782->enter($__internal_1e0c4cd138b2b599b26984cb2d5a952809ec2381981ec0b5f08a8279db1d3782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e0c4cd138b2b599b26984cb2d5a952809ec2381981ec0b5f08a8279db1d3782->leave($__internal_1e0c4cd138b2b599b26984cb2d5a952809ec2381981ec0b5f08a8279db1d3782_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0144098101ff97e5b441e2cb22407c2406476ef99b47d395c80f8537abcabd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0144098101ff97e5b441e2cb22407c2406476ef99b47d395c80f8537abcabd99->enter($__internal_0144098101ff97e5b441e2cb22407c2406476ef99b47d395c80f8537abcabd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0144098101ff97e5b441e2cb22407c2406476ef99b47d395c80f8537abcabd99->leave($__internal_0144098101ff97e5b441e2cb22407c2406476ef99b47d395c80f8537abcabd99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5d5d52ea8b5fef36101cc6ba416d4a048f31949c8793aaa35108abd07b132ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d5d52ea8b5fef36101cc6ba416d4a048f31949c8793aaa35108abd07b132ab->enter($__internal_a5d5d52ea8b5fef36101cc6ba416d4a048f31949c8793aaa35108abd07b132ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5d5d52ea8b5fef36101cc6ba416d4a048f31949c8793aaa35108abd07b132ab->leave($__internal_a5d5d52ea8b5fef36101cc6ba416d4a048f31949c8793aaa35108abd07b132ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b4486a7aa36490105ae209ec4b70e9ef278c4d01c00323a17993e6f40c81afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4486a7aa36490105ae209ec4b70e9ef278c4d01c00323a17993e6f40c81afb->enter($__internal_2b4486a7aa36490105ae209ec4b70e9ef278c4d01c00323a17993e6f40c81afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b4486a7aa36490105ae209ec4b70e9ef278c4d01c00323a17993e6f40c81afb->leave($__internal_2b4486a7aa36490105ae209ec4b70e9ef278c4d01c00323a17993e6f40c81afb_prof);

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
