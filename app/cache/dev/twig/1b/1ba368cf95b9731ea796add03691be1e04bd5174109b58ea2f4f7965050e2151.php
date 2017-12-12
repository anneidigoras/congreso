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
        $__internal_3b9d9258d3a172cf0689751aeb8d9a5d9896824f675e39a92d7a90a7269bff2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9d9258d3a172cf0689751aeb8d9a5d9896824f675e39a92d7a90a7269bff2c->enter($__internal_3b9d9258d3a172cf0689751aeb8d9a5d9896824f675e39a92d7a90a7269bff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3b9d9258d3a172cf0689751aeb8d9a5d9896824f675e39a92d7a90a7269bff2c->leave($__internal_3b9d9258d3a172cf0689751aeb8d9a5d9896824f675e39a92d7a90a7269bff2c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa95cb9407b9c3ef0a253f26e37d61e880e82ce82e36a06216dfe375918c0dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa95cb9407b9c3ef0a253f26e37d61e880e82ce82e36a06216dfe375918c0dca->enter($__internal_fa95cb9407b9c3ef0a253f26e37d61e880e82ce82e36a06216dfe375918c0dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fa95cb9407b9c3ef0a253f26e37d61e880e82ce82e36a06216dfe375918c0dca->leave($__internal_fa95cb9407b9c3ef0a253f26e37d61e880e82ce82e36a06216dfe375918c0dca_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a354815ad7916ed4c3760d693aee2c65413139217160affef6e6ace3b7241d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a354815ad7916ed4c3760d693aee2c65413139217160affef6e6ace3b7241d8->enter($__internal_9a354815ad7916ed4c3760d693aee2c65413139217160affef6e6ace3b7241d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_9a354815ad7916ed4c3760d693aee2c65413139217160affef6e6ace3b7241d8->leave($__internal_9a354815ad7916ed4c3760d693aee2c65413139217160affef6e6ace3b7241d8_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_be98b077348949d1736a3c5bf8913f0ee46e00f419befeee7a89ef2f91d89fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be98b077348949d1736a3c5bf8913f0ee46e00f419befeee7a89ef2f91d89fb8->enter($__internal_be98b077348949d1736a3c5bf8913f0ee46e00f419befeee7a89ef2f91d89fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_be98b077348949d1736a3c5bf8913f0ee46e00f419befeee7a89ef2f91d89fb8->leave($__internal_be98b077348949d1736a3c5bf8913f0ee46e00f419befeee7a89ef2f91d89fb8_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0c3f1fdf78b8b42d42baf988cb11b2ab69573a60a8f64d2c62780bbace122d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c3f1fdf78b8b42d42baf988cb11b2ab69573a60a8f64d2c62780bbace122d2->enter($__internal_a0c3f1fdf78b8b42d42baf988cb11b2ab69573a60a8f64d2c62780bbace122d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a0c3f1fdf78b8b42d42baf988cb11b2ab69573a60a8f64d2c62780bbace122d2->leave($__internal_a0c3f1fdf78b8b42d42baf988cb11b2ab69573a60a8f64d2c62780bbace122d2_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_55c0c81fdd90d4f85a017c16fbd02dc29a02312209ab4ae9c7341999078bb132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c0c81fdd90d4f85a017c16fbd02dc29a02312209ab4ae9c7341999078bb132->enter($__internal_55c0c81fdd90d4f85a017c16fbd02dc29a02312209ab4ae9c7341999078bb132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55c0c81fdd90d4f85a017c16fbd02dc29a02312209ab4ae9c7341999078bb132->leave($__internal_55c0c81fdd90d4f85a017c16fbd02dc29a02312209ab4ae9c7341999078bb132_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_5f276fe28ab6ad77d74bdd8a665a1982743cc74ba3847419b08317491180de16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f276fe28ab6ad77d74bdd8a665a1982743cc74ba3847419b08317491180de16->enter($__internal_5f276fe28ab6ad77d74bdd8a665a1982743cc74ba3847419b08317491180de16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_5f276fe28ab6ad77d74bdd8a665a1982743cc74ba3847419b08317491180de16->leave($__internal_5f276fe28ab6ad77d74bdd8a665a1982743cc74ba3847419b08317491180de16_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7ce8d01c2a469436b6b9a5da0430ef090fb1156a08d4965de429262b16e063a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce8d01c2a469436b6b9a5da0430ef090fb1156a08d4965de429262b16e063a1->enter($__internal_7ce8d01c2a469436b6b9a5da0430ef090fb1156a08d4965de429262b16e063a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7ce8d01c2a469436b6b9a5da0430ef090fb1156a08d4965de429262b16e063a1->leave($__internal_7ce8d01c2a469436b6b9a5da0430ef090fb1156a08d4965de429262b16e063a1_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_0fc4a8ffb22b604f16d1a69dcb865d839840b90c6df1a50d8b988581d2669d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc4a8ffb22b604f16d1a69dcb865d839840b90c6df1a50d8b988581d2669d71->enter($__internal_0fc4a8ffb22b604f16d1a69dcb865d839840b90c6df1a50d8b988581d2669d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_0fc4a8ffb22b604f16d1a69dcb865d839840b90c6df1a50d8b988581d2669d71->leave($__internal_0fc4a8ffb22b604f16d1a69dcb865d839840b90c6df1a50d8b988581d2669d71_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ab9131e9ba84fd448dde70d6a5598579a6b92b5c43b31eb7e3ae0c4645051043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9131e9ba84fd448dde70d6a5598579a6b92b5c43b31eb7e3ae0c4645051043->enter($__internal_ab9131e9ba84fd448dde70d6a5598579a6b92b5c43b31eb7e3ae0c4645051043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_ab9131e9ba84fd448dde70d6a5598579a6b92b5c43b31eb7e3ae0c4645051043->leave($__internal_ab9131e9ba84fd448dde70d6a5598579a6b92b5c43b31eb7e3ae0c4645051043_prof);

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
