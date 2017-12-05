<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
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
        $__internal_2a1932e8fed305231a5467aaff913314789eb2df245ba060decfdd8ca52aa02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1932e8fed305231a5467aaff913314789eb2df245ba060decfdd8ca52aa02c->enter($__internal_2a1932e8fed305231a5467aaff913314789eb2df245ba060decfdd8ca52aa02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a1932e8fed305231a5467aaff913314789eb2df245ba060decfdd8ca52aa02c->leave($__internal_2a1932e8fed305231a5467aaff913314789eb2df245ba060decfdd8ca52aa02c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cae7652243991c797d440ae162db15ed6c06f041935e2841cbf95e0b14c9d65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae7652243991c797d440ae162db15ed6c06f041935e2841cbf95e0b14c9d65f->enter($__internal_cae7652243991c797d440ae162db15ed6c06f041935e2841cbf95e0b14c9d65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cae7652243991c797d440ae162db15ed6c06f041935e2841cbf95e0b14c9d65f->leave($__internal_cae7652243991c797d440ae162db15ed6c06f041935e2841cbf95e0b14c9d65f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a0d1a9eafa1df665d75f3720926ec15d1e5bf2ce62f2814fcf69ec9ae8cbfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0d1a9eafa1df665d75f3720926ec15d1e5bf2ce62f2814fcf69ec9ae8cbfff->enter($__internal_3a0d1a9eafa1df665d75f3720926ec15d1e5bf2ce62f2814fcf69ec9ae8cbfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a0d1a9eafa1df665d75f3720926ec15d1e5bf2ce62f2814fcf69ec9ae8cbfff->leave($__internal_3a0d1a9eafa1df665d75f3720926ec15d1e5bf2ce62f2814fcf69ec9ae8cbfff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_837b0ba80dda82cd1c7679550d6a3088e43b2fe8dfeb4bb71ce9cc1255895ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837b0ba80dda82cd1c7679550d6a3088e43b2fe8dfeb4bb71ce9cc1255895ea7->enter($__internal_837b0ba80dda82cd1c7679550d6a3088e43b2fe8dfeb4bb71ce9cc1255895ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_837b0ba80dda82cd1c7679550d6a3088e43b2fe8dfeb4bb71ce9cc1255895ea7->leave($__internal_837b0ba80dda82cd1c7679550d6a3088e43b2fe8dfeb4bb71ce9cc1255895ea7_prof);

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
