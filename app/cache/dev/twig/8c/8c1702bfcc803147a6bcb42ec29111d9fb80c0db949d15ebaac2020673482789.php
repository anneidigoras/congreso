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
        $__internal_b7b23c0c79e29a140e652197ae34c5fb4810debd03b3b57712c614442ef50824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b23c0c79e29a140e652197ae34c5fb4810debd03b3b57712c614442ef50824->enter($__internal_b7b23c0c79e29a140e652197ae34c5fb4810debd03b3b57712c614442ef50824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b23c0c79e29a140e652197ae34c5fb4810debd03b3b57712c614442ef50824->leave($__internal_b7b23c0c79e29a140e652197ae34c5fb4810debd03b3b57712c614442ef50824_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd3d6d14d7736ec467cb09fc86736cb8eba5c2e0232dc1195321bcc5433c102f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3d6d14d7736ec467cb09fc86736cb8eba5c2e0232dc1195321bcc5433c102f->enter($__internal_cd3d6d14d7736ec467cb09fc86736cb8eba5c2e0232dc1195321bcc5433c102f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cd3d6d14d7736ec467cb09fc86736cb8eba5c2e0232dc1195321bcc5433c102f->leave($__internal_cd3d6d14d7736ec467cb09fc86736cb8eba5c2e0232dc1195321bcc5433c102f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ee399e171507b1f4a83147e4b78031c086e7b53ec9c434ba6b1de6eb955891a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee399e171507b1f4a83147e4b78031c086e7b53ec9c434ba6b1de6eb955891a->enter($__internal_3ee399e171507b1f4a83147e4b78031c086e7b53ec9c434ba6b1de6eb955891a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3ee399e171507b1f4a83147e4b78031c086e7b53ec9c434ba6b1de6eb955891a->leave($__internal_3ee399e171507b1f4a83147e4b78031c086e7b53ec9c434ba6b1de6eb955891a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eaead6fd0bbab4acd1fa66af954bcbcb8727daca6181e81c9efdc7b8c8d6540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaead6fd0bbab4acd1fa66af954bcbcb8727daca6181e81c9efdc7b8c8d6540->enter($__internal_5eaead6fd0bbab4acd1fa66af954bcbcb8727daca6181e81c9efdc7b8c8d6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5eaead6fd0bbab4acd1fa66af954bcbcb8727daca6181e81c9efdc7b8c8d6540->leave($__internal_5eaead6fd0bbab4acd1fa66af954bcbcb8727daca6181e81c9efdc7b8c8d6540_prof);

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
