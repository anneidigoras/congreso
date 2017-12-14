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
        $__internal_0ac7c03421c0963d94792d8a2848a98b853b5a2c6a45e6b5556ce8eef321cf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac7c03421c0963d94792d8a2848a98b853b5a2c6a45e6b5556ce8eef321cf4e->enter($__internal_0ac7c03421c0963d94792d8a2848a98b853b5a2c6a45e6b5556ce8eef321cf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_ce2151b586b80eac18977ac3dda447e72475f926dddf2e5a75617d35a467d5d7"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_ce2151b586b80eac18977ac3dda447e72475f926dddf2e5a75617d35a467d5d7"] ?? $this->getContext($context, "__internal_ce2151b586b80eac18977ac3dda447e72475f926dddf2e5a75617d35a467d5d7"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_ce2151b586b80eac18977ac3dda447e72475f926dddf2e5a75617d35a467d5d7"] ?? $this->getContext($context, "__internal_ce2151b586b80eac18977ac3dda447e72475f926dddf2e5a75617d35a467d5d7"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac7c03421c0963d94792d8a2848a98b853b5a2c6a45e6b5556ce8eef321cf4e->leave($__internal_0ac7c03421c0963d94792d8a2848a98b853b5a2c6a45e6b5556ce8eef321cf4e_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b6439d0d59c6e29ed28951145603da6b0673c28a0856874ae3f624984394d7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6439d0d59c6e29ed28951145603da6b0673c28a0856874ae3f624984394d7b1->enter($__internal_b6439d0d59c6e29ed28951145603da6b0673c28a0856874ae3f624984394d7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_b6439d0d59c6e29ed28951145603da6b0673c28a0856874ae3f624984394d7b1->leave($__internal_b6439d0d59c6e29ed28951145603da6b0673c28a0856874ae3f624984394d7b1_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_7045b55d681250a5205715dd2bf7605b2a500e2965cfa0c283e1c5a7c275e78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7045b55d681250a5205715dd2bf7605b2a500e2965cfa0c283e1c5a7c275e78e->enter($__internal_7045b55d681250a5205715dd2bf7605b2a500e2965cfa0c283e1c5a7c275e78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_7045b55d681250a5205715dd2bf7605b2a500e2965cfa0c283e1c5a7c275e78e->leave($__internal_7045b55d681250a5205715dd2bf7605b2a500e2965cfa0c283e1c5a7c275e78e_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d6b9f536320da43fc9344735c312bd2dfaee68b42bd9287ab2d0093fcdd8932d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b9f536320da43fc9344735c312bd2dfaee68b42bd9287ab2d0093fcdd8932d->enter($__internal_d6b9f536320da43fc9344735c312bd2dfaee68b42bd9287ab2d0093fcdd8932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_ce2151b586b80eac18977ac3dda447e72475f926dddf2e5a75617d35a467d5d7"] ?? $this->getContext($context, "__internal_ce2151b586b80eac18977ac3dda447e72475f926dddf2e5a75617d35a467d5d7")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d6b9f536320da43fc9344735c312bd2dfaee68b42bd9287ab2d0093fcdd8932d->leave($__internal_d6b9f536320da43fc9344735c312bd2dfaee68b42bd9287ab2d0093fcdd8932d_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_a545883553b9b40ef374db69fad407c88b2a07c7265113992fd34c0a1a1ea8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a545883553b9b40ef374db69fad407c88b2a07c7265113992fd34c0a1a1ea8c0->enter($__internal_a545883553b9b40ef374db69fad407c88b2a07c7265113992fd34c0a1a1ea8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_a545883553b9b40ef374db69fad407c88b2a07c7265113992fd34c0a1a1ea8c0->leave($__internal_a545883553b9b40ef374db69fad407c88b2a07c7265113992fd34c0a1a1ea8c0_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_68872a79c4e974a6199bae5166cb90d25401f6e44bc71aae5f135d4bce1f3e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68872a79c4e974a6199bae5166cb90d25401f6e44bc71aae5f135d4bce1f3e73->enter($__internal_68872a79c4e974a6199bae5166cb90d25401f6e44bc71aae5f135d4bce1f3e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_68872a79c4e974a6199bae5166cb90d25401f6e44bc71aae5f135d4bce1f3e73->leave($__internal_68872a79c4e974a6199bae5166cb90d25401f6e44bc71aae5f135d4bce1f3e73_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a77d627ac43867dc3be8d79f09c623cbe16f64fae27cb99ad069a3723cc51054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77d627ac43867dc3be8d79f09c623cbe16f64fae27cb99ad069a3723cc51054->enter($__internal_a77d627ac43867dc3be8d79f09c623cbe16f64fae27cb99ad069a3723cc51054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_a77d627ac43867dc3be8d79f09c623cbe16f64fae27cb99ad069a3723cc51054->leave($__internal_a77d627ac43867dc3be8d79f09c623cbe16f64fae27cb99ad069a3723cc51054_prof);

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
