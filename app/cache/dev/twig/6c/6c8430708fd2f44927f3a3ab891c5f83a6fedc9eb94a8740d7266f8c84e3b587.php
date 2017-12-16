<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a82435d44d5712b0b8a57d0bb3ef5699e2369fd037fe0e8f85e1e168b5c3d6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2419865ce01ef1f3cfdcb0c02cc26f9a9d89a5202558d6bc07310f26f18dc571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2419865ce01ef1f3cfdcb0c02cc26f9a9d89a5202558d6bc07310f26f18dc571->enter($__internal_2419865ce01ef1f3cfdcb0c02cc26f9a9d89a5202558d6bc07310f26f18dc571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2419865ce01ef1f3cfdcb0c02cc26f9a9d89a5202558d6bc07310f26f18dc571->leave($__internal_2419865ce01ef1f3cfdcb0c02cc26f9a9d89a5202558d6bc07310f26f18dc571_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ca31bdab05e7fbcc919a6f7c895200121ba79b09f1e547f07e02e66f9c3ae03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca31bdab05e7fbcc919a6f7c895200121ba79b09f1e547f07e02e66f9c3ae03->enter($__internal_6ca31bdab05e7fbcc919a6f7c895200121ba79b09f1e547f07e02e66f9c3ae03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6ca31bdab05e7fbcc919a6f7c895200121ba79b09f1e547f07e02e66f9c3ae03->leave($__internal_6ca31bdab05e7fbcc919a6f7c895200121ba79b09f1e547f07e02e66f9c3ae03_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2ba5d94217f451a1e42f38000e896c65f77c172f49f3b735f4afee4776b10a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ba5d94217f451a1e42f38000e896c65f77c172f49f3b735f4afee4776b10a4->enter($__internal_a2ba5d94217f451a1e42f38000e896c65f77c172f49f3b735f4afee4776b10a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a2ba5d94217f451a1e42f38000e896c65f77c172f49f3b735f4afee4776b10a4->leave($__internal_a2ba5d94217f451a1e42f38000e896c65f77c172f49f3b735f4afee4776b10a4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ce69ec0778a2a472b985167a78ad327293d519e05c87919e376f0fde5ec94f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce69ec0778a2a472b985167a78ad327293d519e05c87919e376f0fde5ec94f2->enter($__internal_0ce69ec0778a2a472b985167a78ad327293d519e05c87919e376f0fde5ec94f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_0ce69ec0778a2a472b985167a78ad327293d519e05c87919e376f0fde5ec94f2->leave($__internal_0ce69ec0778a2a472b985167a78ad327293d519e05c87919e376f0fde5ec94f2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba4ea31a7eb6f35693ce4899872006499b9344bdf7d32c86cd86bd68007fedc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4ea31a7eb6f35693ce4899872006499b9344bdf7d32c86cd86bd68007fedc3->enter($__internal_ba4ea31a7eb6f35693ce4899872006499b9344bdf7d32c86cd86bd68007fedc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ba4ea31a7eb6f35693ce4899872006499b9344bdf7d32c86cd86bd68007fedc3->leave($__internal_ba4ea31a7eb6f35693ce4899872006499b9344bdf7d32c86cd86bd68007fedc3_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
