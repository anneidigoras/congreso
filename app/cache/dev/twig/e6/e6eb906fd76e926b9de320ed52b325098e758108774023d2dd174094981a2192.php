<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e1163265a3bf40af6971e462723151fd28bfec97ef3de3944b22b9b63dbf1c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd90dd3418ad61897ddd304bc828bfbf7d2bc42e9dd8bb1265cfe565ee71115d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd90dd3418ad61897ddd304bc828bfbf7d2bc42e9dd8bb1265cfe565ee71115d->enter($__internal_dd90dd3418ad61897ddd304bc828bfbf7d2bc42e9dd8bb1265cfe565ee71115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_dd90dd3418ad61897ddd304bc828bfbf7d2bc42e9dd8bb1265cfe565ee71115d->leave($__internal_dd90dd3418ad61897ddd304bc828bfbf7d2bc42e9dd8bb1265cfe565ee71115d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
