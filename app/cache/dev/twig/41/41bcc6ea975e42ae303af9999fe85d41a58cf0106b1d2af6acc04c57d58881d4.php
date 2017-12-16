<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_79a38a94ef95ccd4f299af2532aaa9c14989e2222d45370a261deb698ec0683c extends Twig_Template
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
        $__internal_93db1297f55a7f8180f6f85923c89f083c2d0bfc95735dcf8eb34aa433b9634f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93db1297f55a7f8180f6f85923c89f083c2d0bfc95735dcf8eb34aa433b9634f->enter($__internal_93db1297f55a7f8180f6f85923c89f083c2d0bfc95735dcf8eb34aa433b9634f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93db1297f55a7f8180f6f85923c89f083c2d0bfc95735dcf8eb34aa433b9634f->leave($__internal_93db1297f55a7f8180f6f85923c89f083c2d0bfc95735dcf8eb34aa433b9634f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb099a1e81b993d1ac96d52caadd2a9163e776aaeffffe32a86094d78db1e987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb099a1e81b993d1ac96d52caadd2a9163e776aaeffffe32a86094d78db1e987->enter($__internal_bb099a1e81b993d1ac96d52caadd2a9163e776aaeffffe32a86094d78db1e987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bb099a1e81b993d1ac96d52caadd2a9163e776aaeffffe32a86094d78db1e987->leave($__internal_bb099a1e81b993d1ac96d52caadd2a9163e776aaeffffe32a86094d78db1e987_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9339d8defd90438263037fe2abe69c8994e6c71532fb69643e39bc0bebfc12fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9339d8defd90438263037fe2abe69c8994e6c71532fb69643e39bc0bebfc12fd->enter($__internal_9339d8defd90438263037fe2abe69c8994e6c71532fb69643e39bc0bebfc12fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9339d8defd90438263037fe2abe69c8994e6c71532fb69643e39bc0bebfc12fd->leave($__internal_9339d8defd90438263037fe2abe69c8994e6c71532fb69643e39bc0bebfc12fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c5d36f7dc18f7ad10fd07acc7470df8c50c19c6402dd68110f9c4af34ae4d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5d36f7dc18f7ad10fd07acc7470df8c50c19c6402dd68110f9c4af34ae4d7d->enter($__internal_5c5d36f7dc18f7ad10fd07acc7470df8c50c19c6402dd68110f9c4af34ae4d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5c5d36f7dc18f7ad10fd07acc7470df8c50c19c6402dd68110f9c4af34ae4d7d->leave($__internal_5c5d36f7dc18f7ad10fd07acc7470df8c50c19c6402dd68110f9c4af34ae4d7d_prof);

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
