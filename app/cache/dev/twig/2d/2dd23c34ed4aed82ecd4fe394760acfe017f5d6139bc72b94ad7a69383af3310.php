<?php

/* ::base.html.twig */
class __TwigTemplate_dd32c3c690bb7a8dbb216eceda006c8c689e6ee2f067a1733fd259d5c620d65c extends Twig_Template
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
        $__internal_8a3a1cd82b201aa0ac51f315f7c746c943cee491cc55804a18bb1dc40e9ab241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3a1cd82b201aa0ac51f315f7c746c943cee491cc55804a18bb1dc40e9ab241->enter($__internal_8a3a1cd82b201aa0ac51f315f7c746c943cee491cc55804a18bb1dc40e9ab241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8a3a1cd82b201aa0ac51f315f7c746c943cee491cc55804a18bb1dc40e9ab241->leave($__internal_8a3a1cd82b201aa0ac51f315f7c746c943cee491cc55804a18bb1dc40e9ab241_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4015cb3782c27b18727f8fa25248be92dd50e02296dbe471fe13cd766a4900a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4015cb3782c27b18727f8fa25248be92dd50e02296dbe471fe13cd766a4900a0->enter($__internal_4015cb3782c27b18727f8fa25248be92dd50e02296dbe471fe13cd766a4900a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4015cb3782c27b18727f8fa25248be92dd50e02296dbe471fe13cd766a4900a0->leave($__internal_4015cb3782c27b18727f8fa25248be92dd50e02296dbe471fe13cd766a4900a0_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f40612ea84c318f0d644dfcc47b59ff7fe41da720d058f61b9f92341d389587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f40612ea84c318f0d644dfcc47b59ff7fe41da720d058f61b9f92341d389587->enter($__internal_3f40612ea84c318f0d644dfcc47b59ff7fe41da720d058f61b9f92341d389587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_3f40612ea84c318f0d644dfcc47b59ff7fe41da720d058f61b9f92341d389587->leave($__internal_3f40612ea84c318f0d644dfcc47b59ff7fe41da720d058f61b9f92341d389587_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b548bfdc6760bb6e2a1ceff71bcdbb40c11cd4a1c76beaf8acb3437aa2276472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b548bfdc6760bb6e2a1ceff71bcdbb40c11cd4a1c76beaf8acb3437aa2276472->enter($__internal_b548bfdc6760bb6e2a1ceff71bcdbb40c11cd4a1c76beaf8acb3437aa2276472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_b548bfdc6760bb6e2a1ceff71bcdbb40c11cd4a1c76beaf8acb3437aa2276472->leave($__internal_b548bfdc6760bb6e2a1ceff71bcdbb40c11cd4a1c76beaf8acb3437aa2276472_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_da684e4dae5c7cb26646b687d82d7d928576f5e89a341ee91ca4bcd64fb91bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da684e4dae5c7cb26646b687d82d7d928576f5e89a341ee91ca4bcd64fb91bea->enter($__internal_da684e4dae5c7cb26646b687d82d7d928576f5e89a341ee91ca4bcd64fb91bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_da684e4dae5c7cb26646b687d82d7d928576f5e89a341ee91ca4bcd64fb91bea->leave($__internal_da684e4dae5c7cb26646b687d82d7d928576f5e89a341ee91ca4bcd64fb91bea_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5daa4ddc19f00b873fd8e445d089126d136e0c6a2a1feb4b8cd0ce87d0adc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5daa4ddc19f00b873fd8e445d089126d136e0c6a2a1feb4b8cd0ce87d0adc68->enter($__internal_f5daa4ddc19f00b873fd8e445d089126d136e0c6a2a1feb4b8cd0ce87d0adc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5daa4ddc19f00b873fd8e445d089126d136e0c6a2a1feb4b8cd0ce87d0adc68->leave($__internal_f5daa4ddc19f00b873fd8e445d089126d136e0c6a2a1feb4b8cd0ce87d0adc68_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_772b61ffd05c3ae5878c9e99cc2b103cdb4a6d1e6b249b4495af9622db134396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772b61ffd05c3ae5878c9e99cc2b103cdb4a6d1e6b249b4495af9622db134396->enter($__internal_772b61ffd05c3ae5878c9e99cc2b103cdb4a6d1e6b249b4495af9622db134396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_772b61ffd05c3ae5878c9e99cc2b103cdb4a6d1e6b249b4495af9622db134396->leave($__internal_772b61ffd05c3ae5878c9e99cc2b103cdb4a6d1e6b249b4495af9622db134396_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8956c7dd7e7569af5f4d835473b50de89b0b1b9b06db307edfd13df4060ac6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8956c7dd7e7569af5f4d835473b50de89b0b1b9b06db307edfd13df4060ac6c3->enter($__internal_8956c7dd7e7569af5f4d835473b50de89b0b1b9b06db307edfd13df4060ac6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_8956c7dd7e7569af5f4d835473b50de89b0b1b9b06db307edfd13df4060ac6c3->leave($__internal_8956c7dd7e7569af5f4d835473b50de89b0b1b9b06db307edfd13df4060ac6c3_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_d40311f1ffcea0bad5931f00e2df243f54e1c0a066ca2b5fcf5db161966525d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40311f1ffcea0bad5931f00e2df243f54e1c0a066ca2b5fcf5db161966525d2->enter($__internal_d40311f1ffcea0bad5931f00e2df243f54e1c0a066ca2b5fcf5db161966525d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_d40311f1ffcea0bad5931f00e2df243f54e1c0a066ca2b5fcf5db161966525d2->leave($__internal_d40311f1ffcea0bad5931f00e2df243f54e1c0a066ca2b5fcf5db161966525d2_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_e735f881d1967ddd511d13dba50264b6431ba0ac65db856f7f1cfc63abba8e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e735f881d1967ddd511d13dba50264b6431ba0ac65db856f7f1cfc63abba8e0c->enter($__internal_e735f881d1967ddd511d13dba50264b6431ba0ac65db856f7f1cfc63abba8e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_e735f881d1967ddd511d13dba50264b6431ba0ac65db856f7f1cfc63abba8e0c->leave($__internal_e735f881d1967ddd511d13dba50264b6431ba0ac65db856f7f1cfc63abba8e0c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
