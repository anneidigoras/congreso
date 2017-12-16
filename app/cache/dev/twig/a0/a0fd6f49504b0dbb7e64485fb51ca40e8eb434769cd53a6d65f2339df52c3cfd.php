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
        $__internal_2ccee95fcffbbfa167b6fadf52a88e8a9ff99fd5fe3d1eabea9398261d7b3112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccee95fcffbbfa167b6fadf52a88e8a9ff99fd5fe3d1eabea9398261d7b3112->enter($__internal_2ccee95fcffbbfa167b6fadf52a88e8a9ff99fd5fe3d1eabea9398261d7b3112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ccee95fcffbbfa167b6fadf52a88e8a9ff99fd5fe3d1eabea9398261d7b3112->leave($__internal_2ccee95fcffbbfa167b6fadf52a88e8a9ff99fd5fe3d1eabea9398261d7b3112_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64ffc37da350efa141957d9baffa81dce3c4da1f3cedb834f9052bb54588d9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ffc37da350efa141957d9baffa81dce3c4da1f3cedb834f9052bb54588d9c8->enter($__internal_64ffc37da350efa141957d9baffa81dce3c4da1f3cedb834f9052bb54588d9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_64ffc37da350efa141957d9baffa81dce3c4da1f3cedb834f9052bb54588d9c8->leave($__internal_64ffc37da350efa141957d9baffa81dce3c4da1f3cedb834f9052bb54588d9c8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_129299748198ca674dcb8d047ca28949be496a2ee36d63450662dcecf540689a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129299748198ca674dcb8d047ca28949be496a2ee36d63450662dcecf540689a->enter($__internal_129299748198ca674dcb8d047ca28949be496a2ee36d63450662dcecf540689a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_129299748198ca674dcb8d047ca28949be496a2ee36d63450662dcecf540689a->leave($__internal_129299748198ca674dcb8d047ca28949be496a2ee36d63450662dcecf540689a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3026c6bf6766159c3b62b81a9b5924d68c9c4c2e36ca6f45a70152336db3e913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3026c6bf6766159c3b62b81a9b5924d68c9c4c2e36ca6f45a70152336db3e913->enter($__internal_3026c6bf6766159c3b62b81a9b5924d68c9c4c2e36ca6f45a70152336db3e913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3026c6bf6766159c3b62b81a9b5924d68c9c4c2e36ca6f45a70152336db3e913->leave($__internal_3026c6bf6766159c3b62b81a9b5924d68c9c4c2e36ca6f45a70152336db3e913_prof);

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
