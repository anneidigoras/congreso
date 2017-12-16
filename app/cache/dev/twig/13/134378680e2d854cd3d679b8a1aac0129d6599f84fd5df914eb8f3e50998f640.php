<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_fed0b99be9f1d873a42d8169797f4cae425e6d1c0f2bc54075889385fff58a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0b0b59a6c905d5a6831f848cfdda49482f2c273f233dff7c519972f4f9b1b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b0b59a6c905d5a6831f848cfdda49482f2c273f233dff7c519972f4f9b1b7c->enter($__internal_f0b0b59a6c905d5a6831f848cfdda49482f2c273f233dff7c519972f4f9b1b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_f0b0b59a6c905d5a6831f848cfdda49482f2c273f233dff7c519972f4f9b1b7c->leave($__internal_f0b0b59a6c905d5a6831f848cfdda49482f2c273f233dff7c519972f4f9b1b7c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_66069c361bc90a5d9af604c71f30441152df1af05835464620c508c3a048d86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66069c361bc90a5d9af604c71f30441152df1af05835464620c508c3a048d86f->enter($__internal_66069c361bc90a5d9af604c71f30441152df1af05835464620c508c3a048d86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_66069c361bc90a5d9af604c71f30441152df1af05835464620c508c3a048d86f->leave($__internal_66069c361bc90a5d9af604c71f30441152df1af05835464620c508c3a048d86f_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_478fe4f9cfcf45fbec58c1d84e751d9519e42d70cedd7bdcc08ec814378581b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478fe4f9cfcf45fbec58c1d84e751d9519e42d70cedd7bdcc08ec814378581b4->enter($__internal_478fe4f9cfcf45fbec58c1d84e751d9519e42d70cedd7bdcc08ec814378581b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_478fe4f9cfcf45fbec58c1d84e751d9519e42d70cedd7bdcc08ec814378581b4->leave($__internal_478fe4f9cfcf45fbec58c1d84e751d9519e42d70cedd7bdcc08ec814378581b4_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_428658717bbc72fad7907a6f16d2ad0362c6d012d9c6c86991e1baa3d121b379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428658717bbc72fad7907a6f16d2ad0362c6d012d9c6c86991e1baa3d121b379->enter($__internal_428658717bbc72fad7907a6f16d2ad0362c6d012d9c6c86991e1baa3d121b379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_428658717bbc72fad7907a6f16d2ad0362c6d012d9c6c86991e1baa3d121b379->leave($__internal_428658717bbc72fad7907a6f16d2ad0362c6d012d9c6c86991e1baa3d121b379_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_65ebce95cb63307ad8b0c0dd4128b68692e6cacdaf887644abac068282164dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ebce95cb63307ad8b0c0dd4128b68692e6cacdaf887644abac068282164dcb->enter($__internal_65ebce95cb63307ad8b0c0dd4128b68692e6cacdaf887644abac068282164dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_65ebce95cb63307ad8b0c0dd4128b68692e6cacdaf887644abac068282164dcb->leave($__internal_65ebce95cb63307ad8b0c0dd4128b68692e6cacdaf887644abac068282164dcb_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d9da7d2ad1e9e27306f83eb8d58aa5bef00a9f8bb4a37e58af906efc68d3c7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9da7d2ad1e9e27306f83eb8d58aa5bef00a9f8bb4a37e58af906efc68d3c7a9->enter($__internal_d9da7d2ad1e9e27306f83eb8d58aa5bef00a9f8bb4a37e58af906efc68d3c7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d9da7d2ad1e9e27306f83eb8d58aa5bef00a9f8bb4a37e58af906efc68d3c7a9->leave($__internal_d9da7d2ad1e9e27306f83eb8d58aa5bef00a9f8bb4a37e58af906efc68d3c7a9_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_cefde16f9a254f8691224876b4f816143783825c90d94331af2a127bfccf037b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefde16f9a254f8691224876b4f816143783825c90d94331af2a127bfccf037b->enter($__internal_cefde16f9a254f8691224876b4f816143783825c90d94331af2a127bfccf037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_cefde16f9a254f8691224876b4f816143783825c90d94331af2a127bfccf037b->leave($__internal_cefde16f9a254f8691224876b4f816143783825c90d94331af2a127bfccf037b_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_576e87c5d8916e151504be19f8f1135bffe880def7ba5a00e10467c46e54ec85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576e87c5d8916e151504be19f8f1135bffe880def7ba5a00e10467c46e54ec85->enter($__internal_576e87c5d8916e151504be19f8f1135bffe880def7ba5a00e10467c46e54ec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_576e87c5d8916e151504be19f8f1135bffe880def7ba5a00e10467c46e54ec85->leave($__internal_576e87c5d8916e151504be19f8f1135bffe880def7ba5a00e10467c46e54ec85_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1ad348e135332b3a3d713dadce125ef724f17d567d3418dca4d99e8ed62b5389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad348e135332b3a3d713dadce125ef724f17d567d3418dca4d99e8ed62b5389->enter($__internal_1ad348e135332b3a3d713dadce125ef724f17d567d3418dca4d99e8ed62b5389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1ad348e135332b3a3d713dadce125ef724f17d567d3418dca4d99e8ed62b5389->leave($__internal_1ad348e135332b3a3d713dadce125ef724f17d567d3418dca4d99e8ed62b5389_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_58728d8c529484475852161bdd7f6b258fa8a2291f22260016276146255fc2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58728d8c529484475852161bdd7f6b258fa8a2291f22260016276146255fc2a6->enter($__internal_58728d8c529484475852161bdd7f6b258fa8a2291f22260016276146255fc2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_58728d8c529484475852161bdd7f6b258fa8a2291f22260016276146255fc2a6->leave($__internal_58728d8c529484475852161bdd7f6b258fa8a2291f22260016276146255fc2a6_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_06886f714b8bb0edf171fcb63e4fc481579dd344653fe2602ccf5073615f0120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06886f714b8bb0edf171fcb63e4fc481579dd344653fe2602ccf5073615f0120->enter($__internal_06886f714b8bb0edf171fcb63e4fc481579dd344653fe2602ccf5073615f0120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_06886f714b8bb0edf171fcb63e4fc481579dd344653fe2602ccf5073615f0120->leave($__internal_06886f714b8bb0edf171fcb63e4fc481579dd344653fe2602ccf5073615f0120_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  370 => 94,  358 => 88,  354 => 87,  350 => 86,  347 => 85,  345 => 84,  339 => 83,  327 => 77,  323 => 76,  319 => 75,  314 => 74,  312 => 73,  306 => 72,  294 => 66,  290 => 65,  286 => 64,  282 => 63,  273 => 62,  271 => 61,  265 => 60,  258 => 57,  252 => 56,  245 => 53,  239 => 52,  229 => 47,  223 => 45,  221 => 44,  216 => 42,  213 => 41,  206 => 37,  200 => 36,  196 => 34,  194 => 33,  189 => 31,  185 => 30,  181 => 29,  172 => 28,  169 => 27,  167 => 26,  161 => 25,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 94,  95 => 93,  93 => 83,  90 => 82,  88 => 72,  85 => 71,  83 => 60,  80 => 59,  78 => 56,  75 => 55,  73 => 52,  70 => 51,  68 => 25,  65 => 24,  62 => 22,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
