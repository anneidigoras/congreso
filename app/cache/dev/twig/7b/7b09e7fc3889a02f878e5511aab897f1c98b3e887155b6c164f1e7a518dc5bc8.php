<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_89d10368f3137978e65e3efa22faa66577d0fbe54c39e7f87183029a5fc8bf2f extends Twig_Template
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
        $__internal_baceb77ce957cd16560eb3ab6ff3deb1940f6328e77cf2d436fad6dc3604684a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baceb77ce957cd16560eb3ab6ff3deb1940f6328e77cf2d436fad6dc3604684a->enter($__internal_baceb77ce957cd16560eb3ab6ff3deb1940f6328e77cf2d436fad6dc3604684a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_baceb77ce957cd16560eb3ab6ff3deb1940f6328e77cf2d436fad6dc3604684a->leave($__internal_baceb77ce957cd16560eb3ab6ff3deb1940f6328e77cf2d436fad6dc3604684a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_string.html.twig");
    }
}
