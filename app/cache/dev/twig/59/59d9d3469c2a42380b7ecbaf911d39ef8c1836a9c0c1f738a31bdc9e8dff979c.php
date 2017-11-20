<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c13750a9193d6a6d88e33f1e18c96c5c8f11b0beae02a47a46260c6c6f2c4ad extends Twig_Template
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
        $__internal_ad35fc3fbf76188d2ea0fe7f2fe97f75aa56161de8d7c7cd959a4a1e9b37a875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad35fc3fbf76188d2ea0fe7f2fe97f75aa56161de8d7c7cd959a4a1e9b37a875->enter($__internal_ad35fc3fbf76188d2ea0fe7f2fe97f75aa56161de8d7c7cd959a4a1e9b37a875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad35fc3fbf76188d2ea0fe7f2fe97f75aa56161de8d7c7cd959a4a1e9b37a875->leave($__internal_ad35fc3fbf76188d2ea0fe7f2fe97f75aa56161de8d7c7cd959a4a1e9b37a875_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60d428306d997e4f538151ffc33e6d03a437562b0c93e935ef972ac1acc76044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d428306d997e4f538151ffc33e6d03a437562b0c93e935ef972ac1acc76044->enter($__internal_60d428306d997e4f538151ffc33e6d03a437562b0c93e935ef972ac1acc76044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60d428306d997e4f538151ffc33e6d03a437562b0c93e935ef972ac1acc76044->leave($__internal_60d428306d997e4f538151ffc33e6d03a437562b0c93e935ef972ac1acc76044_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26625629eafe2d9898c21973677a771d5d85d216ecb34e43a2d7f5dda48a834a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26625629eafe2d9898c21973677a771d5d85d216ecb34e43a2d7f5dda48a834a->enter($__internal_26625629eafe2d9898c21973677a771d5d85d216ecb34e43a2d7f5dda48a834a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_26625629eafe2d9898c21973677a771d5d85d216ecb34e43a2d7f5dda48a834a->leave($__internal_26625629eafe2d9898c21973677a771d5d85d216ecb34e43a2d7f5dda48a834a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22fbb37e2c6afc84e9c9cb5e1b849a7b351be1fda44142f8954eb98a24e5db8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fbb37e2c6afc84e9c9cb5e1b849a7b351be1fda44142f8954eb98a24e5db8c->enter($__internal_22fbb37e2c6afc84e9c9cb5e1b849a7b351be1fda44142f8954eb98a24e5db8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22fbb37e2c6afc84e9c9cb5e1b849a7b351be1fda44142f8954eb98a24e5db8c->leave($__internal_22fbb37e2c6afc84e9c9cb5e1b849a7b351be1fda44142f8954eb98a24e5db8c_prof);

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
