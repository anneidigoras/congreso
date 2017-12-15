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
        $__internal_923d28d411d07a070f3240b3e4fb9d316f63726360f304929172aa94e46e9e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923d28d411d07a070f3240b3e4fb9d316f63726360f304929172aa94e46e9e17->enter($__internal_923d28d411d07a070f3240b3e4fb9d316f63726360f304929172aa94e46e9e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_c7d3caf20883db4217618061e47643376b12c8f00de76776aecfdb3757aa9529"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_c7d3caf20883db4217618061e47643376b12c8f00de76776aecfdb3757aa9529"] ?? $this->getContext($context, "__internal_c7d3caf20883db4217618061e47643376b12c8f00de76776aecfdb3757aa9529"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_c7d3caf20883db4217618061e47643376b12c8f00de76776aecfdb3757aa9529"] ?? $this->getContext($context, "__internal_c7d3caf20883db4217618061e47643376b12c8f00de76776aecfdb3757aa9529"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_923d28d411d07a070f3240b3e4fb9d316f63726360f304929172aa94e46e9e17->leave($__internal_923d28d411d07a070f3240b3e4fb9d316f63726360f304929172aa94e46e9e17_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_541b569d629b88f075360fb54f0a26923a903cbecc23df34770bf865721ef89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541b569d629b88f075360fb54f0a26923a903cbecc23df34770bf865721ef89b->enter($__internal_541b569d629b88f075360fb54f0a26923a903cbecc23df34770bf865721ef89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_541b569d629b88f075360fb54f0a26923a903cbecc23df34770bf865721ef89b->leave($__internal_541b569d629b88f075360fb54f0a26923a903cbecc23df34770bf865721ef89b_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c198ae56a0bd59d124d60cf366ddf36055628c7dde659f3190757046bf35ecd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c198ae56a0bd59d124d60cf366ddf36055628c7dde659f3190757046bf35ecd4->enter($__internal_c198ae56a0bd59d124d60cf366ddf36055628c7dde659f3190757046bf35ecd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_c198ae56a0bd59d124d60cf366ddf36055628c7dde659f3190757046bf35ecd4->leave($__internal_c198ae56a0bd59d124d60cf366ddf36055628c7dde659f3190757046bf35ecd4_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d04880bce50addb96f3e9e262dbc98bb9045c2be413241b68dab3c8644286f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04880bce50addb96f3e9e262dbc98bb9045c2be413241b68dab3c8644286f88->enter($__internal_d04880bce50addb96f3e9e262dbc98bb9045c2be413241b68dab3c8644286f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_c7d3caf20883db4217618061e47643376b12c8f00de76776aecfdb3757aa9529"] ?? $this->getContext($context, "__internal_c7d3caf20883db4217618061e47643376b12c8f00de76776aecfdb3757aa9529")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d04880bce50addb96f3e9e262dbc98bb9045c2be413241b68dab3c8644286f88->leave($__internal_d04880bce50addb96f3e9e262dbc98bb9045c2be413241b68dab3c8644286f88_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_6269b3349560d8a341c895bc6ea9ed6d38c3bf71210bf7279d435f1b80afee70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6269b3349560d8a341c895bc6ea9ed6d38c3bf71210bf7279d435f1b80afee70->enter($__internal_6269b3349560d8a341c895bc6ea9ed6d38c3bf71210bf7279d435f1b80afee70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_6269b3349560d8a341c895bc6ea9ed6d38c3bf71210bf7279d435f1b80afee70->leave($__internal_6269b3349560d8a341c895bc6ea9ed6d38c3bf71210bf7279d435f1b80afee70_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_6baf516065f19601055093f6091e9f7235cd41d3f9e9859b53abee90e51f4a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6baf516065f19601055093f6091e9f7235cd41d3f9e9859b53abee90e51f4a16->enter($__internal_6baf516065f19601055093f6091e9f7235cd41d3f9e9859b53abee90e51f4a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_6baf516065f19601055093f6091e9f7235cd41d3f9e9859b53abee90e51f4a16->leave($__internal_6baf516065f19601055093f6091e9f7235cd41d3f9e9859b53abee90e51f4a16_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_29dad0b831620b9f2bdf65597a5f6a75a6f0fd549a740aa6af42ffd7b57661c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dad0b831620b9f2bdf65597a5f6a75a6f0fd549a740aa6af42ffd7b57661c0->enter($__internal_29dad0b831620b9f2bdf65597a5f6a75a6f0fd549a740aa6af42ffd7b57661c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_29dad0b831620b9f2bdf65597a5f6a75a6f0fd549a740aa6af42ffd7b57661c0->leave($__internal_29dad0b831620b9f2bdf65597a5f6a75a6f0fd549a740aa6af42ffd7b57661c0_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_3c663ae8281036ce4041c3a49d6afdcef818ae4c9392c79e5186570263aa91f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c663ae8281036ce4041c3a49d6afdcef818ae4c9392c79e5186570263aa91f4->enter($__internal_3c663ae8281036ce4041c3a49d6afdcef818ae4c9392c79e5186570263aa91f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_3c663ae8281036ce4041c3a49d6afdcef818ae4c9392c79e5186570263aa91f4->leave($__internal_3c663ae8281036ce4041c3a49d6afdcef818ae4c9392c79e5186570263aa91f4_prof);

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
