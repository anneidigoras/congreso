<?php

/* CongresoAdminBundle:Security:login.html.twig */
class __TwigTemplate_8adb414623ab5a9939a2149abdd81476b791ad371c06eaef3e06f822281f5196 extends Twig_Template
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
        $__internal_7a61f961ff2a0f0c82b15a21f07d45285ffee4873bd90bce9909cdeba11f4d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a61f961ff2a0f0c82b15a21f07d45285ffee4873bd90bce9909cdeba11f4d53->enter($__internal_7a61f961ff2a0f0c82b15a21f07d45285ffee4873bd90bce9909cdeba11f4d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a61f961ff2a0f0c82b15a21f07d45285ffee4873bd90bce9909cdeba11f4d53->leave($__internal_7a61f961ff2a0f0c82b15a21f07d45285ffee4873bd90bce9909cdeba11f4d53_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b149665ba1d79153a136aa005a711b725093bcc6cc1779f875be0b5056ddee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b149665ba1d79153a136aa005a711b725093bcc6cc1779f875be0b5056ddee3->enter($__internal_3b149665ba1d79153a136aa005a711b725093bcc6cc1779f875be0b5056ddee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b149665ba1d79153a136aa005a711b725093bcc6cc1779f875be0b5056ddee3->leave($__internal_3b149665ba1d79153a136aa005a711b725093bcc6cc1779f875be0b5056ddee3_prof);

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
{% endblock %}", "CongresoAdminBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
