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
        $__internal_5c997a1e5bd0e97cb60956677dda53e7d5b340aa0cfee4a45ac5a9f58a632674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c997a1e5bd0e97cb60956677dda53e7d5b340aa0cfee4a45ac5a9f58a632674->enter($__internal_5c997a1e5bd0e97cb60956677dda53e7d5b340aa0cfee4a45ac5a9f58a632674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c997a1e5bd0e97cb60956677dda53e7d5b340aa0cfee4a45ac5a9f58a632674->leave($__internal_5c997a1e5bd0e97cb60956677dda53e7d5b340aa0cfee4a45ac5a9f58a632674_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3e70629854e220d7c58e450c857698195715892156aa11e0ff729ed9cca8e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e70629854e220d7c58e450c857698195715892156aa11e0ff729ed9cca8e59->enter($__internal_b3e70629854e220d7c58e450c857698195715892156aa11e0ff729ed9cca8e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b3e70629854e220d7c58e450c857698195715892156aa11e0ff729ed9cca8e59->leave($__internal_b3e70629854e220d7c58e450c857698195715892156aa11e0ff729ed9cca8e59_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ae1ba074a996c29c9c8223c488766feafa9d91c1788abe867e01d66a8547163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae1ba074a996c29c9c8223c488766feafa9d91c1788abe867e01d66a8547163->enter($__internal_5ae1ba074a996c29c9c8223c488766feafa9d91c1788abe867e01d66a8547163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5ae1ba074a996c29c9c8223c488766feafa9d91c1788abe867e01d66a8547163->leave($__internal_5ae1ba074a996c29c9c8223c488766feafa9d91c1788abe867e01d66a8547163_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_20084b8442dbed0480f639031cde9c8c3233244245285fe4acba10812607026c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20084b8442dbed0480f639031cde9c8c3233244245285fe4acba10812607026c->enter($__internal_20084b8442dbed0480f639031cde9c8c3233244245285fe4acba10812607026c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20084b8442dbed0480f639031cde9c8c3233244245285fe4acba10812607026c->leave($__internal_20084b8442dbed0480f639031cde9c8c3233244245285fe4acba10812607026c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_02a19ad662d91c38b1a14f5ef83faf037c691ed4b9ca52cb745b9f8235fded70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a19ad662d91c38b1a14f5ef83faf037c691ed4b9ca52cb745b9f8235fded70->enter($__internal_02a19ad662d91c38b1a14f5ef83faf037c691ed4b9ca52cb745b9f8235fded70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_02a19ad662d91c38b1a14f5ef83faf037c691ed4b9ca52cb745b9f8235fded70->leave($__internal_02a19ad662d91c38b1a14f5ef83faf037c691ed4b9ca52cb745b9f8235fded70_prof);

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
