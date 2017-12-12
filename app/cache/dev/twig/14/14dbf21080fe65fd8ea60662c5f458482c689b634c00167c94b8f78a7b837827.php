<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_922862c747889c6597696f2ee555acf7a8085dc2f5bacb88b5279099bf01820a extends Twig_Template
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
        $__internal_00c7ba3d589342457f650e04cc76d990274e1ba2f714e3f08e8f7be953c6c077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c7ba3d589342457f650e04cc76d990274e1ba2f714e3f08e8f7be953c6c077->enter($__internal_00c7ba3d589342457f650e04cc76d990274e1ba2f714e3f08e8f7be953c6c077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00c7ba3d589342457f650e04cc76d990274e1ba2f714e3f08e8f7be953c6c077->leave($__internal_00c7ba3d589342457f650e04cc76d990274e1ba2f714e3f08e8f7be953c6c077_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4bd23d76d924033d9dfe44c9ab4ddccefc44dd623c6059c193bf6a57f308250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bd23d76d924033d9dfe44c9ab4ddccefc44dd623c6059c193bf6a57f308250->enter($__internal_c4bd23d76d924033d9dfe44c9ab4ddccefc44dd623c6059c193bf6a57f308250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c4bd23d76d924033d9dfe44c9ab4ddccefc44dd623c6059c193bf6a57f308250->leave($__internal_c4bd23d76d924033d9dfe44c9ab4ddccefc44dd623c6059c193bf6a57f308250_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f76fbae9d22ff4fff946ad2b45a0900b903c68a4e30487e62b66d4dc30f9015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f76fbae9d22ff4fff946ad2b45a0900b903c68a4e30487e62b66d4dc30f9015->enter($__internal_6f76fbae9d22ff4fff946ad2b45a0900b903c68a4e30487e62b66d4dc30f9015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f76fbae9d22ff4fff946ad2b45a0900b903c68a4e30487e62b66d4dc30f9015->leave($__internal_6f76fbae9d22ff4fff946ad2b45a0900b903c68a4e30487e62b66d4dc30f9015_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e77b33cd14fb97383516ccf5d00ff295dfd9386a645de7bf747bec019310ab87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77b33cd14fb97383516ccf5d00ff295dfd9386a645de7bf747bec019310ab87->enter($__internal_e77b33cd14fb97383516ccf5d00ff295dfd9386a645de7bf747bec019310ab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e77b33cd14fb97383516ccf5d00ff295dfd9386a645de7bf747bec019310ab87->leave($__internal_e77b33cd14fb97383516ccf5d00ff295dfd9386a645de7bf747bec019310ab87_prof);

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
