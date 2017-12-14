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
        $__internal_3b90f52932390e12572c80b3d085e1eacc52f16e4e92d741c1974e7133183ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b90f52932390e12572c80b3d085e1eacc52f16e4e92d741c1974e7133183ba8->enter($__internal_3b90f52932390e12572c80b3d085e1eacc52f16e4e92d741c1974e7133183ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b90f52932390e12572c80b3d085e1eacc52f16e4e92d741c1974e7133183ba8->leave($__internal_3b90f52932390e12572c80b3d085e1eacc52f16e4e92d741c1974e7133183ba8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17abdb2837b3db1f7ab8e95a47db4f9da3a787c88e296283ab5206a404336eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17abdb2837b3db1f7ab8e95a47db4f9da3a787c88e296283ab5206a404336eab->enter($__internal_17abdb2837b3db1f7ab8e95a47db4f9da3a787c88e296283ab5206a404336eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17abdb2837b3db1f7ab8e95a47db4f9da3a787c88e296283ab5206a404336eab->leave($__internal_17abdb2837b3db1f7ab8e95a47db4f9da3a787c88e296283ab5206a404336eab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a6a3d0a2195ca4a7df2c9f792431f4af7f5bfa01ec328216171c4438219532b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6a3d0a2195ca4a7df2c9f792431f4af7f5bfa01ec328216171c4438219532b->enter($__internal_7a6a3d0a2195ca4a7df2c9f792431f4af7f5bfa01ec328216171c4438219532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a6a3d0a2195ca4a7df2c9f792431f4af7f5bfa01ec328216171c4438219532b->leave($__internal_7a6a3d0a2195ca4a7df2c9f792431f4af7f5bfa01ec328216171c4438219532b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1d9b36bd64226e0a04f032112fb0e8514ed95b40b8420f3da6e23882c3ce044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d9b36bd64226e0a04f032112fb0e8514ed95b40b8420f3da6e23882c3ce044->enter($__internal_c1d9b36bd64226e0a04f032112fb0e8514ed95b40b8420f3da6e23882c3ce044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1d9b36bd64226e0a04f032112fb0e8514ed95b40b8420f3da6e23882c3ce044->leave($__internal_c1d9b36bd64226e0a04f032112fb0e8514ed95b40b8420f3da6e23882c3ce044_prof);

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
