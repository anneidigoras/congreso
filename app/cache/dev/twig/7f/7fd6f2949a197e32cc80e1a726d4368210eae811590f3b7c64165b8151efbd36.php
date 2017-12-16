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
        $__internal_89704a06725ed12f26b0190742a839103237cea2ac04bdf186aeadd4abef2b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89704a06725ed12f26b0190742a839103237cea2ac04bdf186aeadd4abef2b01->enter($__internal_89704a06725ed12f26b0190742a839103237cea2ac04bdf186aeadd4abef2b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89704a06725ed12f26b0190742a839103237cea2ac04bdf186aeadd4abef2b01->leave($__internal_89704a06725ed12f26b0190742a839103237cea2ac04bdf186aeadd4abef2b01_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f508b801016b693ef94ea5eaac490c83c45c0ad6f0ba00c3eb3dbbcdddb9f1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f508b801016b693ef94ea5eaac490c83c45c0ad6f0ba00c3eb3dbbcdddb9f1ed->enter($__internal_f508b801016b693ef94ea5eaac490c83c45c0ad6f0ba00c3eb3dbbcdddb9f1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Login
";
        
        $__internal_f508b801016b693ef94ea5eaac490c83c45c0ad6f0ba00c3eb3dbbcdddb9f1ed->leave($__internal_f508b801016b693ef94ea5eaac490c83c45c0ad6f0ba00c3eb3dbbcdddb9f1ed_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a1898119c68f7fffd187cc5c99a5e6e91f7e38f1b3875048f8c7b9374a88fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1898119c68f7fffd187cc5c99a5e6e91f7e38f1b3875048f8c7b9374a88fe4->enter($__internal_7a1898119c68f7fffd187cc5c99a5e6e91f7e38f1b3875048f8c7b9374a88fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a1898119c68f7fffd187cc5c99a5e6e91f7e38f1b3875048f8c7b9374a88fe4->leave($__internal_7a1898119c68f7fffd187cc5c99a5e6e91f7e38f1b3875048f8c7b9374a88fe4_prof);

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
