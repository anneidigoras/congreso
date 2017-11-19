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
        $__internal_d974612932a9f8b7a85268bec8ae9120aadc9161926a30e9f3a4b16e49662a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d974612932a9f8b7a85268bec8ae9120aadc9161926a30e9f3a4b16e49662a95->enter($__internal_d974612932a9f8b7a85268bec8ae9120aadc9161926a30e9f3a4b16e49662a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d974612932a9f8b7a85268bec8ae9120aadc9161926a30e9f3a4b16e49662a95->leave($__internal_d974612932a9f8b7a85268bec8ae9120aadc9161926a30e9f3a4b16e49662a95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_119f227903076ce69339314a0c1ba38dce3428bbc5f8d601c3eb75a3496bbb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119f227903076ce69339314a0c1ba38dce3428bbc5f8d601c3eb75a3496bbb6b->enter($__internal_119f227903076ce69339314a0c1ba38dce3428bbc5f8d601c3eb75a3496bbb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_119f227903076ce69339314a0c1ba38dce3428bbc5f8d601c3eb75a3496bbb6b->leave($__internal_119f227903076ce69339314a0c1ba38dce3428bbc5f8d601c3eb75a3496bbb6b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a3fdc3b5e31d75e74ab10e8d2807222fc4f45e21b930bede3df4d84df235931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3fdc3b5e31d75e74ab10e8d2807222fc4f45e21b930bede3df4d84df235931->enter($__internal_8a3fdc3b5e31d75e74ab10e8d2807222fc4f45e21b930bede3df4d84df235931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a3fdc3b5e31d75e74ab10e8d2807222fc4f45e21b930bede3df4d84df235931->leave($__internal_8a3fdc3b5e31d75e74ab10e8d2807222fc4f45e21b930bede3df4d84df235931_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d07fb2e215dab2496cd2bb8e5ed1ac579322471471143ddcd9afc2152573ac62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07fb2e215dab2496cd2bb8e5ed1ac579322471471143ddcd9afc2152573ac62->enter($__internal_d07fb2e215dab2496cd2bb8e5ed1ac579322471471143ddcd9afc2152573ac62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d07fb2e215dab2496cd2bb8e5ed1ac579322471471143ddcd9afc2152573ac62->leave($__internal_d07fb2e215dab2496cd2bb8e5ed1ac579322471471143ddcd9afc2152573ac62_prof);

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
