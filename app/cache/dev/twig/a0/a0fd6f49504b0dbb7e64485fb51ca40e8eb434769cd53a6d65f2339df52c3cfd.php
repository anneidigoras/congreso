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
        $__internal_4bf9bd13d27885f4b1d0bbb68a70adc2ef459229435f626f3e464a384c174fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf9bd13d27885f4b1d0bbb68a70adc2ef459229435f626f3e464a384c174fff->enter($__internal_4bf9bd13d27885f4b1d0bbb68a70adc2ef459229435f626f3e464a384c174fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf9bd13d27885f4b1d0bbb68a70adc2ef459229435f626f3e464a384c174fff->leave($__internal_4bf9bd13d27885f4b1d0bbb68a70adc2ef459229435f626f3e464a384c174fff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_697ae0132c073ced82d347f1024d4bd9c058d75af9cc8c0d4f34a515ad9df5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697ae0132c073ced82d347f1024d4bd9c058d75af9cc8c0d4f34a515ad9df5e8->enter($__internal_697ae0132c073ced82d347f1024d4bd9c058d75af9cc8c0d4f34a515ad9df5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_697ae0132c073ced82d347f1024d4bd9c058d75af9cc8c0d4f34a515ad9df5e8->leave($__internal_697ae0132c073ced82d347f1024d4bd9c058d75af9cc8c0d4f34a515ad9df5e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58aad58311da9637bde1851d3cd213c29f4154f755d84ea200f6697975a7a58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58aad58311da9637bde1851d3cd213c29f4154f755d84ea200f6697975a7a58b->enter($__internal_58aad58311da9637bde1851d3cd213c29f4154f755d84ea200f6697975a7a58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_58aad58311da9637bde1851d3cd213c29f4154f755d84ea200f6697975a7a58b->leave($__internal_58aad58311da9637bde1851d3cd213c29f4154f755d84ea200f6697975a7a58b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_934f8c50435397d8f43a8e7bbdf5cce9129ecbde7a01d44180745988b53bb8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934f8c50435397d8f43a8e7bbdf5cce9129ecbde7a01d44180745988b53bb8fe->enter($__internal_934f8c50435397d8f43a8e7bbdf5cce9129ecbde7a01d44180745988b53bb8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_934f8c50435397d8f43a8e7bbdf5cce9129ecbde7a01d44180745988b53bb8fe->leave($__internal_934f8c50435397d8f43a8e7bbdf5cce9129ecbde7a01d44180745988b53bb8fe_prof);

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
