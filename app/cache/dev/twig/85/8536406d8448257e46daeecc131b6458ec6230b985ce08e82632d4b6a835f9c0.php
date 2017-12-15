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
        $__internal_35f976c51b0557f5509d20f3380ad35f793ccc95673177752e3e14dcef3b26b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f976c51b0557f5509d20f3380ad35f793ccc95673177752e3e14dcef3b26b1->enter($__internal_35f976c51b0557f5509d20f3380ad35f793ccc95673177752e3e14dcef3b26b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f976c51b0557f5509d20f3380ad35f793ccc95673177752e3e14dcef3b26b1->leave($__internal_35f976c51b0557f5509d20f3380ad35f793ccc95673177752e3e14dcef3b26b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a43584dbc76c118b0563347415f11bd159ad75f21da2926d3e6bb3ab09d9ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a43584dbc76c118b0563347415f11bd159ad75f21da2926d3e6bb3ab09d9ac6->enter($__internal_8a43584dbc76c118b0563347415f11bd159ad75f21da2926d3e6bb3ab09d9ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8a43584dbc76c118b0563347415f11bd159ad75f21da2926d3e6bb3ab09d9ac6->leave($__internal_8a43584dbc76c118b0563347415f11bd159ad75f21da2926d3e6bb3ab09d9ac6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10503fd2e0e5aa75c91e38df1436baf073896a475639b398a517b388b8177c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10503fd2e0e5aa75c91e38df1436baf073896a475639b398a517b388b8177c82->enter($__internal_10503fd2e0e5aa75c91e38df1436baf073896a475639b398a517b388b8177c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_10503fd2e0e5aa75c91e38df1436baf073896a475639b398a517b388b8177c82->leave($__internal_10503fd2e0e5aa75c91e38df1436baf073896a475639b398a517b388b8177c82_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3df457d2875594467b94094bbe9c427daa7118e4a3c0d26da7353079fecc8f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df457d2875594467b94094bbe9c427daa7118e4a3c0d26da7353079fecc8f94->enter($__internal_3df457d2875594467b94094bbe9c427daa7118e4a3c0d26da7353079fecc8f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3df457d2875594467b94094bbe9c427daa7118e4a3c0d26da7353079fecc8f94->leave($__internal_3df457d2875594467b94094bbe9c427daa7118e4a3c0d26da7353079fecc8f94_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_480aaadcf5ad2919be369b357998d16166ef7f7def52963390a9ef20f3539cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480aaadcf5ad2919be369b357998d16166ef7f7def52963390a9ef20f3539cf0->enter($__internal_480aaadcf5ad2919be369b357998d16166ef7f7def52963390a9ef20f3539cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_480aaadcf5ad2919be369b357998d16166ef7f7def52963390a9ef20f3539cf0->leave($__internal_480aaadcf5ad2919be369b357998d16166ef7f7def52963390a9ef20f3539cf0_prof);

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
