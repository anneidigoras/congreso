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
        $__internal_6ed4596f6eebd6a5e3f0e2329b26a4236fb591f38ad623a06b1d672a65dac421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed4596f6eebd6a5e3f0e2329b26a4236fb591f38ad623a06b1d672a65dac421->enter($__internal_6ed4596f6eebd6a5e3f0e2329b26a4236fb591f38ad623a06b1d672a65dac421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ed4596f6eebd6a5e3f0e2329b26a4236fb591f38ad623a06b1d672a65dac421->leave($__internal_6ed4596f6eebd6a5e3f0e2329b26a4236fb591f38ad623a06b1d672a65dac421_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7675c6267171f554c2c6371518f16285d977614b6e1b978996e9d4131f60c1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7675c6267171f554c2c6371518f16285d977614b6e1b978996e9d4131f60c1d5->enter($__internal_7675c6267171f554c2c6371518f16285d977614b6e1b978996e9d4131f60c1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7675c6267171f554c2c6371518f16285d977614b6e1b978996e9d4131f60c1d5->leave($__internal_7675c6267171f554c2c6371518f16285d977614b6e1b978996e9d4131f60c1d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b3216079650285f4ecaae942fbcd8066c0efed51d0f6fbbef6c9396fbd80bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3216079650285f4ecaae942fbcd8066c0efed51d0f6fbbef6c9396fbd80bef->enter($__internal_3b3216079650285f4ecaae942fbcd8066c0efed51d0f6fbbef6c9396fbd80bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b3216079650285f4ecaae942fbcd8066c0efed51d0f6fbbef6c9396fbd80bef->leave($__internal_3b3216079650285f4ecaae942fbcd8066c0efed51d0f6fbbef6c9396fbd80bef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1797a0e0e237716fc029dd52fe08f7cf77ccd0e6bd50eed536b157872f740450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1797a0e0e237716fc029dd52fe08f7cf77ccd0e6bd50eed536b157872f740450->enter($__internal_1797a0e0e237716fc029dd52fe08f7cf77ccd0e6bd50eed536b157872f740450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1797a0e0e237716fc029dd52fe08f7cf77ccd0e6bd50eed536b157872f740450->leave($__internal_1797a0e0e237716fc029dd52fe08f7cf77ccd0e6bd50eed536b157872f740450_prof);

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
