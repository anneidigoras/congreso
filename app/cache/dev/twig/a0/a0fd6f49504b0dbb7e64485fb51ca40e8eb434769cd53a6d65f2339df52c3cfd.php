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
        $__internal_b78fe40f2832a5db24074a576349690264ef7bf7efc3d354ac7c4142983ce266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78fe40f2832a5db24074a576349690264ef7bf7efc3d354ac7c4142983ce266->enter($__internal_b78fe40f2832a5db24074a576349690264ef7bf7efc3d354ac7c4142983ce266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b78fe40f2832a5db24074a576349690264ef7bf7efc3d354ac7c4142983ce266->leave($__internal_b78fe40f2832a5db24074a576349690264ef7bf7efc3d354ac7c4142983ce266_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac1b81b07f7a23df88dec4add14b5bf3cf367cabb8c0b46313cc5011cd7330ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1b81b07f7a23df88dec4add14b5bf3cf367cabb8c0b46313cc5011cd7330ae->enter($__internal_ac1b81b07f7a23df88dec4add14b5bf3cf367cabb8c0b46313cc5011cd7330ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ac1b81b07f7a23df88dec4add14b5bf3cf367cabb8c0b46313cc5011cd7330ae->leave($__internal_ac1b81b07f7a23df88dec4add14b5bf3cf367cabb8c0b46313cc5011cd7330ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a6cecb8c1da5ddf4ee5ec24f91b63ba1a974c63f48985276cc25f5c2b3f4b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6cecb8c1da5ddf4ee5ec24f91b63ba1a974c63f48985276cc25f5c2b3f4b46->enter($__internal_3a6cecb8c1da5ddf4ee5ec24f91b63ba1a974c63f48985276cc25f5c2b3f4b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a6cecb8c1da5ddf4ee5ec24f91b63ba1a974c63f48985276cc25f5c2b3f4b46->leave($__internal_3a6cecb8c1da5ddf4ee5ec24f91b63ba1a974c63f48985276cc25f5c2b3f4b46_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2459024e116dc9864447c11f60d6ec18552d20a7a6a84947304e0be2fa21479a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2459024e116dc9864447c11f60d6ec18552d20a7a6a84947304e0be2fa21479a->enter($__internal_2459024e116dc9864447c11f60d6ec18552d20a7a6a84947304e0be2fa21479a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2459024e116dc9864447c11f60d6ec18552d20a7a6a84947304e0be2fa21479a->leave($__internal_2459024e116dc9864447c11f60d6ec18552d20a7a6a84947304e0be2fa21479a_prof);

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
