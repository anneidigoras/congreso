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
        $__internal_938e02b906a6504d813a70675f050acdda2512d5f24cd984e073203ddfbbb5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938e02b906a6504d813a70675f050acdda2512d5f24cd984e073203ddfbbb5f9->enter($__internal_938e02b906a6504d813a70675f050acdda2512d5f24cd984e073203ddfbbb5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_b71a71bb3aff865c3174707acfde047a5c0efd88a4a596ac0b4eb6b9700acf7c"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_b71a71bb3aff865c3174707acfde047a5c0efd88a4a596ac0b4eb6b9700acf7c"] ?? $this->getContext($context, "__internal_b71a71bb3aff865c3174707acfde047a5c0efd88a4a596ac0b4eb6b9700acf7c"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_b71a71bb3aff865c3174707acfde047a5c0efd88a4a596ac0b4eb6b9700acf7c"] ?? $this->getContext($context, "__internal_b71a71bb3aff865c3174707acfde047a5c0efd88a4a596ac0b4eb6b9700acf7c"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_938e02b906a6504d813a70675f050acdda2512d5f24cd984e073203ddfbbb5f9->leave($__internal_938e02b906a6504d813a70675f050acdda2512d5f24cd984e073203ddfbbb5f9_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e526ca3e0fbd003ce0feec5ddd7967075c9141c1a6a1b5d3741bc67fb3a2625e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e526ca3e0fbd003ce0feec5ddd7967075c9141c1a6a1b5d3741bc67fb3a2625e->enter($__internal_e526ca3e0fbd003ce0feec5ddd7967075c9141c1a6a1b5d3741bc67fb3a2625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_e526ca3e0fbd003ce0feec5ddd7967075c9141c1a6a1b5d3741bc67fb3a2625e->leave($__internal_e526ca3e0fbd003ce0feec5ddd7967075c9141c1a6a1b5d3741bc67fb3a2625e_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_107db6f7971d7044dc59b2e9638e501be7900619a96b9bf01203bf899c9afdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107db6f7971d7044dc59b2e9638e501be7900619a96b9bf01203bf899c9afdfc->enter($__internal_107db6f7971d7044dc59b2e9638e501be7900619a96b9bf01203bf899c9afdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_107db6f7971d7044dc59b2e9638e501be7900619a96b9bf01203bf899c9afdfc->leave($__internal_107db6f7971d7044dc59b2e9638e501be7900619a96b9bf01203bf899c9afdfc_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_deae3b9563281df4cd1fc04105ac789f23eb07b1a90750bac019c6bc7f269bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deae3b9563281df4cd1fc04105ac789f23eb07b1a90750bac019c6bc7f269bbd->enter($__internal_deae3b9563281df4cd1fc04105ac789f23eb07b1a90750bac019c6bc7f269bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_b71a71bb3aff865c3174707acfde047a5c0efd88a4a596ac0b4eb6b9700acf7c"] ?? $this->getContext($context, "__internal_b71a71bb3aff865c3174707acfde047a5c0efd88a4a596ac0b4eb6b9700acf7c")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_deae3b9563281df4cd1fc04105ac789f23eb07b1a90750bac019c6bc7f269bbd->leave($__internal_deae3b9563281df4cd1fc04105ac789f23eb07b1a90750bac019c6bc7f269bbd_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_1b7fd7ee5abb0c291319fa84a2430604346bb4955b254dafd51ea7719bb19002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7fd7ee5abb0c291319fa84a2430604346bb4955b254dafd51ea7719bb19002->enter($__internal_1b7fd7ee5abb0c291319fa84a2430604346bb4955b254dafd51ea7719bb19002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_1b7fd7ee5abb0c291319fa84a2430604346bb4955b254dafd51ea7719bb19002->leave($__internal_1b7fd7ee5abb0c291319fa84a2430604346bb4955b254dafd51ea7719bb19002_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_543bb60813f7e6fa257811bc2509408a3cf6951494e817b3be81c652d85c65af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543bb60813f7e6fa257811bc2509408a3cf6951494e817b3be81c652d85c65af->enter($__internal_543bb60813f7e6fa257811bc2509408a3cf6951494e817b3be81c652d85c65af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_543bb60813f7e6fa257811bc2509408a3cf6951494e817b3be81c652d85c65af->leave($__internal_543bb60813f7e6fa257811bc2509408a3cf6951494e817b3be81c652d85c65af_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_d3a106e370c3dfb6a1c9cdeb80e2838b211958940b7ab9de31e4ab89f37801e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a106e370c3dfb6a1c9cdeb80e2838b211958940b7ab9de31e4ab89f37801e5->enter($__internal_d3a106e370c3dfb6a1c9cdeb80e2838b211958940b7ab9de31e4ab89f37801e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_d3a106e370c3dfb6a1c9cdeb80e2838b211958940b7ab9de31e4ab89f37801e5->leave($__internal_d3a106e370c3dfb6a1c9cdeb80e2838b211958940b7ab9de31e4ab89f37801e5_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_87673074283825376e1bb32695f1458a29e0b3716304f5fbbe2a456b4f6b15bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87673074283825376e1bb32695f1458a29e0b3716304f5fbbe2a456b4f6b15bc->enter($__internal_87673074283825376e1bb32695f1458a29e0b3716304f5fbbe2a456b4f6b15bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_87673074283825376e1bb32695f1458a29e0b3716304f5fbbe2a456b4f6b15bc->leave($__internal_87673074283825376e1bb32695f1458a29e0b3716304f5fbbe2a456b4f6b15bc_prof);

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
