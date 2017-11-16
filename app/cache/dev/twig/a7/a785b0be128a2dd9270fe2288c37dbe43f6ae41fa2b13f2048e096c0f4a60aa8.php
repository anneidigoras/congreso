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
        $__internal_94066453fde42a5cf330d32a9708aa56327037d6c1552ea95de7afdfb7395aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94066453fde42a5cf330d32a9708aa56327037d6c1552ea95de7afdfb7395aa0->enter($__internal_94066453fde42a5cf330d32a9708aa56327037d6c1552ea95de7afdfb7395aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94066453fde42a5cf330d32a9708aa56327037d6c1552ea95de7afdfb7395aa0->leave($__internal_94066453fde42a5cf330d32a9708aa56327037d6c1552ea95de7afdfb7395aa0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f29f09add5b92eb1c8e8e902ccf26bcd243df291bc8132a834c954d52a8614e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29f09add5b92eb1c8e8e902ccf26bcd243df291bc8132a834c954d52a8614e6->enter($__internal_f29f09add5b92eb1c8e8e902ccf26bcd243df291bc8132a834c954d52a8614e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f29f09add5b92eb1c8e8e902ccf26bcd243df291bc8132a834c954d52a8614e6->leave($__internal_f29f09add5b92eb1c8e8e902ccf26bcd243df291bc8132a834c954d52a8614e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43e96d8d052d96a03fd43edb477a7159b1225efd5be2a8c2b351bf88a1235b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e96d8d052d96a03fd43edb477a7159b1225efd5be2a8c2b351bf88a1235b48->enter($__internal_43e96d8d052d96a03fd43edb477a7159b1225efd5be2a8c2b351bf88a1235b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43e96d8d052d96a03fd43edb477a7159b1225efd5be2a8c2b351bf88a1235b48->leave($__internal_43e96d8d052d96a03fd43edb477a7159b1225efd5be2a8c2b351bf88a1235b48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27bf5a2d6be3930710157dc4db9fd85d5098aab425dd09631ccca01081ee505e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bf5a2d6be3930710157dc4db9fd85d5098aab425dd09631ccca01081ee505e->enter($__internal_27bf5a2d6be3930710157dc4db9fd85d5098aab425dd09631ccca01081ee505e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27bf5a2d6be3930710157dc4db9fd85d5098aab425dd09631ccca01081ee505e->leave($__internal_27bf5a2d6be3930710157dc4db9fd85d5098aab425dd09631ccca01081ee505e_prof);

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
