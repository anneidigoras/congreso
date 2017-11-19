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
        $__internal_0bfdfef8d75700ecb962659d1608f0b67b8e2642fee84195af434e0aa60e773b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfdfef8d75700ecb962659d1608f0b67b8e2642fee84195af434e0aa60e773b->enter($__internal_0bfdfef8d75700ecb962659d1608f0b67b8e2642fee84195af434e0aa60e773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bfdfef8d75700ecb962659d1608f0b67b8e2642fee84195af434e0aa60e773b->leave($__internal_0bfdfef8d75700ecb962659d1608f0b67b8e2642fee84195af434e0aa60e773b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7089610f1f2123ca62f6f1dfe07b67047a95c51d259a234772c3dd7e38c0329b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7089610f1f2123ca62f6f1dfe07b67047a95c51d259a234772c3dd7e38c0329b->enter($__internal_7089610f1f2123ca62f6f1dfe07b67047a95c51d259a234772c3dd7e38c0329b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7089610f1f2123ca62f6f1dfe07b67047a95c51d259a234772c3dd7e38c0329b->leave($__internal_7089610f1f2123ca62f6f1dfe07b67047a95c51d259a234772c3dd7e38c0329b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_972fdccf7c4b59296b6dc3df6f9ed600753c006f0fb8fb4c5ba5e33210e6dfe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972fdccf7c4b59296b6dc3df6f9ed600753c006f0fb8fb4c5ba5e33210e6dfe8->enter($__internal_972fdccf7c4b59296b6dc3df6f9ed600753c006f0fb8fb4c5ba5e33210e6dfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_972fdccf7c4b59296b6dc3df6f9ed600753c006f0fb8fb4c5ba5e33210e6dfe8->leave($__internal_972fdccf7c4b59296b6dc3df6f9ed600753c006f0fb8fb4c5ba5e33210e6dfe8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e247ff2a28969915ab609f0c35838a1c6808741d91ef2cd3ab0c2f5e706debeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e247ff2a28969915ab609f0c35838a1c6808741d91ef2cd3ab0c2f5e706debeb->enter($__internal_e247ff2a28969915ab609f0c35838a1c6808741d91ef2cd3ab0c2f5e706debeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e247ff2a28969915ab609f0c35838a1c6808741d91ef2cd3ab0c2f5e706debeb->leave($__internal_e247ff2a28969915ab609f0c35838a1c6808741d91ef2cd3ab0c2f5e706debeb_prof);

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
