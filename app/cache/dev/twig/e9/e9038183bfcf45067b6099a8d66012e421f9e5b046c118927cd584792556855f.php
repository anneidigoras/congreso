<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_4af2c84946bbe902ee950e1d35ea43d5a15c145e19a83f17dd31f938a0e2a0e5 extends Twig_Template
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
        $__internal_466f44c20d4d652bbe85b790724f04667d47fac2b0b30b1aaaddf2cb850bbfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466f44c20d4d652bbe85b790724f04667d47fac2b0b30b1aaaddf2cb850bbfeb->enter($__internal_466f44c20d4d652bbe85b790724f04667d47fac2b0b30b1aaaddf2cb850bbfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_466f44c20d4d652bbe85b790724f04667d47fac2b0b30b1aaaddf2cb850bbfeb->leave($__internal_466f44c20d4d652bbe85b790724f04667d47fac2b0b30b1aaaddf2cb850bbfeb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_datetime.html.twig");
    }
}
