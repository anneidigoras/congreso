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
        $__internal_82ca79990dd8bd0dd4bd2ab1584a530f91a502ec0bf2d37b24ad1291b9421477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ca79990dd8bd0dd4bd2ab1584a530f91a502ec0bf2d37b24ad1291b9421477->enter($__internal_82ca79990dd8bd0dd4bd2ab1584a530f91a502ec0bf2d37b24ad1291b9421477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ca79990dd8bd0dd4bd2ab1584a530f91a502ec0bf2d37b24ad1291b9421477->leave($__internal_82ca79990dd8bd0dd4bd2ab1584a530f91a502ec0bf2d37b24ad1291b9421477_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a709dd3b8fe4ad18ff02b5128fa7b3365bfbc4d4403d1e36d1a0b5c094279a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a709dd3b8fe4ad18ff02b5128fa7b3365bfbc4d4403d1e36d1a0b5c094279a87->enter($__internal_a709dd3b8fe4ad18ff02b5128fa7b3365bfbc4d4403d1e36d1a0b5c094279a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a709dd3b8fe4ad18ff02b5128fa7b3365bfbc4d4403d1e36d1a0b5c094279a87->leave($__internal_a709dd3b8fe4ad18ff02b5128fa7b3365bfbc4d4403d1e36d1a0b5c094279a87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03f744110f0ad1c0d41b786b842f1d7370fbdaad7e072c70a4f504467f3bd5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f744110f0ad1c0d41b786b842f1d7370fbdaad7e072c70a4f504467f3bd5a1->enter($__internal_03f744110f0ad1c0d41b786b842f1d7370fbdaad7e072c70a4f504467f3bd5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03f744110f0ad1c0d41b786b842f1d7370fbdaad7e072c70a4f504467f3bd5a1->leave($__internal_03f744110f0ad1c0d41b786b842f1d7370fbdaad7e072c70a4f504467f3bd5a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccc12d1c8186fd4b989e7f7baf6c392ce973e35663c77450e32aa64c54b2dceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc12d1c8186fd4b989e7f7baf6c392ce973e35663c77450e32aa64c54b2dceb->enter($__internal_ccc12d1c8186fd4b989e7f7baf6c392ce973e35663c77450e32aa64c54b2dceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ccc12d1c8186fd4b989e7f7baf6c392ce973e35663c77450e32aa64c54b2dceb->leave($__internal_ccc12d1c8186fd4b989e7f7baf6c392ce973e35663c77450e32aa64c54b2dceb_prof);

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
