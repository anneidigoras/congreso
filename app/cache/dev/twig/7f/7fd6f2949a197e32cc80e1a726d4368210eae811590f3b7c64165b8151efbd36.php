<?php

/* CongresoAdminBundle:Security:login.html.twig */
class __TwigTemplate_d9e585a612b4866f7d2e54f6c4e07946ad7596c7b918e788d02bd1158bebcdc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CongresoAdminBundle:Security:login.html.twig", 2);
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
        $__internal_5670e04fefdea9f66aeb80d10372e561e03adee44a4b81750dfa6585df3b4387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5670e04fefdea9f66aeb80d10372e561e03adee44a4b81750dfa6585df3b4387->enter($__internal_5670e04fefdea9f66aeb80d10372e561e03adee44a4b81750dfa6585df3b4387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5670e04fefdea9f66aeb80d10372e561e03adee44a4b81750dfa6585df3b4387->leave($__internal_5670e04fefdea9f66aeb80d10372e561e03adee44a4b81750dfa6585df3b4387_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_68dde3a2490c39cd11c95246ed51d201c29e501909fe7743e9645ba4274f0a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dde3a2490c39cd11c95246ed51d201c29e501909fe7743e9645ba4274f0a13->enter($__internal_68dde3a2490c39cd11c95246ed51d201c29e501909fe7743e9645ba4274f0a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_68dde3a2490c39cd11c95246ed51d201c29e501909fe7743e9645ba4274f0a13->leave($__internal_68dde3a2490c39cd11c95246ed51d201c29e501909fe7743e9645ba4274f0a13_prof);

    }

    public function getTemplateName()
    {
        return "CongresoAdminBundle:Security:login.html.twig";
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
{% endblock %}", "CongresoAdminBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle/Resources/views/Security/login.html.twig");
    }
}
