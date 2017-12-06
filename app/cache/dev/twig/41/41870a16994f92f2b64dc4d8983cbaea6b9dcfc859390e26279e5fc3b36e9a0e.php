<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edd653923438e67d6eaa61d5840b114fd8b3e8b30fe59da261433bc94772d5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4deda1940645ff83674371e0bc09d71bbb98b34659a4bede84b1e5119f6ea47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4deda1940645ff83674371e0bc09d71bbb98b34659a4bede84b1e5119f6ea47->enter($__internal_c4deda1940645ff83674371e0bc09d71bbb98b34659a4bede84b1e5119f6ea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4deda1940645ff83674371e0bc09d71bbb98b34659a4bede84b1e5119f6ea47->leave($__internal_c4deda1940645ff83674371e0bc09d71bbb98b34659a4bede84b1e5119f6ea47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20d2027015cddbadceef0884f3226cd4d519952dfbd82d5acc6ea4f73049850f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d2027015cddbadceef0884f3226cd4d519952dfbd82d5acc6ea4f73049850f->enter($__internal_20d2027015cddbadceef0884f3226cd4d519952dfbd82d5acc6ea4f73049850f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20d2027015cddbadceef0884f3226cd4d519952dfbd82d5acc6ea4f73049850f->leave($__internal_20d2027015cddbadceef0884f3226cd4d519952dfbd82d5acc6ea4f73049850f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da99944758b776292dbc63d655e296cd959cda7d99da1dacf322d3bea606ca8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da99944758b776292dbc63d655e296cd959cda7d99da1dacf322d3bea606ca8a->enter($__internal_da99944758b776292dbc63d655e296cd959cda7d99da1dacf322d3bea606ca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da99944758b776292dbc63d655e296cd959cda7d99da1dacf322d3bea606ca8a->leave($__internal_da99944758b776292dbc63d655e296cd959cda7d99da1dacf322d3bea606ca8a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbd67b11e20ba6ad3648da0b28f3a4591fd94ac5044aec610fb435e861ed2ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd67b11e20ba6ad3648da0b28f3a4591fd94ac5044aec610fb435e861ed2ce6->enter($__internal_dbd67b11e20ba6ad3648da0b28f3a4591fd94ac5044aec610fb435e861ed2ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dbd67b11e20ba6ad3648da0b28f3a4591fd94ac5044aec610fb435e861ed2ce6->leave($__internal_dbd67b11e20ba6ad3648da0b28f3a4591fd94ac5044aec610fb435e861ed2ce6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
