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
        $__internal_698517202d0b49176d833e94ed69e259d858bcf5892601ed474fe2e04aa51ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698517202d0b49176d833e94ed69e259d858bcf5892601ed474fe2e04aa51ebf->enter($__internal_698517202d0b49176d833e94ed69e259d858bcf5892601ed474fe2e04aa51ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_698517202d0b49176d833e94ed69e259d858bcf5892601ed474fe2e04aa51ebf->leave($__internal_698517202d0b49176d833e94ed69e259d858bcf5892601ed474fe2e04aa51ebf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_286e2fbee98a9ab937048a53eadc68d6e9d37f7f95a2954e1b6a67011f80b755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286e2fbee98a9ab937048a53eadc68d6e9d37f7f95a2954e1b6a67011f80b755->enter($__internal_286e2fbee98a9ab937048a53eadc68d6e9d37f7f95a2954e1b6a67011f80b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_286e2fbee98a9ab937048a53eadc68d6e9d37f7f95a2954e1b6a67011f80b755->leave($__internal_286e2fbee98a9ab937048a53eadc68d6e9d37f7f95a2954e1b6a67011f80b755_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd4f00d0a272560c2bac2656411e75b20272fb0283fefeaa0b4fa046d73b6425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4f00d0a272560c2bac2656411e75b20272fb0283fefeaa0b4fa046d73b6425->enter($__internal_cd4f00d0a272560c2bac2656411e75b20272fb0283fefeaa0b4fa046d73b6425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd4f00d0a272560c2bac2656411e75b20272fb0283fefeaa0b4fa046d73b6425->leave($__internal_cd4f00d0a272560c2bac2656411e75b20272fb0283fefeaa0b4fa046d73b6425_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86278c866068d449a941f2a5f01bb059f91384599f1cc5900b1cfcbbcaa221f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86278c866068d449a941f2a5f01bb059f91384599f1cc5900b1cfcbbcaa221f8->enter($__internal_86278c866068d449a941f2a5f01bb059f91384599f1cc5900b1cfcbbcaa221f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_86278c866068d449a941f2a5f01bb059f91384599f1cc5900b1cfcbbcaa221f8->leave($__internal_86278c866068d449a941f2a5f01bb059f91384599f1cc5900b1cfcbbcaa221f8_prof);

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
