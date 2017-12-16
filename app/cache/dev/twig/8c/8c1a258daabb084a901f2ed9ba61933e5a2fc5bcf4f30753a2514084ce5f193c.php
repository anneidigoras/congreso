<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_8d55eb9e835f41db08c26b0f013ca199a22d5a097dfebbaf08c96fdf5b625bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
        $__internal_b75afb7c5052328981c39f8fa83ff9d4a2a6e878798e7370d7e58b53a676a94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75afb7c5052328981c39f8fa83ff9d4a2a6e878798e7370d7e58b53a676a94d->enter($__internal_b75afb7c5052328981c39f8fa83ff9d4a2a6e878798e7370d7e58b53a676a94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_b75afb7c5052328981c39f8fa83ff9d4a2a6e878798e7370d7e58b53a676a94d->leave($__internal_b75afb7c5052328981c39f8fa83ff9d4a2a6e878798e7370d7e58b53a676a94d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_09ca85e0c35f0ac83f73e991016d9306dacc32cad274601e22fe724f9b5e68ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ca85e0c35f0ac83f73e991016d9306dacc32cad274601e22fe724f9b5e68ea->enter($__internal_09ca85e0c35f0ac83f73e991016d9306dacc32cad274601e22fe724f9b5e68ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_09ca85e0c35f0ac83f73e991016d9306dacc32cad274601e22fe724f9b5e68ea->leave($__internal_09ca85e0c35f0ac83f73e991016d9306dacc32cad274601e22fe724f9b5e68ea_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ba80e8092da13412a9f6d9cafa9d2df3d4ee7561a8c8c3493847e78649380c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba80e8092da13412a9f6d9cafa9d2df3d4ee7561a8c8c3493847e78649380c6d->enter($__internal_ba80e8092da13412a9f6d9cafa9d2df3d4ee7561a8c8c3493847e78649380c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ba80e8092da13412a9f6d9cafa9d2df3d4ee7561a8c8c3493847e78649380c6d->leave($__internal_ba80e8092da13412a9f6d9cafa9d2df3d4ee7561a8c8c3493847e78649380c6d_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d43bdeb64ad030a6cb73de009749ac9ddf2ff248d3cc83804cb32857327dd3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43bdeb64ad030a6cb73de009749ac9ddf2ff248d3cc83804cb32857327dd3f3->enter($__internal_d43bdeb64ad030a6cb73de009749ac9ddf2ff248d3cc83804cb32857327dd3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_d43bdeb64ad030a6cb73de009749ac9ddf2ff248d3cc83804cb32857327dd3f3->leave($__internal_d43bdeb64ad030a6cb73de009749ac9ddf2ff248d3cc83804cb32857327dd3f3_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7338c726025a95ba273893f8edce3952a7f08e627dccf34c7ce316f3ee188c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7338c726025a95ba273893f8edce3952a7f08e627dccf34c7ce316f3ee188c0d->enter($__internal_7338c726025a95ba273893f8edce3952a7f08e627dccf34c7ce316f3ee188c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_7338c726025a95ba273893f8edce3952a7f08e627dccf34c7ce316f3ee188c0d->leave($__internal_7338c726025a95ba273893f8edce3952a7f08e627dccf34c7ce316f3ee188c0d_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_efe53f4599cb39a557aeb7f64c641c8b7db915588577767949158a8e29ef6f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe53f4599cb39a557aeb7f64c641c8b7db915588577767949158a8e29ef6f5b->enter($__internal_efe53f4599cb39a557aeb7f64c641c8b7db915588577767949158a8e29ef6f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_efe53f4599cb39a557aeb7f64c641c8b7db915588577767949158a8e29ef6f5b->leave($__internal_efe53f4599cb39a557aeb7f64c641c8b7db915588577767949158a8e29ef6f5b_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2cb8c65bc85e818201be3f856fea1b9dd05b2586834d17ff36630566569de750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb8c65bc85e818201be3f856fea1b9dd05b2586834d17ff36630566569de750->enter($__internal_2cb8c65bc85e818201be3f856fea1b9dd05b2586834d17ff36630566569de750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_2cb8c65bc85e818201be3f856fea1b9dd05b2586834d17ff36630566569de750->leave($__internal_2cb8c65bc85e818201be3f856fea1b9dd05b2586834d17ff36630566569de750_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_735bd52fd41ea1ef57e28e0ca3490e78ecd1397fc03a3ba95a2589404ccd3260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735bd52fd41ea1ef57e28e0ca3490e78ecd1397fc03a3ba95a2589404ccd3260->enter($__internal_735bd52fd41ea1ef57e28e0ca3490e78ecd1397fc03a3ba95a2589404ccd3260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_735bd52fd41ea1ef57e28e0ca3490e78ecd1397fc03a3ba95a2589404ccd3260->leave($__internal_735bd52fd41ea1ef57e28e0ca3490e78ecd1397fc03a3ba95a2589404ccd3260_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_76e4ed9f3768a3ce36657155fb2bc8f0bddf07801238d85dda26c741db5b123b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e4ed9f3768a3ce36657155fb2bc8f0bddf07801238d85dda26c741db5b123b->enter($__internal_76e4ed9f3768a3ce36657155fb2bc8f0bddf07801238d85dda26c741db5b123b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_76e4ed9f3768a3ce36657155fb2bc8f0bddf07801238d85dda26c741db5b123b->leave($__internal_76e4ed9f3768a3ce36657155fb2bc8f0bddf07801238d85dda26c741db5b123b_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0f1f7ed6c6174ba786bccfcb7c9a60b1260e04bf614a6fc6edf560b9a7d4cf9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1f7ed6c6174ba786bccfcb7c9a60b1260e04bf614a6fc6edf560b9a7d4cf9f->enter($__internal_0f1f7ed6c6174ba786bccfcb7c9a60b1260e04bf614a6fc6edf560b9a7d4cf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0f1f7ed6c6174ba786bccfcb7c9a60b1260e04bf614a6fc6edf560b9a7d4cf9f->leave($__internal_0f1f7ed6c6174ba786bccfcb7c9a60b1260e04bf614a6fc6edf560b9a7d4cf9f_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a56bc61dd3b73b6c73e56038cc1affe3eae7ee2c3916f1aa9fddb981567cbab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56bc61dd3b73b6c73e56038cc1affe3eae7ee2c3916f1aa9fddb981567cbab9->enter($__internal_a56bc61dd3b73b6c73e56038cc1affe3eae7ee2c3916f1aa9fddb981567cbab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_a56bc61dd3b73b6c73e56038cc1affe3eae7ee2c3916f1aa9fddb981567cbab9->leave($__internal_a56bc61dd3b73b6c73e56038cc1affe3eae7ee2c3916f1aa9fddb981567cbab9_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 80,  321 => 79,  309 => 73,  305 => 72,  301 => 71,  298 => 70,  296 => 69,  290 => 68,  278 => 62,  274 => 61,  270 => 60,  267 => 59,  265 => 58,  259 => 57,  247 => 51,  243 => 50,  239 => 49,  235 => 48,  228 => 47,  226 => 46,  220 => 45,  213 => 42,  207 => 41,  200 => 38,  194 => 37,  187 => 34,  184 => 33,  182 => 32,  180 => 31,  176 => 30,  174 => 29,  168 => 28,  162 => 27,  155 => 22,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 79,  95 => 78,  93 => 68,  90 => 67,  88 => 57,  85 => 56,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  73 => 37,  70 => 36,  68 => 27,  65 => 26,  62 => 24,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
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

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
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
    <div class=\"form-group\">
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

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
