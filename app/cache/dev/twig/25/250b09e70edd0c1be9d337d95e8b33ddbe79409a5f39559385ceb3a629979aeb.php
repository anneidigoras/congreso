<?php

/* @EasyAdmin/default/field_tel.html.twig */
class __TwigTemplate_87a0791742a881ffa5fe910f0b1b5d98cb2236d593d49b63b2c1c4122aeb9161 extends Twig_Template
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
        $__internal_cacae58b8719d470d0d89719e90ea16685f0cd84e00f088b89a1a3ffd515c09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cacae58b8719d470d0d89719e90ea16685f0cd84e00f088b89a1a3ffd515c09d->enter($__internal_cacae58b8719d470d0d89719e90ea16685f0cd84e00f088b89a1a3ffd515c09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_cacae58b8719d470d0d89719e90ea16685f0cd84e00f088b89a1a3ffd515c09d->leave($__internal_cacae58b8719d470d0d89719e90ea16685f0cd84e00f088b89a1a3ffd515c09d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "@EasyAdmin/default/field_tel.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_tel.html.twig");
    }
}
