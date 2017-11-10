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
        $__internal_b9f5b5d877f891c4ebd4859506b453e88bb1376a195761c4042e41d66a8b8bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f5b5d877f891c4ebd4859506b453e88bb1376a195761c4042e41d66a8b8bb2->enter($__internal_b9f5b5d877f891c4ebd4859506b453e88bb1376a195761c4042e41d66a8b8bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9f5b5d877f891c4ebd4859506b453e88bb1376a195761c4042e41d66a8b8bb2->leave($__internal_b9f5b5d877f891c4ebd4859506b453e88bb1376a195761c4042e41d66a8b8bb2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afb213f686c3ff5c119cabc5ce578e6b28638783d85dc18331babcedbc2015f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb213f686c3ff5c119cabc5ce578e6b28638783d85dc18331babcedbc2015f8->enter($__internal_afb213f686c3ff5c119cabc5ce578e6b28638783d85dc18331babcedbc2015f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afb213f686c3ff5c119cabc5ce578e6b28638783d85dc18331babcedbc2015f8->leave($__internal_afb213f686c3ff5c119cabc5ce578e6b28638783d85dc18331babcedbc2015f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_404f3a05d701a83e23ab75c8cbcc079e2bae0a241415beaaf8253e9baf83f707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404f3a05d701a83e23ab75c8cbcc079e2bae0a241415beaaf8253e9baf83f707->enter($__internal_404f3a05d701a83e23ab75c8cbcc079e2bae0a241415beaaf8253e9baf83f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_404f3a05d701a83e23ab75c8cbcc079e2bae0a241415beaaf8253e9baf83f707->leave($__internal_404f3a05d701a83e23ab75c8cbcc079e2bae0a241415beaaf8253e9baf83f707_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27b0ae6435e9ef86c43b46b64790fb4f6f28ea7c8923536e735f90e76c162c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b0ae6435e9ef86c43b46b64790fb4f6f28ea7c8923536e735f90e76c162c33->enter($__internal_27b0ae6435e9ef86c43b46b64790fb4f6f28ea7c8923536e735f90e76c162c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27b0ae6435e9ef86c43b46b64790fb4f6f28ea7c8923536e735f90e76c162c33->leave($__internal_27b0ae6435e9ef86c43b46b64790fb4f6f28ea7c8923536e735f90e76c162c33_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
