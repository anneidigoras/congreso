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
        $__internal_f8ad7bb36332993b073e754fe7f4b8d6785fcaedde2fcb7bab4e0c1f3623d2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ad7bb36332993b073e754fe7f4b8d6785fcaedde2fcb7bab4e0c1f3623d2ed->enter($__internal_f8ad7bb36332993b073e754fe7f4b8d6785fcaedde2fcb7bab4e0c1f3623d2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ad7bb36332993b073e754fe7f4b8d6785fcaedde2fcb7bab4e0c1f3623d2ed->leave($__internal_f8ad7bb36332993b073e754fe7f4b8d6785fcaedde2fcb7bab4e0c1f3623d2ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3584af695566c404888d27e311fd0fd1b14bfd9e467ac8fc155f8f2796c9a651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3584af695566c404888d27e311fd0fd1b14bfd9e467ac8fc155f8f2796c9a651->enter($__internal_3584af695566c404888d27e311fd0fd1b14bfd9e467ac8fc155f8f2796c9a651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3584af695566c404888d27e311fd0fd1b14bfd9e467ac8fc155f8f2796c9a651->leave($__internal_3584af695566c404888d27e311fd0fd1b14bfd9e467ac8fc155f8f2796c9a651_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b53aeec5dd87caf4a8db18e4eec9ca6ede058fcf44597591e59db23786fc877a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53aeec5dd87caf4a8db18e4eec9ca6ede058fcf44597591e59db23786fc877a->enter($__internal_b53aeec5dd87caf4a8db18e4eec9ca6ede058fcf44597591e59db23786fc877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b53aeec5dd87caf4a8db18e4eec9ca6ede058fcf44597591e59db23786fc877a->leave($__internal_b53aeec5dd87caf4a8db18e4eec9ca6ede058fcf44597591e59db23786fc877a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc74698995a9d06aae93a0a127a7dbd3fada71ad08d069925bef4059a251f3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc74698995a9d06aae93a0a127a7dbd3fada71ad08d069925bef4059a251f3be->enter($__internal_dc74698995a9d06aae93a0a127a7dbd3fada71ad08d069925bef4059a251f3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc74698995a9d06aae93a0a127a7dbd3fada71ad08d069925bef4059a251f3be->leave($__internal_dc74698995a9d06aae93a0a127a7dbd3fada71ad08d069925bef4059a251f3be_prof);

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
