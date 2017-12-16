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
        $__internal_b49f560e67f11f38ed3c00047f5485689dcd4a85fba7eb616c6e4c4f3889fda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49f560e67f11f38ed3c00047f5485689dcd4a85fba7eb616c6e4c4f3889fda2->enter($__internal_b49f560e67f11f38ed3c00047f5485689dcd4a85fba7eb616c6e4c4f3889fda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoAdmin/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b49f560e67f11f38ed3c00047f5485689dcd4a85fba7eb616c6e4c4f3889fda2->leave($__internal_b49f560e67f11f38ed3c00047f5485689dcd4a85fba7eb616c6e4c4f3889fda2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eabe02012434d94764bd87a68f0866478b6c7fa49f6f65eed166f8ad93ecf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eabe02012434d94764bd87a68f0866478b6c7fa49f6f65eed166f8ad93ecf48->enter($__internal_7eabe02012434d94764bd87a68f0866478b6c7fa49f6f65eed166f8ad93ecf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Login
";
        
        $__internal_7eabe02012434d94764bd87a68f0866478b6c7fa49f6f65eed166f8ad93ecf48->leave($__internal_7eabe02012434d94764bd87a68f0866478b6c7fa49f6f65eed166f8ad93ecf48_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ecdfca06443cf211a88e78bbce0acb2d197bcc367b0ec104ee4f6e35bdc803a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecdfca06443cf211a88e78bbce0acb2d197bcc367b0ec104ee4f6e35bdc803a->enter($__internal_5ecdfca06443cf211a88e78bbce0acb2d197bcc367b0ec104ee4f6e35bdc803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ecdfca06443cf211a88e78bbce0acb2d197bcc367b0ec104ee4f6e35bdc803a->leave($__internal_5ecdfca06443cf211a88e78bbce0acb2d197bcc367b0ec104ee4f6e35bdc803a_prof);

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
{% endblock %}", "@CongresoAdmin/Security/login.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
