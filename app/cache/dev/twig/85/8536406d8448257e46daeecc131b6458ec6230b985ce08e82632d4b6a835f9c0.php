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
        $__internal_d17e4686728ed2efc990bf155f1b7b713e40812aabb3ad57f4702f77076ed7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17e4686728ed2efc990bf155f1b7b713e40812aabb3ad57f4702f77076ed7d9->enter($__internal_d17e4686728ed2efc990bf155f1b7b713e40812aabb3ad57f4702f77076ed7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17e4686728ed2efc990bf155f1b7b713e40812aabb3ad57f4702f77076ed7d9->leave($__internal_d17e4686728ed2efc990bf155f1b7b713e40812aabb3ad57f4702f77076ed7d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46d438336a1b630e3ecbd921513f40d2f3bacbd89e1883e601b0a7ed4e841493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d438336a1b630e3ecbd921513f40d2f3bacbd89e1883e601b0a7ed4e841493->enter($__internal_46d438336a1b630e3ecbd921513f40d2f3bacbd89e1883e601b0a7ed4e841493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_46d438336a1b630e3ecbd921513f40d2f3bacbd89e1883e601b0a7ed4e841493->leave($__internal_46d438336a1b630e3ecbd921513f40d2f3bacbd89e1883e601b0a7ed4e841493_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7b522530957e1a2f98a25d71a5c240c906a0a273a4349d762125c39a58cb3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b522530957e1a2f98a25d71a5c240c906a0a273a4349d762125c39a58cb3e8->enter($__internal_c7b522530957e1a2f98a25d71a5c240c906a0a273a4349d762125c39a58cb3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c7b522530957e1a2f98a25d71a5c240c906a0a273a4349d762125c39a58cb3e8->leave($__internal_c7b522530957e1a2f98a25d71a5c240c906a0a273a4349d762125c39a58cb3e8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e7b316deb1c445dc074ca109f3f7b9f17dd355bda65cc0ec4497131dbbe243f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7b316deb1c445dc074ca109f3f7b9f17dd355bda65cc0ec4497131dbbe243f->enter($__internal_0e7b316deb1c445dc074ca109f3f7b9f17dd355bda65cc0ec4497131dbbe243f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e7b316deb1c445dc074ca109f3f7b9f17dd355bda65cc0ec4497131dbbe243f->leave($__internal_0e7b316deb1c445dc074ca109f3f7b9f17dd355bda65cc0ec4497131dbbe243f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a802c3cb58421c8a22bfcb43fbead2f5898c20b00c5cf52c48fd122ed7dda3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a802c3cb58421c8a22bfcb43fbead2f5898c20b00c5cf52c48fd122ed7dda3e->enter($__internal_7a802c3cb58421c8a22bfcb43fbead2f5898c20b00c5cf52c48fd122ed7dda3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7a802c3cb58421c8a22bfcb43fbead2f5898c20b00c5cf52c48fd122ed7dda3e->leave($__internal_7a802c3cb58421c8a22bfcb43fbead2f5898c20b00c5cf52c48fd122ed7dda3e_prof);

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
