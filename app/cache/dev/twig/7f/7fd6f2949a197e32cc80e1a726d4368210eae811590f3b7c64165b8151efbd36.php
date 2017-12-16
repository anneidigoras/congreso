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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38e2d4956815f486d1e8fdacdaa1477f7daa10fb19f7009f520fb0f02445ebf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e2d4956815f486d1e8fdacdaa1477f7daa10fb19f7009f520fb0f02445ebf7->enter($__internal_38e2d4956815f486d1e8fdacdaa1477f7daa10fb19f7009f520fb0f02445ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e2d4956815f486d1e8fdacdaa1477f7daa10fb19f7009f520fb0f02445ebf7->leave($__internal_38e2d4956815f486d1e8fdacdaa1477f7daa10fb19f7009f520fb0f02445ebf7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cf3e55ff8e4fe3d7249eb90fcde6ad24e7389d4e7b340efbfa15640c212db9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf3e55ff8e4fe3d7249eb90fcde6ad24e7389d4e7b340efbfa15640c212db9e->enter($__internal_4cf3e55ff8e4fe3d7249eb90fcde6ad24e7389d4e7b340efbfa15640c212db9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Login
";
        
        $__internal_4cf3e55ff8e4fe3d7249eb90fcde6ad24e7389d4e7b340efbfa15640c212db9e->leave($__internal_4cf3e55ff8e4fe3d7249eb90fcde6ad24e7389d4e7b340efbfa15640c212db9e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_167d000ed13a8e684dd7f0f08f56711dde001e47918249d33b5c32faaf7182d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167d000ed13a8e684dd7f0f08f56711dde001e47918249d33b5c32faaf7182d1->enter($__internal_167d000ed13a8e684dd7f0f08f56711dde001e47918249d33b5c32faaf7182d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
";
        // line 10
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 11
            echo "\t<script>
    alert(\"Usuario o contraseña erróneas\");
\t</script>
";
        }
        // line 15
        echo "
<form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login_check");
        echo "\" method=\"post\"  class=\"login\">
\t<label for=\"username\">Usuario:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t<label for=\"password\">Contraseña:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t<button type=\"submit\">Entrar</button>
</form>
";
        
        $__internal_167d000ed13a8e684dd7f0f08f56711dde001e47918249d33b5c32faaf7182d1->leave($__internal_167d000ed13a8e684dd7f0f08f56711dde001e47918249d33b5c32faaf7182d1_prof);

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
        return array (  74 => 18,  69 => 16,  66 => 15,  60 => 11,  58 => 10,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 2,);
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

{% block title %}
Login
{% endblock %}

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
