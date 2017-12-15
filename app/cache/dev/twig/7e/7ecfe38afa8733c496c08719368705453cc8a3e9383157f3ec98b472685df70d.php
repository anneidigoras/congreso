<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_9a43a12d6bd3deba93a5fbb922dbda53d9aea681950a73d10f332c506ea9955d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01ac650bae398bf9e61f2a21f2e9aa98db9808ace0228da7933373c5f4e9536d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ac650bae398bf9e61f2a21f2e9aa98db9808ace0228da7933373c5f4e9536d->enter($__internal_01ac650bae398bf9e61f2a21f2e9aa98db9808ace0228da7933373c5f4e9536d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59"] ?? $this->getContext($context, "__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59"] ?? $this->getContext($context, "__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01ac650bae398bf9e61f2a21f2e9aa98db9808ace0228da7933373c5f4e9536d->leave($__internal_01ac650bae398bf9e61f2a21f2e9aa98db9808ace0228da7933373c5f4e9536d_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_271b108832cca14665b88a43112c6dcf1c1720f9fcea72b86b6ecc95cfb3841f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271b108832cca14665b88a43112c6dcf1c1720f9fcea72b86b6ecc95cfb3841f->enter($__internal_271b108832cca14665b88a43112c6dcf1c1720f9fcea72b86b6ecc95cfb3841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_271b108832cca14665b88a43112c6dcf1c1720f9fcea72b86b6ecc95cfb3841f->leave($__internal_271b108832cca14665b88a43112c6dcf1c1720f9fcea72b86b6ecc95cfb3841f_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a1b979d64ef3c595f6b60901245a8c4a4add282897b41f754f22b2080144956d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b979d64ef3c595f6b60901245a8c4a4add282897b41f754f22b2080144956d->enter($__internal_a1b979d64ef3c595f6b60901245a8c4a4add282897b41f754f22b2080144956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_a1b979d64ef3c595f6b60901245a8c4a4add282897b41f754f22b2080144956d->leave($__internal_a1b979d64ef3c595f6b60901245a8c4a4add282897b41f754f22b2080144956d_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0d8a2b61f8660e0e22b0938667f889bd8409a90e80184d2bdde584aa351d6b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8a2b61f8660e0e22b0938667f889bd8409a90e80184d2bdde584aa351d6b6b->enter($__internal_0d8a2b61f8660e0e22b0938667f889bd8409a90e80184d2bdde584aa351d6b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59"] ?? $this->getContext($context, "__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0d8a2b61f8660e0e22b0938667f889bd8409a90e80184d2bdde584aa351d6b6b->leave($__internal_0d8a2b61f8660e0e22b0938667f889bd8409a90e80184d2bdde584aa351d6b6b_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_9c145bf7a5e659b7859b023dffcde2496656d9be0972285bd66911b37b69849e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c145bf7a5e659b7859b023dffcde2496656d9be0972285bd66911b37b69849e->enter($__internal_9c145bf7a5e659b7859b023dffcde2496656d9be0972285bd66911b37b69849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 4
($context["__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59"] ?? $this->getContext($context, "__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59")));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
($context["__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59"] ?? $this->getContext($context, "__internal_2a9cdfd587a840c1435f617926b78c3caef015968a927f697ad405875ede4c59")));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_9c145bf7a5e659b7859b023dffcde2496656d9be0972285bd66911b37b69849e->leave($__internal_9c145bf7a5e659b7859b023dffcde2496656d9be0972285bd66911b37b69849e_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_d11ca05280f49bbeaf5b811f4c5a8b2ec62aad0fc1008059d38fcf8d563a95ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11ca05280f49bbeaf5b811f4c5a8b2ec62aad0fc1008059d38fcf8d563a95ec->enter($__internal_d11ca05280f49bbeaf5b811f4c5a8b2ec62aad0fc1008059d38fcf8d563a95ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 46
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 47
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 48
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 49
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 50
        echo "
            ";
        
        $__internal_d11ca05280f49bbeaf5b811f4c5a8b2ec62aad0fc1008059d38fcf8d563a95ec->leave($__internal_d11ca05280f49bbeaf5b811f4c5a8b2ec62aad0fc1008059d38fcf8d563a95ec_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_a0053b0c81c9008e11d0441c5d14946a404de6d92e6bfcb72359c06d9efc1f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0053b0c81c9008e11d0441c5d14946a404de6d92e6bfcb72359c06d9efc1f22->enter($__internal_a0053b0c81c9008e11d0441c5d14946a404de6d92e6bfcb72359c06d9efc1f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 61
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 62
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 63
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 64
        echo "
    ";
        
        $__internal_a0053b0c81c9008e11d0441c5d14946a404de6d92e6bfcb72359c06d9efc1f22->leave($__internal_a0053b0c81c9008e11d0441c5d14946a404de6d92e6bfcb72359c06d9efc1f22_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_31af7d3e3e0817a1f6b27f4a91258fd49a1d031a9138686cf2f877f32118d3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31af7d3e3e0817a1f6b27f4a91258fd49a1d031a9138686cf2f877f32118d3a8->enter($__internal_31af7d3e3e0817a1f6b27f4a91258fd49a1d031a9138686cf2f877f32118d3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
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
        
        $__internal_31af7d3e3e0817a1f6b27f4a91258fd49a1d031a9138686cf2f877f32118d3a8->leave($__internal_31af7d3e3e0817a1f6b27f4a91258fd49a1d031a9138686cf2f877f32118d3a8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 69,  226 => 68,  218 => 64,  216 => 63,  215 => 62,  214 => 61,  213 => 60,  212 => 59,  210 => 57,  204 => 56,  196 => 50,  194 => 49,  193 => 48,  192 => 47,  191 => 46,  190 => 45,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  174 => 40,  167 => 56,  161 => 52,  159 => 40,  154 => 37,  146 => 34,  142 => 32,  140 => 4,  138 => 32,  136 => 31,  130 => 28,  124 => 24,  122 => 4,  121 => 24,  113 => 22,  109 => 21,  106 => 20,  100 => 19,  90 => 15,  89 => 4,  87 => 15,  84 => 14,  82 => 13,  76 => 12,  64 => 10,  52 => 9,  45 => 7,  43 => 5,  42 => 4,  41 => 5,  40 => 4,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
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
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/show.html.twig");
    }
}
