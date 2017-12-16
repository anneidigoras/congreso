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
        $__internal_1252c76c54c9da98378a944aa9c8cd93ba922540cda610e693763a08eaebc573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1252c76c54c9da98378a944aa9c8cd93ba922540cda610e693763a08eaebc573->enter($__internal_1252c76c54c9da98378a944aa9c8cd93ba922540cda610e693763a08eaebc573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1252c76c54c9da98378a944aa9c8cd93ba922540cda610e693763a08eaebc573->leave($__internal_1252c76c54c9da98378a944aa9c8cd93ba922540cda610e693763a08eaebc573_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29f7e0fb1e9c5efe2e6658486f3a277db0329f9313c4b02fd81ede4d8826cb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f7e0fb1e9c5efe2e6658486f3a277db0329f9313c4b02fd81ede4d8826cb36->enter($__internal_29f7e0fb1e9c5efe2e6658486f3a277db0329f9313c4b02fd81ede4d8826cb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_29f7e0fb1e9c5efe2e6658486f3a277db0329f9313c4b02fd81ede4d8826cb36->leave($__internal_29f7e0fb1e9c5efe2e6658486f3a277db0329f9313c4b02fd81ede4d8826cb36_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17f9a80aee781e75b3a5d6369c7622b48adfcf5c8d8ae18e02b8018850f17749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f9a80aee781e75b3a5d6369c7622b48adfcf5c8d8ae18e02b8018850f17749->enter($__internal_17f9a80aee781e75b3a5d6369c7622b48adfcf5c8d8ae18e02b8018850f17749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_17f9a80aee781e75b3a5d6369c7622b48adfcf5c8d8ae18e02b8018850f17749->leave($__internal_17f9a80aee781e75b3a5d6369c7622b48adfcf5c8d8ae18e02b8018850f17749_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_55c12840143c189d34aa208b5091a2774de6122238e0699386feb49d9c1328f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c12840143c189d34aa208b5091a2774de6122238e0699386feb49d9c1328f8->enter($__internal_55c12840143c189d34aa208b5091a2774de6122238e0699386feb49d9c1328f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_55c12840143c189d34aa208b5091a2774de6122238e0699386feb49d9c1328f8->leave($__internal_55c12840143c189d34aa208b5091a2774de6122238e0699386feb49d9c1328f8_prof);

    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c8ccb29d441cacf2009e7a34192297ab501228530b24cb9edbfbe2d2d15b4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8ccb29d441cacf2009e7a34192297ab501228530b24cb9edbfbe2d2d15b4a3->enter($__internal_3c8ccb29d441cacf2009e7a34192297ab501228530b24cb9edbfbe2d2d15b4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3c8ccb29d441cacf2009e7a34192297ab501228530b24cb9edbfbe2d2d15b4a3->leave($__internal_3c8ccb29d441cacf2009e7a34192297ab501228530b24cb9edbfbe2d2d15b4a3_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c76fdb8f26b2beeab62c62d4e39f390fcffadcfc75397bc9a0462f9bc293a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c76fdb8f26b2beeab62c62d4e39f390fcffadcfc75397bc9a0462f9bc293a7e->enter($__internal_8c76fdb8f26b2beeab62c62d4e39f390fcffadcfc75397bc9a0462f9bc293a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c76fdb8f26b2beeab62c62d4e39f390fcffadcfc75397bc9a0462f9bc293a7e->leave($__internal_8c76fdb8f26b2beeab62c62d4e39f390fcffadcfc75397bc9a0462f9bc293a7e_prof);

    }

    // line 50
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_d66a9f5ffe557b8dd64cd6a8a35fa4f52ff75c1d31b14709c00dc623f82e4e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66a9f5ffe557b8dd64cd6a8a35fa4f52ff75c1d31b14709c00dc623f82e4e7f->enter($__internal_d66a9f5ffe557b8dd64cd6a8a35fa4f52ff75c1d31b14709c00dc623f82e4e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_d66a9f5ffe557b8dd64cd6a8a35fa4f52ff75c1d31b14709c00dc623f82e4e7f->leave($__internal_d66a9f5ffe557b8dd64cd6a8a35fa4f52ff75c1d31b14709c00dc623f82e4e7f_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_434ae99db2f238c15e8b728d9e5bffedc8b62eebe7ba3149cfa4bbfe8f801f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434ae99db2f238c15e8b728d9e5bffedc8b62eebe7ba3149cfa4bbfe8f801f5b->enter($__internal_434ae99db2f238c15e8b728d9e5bffedc8b62eebe7ba3149cfa4bbfe8f801f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_434ae99db2f238c15e8b728d9e5bffedc8b62eebe7ba3149cfa4bbfe8f801f5b->leave($__internal_434ae99db2f238c15e8b728d9e5bffedc8b62eebe7ba3149cfa4bbfe8f801f5b_prof);

    }

    // line 55
    public function block_linea($context, array $blocks = array())
    {
        $__internal_4cad6d4ec3cffb9297b14ca480c5d3b874a156f9cc7027dd22028337caa2dab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cad6d4ec3cffb9297b14ca480c5d3b874a156f9cc7027dd22028337caa2dab4->enter($__internal_4cad6d4ec3cffb9297b14ca480c5d3b874a156f9cc7027dd22028337caa2dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_4cad6d4ec3cffb9297b14ca480c5d3b874a156f9cc7027dd22028337caa2dab4->leave($__internal_4cad6d4ec3cffb9297b14ca480c5d3b874a156f9cc7027dd22028337caa2dab4_prof);

    }

    // line 56
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_f719afa7596866f85bbaed9151515818b1e45208683a184779f419920c0e0bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f719afa7596866f85bbaed9151515818b1e45208683a184779f419920c0e0bf9->enter($__internal_f719afa7596866f85bbaed9151515818b1e45208683a184779f419920c0e0bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_f719afa7596866f85bbaed9151515818b1e45208683a184779f419920c0e0bf9->leave($__internal_f719afa7596866f85bbaed9151515818b1e45208683a184779f419920c0e0bf9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
