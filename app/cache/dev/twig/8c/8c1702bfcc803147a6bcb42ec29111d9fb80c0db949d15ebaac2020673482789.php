<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18d6667e8874c348cd76f6c7d9f2ff0b4daf99d663d4ba13edf04ba359c575bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_71a784c9eb4a49bfe57795d795f5cb9878820b36f0a73c52ca007a3f7e86d8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a784c9eb4a49bfe57795d795f5cb9878820b36f0a73c52ca007a3f7e86d8b4->enter($__internal_71a784c9eb4a49bfe57795d795f5cb9878820b36f0a73c52ca007a3f7e86d8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a784c9eb4a49bfe57795d795f5cb9878820b36f0a73c52ca007a3f7e86d8b4->leave($__internal_71a784c9eb4a49bfe57795d795f5cb9878820b36f0a73c52ca007a3f7e86d8b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3b2655dc051fc49c5c5c6c544b931cacd23ffa478ecb49449c559903eda532c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b2655dc051fc49c5c5c6c544b931cacd23ffa478ecb49449c559903eda532c->enter($__internal_e3b2655dc051fc49c5c5c6c544b931cacd23ffa478ecb49449c559903eda532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e3b2655dc051fc49c5c5c6c544b931cacd23ffa478ecb49449c559903eda532c->leave($__internal_e3b2655dc051fc49c5c5c6c544b931cacd23ffa478ecb49449c559903eda532c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e421c13699febe95f3bf73fdd0897082fef03dfed6ef626110838bebb33dd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e421c13699febe95f3bf73fdd0897082fef03dfed6ef626110838bebb33dd37->enter($__internal_2e421c13699febe95f3bf73fdd0897082fef03dfed6ef626110838bebb33dd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e421c13699febe95f3bf73fdd0897082fef03dfed6ef626110838bebb33dd37->leave($__internal_2e421c13699febe95f3bf73fdd0897082fef03dfed6ef626110838bebb33dd37_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fba0d4253688526ec3709a083577aba5992da24db76c7a8163700ed38129a48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba0d4253688526ec3709a083577aba5992da24db76c7a8163700ed38129a48a->enter($__internal_fba0d4253688526ec3709a083577aba5992da24db76c7a8163700ed38129a48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fba0d4253688526ec3709a083577aba5992da24db76c7a8163700ed38129a48a->leave($__internal_fba0d4253688526ec3709a083577aba5992da24db76c7a8163700ed38129a48a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
