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
        $__internal_eaac178b037b39ac6b38027daef876a3af481c59a21dc81781e883c498ddc9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaac178b037b39ac6b38027daef876a3af481c59a21dc81781e883c498ddc9c2->enter($__internal_eaac178b037b39ac6b38027daef876a3af481c59a21dc81781e883c498ddc9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_ff65db1edad3c8ddf025686c5287f78b1a693a109eaf346749d66ca76adbbc0e"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_ff65db1edad3c8ddf025686c5287f78b1a693a109eaf346749d66ca76adbbc0e"] ?? $this->getContext($context, "__internal_ff65db1edad3c8ddf025686c5287f78b1a693a109eaf346749d66ca76adbbc0e"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_ff65db1edad3c8ddf025686c5287f78b1a693a109eaf346749d66ca76adbbc0e"] ?? $this->getContext($context, "__internal_ff65db1edad3c8ddf025686c5287f78b1a693a109eaf346749d66ca76adbbc0e"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaac178b037b39ac6b38027daef876a3af481c59a21dc81781e883c498ddc9c2->leave($__internal_eaac178b037b39ac6b38027daef876a3af481c59a21dc81781e883c498ddc9c2_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_bdcf189bedec3dfa3755d16a5576da1c2c3f018e6678543c2632009dc85552f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcf189bedec3dfa3755d16a5576da1c2c3f018e6678543c2632009dc85552f5->enter($__internal_bdcf189bedec3dfa3755d16a5576da1c2c3f018e6678543c2632009dc85552f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_bdcf189bedec3dfa3755d16a5576da1c2c3f018e6678543c2632009dc85552f5->leave($__internal_bdcf189bedec3dfa3755d16a5576da1c2c3f018e6678543c2632009dc85552f5_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f92b5a98fac5a635a268eb15b6acaee53a9b7a457551dd5af1f14d220823212f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92b5a98fac5a635a268eb15b6acaee53a9b7a457551dd5af1f14d220823212f->enter($__internal_f92b5a98fac5a635a268eb15b6acaee53a9b7a457551dd5af1f14d220823212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f92b5a98fac5a635a268eb15b6acaee53a9b7a457551dd5af1f14d220823212f->leave($__internal_f92b5a98fac5a635a268eb15b6acaee53a9b7a457551dd5af1f14d220823212f_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9a0525002eca1b08be84303aee4bee6b908cd9205ad58bbff7e07e327fa0b263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0525002eca1b08be84303aee4bee6b908cd9205ad58bbff7e07e327fa0b263->enter($__internal_9a0525002eca1b08be84303aee4bee6b908cd9205ad58bbff7e07e327fa0b263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_ff65db1edad3c8ddf025686c5287f78b1a693a109eaf346749d66ca76adbbc0e"] ?? $this->getContext($context, "__internal_ff65db1edad3c8ddf025686c5287f78b1a693a109eaf346749d66ca76adbbc0e")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9a0525002eca1b08be84303aee4bee6b908cd9205ad58bbff7e07e327fa0b263->leave($__internal_9a0525002eca1b08be84303aee4bee6b908cd9205ad58bbff7e07e327fa0b263_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_1c8bc7057ad17ec88b5f08f0050ae64b2da724006b35d0be39763a88148ef171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8bc7057ad17ec88b5f08f0050ae64b2da724006b35d0be39763a88148ef171->enter($__internal_1c8bc7057ad17ec88b5f08f0050ae64b2da724006b35d0be39763a88148ef171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_1c8bc7057ad17ec88b5f08f0050ae64b2da724006b35d0be39763a88148ef171->leave($__internal_1c8bc7057ad17ec88b5f08f0050ae64b2da724006b35d0be39763a88148ef171_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_8250bf8639255f6ea890c2669f554d5fe8843f311c290cdea2e63175431fe0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8250bf8639255f6ea890c2669f554d5fe8843f311c290cdea2e63175431fe0b6->enter($__internal_8250bf8639255f6ea890c2669f554d5fe8843f311c290cdea2e63175431fe0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_8250bf8639255f6ea890c2669f554d5fe8843f311c290cdea2e63175431fe0b6->leave($__internal_8250bf8639255f6ea890c2669f554d5fe8843f311c290cdea2e63175431fe0b6_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_04a06daab921ca75af513c7214411b2ad7452a71252d44c635ff079e5c08530a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a06daab921ca75af513c7214411b2ad7452a71252d44c635ff079e5c08530a->enter($__internal_04a06daab921ca75af513c7214411b2ad7452a71252d44c635ff079e5c08530a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_04a06daab921ca75af513c7214411b2ad7452a71252d44c635ff079e5c08530a->leave($__internal_04a06daab921ca75af513c7214411b2ad7452a71252d44c635ff079e5c08530a_prof);

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
