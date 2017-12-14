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
        $__internal_1f8f58b1ef1440b53e641f780649328a2e3b0db819454097fc8b33da23c126b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8f58b1ef1440b53e641f780649328a2e3b0db819454097fc8b33da23c126b3->enter($__internal_1f8f58b1ef1440b53e641f780649328a2e3b0db819454097fc8b33da23c126b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1f8f58b1ef1440b53e641f780649328a2e3b0db819454097fc8b33da23c126b3->leave($__internal_1f8f58b1ef1440b53e641f780649328a2e3b0db819454097fc8b33da23c126b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b31a80559b95fd47fb2693975c20dafc067981f94f0c5ca888cbd2b62b80bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b31a80559b95fd47fb2693975c20dafc067981f94f0c5ca888cbd2b62b80bad->enter($__internal_5b31a80559b95fd47fb2693975c20dafc067981f94f0c5ca888cbd2b62b80bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5b31a80559b95fd47fb2693975c20dafc067981f94f0c5ca888cbd2b62b80bad->leave($__internal_5b31a80559b95fd47fb2693975c20dafc067981f94f0c5ca888cbd2b62b80bad_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70973960771be45347dd748ad4d31927a900dbb9eaffcb895499364efa2e4b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70973960771be45347dd748ad4d31927a900dbb9eaffcb895499364efa2e4b7e->enter($__internal_70973960771be45347dd748ad4d31927a900dbb9eaffcb895499364efa2e4b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_70973960771be45347dd748ad4d31927a900dbb9eaffcb895499364efa2e4b7e->leave($__internal_70973960771be45347dd748ad4d31927a900dbb9eaffcb895499364efa2e4b7e_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1068250260483e8ef07a0ec75b1d544fbe1f76139d05fdf64f08259ce419b534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1068250260483e8ef07a0ec75b1d544fbe1f76139d05fdf64f08259ce419b534->enter($__internal_1068250260483e8ef07a0ec75b1d544fbe1f76139d05fdf64f08259ce419b534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_1068250260483e8ef07a0ec75b1d544fbe1f76139d05fdf64f08259ce419b534->leave($__internal_1068250260483e8ef07a0ec75b1d544fbe1f76139d05fdf64f08259ce419b534_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7f2ed126af5746e5ca41f894ec6386833c27f9dd8886abc4d324774881d0f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f2ed126af5746e5ca41f894ec6386833c27f9dd8886abc4d324774881d0f69->enter($__internal_c7f2ed126af5746e5ca41f894ec6386833c27f9dd8886abc4d324774881d0f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c7f2ed126af5746e5ca41f894ec6386833c27f9dd8886abc4d324774881d0f69->leave($__internal_c7f2ed126af5746e5ca41f894ec6386833c27f9dd8886abc4d324774881d0f69_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_5665cabfeb3d29805d627e4e0594ed3263048bde8cce8e64090c06dc68e73e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5665cabfeb3d29805d627e4e0594ed3263048bde8cce8e64090c06dc68e73e82->enter($__internal_5665cabfeb3d29805d627e4e0594ed3263048bde8cce8e64090c06dc68e73e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5665cabfeb3d29805d627e4e0594ed3263048bde8cce8e64090c06dc68e73e82->leave($__internal_5665cabfeb3d29805d627e4e0594ed3263048bde8cce8e64090c06dc68e73e82_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_37600c62fadf464b0e45d1824a8696bd47420640cccc2405cca2da1c0017118d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37600c62fadf464b0e45d1824a8696bd47420640cccc2405cca2da1c0017118d->enter($__internal_37600c62fadf464b0e45d1824a8696bd47420640cccc2405cca2da1c0017118d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_37600c62fadf464b0e45d1824a8696bd47420640cccc2405cca2da1c0017118d->leave($__internal_37600c62fadf464b0e45d1824a8696bd47420640cccc2405cca2da1c0017118d_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1dd3b674742f8d5a0e1546af23b8cb1ae3ad97d9784b2ae8640a8e73ad8aebb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd3b674742f8d5a0e1546af23b8cb1ae3ad97d9784b2ae8640a8e73ad8aebb9->enter($__internal_1dd3b674742f8d5a0e1546af23b8cb1ae3ad97d9784b2ae8640a8e73ad8aebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_1dd3b674742f8d5a0e1546af23b8cb1ae3ad97d9784b2ae8640a8e73ad8aebb9->leave($__internal_1dd3b674742f8d5a0e1546af23b8cb1ae3ad97d9784b2ae8640a8e73ad8aebb9_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_cfc313d9e0b2d10fe8555a2dbfed9b0983dc9a27a8173c36e5f0f075c9f4ce2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc313d9e0b2d10fe8555a2dbfed9b0983dc9a27a8173c36e5f0f075c9f4ce2b->enter($__internal_cfc313d9e0b2d10fe8555a2dbfed9b0983dc9a27a8173c36e5f0f075c9f4ce2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_cfc313d9e0b2d10fe8555a2dbfed9b0983dc9a27a8173c36e5f0f075c9f4ce2b->leave($__internal_cfc313d9e0b2d10fe8555a2dbfed9b0983dc9a27a8173c36e5f0f075c9f4ce2b_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_fd2c9a051fc1d64a5e571bcd5b45194dbaa0ea62113463dcfa4c060f6f6f6eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2c9a051fc1d64a5e571bcd5b45194dbaa0ea62113463dcfa4c060f6f6f6eb6->enter($__internal_fd2c9a051fc1d64a5e571bcd5b45194dbaa0ea62113463dcfa4c060f6f6f6eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_fd2c9a051fc1d64a5e571bcd5b45194dbaa0ea62113463dcfa4c060f6f6f6eb6->leave($__internal_fd2c9a051fc1d64a5e571bcd5b45194dbaa0ea62113463dcfa4c060f6f6f6eb6_prof);

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
