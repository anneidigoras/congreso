<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a82435d44d5712b0b8a57d0bb3ef5699e2369fd037fe0e8f85e1e168b5c3d6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_897a65f2f7122625567aba1019bcce84a800250486bad6f969a0323cd1ec48cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897a65f2f7122625567aba1019bcce84a800250486bad6f969a0323cd1ec48cc->enter($__internal_897a65f2f7122625567aba1019bcce84a800250486bad6f969a0323cd1ec48cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897a65f2f7122625567aba1019bcce84a800250486bad6f969a0323cd1ec48cc->leave($__internal_897a65f2f7122625567aba1019bcce84a800250486bad6f969a0323cd1ec48cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1144413944172dfd9c837ec88464633d176961108d35ace411edfbce4ae56541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1144413944172dfd9c837ec88464633d176961108d35ace411edfbce4ae56541->enter($__internal_1144413944172dfd9c837ec88464633d176961108d35ace411edfbce4ae56541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1144413944172dfd9c837ec88464633d176961108d35ace411edfbce4ae56541->leave($__internal_1144413944172dfd9c837ec88464633d176961108d35ace411edfbce4ae56541_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91153f485dc98d628f7a388375d42d7166a103d771d3af19ca10e066049905d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91153f485dc98d628f7a388375d42d7166a103d771d3af19ca10e066049905d2->enter($__internal_91153f485dc98d628f7a388375d42d7166a103d771d3af19ca10e066049905d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_91153f485dc98d628f7a388375d42d7166a103d771d3af19ca10e066049905d2->leave($__internal_91153f485dc98d628f7a388375d42d7166a103d771d3af19ca10e066049905d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e73d96cc2faf9df796e06c19435e6658abaa6ec987178e683d29928b302f4dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73d96cc2faf9df796e06c19435e6658abaa6ec987178e683d29928b302f4dba->enter($__internal_e73d96cc2faf9df796e06c19435e6658abaa6ec987178e683d29928b302f4dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_e73d96cc2faf9df796e06c19435e6658abaa6ec987178e683d29928b302f4dba->leave($__internal_e73d96cc2faf9df796e06c19435e6658abaa6ec987178e683d29928b302f4dba_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_742f16cfe2af72f257cbdd292d0dedecb78da0a809497d776d7804d8af78e1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742f16cfe2af72f257cbdd292d0dedecb78da0a809497d776d7804d8af78e1ad->enter($__internal_742f16cfe2af72f257cbdd292d0dedecb78da0a809497d776d7804d8af78e1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_742f16cfe2af72f257cbdd292d0dedecb78da0a809497d776d7804d8af78e1ad->leave($__internal_742f16cfe2af72f257cbdd292d0dedecb78da0a809497d776d7804d8af78e1ad_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
