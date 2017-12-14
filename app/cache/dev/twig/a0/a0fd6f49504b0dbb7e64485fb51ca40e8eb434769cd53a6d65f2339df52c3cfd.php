<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f97c8a1787df839bdffafdd4590367c492bf691f87a5dbc9f4c5c6a8ef593ec9 extends Twig_Template
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
        $__internal_c93cf30067cf0ed3c6f117dba0d03494091bd2a2dbde1241bebbe034a37958dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93cf30067cf0ed3c6f117dba0d03494091bd2a2dbde1241bebbe034a37958dc->enter($__internal_c93cf30067cf0ed3c6f117dba0d03494091bd2a2dbde1241bebbe034a37958dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93cf30067cf0ed3c6f117dba0d03494091bd2a2dbde1241bebbe034a37958dc->leave($__internal_c93cf30067cf0ed3c6f117dba0d03494091bd2a2dbde1241bebbe034a37958dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ff4a2abbb420531baac60cc3c6cef09a613912d8b0d9bfe50a5995a796a5893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff4a2abbb420531baac60cc3c6cef09a613912d8b0d9bfe50a5995a796a5893->enter($__internal_7ff4a2abbb420531baac60cc3c6cef09a613912d8b0d9bfe50a5995a796a5893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ff4a2abbb420531baac60cc3c6cef09a613912d8b0d9bfe50a5995a796a5893->leave($__internal_7ff4a2abbb420531baac60cc3c6cef09a613912d8b0d9bfe50a5995a796a5893_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34f3b298f1ca60123953b1d48401d936418ae2fef102d1d12cf5d9dd2aa438f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f3b298f1ca60123953b1d48401d936418ae2fef102d1d12cf5d9dd2aa438f8->enter($__internal_34f3b298f1ca60123953b1d48401d936418ae2fef102d1d12cf5d9dd2aa438f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_34f3b298f1ca60123953b1d48401d936418ae2fef102d1d12cf5d9dd2aa438f8->leave($__internal_34f3b298f1ca60123953b1d48401d936418ae2fef102d1d12cf5d9dd2aa438f8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3247056d674cf2800c5490cb08d351ffb6e4357053a8af8c7421630e2ff37d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3247056d674cf2800c5490cb08d351ffb6e4357053a8af8c7421630e2ff37d14->enter($__internal_3247056d674cf2800c5490cb08d351ffb6e4357053a8af8c7421630e2ff37d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3247056d674cf2800c5490cb08d351ffb6e4357053a8af8c7421630e2ff37d14->leave($__internal_3247056d674cf2800c5490cb08d351ffb6e4357053a8af8c7421630e2ff37d14_prof);

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
