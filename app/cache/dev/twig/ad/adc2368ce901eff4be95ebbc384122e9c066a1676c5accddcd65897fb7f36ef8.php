<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bcd68bcfce815450f95b685f94438cd4d130ccd92c8a95e77deedaef1d28e101 extends Twig_Template
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
        $__internal_0622f8ce4100bdbfee4443801d46e94f90a9527165d564e80699b719e0161eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0622f8ce4100bdbfee4443801d46e94f90a9527165d564e80699b719e0161eaf->enter($__internal_0622f8ce4100bdbfee4443801d46e94f90a9527165d564e80699b719e0161eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0622f8ce4100bdbfee4443801d46e94f90a9527165d564e80699b719e0161eaf->leave($__internal_0622f8ce4100bdbfee4443801d46e94f90a9527165d564e80699b719e0161eaf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab72f413c37e774c3e2eb4a0909e1ba141a8950228d892db661876890aafe724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab72f413c37e774c3e2eb4a0909e1ba141a8950228d892db661876890aafe724->enter($__internal_ab72f413c37e774c3e2eb4a0909e1ba141a8950228d892db661876890aafe724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ab72f413c37e774c3e2eb4a0909e1ba141a8950228d892db661876890aafe724->leave($__internal_ab72f413c37e774c3e2eb4a0909e1ba141a8950228d892db661876890aafe724_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dd0c9b598d723beaa9318673ffe190f4fdf86145a79efb4c35b3f6d02014385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd0c9b598d723beaa9318673ffe190f4fdf86145a79efb4c35b3f6d02014385->enter($__internal_7dd0c9b598d723beaa9318673ffe190f4fdf86145a79efb4c35b3f6d02014385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7dd0c9b598d723beaa9318673ffe190f4fdf86145a79efb4c35b3f6d02014385->leave($__internal_7dd0c9b598d723beaa9318673ffe190f4fdf86145a79efb4c35b3f6d02014385_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_233e0e3e9f16dab362549e5ab6d1c1698736baa4c6f8887160284cdd9db94a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233e0e3e9f16dab362549e5ab6d1c1698736baa4c6f8887160284cdd9db94a0d->enter($__internal_233e0e3e9f16dab362549e5ab6d1c1698736baa4c6f8887160284cdd9db94a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_233e0e3e9f16dab362549e5ab6d1c1698736baa4c6f8887160284cdd9db94a0d->leave($__internal_233e0e3e9f16dab362549e5ab6d1c1698736baa4c6f8887160284cdd9db94a0d_prof);

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
