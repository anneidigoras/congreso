<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_0c326f2eadd8ff8f148213fcdec80b5487a7f0bc09b94604451ff6e7d71d6976 extends Twig_Template
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
        $__internal_e59f4a349deb8fd5267a98bf085aefd43fc3756189da11035264f295fa3b1c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59f4a349deb8fd5267a98bf085aefd43fc3756189da11035264f295fa3b1c31->enter($__internal_e59f4a349deb8fd5267a98bf085aefd43fc3756189da11035264f295fa3b1c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_e59f4a349deb8fd5267a98bf085aefd43fc3756189da11035264f295fa3b1c31->leave($__internal_e59f4a349deb8fd5267a98bf085aefd43fc3756189da11035264f295fa3b1c31_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_6b8e99dfc894e7ba3a1ce361cf72af126da53b32bb80b024e39be8d1a76700e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8e99dfc894e7ba3a1ce361cf72af126da53b32bb80b024e39be8d1a76700e6->enter($__internal_6b8e99dfc894e7ba3a1ce361cf72af126da53b32bb80b024e39be8d1a76700e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_6b8e99dfc894e7ba3a1ce361cf72af126da53b32bb80b024e39be8d1a76700e6->leave($__internal_6b8e99dfc894e7ba3a1ce361cf72af126da53b32bb80b024e39be8d1a76700e6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fce261279f44b13e9ec65830043bd756a0700794d37710dc67f97f1c3a4f5bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce261279f44b13e9ec65830043bd756a0700794d37710dc67f97f1c3a4f5bf9->enter($__internal_fce261279f44b13e9ec65830043bd756a0700794d37710dc67f97f1c3a4f5bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_fce261279f44b13e9ec65830043bd756a0700794d37710dc67f97f1c3a4f5bf9->leave($__internal_fce261279f44b13e9ec65830043bd756a0700794d37710dc67f97f1c3a4f5bf9_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_06c0b6143be16fd17f54f2a28d558fea59d7ff8044bf8e81bd08be7d8dc7c1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c0b6143be16fd17f54f2a28d558fea59d7ff8044bf8e81bd08be7d8dc7c1a3->enter($__internal_06c0b6143be16fd17f54f2a28d558fea59d7ff8044bf8e81bd08be7d8dc7c1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_06c0b6143be16fd17f54f2a28d558fea59d7ff8044bf8e81bd08be7d8dc7c1a3->leave($__internal_06c0b6143be16fd17f54f2a28d558fea59d7ff8044bf8e81bd08be7d8dc7c1a3_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b5afc9ac938198a91cd80bc0ddf91e74da9453c25f89e00eaa4b7a1f35b9c24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5afc9ac938198a91cd80bc0ddf91e74da9453c25f89e00eaa4b7a1f35b9c24e->enter($__internal_b5afc9ac938198a91cd80bc0ddf91e74da9453c25f89e00eaa4b7a1f35b9c24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b5afc9ac938198a91cd80bc0ddf91e74da9453c25f89e00eaa4b7a1f35b9c24e->leave($__internal_b5afc9ac938198a91cd80bc0ddf91e74da9453c25f89e00eaa4b7a1f35b9c24e_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6174fbd022ba16a151973cd6d5441397db447680077c1705ca29262234c7e319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6174fbd022ba16a151973cd6d5441397db447680077c1705ca29262234c7e319->enter($__internal_6174fbd022ba16a151973cd6d5441397db447680077c1705ca29262234c7e319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_6174fbd022ba16a151973cd6d5441397db447680077c1705ca29262234c7e319->leave($__internal_6174fbd022ba16a151973cd6d5441397db447680077c1705ca29262234c7e319_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5f48bffdb18938c1d86a172a6bde881113289c5f5d222b482451a1200c55a5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f48bffdb18938c1d86a172a6bde881113289c5f5d222b482451a1200c55a5a1->enter($__internal_5f48bffdb18938c1d86a172a6bde881113289c5f5d222b482451a1200c55a5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_5f48bffdb18938c1d86a172a6bde881113289c5f5d222b482451a1200c55a5a1->leave($__internal_5f48bffdb18938c1d86a172a6bde881113289c5f5d222b482451a1200c55a5a1_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_837a3239242ce1a6024f37b6239e4742495e859a515f3ea6a4e5b9777cdf7631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837a3239242ce1a6024f37b6239e4742495e859a515f3ea6a4e5b9777cdf7631->enter($__internal_837a3239242ce1a6024f37b6239e4742495e859a515f3ea6a4e5b9777cdf7631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_837a3239242ce1a6024f37b6239e4742495e859a515f3ea6a4e5b9777cdf7631->leave($__internal_837a3239242ce1a6024f37b6239e4742495e859a515f3ea6a4e5b9777cdf7631_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0e47b1b0bb055a89621935d09ab18eafae8729d3cf37a307c756206440cd57f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e47b1b0bb055a89621935d09ab18eafae8729d3cf37a307c756206440cd57f5->enter($__internal_0e47b1b0bb055a89621935d09ab18eafae8729d3cf37a307c756206440cd57f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_0e47b1b0bb055a89621935d09ab18eafae8729d3cf37a307c756206440cd57f5->leave($__internal_0e47b1b0bb055a89621935d09ab18eafae8729d3cf37a307c756206440cd57f5_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_79f60ebf0fc4d719b2aad95d74748e88761fce010e3c03b2290ec2d4b4dd1da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f60ebf0fc4d719b2aad95d74748e88761fce010e3c03b2290ec2d4b4dd1da7->enter($__internal_79f60ebf0fc4d719b2aad95d74748e88761fce010e3c03b2290ec2d4b4dd1da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_79f60ebf0fc4d719b2aad95d74748e88761fce010e3c03b2290ec2d4b4dd1da7->leave($__internal_79f60ebf0fc4d719b2aad95d74748e88761fce010e3c03b2290ec2d4b4dd1da7_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_dbaca65186e1e76d972bd78c3e384ecc72d50a8108db08ba72cd88b56cb64248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbaca65186e1e76d972bd78c3e384ecc72d50a8108db08ba72cd88b56cb64248->enter($__internal_dbaca65186e1e76d972bd78c3e384ecc72d50a8108db08ba72cd88b56cb64248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_dbaca65186e1e76d972bd78c3e384ecc72d50a8108db08ba72cd88b56cb64248->leave($__internal_dbaca65186e1e76d972bd78c3e384ecc72d50a8108db08ba72cd88b56cb64248_prof);

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
