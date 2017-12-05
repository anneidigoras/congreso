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
        $__internal_072460e0843db9e2c69ae353892cab07032e595b971576910606ad0fbe560989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072460e0843db9e2c69ae353892cab07032e595b971576910606ad0fbe560989->enter($__internal_072460e0843db9e2c69ae353892cab07032e595b971576910606ad0fbe560989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo " </a></h1>
                ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a>
                ";
        } else {
            // line 27
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a>    
                ";
        }
        // line 29
        echo "            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 40
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 45
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 46
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
        
        $__internal_072460e0843db9e2c69ae353892cab07032e595b971576910606ad0fbe560989->leave($__internal_072460e0843db9e2c69ae353892cab07032e595b971576910606ad0fbe560989_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bb2da9ef3dfcb48e1a833b1ef4758a0a7ba190a50ab382eef8e64e4ff310525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb2da9ef3dfcb48e1a833b1ef4758a0a7ba190a50ab382eef8e64e4ff310525->enter($__internal_9bb2da9ef3dfcb48e1a833b1ef4758a0a7ba190a50ab382eef8e64e4ff310525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9bb2da9ef3dfcb48e1a833b1ef4758a0a7ba190a50ab382eef8e64e4ff310525->leave($__internal_9bb2da9ef3dfcb48e1a833b1ef4758a0a7ba190a50ab382eef8e64e4ff310525_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01459bb26a6034aec72969a67488201966d3302ff5e0335f5015ed1185dc85af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01459bb26a6034aec72969a67488201966d3302ff5e0335f5015ed1185dc85af->enter($__internal_01459bb26a6034aec72969a67488201966d3302ff5e0335f5015ed1185dc85af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_01459bb26a6034aec72969a67488201966d3302ff5e0335f5015ed1185dc85af->leave($__internal_01459bb26a6034aec72969a67488201966d3302ff5e0335f5015ed1185dc85af_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_07ce9cc7e671ef5a7677279cba47db44dcce75d2ba7ade1b70bdf5487fcd201c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ce9cc7e671ef5a7677279cba47db44dcce75d2ba7ade1b70bdf5487fcd201c->enter($__internal_07ce9cc7e671ef5a7677279cba47db44dcce75d2ba7ade1b70bdf5487fcd201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_07ce9cc7e671ef5a7677279cba47db44dcce75d2ba7ade1b70bdf5487fcd201c->leave($__internal_07ce9cc7e671ef5a7677279cba47db44dcce75d2ba7ade1b70bdf5487fcd201c_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_5435cefc930030bda975b6e1771450d4d14ac0b3081512781380a7e983e32041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5435cefc930030bda975b6e1771450d4d14ac0b3081512781380a7e983e32041->enter($__internal_5435cefc930030bda975b6e1771450d4d14ac0b3081512781380a7e983e32041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5435cefc930030bda975b6e1771450d4d14ac0b3081512781380a7e983e32041->leave($__internal_5435cefc930030bda975b6e1771450d4d14ac0b3081512781380a7e983e32041_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_9ecd531813db66cc4ac91c48fba37999c770eee30f789b0c0ea770cee39c028d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecd531813db66cc4ac91c48fba37999c770eee30f789b0c0ea770cee39c028d->enter($__internal_9ecd531813db66cc4ac91c48fba37999c770eee30f789b0c0ea770cee39c028d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_9ecd531813db66cc4ac91c48fba37999c770eee30f789b0c0ea770cee39c028d->leave($__internal_9ecd531813db66cc4ac91c48fba37999c770eee30f789b0c0ea770cee39c028d_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_740f074fa2c4d3b72690b44a7ae015d5b4b26aa5e58b170275fd8d7c18cfd324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740f074fa2c4d3b72690b44a7ae015d5b4b26aa5e58b170275fd8d7c18cfd324->enter($__internal_740f074fa2c4d3b72690b44a7ae015d5b4b26aa5e58b170275fd8d7c18cfd324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_740f074fa2c4d3b72690b44a7ae015d5b4b26aa5e58b170275fd8d7c18cfd324->leave($__internal_740f074fa2c4d3b72690b44a7ae015d5b4b26aa5e58b170275fd8d7c18cfd324_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_bce9e1fd771b83fd092cc84ebcf45b020dca9f617f1bbd8ffedb2e11533b08ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce9e1fd771b83fd092cc84ebcf45b020dca9f617f1bbd8ffedb2e11533b08ce->enter($__internal_bce9e1fd771b83fd092cc84ebcf45b020dca9f617f1bbd8ffedb2e11533b08ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_bce9e1fd771b83fd092cc84ebcf45b020dca9f617f1bbd8ffedb2e11533b08ce->leave($__internal_bce9e1fd771b83fd092cc84ebcf45b020dca9f617f1bbd8ffedb2e11533b08ce_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_a9c59c931c293569aa85372988429a07654f2ea54adfa45672b9154dd46adae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c59c931c293569aa85372988429a07654f2ea54adfa45672b9154dd46adae5->enter($__internal_a9c59c931c293569aa85372988429a07654f2ea54adfa45672b9154dd46adae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_a9c59c931c293569aa85372988429a07654f2ea54adfa45672b9154dd46adae5->leave($__internal_a9c59c931c293569aa85372988429a07654f2ea54adfa45672b9154dd46adae5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 45,  198 => 44,  187 => 43,  176 => 39,  165 => 38,  153 => 23,  145 => 14,  139 => 13,  130 => 11,  124 => 7,  118 => 6,  98 => 46,  95 => 45,  92 => 44,  90 => 43,  85 => 40,  82 => 39,  80 => 38,  69 => 29,  63 => 27,  57 => 25,  55 => 24,  51 => 23,  42 => 16,  39 => 13,  37 => 6,  30 => 1,);
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

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">{% block title %} {% endblock %} </a></h1>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('congreso_admin_logout')}}\">Salir</a>
                {% else %}
                    <a href=\"{{ path('congreso_admin_login')}}\">Entrar</a>    
                {% endif %}
            </div>
        </div>
    
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
