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
        $__internal_2b8d29797a372639ef0ab18537951259372f0d80c5e866c8e829e9cc9a995e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8d29797a372639ef0ab18537951259372f0d80c5e866c8e829e9cc9a995e19->enter($__internal_2b8d29797a372639ef0ab18537951259372f0d80c5e866c8e829e9cc9a995e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8d29797a372639ef0ab18537951259372f0d80c5e866c8e829e9cc9a995e19->leave($__internal_2b8d29797a372639ef0ab18537951259372f0d80c5e866c8e829e9cc9a995e19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19859aada567e3f5c4c81171eeef9faf2f0c70dc9a6df3d4255f0df8e191dc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19859aada567e3f5c4c81171eeef9faf2f0c70dc9a6df3d4255f0df8e191dc82->enter($__internal_19859aada567e3f5c4c81171eeef9faf2f0c70dc9a6df3d4255f0df8e191dc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19859aada567e3f5c4c81171eeef9faf2f0c70dc9a6df3d4255f0df8e191dc82->leave($__internal_19859aada567e3f5c4c81171eeef9faf2f0c70dc9a6df3d4255f0df8e191dc82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cdccf791019f20b8cdeaebbd4edb2849ac79a1e3519b560aebe41e151adaf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdccf791019f20b8cdeaebbd4edb2849ac79a1e3519b560aebe41e151adaf2c->enter($__internal_7cdccf791019f20b8cdeaebbd4edb2849ac79a1e3519b560aebe41e151adaf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cdccf791019f20b8cdeaebbd4edb2849ac79a1e3519b560aebe41e151adaf2c->leave($__internal_7cdccf791019f20b8cdeaebbd4edb2849ac79a1e3519b560aebe41e151adaf2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0c7761837b9900f18bc906e4b29c803548292a1f10c2869fee0a9fd253a0b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c7761837b9900f18bc906e4b29c803548292a1f10c2869fee0a9fd253a0b45->enter($__internal_c0c7761837b9900f18bc906e4b29c803548292a1f10c2869fee0a9fd253a0b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0c7761837b9900f18bc906e4b29c803548292a1f10c2869fee0a9fd253a0b45->leave($__internal_c0c7761837b9900f18bc906e4b29c803548292a1f10c2869fee0a9fd253a0b45_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
