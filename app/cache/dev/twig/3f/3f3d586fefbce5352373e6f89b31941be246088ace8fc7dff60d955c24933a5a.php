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
        $__internal_2c1553d3b7b54b499f363507f9011fa7cc9fcb56b9f911b3e5aee03af1a1d3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1553d3b7b54b499f363507f9011fa7cc9fcb56b9f911b3e5aee03af1a1d3fb->enter($__internal_2c1553d3b7b54b499f363507f9011fa7cc9fcb56b9f911b3e5aee03af1a1d3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2c1553d3b7b54b499f363507f9011fa7cc9fcb56b9f911b3e5aee03af1a1d3fb->leave($__internal_2c1553d3b7b54b499f363507f9011fa7cc9fcb56b9f911b3e5aee03af1a1d3fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7381cc98396afe13ad3db91a9e7dbe3afb45314f273022927431e9c13da43070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7381cc98396afe13ad3db91a9e7dbe3afb45314f273022927431e9c13da43070->enter($__internal_7381cc98396afe13ad3db91a9e7dbe3afb45314f273022927431e9c13da43070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7381cc98396afe13ad3db91a9e7dbe3afb45314f273022927431e9c13da43070->leave($__internal_7381cc98396afe13ad3db91a9e7dbe3afb45314f273022927431e9c13da43070_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_346e1eae24868489ea16a52eaaa2f539f7d201918ffea9bfdcc6df824854fade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346e1eae24868489ea16a52eaaa2f539f7d201918ffea9bfdcc6df824854fade->enter($__internal_346e1eae24868489ea16a52eaaa2f539f7d201918ffea9bfdcc6df824854fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_346e1eae24868489ea16a52eaaa2f539f7d201918ffea9bfdcc6df824854fade->leave($__internal_346e1eae24868489ea16a52eaaa2f539f7d201918ffea9bfdcc6df824854fade_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6b03ee432d76e0a000c6f67203da4e71a7b82ec65d760545e287995f4b4718ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b03ee432d76e0a000c6f67203da4e71a7b82ec65d760545e287995f4b4718ad->enter($__internal_6b03ee432d76e0a000c6f67203da4e71a7b82ec65d760545e287995f4b4718ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_6b03ee432d76e0a000c6f67203da4e71a7b82ec65d760545e287995f4b4718ad->leave($__internal_6b03ee432d76e0a000c6f67203da4e71a7b82ec65d760545e287995f4b4718ad_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6c755351c622f3ee3af84bbed45e0a4c8244f2975db541996c3bfb0913ef4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c755351c622f3ee3af84bbed45e0a4c8244f2975db541996c3bfb0913ef4b7->enter($__internal_b6c755351c622f3ee3af84bbed45e0a4c8244f2975db541996c3bfb0913ef4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b6c755351c622f3ee3af84bbed45e0a4c8244f2975db541996c3bfb0913ef4b7->leave($__internal_b6c755351c622f3ee3af84bbed45e0a4c8244f2975db541996c3bfb0913ef4b7_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6a4cf7092cce74ff02f9395936b75d08ac6b71f0b4029ad4c124c36c84ba93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a4cf7092cce74ff02f9395936b75d08ac6b71f0b4029ad4c124c36c84ba93d->enter($__internal_c6a4cf7092cce74ff02f9395936b75d08ac6b71f0b4029ad4c124c36c84ba93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6a4cf7092cce74ff02f9395936b75d08ac6b71f0b4029ad4c124c36c84ba93d->leave($__internal_c6a4cf7092cce74ff02f9395936b75d08ac6b71f0b4029ad4c124c36c84ba93d_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_8f4fb5e409014fbb715241a4d994df90d72738d60b030c5e58eba0b17075f000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4fb5e409014fbb715241a4d994df90d72738d60b030c5e58eba0b17075f000->enter($__internal_8f4fb5e409014fbb715241a4d994df90d72738d60b030c5e58eba0b17075f000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_8f4fb5e409014fbb715241a4d994df90d72738d60b030c5e58eba0b17075f000->leave($__internal_8f4fb5e409014fbb715241a4d994df90d72738d60b030c5e58eba0b17075f000_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4b63aee2c2b04a89d7d66f820d345b6aaaec30b4bd6afbdd370a5f2cc6d49f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b63aee2c2b04a89d7d66f820d345b6aaaec30b4bd6afbdd370a5f2cc6d49f05->enter($__internal_4b63aee2c2b04a89d7d66f820d345b6aaaec30b4bd6afbdd370a5f2cc6d49f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_4b63aee2c2b04a89d7d66f820d345b6aaaec30b4bd6afbdd370a5f2cc6d49f05->leave($__internal_4b63aee2c2b04a89d7d66f820d345b6aaaec30b4bd6afbdd370a5f2cc6d49f05_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_7aee7c03dba011105c06bea7855a2a7bb2ddf59804c7749a5b24af8a94303f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aee7c03dba011105c06bea7855a2a7bb2ddf59804c7749a5b24af8a94303f72->enter($__internal_7aee7c03dba011105c06bea7855a2a7bb2ddf59804c7749a5b24af8a94303f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_7aee7c03dba011105c06bea7855a2a7bb2ddf59804c7749a5b24af8a94303f72->leave($__internal_7aee7c03dba011105c06bea7855a2a7bb2ddf59804c7749a5b24af8a94303f72_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ff23d3f30244ca84311d2332119cb3ecad90eaaf4d68f84409cb171fc689e3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff23d3f30244ca84311d2332119cb3ecad90eaaf4d68f84409cb171fc689e3bf->enter($__internal_ff23d3f30244ca84311d2332119cb3ecad90eaaf4d68f84409cb171fc689e3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_ff23d3f30244ca84311d2332119cb3ecad90eaaf4d68f84409cb171fc689e3bf->leave($__internal_ff23d3f30244ca84311d2332119cb3ecad90eaaf4d68f84409cb171fc689e3bf_prof);

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
