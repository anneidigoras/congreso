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
        $__internal_2c499f323c8eed167024bb052da5c205d21e0c83976c14d9db35e12f9888b29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c499f323c8eed167024bb052da5c205d21e0c83976c14d9db35e12f9888b29e->enter($__internal_2c499f323c8eed167024bb052da5c205d21e0c83976c14d9db35e12f9888b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c499f323c8eed167024bb052da5c205d21e0c83976c14d9db35e12f9888b29e->leave($__internal_2c499f323c8eed167024bb052da5c205d21e0c83976c14d9db35e12f9888b29e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b5e1367224334d6dc032a7abf1b4d00195f2ffa5183f98759611fed6369d39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5e1367224334d6dc032a7abf1b4d00195f2ffa5183f98759611fed6369d39f->enter($__internal_1b5e1367224334d6dc032a7abf1b4d00195f2ffa5183f98759611fed6369d39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b5e1367224334d6dc032a7abf1b4d00195f2ffa5183f98759611fed6369d39f->leave($__internal_1b5e1367224334d6dc032a7abf1b4d00195f2ffa5183f98759611fed6369d39f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70dce0a5419a8351dcc71d3d2ee225ea90d5ff09ad83bedf5828683170545119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dce0a5419a8351dcc71d3d2ee225ea90d5ff09ad83bedf5828683170545119->enter($__internal_70dce0a5419a8351dcc71d3d2ee225ea90d5ff09ad83bedf5828683170545119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_70dce0a5419a8351dcc71d3d2ee225ea90d5ff09ad83bedf5828683170545119->leave($__internal_70dce0a5419a8351dcc71d3d2ee225ea90d5ff09ad83bedf5828683170545119_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ef23332e95e9c1e9ffb01e68513d0ebfd294992a91b87c0f480bc9be2d1fdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef23332e95e9c1e9ffb01e68513d0ebfd294992a91b87c0f480bc9be2d1fdce->enter($__internal_6ef23332e95e9c1e9ffb01e68513d0ebfd294992a91b87c0f480bc9be2d1fdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ef23332e95e9c1e9ffb01e68513d0ebfd294992a91b87c0f480bc9be2d1fdce->leave($__internal_6ef23332e95e9c1e9ffb01e68513d0ebfd294992a91b87c0f480bc9be2d1fdce_prof);

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
