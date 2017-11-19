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
        $__internal_c5e716b5eb64075e61c30a088a0ef309b472e0ace8795877ddc05d4708686b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e716b5eb64075e61c30a088a0ef309b472e0ace8795877ddc05d4708686b73->enter($__internal_c5e716b5eb64075e61c30a088a0ef309b472e0ace8795877ddc05d4708686b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e716b5eb64075e61c30a088a0ef309b472e0ace8795877ddc05d4708686b73->leave($__internal_c5e716b5eb64075e61c30a088a0ef309b472e0ace8795877ddc05d4708686b73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78de8c523e2e7405aa04900010affe11816d1bdce4d4357ed19aaffcd0fc7d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78de8c523e2e7405aa04900010affe11816d1bdce4d4357ed19aaffcd0fc7d2c->enter($__internal_78de8c523e2e7405aa04900010affe11816d1bdce4d4357ed19aaffcd0fc7d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78de8c523e2e7405aa04900010affe11816d1bdce4d4357ed19aaffcd0fc7d2c->leave($__internal_78de8c523e2e7405aa04900010affe11816d1bdce4d4357ed19aaffcd0fc7d2c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9345b92a69476b8502aaa50e38d12a2f4cdcd81bdfd79dfe7c8b7e63adb8623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9345b92a69476b8502aaa50e38d12a2f4cdcd81bdfd79dfe7c8b7e63adb8623->enter($__internal_b9345b92a69476b8502aaa50e38d12a2f4cdcd81bdfd79dfe7c8b7e63adb8623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b9345b92a69476b8502aaa50e38d12a2f4cdcd81bdfd79dfe7c8b7e63adb8623->leave($__internal_b9345b92a69476b8502aaa50e38d12a2f4cdcd81bdfd79dfe7c8b7e63adb8623_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6463dc070e3c955b9ddc8d5052f1a995acf11217dc3718af0c784ef85ffb3a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6463dc070e3c955b9ddc8d5052f1a995acf11217dc3718af0c784ef85ffb3a9e->enter($__internal_6463dc070e3c955b9ddc8d5052f1a995acf11217dc3718af0c784ef85ffb3a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6463dc070e3c955b9ddc8d5052f1a995acf11217dc3718af0c784ef85ffb3a9e->leave($__internal_6463dc070e3c955b9ddc8d5052f1a995acf11217dc3718af0c784ef85ffb3a9e_prof);

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
