<?php

/* CongresoAdminBundle:Security:login.html.twig */
class __TwigTemplate_d9e585a612b4866f7d2e54f6c4e07946ad7596c7b918e788d02bd1158bebcdc9 extends Twig_Template
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
        $__internal_e7f057916aa481f38284e2656e921910be7c6117d98db732a3442c100f15e447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f057916aa481f38284e2656e921910be7c6117d98db732a3442c100f15e447->enter($__internal_e7f057916aa481f38284e2656e921910be7c6117d98db732a3442c100f15e447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Security:login.html.twig"));

        // line 2
        echo "
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_admin_login_check");
        echo "\" method=\"post\"  class=\"login\">
\t<label for=\"username\">Usuario:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t<label for=\"password\">Contrase�a:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t<button type=\"submit\">Entrar</button>
</form>
";
        
        $__internal_e7f057916aa481f38284e2656e921910be7c6117d98db732a3442c100f15e447->leave($__internal_e7f057916aa481f38284e2656e921910be7c6117d98db732a3442c100f15e447_prof);

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
        return array (  46 => 11,  41 => 9,  38 => 8,  32 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/AdminBundle/Resources/views/Security/login.html.twig #}

<link href=\"{{ asset('css/admin.css') }}\" type=\"text/css\" rel=\"stylesheet\" />

{% if error %}
\t<div>{{ error.message }}</div>
{% endif %}

<form action=\"{{ path('blogger_admin_login_check') }}\" method=\"post\"  class=\"login\">
\t<label for=\"username\">Usuario:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

\t<label for=\"password\">Contrase�a:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t<button type=\"submit\">Entrar</button>
</form>
", "CongresoAdminBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle/Resources/views/Security/login.html.twig");
    }
}
