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
        $__internal_65ddb06294a481964fd879bac71630497935970fbb3afdada172b830766d8eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ddb06294a481964fd879bac71630497935970fbb3afdada172b830766d8eea->enter($__internal_65ddb06294a481964fd879bac71630497935970fbb3afdada172b830766d8eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ddb06294a481964fd879bac71630497935970fbb3afdada172b830766d8eea->leave($__internal_65ddb06294a481964fd879bac71630497935970fbb3afdada172b830766d8eea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76c22ee79e2fb3e0aa4b6a53030b16556df7799ec4ba15470bd88b0c0d58111a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c22ee79e2fb3e0aa4b6a53030b16556df7799ec4ba15470bd88b0c0d58111a->enter($__internal_76c22ee79e2fb3e0aa4b6a53030b16556df7799ec4ba15470bd88b0c0d58111a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_76c22ee79e2fb3e0aa4b6a53030b16556df7799ec4ba15470bd88b0c0d58111a->leave($__internal_76c22ee79e2fb3e0aa4b6a53030b16556df7799ec4ba15470bd88b0c0d58111a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86c17f0d977cd9319f6cf4bb85738ff4d7c36050f18acb959dd0334e8c56f97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c17f0d977cd9319f6cf4bb85738ff4d7c36050f18acb959dd0334e8c56f97e->enter($__internal_86c17f0d977cd9319f6cf4bb85738ff4d7c36050f18acb959dd0334e8c56f97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86c17f0d977cd9319f6cf4bb85738ff4d7c36050f18acb959dd0334e8c56f97e->leave($__internal_86c17f0d977cd9319f6cf4bb85738ff4d7c36050f18acb959dd0334e8c56f97e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3767f3b5896fb47ed1e0cae471fc04a1d06d29b9c1f5865663953d3d003e9a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3767f3b5896fb47ed1e0cae471fc04a1d06d29b9c1f5865663953d3d003e9a4e->enter($__internal_3767f3b5896fb47ed1e0cae471fc04a1d06d29b9c1f5865663953d3d003e9a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3767f3b5896fb47ed1e0cae471fc04a1d06d29b9c1f5865663953d3d003e9a4e->leave($__internal_3767f3b5896fb47ed1e0cae471fc04a1d06d29b9c1f5865663953d3d003e9a4e_prof);

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
