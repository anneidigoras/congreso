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
        $__internal_0226a2b0eb3165c10eb35062ec18dda6a551299b1169a91db5e21008225c9d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0226a2b0eb3165c10eb35062ec18dda6a551299b1169a91db5e21008225c9d26->enter($__internal_0226a2b0eb3165c10eb35062ec18dda6a551299b1169a91db5e21008225c9d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0226a2b0eb3165c10eb35062ec18dda6a551299b1169a91db5e21008225c9d26->leave($__internal_0226a2b0eb3165c10eb35062ec18dda6a551299b1169a91db5e21008225c9d26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a105b47267e5e9f52a58b64069b60e0c2e4b924a2dddcf62bf028a752499d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a105b47267e5e9f52a58b64069b60e0c2e4b924a2dddcf62bf028a752499d7c->enter($__internal_4a105b47267e5e9f52a58b64069b60e0c2e4b924a2dddcf62bf028a752499d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a105b47267e5e9f52a58b64069b60e0c2e4b924a2dddcf62bf028a752499d7c->leave($__internal_4a105b47267e5e9f52a58b64069b60e0c2e4b924a2dddcf62bf028a752499d7c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_437b5d6531298917893f62850271b683e5643b4840c1d686df690e202876df4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437b5d6531298917893f62850271b683e5643b4840c1d686df690e202876df4c->enter($__internal_437b5d6531298917893f62850271b683e5643b4840c1d686df690e202876df4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_437b5d6531298917893f62850271b683e5643b4840c1d686df690e202876df4c->leave($__internal_437b5d6531298917893f62850271b683e5643b4840c1d686df690e202876df4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f64740b72cd92d61ac02f90a236978d76f4c113e4535dacdfc30571fd6c9845b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64740b72cd92d61ac02f90a236978d76f4c113e4535dacdfc30571fd6c9845b->enter($__internal_f64740b72cd92d61ac02f90a236978d76f4c113e4535dacdfc30571fd6c9845b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f64740b72cd92d61ac02f90a236978d76f4c113e4535dacdfc30571fd6c9845b->leave($__internal_f64740b72cd92d61ac02f90a236978d76f4c113e4535dacdfc30571fd6c9845b_prof);

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
