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
        $__internal_b325b4b6aeea0fe6814c4c5570ad4eacf1509b3cff3ee9743bee5580295dce5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b325b4b6aeea0fe6814c4c5570ad4eacf1509b3cff3ee9743bee5580295dce5b->enter($__internal_b325b4b6aeea0fe6814c4c5570ad4eacf1509b3cff3ee9743bee5580295dce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b325b4b6aeea0fe6814c4c5570ad4eacf1509b3cff3ee9743bee5580295dce5b->leave($__internal_b325b4b6aeea0fe6814c4c5570ad4eacf1509b3cff3ee9743bee5580295dce5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c314fd995a53f31a0605d6e7f199cc7d12ac355d682ad164a754d05ec1b60130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c314fd995a53f31a0605d6e7f199cc7d12ac355d682ad164a754d05ec1b60130->enter($__internal_c314fd995a53f31a0605d6e7f199cc7d12ac355d682ad164a754d05ec1b60130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c314fd995a53f31a0605d6e7f199cc7d12ac355d682ad164a754d05ec1b60130->leave($__internal_c314fd995a53f31a0605d6e7f199cc7d12ac355d682ad164a754d05ec1b60130_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef818013ef2009134236dc5e345d15eb65a0877055b762641daea2129e818e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef818013ef2009134236dc5e345d15eb65a0877055b762641daea2129e818e8d->enter($__internal_ef818013ef2009134236dc5e345d15eb65a0877055b762641daea2129e818e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef818013ef2009134236dc5e345d15eb65a0877055b762641daea2129e818e8d->leave($__internal_ef818013ef2009134236dc5e345d15eb65a0877055b762641daea2129e818e8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d275c86f3f3a73bbd70aa56cf0af92846cd0bec86d1ee46a2a6bfeac549a85fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d275c86f3f3a73bbd70aa56cf0af92846cd0bec86d1ee46a2a6bfeac549a85fa->enter($__internal_d275c86f3f3a73bbd70aa56cf0af92846cd0bec86d1ee46a2a6bfeac549a85fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d275c86f3f3a73bbd70aa56cf0af92846cd0bec86d1ee46a2a6bfeac549a85fa->leave($__internal_d275c86f3f3a73bbd70aa56cf0af92846cd0bec86d1ee46a2a6bfeac549a85fa_prof);

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
