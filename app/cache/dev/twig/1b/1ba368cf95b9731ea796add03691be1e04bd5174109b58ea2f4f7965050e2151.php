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
        $__internal_50ba0902a20544a9f67f1e33af7f7133afdf83f06f1492d98c893615173c5bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ba0902a20544a9f67f1e33af7f7133afdf83f06f1492d98c893615173c5bf6->enter($__internal_50ba0902a20544a9f67f1e33af7f7133afdf83f06f1492d98c893615173c5bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_50ba0902a20544a9f67f1e33af7f7133afdf83f06f1492d98c893615173c5bf6->leave($__internal_50ba0902a20544a9f67f1e33af7f7133afdf83f06f1492d98c893615173c5bf6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_253ff4de044672d5c053e610680818dcef0f66fcda405c00d5d6834f35ad4043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253ff4de044672d5c053e610680818dcef0f66fcda405c00d5d6834f35ad4043->enter($__internal_253ff4de044672d5c053e610680818dcef0f66fcda405c00d5d6834f35ad4043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_253ff4de044672d5c053e610680818dcef0f66fcda405c00d5d6834f35ad4043->leave($__internal_253ff4de044672d5c053e610680818dcef0f66fcda405c00d5d6834f35ad4043_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90928079be5b940cfc85b6ac21f7e5638b8b1cfa574533c9bd8bc10a2675124f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90928079be5b940cfc85b6ac21f7e5638b8b1cfa574533c9bd8bc10a2675124f->enter($__internal_90928079be5b940cfc85b6ac21f7e5638b8b1cfa574533c9bd8bc10a2675124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_90928079be5b940cfc85b6ac21f7e5638b8b1cfa574533c9bd8bc10a2675124f->leave($__internal_90928079be5b940cfc85b6ac21f7e5638b8b1cfa574533c9bd8bc10a2675124f_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_67fbc5256be64a5ba069be0d91e273a4ea772f8bf3b99e58ec8c2019081c9c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fbc5256be64a5ba069be0d91e273a4ea772f8bf3b99e58ec8c2019081c9c40->enter($__internal_67fbc5256be64a5ba069be0d91e273a4ea772f8bf3b99e58ec8c2019081c9c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_67fbc5256be64a5ba069be0d91e273a4ea772f8bf3b99e58ec8c2019081c9c40->leave($__internal_67fbc5256be64a5ba069be0d91e273a4ea772f8bf3b99e58ec8c2019081c9c40_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_e543d982f647283a1608b189180e4390e24d889fd2c32b65b6c22df33522dd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e543d982f647283a1608b189180e4390e24d889fd2c32b65b6c22df33522dd1d->enter($__internal_e543d982f647283a1608b189180e4390e24d889fd2c32b65b6c22df33522dd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e543d982f647283a1608b189180e4390e24d889fd2c32b65b6c22df33522dd1d->leave($__internal_e543d982f647283a1608b189180e4390e24d889fd2c32b65b6c22df33522dd1d_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_26d5671b7e501e03fd0be631958761f2604a7c88f38948afbd62b91d4942f6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d5671b7e501e03fd0be631958761f2604a7c88f38948afbd62b91d4942f6a5->enter($__internal_26d5671b7e501e03fd0be631958761f2604a7c88f38948afbd62b91d4942f6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26d5671b7e501e03fd0be631958761f2604a7c88f38948afbd62b91d4942f6a5->leave($__internal_26d5671b7e501e03fd0be631958761f2604a7c88f38948afbd62b91d4942f6a5_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_f886b76a8a8739e65cc5c6c8bd7c22d1dfe5a0e40a1205d9881fd6f8e1ce7fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f886b76a8a8739e65cc5c6c8bd7c22d1dfe5a0e40a1205d9881fd6f8e1ce7fcc->enter($__internal_f886b76a8a8739e65cc5c6c8bd7c22d1dfe5a0e40a1205d9881fd6f8e1ce7fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_f886b76a8a8739e65cc5c6c8bd7c22d1dfe5a0e40a1205d9881fd6f8e1ce7fcc->leave($__internal_f886b76a8a8739e65cc5c6c8bd7c22d1dfe5a0e40a1205d9881fd6f8e1ce7fcc_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3d18d4000ccaa2b75761d0956ac5415adcb73ef5f50aa599d990c1da7aaa95fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d18d4000ccaa2b75761d0956ac5415adcb73ef5f50aa599d990c1da7aaa95fb->enter($__internal_3d18d4000ccaa2b75761d0956ac5415adcb73ef5f50aa599d990c1da7aaa95fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_3d18d4000ccaa2b75761d0956ac5415adcb73ef5f50aa599d990c1da7aaa95fb->leave($__internal_3d18d4000ccaa2b75761d0956ac5415adcb73ef5f50aa599d990c1da7aaa95fb_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_0a62d920fe60e2240f0709798826760db609ef7342d1c6fb5b092c14dfbb2b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a62d920fe60e2240f0709798826760db609ef7342d1c6fb5b092c14dfbb2b4c->enter($__internal_0a62d920fe60e2240f0709798826760db609ef7342d1c6fb5b092c14dfbb2b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_0a62d920fe60e2240f0709798826760db609ef7342d1c6fb5b092c14dfbb2b4c->leave($__internal_0a62d920fe60e2240f0709798826760db609ef7342d1c6fb5b092c14dfbb2b4c_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_4e25d373f4a21d8cc80ea6104ae83c22e660a6f461ef38b05a71a447d271acc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e25d373f4a21d8cc80ea6104ae83c22e660a6f461ef38b05a71a447d271acc5->enter($__internal_4e25d373f4a21d8cc80ea6104ae83c22e660a6f461ef38b05a71a447d271acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_4e25d373f4a21d8cc80ea6104ae83c22e660a6f461ef38b05a71a447d271acc5->leave($__internal_4e25d373f4a21d8cc80ea6104ae83c22e660a6f461ef38b05a71a447d271acc5_prof);

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
