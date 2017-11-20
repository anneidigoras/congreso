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
        $__internal_343a5f294746c2ad2ec115dd6f4f27863a0672191eb1550631af0186cbe2dae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343a5f294746c2ad2ec115dd6f4f27863a0672191eb1550631af0186cbe2dae9->enter($__internal_343a5f294746c2ad2ec115dd6f4f27863a0672191eb1550631af0186cbe2dae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343a5f294746c2ad2ec115dd6f4f27863a0672191eb1550631af0186cbe2dae9->leave($__internal_343a5f294746c2ad2ec115dd6f4f27863a0672191eb1550631af0186cbe2dae9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_99dd35dcab4b900d166509bc3fa3c2d2cb7c595c59f8b3df344d06ca11bb4da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dd35dcab4b900d166509bc3fa3c2d2cb7c595c59f8b3df344d06ca11bb4da1->enter($__internal_99dd35dcab4b900d166509bc3fa3c2d2cb7c595c59f8b3df344d06ca11bb4da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_99dd35dcab4b900d166509bc3fa3c2d2cb7c595c59f8b3df344d06ca11bb4da1->leave($__internal_99dd35dcab4b900d166509bc3fa3c2d2cb7c595c59f8b3df344d06ca11bb4da1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_353a2005dd1f5956e0f68e0be71b4000c551919f6b8c25057b8c44af81af90db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353a2005dd1f5956e0f68e0be71b4000c551919f6b8c25057b8c44af81af90db->enter($__internal_353a2005dd1f5956e0f68e0be71b4000c551919f6b8c25057b8c44af81af90db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_353a2005dd1f5956e0f68e0be71b4000c551919f6b8c25057b8c44af81af90db->leave($__internal_353a2005dd1f5956e0f68e0be71b4000c551919f6b8c25057b8c44af81af90db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24e2f0dd6b6447622656274dfcc44bd56a196e35234640f0a407f64578d16cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e2f0dd6b6447622656274dfcc44bd56a196e35234640f0a407f64578d16cbd->enter($__internal_24e2f0dd6b6447622656274dfcc44bd56a196e35234640f0a407f64578d16cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_24e2f0dd6b6447622656274dfcc44bd56a196e35234640f0a407f64578d16cbd->leave($__internal_24e2f0dd6b6447622656274dfcc44bd56a196e35234640f0a407f64578d16cbd_prof);

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
