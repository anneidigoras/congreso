<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_d87e4020e6a18fe75e1a8021284f1e9fc417a828e3e6f8a8c1f830cbcedea385 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91d169637c5a092befdbc982e30b408100c5eb72bd7f439b1577544dde5f0476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d169637c5a092befdbc982e30b408100c5eb72bd7f439b1577544dde5f0476->enter($__internal_91d169637c5a092befdbc982e30b408100c5eb72bd7f439b1577544dde5f0476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_9a4b68a7b4d948a320f789ee76b04fcc32495e38e1af7f0e1e6f6b55a943d7cb"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_9a4b68a7b4d948a320f789ee76b04fcc32495e38e1af7f0e1e6f6b55a943d7cb"] ?? $this->getContext($context, "__internal_9a4b68a7b4d948a320f789ee76b04fcc32495e38e1af7f0e1e6f6b55a943d7cb"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_9a4b68a7b4d948a320f789ee76b04fcc32495e38e1af7f0e1e6f6b55a943d7cb"] ?? $this->getContext($context, "__internal_9a4b68a7b4d948a320f789ee76b04fcc32495e38e1af7f0e1e6f6b55a943d7cb"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d169637c5a092befdbc982e30b408100c5eb72bd7f439b1577544dde5f0476->leave($__internal_91d169637c5a092befdbc982e30b408100c5eb72bd7f439b1577544dde5f0476_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d257e0771056a2d2815c77fc0e2d732e79a33d0c06c55e70c3b449581a8df608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d257e0771056a2d2815c77fc0e2d732e79a33d0c06c55e70c3b449581a8df608->enter($__internal_d257e0771056a2d2815c77fc0e2d732e79a33d0c06c55e70c3b449581a8df608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_d257e0771056a2d2815c77fc0e2d732e79a33d0c06c55e70c3b449581a8df608->leave($__internal_d257e0771056a2d2815c77fc0e2d732e79a33d0c06c55e70c3b449581a8df608_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_7d85a6a9e117c887369645c2111484f67035108b2418fcdef18a189f00f4412c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d85a6a9e117c887369645c2111484f67035108b2418fcdef18a189f00f4412c->enter($__internal_7d85a6a9e117c887369645c2111484f67035108b2418fcdef18a189f00f4412c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_7d85a6a9e117c887369645c2111484f67035108b2418fcdef18a189f00f4412c->leave($__internal_7d85a6a9e117c887369645c2111484f67035108b2418fcdef18a189f00f4412c_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_cbe9dd2e978013d69d40f1860245cb0245cda319bfb560a2819b4a3129f5b531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe9dd2e978013d69d40f1860245cb0245cda319bfb560a2819b4a3129f5b531->enter($__internal_cbe9dd2e978013d69d40f1860245cb0245cda319bfb560a2819b4a3129f5b531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_9a4b68a7b4d948a320f789ee76b04fcc32495e38e1af7f0e1e6f6b55a943d7cb"] ?? $this->getContext($context, "__internal_9a4b68a7b4d948a320f789ee76b04fcc32495e38e1af7f0e1e6f6b55a943d7cb")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cbe9dd2e978013d69d40f1860245cb0245cda319bfb560a2819b4a3129f5b531->leave($__internal_cbe9dd2e978013d69d40f1860245cb0245cda319bfb560a2819b4a3129f5b531_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_5c7f77573853d7235556586af27e2f589acb97de9e99341273011326ed1e8bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7f77573853d7235556586af27e2f589acb97de9e99341273011326ed1e8bb3->enter($__internal_5c7f77573853d7235556586af27e2f589acb97de9e99341273011326ed1e8bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_5c7f77573853d7235556586af27e2f589acb97de9e99341273011326ed1e8bb3->leave($__internal_5c7f77573853d7235556586af27e2f589acb97de9e99341273011326ed1e8bb3_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_1a8cf11b63e65ce06c1ebc26e2b4c60ab9c2890b56793de168b6224ad2056682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8cf11b63e65ce06c1ebc26e2b4c60ab9c2890b56793de168b6224ad2056682->enter($__internal_1a8cf11b63e65ce06c1ebc26e2b4c60ab9c2890b56793de168b6224ad2056682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_1a8cf11b63e65ce06c1ebc26e2b4c60ab9c2890b56793de168b6224ad2056682->leave($__internal_1a8cf11b63e65ce06c1ebc26e2b4c60ab9c2890b56793de168b6224ad2056682_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_885f425a6f62a65522e885a4ed342ae96fcd59e0ab557d00ca0c98afbf217cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885f425a6f62a65522e885a4ed342ae96fcd59e0ab557d00ca0c98afbf217cd4->enter($__internal_885f425a6f62a65522e885a4ed342ae96fcd59e0ab557d00ca0c98afbf217cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_885f425a6f62a65522e885a4ed342ae96fcd59e0ab557d00ca0c98afbf217cd4->leave($__internal_885f425a6f62a65522e885a4ed342ae96fcd59e0ab557d00ca0c98afbf217cd4_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_7f52af8b00fcddeaafe8e1cf56060ada5b40e0cecdf387630c52173fbba89b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f52af8b00fcddeaafe8e1cf56060ada5b40e0cecdf387630c52173fbba89b0e->enter($__internal_7f52af8b00fcddeaafe8e1cf56060ada5b40e0cecdf387630c52173fbba89b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_7f52af8b00fcddeaafe8e1cf56060ada5b40e0cecdf387630c52173fbba89b0e->leave($__internal_7f52af8b00fcddeaafe8e1cf56060ada5b40e0cecdf387630c52173fbba89b0e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  173 => 42,  165 => 38,  159 => 37,  151 => 33,  149 => 32,  148 => 31,  147 => 30,  146 => 29,  145 => 28,  143 => 26,  137 => 25,  127 => 22,  121 => 21,  114 => 25,  111 => 24,  108 => 21,  102 => 20,  92 => 16,  91 => 5,  89 => 16,  86 => 15,  84 => 14,  78 => 13,  66 => 11,  54 => 10,  47 => 8,  45 => 6,  44 => 5,  43 => 6,  42 => 5,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\edit.html.twig");
    }
}
