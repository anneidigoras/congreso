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
        $__internal_8a9955458eef3dda134428bab8bffd7146c289c61b7d02f4b91a54413b1bda93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9955458eef3dda134428bab8bffd7146c289c61b7d02f4b91a54413b1bda93->enter($__internal_8a9955458eef3dda134428bab8bffd7146c289c61b7d02f4b91a54413b1bda93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_8a9955458eef3dda134428bab8bffd7146c289c61b7d02f4b91a54413b1bda93->leave($__internal_8a9955458eef3dda134428bab8bffd7146c289c61b7d02f4b91a54413b1bda93_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2744e4db9ac2df64a97f4d5e95442962a19691ce52f9f5cbc0c1f4e6ae84e946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2744e4db9ac2df64a97f4d5e95442962a19691ce52f9f5cbc0c1f4e6ae84e946->enter($__internal_2744e4db9ac2df64a97f4d5e95442962a19691ce52f9f5cbc0c1f4e6ae84e946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_2744e4db9ac2df64a97f4d5e95442962a19691ce52f9f5cbc0c1f4e6ae84e946->leave($__internal_2744e4db9ac2df64a97f4d5e95442962a19691ce52f9f5cbc0c1f4e6ae84e946_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f59473f5199ad45b5084979b3b6eee83a01cf5e5e26fedf69b3d537a4600ef82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59473f5199ad45b5084979b3b6eee83a01cf5e5e26fedf69b3d537a4600ef82->enter($__internal_f59473f5199ad45b5084979b3b6eee83a01cf5e5e26fedf69b3d537a4600ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f59473f5199ad45b5084979b3b6eee83a01cf5e5e26fedf69b3d537a4600ef82->leave($__internal_f59473f5199ad45b5084979b3b6eee83a01cf5e5e26fedf69b3d537a4600ef82_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_87b40c5c9b99bc7ad32a904dcba2b87edb5e4b4a332d59ab28178bd9e3e12fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b40c5c9b99bc7ad32a904dcba2b87edb5e4b4a332d59ab28178bd9e3e12fb5->enter($__internal_87b40c5c9b99bc7ad32a904dcba2b87edb5e4b4a332d59ab28178bd9e3e12fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_87b40c5c9b99bc7ad32a904dcba2b87edb5e4b4a332d59ab28178bd9e3e12fb5->leave($__internal_87b40c5c9b99bc7ad32a904dcba2b87edb5e4b4a332d59ab28178bd9e3e12fb5_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4ddc1a408f90bd4ad2979ef1c0920f234f32ce7bc888e1a5de86168dfb4cdca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddc1a408f90bd4ad2979ef1c0920f234f32ce7bc888e1a5de86168dfb4cdca0->enter($__internal_4ddc1a408f90bd4ad2979ef1c0920f234f32ce7bc888e1a5de86168dfb4cdca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4ddc1a408f90bd4ad2979ef1c0920f234f32ce7bc888e1a5de86168dfb4cdca0->leave($__internal_4ddc1a408f90bd4ad2979ef1c0920f234f32ce7bc888e1a5de86168dfb4cdca0_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0ad5ffa21b2aeda1b290d5f6cebdb5d71ae2c338c7f056f2b1d4d0b3def0ef20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad5ffa21b2aeda1b290d5f6cebdb5d71ae2c338c7f056f2b1d4d0b3def0ef20->enter($__internal_0ad5ffa21b2aeda1b290d5f6cebdb5d71ae2c338c7f056f2b1d4d0b3def0ef20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0ad5ffa21b2aeda1b290d5f6cebdb5d71ae2c338c7f056f2b1d4d0b3def0ef20->leave($__internal_0ad5ffa21b2aeda1b290d5f6cebdb5d71ae2c338c7f056f2b1d4d0b3def0ef20_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a8b201160676eeb1fcda5e384f2d4f64bff92db9bdd71de1c43727aea337493d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b201160676eeb1fcda5e384f2d4f64bff92db9bdd71de1c43727aea337493d->enter($__internal_a8b201160676eeb1fcda5e384f2d4f64bff92db9bdd71de1c43727aea337493d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_a8b201160676eeb1fcda5e384f2d4f64bff92db9bdd71de1c43727aea337493d->leave($__internal_a8b201160676eeb1fcda5e384f2d4f64bff92db9bdd71de1c43727aea337493d_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_f5444a101d361682b337ae8b7630dfdfd5a4d5e3b012544fc36c7bfdb7efc399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5444a101d361682b337ae8b7630dfdfd5a4d5e3b012544fc36c7bfdb7efc399->enter($__internal_f5444a101d361682b337ae8b7630dfdfd5a4d5e3b012544fc36c7bfdb7efc399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_f5444a101d361682b337ae8b7630dfdfd5a4d5e3b012544fc36c7bfdb7efc399->leave($__internal_f5444a101d361682b337ae8b7630dfdfd5a4d5e3b012544fc36c7bfdb7efc399_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_aa108533b2852d7689e4487445f07af2be682606f488ae7ddf0441c5fea79696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa108533b2852d7689e4487445f07af2be682606f488ae7ddf0441c5fea79696->enter($__internal_aa108533b2852d7689e4487445f07af2be682606f488ae7ddf0441c5fea79696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_aa108533b2852d7689e4487445f07af2be682606f488ae7ddf0441c5fea79696->leave($__internal_aa108533b2852d7689e4487445f07af2be682606f488ae7ddf0441c5fea79696_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_256e3f06ad7585439068c5fdda98f9fa1b494073d648d9bb32046f1013fdd69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256e3f06ad7585439068c5fdda98f9fa1b494073d648d9bb32046f1013fdd69b->enter($__internal_256e3f06ad7585439068c5fdda98f9fa1b494073d648d9bb32046f1013fdd69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_256e3f06ad7585439068c5fdda98f9fa1b494073d648d9bb32046f1013fdd69b->leave($__internal_256e3f06ad7585439068c5fdda98f9fa1b494073d648d9bb32046f1013fdd69b_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8fbd52e3f3613b7b01c1c02ff93a4e6a762ddfd03a43de326815bf4c87df7c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbd52e3f3613b7b01c1c02ff93a4e6a762ddfd03a43de326815bf4c87df7c1d->enter($__internal_8fbd52e3f3613b7b01c1c02ff93a4e6a762ddfd03a43de326815bf4c87df7c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_8fbd52e3f3613b7b01c1c02ff93a4e6a762ddfd03a43de326815bf4c87df7c1d->leave($__internal_8fbd52e3f3613b7b01c1c02ff93a4e6a762ddfd03a43de326815bf4c87df7c1d_prof);

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
