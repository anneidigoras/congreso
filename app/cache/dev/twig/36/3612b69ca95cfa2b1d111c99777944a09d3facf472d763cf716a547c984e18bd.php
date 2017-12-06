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
        $__internal_461de7e172bf7c2acb6d21a143998bde78bf2ad68bfc7129862354646863e4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461de7e172bf7c2acb6d21a143998bde78bf2ad68bfc7129862354646863e4a2->enter($__internal_461de7e172bf7c2acb6d21a143998bde78bf2ad68bfc7129862354646863e4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461de7e172bf7c2acb6d21a143998bde78bf2ad68bfc7129862354646863e4a2->leave($__internal_461de7e172bf7c2acb6d21a143998bde78bf2ad68bfc7129862354646863e4a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_293e910a65e1984da48fe00487a88bbabe2201f59e73ce7b943ac1c24925dcad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293e910a65e1984da48fe00487a88bbabe2201f59e73ce7b943ac1c24925dcad->enter($__internal_293e910a65e1984da48fe00487a88bbabe2201f59e73ce7b943ac1c24925dcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_293e910a65e1984da48fe00487a88bbabe2201f59e73ce7b943ac1c24925dcad->leave($__internal_293e910a65e1984da48fe00487a88bbabe2201f59e73ce7b943ac1c24925dcad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d15e1aca2d857115822427c6f4c902d23d231587ae9fa124c10e4509456ac4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15e1aca2d857115822427c6f4c902d23d231587ae9fa124c10e4509456ac4f8->enter($__internal_d15e1aca2d857115822427c6f4c902d23d231587ae9fa124c10e4509456ac4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d15e1aca2d857115822427c6f4c902d23d231587ae9fa124c10e4509456ac4f8->leave($__internal_d15e1aca2d857115822427c6f4c902d23d231587ae9fa124c10e4509456ac4f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f64bcb37b6a6e970cf0d2723b1f755e380559d8ceb0046a5f17737b6ba2630c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64bcb37b6a6e970cf0d2723b1f755e380559d8ceb0046a5f17737b6ba2630c9->enter($__internal_f64bcb37b6a6e970cf0d2723b1f755e380559d8ceb0046a5f17737b6ba2630c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f64bcb37b6a6e970cf0d2723b1f755e380559d8ceb0046a5f17737b6ba2630c9->leave($__internal_f64bcb37b6a6e970cf0d2723b1f755e380559d8ceb0046a5f17737b6ba2630c9_prof);

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
