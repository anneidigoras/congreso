<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_44458e613fc409cdc232d3106fdfca22bd338325fe01c17744f032f8f6977dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dc30fc0e7497b2c9409d9291549601bc833546d2552aea56e4389d9da15faab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc30fc0e7497b2c9409d9291549601bc833546d2552aea56e4389d9da15faab->enter($__internal_5dc30fc0e7497b2c9409d9291549601bc833546d2552aea56e4389d9da15faab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('form_label', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('choice_label', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 186
        echo "
";
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('form_row', $context, $blocks);
        // line 196
        echo "
";
        // line 197
        $this->displayBlock('button_row', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('choice_row', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('date_row', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('time_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_row', $context, $blocks);
        // line 236
        echo "
";
        // line 238
        echo "
";
        // line 239
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_5dc30fc0e7497b2c9409d9291549601bc833546d2552aea56e4389d9da15faab->leave($__internal_5dc30fc0e7497b2c9409d9291549601bc833546d2552aea56e4389d9da15faab_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_086e9fb90e0aa3a4bc6c7c6211ee9ce7e7d3ae725bc28505f50524b6a80601c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086e9fb90e0aa3a4bc6c7c6211ee9ce7e7d3ae725bc28505f50524b6a80601c3->enter($__internal_086e9fb90e0aa3a4bc6c7c6211ee9ce7e7d3ae725bc28505f50524b6a80601c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_086e9fb90e0aa3a4bc6c7c6211ee9ce7e7d3ae725bc28505f50524b6a80601c3->leave($__internal_086e9fb90e0aa3a4bc6c7c6211ee9ce7e7d3ae725bc28505f50524b6a80601c3_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f308fab409a1b51835cfb09c68c58967f2b2badc7e932e799adf87ff1a94b640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f308fab409a1b51835cfb09c68c58967f2b2badc7e932e799adf87ff1a94b640->enter($__internal_f308fab409a1b51835cfb09c68c58967f2b2badc7e932e799adf87ff1a94b640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f308fab409a1b51835cfb09c68c58967f2b2badc7e932e799adf87ff1a94b640->leave($__internal_f308fab409a1b51835cfb09c68c58967f2b2badc7e932e799adf87ff1a94b640_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_549d1fcff2d1d9d224ec64ded2a8856abfec40651bd405ab2f0cfbb5b3cfbd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549d1fcff2d1d9d224ec64ded2a8856abfec40651bd405ab2f0cfbb5b3cfbd3a->enter($__internal_549d1fcff2d1d9d224ec64ded2a8856abfec40651bd405ab2f0cfbb5b3cfbd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_549d1fcff2d1d9d224ec64ded2a8856abfec40651bd405ab2f0cfbb5b3cfbd3a->leave($__internal_549d1fcff2d1d9d224ec64ded2a8856abfec40651bd405ab2f0cfbb5b3cfbd3a_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_70dedbdbc0621f363c079491a6a430cff53ba191d3b9361db30c31a01bb9c58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dedbdbc0621f363c079491a6a430cff53ba191d3b9361db30c31a01bb9c58a->enter($__internal_70dedbdbc0621f363c079491a6a430cff53ba191d3b9361db30c31a01bb9c58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_c8c7c1cd0f52be6b7355218dcd6744d532e7385a063e9de363de2a03369c842a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_a2609158e735b6f97caef505ce7819d12ba56a9721c3f617a9c190d9fa17a0ed = "{{") && ('' === $__internal_a2609158e735b6f97caef505ce7819d12ba56a9721c3f617a9c190d9fa17a0ed || 0 === strpos($__internal_c8c7c1cd0f52be6b7355218dcd6744d532e7385a063e9de363de2a03369c842a, $__internal_a2609158e735b6f97caef505ce7819d12ba56a9721c3f617a9c190d9fa17a0ed)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_70dedbdbc0621f363c079491a6a430cff53ba191d3b9361db30c31a01bb9c58a->leave($__internal_70dedbdbc0621f363c079491a6a430cff53ba191d3b9361db30c31a01bb9c58a_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a2f40abc4c54aa2d6d97f36a9440db03797799cc1b570971947f7b8b0183cf50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f40abc4c54aa2d6d97f36a9440db03797799cc1b570971947f7b8b0183cf50->enter($__internal_a2f40abc4c54aa2d6d97f36a9440db03797799cc1b570971947f7b8b0183cf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a2f40abc4c54aa2d6d97f36a9440db03797799cc1b570971947f7b8b0183cf50->leave($__internal_a2f40abc4c54aa2d6d97f36a9440db03797799cc1b570971947f7b8b0183cf50_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ff83eb70ef444b664c0c1d1d2be8ed32066f7bb5209346a54e2f2be576b2ff42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff83eb70ef444b664c0c1d1d2be8ed32066f7bb5209346a54e2f2be576b2ff42->enter($__internal_ff83eb70ef444b664c0c1d1d2be8ed32066f7bb5209346a54e2f2be576b2ff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_ff83eb70ef444b664c0c1d1d2be8ed32066f7bb5209346a54e2f2be576b2ff42->leave($__internal_ff83eb70ef444b664c0c1d1d2be8ed32066f7bb5209346a54e2f2be576b2ff42_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1c7666a1f2827225f0646be991a85ccad237253123f6e3f8297103980ac96418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7666a1f2827225f0646be991a85ccad237253123f6e3f8297103980ac96418->enter($__internal_1c7666a1f2827225f0646be991a85ccad237253123f6e3f8297103980ac96418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_1c7666a1f2827225f0646be991a85ccad237253123f6e3f8297103980ac96418->leave($__internal_1c7666a1f2827225f0646be991a85ccad237253123f6e3f8297103980ac96418_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_429e211c474d4f67df751838606a8ecb9a5eeccad3dcd3a99573ce08946e76bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429e211c474d4f67df751838606a8ecb9a5eeccad3dcd3a99573ce08946e76bf->enter($__internal_429e211c474d4f67df751838606a8ecb9a5eeccad3dcd3a99573ce08946e76bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_429e211c474d4f67df751838606a8ecb9a5eeccad3dcd3a99573ce08946e76bf->leave($__internal_429e211c474d4f67df751838606a8ecb9a5eeccad3dcd3a99573ce08946e76bf_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4243678a6acbcbf89f4057eb24836a9c2671ebddfcd487000459f1eaaf38f977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4243678a6acbcbf89f4057eb24836a9c2671ebddfcd487000459f1eaaf38f977->enter($__internal_4243678a6acbcbf89f4057eb24836a9c2671ebddfcd487000459f1eaaf38f977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_4243678a6acbcbf89f4057eb24836a9c2671ebddfcd487000459f1eaaf38f977->leave($__internal_4243678a6acbcbf89f4057eb24836a9c2671ebddfcd487000459f1eaaf38f977_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_17a619b212750d70e64265a9d27036ce012a3eb1191c8970b9f89494ecce39da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a619b212750d70e64265a9d27036ce012a3eb1191c8970b9f89494ecce39da->enter($__internal_17a619b212750d70e64265a9d27036ce012a3eb1191c8970b9f89494ecce39da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 99
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 100
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 104
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 106
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 107
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 108
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>";
        }
        
        $__internal_17a619b212750d70e64265a9d27036ce012a3eb1191c8970b9f89494ecce39da->leave($__internal_17a619b212750d70e64265a9d27036ce012a3eb1191c8970b9f89494ecce39da_prof);

    }

    // line 115
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_593b4915306ee293a85077d5a4678a3262362c3cba4030f1e6c9d44a56036bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593b4915306ee293a85077d5a4678a3262362c3cba4030f1e6c9d44a56036bb5->enter($__internal_593b4915306ee293a85077d5a4678a3262362c3cba4030f1e6c9d44a56036bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 116
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 117
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 120
            echo "<div class=\"checkbox\">";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 122
            echo "</div>";
        }
        
        $__internal_593b4915306ee293a85077d5a4678a3262362c3cba4030f1e6c9d44a56036bb5->leave($__internal_593b4915306ee293a85077d5a4678a3262362c3cba4030f1e6c9d44a56036bb5_prof);

    }

    // line 126
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_48c0835c362af70394303f77c7ef37b0317a7761a0736712fd6f148027e08885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c0835c362af70394303f77c7ef37b0317a7761a0736712fd6f148027e08885->enter($__internal_48c0835c362af70394303f77c7ef37b0317a7761a0736712fd6f148027e08885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 127
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 128
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 131
            echo "<div class=\"radio\">";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 133
            echo "</div>";
        }
        
        $__internal_48c0835c362af70394303f77c7ef37b0317a7761a0736712fd6f148027e08885->leave($__internal_48c0835c362af70394303f77c7ef37b0317a7761a0736712fd6f148027e08885_prof);

    }

    // line 139
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1ce653a05537c2292e2f384742ba1d4e7a7aec1e17251925a5f17b4f502388d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce653a05537c2292e2f384742ba1d4e7a7aec1e17251925a5f17b4f502388d2->enter($__internal_1ce653a05537c2292e2f384742ba1d4e7a7aec1e17251925a5f17b4f502388d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 140
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 141
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1ce653a05537c2292e2f384742ba1d4e7a7aec1e17251925a5f17b4f502388d2->leave($__internal_1ce653a05537c2292e2f384742ba1d4e7a7aec1e17251925a5f17b4f502388d2_prof);

    }

    // line 144
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_01e362283b59af81247cdd7d692dc2ba1dde47903605e5aee55afead08236db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e362283b59af81247cdd7d692dc2ba1dde47903605e5aee55afead08236db7->enter($__internal_01e362283b59af81247cdd7d692dc2ba1dde47903605e5aee55afead08236db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 146
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 147
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_01e362283b59af81247cdd7d692dc2ba1dde47903605e5aee55afead08236db7->leave($__internal_01e362283b59af81247cdd7d692dc2ba1dde47903605e5aee55afead08236db7_prof);

    }

    // line 150
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_f0a552c846af66c0d6b6530a2fd4d1af8d92eba46d517404aa0a042fa3a1f0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a552c846af66c0d6b6530a2fd4d1af8d92eba46d517404aa0a042fa3a1f0a3->enter($__internal_f0a552c846af66c0d6b6530a2fd4d1af8d92eba46d517404aa0a042fa3a1f0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 151
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f0a552c846af66c0d6b6530a2fd4d1af8d92eba46d517404aa0a042fa3a1f0a3->leave($__internal_f0a552c846af66c0d6b6530a2fd4d1af8d92eba46d517404aa0a042fa3a1f0a3_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_56e2124f100ad821b1a8f5d5d3c423764eadb51a26c3648b64b07b9da5a69040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e2124f100ad821b1a8f5d5d3c423764eadb51a26c3648b64b07b9da5a69040->enter($__internal_56e2124f100ad821b1a8f5d5d3c423764eadb51a26c3648b64b07b9da5a69040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_56e2124f100ad821b1a8f5d5d3c423764eadb51a26c3648b64b07b9da5a69040->leave($__internal_56e2124f100ad821b1a8f5d5d3c423764eadb51a26c3648b64b07b9da5a69040_prof);

    }

    // line 162
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8bf68f5cbac78529473e3268a5e3697a8dae52d1554a5b6826be6566e31eaab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf68f5cbac78529473e3268a5e3697a8dae52d1554a5b6826be6566e31eaab2->enter($__internal_8bf68f5cbac78529473e3268a5e3697a8dae52d1554a5b6826be6566e31eaab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 163
        echo "    ";
        // line 164
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 165
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 166
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 167
                echo "        ";
            }
            // line 168
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 169
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 170
                echo "        ";
            }
            // line 171
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 172
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 173
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 174
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 175
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 178
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 181
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 182
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 183
            echo "</label>
    ";
        }
        
        $__internal_8bf68f5cbac78529473e3268a5e3697a8dae52d1554a5b6826be6566e31eaab2->leave($__internal_8bf68f5cbac78529473e3268a5e3697a8dae52d1554a5b6826be6566e31eaab2_prof);

    }

    // line 189
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dba52b23b916c706a837344031685100e5a26ce1e304c77aab0b6b46012dbf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba52b23b916c706a837344031685100e5a26ce1e304c77aab0b6b46012dbf2a->enter($__internal_dba52b23b916c706a837344031685100e5a26ce1e304c77aab0b6b46012dbf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 190
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 194
        echo "</div>";
        
        $__internal_dba52b23b916c706a837344031685100e5a26ce1e304c77aab0b6b46012dbf2a->leave($__internal_dba52b23b916c706a837344031685100e5a26ce1e304c77aab0b6b46012dbf2a_prof);

    }

    // line 197
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d76c5c69b7815fc9bd01a3a266468e6c238851826f3ef98cc71d4c0b441a5738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76c5c69b7815fc9bd01a3a266468e6c238851826f3ef98cc71d4c0b441a5738->enter($__internal_d76c5c69b7815fc9bd01a3a266468e6c238851826f3ef98cc71d4c0b441a5738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 198
        echo "<div class=\"form-group\">";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 200
        echo "</div>";
        
        $__internal_d76c5c69b7815fc9bd01a3a266468e6c238851826f3ef98cc71d4c0b441a5738->leave($__internal_d76c5c69b7815fc9bd01a3a266468e6c238851826f3ef98cc71d4c0b441a5738_prof);

    }

    // line 203
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_23bc9b96f766fb8d4ac1038e7659e28faca39484b29632771d829d8fc16f227e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bc9b96f766fb8d4ac1038e7659e28faca39484b29632771d829d8fc16f227e->enter($__internal_23bc9b96f766fb8d4ac1038e7659e28faca39484b29632771d829d8fc16f227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 204
        $context["force_error"] = true;
        // line 205
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23bc9b96f766fb8d4ac1038e7659e28faca39484b29632771d829d8fc16f227e->leave($__internal_23bc9b96f766fb8d4ac1038e7659e28faca39484b29632771d829d8fc16f227e_prof);

    }

    // line 208
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_974733ae8706b2aae2a362a3edd2938219a13f7c58d2fd4b5362a14968fa67af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974733ae8706b2aae2a362a3edd2938219a13f7c58d2fd4b5362a14968fa67af->enter($__internal_974733ae8706b2aae2a362a3edd2938219a13f7c58d2fd4b5362a14968fa67af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 209
        $context["force_error"] = true;
        // line 210
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_974733ae8706b2aae2a362a3edd2938219a13f7c58d2fd4b5362a14968fa67af->leave($__internal_974733ae8706b2aae2a362a3edd2938219a13f7c58d2fd4b5362a14968fa67af_prof);

    }

    // line 213
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_65cb7c1bf2aeb3cf4fb5564068fd3ab8593ef628ff528a4a70201693645ad2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cb7c1bf2aeb3cf4fb5564068fd3ab8593ef628ff528a4a70201693645ad2ea->enter($__internal_65cb7c1bf2aeb3cf4fb5564068fd3ab8593ef628ff528a4a70201693645ad2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 214
        $context["force_error"] = true;
        // line 215
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_65cb7c1bf2aeb3cf4fb5564068fd3ab8593ef628ff528a4a70201693645ad2ea->leave($__internal_65cb7c1bf2aeb3cf4fb5564068fd3ab8593ef628ff528a4a70201693645ad2ea_prof);

    }

    // line 218
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ee8aa18f9d2ac6a495f180c38f4225b7aae93fdaa565d1243c156bf3ef36a3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8aa18f9d2ac6a495f180c38f4225b7aae93fdaa565d1243c156bf3ef36a3e2->enter($__internal_ee8aa18f9d2ac6a495f180c38f4225b7aae93fdaa565d1243c156bf3ef36a3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ee8aa18f9d2ac6a495f180c38f4225b7aae93fdaa565d1243c156bf3ef36a3e2->leave($__internal_ee8aa18f9d2ac6a495f180c38f4225b7aae93fdaa565d1243c156bf3ef36a3e2_prof);

    }

    // line 223
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9205b25956f54e312d5d487d42bb2b9477024382a5ddf1c560778c1c9696ac21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9205b25956f54e312d5d487d42bb2b9477024382a5ddf1c560778c1c9696ac21->enter($__internal_9205b25956f54e312d5d487d42bb2b9477024382a5ddf1c560778c1c9696ac21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 224
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 227
        echo "</div>";
        
        $__internal_9205b25956f54e312d5d487d42bb2b9477024382a5ddf1c560778c1c9696ac21->leave($__internal_9205b25956f54e312d5d487d42bb2b9477024382a5ddf1c560778c1c9696ac21_prof);

    }

    // line 230
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c3d1369c4efafbf26772f47384540a59d22b5da7908c91760b191358cca10ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d1369c4efafbf26772f47384540a59d22b5da7908c91760b191358cca10ca7->enter($__internal_c3d1369c4efafbf26772f47384540a59d22b5da7908c91760b191358cca10ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 231
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 234
        echo "</div>";
        
        $__internal_c3d1369c4efafbf26772f47384540a59d22b5da7908c91760b191358cca10ca7->leave($__internal_c3d1369c4efafbf26772f47384540a59d22b5da7908c91760b191358cca10ca7_prof);

    }

    // line 239
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_73538c314521d6bfb87f71873b50e49e49528986bb6f58f5b98a1f7e66345511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73538c314521d6bfb87f71873b50e49e49528986bb6f58f5b98a1f7e66345511->enter($__internal_73538c314521d6bfb87f71873b50e49e49528986bb6f58f5b98a1f7e66345511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 240
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 241
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isRootForm(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 242
            echo "    <ul class=\"list-unstyled\">";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 244
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "</ul>
    ";
            // line 247
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isRootForm(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_73538c314521d6bfb87f71873b50e49e49528986bb6f58f5b98a1f7e66345511->leave($__internal_73538c314521d6bfb87f71873b50e49e49528986bb6f58f5b98a1f7e66345511_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  841 => 247,  838 => 246,  830 => 244,  826 => 243,  824 => 242,  818 => 241,  816 => 240,  810 => 239,  803 => 234,  801 => 233,  799 => 232,  793 => 231,  787 => 230,  780 => 227,  778 => 226,  776 => 225,  770 => 224,  764 => 223,  757 => 220,  755 => 219,  749 => 218,  742 => 215,  740 => 214,  734 => 213,  727 => 210,  725 => 209,  719 => 208,  712 => 205,  710 => 204,  704 => 203,  697 => 200,  695 => 199,  693 => 198,  687 => 197,  680 => 194,  678 => 193,  676 => 192,  674 => 191,  668 => 190,  662 => 189,  653 => 183,  649 => 182,  634 => 181,  630 => 178,  627 => 175,  626 => 174,  625 => 173,  623 => 172,  620 => 171,  617 => 170,  614 => 169,  611 => 168,  608 => 167,  605 => 166,  602 => 165,  599 => 164,  597 => 163,  591 => 162,  584 => 159,  582 => 157,  576 => 156,  569 => 153,  567 => 151,  561 => 150,  554 => 147,  552 => 146,  546 => 144,  539 => 141,  537 => 140,  531 => 139,  523 => 133,  521 => 132,  519 => 131,  516 => 129,  514 => 128,  512 => 127,  506 => 126,  498 => 122,  496 => 121,  494 => 120,  491 => 118,  489 => 117,  487 => 116,  481 => 115,  473 => 111,  467 => 108,  466 => 107,  465 => 106,  461 => 105,  457 => 104,  450 => 100,  449 => 99,  448 => 98,  444 => 97,  442 => 96,  436 => 95,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 239,  197 => 238,  194 => 236,  192 => 230,  189 => 229,  187 => 223,  184 => 222,  182 => 218,  179 => 217,  177 => 213,  174 => 212,  172 => 208,  169 => 207,  167 => 203,  164 => 202,  162 => 197,  159 => 196,  157 => 189,  154 => 188,  151 => 186,  149 => 162,  146 => 161,  144 => 156,  141 => 155,  139 => 150,  136 => 149,  134 => 144,  131 => 143,  129 => 139,  126 => 138,  123 => 136,  121 => 126,  118 => 125,  116 => 115,  113 => 114,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
