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
        $__internal_c1c39d6cdd15416452e5bec9e1dc117355c265c3b7ee44910e6022586e092641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c39d6cdd15416452e5bec9e1dc117355c265c3b7ee44910e6022586e092641->enter($__internal_c1c39d6cdd15416452e5bec9e1dc117355c265c3b7ee44910e6022586e092641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c1c39d6cdd15416452e5bec9e1dc117355c265c3b7ee44910e6022586e092641->leave($__internal_c1c39d6cdd15416452e5bec9e1dc117355c265c3b7ee44910e6022586e092641_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2080d63a2145813b167766517a72b9e1b3bf3e2c9b9b68e80860526060296792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2080d63a2145813b167766517a72b9e1b3bf3e2c9b9b68e80860526060296792->enter($__internal_2080d63a2145813b167766517a72b9e1b3bf3e2c9b9b68e80860526060296792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2080d63a2145813b167766517a72b9e1b3bf3e2c9b9b68e80860526060296792->leave($__internal_2080d63a2145813b167766517a72b9e1b3bf3e2c9b9b68e80860526060296792_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3894d9a833d70c93ebd2631583fe1d88e125d790a856368891e5d3a0a18ce7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3894d9a833d70c93ebd2631583fe1d88e125d790a856368891e5d3a0a18ce7b->enter($__internal_d3894d9a833d70c93ebd2631583fe1d88e125d790a856368891e5d3a0a18ce7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_d3894d9a833d70c93ebd2631583fe1d88e125d790a856368891e5d3a0a18ce7b->leave($__internal_d3894d9a833d70c93ebd2631583fe1d88e125d790a856368891e5d3a0a18ce7b_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2d073c2f4e08097579449b3a4ab7dcd3cc5bd4ba687d04aed2e55f736d419249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d073c2f4e08097579449b3a4ab7dcd3cc5bd4ba687d04aed2e55f736d419249->enter($__internal_2d073c2f4e08097579449b3a4ab7dcd3cc5bd4ba687d04aed2e55f736d419249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2d073c2f4e08097579449b3a4ab7dcd3cc5bd4ba687d04aed2e55f736d419249->leave($__internal_2d073c2f4e08097579449b3a4ab7dcd3cc5bd4ba687d04aed2e55f736d419249_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_b09f377a431262f0df87331d31b4d22b837c8342b9ce75b20cf3b2a8adffce73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f377a431262f0df87331d31b4d22b837c8342b9ce75b20cf3b2a8adffce73->enter($__internal_b09f377a431262f0df87331d31b4d22b837c8342b9ce75b20cf3b2a8adffce73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b09f377a431262f0df87331d31b4d22b837c8342b9ce75b20cf3b2a8adffce73->leave($__internal_b09f377a431262f0df87331d31b4d22b837c8342b9ce75b20cf3b2a8adffce73_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bb0c699176489150ce05be17c9a28187e93adda7f41aba50d27fed0cb1b97e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb0c699176489150ce05be17c9a28187e93adda7f41aba50d27fed0cb1b97e4->enter($__internal_6bb0c699176489150ce05be17c9a28187e93adda7f41aba50d27fed0cb1b97e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6bb0c699176489150ce05be17c9a28187e93adda7f41aba50d27fed0cb1b97e4->leave($__internal_6bb0c699176489150ce05be17c9a28187e93adda7f41aba50d27fed0cb1b97e4_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_73e88f4c9e72b379fe440b99b2bdf75cab03001e745af1ee4ab165a916bed155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e88f4c9e72b379fe440b99b2bdf75cab03001e745af1ee4ab165a916bed155->enter($__internal_73e88f4c9e72b379fe440b99b2bdf75cab03001e745af1ee4ab165a916bed155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_73e88f4c9e72b379fe440b99b2bdf75cab03001e745af1ee4ab165a916bed155->leave($__internal_73e88f4c9e72b379fe440b99b2bdf75cab03001e745af1ee4ab165a916bed155_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6f7c50101df8cc1ec0dc718f5f1192d88a761732bcf76e64192a80730cd2905e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7c50101df8cc1ec0dc718f5f1192d88a761732bcf76e64192a80730cd2905e->enter($__internal_6f7c50101df8cc1ec0dc718f5f1192d88a761732bcf76e64192a80730cd2905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6f7c50101df8cc1ec0dc718f5f1192d88a761732bcf76e64192a80730cd2905e->leave($__internal_6f7c50101df8cc1ec0dc718f5f1192d88a761732bcf76e64192a80730cd2905e_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_255aac7f6f8f2e4a880ea3023893e077aa46da14e98d42fbdb0b272198e0d4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255aac7f6f8f2e4a880ea3023893e077aa46da14e98d42fbdb0b272198e0d4b1->enter($__internal_255aac7f6f8f2e4a880ea3023893e077aa46da14e98d42fbdb0b272198e0d4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_255aac7f6f8f2e4a880ea3023893e077aa46da14e98d42fbdb0b272198e0d4b1->leave($__internal_255aac7f6f8f2e4a880ea3023893e077aa46da14e98d42fbdb0b272198e0d4b1_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_46da0e11e0dd0fb67dfa70f3a088d1433eabe15636bcb8a89c94ce65a930972d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46da0e11e0dd0fb67dfa70f3a088d1433eabe15636bcb8a89c94ce65a930972d->enter($__internal_46da0e11e0dd0fb67dfa70f3a088d1433eabe15636bcb8a89c94ce65a930972d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_46da0e11e0dd0fb67dfa70f3a088d1433eabe15636bcb8a89c94ce65a930972d->leave($__internal_46da0e11e0dd0fb67dfa70f3a088d1433eabe15636bcb8a89c94ce65a930972d_prof);

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
