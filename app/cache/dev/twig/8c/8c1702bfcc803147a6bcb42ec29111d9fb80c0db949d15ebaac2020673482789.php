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
        $__internal_1e2836310aa18608de9cbb73f54019f7bcfc5d29aca081551ed8f767b72a2a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2836310aa18608de9cbb73f54019f7bcfc5d29aca081551ed8f767b72a2a6f->enter($__internal_1e2836310aa18608de9cbb73f54019f7bcfc5d29aca081551ed8f767b72a2a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e2836310aa18608de9cbb73f54019f7bcfc5d29aca081551ed8f767b72a2a6f->leave($__internal_1e2836310aa18608de9cbb73f54019f7bcfc5d29aca081551ed8f767b72a2a6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2eb3d38df512ec3efda8b9c941420e4cd550d2658de8aadb5989877ba7664dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb3d38df512ec3efda8b9c941420e4cd550d2658de8aadb5989877ba7664dac->enter($__internal_2eb3d38df512ec3efda8b9c941420e4cd550d2658de8aadb5989877ba7664dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2eb3d38df512ec3efda8b9c941420e4cd550d2658de8aadb5989877ba7664dac->leave($__internal_2eb3d38df512ec3efda8b9c941420e4cd550d2658de8aadb5989877ba7664dac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a1cb97d874f9bdd65d00b249c990aee0437cd94315b4b1a9d005e24d67b8f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1cb97d874f9bdd65d00b249c990aee0437cd94315b4b1a9d005e24d67b8f32->enter($__internal_8a1cb97d874f9bdd65d00b249c990aee0437cd94315b4b1a9d005e24d67b8f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a1cb97d874f9bdd65d00b249c990aee0437cd94315b4b1a9d005e24d67b8f32->leave($__internal_8a1cb97d874f9bdd65d00b249c990aee0437cd94315b4b1a9d005e24d67b8f32_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e4cc6d4fa43af412c9d93758c82b25b282b1f7ad1ff112283767955db4bc7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4cc6d4fa43af412c9d93758c82b25b282b1f7ad1ff112283767955db4bc7a0->enter($__internal_1e4cc6d4fa43af412c9d93758c82b25b282b1f7ad1ff112283767955db4bc7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1e4cc6d4fa43af412c9d93758c82b25b282b1f7ad1ff112283767955db4bc7a0->leave($__internal_1e4cc6d4fa43af412c9d93758c82b25b282b1f7ad1ff112283767955db4bc7a0_prof);

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
