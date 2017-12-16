<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_a738198a8743974f379165d02f5c7d8977ee2ffccb0d4ecca10c581197211a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_212be4b7ae2b6b1153af2c7083c1a4b4955449088e3ba8cd308e99ab0642a714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212be4b7ae2b6b1153af2c7083c1a4b4955449088e3ba8cd308e99ab0642a714->enter($__internal_212be4b7ae2b6b1153af2c7083c1a4b4955449088e3ba8cd308e99ab0642a714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_212be4b7ae2b6b1153af2c7083c1a4b4955449088e3ba8cd308e99ab0642a714->leave($__internal_212be4b7ae2b6b1153af2c7083c1a4b4955449088e3ba8cd308e99ab0642a714_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_068c6878f6328d7aea1d5d6e3649119eeedae54e03544694ebdd8ff5f5695f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068c6878f6328d7aea1d5d6e3649119eeedae54e03544694ebdd8ff5f5695f51->enter($__internal_068c6878f6328d7aea1d5d6e3649119eeedae54e03544694ebdd8ff5f5695f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_068c6878f6328d7aea1d5d6e3649119eeedae54e03544694ebdd8ff5f5695f51->leave($__internal_068c6878f6328d7aea1d5d6e3649119eeedae54e03544694ebdd8ff5f5695f51_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_822c601648401959ab15a19e7e4ca381eea7ada793584c727ae91fd30cc8c474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822c601648401959ab15a19e7e4ca381eea7ada793584c727ae91fd30cc8c474->enter($__internal_822c601648401959ab15a19e7e4ca381eea7ada793584c727ae91fd30cc8c474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_822c601648401959ab15a19e7e4ca381eea7ada793584c727ae91fd30cc8c474->leave($__internal_822c601648401959ab15a19e7e4ca381eea7ada793584c727ae91fd30cc8c474_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_31dcbe758d997f5365774c3880871d56263e4c33dc2046bc658d2f0a385352af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dcbe758d997f5365774c3880871d56263e4c33dc2046bc658d2f0a385352af->enter($__internal_31dcbe758d997f5365774c3880871d56263e4c33dc2046bc658d2f0a385352af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_31dcbe758d997f5365774c3880871d56263e4c33dc2046bc658d2f0a385352af->leave($__internal_31dcbe758d997f5365774c3880871d56263e4c33dc2046bc658d2f0a385352af_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  72 => 14,  68 => 12,  62 => 11,  50 => 9,  38 => 8,  31 => 3,  29 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/exception.html.twig");
    }
}
