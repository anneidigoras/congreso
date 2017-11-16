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
        $__internal_e69a172ced5fb10bdf21fca34b1b15524d5db5034c839ea02a03bcaebdbf2082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69a172ced5fb10bdf21fca34b1b15524d5db5034c839ea02a03bcaebdbf2082->enter($__internal_e69a172ced5fb10bdf21fca34b1b15524d5db5034c839ea02a03bcaebdbf2082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e69a172ced5fb10bdf21fca34b1b15524d5db5034c839ea02a03bcaebdbf2082->leave($__internal_e69a172ced5fb10bdf21fca34b1b15524d5db5034c839ea02a03bcaebdbf2082_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_641d7e9f7953812f96598ffb762313addec1962bc1d48fcb2c54db3db9d5ba31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641d7e9f7953812f96598ffb762313addec1962bc1d48fcb2c54db3db9d5ba31->enter($__internal_641d7e9f7953812f96598ffb762313addec1962bc1d48fcb2c54db3db9d5ba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_641d7e9f7953812f96598ffb762313addec1962bc1d48fcb2c54db3db9d5ba31->leave($__internal_641d7e9f7953812f96598ffb762313addec1962bc1d48fcb2c54db3db9d5ba31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30867503a26e325ff0f659282d70ce32461fc3cf00cc2846cb2fde7f1673519f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30867503a26e325ff0f659282d70ce32461fc3cf00cc2846cb2fde7f1673519f->enter($__internal_30867503a26e325ff0f659282d70ce32461fc3cf00cc2846cb2fde7f1673519f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30867503a26e325ff0f659282d70ce32461fc3cf00cc2846cb2fde7f1673519f->leave($__internal_30867503a26e325ff0f659282d70ce32461fc3cf00cc2846cb2fde7f1673519f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab34fde12369ce85410988e7b1896aa652928b1dec3ff8ff7750ae6ac6eda8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab34fde12369ce85410988e7b1896aa652928b1dec3ff8ff7750ae6ac6eda8e7->enter($__internal_ab34fde12369ce85410988e7b1896aa652928b1dec3ff8ff7750ae6ac6eda8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab34fde12369ce85410988e7b1896aa652928b1dec3ff8ff7750ae6ac6eda8e7->leave($__internal_ab34fde12369ce85410988e7b1896aa652928b1dec3ff8ff7750ae6ac6eda8e7_prof);

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
