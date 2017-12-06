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
        $__internal_e5aa6368f18c73615be5994fa5dd52031a019c3c12b7418cac4e10ef1c76cc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5aa6368f18c73615be5994fa5dd52031a019c3c12b7418cac4e10ef1c76cc55->enter($__internal_e5aa6368f18c73615be5994fa5dd52031a019c3c12b7418cac4e10ef1c76cc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5aa6368f18c73615be5994fa5dd52031a019c3c12b7418cac4e10ef1c76cc55->leave($__internal_e5aa6368f18c73615be5994fa5dd52031a019c3c12b7418cac4e10ef1c76cc55_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8489bcf2a3b6b8b5ca263e5b9f4957930d0d7b6acf5874258a414d05507b1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8489bcf2a3b6b8b5ca263e5b9f4957930d0d7b6acf5874258a414d05507b1a0->enter($__internal_e8489bcf2a3b6b8b5ca263e5b9f4957930d0d7b6acf5874258a414d05507b1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8489bcf2a3b6b8b5ca263e5b9f4957930d0d7b6acf5874258a414d05507b1a0->leave($__internal_e8489bcf2a3b6b8b5ca263e5b9f4957930d0d7b6acf5874258a414d05507b1a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d955ff77aca8b1b5f94e8e99765b5d022ce90ef7770ef38fdb4fae3092bfc7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d955ff77aca8b1b5f94e8e99765b5d022ce90ef7770ef38fdb4fae3092bfc7a1->enter($__internal_d955ff77aca8b1b5f94e8e99765b5d022ce90ef7770ef38fdb4fae3092bfc7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d955ff77aca8b1b5f94e8e99765b5d022ce90ef7770ef38fdb4fae3092bfc7a1->leave($__internal_d955ff77aca8b1b5f94e8e99765b5d022ce90ef7770ef38fdb4fae3092bfc7a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a5511e64f59293cf2a5957f816fd9c9e67fd218665559c745e54a689afa493d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5511e64f59293cf2a5957f816fd9c9e67fd218665559c745e54a689afa493d->enter($__internal_6a5511e64f59293cf2a5957f816fd9c9e67fd218665559c745e54a689afa493d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a5511e64f59293cf2a5957f816fd9c9e67fd218665559c745e54a689afa493d->leave($__internal_6a5511e64f59293cf2a5957f816fd9c9e67fd218665559c745e54a689afa493d_prof);

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
