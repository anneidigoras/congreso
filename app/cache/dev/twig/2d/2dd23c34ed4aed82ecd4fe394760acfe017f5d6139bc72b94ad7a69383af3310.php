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
        $__internal_586ebf8471768730aa0a824bea4ecb49f3a4d5b5dbd06e0df1f198108d1f3931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586ebf8471768730aa0a824bea4ecb49f3a4d5b5dbd06e0df1f198108d1f3931->enter($__internal_586ebf8471768730aa0a824bea4ecb49f3a4d5b5dbd06e0df1f198108d1f3931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_586ebf8471768730aa0a824bea4ecb49f3a4d5b5dbd06e0df1f198108d1f3931->leave($__internal_586ebf8471768730aa0a824bea4ecb49f3a4d5b5dbd06e0df1f198108d1f3931_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59b1dffa8f2ebfa8f8e132d508b2d454d5c672e22a5caa0727ea9ec9cbbbfb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b1dffa8f2ebfa8f8e132d508b2d454d5c672e22a5caa0727ea9ec9cbbbfb13->enter($__internal_59b1dffa8f2ebfa8f8e132d508b2d454d5c672e22a5caa0727ea9ec9cbbbfb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_59b1dffa8f2ebfa8f8e132d508b2d454d5c672e22a5caa0727ea9ec9cbbbfb13->leave($__internal_59b1dffa8f2ebfa8f8e132d508b2d454d5c672e22a5caa0727ea9ec9cbbbfb13_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79a5b693ef491149de3e5380dc4a8b84c920602dcd13bff6dc02b580fd93abe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a5b693ef491149de3e5380dc4a8b84c920602dcd13bff6dc02b580fd93abe6->enter($__internal_79a5b693ef491149de3e5380dc4a8b84c920602dcd13bff6dc02b580fd93abe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_79a5b693ef491149de3e5380dc4a8b84c920602dcd13bff6dc02b580fd93abe6->leave($__internal_79a5b693ef491149de3e5380dc4a8b84c920602dcd13bff6dc02b580fd93abe6_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5b3cfd4183da7aebfa815eb80a67ab3c3a3baf2fb990a2c42d0260523b58867d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3cfd4183da7aebfa815eb80a67ab3c3a3baf2fb990a2c42d0260523b58867d->enter($__internal_5b3cfd4183da7aebfa815eb80a67ab3c3a3baf2fb990a2c42d0260523b58867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_5b3cfd4183da7aebfa815eb80a67ab3c3a3baf2fb990a2c42d0260523b58867d->leave($__internal_5b3cfd4183da7aebfa815eb80a67ab3c3a3baf2fb990a2c42d0260523b58867d_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_360cd7271b1e90841a60bf3b6189a36a53a14f8540dd4223860618585fa156d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360cd7271b1e90841a60bf3b6189a36a53a14f8540dd4223860618585fa156d5->enter($__internal_360cd7271b1e90841a60bf3b6189a36a53a14f8540dd4223860618585fa156d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_360cd7271b1e90841a60bf3b6189a36a53a14f8540dd4223860618585fa156d5->leave($__internal_360cd7271b1e90841a60bf3b6189a36a53a14f8540dd4223860618585fa156d5_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd9d2a40b9aaa9df6d3516a90e76f3a2013b0dcc7a68266bc59a617dad6af9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9d2a40b9aaa9df6d3516a90e76f3a2013b0dcc7a68266bc59a617dad6af9b8->enter($__internal_fd9d2a40b9aaa9df6d3516a90e76f3a2013b0dcc7a68266bc59a617dad6af9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd9d2a40b9aaa9df6d3516a90e76f3a2013b0dcc7a68266bc59a617dad6af9b8->leave($__internal_fd9d2a40b9aaa9df6d3516a90e76f3a2013b0dcc7a68266bc59a617dad6af9b8_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_e069bb415bd2c61cfe51655ce4c430168e4ac88f5351d80332b76dca617df1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e069bb415bd2c61cfe51655ce4c430168e4ac88f5351d80332b76dca617df1f4->enter($__internal_e069bb415bd2c61cfe51655ce4c430168e4ac88f5351d80332b76dca617df1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_e069bb415bd2c61cfe51655ce4c430168e4ac88f5351d80332b76dca617df1f4->leave($__internal_e069bb415bd2c61cfe51655ce4c430168e4ac88f5351d80332b76dca617df1f4_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_267a6bd902ec45c12ac9cb287b9bbe371e5699b3f6159fe2c15a326e701b37ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267a6bd902ec45c12ac9cb287b9bbe371e5699b3f6159fe2c15a326e701b37ac->enter($__internal_267a6bd902ec45c12ac9cb287b9bbe371e5699b3f6159fe2c15a326e701b37ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_267a6bd902ec45c12ac9cb287b9bbe371e5699b3f6159fe2c15a326e701b37ac->leave($__internal_267a6bd902ec45c12ac9cb287b9bbe371e5699b3f6159fe2c15a326e701b37ac_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e22b8a1c548a6523dd48bf418ea8d0d2ca2d9c06fd6ca5c2e605a1ebe20d8269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22b8a1c548a6523dd48bf418ea8d0d2ca2d9c06fd6ca5c2e605a1ebe20d8269->enter($__internal_e22b8a1c548a6523dd48bf418ea8d0d2ca2d9c06fd6ca5c2e605a1ebe20d8269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_e22b8a1c548a6523dd48bf418ea8d0d2ca2d9c06fd6ca5c2e605a1ebe20d8269->leave($__internal_e22b8a1c548a6523dd48bf418ea8d0d2ca2d9c06fd6ca5c2e605a1ebe20d8269_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_4142042c5d53c712ea17791c542d1eb7c2a812b28037e648e673a7c2776823c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4142042c5d53c712ea17791c542d1eb7c2a812b28037e648e673a7c2776823c9->enter($__internal_4142042c5d53c712ea17791c542d1eb7c2a812b28037e648e673a7c2776823c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_4142042c5d53c712ea17791c542d1eb7c2a812b28037e648e673a7c2776823c9->leave($__internal_4142042c5d53c712ea17791c542d1eb7c2a812b28037e648e673a7c2776823c9_prof);

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
