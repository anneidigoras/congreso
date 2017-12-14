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
        $__internal_c926d55b9a04950233faf5f96ebf549ac50200859691e109837d84cd2f2d9ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c926d55b9a04950233faf5f96ebf549ac50200859691e109837d84cd2f2d9ff5->enter($__internal_c926d55b9a04950233faf5f96ebf549ac50200859691e109837d84cd2f2d9ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c926d55b9a04950233faf5f96ebf549ac50200859691e109837d84cd2f2d9ff5->leave($__internal_c926d55b9a04950233faf5f96ebf549ac50200859691e109837d84cd2f2d9ff5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3733daadbb78cde63b68e70cbc97a147764fd3826f96f290f8df0325f96171b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3733daadbb78cde63b68e70cbc97a147764fd3826f96f290f8df0325f96171b->enter($__internal_b3733daadbb78cde63b68e70cbc97a147764fd3826f96f290f8df0325f96171b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b3733daadbb78cde63b68e70cbc97a147764fd3826f96f290f8df0325f96171b->leave($__internal_b3733daadbb78cde63b68e70cbc97a147764fd3826f96f290f8df0325f96171b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee6825402a2ce23e1ce6dadf4c1e069cd86179f1e851dc0aea2878ce8b6470d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6825402a2ce23e1ce6dadf4c1e069cd86179f1e851dc0aea2878ce8b6470d7->enter($__internal_ee6825402a2ce23e1ce6dadf4c1e069cd86179f1e851dc0aea2878ce8b6470d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ee6825402a2ce23e1ce6dadf4c1e069cd86179f1e851dc0aea2878ce8b6470d7->leave($__internal_ee6825402a2ce23e1ce6dadf4c1e069cd86179f1e851dc0aea2878ce8b6470d7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_39216eb5dc1b8673d3fb5bdef7e80110016b26aedfa466ca7a84a172eb7abb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39216eb5dc1b8673d3fb5bdef7e80110016b26aedfa466ca7a84a172eb7abb54->enter($__internal_39216eb5dc1b8673d3fb5bdef7e80110016b26aedfa466ca7a84a172eb7abb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39216eb5dc1b8673d3fb5bdef7e80110016b26aedfa466ca7a84a172eb7abb54->leave($__internal_39216eb5dc1b8673d3fb5bdef7e80110016b26aedfa466ca7a84a172eb7abb54_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_02bd650534b8e6643477d98ab270417020d1f5a762a87d76190e5181c2017adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bd650534b8e6643477d98ab270417020d1f5a762a87d76190e5181c2017adb->enter($__internal_02bd650534b8e6643477d98ab270417020d1f5a762a87d76190e5181c2017adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_02bd650534b8e6643477d98ab270417020d1f5a762a87d76190e5181c2017adb->leave($__internal_02bd650534b8e6643477d98ab270417020d1f5a762a87d76190e5181c2017adb_prof);

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
