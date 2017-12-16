<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_ed64754d3c1cfbf69749a08fc22086c15f5d079d1a56c11e34d083062da4a566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcbd732f1934ccf240754ea0092a7de932633081cfac9c9c00520aaf58661a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbd732f1934ccf240754ea0092a7de932633081cfac9c9c00520aaf58661a37->enter($__internal_fcbd732f1934ccf240754ea0092a7de932633081cfac9c9c00520aaf58661a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_1683e865d76a921fbbbfd89053797ea0e047482c6498344787eb00e56cd6cfc5"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_1683e865d76a921fbbbfd89053797ea0e047482c6498344787eb00e56cd6cfc5"] ?? $this->getContext($context, "__internal_1683e865d76a921fbbbfd89053797ea0e047482c6498344787eb00e56cd6cfc5"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_1683e865d76a921fbbbfd89053797ea0e047482c6498344787eb00e56cd6cfc5"] ?? $this->getContext($context, "__internal_1683e865d76a921fbbbfd89053797ea0e047482c6498344787eb00e56cd6cfc5"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcbd732f1934ccf240754ea0092a7de932633081cfac9c9c00520aaf58661a37->leave($__internal_fcbd732f1934ccf240754ea0092a7de932633081cfac9c9c00520aaf58661a37_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a413c4350bd2e9c08c232e27b3f5c6028964e805daaa6e268b567408089289db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a413c4350bd2e9c08c232e27b3f5c6028964e805daaa6e268b567408089289db->enter($__internal_a413c4350bd2e9c08c232e27b3f5c6028964e805daaa6e268b567408089289db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_a413c4350bd2e9c08c232e27b3f5c6028964e805daaa6e268b567408089289db->leave($__internal_a413c4350bd2e9c08c232e27b3f5c6028964e805daaa6e268b567408089289db_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a1d37e696404dcd4b96e0cb0db871121024ac6e45804b7985774b27f314a0c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d37e696404dcd4b96e0cb0db871121024ac6e45804b7985774b27f314a0c00->enter($__internal_a1d37e696404dcd4b96e0cb0db871121024ac6e45804b7985774b27f314a0c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_a1d37e696404dcd4b96e0cb0db871121024ac6e45804b7985774b27f314a0c00->leave($__internal_a1d37e696404dcd4b96e0cb0db871121024ac6e45804b7985774b27f314a0c00_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9ed33f30725211c0e6a33529a04d707e990e71fa6c5ef59f13763234392bc490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed33f30725211c0e6a33529a04d707e990e71fa6c5ef59f13763234392bc490->enter($__internal_9ed33f30725211c0e6a33529a04d707e990e71fa6c5ef59f13763234392bc490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_1683e865d76a921fbbbfd89053797ea0e047482c6498344787eb00e56cd6cfc5"] ?? $this->getContext($context, "__internal_1683e865d76a921fbbbfd89053797ea0e047482c6498344787eb00e56cd6cfc5")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9ed33f30725211c0e6a33529a04d707e990e71fa6c5ef59f13763234392bc490->leave($__internal_9ed33f30725211c0e6a33529a04d707e990e71fa6c5ef59f13763234392bc490_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_62da9d6569537fc75f0b92dc5a2af6d51367fd02cdb60afe792991099771305a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62da9d6569537fc75f0b92dc5a2af6d51367fd02cdb60afe792991099771305a->enter($__internal_62da9d6569537fc75f0b92dc5a2af6d51367fd02cdb60afe792991099771305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_62da9d6569537fc75f0b92dc5a2af6d51367fd02cdb60afe792991099771305a->leave($__internal_62da9d6569537fc75f0b92dc5a2af6d51367fd02cdb60afe792991099771305a_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_390ad8298bb3b2926c68f40728959171d3187711dada21bb920fca74c71dfda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390ad8298bb3b2926c68f40728959171d3187711dada21bb920fca74c71dfda9->enter($__internal_390ad8298bb3b2926c68f40728959171d3187711dada21bb920fca74c71dfda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_390ad8298bb3b2926c68f40728959171d3187711dada21bb920fca74c71dfda9->leave($__internal_390ad8298bb3b2926c68f40728959171d3187711dada21bb920fca74c71dfda9_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_f8bf23400ae1daa319edaf22b7fe11017c2b5595dbad75e270beb0c6f83556a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bf23400ae1daa319edaf22b7fe11017c2b5595dbad75e270beb0c6f83556a7->enter($__internal_f8bf23400ae1daa319edaf22b7fe11017c2b5595dbad75e270beb0c6f83556a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_f8bf23400ae1daa319edaf22b7fe11017c2b5595dbad75e270beb0c6f83556a7->leave($__internal_f8bf23400ae1daa319edaf22b7fe11017c2b5595dbad75e270beb0c6f83556a7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 30,  133 => 26,  127 => 25,  117 => 21,  104 => 20,  98 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  62 => 10,  50 => 9,  43 => 7,  41 => 4,  40 => 5,  39 => 4,  38 => 5,  36 => 4,  34 => 3,  32 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\new.html.twig");
    }
}
