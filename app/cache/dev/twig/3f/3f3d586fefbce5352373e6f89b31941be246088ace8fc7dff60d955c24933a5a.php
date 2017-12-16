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
        $__internal_055c7223296ea8dbd9f364d627d7128238c92cfa8b12d4ce4a9fe09dd187e58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055c7223296ea8dbd9f364d627d7128238c92cfa8b12d4ce4a9fe09dd187e58a->enter($__internal_055c7223296ea8dbd9f364d627d7128238c92cfa8b12d4ce4a9fe09dd187e58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_055c7223296ea8dbd9f364d627d7128238c92cfa8b12d4ce4a9fe09dd187e58a->leave($__internal_055c7223296ea8dbd9f364d627d7128238c92cfa8b12d4ce4a9fe09dd187e58a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82e87d49fdd7752a994677cc7e1cb0480d4c4a10bbc4c94e5261c2b2636cfab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e87d49fdd7752a994677cc7e1cb0480d4c4a10bbc4c94e5261c2b2636cfab6->enter($__internal_82e87d49fdd7752a994677cc7e1cb0480d4c4a10bbc4c94e5261c2b2636cfab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_82e87d49fdd7752a994677cc7e1cb0480d4c4a10bbc4c94e5261c2b2636cfab6->leave($__internal_82e87d49fdd7752a994677cc7e1cb0480d4c4a10bbc4c94e5261c2b2636cfab6_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38c406e8236a8b6a1cf828016690ae45e104456446d3e84329349362b70be2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c406e8236a8b6a1cf828016690ae45e104456446d3e84329349362b70be2f0->enter($__internal_38c406e8236a8b6a1cf828016690ae45e104456446d3e84329349362b70be2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_38c406e8236a8b6a1cf828016690ae45e104456446d3e84329349362b70be2f0->leave($__internal_38c406e8236a8b6a1cf828016690ae45e104456446d3e84329349362b70be2f0_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d193d66600b7868719feb16c276ae79972056900f301bcaf529f210be3b5cf68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d193d66600b7868719feb16c276ae79972056900f301bcaf529f210be3b5cf68->enter($__internal_d193d66600b7868719feb16c276ae79972056900f301bcaf529f210be3b5cf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_d193d66600b7868719feb16c276ae79972056900f301bcaf529f210be3b5cf68->leave($__internal_d193d66600b7868719feb16c276ae79972056900f301bcaf529f210be3b5cf68_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_10a166c5fbf1de06b6872d4942d45fc942edead653ef173c1e97708f627e2c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a166c5fbf1de06b6872d4942d45fc942edead653ef173c1e97708f627e2c7e->enter($__internal_10a166c5fbf1de06b6872d4942d45fc942edead653ef173c1e97708f627e2c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_10a166c5fbf1de06b6872d4942d45fc942edead653ef173c1e97708f627e2c7e->leave($__internal_10a166c5fbf1de06b6872d4942d45fc942edead653ef173c1e97708f627e2c7e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_113004ce767a3821c01b4cdef2265cea3ffe2a0689bf7d484798f558ff26b609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113004ce767a3821c01b4cdef2265cea3ffe2a0689bf7d484798f558ff26b609->enter($__internal_113004ce767a3821c01b4cdef2265cea3ffe2a0689bf7d484798f558ff26b609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_113004ce767a3821c01b4cdef2265cea3ffe2a0689bf7d484798f558ff26b609->leave($__internal_113004ce767a3821c01b4cdef2265cea3ffe2a0689bf7d484798f558ff26b609_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_03db3a2d770c6133eb524128dbf8dc76bd2ad55b3ae0582deea3f1573c038f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03db3a2d770c6133eb524128dbf8dc76bd2ad55b3ae0582deea3f1573c038f1f->enter($__internal_03db3a2d770c6133eb524128dbf8dc76bd2ad55b3ae0582deea3f1573c038f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_03db3a2d770c6133eb524128dbf8dc76bd2ad55b3ae0582deea3f1573c038f1f->leave($__internal_03db3a2d770c6133eb524128dbf8dc76bd2ad55b3ae0582deea3f1573c038f1f_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d5cbdec540523f524fef6fa281f415e5ece50df65378fb000ed977c4df0bab82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cbdec540523f524fef6fa281f415e5ece50df65378fb000ed977c4df0bab82->enter($__internal_d5cbdec540523f524fef6fa281f415e5ece50df65378fb000ed977c4df0bab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d5cbdec540523f524fef6fa281f415e5ece50df65378fb000ed977c4df0bab82->leave($__internal_d5cbdec540523f524fef6fa281f415e5ece50df65378fb000ed977c4df0bab82_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_f1c57970270484b7bc7e8923a8ca557f6d84bda81a8aabc46faa17d7c5c0eab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c57970270484b7bc7e8923a8ca557f6d84bda81a8aabc46faa17d7c5c0eab8->enter($__internal_f1c57970270484b7bc7e8923a8ca557f6d84bda81a8aabc46faa17d7c5c0eab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_f1c57970270484b7bc7e8923a8ca557f6d84bda81a8aabc46faa17d7c5c0eab8->leave($__internal_f1c57970270484b7bc7e8923a8ca557f6d84bda81a8aabc46faa17d7c5c0eab8_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_e51adfa8a9eb0e3d6b7c3f03e8eefc1c5061629c5fc5a6b4cae92ce3e2a6d8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51adfa8a9eb0e3d6b7c3f03e8eefc1c5061629c5fc5a6b4cae92ce3e2a6d8af->enter($__internal_e51adfa8a9eb0e3d6b7c3f03e8eefc1c5061629c5fc5a6b4cae92ce3e2a6d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_e51adfa8a9eb0e3d6b7c3f03e8eefc1c5061629c5fc5a6b4cae92ce3e2a6d8af->leave($__internal_e51adfa8a9eb0e3d6b7c3f03e8eefc1c5061629c5fc5a6b4cae92ce3e2a6d8af_prof);

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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
