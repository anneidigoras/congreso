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
        $__internal_fe9efd85732d1603ee0c6cbf0daf7b9ef9cfbf7c6eb862506a829dceb08a23e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9efd85732d1603ee0c6cbf0daf7b9ef9cfbf7c6eb862506a829dceb08a23e7->enter($__internal_fe9efd85732d1603ee0c6cbf0daf7b9ef9cfbf7c6eb862506a829dceb08a23e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe9efd85732d1603ee0c6cbf0daf7b9ef9cfbf7c6eb862506a829dceb08a23e7->leave($__internal_fe9efd85732d1603ee0c6cbf0daf7b9ef9cfbf7c6eb862506a829dceb08a23e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab5804699c123f9ec7cf768118d281356fd65914bc97086b1e73390a48b8dd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5804699c123f9ec7cf768118d281356fd65914bc97086b1e73390a48b8dd59->enter($__internal_ab5804699c123f9ec7cf768118d281356fd65914bc97086b1e73390a48b8dd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab5804699c123f9ec7cf768118d281356fd65914bc97086b1e73390a48b8dd59->leave($__internal_ab5804699c123f9ec7cf768118d281356fd65914bc97086b1e73390a48b8dd59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_353a9ecc9e26b4b1ec4be1e15a09c585d1fca1ad7a2882cd03f2fb5a0e5b5d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353a9ecc9e26b4b1ec4be1e15a09c585d1fca1ad7a2882cd03f2fb5a0e5b5d32->enter($__internal_353a9ecc9e26b4b1ec4be1e15a09c585d1fca1ad7a2882cd03f2fb5a0e5b5d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_353a9ecc9e26b4b1ec4be1e15a09c585d1fca1ad7a2882cd03f2fb5a0e5b5d32->leave($__internal_353a9ecc9e26b4b1ec4be1e15a09c585d1fca1ad7a2882cd03f2fb5a0e5b5d32_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16476581c54abd20e473b0bbefe2adb6aba6211877b90596a24ae36d27e0b902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16476581c54abd20e473b0bbefe2adb6aba6211877b90596a24ae36d27e0b902->enter($__internal_16476581c54abd20e473b0bbefe2adb6aba6211877b90596a24ae36d27e0b902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16476581c54abd20e473b0bbefe2adb6aba6211877b90596a24ae36d27e0b902->leave($__internal_16476581c54abd20e473b0bbefe2adb6aba6211877b90596a24ae36d27e0b902_prof);

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
