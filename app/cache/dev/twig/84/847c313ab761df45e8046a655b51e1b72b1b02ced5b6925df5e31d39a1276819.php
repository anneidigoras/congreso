<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_7229f48a065044c3948218a1c344f49ee7255989bd7151ac721773190b01bb2a extends Twig_Template
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
        $__internal_0c2bdb985dddb3e3e9685a790d73e24e828f1a659319a21c3f266d0167269a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2bdb985dddb3e3e9685a790d73e24e828f1a659319a21c3f266d0167269a1e->enter($__internal_0c2bdb985dddb3e3e9685a790d73e24e828f1a659319a21c3f266d0167269a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_0c2bdb985dddb3e3e9685a790d73e24e828f1a659319a21c3f266d0167269a1e->leave($__internal_0c2bdb985dddb3e3e9685a790d73e24e828f1a659319a21c3f266d0167269a1e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_date.html.twig");
    }
}
