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
        $__internal_2626d2f9d3dabf76eb1b3364245942c81a8487320c10cd2dbff24ac93b563c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2626d2f9d3dabf76eb1b3364245942c81a8487320c10cd2dbff24ac93b563c36->enter($__internal_2626d2f9d3dabf76eb1b3364245942c81a8487320c10cd2dbff24ac93b563c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2626d2f9d3dabf76eb1b3364245942c81a8487320c10cd2dbff24ac93b563c36->leave($__internal_2626d2f9d3dabf76eb1b3364245942c81a8487320c10cd2dbff24ac93b563c36_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e5bd08570848dd657c4a61c682a452d79c72803490acd280a3903fa35745ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5bd08570848dd657c4a61c682a452d79c72803490acd280a3903fa35745ae2->enter($__internal_3e5bd08570848dd657c4a61c682a452d79c72803490acd280a3903fa35745ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3e5bd08570848dd657c4a61c682a452d79c72803490acd280a3903fa35745ae2->leave($__internal_3e5bd08570848dd657c4a61c682a452d79c72803490acd280a3903fa35745ae2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e73ca5bc19e1fa6de9e85365ab922d7d29dd7678dab7fa8a9d09e0ad2602476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e73ca5bc19e1fa6de9e85365ab922d7d29dd7678dab7fa8a9d09e0ad2602476->enter($__internal_3e73ca5bc19e1fa6de9e85365ab922d7d29dd7678dab7fa8a9d09e0ad2602476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_3e73ca5bc19e1fa6de9e85365ab922d7d29dd7678dab7fa8a9d09e0ad2602476->leave($__internal_3e73ca5bc19e1fa6de9e85365ab922d7d29dd7678dab7fa8a9d09e0ad2602476_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_058b58331d91dae5f22e6cfdd495c5a84029ce2a8990575210fd4f58d902b019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058b58331d91dae5f22e6cfdd495c5a84029ce2a8990575210fd4f58d902b019->enter($__internal_058b58331d91dae5f22e6cfdd495c5a84029ce2a8990575210fd4f58d902b019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_058b58331d91dae5f22e6cfdd495c5a84029ce2a8990575210fd4f58d902b019->leave($__internal_058b58331d91dae5f22e6cfdd495c5a84029ce2a8990575210fd4f58d902b019_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_429e296188eed252cd5a471f65881815327059189ccb100532dab74a41889ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429e296188eed252cd5a471f65881815327059189ccb100532dab74a41889ae4->enter($__internal_429e296188eed252cd5a471f65881815327059189ccb100532dab74a41889ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_429e296188eed252cd5a471f65881815327059189ccb100532dab74a41889ae4->leave($__internal_429e296188eed252cd5a471f65881815327059189ccb100532dab74a41889ae4_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f2d6db0383cfb26ef2727e18bc417bf0b483a631cb8b4706b20acfc48eab94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2d6db0383cfb26ef2727e18bc417bf0b483a631cb8b4706b20acfc48eab94a->enter($__internal_1f2d6db0383cfb26ef2727e18bc417bf0b483a631cb8b4706b20acfc48eab94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f2d6db0383cfb26ef2727e18bc417bf0b483a631cb8b4706b20acfc48eab94a->leave($__internal_1f2d6db0383cfb26ef2727e18bc417bf0b483a631cb8b4706b20acfc48eab94a_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_5fe23cc6015ed00e0daf59b4e43bb96a2e9b5524724282653dd2ce33eb6d143a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe23cc6015ed00e0daf59b4e43bb96a2e9b5524724282653dd2ce33eb6d143a->enter($__internal_5fe23cc6015ed00e0daf59b4e43bb96a2e9b5524724282653dd2ce33eb6d143a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_5fe23cc6015ed00e0daf59b4e43bb96a2e9b5524724282653dd2ce33eb6d143a->leave($__internal_5fe23cc6015ed00e0daf59b4e43bb96a2e9b5524724282653dd2ce33eb6d143a_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d19bd03d37827e333b4925ece4ae462d15b71dc3c67102b7f1de7093431908dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19bd03d37827e333b4925ece4ae462d15b71dc3c67102b7f1de7093431908dd->enter($__internal_d19bd03d37827e333b4925ece4ae462d15b71dc3c67102b7f1de7093431908dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d19bd03d37827e333b4925ece4ae462d15b71dc3c67102b7f1de7093431908dd->leave($__internal_d19bd03d37827e333b4925ece4ae462d15b71dc3c67102b7f1de7093431908dd_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_7eafd32ef44b048eecb62b19e4164ef5081774a808182bd16fc1ad512184b223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eafd32ef44b048eecb62b19e4164ef5081774a808182bd16fc1ad512184b223->enter($__internal_7eafd32ef44b048eecb62b19e4164ef5081774a808182bd16fc1ad512184b223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_7eafd32ef44b048eecb62b19e4164ef5081774a808182bd16fc1ad512184b223->leave($__internal_7eafd32ef44b048eecb62b19e4164ef5081774a808182bd16fc1ad512184b223_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_16900eaa49d009cc323602a2f8abe878fe6a3a9755d675ff5fc58fb4d8152e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16900eaa49d009cc323602a2f8abe878fe6a3a9755d675ff5fc58fb4d8152e19->enter($__internal_16900eaa49d009cc323602a2f8abe878fe6a3a9755d675ff5fc58fb4d8152e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_16900eaa49d009cc323602a2f8abe878fe6a3a9755d675ff5fc58fb4d8152e19->leave($__internal_16900eaa49d009cc323602a2f8abe878fe6a3a9755d675ff5fc58fb4d8152e19_prof);

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
