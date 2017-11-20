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
        $__internal_bb85bb07eb227bb6b01f7c682228a1a6668dbb04ee0707e04d42a0eebd8dd1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb85bb07eb227bb6b01f7c682228a1a6668dbb04ee0707e04d42a0eebd8dd1e1->enter($__internal_bb85bb07eb227bb6b01f7c682228a1a6668dbb04ee0707e04d42a0eebd8dd1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb85bb07eb227bb6b01f7c682228a1a6668dbb04ee0707e04d42a0eebd8dd1e1->leave($__internal_bb85bb07eb227bb6b01f7c682228a1a6668dbb04ee0707e04d42a0eebd8dd1e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c1a553b3e0d7dbda28b169c8333cd892f09fe81f887a3bede7ea738b7f650ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1a553b3e0d7dbda28b169c8333cd892f09fe81f887a3bede7ea738b7f650ba->enter($__internal_4c1a553b3e0d7dbda28b169c8333cd892f09fe81f887a3bede7ea738b7f650ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c1a553b3e0d7dbda28b169c8333cd892f09fe81f887a3bede7ea738b7f650ba->leave($__internal_4c1a553b3e0d7dbda28b169c8333cd892f09fe81f887a3bede7ea738b7f650ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2efbc86a581e947007e5e972d35d9000cff51b66fdefdae9dfb568191067cb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efbc86a581e947007e5e972d35d9000cff51b66fdefdae9dfb568191067cb69->enter($__internal_2efbc86a581e947007e5e972d35d9000cff51b66fdefdae9dfb568191067cb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2efbc86a581e947007e5e972d35d9000cff51b66fdefdae9dfb568191067cb69->leave($__internal_2efbc86a581e947007e5e972d35d9000cff51b66fdefdae9dfb568191067cb69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce93bde366ed0dcfb893f39feea3777edd9ba39a156085d2bd23b512b32b11be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce93bde366ed0dcfb893f39feea3777edd9ba39a156085d2bd23b512b32b11be->enter($__internal_ce93bde366ed0dcfb893f39feea3777edd9ba39a156085d2bd23b512b32b11be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce93bde366ed0dcfb893f39feea3777edd9ba39a156085d2bd23b512b32b11be->leave($__internal_ce93bde366ed0dcfb893f39feea3777edd9ba39a156085d2bd23b512b32b11be_prof);

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
