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
        $__internal_da07daaec7544ae646ea4e8e8a21062b28a4ca610f0497d2c7db2134b6fddd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da07daaec7544ae646ea4e8e8a21062b28a4ca610f0497d2c7db2134b6fddd98->enter($__internal_da07daaec7544ae646ea4e8e8a21062b28a4ca610f0497d2c7db2134b6fddd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_da07daaec7544ae646ea4e8e8a21062b28a4ca610f0497d2c7db2134b6fddd98->leave($__internal_da07daaec7544ae646ea4e8e8a21062b28a4ca610f0497d2c7db2134b6fddd98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa3ad0f21c86f1feaf80c65b181b8a34186b94b067b7cb2cf3fbb2a160c6d1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3ad0f21c86f1feaf80c65b181b8a34186b94b067b7cb2cf3fbb2a160c6d1e9->enter($__internal_aa3ad0f21c86f1feaf80c65b181b8a34186b94b067b7cb2cf3fbb2a160c6d1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aa3ad0f21c86f1feaf80c65b181b8a34186b94b067b7cb2cf3fbb2a160c6d1e9->leave($__internal_aa3ad0f21c86f1feaf80c65b181b8a34186b94b067b7cb2cf3fbb2a160c6d1e9_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_581979088be5747818685741dfbe73c41417d7b5074b42249e53a174d298a8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581979088be5747818685741dfbe73c41417d7b5074b42249e53a174d298a8f9->enter($__internal_581979088be5747818685741dfbe73c41417d7b5074b42249e53a174d298a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_581979088be5747818685741dfbe73c41417d7b5074b42249e53a174d298a8f9->leave($__internal_581979088be5747818685741dfbe73c41417d7b5074b42249e53a174d298a8f9_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2ec707d3a0a6dca5ca38894970620c0611742a9dfdd614e8f681d05ea1918fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec707d3a0a6dca5ca38894970620c0611742a9dfdd614e8f681d05ea1918fcc->enter($__internal_2ec707d3a0a6dca5ca38894970620c0611742a9dfdd614e8f681d05ea1918fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2ec707d3a0a6dca5ca38894970620c0611742a9dfdd614e8f681d05ea1918fcc->leave($__internal_2ec707d3a0a6dca5ca38894970620c0611742a9dfdd614e8f681d05ea1918fcc_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_3019c4fa5bf8095726a4b7d00721e1df2bffe958e755c7600c3eb1c70e9dbe77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3019c4fa5bf8095726a4b7d00721e1df2bffe958e755c7600c3eb1c70e9dbe77->enter($__internal_3019c4fa5bf8095726a4b7d00721e1df2bffe958e755c7600c3eb1c70e9dbe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3019c4fa5bf8095726a4b7d00721e1df2bffe958e755c7600c3eb1c70e9dbe77->leave($__internal_3019c4fa5bf8095726a4b7d00721e1df2bffe958e755c7600c3eb1c70e9dbe77_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_24df0ea29c15e864a79244b2576da0b9d10dab762ecf2568985b66936e4a29e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24df0ea29c15e864a79244b2576da0b9d10dab762ecf2568985b66936e4a29e1->enter($__internal_24df0ea29c15e864a79244b2576da0b9d10dab762ecf2568985b66936e4a29e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_24df0ea29c15e864a79244b2576da0b9d10dab762ecf2568985b66936e4a29e1->leave($__internal_24df0ea29c15e864a79244b2576da0b9d10dab762ecf2568985b66936e4a29e1_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_d7c22b6468d471427987f92fc80749e48541dff10edd47af43dc325bfb3777a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c22b6468d471427987f92fc80749e48541dff10edd47af43dc325bfb3777a5->enter($__internal_d7c22b6468d471427987f92fc80749e48541dff10edd47af43dc325bfb3777a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_d7c22b6468d471427987f92fc80749e48541dff10edd47af43dc325bfb3777a5->leave($__internal_d7c22b6468d471427987f92fc80749e48541dff10edd47af43dc325bfb3777a5_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_baa6223c298b258ce48a3fd9ef0f26662180899808ed0ece7c9671643afb7714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa6223c298b258ce48a3fd9ef0f26662180899808ed0ece7c9671643afb7714->enter($__internal_baa6223c298b258ce48a3fd9ef0f26662180899808ed0ece7c9671643afb7714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_baa6223c298b258ce48a3fd9ef0f26662180899808ed0ece7c9671643afb7714->leave($__internal_baa6223c298b258ce48a3fd9ef0f26662180899808ed0ece7c9671643afb7714_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_7a45c1a0e6ddf824a04fcfa7ce7d4e41ed1e5e142ce25f1386f3dcdd027847e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a45c1a0e6ddf824a04fcfa7ce7d4e41ed1e5e142ce25f1386f3dcdd027847e9->enter($__internal_7a45c1a0e6ddf824a04fcfa7ce7d4e41ed1e5e142ce25f1386f3dcdd027847e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_7a45c1a0e6ddf824a04fcfa7ce7d4e41ed1e5e142ce25f1386f3dcdd027847e9->leave($__internal_7a45c1a0e6ddf824a04fcfa7ce7d4e41ed1e5e142ce25f1386f3dcdd027847e9_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_5a4105f85c9af33b8a797f65dbffa0e7b0b759a9163c0f39622e7eec4c719288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4105f85c9af33b8a797f65dbffa0e7b0b759a9163c0f39622e7eec4c719288->enter($__internal_5a4105f85c9af33b8a797f65dbffa0e7b0b759a9163c0f39622e7eec4c719288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_5a4105f85c9af33b8a797f65dbffa0e7b0b759a9163c0f39622e7eec4c719288->leave($__internal_5a4105f85c9af33b8a797f65dbffa0e7b0b759a9163c0f39622e7eec4c719288_prof);

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
