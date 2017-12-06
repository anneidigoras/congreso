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
        $__internal_afa17a52432dcfc608b7a933cc5bdb85f86223762366e58ed2999a89d982912d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa17a52432dcfc608b7a933cc5bdb85f86223762366e58ed2999a89d982912d->enter($__internal_afa17a52432dcfc608b7a933cc5bdb85f86223762366e58ed2999a89d982912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_beb971bc9e24c238b479803371467a7055bfb45d6de853f65dcaa0fbef83437a"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_beb971bc9e24c238b479803371467a7055bfb45d6de853f65dcaa0fbef83437a"] ?? $this->getContext($context, "__internal_beb971bc9e24c238b479803371467a7055bfb45d6de853f65dcaa0fbef83437a"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_beb971bc9e24c238b479803371467a7055bfb45d6de853f65dcaa0fbef83437a"] ?? $this->getContext($context, "__internal_beb971bc9e24c238b479803371467a7055bfb45d6de853f65dcaa0fbef83437a"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa17a52432dcfc608b7a933cc5bdb85f86223762366e58ed2999a89d982912d->leave($__internal_afa17a52432dcfc608b7a933cc5bdb85f86223762366e58ed2999a89d982912d_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a16f2871b4de7ac7c059ebfaaf7e436bb6217eba14bb66ef184662b1710fd9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16f2871b4de7ac7c059ebfaaf7e436bb6217eba14bb66ef184662b1710fd9f4->enter($__internal_a16f2871b4de7ac7c059ebfaaf7e436bb6217eba14bb66ef184662b1710fd9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_a16f2871b4de7ac7c059ebfaaf7e436bb6217eba14bb66ef184662b1710fd9f4->leave($__internal_a16f2871b4de7ac7c059ebfaaf7e436bb6217eba14bb66ef184662b1710fd9f4_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_216db3ba911561347e850a7c1c4e619688994b669484664d32362944f43c8ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216db3ba911561347e850a7c1c4e619688994b669484664d32362944f43c8ac8->enter($__internal_216db3ba911561347e850a7c1c4e619688994b669484664d32362944f43c8ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_216db3ba911561347e850a7c1c4e619688994b669484664d32362944f43c8ac8->leave($__internal_216db3ba911561347e850a7c1c4e619688994b669484664d32362944f43c8ac8_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_3603ee5b167cc31eed2950e5d95c8ae630f576a487272b7c06bcc48524f4df71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3603ee5b167cc31eed2950e5d95c8ae630f576a487272b7c06bcc48524f4df71->enter($__internal_3603ee5b167cc31eed2950e5d95c8ae630f576a487272b7c06bcc48524f4df71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_beb971bc9e24c238b479803371467a7055bfb45d6de853f65dcaa0fbef83437a"] ?? $this->getContext($context, "__internal_beb971bc9e24c238b479803371467a7055bfb45d6de853f65dcaa0fbef83437a")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3603ee5b167cc31eed2950e5d95c8ae630f576a487272b7c06bcc48524f4df71->leave($__internal_3603ee5b167cc31eed2950e5d95c8ae630f576a487272b7c06bcc48524f4df71_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_a984f32bf582fe7215c52e6d9b29781d4e5851d49779a381584619a7cbc1151f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a984f32bf582fe7215c52e6d9b29781d4e5851d49779a381584619a7cbc1151f->enter($__internal_a984f32bf582fe7215c52e6d9b29781d4e5851d49779a381584619a7cbc1151f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_a984f32bf582fe7215c52e6d9b29781d4e5851d49779a381584619a7cbc1151f->leave($__internal_a984f32bf582fe7215c52e6d9b29781d4e5851d49779a381584619a7cbc1151f_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_370b4d5ff8daa667eaf10ec6aed5962e83046854e3e4b481c83850ec77387007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370b4d5ff8daa667eaf10ec6aed5962e83046854e3e4b481c83850ec77387007->enter($__internal_370b4d5ff8daa667eaf10ec6aed5962e83046854e3e4b481c83850ec77387007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_370b4d5ff8daa667eaf10ec6aed5962e83046854e3e4b481c83850ec77387007->leave($__internal_370b4d5ff8daa667eaf10ec6aed5962e83046854e3e4b481c83850ec77387007_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_e28e0b9ca25f2677d637a9ef671134e3167c0f100dacd3b0f35714e838e4b93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28e0b9ca25f2677d637a9ef671134e3167c0f100dacd3b0f35714e838e4b93c->enter($__internal_e28e0b9ca25f2677d637a9ef671134e3167c0f100dacd3b0f35714e838e4b93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_e28e0b9ca25f2677d637a9ef671134e3167c0f100dacd3b0f35714e838e4b93c->leave($__internal_e28e0b9ca25f2677d637a9ef671134e3167c0f100dacd3b0f35714e838e4b93c_prof);

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
