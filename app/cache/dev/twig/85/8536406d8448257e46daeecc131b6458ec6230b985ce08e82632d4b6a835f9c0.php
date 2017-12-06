<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_9c591f7752e12960e66c9d089d1fea62b11cd33c8cecf47955510b8299081b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_51bd26a0111f30ada395da1689adb3417f054d2c92a77d27d61e3ba81f5e5764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bd26a0111f30ada395da1689adb3417f054d2c92a77d27d61e3ba81f5e5764->enter($__internal_51bd26a0111f30ada395da1689adb3417f054d2c92a77d27d61e3ba81f5e5764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51bd26a0111f30ada395da1689adb3417f054d2c92a77d27d61e3ba81f5e5764->leave($__internal_51bd26a0111f30ada395da1689adb3417f054d2c92a77d27d61e3ba81f5e5764_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a10bdbe9a93a16cfaa6545886b4b6119ffb8bee39c97d607a6a22429a6ed44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a10bdbe9a93a16cfaa6545886b4b6119ffb8bee39c97d607a6a22429a6ed44e->enter($__internal_9a10bdbe9a93a16cfaa6545886b4b6119ffb8bee39c97d607a6a22429a6ed44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9a10bdbe9a93a16cfaa6545886b4b6119ffb8bee39c97d607a6a22429a6ed44e->leave($__internal_9a10bdbe9a93a16cfaa6545886b4b6119ffb8bee39c97d607a6a22429a6ed44e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9e764c578223d3363ee28ff529ce7359c5fee3d67b0b2c661872df5f202b473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e764c578223d3363ee28ff529ce7359c5fee3d67b0b2c661872df5f202b473->enter($__internal_c9e764c578223d3363ee28ff529ce7359c5fee3d67b0b2c661872df5f202b473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c9e764c578223d3363ee28ff529ce7359c5fee3d67b0b2c661872df5f202b473->leave($__internal_c9e764c578223d3363ee28ff529ce7359c5fee3d67b0b2c661872df5f202b473_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_14333e8654c1580f72115d16e84dca8d57121d6c6bda47149a229f4952692781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14333e8654c1580f72115d16e84dca8d57121d6c6bda47149a229f4952692781->enter($__internal_14333e8654c1580f72115d16e84dca8d57121d6c6bda47149a229f4952692781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_14333e8654c1580f72115d16e84dca8d57121d6c6bda47149a229f4952692781->leave($__internal_14333e8654c1580f72115d16e84dca8d57121d6c6bda47149a229f4952692781_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c667a527125bdc049e698235428a629ebd7d1a0130869bd2389edd2b0e34e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c667a527125bdc049e698235428a629ebd7d1a0130869bd2389edd2b0e34e97->enter($__internal_1c667a527125bdc049e698235428a629ebd7d1a0130869bd2389edd2b0e34e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1c667a527125bdc049e698235428a629ebd7d1a0130869bd2389edd2b0e34e97->leave($__internal_1c667a527125bdc049e698235428a629ebd7d1a0130869bd2389edd2b0e34e97_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
