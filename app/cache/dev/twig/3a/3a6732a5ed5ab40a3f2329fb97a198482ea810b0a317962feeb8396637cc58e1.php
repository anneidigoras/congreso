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
        $__internal_6713e4e7238a3804e6c61998aaa22346d3871760fb6112f5e7f80e6c7d9bf43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6713e4e7238a3804e6c61998aaa22346d3871760fb6112f5e7f80e6c7d9bf43b->enter($__internal_6713e4e7238a3804e6c61998aaa22346d3871760fb6112f5e7f80e6c7d9bf43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_3f57b47be520bed5af2c4a9567e6a353024d6c187f964d5e897d10e5baab4d97"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_3f57b47be520bed5af2c4a9567e6a353024d6c187f964d5e897d10e5baab4d97"] ?? $this->getContext($context, "__internal_3f57b47be520bed5af2c4a9567e6a353024d6c187f964d5e897d10e5baab4d97"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_3f57b47be520bed5af2c4a9567e6a353024d6c187f964d5e897d10e5baab4d97"] ?? $this->getContext($context, "__internal_3f57b47be520bed5af2c4a9567e6a353024d6c187f964d5e897d10e5baab4d97"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6713e4e7238a3804e6c61998aaa22346d3871760fb6112f5e7f80e6c7d9bf43b->leave($__internal_6713e4e7238a3804e6c61998aaa22346d3871760fb6112f5e7f80e6c7d9bf43b_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_016dd13fd665d47fb0f1efd90ebf35a01bfa66301d52e28a3461a733a8c20614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016dd13fd665d47fb0f1efd90ebf35a01bfa66301d52e28a3461a733a8c20614->enter($__internal_016dd13fd665d47fb0f1efd90ebf35a01bfa66301d52e28a3461a733a8c20614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_016dd13fd665d47fb0f1efd90ebf35a01bfa66301d52e28a3461a733a8c20614->leave($__internal_016dd13fd665d47fb0f1efd90ebf35a01bfa66301d52e28a3461a733a8c20614_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3af59b53b97e97be07f1cf7ce48e06782aa8ed6c9552a7ec8b42c00e77b32103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af59b53b97e97be07f1cf7ce48e06782aa8ed6c9552a7ec8b42c00e77b32103->enter($__internal_3af59b53b97e97be07f1cf7ce48e06782aa8ed6c9552a7ec8b42c00e77b32103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3af59b53b97e97be07f1cf7ce48e06782aa8ed6c9552a7ec8b42c00e77b32103->leave($__internal_3af59b53b97e97be07f1cf7ce48e06782aa8ed6c9552a7ec8b42c00e77b32103_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c610dfc51ff8404c51056f2c62549cdc2811e8e27c11c43aebf1e21425b44438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c610dfc51ff8404c51056f2c62549cdc2811e8e27c11c43aebf1e21425b44438->enter($__internal_c610dfc51ff8404c51056f2c62549cdc2811e8e27c11c43aebf1e21425b44438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_3f57b47be520bed5af2c4a9567e6a353024d6c187f964d5e897d10e5baab4d97"] ?? $this->getContext($context, "__internal_3f57b47be520bed5af2c4a9567e6a353024d6c187f964d5e897d10e5baab4d97")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c610dfc51ff8404c51056f2c62549cdc2811e8e27c11c43aebf1e21425b44438->leave($__internal_c610dfc51ff8404c51056f2c62549cdc2811e8e27c11c43aebf1e21425b44438_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_a8969e25ccf3835a0e76c96904ff6e4d8b5ca4b677ce61f22853c730cf888a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8969e25ccf3835a0e76c96904ff6e4d8b5ca4b677ce61f22853c730cf888a30->enter($__internal_a8969e25ccf3835a0e76c96904ff6e4d8b5ca4b677ce61f22853c730cf888a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_a8969e25ccf3835a0e76c96904ff6e4d8b5ca4b677ce61f22853c730cf888a30->leave($__internal_a8969e25ccf3835a0e76c96904ff6e4d8b5ca4b677ce61f22853c730cf888a30_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_61bed2e301f7c7bc7fdf0f0496b07d9abe71b31085535470cbb44ffede49c7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bed2e301f7c7bc7fdf0f0496b07d9abe71b31085535470cbb44ffede49c7c2->enter($__internal_61bed2e301f7c7bc7fdf0f0496b07d9abe71b31085535470cbb44ffede49c7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_61bed2e301f7c7bc7fdf0f0496b07d9abe71b31085535470cbb44ffede49c7c2->leave($__internal_61bed2e301f7c7bc7fdf0f0496b07d9abe71b31085535470cbb44ffede49c7c2_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c5d59fafda25c5b6196afac1eea7ee0078420172d2b14dbff203fbc9f8324a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d59fafda25c5b6196afac1eea7ee0078420172d2b14dbff203fbc9f8324a52->enter($__internal_c5d59fafda25c5b6196afac1eea7ee0078420172d2b14dbff203fbc9f8324a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_c5d59fafda25c5b6196afac1eea7ee0078420172d2b14dbff203fbc9f8324a52->leave($__internal_c5d59fafda25c5b6196afac1eea7ee0078420172d2b14dbff203fbc9f8324a52_prof);

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
