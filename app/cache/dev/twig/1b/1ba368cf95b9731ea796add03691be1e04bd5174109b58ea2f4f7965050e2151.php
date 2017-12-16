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
        $__internal_a10189d47b5440f0707213dcc30921c3f926db6bd9c8001c107c25a9e6addf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10189d47b5440f0707213dcc30921c3f926db6bd9c8001c107c25a9e6addf3c->enter($__internal_a10189d47b5440f0707213dcc30921c3f926db6bd9c8001c107c25a9e6addf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 36
        echo "                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">";
        // line 37
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
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 51
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 55
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 56
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 57
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
        
        $__internal_a10189d47b5440f0707213dcc30921c3f926db6bd9c8001c107c25a9e6addf3c->leave($__internal_a10189d47b5440f0707213dcc30921c3f926db6bd9c8001c107c25a9e6addf3c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d248ffe6db734d325fd190160bbd39db377fb68addb965768faab25dc5bbb99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d248ffe6db734d325fd190160bbd39db377fb68addb965768faab25dc5bbb99c->enter($__internal_d248ffe6db734d325fd190160bbd39db377fb68addb965768faab25dc5bbb99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d248ffe6db734d325fd190160bbd39db377fb68addb965768faab25dc5bbb99c->leave($__internal_d248ffe6db734d325fd190160bbd39db377fb68addb965768faab25dc5bbb99c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c34f9dc9a31003e9c8d3d7617bcfe741d23aae3a222e7c650110b340966f635c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34f9dc9a31003e9c8d3d7617bcfe741d23aae3a222e7c650110b340966f635c->enter($__internal_c34f9dc9a31003e9c8d3d7617bcfe741d23aae3a222e7c650110b340966f635c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_c34f9dc9a31003e9c8d3d7617bcfe741d23aae3a222e7c650110b340966f635c->leave($__internal_c34f9dc9a31003e9c8d3d7617bcfe741d23aae3a222e7c650110b340966f635c_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_addef9c12f7bc552669751be2fe19702d93d2f1b8e1e21f84d6dcdca5f3632f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addef9c12f7bc552669751be2fe19702d93d2f1b8e1e21f84d6dcdca5f3632f6->enter($__internal_addef9c12f7bc552669751be2fe19702d93d2f1b8e1e21f84d6dcdca5f3632f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 21
        echo "                        <nav>
                            <ul class=\"navigation\">
                                ";
        // line 23
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 24
            echo "                                    <li>Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</li>
                                ";
        }
        // line 26
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_list");
        echo "\">Inicio</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_contact");
        echo "\">Contacto</a></li>
                                ";
        // line 28
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 29
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a></li>
                                ";
        } else {
            // line 31
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a></li>
                                ";
        }
        // line 33
        echo "                            </ul>
                        </nav>
                    ";
        
        $__internal_addef9c12f7bc552669751be2fe19702d93d2f1b8e1e21f84d6dcdca5f3632f6->leave($__internal_addef9c12f7bc552669751be2fe19702d93d2f1b8e1e21f84d6dcdca5f3632f6_prof);

    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        $__internal_f00f27c064ccb325714e0d26b4d5bf161b33e980a2aae88b3f0a0543996c480f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00f27c064ccb325714e0d26b4d5bf161b33e980a2aae88b3f0a0543996c480f->enter($__internal_f00f27c064ccb325714e0d26b4d5bf161b33e980a2aae88b3f0a0543996c480f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f00f27c064ccb325714e0d26b4d5bf161b33e980a2aae88b3f0a0543996c480f->leave($__internal_f00f27c064ccb325714e0d26b4d5bf161b33e980a2aae88b3f0a0543996c480f_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_e87a62e2c679dec05d2a49eb7629ccaaf2d945adf5e8efd603001336203df6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87a62e2c679dec05d2a49eb7629ccaaf2d945adf5e8efd603001336203df6db->enter($__internal_e87a62e2c679dec05d2a49eb7629ccaaf2d945adf5e8efd603001336203df6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e87a62e2c679dec05d2a49eb7629ccaaf2d945adf5e8efd603001336203df6db->leave($__internal_e87a62e2c679dec05d2a49eb7629ccaaf2d945adf5e8efd603001336203df6db_prof);

    }

    // line 50
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_392ce8663d00b7124c72a0a701f01dcce3f04f5fdb11494fc2fec406d51ca920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392ce8663d00b7124c72a0a701f01dcce3f04f5fdb11494fc2fec406d51ca920->enter($__internal_392ce8663d00b7124c72a0a701f01dcce3f04f5fdb11494fc2fec406d51ca920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_392ce8663d00b7124c72a0a701f01dcce3f04f5fdb11494fc2fec406d51ca920->leave($__internal_392ce8663d00b7124c72a0a701f01dcce3f04f5fdb11494fc2fec406d51ca920_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_19a53e696138266ff5a70aa03252fae1a5d566dc00343619fa3f359c970c9e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a53e696138266ff5a70aa03252fae1a5d566dc00343619fa3f359c970c9e0b->enter($__internal_19a53e696138266ff5a70aa03252fae1a5d566dc00343619fa3f359c970c9e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_19a53e696138266ff5a70aa03252fae1a5d566dc00343619fa3f359c970c9e0b->leave($__internal_19a53e696138266ff5a70aa03252fae1a5d566dc00343619fa3f359c970c9e0b_prof);

    }

    // line 55
    public function block_linea($context, array $blocks = array())
    {
        $__internal_dd986f34e22b73658687839ac9e39ccdc77c05f70a40d69daaba8a879158c97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd986f34e22b73658687839ac9e39ccdc77c05f70a40d69daaba8a879158c97a->enter($__internal_dd986f34e22b73658687839ac9e39ccdc77c05f70a40d69daaba8a879158c97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_dd986f34e22b73658687839ac9e39ccdc77c05f70a40d69daaba8a879158c97a->leave($__internal_dd986f34e22b73658687839ac9e39ccdc77c05f70a40d69daaba8a879158c97a_prof);

    }

    // line 56
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ceeec5ceaed168ab55e6e862375d89010ae1821f507635afaf66d1d503f2e1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceeec5ceaed168ab55e6e862375d89010ae1821f507635afaf66d1d503f2e1f1->enter($__internal_ceeec5ceaed168ab55e6e862375d89010ae1821f507635afaf66d1d503f2e1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_ceeec5ceaed168ab55e6e862375d89010ae1821f507635afaf66d1d503f2e1f1->leave($__internal_ceeec5ceaed168ab55e6e862375d89010ae1821f507635afaf66d1d503f2e1f1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 56,  236 => 55,  225 => 54,  214 => 50,  203 => 49,  192 => 37,  183 => 33,  177 => 31,  171 => 29,  169 => 28,  165 => 27,  160 => 26,  154 => 24,  152 => 23,  148 => 21,  142 => 20,  134 => 14,  128 => 13,  119 => 11,  113 => 7,  107 => 6,  87 => 57,  84 => 56,  81 => 55,  79 => 54,  74 => 51,  71 => 50,  69 => 49,  54 => 37,  51 => 36,  49 => 20,  43 => 16,  40 => 13,  38 => 6,  31 => 1,);
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
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
                                    <li>Bienvenido, {{app.user.username}}</li>
                                {% endif %}
                                <li><a href=\"{{ path('congreso_congreso_list')}}\">Inicio</a></li>
                                <li><a href=\"{{ path('congreso_congreso_contact')}}\">Contacto</a></li>
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
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
