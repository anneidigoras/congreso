<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c3e78761fe2570c702bbd8a607479b014bd2d8ab2cf2bedc98a9d055b8d3e588 extends Twig_Template
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
        $__internal_e7926453c431e8d3550b3ad6ec914b8d7ab1f7b885ae9acd7c827e7a34f15712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7926453c431e8d3550b3ad6ec914b8d7ab1f7b885ae9acd7c827e7a34f15712->enter($__internal_e7926453c431e8d3550b3ad6ec914b8d7ab1f7b885ae9acd7c827e7a34f15712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7926453c431e8d3550b3ad6ec914b8d7ab1f7b885ae9acd7c827e7a34f15712->leave($__internal_e7926453c431e8d3550b3ad6ec914b8d7ab1f7b885ae9acd7c827e7a34f15712_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c9f94ea2046fe593866f086cf69ebef2269e6994bf5230315d2c600335d20a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9f94ea2046fe593866f086cf69ebef2269e6994bf5230315d2c600335d20a8->enter($__internal_7c9f94ea2046fe593866f086cf69ebef2269e6994bf5230315d2c600335d20a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7c9f94ea2046fe593866f086cf69ebef2269e6994bf5230315d2c600335d20a8->leave($__internal_7c9f94ea2046fe593866f086cf69ebef2269e6994bf5230315d2c600335d20a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bf9cd84a2793d17b69d9b1adae31c36df8a9dcdd13754d7db1212fcbff8328b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf9cd84a2793d17b69d9b1adae31c36df8a9dcdd13754d7db1212fcbff8328b->enter($__internal_4bf9cd84a2793d17b69d9b1adae31c36df8a9dcdd13754d7db1212fcbff8328b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4bf9cd84a2793d17b69d9b1adae31c36df8a9dcdd13754d7db1212fcbff8328b->leave($__internal_4bf9cd84a2793d17b69d9b1adae31c36df8a9dcdd13754d7db1212fcbff8328b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_894a74b22587e7ec69be82ff4ad79cdd02f370efd728b6dfbdeadf9cc54bf592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894a74b22587e7ec69be82ff4ad79cdd02f370efd728b6dfbdeadf9cc54bf592->enter($__internal_894a74b22587e7ec69be82ff4ad79cdd02f370efd728b6dfbdeadf9cc54bf592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_894a74b22587e7ec69be82ff4ad79cdd02f370efd728b6dfbdeadf9cc54bf592->leave($__internal_894a74b22587e7ec69be82ff4ad79cdd02f370efd728b6dfbdeadf9cc54bf592_prof);

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
