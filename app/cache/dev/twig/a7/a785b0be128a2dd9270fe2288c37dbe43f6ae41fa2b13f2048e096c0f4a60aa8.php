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
        $__internal_f7ba7aea262649bf41e0d69b48573ea887cf72904e5fcb26c817212a8333c6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ba7aea262649bf41e0d69b48573ea887cf72904e5fcb26c817212a8333c6f6->enter($__internal_f7ba7aea262649bf41e0d69b48573ea887cf72904e5fcb26c817212a8333c6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ba7aea262649bf41e0d69b48573ea887cf72904e5fcb26c817212a8333c6f6->leave($__internal_f7ba7aea262649bf41e0d69b48573ea887cf72904e5fcb26c817212a8333c6f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afa535c31929f1026f33717924fa9a32248abf75e1e96cb3a5a137b4360c3c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa535c31929f1026f33717924fa9a32248abf75e1e96cb3a5a137b4360c3c4f->enter($__internal_afa535c31929f1026f33717924fa9a32248abf75e1e96cb3a5a137b4360c3c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afa535c31929f1026f33717924fa9a32248abf75e1e96cb3a5a137b4360c3c4f->leave($__internal_afa535c31929f1026f33717924fa9a32248abf75e1e96cb3a5a137b4360c3c4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99b81c32169c5950161c9c9952f8b50c72b5c0af31bf9e701df2ea31d57f468d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b81c32169c5950161c9c9952f8b50c72b5c0af31bf9e701df2ea31d57f468d->enter($__internal_99b81c32169c5950161c9c9952f8b50c72b5c0af31bf9e701df2ea31d57f468d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99b81c32169c5950161c9c9952f8b50c72b5c0af31bf9e701df2ea31d57f468d->leave($__internal_99b81c32169c5950161c9c9952f8b50c72b5c0af31bf9e701df2ea31d57f468d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cb4442bd226e026b6b5f057b3faf0a6f4bb99ab4ac8452734b52cd9988c511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb4442bd226e026b6b5f057b3faf0a6f4bb99ab4ac8452734b52cd9988c511b->enter($__internal_1cb4442bd226e026b6b5f057b3faf0a6f4bb99ab4ac8452734b52cd9988c511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1cb4442bd226e026b6b5f057b3faf0a6f4bb99ab4ac8452734b52cd9988c511b->leave($__internal_1cb4442bd226e026b6b5f057b3faf0a6f4bb99ab4ac8452734b52cd9988c511b_prof);

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
