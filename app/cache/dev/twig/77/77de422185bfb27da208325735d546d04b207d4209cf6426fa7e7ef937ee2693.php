<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_67e80ff8995d2971b9855a3c6765ff33fc7f494f3c051304d911e1fd3ce049c0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cb6af15ea84088914f2f3d7714a3e0ef13fa60788144d4a104fcdfb54afe240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb6af15ea84088914f2f3d7714a3e0ef13fa60788144d4a104fcdfb54afe240->enter($__internal_3cb6af15ea84088914f2f3d7714a3e0ef13fa60788144d4a104fcdfb54afe240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_8d01427e079d72b94bd51efff0c7ccbe47ea5e369a316f8e4c3afb94859cb75b"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_8d01427e079d72b94bd51efff0c7ccbe47ea5e369a316f8e4c3afb94859cb75b"] ?? $this->getContext($context, "__internal_8d01427e079d72b94bd51efff0c7ccbe47ea5e369a316f8e4c3afb94859cb75b"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_8d01427e079d72b94bd51efff0c7ccbe47ea5e369a316f8e4c3afb94859cb75b"] ?? $this->getContext($context, "__internal_8d01427e079d72b94bd51efff0c7ccbe47ea5e369a316f8e4c3afb94859cb75b"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb6af15ea84088914f2f3d7714a3e0ef13fa60788144d4a104fcdfb54afe240->leave($__internal_3cb6af15ea84088914f2f3d7714a3e0ef13fa60788144d4a104fcdfb54afe240_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_828e5ad25aaeb41965155776fd86d372d5adf8dcf335d12e9a80e139a1cfd370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828e5ad25aaeb41965155776fd86d372d5adf8dcf335d12e9a80e139a1cfd370->enter($__internal_828e5ad25aaeb41965155776fd86d372d5adf8dcf335d12e9a80e139a1cfd370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_828e5ad25aaeb41965155776fd86d372d5adf8dcf335d12e9a80e139a1cfd370->leave($__internal_828e5ad25aaeb41965155776fd86d372d5adf8dcf335d12e9a80e139a1cfd370_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_759d3882a8fa6809117c82415aaacaa6b49ce4eaa75a26f2884d2b8db42a877f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759d3882a8fa6809117c82415aaacaa6b49ce4eaa75a26f2884d2b8db42a877f->enter($__internal_759d3882a8fa6809117c82415aaacaa6b49ce4eaa75a26f2884d2b8db42a877f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_759d3882a8fa6809117c82415aaacaa6b49ce4eaa75a26f2884d2b8db42a877f->leave($__internal_759d3882a8fa6809117c82415aaacaa6b49ce4eaa75a26f2884d2b8db42a877f_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5bb2210ebb21456e48e16cb099c29bdd9fa35d83b857976e1d615aaf5a475b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb2210ebb21456e48e16cb099c29bdd9fa35d83b857976e1d615aaf5a475b7e->enter($__internal_5bb2210ebb21456e48e16cb099c29bdd9fa35d83b857976e1d615aaf5a475b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_8d01427e079d72b94bd51efff0c7ccbe47ea5e369a316f8e4c3afb94859cb75b"] ?? $this->getContext($context, "__internal_8d01427e079d72b94bd51efff0c7ccbe47ea5e369a316f8e4c3afb94859cb75b")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5bb2210ebb21456e48e16cb099c29bdd9fa35d83b857976e1d615aaf5a475b7e->leave($__internal_5bb2210ebb21456e48e16cb099c29bdd9fa35d83b857976e1d615aaf5a475b7e_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_2bb23567e2f034b0c369b8a4dd397ae676558ce2912dfcb6c1f8538897b4fd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb23567e2f034b0c369b8a4dd397ae676558ce2912dfcb6c1f8538897b4fd48->enter($__internal_2bb23567e2f034b0c369b8a4dd397ae676558ce2912dfcb6c1f8538897b4fd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_2bb23567e2f034b0c369b8a4dd397ae676558ce2912dfcb6c1f8538897b4fd48->leave($__internal_2bb23567e2f034b0c369b8a4dd397ae676558ce2912dfcb6c1f8538897b4fd48_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_ea03f99eae60e8f6c81ded9863a1f69cca8c25f54c867ba6e3ff10f9b0d3a5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea03f99eae60e8f6c81ded9863a1f69cca8c25f54c867ba6e3ff10f9b0d3a5a9->enter($__internal_ea03f99eae60e8f6c81ded9863a1f69cca8c25f54c867ba6e3ff10f9b0d3a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_ea03f99eae60e8f6c81ded9863a1f69cca8c25f54c867ba6e3ff10f9b0d3a5a9->leave($__internal_ea03f99eae60e8f6c81ded9863a1f69cca8c25f54c867ba6e3ff10f9b0d3a5a9_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_bd51e2a7907c7a8356e93a738cdc9ac553263941fe7f998de0534c7b866c25db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd51e2a7907c7a8356e93a738cdc9ac553263941fe7f998de0534c7b866c25db->enter($__internal_bd51e2a7907c7a8356e93a738cdc9ac553263941fe7f998de0534c7b866c25db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_bd51e2a7907c7a8356e93a738cdc9ac553263941fe7f998de0534c7b866c25db->leave($__internal_bd51e2a7907c7a8356e93a738cdc9ac553263941fe7f998de0534c7b866c25db_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_159d083bc01f2fe786df273be03307e31d56db26136332852441acb0deb688ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159d083bc01f2fe786df273be03307e31d56db26136332852441acb0deb688ae->enter($__internal_159d083bc01f2fe786df273be03307e31d56db26136332852441acb0deb688ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_159d083bc01f2fe786df273be03307e31d56db26136332852441acb0deb688ae->leave($__internal_159d083bc01f2fe786df273be03307e31d56db26136332852441acb0deb688ae_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
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
", "EasyAdminBundle:default:edit.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/edit.html.twig");
    }
}
