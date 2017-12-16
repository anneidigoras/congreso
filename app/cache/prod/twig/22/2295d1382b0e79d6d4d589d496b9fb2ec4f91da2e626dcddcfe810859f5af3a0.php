<?php

/* CongresoAdminBundle:Security:login.html.twig */
class __TwigTemplate_854a1fe7efafadddc6c9f82af9bfd6659caaed6d1cd3d849e304910d36bb76bc extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Login
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if (($context["error"] ?? null)) {
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" />

\t<label for=\"password\">Contraseña:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t<button type=\"submit\">Entrar</button>
</form>
";
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
        return array (  59 => 18,  54 => 16,  51 => 15,  45 => 11,  43 => 10,  40 => 9,  37 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CongresoAdminBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
