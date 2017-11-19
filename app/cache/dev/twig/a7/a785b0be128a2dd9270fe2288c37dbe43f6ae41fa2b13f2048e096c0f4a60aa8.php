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
        $__internal_27f738f324e1b17f7a8a020bc938e50af64b129358a8525c3e38dbdd81acbcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f738f324e1b17f7a8a020bc938e50af64b129358a8525c3e38dbdd81acbcb1->enter($__internal_27f738f324e1b17f7a8a020bc938e50af64b129358a8525c3e38dbdd81acbcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f738f324e1b17f7a8a020bc938e50af64b129358a8525c3e38dbdd81acbcb1->leave($__internal_27f738f324e1b17f7a8a020bc938e50af64b129358a8525c3e38dbdd81acbcb1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4bf4589c4366598a4d3ef0a853fbc9bb2f1a325e3756b543d49d9f230aceff79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf4589c4366598a4d3ef0a853fbc9bb2f1a325e3756b543d49d9f230aceff79->enter($__internal_4bf4589c4366598a4d3ef0a853fbc9bb2f1a325e3756b543d49d9f230aceff79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4bf4589c4366598a4d3ef0a853fbc9bb2f1a325e3756b543d49d9f230aceff79->leave($__internal_4bf4589c4366598a4d3ef0a853fbc9bb2f1a325e3756b543d49d9f230aceff79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf8e33f5f3c1545dd9920eba270e8c4161c15fefd761ce5a10432271f5ce8f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8e33f5f3c1545dd9920eba270e8c4161c15fefd761ce5a10432271f5ce8f58->enter($__internal_bf8e33f5f3c1545dd9920eba270e8c4161c15fefd761ce5a10432271f5ce8f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf8e33f5f3c1545dd9920eba270e8c4161c15fefd761ce5a10432271f5ce8f58->leave($__internal_bf8e33f5f3c1545dd9920eba270e8c4161c15fefd761ce5a10432271f5ce8f58_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c7e9d7dd5d74f294febaa3359e3d605ac03bb5f8af8b4b8419e0e0c9400686d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7e9d7dd5d74f294febaa3359e3d605ac03bb5f8af8b4b8419e0e0c9400686d->enter($__internal_5c7e9d7dd5d74f294febaa3359e3d605ac03bb5f8af8b4b8419e0e0c9400686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c7e9d7dd5d74f294febaa3359e3d605ac03bb5f8af8b4b8419e0e0c9400686d->leave($__internal_5c7e9d7dd5d74f294febaa3359e3d605ac03bb5f8af8b4b8419e0e0c9400686d_prof);

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
