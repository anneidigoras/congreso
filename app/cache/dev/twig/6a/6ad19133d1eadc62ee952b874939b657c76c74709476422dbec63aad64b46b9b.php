<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_909063d74ddf23fa1478641f11a3395718c5cf69e78c716fa6a567a20787cd74 extends Twig_Template
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
        $__internal_ec048e025dc2d0edf25dddaa8e93f063f31b19130f8a9d44d2ab789a3d579902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec048e025dc2d0edf25dddaa8e93f063f31b19130f8a9d44d2ab789a3d579902->enter($__internal_ec048e025dc2d0edf25dddaa8e93f063f31b19130f8a9d44d2ab789a3d579902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_ec048e025dc2d0edf25dddaa8e93f063f31b19130f8a9d44d2ab789a3d579902->leave($__internal_ec048e025dc2d0edf25dddaa8e93f063f31b19130f8a9d44d2ab789a3d579902_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_id.html.twig");
    }
}
