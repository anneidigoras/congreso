<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_23adc1752a11a3f52863a0213927db4af2c7b21df697af2fbf25c8822e55c711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67d08a92172f2cfe53d3dd206abb042789ced3dac1d61a21b3c71e0fc524b3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d08a92172f2cfe53d3dd206abb042789ced3dac1d61a21b3c71e0fc524b3a1->enter($__internal_67d08a92172f2cfe53d3dd206abb042789ced3dac1d61a21b3c71e0fc524b3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d08a92172f2cfe53d3dd206abb042789ced3dac1d61a21b3c71e0fc524b3a1->leave($__internal_67d08a92172f2cfe53d3dd206abb042789ced3dac1d61a21b3c71e0fc524b3a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f8674a7cfb0148c32de89dc093ee7beb5d969eb8d44f7c029927b47b19ef5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8674a7cfb0148c32de89dc093ee7beb5d969eb8d44f7c029927b47b19ef5ec->enter($__internal_7f8674a7cfb0148c32de89dc093ee7beb5d969eb8d44f7c029927b47b19ef5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure database";
        
        $__internal_7f8674a7cfb0148c32de89dc093ee7beb5d969eb8d44f7c029927b47b19ef5ec->leave($__internal_7f8674a7cfb0148c32de89dc093ee7beb5d969eb8d44f7c029927b47b19ef5ec_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7608b2ec6de994e05dc8ad7ec20058223667985565a6f9190e40670a5969197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7608b2ec6de994e05dc8ad7ec20058223667985565a6f9190e40670a5969197->enter($__internal_b7608b2ec6de994e05dc8ad7ec20058223667985565a6f9190e40670a5969197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 9)->display(array_merge($context, array("index" => ($context["index"] ?? $this->getContext($context, "index")), "count" => ($context["count"] ?? $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_configurator_step", array("index" => ($context["index"] ?? $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "driver", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "host", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
        
        $__internal_b7608b2ec6de994e05dc8ad7ec20058223667985565a6f9190e40670a5969197->leave($__internal_b7608b2ec6de994e05dc8ad7ec20058223667985565a6f9190e40670a5969197_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block title %}Symfony - Configure database{% endblock %}

{% block content %}
    {% form_theme form \"SensioDistributionBundle::Configurator/form.html.twig\" %}

    <div class=\"step\">
        {% include \"SensioDistributionBundle::Configurator/steps.html.twig\" with { \"index\": index, \"count\": count } %}

        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            {{ form_errors(form) }}
        </div>
        <form action=\"{{ path('_configurator_step', { 'index': index }) }}\" method=\"POST\">
            <div class=\"symfony-form-column\">
                {{ form_row(form.driver) }}
                {{ form_row(form.host) }}
                {{ form_row(form.name) }}
            </div>
            <div class=\"symfony-form-column\">
                {{ form_row(form.user) }}
                {{ form_row(form.password) }}
            </div>

            {{ form_rest(form) }}

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
{% endblock %}
", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/Step/doctrine.html.twig");
    }
}
