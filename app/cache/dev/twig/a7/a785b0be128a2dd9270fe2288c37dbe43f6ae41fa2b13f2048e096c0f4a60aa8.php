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
        $__internal_e34cf4de714edbe3525d350a2a563e8727444caa6df10e4c92a5348729d8420f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34cf4de714edbe3525d350a2a563e8727444caa6df10e4c92a5348729d8420f->enter($__internal_e34cf4de714edbe3525d350a2a563e8727444caa6df10e4c92a5348729d8420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34cf4de714edbe3525d350a2a563e8727444caa6df10e4c92a5348729d8420f->leave($__internal_e34cf4de714edbe3525d350a2a563e8727444caa6df10e4c92a5348729d8420f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83b467e44d0e98a200beb65a09cf121bc2494f5002e554144d0555ad40c0405f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b467e44d0e98a200beb65a09cf121bc2494f5002e554144d0555ad40c0405f->enter($__internal_83b467e44d0e98a200beb65a09cf121bc2494f5002e554144d0555ad40c0405f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83b467e44d0e98a200beb65a09cf121bc2494f5002e554144d0555ad40c0405f->leave($__internal_83b467e44d0e98a200beb65a09cf121bc2494f5002e554144d0555ad40c0405f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36ba5032929eec4c608ea381eb940c07472f961a3cdd67ed67123663244378bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ba5032929eec4c608ea381eb940c07472f961a3cdd67ed67123663244378bf->enter($__internal_36ba5032929eec4c608ea381eb940c07472f961a3cdd67ed67123663244378bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36ba5032929eec4c608ea381eb940c07472f961a3cdd67ed67123663244378bf->leave($__internal_36ba5032929eec4c608ea381eb940c07472f961a3cdd67ed67123663244378bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ebb0cdf115b0347db76e309ecefa9c523d15d048cccfd6f468b6829776f9fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ebb0cdf115b0347db76e309ecefa9c523d15d048cccfd6f468b6829776f9fc4->enter($__internal_4ebb0cdf115b0347db76e309ecefa9c523d15d048cccfd6f468b6829776f9fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ebb0cdf115b0347db76e309ecefa9c523d15d048cccfd6f468b6829776f9fc4->leave($__internal_4ebb0cdf115b0347db76e309ecefa9c523d15d048cccfd6f468b6829776f9fc4_prof);

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
