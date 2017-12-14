<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c79dc4721822c3da769f6e883fd81b1d7f92d660e13d05deff15f545a258dab extends Twig_Template
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
        $__internal_aeff24936d1729befa8411082d7e091806e41abcf2b031c2aca7b95128330c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeff24936d1729befa8411082d7e091806e41abcf2b031c2aca7b95128330c27->enter($__internal_aeff24936d1729befa8411082d7e091806e41abcf2b031c2aca7b95128330c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeff24936d1729befa8411082d7e091806e41abcf2b031c2aca7b95128330c27->leave($__internal_aeff24936d1729befa8411082d7e091806e41abcf2b031c2aca7b95128330c27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df65a78fb8a3bf9d55d49249bc14d42328a8a641a325759dcd2b506fd395ee5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df65a78fb8a3bf9d55d49249bc14d42328a8a641a325759dcd2b506fd395ee5e->enter($__internal_df65a78fb8a3bf9d55d49249bc14d42328a8a641a325759dcd2b506fd395ee5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df65a78fb8a3bf9d55d49249bc14d42328a8a641a325759dcd2b506fd395ee5e->leave($__internal_df65a78fb8a3bf9d55d49249bc14d42328a8a641a325759dcd2b506fd395ee5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ac8d0e57053820af4ef493137f81496ade35b466e14d713bc1ea1207af2e1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac8d0e57053820af4ef493137f81496ade35b466e14d713bc1ea1207af2e1df->enter($__internal_3ac8d0e57053820af4ef493137f81496ade35b466e14d713bc1ea1207af2e1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ac8d0e57053820af4ef493137f81496ade35b466e14d713bc1ea1207af2e1df->leave($__internal_3ac8d0e57053820af4ef493137f81496ade35b466e14d713bc1ea1207af2e1df_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce24b90dccebbacfff02ae713c7872db55af868db92c92ebcca4acc74d6bb0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce24b90dccebbacfff02ae713c7872db55af868db92c92ebcca4acc74d6bb0d3->enter($__internal_ce24b90dccebbacfff02ae713c7872db55af868db92c92ebcca4acc74d6bb0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce24b90dccebbacfff02ae713c7872db55af868db92c92ebcca4acc74d6bb0d3->leave($__internal_ce24b90dccebbacfff02ae713c7872db55af868db92c92ebcca4acc74d6bb0d3_prof);

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
