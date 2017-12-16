<?php

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_8b7d1b7f1bf734159f3570dbbec4a84150606f507ba9e741197c04f23a1fd072 extends Twig_Template
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
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "@EasyAdmin/default/exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08c4bee36623477fd405763f62e9a6a7b94e930a796453eefc9f3235eeb0cd39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c4bee36623477fd405763f62e9a6a7b94e930a796453eefc9f3235eeb0cd39->enter($__internal_08c4bee36623477fd405763f62e9a6a7b94e930a796453eefc9f3235eeb0cd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c4bee36623477fd405763f62e9a6a7b94e930a796453eefc9f3235eeb0cd39->leave($__internal_08c4bee36623477fd405763f62e9a6a7b94e930a796453eefc9f3235eeb0cd39_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_230e6e1ad77a0f3d196ae7b5ce1a1f8caf5b4d7a6a51a69e5e86f73903bb6739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230e6e1ad77a0f3d196ae7b5ce1a1f8caf5b4d7a6a51a69e5e86f73903bb6739->enter($__internal_230e6e1ad77a0f3d196ae7b5ce1a1f8caf5b4d7a6a51a69e5e86f73903bb6739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_230e6e1ad77a0f3d196ae7b5ce1a1f8caf5b4d7a6a51a69e5e86f73903bb6739->leave($__internal_230e6e1ad77a0f3d196ae7b5ce1a1f8caf5b4d7a6a51a69e5e86f73903bb6739_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_041e209f80a1575061a5d67eb7189335b8293d79e6f685bb737ce40d046385c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041e209f80a1575061a5d67eb7189335b8293d79e6f685bb737ce40d046385c2->enter($__internal_041e209f80a1575061a5d67eb7189335b8293d79e6f685bb737ce40d046385c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_041e209f80a1575061a5d67eb7189335b8293d79e6f685bb737ce40d046385c2->leave($__internal_041e209f80a1575061a5d67eb7189335b8293d79e6f685bb737ce40d046385c2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c310d33d1e856a7f5131c8baa3b0bef6b81620fe1ffc80386841088f600b069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c310d33d1e856a7f5131c8baa3b0bef6b81620fe1ffc80386841088f600b069->enter($__internal_6c310d33d1e856a7f5131c8baa3b0bef6b81620fe1ffc80386841088f600b069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6c310d33d1e856a7f5131c8baa3b0bef6b81620fe1ffc80386841088f600b069->leave($__internal_6c310d33d1e856a7f5131c8baa3b0bef6b81620fe1ffc80386841088f600b069_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
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
", "@EasyAdmin/default/exception.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\exception.html.twig");
    }
}
