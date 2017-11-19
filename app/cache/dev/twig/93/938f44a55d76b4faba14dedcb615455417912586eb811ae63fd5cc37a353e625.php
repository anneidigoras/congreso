<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
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
        $__internal_ad0655e9ac4a003f70ba07832fab6637868a1ed790f43080789830ec480070dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0655e9ac4a003f70ba07832fab6637868a1ed790f43080789830ec480070dc->enter($__internal_ad0655e9ac4a003f70ba07832fab6637868a1ed790f43080789830ec480070dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad0655e9ac4a003f70ba07832fab6637868a1ed790f43080789830ec480070dc->leave($__internal_ad0655e9ac4a003f70ba07832fab6637868a1ed790f43080789830ec480070dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c34ae4cf7db585fbabcd685ec9d2eed122ee8cd57be612df6cb744fcd1f6b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c34ae4cf7db585fbabcd685ec9d2eed122ee8cd57be612df6cb744fcd1f6b1e->enter($__internal_9c34ae4cf7db585fbabcd685ec9d2eed122ee8cd57be612df6cb744fcd1f6b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9c34ae4cf7db585fbabcd685ec9d2eed122ee8cd57be612df6cb744fcd1f6b1e->leave($__internal_9c34ae4cf7db585fbabcd685ec9d2eed122ee8cd57be612df6cb744fcd1f6b1e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccedd5e730001032ff379ff8db10dfe7453b2c018fca3939c54a559b1a95786f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccedd5e730001032ff379ff8db10dfe7453b2c018fca3939c54a559b1a95786f->enter($__internal_ccedd5e730001032ff379ff8db10dfe7453b2c018fca3939c54a559b1a95786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ccedd5e730001032ff379ff8db10dfe7453b2c018fca3939c54a559b1a95786f->leave($__internal_ccedd5e730001032ff379ff8db10dfe7453b2c018fca3939c54a559b1a95786f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6951f240601d03cac3d596cc0e18d4274a55d93f03df1da45b6d3afd68d4038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6951f240601d03cac3d596cc0e18d4274a55d93f03df1da45b6d3afd68d4038->enter($__internal_a6951f240601d03cac3d596cc0e18d4274a55d93f03df1da45b6d3afd68d4038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6951f240601d03cac3d596cc0e18d4274a55d93f03df1da45b6d3afd68d4038->leave($__internal_a6951f240601d03cac3d596cc0e18d4274a55d93f03df1da45b6d3afd68d4038_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f6e039012bd33f2c8f194a0e9a2a08f4085c1133e96d652eb54a82e314119af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6e039012bd33f2c8f194a0e9a2a08f4085c1133e96d652eb54a82e314119af->enter($__internal_6f6e039012bd33f2c8f194a0e9a2a08f4085c1133e96d652eb54a82e314119af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f6e039012bd33f2c8f194a0e9a2a08f4085c1133e96d652eb54a82e314119af->leave($__internal_6f6e039012bd33f2c8f194a0e9a2a08f4085c1133e96d652eb54a82e314119af_prof);

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
