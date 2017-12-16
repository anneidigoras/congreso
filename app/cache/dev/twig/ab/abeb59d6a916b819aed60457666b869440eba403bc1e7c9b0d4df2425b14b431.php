<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_16235b656c47a2b41ddca500bf29c047879d8a16c44619d5e34a7cffc3042586 extends Twig_Template
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
        $__internal_7715bee91c3d8a2670dc0525c7c13399508d0d4a9821f94d403d83a7dd4a1f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7715bee91c3d8a2670dc0525c7c13399508d0d4a9821f94d403d83a7dd4a1f7c->enter($__internal_7715bee91c3d8a2670dc0525c7c13399508d0d4a9821f94d403d83a7dd4a1f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_7715bee91c3d8a2670dc0525c7c13399508d0d4a9821f94d403d83a7dd4a1f7c->leave($__internal_7715bee91c3d8a2670dc0525c7c13399508d0d4a9821f94d403d83a7dd4a1f7c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_date.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_date.html.twig");
    }
}
