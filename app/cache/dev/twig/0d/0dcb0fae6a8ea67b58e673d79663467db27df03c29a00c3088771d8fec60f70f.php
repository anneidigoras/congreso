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
        $__internal_648699f1d221b13909cb6573b39b830a10a1aeff28d8f0e0a6c573547df04619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648699f1d221b13909cb6573b39b830a10a1aeff28d8f0e0a6c573547df04619->enter($__internal_648699f1d221b13909cb6573b39b830a10a1aeff28d8f0e0a6c573547df04619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_648699f1d221b13909cb6573b39b830a10a1aeff28d8f0e0a6c573547df04619->leave($__internal_648699f1d221b13909cb6573b39b830a10a1aeff28d8f0e0a6c573547df04619_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c547206a13c9e86f244812b668d1de901769fce3ac2d740b74fe63b299b17b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c547206a13c9e86f244812b668d1de901769fce3ac2d740b74fe63b299b17b0->enter($__internal_5c547206a13c9e86f244812b668d1de901769fce3ac2d740b74fe63b299b17b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c547206a13c9e86f244812b668d1de901769fce3ac2d740b74fe63b299b17b0->leave($__internal_5c547206a13c9e86f244812b668d1de901769fce3ac2d740b74fe63b299b17b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_584ac8b36075f6a17a423609625df0ac32ca91ec2ea94de59fc9e3d5aca10ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584ac8b36075f6a17a423609625df0ac32ca91ec2ea94de59fc9e3d5aca10ab3->enter($__internal_584ac8b36075f6a17a423609625df0ac32ca91ec2ea94de59fc9e3d5aca10ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_584ac8b36075f6a17a423609625df0ac32ca91ec2ea94de59fc9e3d5aca10ab3->leave($__internal_584ac8b36075f6a17a423609625df0ac32ca91ec2ea94de59fc9e3d5aca10ab3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db5a85fb50594e92bf91b65d0f7b32ae770bae042940907f4bb8f6dd082ed800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5a85fb50594e92bf91b65d0f7b32ae770bae042940907f4bb8f6dd082ed800->enter($__internal_db5a85fb50594e92bf91b65d0f7b32ae770bae042940907f4bb8f6dd082ed800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db5a85fb50594e92bf91b65d0f7b32ae770bae042940907f4bb8f6dd082ed800->leave($__internal_db5a85fb50594e92bf91b65d0f7b32ae770bae042940907f4bb8f6dd082ed800_prof);

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
