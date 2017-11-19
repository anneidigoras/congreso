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
        $__internal_408189fd86d12469e57f93fd5e2518278181a65cb7c6b52a24fe13a5d8e2be5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408189fd86d12469e57f93fd5e2518278181a65cb7c6b52a24fe13a5d8e2be5e->enter($__internal_408189fd86d12469e57f93fd5e2518278181a65cb7c6b52a24fe13a5d8e2be5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_408189fd86d12469e57f93fd5e2518278181a65cb7c6b52a24fe13a5d8e2be5e->leave($__internal_408189fd86d12469e57f93fd5e2518278181a65cb7c6b52a24fe13a5d8e2be5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_493c4be6f960de2360d124c7d99d3d9f88ce2b84cb216987aec8dbec27332f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493c4be6f960de2360d124c7d99d3d9f88ce2b84cb216987aec8dbec27332f6f->enter($__internal_493c4be6f960de2360d124c7d99d3d9f88ce2b84cb216987aec8dbec27332f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_493c4be6f960de2360d124c7d99d3d9f88ce2b84cb216987aec8dbec27332f6f->leave($__internal_493c4be6f960de2360d124c7d99d3d9f88ce2b84cb216987aec8dbec27332f6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f34614a8fcbf547997c0b3f2e74d85c6382b8e39305d80d481c66c6e11112bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34614a8fcbf547997c0b3f2e74d85c6382b8e39305d80d481c66c6e11112bad->enter($__internal_f34614a8fcbf547997c0b3f2e74d85c6382b8e39305d80d481c66c6e11112bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f34614a8fcbf547997c0b3f2e74d85c6382b8e39305d80d481c66c6e11112bad->leave($__internal_f34614a8fcbf547997c0b3f2e74d85c6382b8e39305d80d481c66c6e11112bad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fa92d9aa3a5d8213c3e867d947a7ead14f00eb83ac315bdd6ba653b163979ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa92d9aa3a5d8213c3e867d947a7ead14f00eb83ac315bdd6ba653b163979ac->enter($__internal_4fa92d9aa3a5d8213c3e867d947a7ead14f00eb83ac315bdd6ba653b163979ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4fa92d9aa3a5d8213c3e867d947a7ead14f00eb83ac315bdd6ba653b163979ac->leave($__internal_4fa92d9aa3a5d8213c3e867d947a7ead14f00eb83ac315bdd6ba653b163979ac_prof);

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
