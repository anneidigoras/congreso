<?php

/* ::base.html.twig */
class __TwigTemplate_667bd328f123b816040981999141982f6cbf19b0d2ea556d84210f86e4c44f68 extends Twig_Template
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
        $__internal_127168d64237b4f947cdd4e680d3b486cca43ff4b46260aebcc752621a2c4ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127168d64237b4f947cdd4e680d3b486cca43ff4b46260aebcc752621a2c4ec7->enter($__internal_127168d64237b4f947cdd4e680d3b486cca43ff4b46260aebcc752621a2c4ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 36
        echo "                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">";
        // line 37
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
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 51
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 55
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 56
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 57
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
        
        $__internal_127168d64237b4f947cdd4e680d3b486cca43ff4b46260aebcc752621a2c4ec7->leave($__internal_127168d64237b4f947cdd4e680d3b486cca43ff4b46260aebcc752621a2c4ec7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3ca6d2fca88aa642eafc5624c50c2f8280f970e019eab89e229ed57b75116d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ca6d2fca88aa642eafc5624c50c2f8280f970e019eab89e229ed57b75116d9->enter($__internal_d3ca6d2fca88aa642eafc5624c50c2f8280f970e019eab89e229ed57b75116d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d3ca6d2fca88aa642eafc5624c50c2f8280f970e019eab89e229ed57b75116d9->leave($__internal_d3ca6d2fca88aa642eafc5624c50c2f8280f970e019eab89e229ed57b75116d9_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62e3abb94b0458a03835d68ae7e1c284cb55148601f58dece798a23aae4b597d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e3abb94b0458a03835d68ae7e1c284cb55148601f58dece798a23aae4b597d->enter($__internal_62e3abb94b0458a03835d68ae7e1c284cb55148601f58dece798a23aae4b597d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_62e3abb94b0458a03835d68ae7e1c284cb55148601f58dece798a23aae4b597d->leave($__internal_62e3abb94b0458a03835d68ae7e1c284cb55148601f58dece798a23aae4b597d_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e7e7ba7dffe5b84464e2785ec278239a5fd4855231efe53d6a9a0a498cbb5ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e7ba7dffe5b84464e2785ec278239a5fd4855231efe53d6a9a0a498cbb5ad9->enter($__internal_e7e7ba7dffe5b84464e2785ec278239a5fd4855231efe53d6a9a0a498cbb5ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 21
        echo "                        <nav>
                            <ul class=\"navigation\">
                                ";
        // line 23
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 24
            echo "                                    <li>Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</li>
                                ";
        }
        // line 26
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_list");
        echo "\">Inicio</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_contact");
        echo "\">Contacto</a></li>
                                ";
        // line 28
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 29
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a></li>
                                ";
        } else {
            // line 31
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a></li>
                                ";
        }
        // line 33
        echo "                            </ul>
                        </nav>
                    ";
        
        $__internal_e7e7ba7dffe5b84464e2785ec278239a5fd4855231efe53d6a9a0a498cbb5ad9->leave($__internal_e7e7ba7dffe5b84464e2785ec278239a5fd4855231efe53d6a9a0a498cbb5ad9_prof);

    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        $__internal_498c64dca11857b3782992fcc7cbdeed768fdca073e2add66068df2ffc6fa6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498c64dca11857b3782992fcc7cbdeed768fdca073e2add66068df2ffc6fa6c8->enter($__internal_498c64dca11857b3782992fcc7cbdeed768fdca073e2add66068df2ffc6fa6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_498c64dca11857b3782992fcc7cbdeed768fdca073e2add66068df2ffc6fa6c8->leave($__internal_498c64dca11857b3782992fcc7cbdeed768fdca073e2add66068df2ffc6fa6c8_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8f9f3869a4f3d200b8d6ebd3a8972d2358e701c578c881e5ab92c7341f0ce55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f9f3869a4f3d200b8d6ebd3a8972d2358e701c578c881e5ab92c7341f0ce55->enter($__internal_e8f9f3869a4f3d200b8d6ebd3a8972d2358e701c578c881e5ab92c7341f0ce55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8f9f3869a4f3d200b8d6ebd3a8972d2358e701c578c881e5ab92c7341f0ce55->leave($__internal_e8f9f3869a4f3d200b8d6ebd3a8972d2358e701c578c881e5ab92c7341f0ce55_prof);

    }

    // line 50
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_100d3c52dd4569788e351c3fb72242e302c80fb067d8a2c7f4ffca1dc289d28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100d3c52dd4569788e351c3fb72242e302c80fb067d8a2c7f4ffca1dc289d28f->enter($__internal_100d3c52dd4569788e351c3fb72242e302c80fb067d8a2c7f4ffca1dc289d28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_100d3c52dd4569788e351c3fb72242e302c80fb067d8a2c7f4ffca1dc289d28f->leave($__internal_100d3c52dd4569788e351c3fb72242e302c80fb067d8a2c7f4ffca1dc289d28f_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_46fa82cd9ed429d49184a36daa3015f4893976eea32057f267fbc353e127bf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fa82cd9ed429d49184a36daa3015f4893976eea32057f267fbc353e127bf91->enter($__internal_46fa82cd9ed429d49184a36daa3015f4893976eea32057f267fbc353e127bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_46fa82cd9ed429d49184a36daa3015f4893976eea32057f267fbc353e127bf91->leave($__internal_46fa82cd9ed429d49184a36daa3015f4893976eea32057f267fbc353e127bf91_prof);

    }

    // line 55
    public function block_linea($context, array $blocks = array())
    {
        $__internal_61a0135030f446943690e166f9291269981cd0076b992c3b8778cd66d9eac473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a0135030f446943690e166f9291269981cd0076b992c3b8778cd66d9eac473->enter($__internal_61a0135030f446943690e166f9291269981cd0076b992c3b8778cd66d9eac473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_61a0135030f446943690e166f9291269981cd0076b992c3b8778cd66d9eac473->leave($__internal_61a0135030f446943690e166f9291269981cd0076b992c3b8778cd66d9eac473_prof);

    }

    // line 56
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_e8b171ca9f33da463b9d6d9743c2932bf40b3fb44764ea9424355bcd8641b7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b171ca9f33da463b9d6d9743c2932bf40b3fb44764ea9424355bcd8641b7c3->enter($__internal_e8b171ca9f33da463b9d6d9743c2932bf40b3fb44764ea9424355bcd8641b7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_e8b171ca9f33da463b9d6d9743c2932bf40b3fb44764ea9424355bcd8641b7c3->leave($__internal_e8b171ca9f33da463b9d6d9743c2932bf40b3fb44764ea9424355bcd8641b7c3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 56,  236 => 55,  225 => 54,  214 => 50,  203 => 49,  192 => 37,  183 => 33,  177 => 31,  171 => 29,  169 => 28,  165 => 27,  160 => 26,  154 => 24,  152 => 23,  148 => 21,  142 => 20,  134 => 14,  128 => 13,  119 => 11,  113 => 7,  107 => 6,  87 => 57,  84 => 56,  81 => 55,  79 => 54,  74 => 51,  71 => 50,  69 => 49,  54 => 37,  51 => 36,  49 => 20,  43 => 16,  40 => 13,  38 => 6,  31 => 1,);
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
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
                                    <li>Bienvenido, {{app.user.username}}</li>
                                {% endif %}
                                <li><a href=\"{{ path('congreso_congreso_list')}}\">Inicio</a></li>
                                <li><a href=\"{{ path('congreso_congreso_contact')}}\">Contacto</a></li>
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
