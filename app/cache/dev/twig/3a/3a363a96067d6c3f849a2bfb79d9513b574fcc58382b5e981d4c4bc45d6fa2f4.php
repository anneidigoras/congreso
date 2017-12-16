<?php

/* form_div_layout.html.twig */
class __TwigTemplate_6af55bada4df80064f96f62784484f9269f3c243a07ececcf20e22672c05462d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ba522f982cf678e852b8ee566095e85cce1a051c5dad06240d885eeaf15a767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba522f982cf678e852b8ee566095e85cce1a051c5dad06240d885eeaf15a767->enter($__internal_1ba522f982cf678e852b8ee566095e85cce1a051c5dad06240d885eeaf15a767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('range_widget', $context, $blocks);
        // line 183
        $this->displayBlock('button_widget', $context, $blocks);
        // line 197
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 202
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 231
        $this->displayBlock('button_label', $context, $blocks);
        // line 235
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 243
        $this->displayBlock('form_row', $context, $blocks);
        // line 251
        $this->displayBlock('button_row', $context, $blocks);
        // line 257
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 263
        $this->displayBlock('form', $context, $blocks);
        // line 269
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
        // line 290
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 294
        $this->displayBlock('form_errors', $context, $blocks);
        // line 304
        $this->displayBlock('form_rest', $context, $blocks);
        // line 325
        echo "
";
        // line 328
        $this->displayBlock('form_rows', $context, $blocks);
        // line 334
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 351
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 365
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 379
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_1ba522f982cf678e852b8ee566095e85cce1a051c5dad06240d885eeaf15a767->leave($__internal_1ba522f982cf678e852b8ee566095e85cce1a051c5dad06240d885eeaf15a767_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_6b548c5be153c030cdbe3b6b5dcb7826e2662bd0984f713c2158909ac8a1c5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b548c5be153c030cdbe3b6b5dcb7826e2662bd0984f713c2158909ac8a1c5a1->enter($__internal_6b548c5be153c030cdbe3b6b5dcb7826e2662bd0984f713c2158909ac8a1c5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6b548c5be153c030cdbe3b6b5dcb7826e2662bd0984f713c2158909ac8a1c5a1->leave($__internal_6b548c5be153c030cdbe3b6b5dcb7826e2662bd0984f713c2158909ac8a1c5a1_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_512212a4a1f37746a33ac6e4198cb57ed8cd9fb4c753b3351e09114b30258934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512212a4a1f37746a33ac6e4198cb57ed8cd9fb4c753b3351e09114b30258934->enter($__internal_512212a4a1f37746a33ac6e4198cb57ed8cd9fb4c753b3351e09114b30258934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_512212a4a1f37746a33ac6e4198cb57ed8cd9fb4c753b3351e09114b30258934->leave($__internal_512212a4a1f37746a33ac6e4198cb57ed8cd9fb4c753b3351e09114b30258934_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bd11d704633f0a1713a1c28eec0ba25cf578e646eea1fd321a4089461bd01e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd11d704633f0a1713a1c28eec0ba25cf578e646eea1fd321a4089461bd01e28->enter($__internal_bd11d704633f0a1713a1c28eec0ba25cf578e646eea1fd321a4089461bd01e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isRootForm(($context["form"] ?? $this->getContext($context, "form")))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_bd11d704633f0a1713a1c28eec0ba25cf578e646eea1fd321a4089461bd01e28->leave($__internal_bd11d704633f0a1713a1c28eec0ba25cf578e646eea1fd321a4089461bd01e28_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_3d0d8391665b8cedc893b0460b4c2663be21e8783f2e10f1d5546c8fe703ac6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0d8391665b8cedc893b0460b4c2663be21e8783f2e10f1d5546c8fe703ac6d->enter($__internal_3d0d8391665b8cedc893b0460b4c2663be21e8783f2e10f1d5546c8fe703ac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_3d0d8391665b8cedc893b0460b4c2663be21e8783f2e10f1d5546c8fe703ac6d->leave($__internal_3d0d8391665b8cedc893b0460b4c2663be21e8783f2e10f1d5546c8fe703ac6d_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_818ffd83b034030127e4ff49d037a2034b76e049cd70a8fcca295becce1acf78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818ffd83b034030127e4ff49d037a2034b76e049cd70a8fcca295becce1acf78->enter($__internal_818ffd83b034030127e4ff49d037a2034b76e049cd70a8fcca295becce1acf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_818ffd83b034030127e4ff49d037a2034b76e049cd70a8fcca295becce1acf78->leave($__internal_818ffd83b034030127e4ff49d037a2034b76e049cd70a8fcca295becce1acf78_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_cb266891b43964249a487c8c9e720a620768ea546172e193d6b0fbd5361d7170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb266891b43964249a487c8c9e720a620768ea546172e193d6b0fbd5361d7170->enter($__internal_cb266891b43964249a487c8c9e720a620768ea546172e193d6b0fbd5361d7170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_cb266891b43964249a487c8c9e720a620768ea546172e193d6b0fbd5361d7170->leave($__internal_cb266891b43964249a487c8c9e720a620768ea546172e193d6b0fbd5361d7170_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a235d60c2d105505ef5366dbe821355a3fa6b2a4350158b5a316e796be3c7c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a235d60c2d105505ef5366dbe821355a3fa6b2a4350158b5a316e796be3c7c4c->enter($__internal_a235d60c2d105505ef5366dbe821355a3fa6b2a4350158b5a316e796be3c7c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_a235d60c2d105505ef5366dbe821355a3fa6b2a4350158b5a316e796be3c7c4c->leave($__internal_a235d60c2d105505ef5366dbe821355a3fa6b2a4350158b5a316e796be3c7c4c_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_af53b79e4518e8736744d6b43e8d6a3f7906cfaa6079954220a573a800cb76c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af53b79e4518e8736744d6b43e8d6a3f7906cfaa6079954220a573a800cb76c6->enter($__internal_af53b79e4518e8736744d6b43e8d6a3f7906cfaa6079954220a573a800cb76c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_af53b79e4518e8736744d6b43e8d6a3f7906cfaa6079954220a573a800cb76c6->leave($__internal_af53b79e4518e8736744d6b43e8d6a3f7906cfaa6079954220a573a800cb76c6_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_c4d22b3d328703c17dd311159353c5d639f132c567912f051f36b006469372b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d22b3d328703c17dd311159353c5d639f132c567912f051f36b006469372b2->enter($__internal_c4d22b3d328703c17dd311159353c5d639f132c567912f051f36b006469372b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c4d22b3d328703c17dd311159353c5d639f132c567912f051f36b006469372b2->leave($__internal_c4d22b3d328703c17dd311159353c5d639f132c567912f051f36b006469372b2_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_580cda8be536028af89b0cedf91b399b828a95a4d3f606ecc5984d98645deeaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580cda8be536028af89b0cedf91b399b828a95a4d3f606ecc5984d98645deeaf->enter($__internal_580cda8be536028af89b0cedf91b399b828a95a4d3f606ecc5984d98645deeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_580cda8be536028af89b0cedf91b399b828a95a4d3f606ecc5984d98645deeaf->leave($__internal_580cda8be536028af89b0cedf91b399b828a95a4d3f606ecc5984d98645deeaf_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_734ac1873b6d6a4d65f9d79febea0cc533ef10417b7aa919a798690a1a6c0a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734ac1873b6d6a4d65f9d79febea0cc533ef10417b7aa919a798690a1a6c0a50->enter($__internal_734ac1873b6d6a4d65f9d79febea0cc533ef10417b7aa919a798690a1a6c0a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_734ac1873b6d6a4d65f9d79febea0cc533ef10417b7aa919a798690a1a6c0a50->leave($__internal_734ac1873b6d6a4d65f9d79febea0cc533ef10417b7aa919a798690a1a6c0a50_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fa725aff8ac9e30c4ab2739beb134d8b9d61eb86bf073b2aaba6ec474347aea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa725aff8ac9e30c4ab2739beb134d8b9d61eb86bf073b2aaba6ec474347aea4->enter($__internal_fa725aff8ac9e30c4ab2739beb134d8b9d61eb86bf073b2aaba6ec474347aea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_fa725aff8ac9e30c4ab2739beb134d8b9d61eb86bf073b2aaba6ec474347aea4->leave($__internal_fa725aff8ac9e30c4ab2739beb134d8b9d61eb86bf073b2aaba6ec474347aea4_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_066f32b30a9341b0b237a805192e9bb60e517f26a674b4243b1e6f9baa0ea11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066f32b30a9341b0b237a805192e9bb60e517f26a674b4243b1e6f9baa0ea11a->enter($__internal_066f32b30a9341b0b237a805192e9bb60e517f26a674b4243b1e6f9baa0ea11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_066f32b30a9341b0b237a805192e9bb60e517f26a674b4243b1e6f9baa0ea11a->leave($__internal_066f32b30a9341b0b237a805192e9bb60e517f26a674b4243b1e6f9baa0ea11a_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_e35742fe26964c7445968452a852c82637acceed68d1b0a09963cabad54f35d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35742fe26964c7445968452a852c82637acceed68d1b0a09963cabad54f35d5->enter($__internal_e35742fe26964c7445968452a852c82637acceed68d1b0a09963cabad54f35d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_e35742fe26964c7445968452a852c82637acceed68d1b0a09963cabad54f35d5->leave($__internal_e35742fe26964c7445968452a852c82637acceed68d1b0a09963cabad54f35d5_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_5e27b7a1f34e153771d0ee04a40416907b90be7d84e44c39258578563223a024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e27b7a1f34e153771d0ee04a40416907b90be7d84e44c39258578563223a024->enter($__internal_5e27b7a1f34e153771d0ee04a40416907b90be7d84e44c39258578563223a024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5e27b7a1f34e153771d0ee04a40416907b90be7d84e44c39258578563223a024->leave($__internal_5e27b7a1f34e153771d0ee04a40416907b90be7d84e44c39258578563223a024_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_62732924bfc325d630d017abacab20c6998d3a994cb02c9d9cd5bf8b4f714208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62732924bfc325d630d017abacab20c6998d3a994cb02c9d9cd5bf8b4f714208->enter($__internal_62732924bfc325d630d017abacab20c6998d3a994cb02c9d9cd5bf8b4f714208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_62732924bfc325d630d017abacab20c6998d3a994cb02c9d9cd5bf8b4f714208->leave($__internal_62732924bfc325d630d017abacab20c6998d3a994cb02c9d9cd5bf8b4f714208_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d24ac0bd23fcdf52f7810140d29bd6b91584e6904b7b40b973b01515531dffa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24ac0bd23fcdf52f7810140d29bd6b91584e6904b7b40b973b01515531dffa1->enter($__internal_d24ac0bd23fcdf52f7810140d29bd6b91584e6904b7b40b973b01515531dffa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_d24ac0bd23fcdf52f7810140d29bd6b91584e6904b7b40b973b01515531dffa1->leave($__internal_d24ac0bd23fcdf52f7810140d29bd6b91584e6904b7b40b973b01515531dffa1_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_ca5351dd3c68ef3610f64f9c2a2825bd9b1a033ccd97e7b3cfa0055f1e6da61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5351dd3c68ef3610f64f9c2a2825bd9b1a033ccd97e7b3cfa0055f1e6da61a->enter($__internal_ca5351dd3c68ef3610f64f9c2a2825bd9b1a033ccd97e7b3cfa0055f1e6da61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ca5351dd3c68ef3610f64f9c2a2825bd9b1a033ccd97e7b3cfa0055f1e6da61a->leave($__internal_ca5351dd3c68ef3610f64f9c2a2825bd9b1a033ccd97e7b3cfa0055f1e6da61a_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_c15c718ee4f7b627947efa0c28cc69eb4a7d547ac087111ab15fb3a4b9fcb9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15c718ee4f7b627947efa0c28cc69eb4a7d547ac087111ab15fb3a4b9fcb9b0->enter($__internal_c15c718ee4f7b627947efa0c28cc69eb4a7d547ac087111ab15fb3a4b9fcb9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c15c718ee4f7b627947efa0c28cc69eb4a7d547ac087111ab15fb3a4b9fcb9b0->leave($__internal_c15c718ee4f7b627947efa0c28cc69eb4a7d547ac087111ab15fb3a4b9fcb9b0_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fe4ffae648cc3e0e03e1a43dffdb44e78e77ad57e20f2ff49d94344db2028192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4ffae648cc3e0e03e1a43dffdb44e78e77ad57e20f2ff49d94344db2028192->enter($__internal_fe4ffae648cc3e0e03e1a43dffdb44e78e77ad57e20f2ff49d94344db2028192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_fe4ffae648cc3e0e03e1a43dffdb44e78e77ad57e20f2ff49d94344db2028192->leave($__internal_fe4ffae648cc3e0e03e1a43dffdb44e78e77ad57e20f2ff49d94344db2028192_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_5046d833b9246dd20605ba4ed0a5bb24da5b85399c7ae2b8a99155b96c49d0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5046d833b9246dd20605ba4ed0a5bb24da5b85399c7ae2b8a99155b96c49d0a2->enter($__internal_5046d833b9246dd20605ba4ed0a5bb24da5b85399c7ae2b8a99155b96c49d0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5046d833b9246dd20605ba4ed0a5bb24da5b85399c7ae2b8a99155b96c49d0a2->leave($__internal_5046d833b9246dd20605ba4ed0a5bb24da5b85399c7ae2b8a99155b96c49d0a2_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_2fdf2027d5725a14d5bbe0ed360947524b073ab1a77bd6ed5ba2aa852d18a432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdf2027d5725a14d5bbe0ed360947524b073ab1a77bd6ed5ba2aa852d18a432->enter($__internal_2fdf2027d5725a14d5bbe0ed360947524b073ab1a77bd6ed5ba2aa852d18a432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2fdf2027d5725a14d5bbe0ed360947524b073ab1a77bd6ed5ba2aa852d18a432->leave($__internal_2fdf2027d5725a14d5bbe0ed360947524b073ab1a77bd6ed5ba2aa852d18a432_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_511fe23404675a5b113a49783a659a54c6c01dc6d629d556ac3d662e31c2bd53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511fe23404675a5b113a49783a659a54c6c01dc6d629d556ac3d662e31c2bd53->enter($__internal_511fe23404675a5b113a49783a659a54c6c01dc6d629d556ac3d662e31c2bd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_511fe23404675a5b113a49783a659a54c6c01dc6d629d556ac3d662e31c2bd53->leave($__internal_511fe23404675a5b113a49783a659a54c6c01dc6d629d556ac3d662e31c2bd53_prof);

    }

    // line 178
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_07874fca3229e8ae6938faa4cc1092f184c39751086cd3d322c0bf9473beea47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07874fca3229e8ae6938faa4cc1092f184c39751086cd3d322c0bf9473beea47->enter($__internal_07874fca3229e8ae6938faa4cc1092f184c39751086cd3d322c0bf9473beea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "range")) : ("range"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_07874fca3229e8ae6938faa4cc1092f184c39751086cd3d322c0bf9473beea47->leave($__internal_07874fca3229e8ae6938faa4cc1092f184c39751086cd3d322c0bf9473beea47_prof);

    }

    // line 183
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_30ae305ad36ec6c07619176a750af46ca51d219e1d40b0ff75b22cb7332601f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ae305ad36ec6c07619176a750af46ca51d219e1d40b0ff75b22cb7332601f6->enter($__internal_30ae305ad36ec6c07619176a750af46ca51d219e1d40b0ff75b22cb7332601f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 184
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 185
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 186
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 187
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 188
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 191
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 194
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_30ae305ad36ec6c07619176a750af46ca51d219e1d40b0ff75b22cb7332601f6->leave($__internal_30ae305ad36ec6c07619176a750af46ca51d219e1d40b0ff75b22cb7332601f6_prof);

    }

    // line 197
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_babc14ea074162e4d237a596a8011a0a31b78b9f3b37140ea4a9a10b5f4bb645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babc14ea074162e4d237a596a8011a0a31b78b9f3b37140ea4a9a10b5f4bb645->enter($__internal_babc14ea074162e4d237a596a8011a0a31b78b9f3b37140ea4a9a10b5f4bb645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_babc14ea074162e4d237a596a8011a0a31b78b9f3b37140ea4a9a10b5f4bb645->leave($__internal_babc14ea074162e4d237a596a8011a0a31b78b9f3b37140ea4a9a10b5f4bb645_prof);

    }

    // line 202
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_7ef17d936aa3f81cf43b11ca48c747acb455626e582ae0102c34bcd9f88d5052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef17d936aa3f81cf43b11ca48c747acb455626e582ae0102c34bcd9f88d5052->enter($__internal_7ef17d936aa3f81cf43b11ca48c747acb455626e582ae0102c34bcd9f88d5052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 203
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 204
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_7ef17d936aa3f81cf43b11ca48c747acb455626e582ae0102c34bcd9f88d5052->leave($__internal_7ef17d936aa3f81cf43b11ca48c747acb455626e582ae0102c34bcd9f88d5052_prof);

    }

    // line 209
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2a1a082441d634cda6ce61ebfbae7cc373ac5c41ffafbfe6efd9ae275450f559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1a082441d634cda6ce61ebfbae7cc373ac5c41ffafbfe6efd9ae275450f559->enter($__internal_2a1a082441d634cda6ce61ebfbae7cc373ac5c41ffafbfe6efd9ae275450f559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 211
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 212
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 214
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 215
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 217
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 218
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 219
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 220
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 221
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 224
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 227
            echo "<label";
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
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_2a1a082441d634cda6ce61ebfbae7cc373ac5c41ffafbfe6efd9ae275450f559->leave($__internal_2a1a082441d634cda6ce61ebfbae7cc373ac5c41ffafbfe6efd9ae275450f559_prof);

    }

    // line 231
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_7ba7d431fc014d90d5c60e68b4c56182f29e7428c036da194213778eeb2224de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba7d431fc014d90d5c60e68b4c56182f29e7428c036da194213778eeb2224de->enter($__internal_7ba7d431fc014d90d5c60e68b4c56182f29e7428c036da194213778eeb2224de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_7ba7d431fc014d90d5c60e68b4c56182f29e7428c036da194213778eeb2224de->leave($__internal_7ba7d431fc014d90d5c60e68b4c56182f29e7428c036da194213778eeb2224de_prof);

    }

    // line 235
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_7de98db4ee5917644b205e04ce4b9a02a1bd4538980de9930233a60cd8ff1851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de98db4ee5917644b205e04ce4b9a02a1bd4538980de9930233a60cd8ff1851->enter($__internal_7de98db4ee5917644b205e04ce4b9a02a1bd4538980de9930233a60cd8ff1851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 240
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_7de98db4ee5917644b205e04ce4b9a02a1bd4538980de9930233a60cd8ff1851->leave($__internal_7de98db4ee5917644b205e04ce4b9a02a1bd4538980de9930233a60cd8ff1851_prof);

    }

    // line 243
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c4b9512477968e549a8208502aadc455f4447ab6f0d6675e9eddd60eef45fd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b9512477968e549a8208502aadc455f4447ab6f0d6675e9eddd60eef45fd22->enter($__internal_c4b9512477968e549a8208502aadc455f4447ab6f0d6675e9eddd60eef45fd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 244
        echo "<div>";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo "</div>";
        
        $__internal_c4b9512477968e549a8208502aadc455f4447ab6f0d6675e9eddd60eef45fd22->leave($__internal_c4b9512477968e549a8208502aadc455f4447ab6f0d6675e9eddd60eef45fd22_prof);

    }

    // line 251
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4e8370dacb5208ae7b2cf9b7c590ead5fd6c6a8f566ffc7d5d8572d91ae0ccf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8370dacb5208ae7b2cf9b7c590ead5fd6c6a8f566ffc7d5d8572d91ae0ccf9->enter($__internal_4e8370dacb5208ae7b2cf9b7c590ead5fd6c6a8f566ffc7d5d8572d91ae0ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 252
        echo "<div>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 254
        echo "</div>";
        
        $__internal_4e8370dacb5208ae7b2cf9b7c590ead5fd6c6a8f566ffc7d5d8572d91ae0ccf9->leave($__internal_4e8370dacb5208ae7b2cf9b7c590ead5fd6c6a8f566ffc7d5d8572d91ae0ccf9_prof);

    }

    // line 257
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c852679f072e6ac512e1e26b05ce033c25c782d98330417efc1998cf7375f3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c852679f072e6ac512e1e26b05ce033c25c782d98330417efc1998cf7375f3dc->enter($__internal_c852679f072e6ac512e1e26b05ce033c25c782d98330417efc1998cf7375f3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_c852679f072e6ac512e1e26b05ce033c25c782d98330417efc1998cf7375f3dc->leave($__internal_c852679f072e6ac512e1e26b05ce033c25c782d98330417efc1998cf7375f3dc_prof);

    }

    // line 263
    public function block_form($context, array $blocks = array())
    {
        $__internal_4e4e3537e671ddc7a0ad92e0e4b0c6a28517e17a129f43f5773bd6af94fcdc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4e3537e671ddc7a0ad92e0e4b0c6a28517e17a129f43f5773bd6af94fcdc1e->enter($__internal_4e4e3537e671ddc7a0ad92e0e4b0c6a28517e17a129f43f5773bd6af94fcdc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 264
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 266
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_4e4e3537e671ddc7a0ad92e0e4b0c6a28517e17a129f43f5773bd6af94fcdc1e->leave($__internal_4e4e3537e671ddc7a0ad92e0e4b0c6a28517e17a129f43f5773bd6af94fcdc1e_prof);

    }

    // line 269
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1687d03fc25098e340078d6b816170031591e0146b5b44c5a2dc89ce896913a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1687d03fc25098e340078d6b816170031591e0146b5b44c5a2dc89ce896913a5->enter($__internal_1687d03fc25098e340078d6b816170031591e0146b5b44c5a2dc89ce896913a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 270
        $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
        // line 271
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 272
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_1687d03fc25098e340078d6b816170031591e0146b5b44c5a2dc89ce896913a5->leave($__internal_1687d03fc25098e340078d6b816170031591e0146b5b44c5a2dc89ce896913a5_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_4ce674015ba216693d46fb865a9835f1c9e97f3d8bf12f27f294bde351cdd93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce674015ba216693d46fb865a9835f1c9e97f3d8bf12f27f294bde351cdd93a->enter($__internal_4ce674015ba216693d46fb865a9835f1c9e97f3d8bf12f27f294bde351cdd93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 285
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_4ce674015ba216693d46fb865a9835f1c9e97f3d8bf12f27f294bde351cdd93a->leave($__internal_4ce674015ba216693d46fb865a9835f1c9e97f3d8bf12f27f294bde351cdd93a_prof);

    }

    // line 290
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_60264b6624874b4b4821fdb77d67349e74cf7f6879020e848baaa65d30e45d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60264b6624874b4b4821fdb77d67349e74cf7f6879020e848baaa65d30e45d03->enter($__internal_60264b6624874b4b4821fdb77d67349e74cf7f6879020e848baaa65d30e45d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 291
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_60264b6624874b4b4821fdb77d67349e74cf7f6879020e848baaa65d30e45d03->leave($__internal_60264b6624874b4b4821fdb77d67349e74cf7f6879020e848baaa65d30e45d03_prof);

    }

    // line 294
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a762f7787805971c9728f73135d9fbf4733604b1af728758221370bb95e7ed96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a762f7787805971c9728f73135d9fbf4733604b1af728758221370bb95e7ed96->enter($__internal_a762f7787805971c9728f73135d9fbf4733604b1af728758221370bb95e7ed96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 295
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 296
            echo "<ul>";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 298
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "</ul>";
        }
        
        $__internal_a762f7787805971c9728f73135d9fbf4733604b1af728758221370bb95e7ed96->leave($__internal_a762f7787805971c9728f73135d9fbf4733604b1af728758221370bb95e7ed96_prof);

    }

    // line 304
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_2c0968194de237b218e2fea1860d70042298fdb45f6f66020c926962c9e35040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0968194de237b218e2fea1860d70042298fdb45f6f66020c926962c9e35040->enter($__internal_2c0968194de237b218e2fea1860d70042298fdb45f6f66020c926962c9e35040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 306
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 307
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        if (( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "methodRendered", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isRootForm(($context["form"] ?? $this->getContext($context, "form"))))) {
            // line 312
            $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
            // line 313
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
            // line 314
            if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
                // line 315
                $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
            } else {
                // line 317
                $context["form_method"] = "POST";
            }
            // line 320
            if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
                // line 321
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_2c0968194de237b218e2fea1860d70042298fdb45f6f66020c926962c9e35040->leave($__internal_2c0968194de237b218e2fea1860d70042298fdb45f6f66020c926962c9e35040_prof);

    }

    // line 328
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_8ff6fadfb4bf7f3d6e827e79385791e0a113820d0bfba3451432ac21ed23c84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff6fadfb4bf7f3d6e827e79385791e0a113820d0bfba3451432ac21ed23c84c->enter($__internal_8ff6fadfb4bf7f3d6e827e79385791e0a113820d0bfba3451432ac21ed23c84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 330
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8ff6fadfb4bf7f3d6e827e79385791e0a113820d0bfba3451432ac21ed23c84c->leave($__internal_8ff6fadfb4bf7f3d6e827e79385791e0a113820d0bfba3451432ac21ed23c84c_prof);

    }

    // line 334
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_f3ba932dc21e3fbe07a2f06d167236161dfa0b37c35497b378d90a28b3dcf22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ba932dc21e3fbe07a2f06d167236161dfa0b37c35497b378d90a28b3dcf22e->enter($__internal_f3ba932dc21e3fbe07a2f06d167236161dfa0b37c35497b378d90a28b3dcf22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 335
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 336
        if (($context["read_only"] ?? $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 337
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 338
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !($context["read_only"] ?? $this->getContext($context, "read_only")))) {
                // line 340
                echo " ";
                // line 341
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 342
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 343
$context["attrvalue"] === true)) {
                    // line 344
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 345
$context["attrvalue"] === false)) {
                    // line 346
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f3ba932dc21e3fbe07a2f06d167236161dfa0b37c35497b378d90a28b3dcf22e->leave($__internal_f3ba932dc21e3fbe07a2f06d167236161dfa0b37c35497b378d90a28b3dcf22e_prof);

    }

    // line 351
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_6215bf5267451711a26cc9b0ee4c4504d538ecc365668be0bb98d9c22fffb0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6215bf5267451711a26cc9b0ee4c4504d538ecc365668be0bb98d9c22fffb0bf->enter($__internal_6215bf5267451711a26cc9b0ee4c4504d538ecc365668be0bb98d9c22fffb0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 352
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 354
            echo " ";
            // line 355
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 357
$context["attrvalue"] === true)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 359
$context["attrvalue"] === false)) {
                // line 360
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6215bf5267451711a26cc9b0ee4c4504d538ecc365668be0bb98d9c22fffb0bf->leave($__internal_6215bf5267451711a26cc9b0ee4c4504d538ecc365668be0bb98d9c22fffb0bf_prof);

    }

    // line 365
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_6dc63b51c2ca93262916dbf814bbf0601270933b29e422bf71a092fff2e14401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc63b51c2ca93262916dbf814bbf0601270933b29e422bf71a092fff2e14401->enter($__internal_6dc63b51c2ca93262916dbf814bbf0601270933b29e422bf71a092fff2e14401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 366
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 368
            echo " ";
            // line 369
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 371
$context["attrvalue"] === true)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 373
$context["attrvalue"] === false)) {
                // line 374
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6dc63b51c2ca93262916dbf814bbf0601270933b29e422bf71a092fff2e14401->leave($__internal_6dc63b51c2ca93262916dbf814bbf0601270933b29e422bf71a092fff2e14401_prof);

    }

    // line 379
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_d1fc130a21f35165764740607b02be18e6b475e80df82b407a69c5310e1edeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fc130a21f35165764740607b02be18e6b475e80df82b407a69c5310e1edeeb->enter($__internal_d1fc130a21f35165764740607b02be18e6b475e80df82b407a69c5310e1edeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 381
            echo " ";
            // line 382
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 383
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 384
$context["attrvalue"] === true)) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 386
$context["attrvalue"] === false)) {
                // line 387
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d1fc130a21f35165764740607b02be18e6b475e80df82b407a69c5310e1edeeb->leave($__internal_d1fc130a21f35165764740607b02be18e6b475e80df82b407a69c5310e1edeeb_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1316 => 387,  1314 => 386,  1309 => 385,  1307 => 384,  1302 => 383,  1300 => 382,  1298 => 381,  1294 => 380,  1288 => 379,  1273 => 374,  1271 => 373,  1266 => 372,  1264 => 371,  1259 => 370,  1257 => 369,  1255 => 368,  1251 => 367,  1242 => 366,  1236 => 365,  1221 => 360,  1219 => 359,  1214 => 358,  1212 => 357,  1207 => 356,  1205 => 355,  1203 => 354,  1199 => 353,  1193 => 352,  1187 => 351,  1171 => 346,  1169 => 345,  1164 => 344,  1162 => 343,  1157 => 342,  1155 => 341,  1153 => 340,  1148 => 339,  1144 => 338,  1140 => 337,  1136 => 336,  1130 => 335,  1124 => 334,  1113 => 330,  1109 => 329,  1103 => 328,  1092 => 321,  1090 => 320,  1087 => 317,  1084 => 315,  1082 => 314,  1080 => 313,  1078 => 312,  1076 => 311,  1069 => 307,  1067 => 306,  1063 => 305,  1057 => 304,  1049 => 300,  1041 => 298,  1037 => 297,  1035 => 296,  1033 => 295,  1027 => 294,  1018 => 291,  1012 => 290,  1005 => 287,  1002 => 285,  1000 => 284,  994 => 283,  984 => 279,  982 => 278,  955 => 277,  952 => 275,  949 => 273,  947 => 272,  945 => 271,  943 => 270,  937 => 269,  930 => 266,  928 => 265,  926 => 264,  920 => 263,  913 => 258,  907 => 257,  900 => 254,  898 => 253,  896 => 252,  890 => 251,  883 => 248,  881 => 247,  879 => 246,  877 => 245,  875 => 244,  869 => 243,  862 => 240,  856 => 235,  845 => 231,  822 => 227,  818 => 224,  815 => 221,  814 => 220,  813 => 219,  811 => 218,  809 => 217,  806 => 215,  804 => 214,  801 => 212,  799 => 211,  797 => 210,  791 => 209,  784 => 204,  782 => 203,  776 => 202,  769 => 199,  767 => 198,  761 => 197,  748 => 194,  744 => 191,  741 => 188,  740 => 187,  739 => 186,  737 => 185,  735 => 184,  729 => 183,  722 => 180,  720 => 179,  714 => 178,  707 => 175,  705 => 174,  699 => 173,  692 => 170,  690 => 169,  684 => 168,  677 => 165,  675 => 164,  669 => 163,  661 => 160,  659 => 159,  653 => 158,  646 => 155,  644 => 154,  638 => 153,  631 => 150,  629 => 149,  623 => 148,  616 => 145,  610 => 144,  603 => 141,  601 => 140,  595 => 139,  588 => 136,  586 => 135,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 379,  153 => 365,  151 => 351,  149 => 334,  147 => 328,  144 => 325,  142 => 304,  140 => 294,  138 => 290,  136 => 283,  134 => 269,  132 => 263,  130 => 257,  128 => 251,  126 => 243,  124 => 235,  122 => 231,  120 => 209,  118 => 202,  116 => 197,  114 => 183,  112 => 178,  110 => 173,  108 => 168,  106 => 163,  104 => 158,  102 => 153,  100 => 148,  98 => 144,  96 => 139,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
