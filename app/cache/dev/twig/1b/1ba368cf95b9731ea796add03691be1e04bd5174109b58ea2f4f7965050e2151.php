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
            'javascripts' => array($this, 'block_javascripts'),
            'navigation' => array($this, 'block_navigation'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'tabla' => array($this, 'block_tabla'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13819e74873595b6d42c377ffdbd813a61bab5b6c26ef08015d7af58f38687ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13819e74873595b6d42c377ffdbd813a61bab5b6c26ef08015d7af58f38687ca->enter($__internal_13819e74873595b6d42c377ffdbd813a61bab5b6c26ef08015d7af58f38687ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 33
        echo "                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        echo "</a></h1>
            </header>
        <div id=\"wrapper\">
    
        
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 48
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 53
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 54
        echo "        </div>
        
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
        
        $__internal_13819e74873595b6d42c377ffdbd813a61bab5b6c26ef08015d7af58f38687ca->leave($__internal_13819e74873595b6d42c377ffdbd813a61bab5b6c26ef08015d7af58f38687ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c66fb001157cdcd0567a8e52ab41990a5574c6107f8fa3386a46d2294c632f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c66fb001157cdcd0567a8e52ab41990a5574c6107f8fa3386a46d2294c632f8->enter($__internal_8c66fb001157cdcd0567a8e52ab41990a5574c6107f8fa3386a46d2294c632f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_8c66fb001157cdcd0567a8e52ab41990a5574c6107f8fa3386a46d2294c632f8->leave($__internal_8c66fb001157cdcd0567a8e52ab41990a5574c6107f8fa3386a46d2294c632f8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77d7899295cd9ed10c53193b576bc9e65854a2dcf6ac13acc70e429f96f42898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d7899295cd9ed10c53193b576bc9e65854a2dcf6ac13acc70e429f96f42898->enter($__internal_77d7899295cd9ed10c53193b576bc9e65854a2dcf6ac13acc70e429f96f42898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_77d7899295cd9ed10c53193b576bc9e65854a2dcf6ac13acc70e429f96f42898->leave($__internal_77d7899295cd9ed10c53193b576bc9e65854a2dcf6ac13acc70e429f96f42898_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_407707f90c373087fa620df74f381cdedb60e325c6b62f1afbef49202d0bef48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407707f90c373087fa620df74f381cdedb60e325c6b62f1afbef49202d0bef48->enter($__internal_407707f90c373087fa620df74f381cdedb60e325c6b62f1afbef49202d0bef48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 21
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_list");
        echo "\">Inicio</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_contact");
        echo "\">Contacto</a></li>
                                ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a></li>
                                ";
        } else {
            // line 28
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a></li>
                                ";
        }
        // line 30
        echo "                            </ul>
                        </nav>
                    ";
        
        $__internal_407707f90c373087fa620df74f381cdedb60e325c6b62f1afbef49202d0bef48->leave($__internal_407707f90c373087fa620df74f381cdedb60e325c6b62f1afbef49202d0bef48_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_520e272f2b11c6bff09b260025fa092b49a7be23bd75135a70d0e73baff3d671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520e272f2b11c6bff09b260025fa092b49a7be23bd75135a70d0e73baff3d671->enter($__internal_520e272f2b11c6bff09b260025fa092b49a7be23bd75135a70d0e73baff3d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_520e272f2b11c6bff09b260025fa092b49a7be23bd75135a70d0e73baff3d671->leave($__internal_520e272f2b11c6bff09b260025fa092b49a7be23bd75135a70d0e73baff3d671_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_a50b0f62b2311262405816fd351f977f274c546c9efc6e2bc0e1b62998850ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50b0f62b2311262405816fd351f977f274c546c9efc6e2bc0e1b62998850ec7->enter($__internal_a50b0f62b2311262405816fd351f977f274c546c9efc6e2bc0e1b62998850ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a50b0f62b2311262405816fd351f977f274c546c9efc6e2bc0e1b62998850ec7->leave($__internal_a50b0f62b2311262405816fd351f977f274c546c9efc6e2bc0e1b62998850ec7_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_e7dc619d531ca807b1392a487c0c0d9c58a683474530a704a1e1ae3246b583ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dc619d531ca807b1392a487c0c0d9c58a683474530a704a1e1ae3246b583ab->enter($__internal_e7dc619d531ca807b1392a487c0c0d9c58a683474530a704a1e1ae3246b583ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_e7dc619d531ca807b1392a487c0c0d9c58a683474530a704a1e1ae3246b583ab->leave($__internal_e7dc619d531ca807b1392a487c0c0d9c58a683474530a704a1e1ae3246b583ab_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_069b99be3a54f9ae11f209b28eb72181ba239322c909d751fc963f36b2ede23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069b99be3a54f9ae11f209b28eb72181ba239322c909d751fc963f36b2ede23d->enter($__internal_069b99be3a54f9ae11f209b28eb72181ba239322c909d751fc963f36b2ede23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_069b99be3a54f9ae11f209b28eb72181ba239322c909d751fc963f36b2ede23d->leave($__internal_069b99be3a54f9ae11f209b28eb72181ba239322c909d751fc963f36b2ede23d_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_89601f5f42d4b00b74821151fac580aaa219027f519172bf1e1ea15416c3be3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89601f5f42d4b00b74821151fac580aaa219027f519172bf1e1ea15416c3be3a->enter($__internal_89601f5f42d4b00b74821151fac580aaa219027f519172bf1e1ea15416c3be3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_89601f5f42d4b00b74821151fac580aaa219027f519172bf1e1ea15416c3be3a->leave($__internal_89601f5f42d4b00b74821151fac580aaa219027f519172bf1e1ea15416c3be3a_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_827cf0b4ecaf8a889bc9bc948e944a56e4c9d44243c190df1438a0a1c4933f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827cf0b4ecaf8a889bc9bc948e944a56e4c9d44243c190df1438a0a1c4933f58->enter($__internal_827cf0b4ecaf8a889bc9bc948e944a56e4c9d44243c190df1438a0a1c4933f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_827cf0b4ecaf8a889bc9bc948e944a56e4c9d44243c190df1438a0a1c4933f58->leave($__internal_827cf0b4ecaf8a889bc9bc948e944a56e4c9d44243c190df1438a0a1c4933f58_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 53,  227 => 52,  216 => 51,  205 => 47,  194 => 46,  183 => 34,  174 => 30,  168 => 28,  162 => 26,  160 => 25,  156 => 24,  152 => 23,  148 => 21,  142 => 20,  134 => 14,  128 => 13,  119 => 11,  113 => 7,  107 => 6,  87 => 54,  84 => 53,  81 => 52,  79 => 51,  74 => 48,  71 => 47,  69 => 46,  54 => 34,  51 => 33,  49 => 20,  43 => 16,  40 => 13,  38 => 6,  31 => 1,);
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
            <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        {% block javascripts %}
            
        {% endblock %}
    </head>
    <body>
        <header id=\"header\">
                <div class=\"top\">
                    {% block navigation %}
                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"{{ path('congreso_congreso_list')}}\">Inicio</a></li>
                                <li><a href=\"{{ path('congreso_congreso_contact')}}\">Contacto</a></li>
                                {% if is_granted('ROLE_ADMIN')%}
                                    <li><a href=\"{{ path('congreso_admin_logout')}}\">Salir</a></li>
                                {% else %}
                                    <li><a href=\"{{ path('congreso_admin_login')}}\">Entrar</a></li>
                                {% endif %}
                            </ul>
                        </nav>
                    {% endblock %}
                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">{% block title %}{% endblock %}</a></h1>
            </header>
        <div id=\"wrapper\">
    
        
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            {% block body %}{% endblock %}
            {% block tabla %}{% endblock %}
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
