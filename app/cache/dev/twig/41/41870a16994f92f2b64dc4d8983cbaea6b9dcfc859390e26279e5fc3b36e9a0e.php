<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edd653923438e67d6eaa61d5840b114fd8b3e8b30fe59da261433bc94772d5be extends Twig_Template
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
        $__internal_fb8c99972aa237b1b2d00fc7056f0b4a40c4aa308ff0797953f71cf1b7de4c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8c99972aa237b1b2d00fc7056f0b4a40c4aa308ff0797953f71cf1b7de4c16->enter($__internal_fb8c99972aa237b1b2d00fc7056f0b4a40c4aa308ff0797953f71cf1b7de4c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8c99972aa237b1b2d00fc7056f0b4a40c4aa308ff0797953f71cf1b7de4c16->leave($__internal_fb8c99972aa237b1b2d00fc7056f0b4a40c4aa308ff0797953f71cf1b7de4c16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e14aea20a7361fe35aba8c218eed118f13bae8c114bc0154db5e37cbc6828f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14aea20a7361fe35aba8c218eed118f13bae8c114bc0154db5e37cbc6828f34->enter($__internal_e14aea20a7361fe35aba8c218eed118f13bae8c114bc0154db5e37cbc6828f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e14aea20a7361fe35aba8c218eed118f13bae8c114bc0154db5e37cbc6828f34->leave($__internal_e14aea20a7361fe35aba8c218eed118f13bae8c114bc0154db5e37cbc6828f34_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a854c69585de77238bd21dceaa9cf814351baa46563ae029e9d0cda85553b42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a854c69585de77238bd21dceaa9cf814351baa46563ae029e9d0cda85553b42a->enter($__internal_a854c69585de77238bd21dceaa9cf814351baa46563ae029e9d0cda85553b42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a854c69585de77238bd21dceaa9cf814351baa46563ae029e9d0cda85553b42a->leave($__internal_a854c69585de77238bd21dceaa9cf814351baa46563ae029e9d0cda85553b42a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4860363bf05f92f0d38da536bb974e0a0de9792428c7358ad10571340c185a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4860363bf05f92f0d38da536bb974e0a0de9792428c7358ad10571340c185a59->enter($__internal_4860363bf05f92f0d38da536bb974e0a0de9792428c7358ad10571340c185a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4860363bf05f92f0d38da536bb974e0a0de9792428c7358ad10571340c185a59->leave($__internal_4860363bf05f92f0d38da536bb974e0a0de9792428c7358ad10571340c185a59_prof);

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
