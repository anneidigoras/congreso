<?php

/* base.html.twig */
class __TwigTemplate_3cba105d67f4c2f02b1e76bb3e485f667e2db6a3de45cb55569460e16ee8c034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e720b1f0849a94afe7f8f801957dc74348d0a26712bb78427d2555c4112f086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e720b1f0849a94afe7f8f801957dc74348d0a26712bb78427d2555c4112f086->enter($__internal_2e720b1f0849a94afe7f8f801957dc74348d0a26712bb78427d2555c4112f086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo " </a></h1>
            </div>
            <div>
            ";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 28
        echo "            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 43
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 44
        echo "
        </div>
        
        <!-- end #sidebar -->
        <div style=\"clear: both;\">&nbsp;</div>
    </div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Congreso Científico. Todos los derechos reservados. Diseño por <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>";
        
        $__internal_2e720b1f0849a94afe7f8f801957dc74348d0a26712bb78427d2555c4112f086->leave($__internal_2e720b1f0849a94afe7f8f801957dc74348d0a26712bb78427d2555c4112f086_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3277950d2bcc6eb6894a3317ab04f4525989d836e9d2b74dcdb00b065cdb54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3277950d2bcc6eb6894a3317ab04f4525989d836e9d2b74dcdb00b065cdb54e->enter($__internal_a3277950d2bcc6eb6894a3317ab04f4525989d836e9d2b74dcdb00b065cdb54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_a3277950d2bcc6eb6894a3317ab04f4525989d836e9d2b74dcdb00b065cdb54e->leave($__internal_a3277950d2bcc6eb6894a3317ab04f4525989d836e9d2b74dcdb00b065cdb54e_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1abe535abb6796c836740da7d92423a5b5338445af8f2dbf783a1f06039e53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1abe535abb6796c836740da7d92423a5b5338445af8f2dbf783a1f06039e53a->enter($__internal_e1abe535abb6796c836740da7d92423a5b5338445af8f2dbf783a1f06039e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_e1abe535abb6796c836740da7d92423a5b5338445af8f2dbf783a1f06039e53a->leave($__internal_e1abe535abb6796c836740da7d92423a5b5338445af8f2dbf783a1f06039e53a_prof);

    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9a8ea2e4ded310a099b21cc430a459aa6579623298dee7468b1024423eddbe06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8ea2e4ded310a099b21cc430a459aa6579623298dee7468b1024423eddbe06->enter($__internal_9a8ea2e4ded310a099b21cc430a459aa6579623298dee7468b1024423eddbe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        echo " 
                ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_admin_logout");
            echo "\">Salir</a></li>
                ";
        }
        // line 27
        echo "            ";
        
        $__internal_9a8ea2e4ded310a099b21cc430a459aa6579623298dee7468b1024423eddbe06->leave($__internal_9a8ea2e4ded310a099b21cc430a459aa6579623298dee7468b1024423eddbe06_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_22ea6f3f9d6941eb0f0d6453a0f2a5d5e52bb711f2f660f5ed88f36a4194f7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ea6f3f9d6941eb0f0d6453a0f2a5d5e52bb711f2f660f5ed88f36a4194f7fc->enter($__internal_22ea6f3f9d6941eb0f0d6453a0f2a5d5e52bb711f2f660f5ed88f36a4194f7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22ea6f3f9d6941eb0f0d6453a0f2a5d5e52bb711f2f660f5ed88f36a4194f7fc->leave($__internal_22ea6f3f9d6941eb0f0d6453a0f2a5d5e52bb711f2f660f5ed88f36a4194f7fc_prof);

    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2ec9ab6bc0ff6427a3c7fbe329c94da058f479374e1e3778eb379c54103b4417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec9ab6bc0ff6427a3c7fbe329c94da058f479374e1e3778eb379c54103b4417->enter($__internal_2ec9ab6bc0ff6427a3c7fbe329c94da058f479374e1e3778eb379c54103b4417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2ec9ab6bc0ff6427a3c7fbe329c94da058f479374e1e3778eb379c54103b4417->leave($__internal_2ec9ab6bc0ff6427a3c7fbe329c94da058f479374e1e3778eb379c54103b4417_prof);

    }

    // line 42
    public function block_linea($context, array $blocks = array())
    {
        $__internal_7061ba029e925017e223117c690dc0985790dfc7a9b6d499b75471f9321db8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7061ba029e925017e223117c690dc0985790dfc7a9b6d499b75471f9321db8cd->enter($__internal_7061ba029e925017e223117c690dc0985790dfc7a9b6d499b75471f9321db8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_7061ba029e925017e223117c690dc0985790dfc7a9b6d499b75471f9321db8cd->leave($__internal_7061ba029e925017e223117c690dc0985790dfc7a9b6d499b75471f9321db8cd_prof);

    }

    // line 43
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_10a8a5fbd42a32be830bf08bbab798c8671bc0e2d37d331835aa07858243f95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a8a5fbd42a32be830bf08bbab798c8671bc0e2d37d331835aa07858243f95c->enter($__internal_10a8a5fbd42a32be830bf08bbab798c8671bc0e2d37d331835aa07858243f95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_10a8a5fbd42a32be830bf08bbab798c8671bc0e2d37d331835aa07858243f95c->leave($__internal_10a8a5fbd42a32be830bf08bbab798c8671bc0e2d37d331835aa07858243f95c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 43,  180 => 42,  169 => 41,  158 => 37,  151 => 27,  145 => 25,  143 => 24,  135 => 23,  123 => 20,  114 => 11,  108 => 7,  102 => 6,  81 => 44,  78 => 43,  75 => 42,  73 => 41,  68 => 38,  66 => 37,  55 => 28,  53 => 23,  47 => 20,  38 => 13,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">{% block title %} {% endblock %} </a></h1>
            </div>
            <div>
            {% block navigation %} 
                {% if is_granted('ROLE_ADMIN') %}
                    <li><a href=\"{{ path('blogger_admin_logout')}}\">Salir</a></li>
                {% endif %}
            {% endblock %}
            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            {% block sidebar %}{% endblock %}
            {% block linea %}{% endblock %}
            {% block sidebar1 %}{% endblock %}

        </div>
        
        <!-- end #sidebar -->
        <div style=\"clear: both;\">&nbsp;</div>
    </div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Congreso Científico. Todos los derechos reservados. Diseño por <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
