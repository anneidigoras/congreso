<?php

/* @CongresoAdmin/Security/login.html.twig */
class __TwigTemplate_a9df62885ad236660d5603ab8e5aca6a4c04c587d81b89a850d1b200b914ab96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@CongresoAdmin/Security/login.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c36b2e84d1c19d70a3b45b26aae2fab15406e2a336bcd26d5e4d0dafa137f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c36b2e84d1c19d70a3b45b26aae2fab15406e2a336bcd26d5e4d0dafa137f7a->enter($__internal_6c36b2e84d1c19d70a3b45b26aae2fab15406e2a336bcd26d5e4d0dafa137f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoAdmin/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c36b2e84d1c19d70a3b45b26aae2fab15406e2a336bcd26d5e4d0dafa137f7a->leave($__internal_6c36b2e84d1c19d70a3b45b26aae2fab15406e2a336bcd26d5e4d0dafa137f7a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcf075557787bd45c2649cc20b8212cec9304870afcdfb3d5f63616e0aa138dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf075557787bd45c2649cc20b8212cec9304870afcdfb3d5f63616e0aa138dc->enter($__internal_fcf075557787bd45c2649cc20b8212cec9304870afcdfb3d5f63616e0aa138dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "\t<script>
    alert(\"Usuario o contraseña erróneas\");
\t</script>
";
        }
        // line 11
        echo "
<form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login_check");
        echo "\" method=\"post\"  class=\"login\">
\t<label for=\"username\">Usuario:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t<label for=\"password\">Contraseña:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t<button type=\"submit\">Entrar</button>
</form>
";
        
        $__internal_fcf075557787bd45c2649cc20b8212cec9304870afcdfb3d5f63616e0aa138dc->leave($__internal_fcf075557787bd45c2649cc20b8212cec9304870afcdfb3d5f63616e0aa138dc_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoAdmin/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  54 => 12,  51 => 11,  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/AdminBundle/Resources/views/Security/login.html.twig #}
{% extends '::base.html.twig' %}

{% block body %}

{% if error %}
\t<script>
    alert(\"Usuario o contraseña erróneas\");
\t</script>
{% endif %}

<form action=\"{{ path('congreso_admin_login_check') }}\" method=\"post\"  class=\"login\">
\t<label for=\"username\">Usuario:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

\t<label for=\"password\">Contraseña:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t<button type=\"submit\">Entrar</button>
</form>
{% endblock %}", "@CongresoAdmin/Security/login.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
