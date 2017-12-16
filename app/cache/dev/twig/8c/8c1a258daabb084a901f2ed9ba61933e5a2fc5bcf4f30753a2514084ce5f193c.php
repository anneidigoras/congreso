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
        $__internal_0a1c13af6340096e4c41a6c1645d4440de540efdf055980645a958241817e359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1c13af6340096e4c41a6c1645d4440de540efdf055980645a958241817e359->enter($__internal_0a1c13af6340096e4c41a6c1645d4440de540efdf055980645a958241817e359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_0a1c13af6340096e4c41a6c1645d4440de540efdf055980645a958241817e359->leave($__internal_0a1c13af6340096e4c41a6c1645d4440de540efdf055980645a958241817e359_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_65fad0f799ac684f9f6fed5fd037bf31230e211195c872e572bbec1705fbd4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fad0f799ac684f9f6fed5fd037bf31230e211195c872e572bbec1705fbd4be->enter($__internal_65fad0f799ac684f9f6fed5fd037bf31230e211195c872e572bbec1705fbd4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_65fad0f799ac684f9f6fed5fd037bf31230e211195c872e572bbec1705fbd4be->leave($__internal_65fad0f799ac684f9f6fed5fd037bf31230e211195c872e572bbec1705fbd4be_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d6a6d0f70cb0813c0a38ce52772017e73e19a0189a6ce1d0626ec2e215153dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a6d0f70cb0813c0a38ce52772017e73e19a0189a6ce1d0626ec2e215153dfa->enter($__internal_d6a6d0f70cb0813c0a38ce52772017e73e19a0189a6ce1d0626ec2e215153dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_d6a6d0f70cb0813c0a38ce52772017e73e19a0189a6ce1d0626ec2e215153dfa->leave($__internal_d6a6d0f70cb0813c0a38ce52772017e73e19a0189a6ce1d0626ec2e215153dfa_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_923c0f603e6a1c95a7218603bdf23f580098d7da95d3cdc9b68e1435e25d0de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923c0f603e6a1c95a7218603bdf23f580098d7da95d3cdc9b68e1435e25d0de9->enter($__internal_923c0f603e6a1c95a7218603bdf23f580098d7da95d3cdc9b68e1435e25d0de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_923c0f603e6a1c95a7218603bdf23f580098d7da95d3cdc9b68e1435e25d0de9->leave($__internal_923c0f603e6a1c95a7218603bdf23f580098d7da95d3cdc9b68e1435e25d0de9_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6243a21e503d596fafc22b43f1550440247f0b57cc9cd9a9383e7a10ba427a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6243a21e503d596fafc22b43f1550440247f0b57cc9cd9a9383e7a10ba427a44->enter($__internal_6243a21e503d596fafc22b43f1550440247f0b57cc9cd9a9383e7a10ba427a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_6243a21e503d596fafc22b43f1550440247f0b57cc9cd9a9383e7a10ba427a44->leave($__internal_6243a21e503d596fafc22b43f1550440247f0b57cc9cd9a9383e7a10ba427a44_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a07b31d5ebc388b2dca20db846b159dd4cd7d1059a65b84344056502acd041fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07b31d5ebc388b2dca20db846b159dd4cd7d1059a65b84344056502acd041fa->enter($__internal_a07b31d5ebc388b2dca20db846b159dd4cd7d1059a65b84344056502acd041fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_a07b31d5ebc388b2dca20db846b159dd4cd7d1059a65b84344056502acd041fa->leave($__internal_a07b31d5ebc388b2dca20db846b159dd4cd7d1059a65b84344056502acd041fa_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_90f2908b2ab5b7dc446ee241f7a5a30ac9a7bc38041beb06809095fe58dc58a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f2908b2ab5b7dc446ee241f7a5a30ac9a7bc38041beb06809095fe58dc58a1->enter($__internal_90f2908b2ab5b7dc446ee241f7a5a30ac9a7bc38041beb06809095fe58dc58a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_90f2908b2ab5b7dc446ee241f7a5a30ac9a7bc38041beb06809095fe58dc58a1->leave($__internal_90f2908b2ab5b7dc446ee241f7a5a30ac9a7bc38041beb06809095fe58dc58a1_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_8502a2143e77fa143140c254e7ab5c824f35e0e0d4eecc0a8c7876fd0b60fcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8502a2143e77fa143140c254e7ab5c824f35e0e0d4eecc0a8c7876fd0b60fcbc->enter($__internal_8502a2143e77fa143140c254e7ab5c824f35e0e0d4eecc0a8c7876fd0b60fcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_8502a2143e77fa143140c254e7ab5c824f35e0e0d4eecc0a8c7876fd0b60fcbc->leave($__internal_8502a2143e77fa143140c254e7ab5c824f35e0e0d4eecc0a8c7876fd0b60fcbc_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_54282c69c9e74f252cab3a2130dada13d92757a30b281f4b2c6c5cdf2c27e447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54282c69c9e74f252cab3a2130dada13d92757a30b281f4b2c6c5cdf2c27e447->enter($__internal_54282c69c9e74f252cab3a2130dada13d92757a30b281f4b2c6c5cdf2c27e447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_54282c69c9e74f252cab3a2130dada13d92757a30b281f4b2c6c5cdf2c27e447->leave($__internal_54282c69c9e74f252cab3a2130dada13d92757a30b281f4b2c6c5cdf2c27e447_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d161868d937bb840fbe24b58cf84b155543be6aeaafdac491ff6efdcdbd09a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d161868d937bb840fbe24b58cf84b155543be6aeaafdac491ff6efdcdbd09a51->enter($__internal_d161868d937bb840fbe24b58cf84b155543be6aeaafdac491ff6efdcdbd09a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_d161868d937bb840fbe24b58cf84b155543be6aeaafdac491ff6efdcdbd09a51->leave($__internal_d161868d937bb840fbe24b58cf84b155543be6aeaafdac491ff6efdcdbd09a51_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_56bf46dcf8f33dfa462a62ac16323215e13f368f5c5047823a78dac6b9708129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bf46dcf8f33dfa462a62ac16323215e13f368f5c5047823a78dac6b9708129->enter($__internal_56bf46dcf8f33dfa462a62ac16323215e13f368f5c5047823a78dac6b9708129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_56bf46dcf8f33dfa462a62ac16323215e13f368f5c5047823a78dac6b9708129->leave($__internal_56bf46dcf8f33dfa462a62ac16323215e13f368f5c5047823a78dac6b9708129_prof);

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
