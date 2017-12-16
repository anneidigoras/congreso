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
        $__internal_351b497ec72f73e48c47d746e6860d4276b09558f77e1c7cd4b1c10a991b00e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351b497ec72f73e48c47d746e6860d4276b09558f77e1c7cd4b1c10a991b00e3->enter($__internal_351b497ec72f73e48c47d746e6860d4276b09558f77e1c7cd4b1c10a991b00e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_351b497ec72f73e48c47d746e6860d4276b09558f77e1c7cd4b1c10a991b00e3->leave($__internal_351b497ec72f73e48c47d746e6860d4276b09558f77e1c7cd4b1c10a991b00e3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06fd8259e18a2470d3e6b6e7fc998b61fe0302d8a8a22fd9712452a33e9595d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fd8259e18a2470d3e6b6e7fc998b61fe0302d8a8a22fd9712452a33e9595d7->enter($__internal_06fd8259e18a2470d3e6b6e7fc998b61fe0302d8a8a22fd9712452a33e9595d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_06fd8259e18a2470d3e6b6e7fc998b61fe0302d8a8a22fd9712452a33e9595d7->leave($__internal_06fd8259e18a2470d3e6b6e7fc998b61fe0302d8a8a22fd9712452a33e9595d7_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bd6cf60853341d10116dbfedce5612e2de2a2b1bd92288c219c361a57dff3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd6cf60853341d10116dbfedce5612e2de2a2b1bd92288c219c361a57dff3d8->enter($__internal_1bd6cf60853341d10116dbfedce5612e2de2a2b1bd92288c219c361a57dff3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_1bd6cf60853341d10116dbfedce5612e2de2a2b1bd92288c219c361a57dff3d8->leave($__internal_1bd6cf60853341d10116dbfedce5612e2de2a2b1bd92288c219c361a57dff3d8_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_810fc0caf95eaffa9d4bf01c687261e758351d941ebf4a0cb9f3aad8f49ced7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810fc0caf95eaffa9d4bf01c687261e758351d941ebf4a0cb9f3aad8f49ced7f->enter($__internal_810fc0caf95eaffa9d4bf01c687261e758351d941ebf4a0cb9f3aad8f49ced7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_810fc0caf95eaffa9d4bf01c687261e758351d941ebf4a0cb9f3aad8f49ced7f->leave($__internal_810fc0caf95eaffa9d4bf01c687261e758351d941ebf4a0cb9f3aad8f49ced7f_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc2943e68eba94c5440a5d258b625847f63b983d8dda97c8d57cb589e67d3adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2943e68eba94c5440a5d258b625847f63b983d8dda97c8d57cb589e67d3adf->enter($__internal_dc2943e68eba94c5440a5d258b625847f63b983d8dda97c8d57cb589e67d3adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dc2943e68eba94c5440a5d258b625847f63b983d8dda97c8d57cb589e67d3adf->leave($__internal_dc2943e68eba94c5440a5d258b625847f63b983d8dda97c8d57cb589e67d3adf_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddee2760c8d2822182eb3e90bfe22eb03378683962cff7e9add292ade8b2b159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddee2760c8d2822182eb3e90bfe22eb03378683962cff7e9add292ade8b2b159->enter($__internal_ddee2760c8d2822182eb3e90bfe22eb03378683962cff7e9add292ade8b2b159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ddee2760c8d2822182eb3e90bfe22eb03378683962cff7e9add292ade8b2b159->leave($__internal_ddee2760c8d2822182eb3e90bfe22eb03378683962cff7e9add292ade8b2b159_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_8371e4aa62ed9c7d5215ca3760823093383775fdf882350107fe69e4688447fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8371e4aa62ed9c7d5215ca3760823093383775fdf882350107fe69e4688447fa->enter($__internal_8371e4aa62ed9c7d5215ca3760823093383775fdf882350107fe69e4688447fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_8371e4aa62ed9c7d5215ca3760823093383775fdf882350107fe69e4688447fa->leave($__internal_8371e4aa62ed9c7d5215ca3760823093383775fdf882350107fe69e4688447fa_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6abfb0253c54b11e923d79f651e6c1470c76c4fc2a3e327bc7f96849e5f19d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abfb0253c54b11e923d79f651e6c1470c76c4fc2a3e327bc7f96849e5f19d01->enter($__internal_6abfb0253c54b11e923d79f651e6c1470c76c4fc2a3e327bc7f96849e5f19d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6abfb0253c54b11e923d79f651e6c1470c76c4fc2a3e327bc7f96849e5f19d01->leave($__internal_6abfb0253c54b11e923d79f651e6c1470c76c4fc2a3e327bc7f96849e5f19d01_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_819772361d2eb91a6c8b59df160e9edfefacaecf4c17bfcebf4e31617a3dbd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819772361d2eb91a6c8b59df160e9edfefacaecf4c17bfcebf4e31617a3dbd8e->enter($__internal_819772361d2eb91a6c8b59df160e9edfefacaecf4c17bfcebf4e31617a3dbd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_819772361d2eb91a6c8b59df160e9edfefacaecf4c17bfcebf4e31617a3dbd8e->leave($__internal_819772361d2eb91a6c8b59df160e9edfefacaecf4c17bfcebf4e31617a3dbd8e_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_1f01e0e9a2dd1d1fa2805b4268ff487a9bf5bf6e6e735b3ae874018832a5d757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f01e0e9a2dd1d1fa2805b4268ff487a9bf5bf6e6e735b3ae874018832a5d757->enter($__internal_1f01e0e9a2dd1d1fa2805b4268ff487a9bf5bf6e6e735b3ae874018832a5d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_1f01e0e9a2dd1d1fa2805b4268ff487a9bf5bf6e6e735b3ae874018832a5d757->leave($__internal_1f01e0e9a2dd1d1fa2805b4268ff487a9bf5bf6e6e735b3ae874018832a5d757_prof);

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
