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
        $__internal_26135686ae261820bb5c253da1479a964dec8c28a92f7c1730cf55ad938bdb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26135686ae261820bb5c253da1479a964dec8c28a92f7c1730cf55ad938bdb18->enter($__internal_26135686ae261820bb5c253da1479a964dec8c28a92f7c1730cf55ad938bdb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_26135686ae261820bb5c253da1479a964dec8c28a92f7c1730cf55ad938bdb18->leave($__internal_26135686ae261820bb5c253da1479a964dec8c28a92f7c1730cf55ad938bdb18_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47e0afe8433c306256f2a5ab2f0c05d3dd44935ec5091755be56fd6210dbef97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e0afe8433c306256f2a5ab2f0c05d3dd44935ec5091755be56fd6210dbef97->enter($__internal_47e0afe8433c306256f2a5ab2f0c05d3dd44935ec5091755be56fd6210dbef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_47e0afe8433c306256f2a5ab2f0c05d3dd44935ec5091755be56fd6210dbef97->leave($__internal_47e0afe8433c306256f2a5ab2f0c05d3dd44935ec5091755be56fd6210dbef97_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d1b4f051627788fdb7fc2eb8bf5fdf81a3cc7d451ee1d06b25a5b8eca2ed942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1b4f051627788fdb7fc2eb8bf5fdf81a3cc7d451ee1d06b25a5b8eca2ed942->enter($__internal_0d1b4f051627788fdb7fc2eb8bf5fdf81a3cc7d451ee1d06b25a5b8eca2ed942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_0d1b4f051627788fdb7fc2eb8bf5fdf81a3cc7d451ee1d06b25a5b8eca2ed942->leave($__internal_0d1b4f051627788fdb7fc2eb8bf5fdf81a3cc7d451ee1d06b25a5b8eca2ed942_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_85ad0f51906e0dc0bae8c71c4939bce601d255ed004f338852e24dba4d2f3e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ad0f51906e0dc0bae8c71c4939bce601d255ed004f338852e24dba4d2f3e13->enter($__internal_85ad0f51906e0dc0bae8c71c4939bce601d255ed004f338852e24dba4d2f3e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_85ad0f51906e0dc0bae8c71c4939bce601d255ed004f338852e24dba4d2f3e13->leave($__internal_85ad0f51906e0dc0bae8c71c4939bce601d255ed004f338852e24dba4d2f3e13_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_c513254a9a97dee35d263c8c889196e493edabaa858c3fedb50364f8fcec5b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c513254a9a97dee35d263c8c889196e493edabaa858c3fedb50364f8fcec5b4c->enter($__internal_c513254a9a97dee35d263c8c889196e493edabaa858c3fedb50364f8fcec5b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c513254a9a97dee35d263c8c889196e493edabaa858c3fedb50364f8fcec5b4c->leave($__internal_c513254a9a97dee35d263c8c889196e493edabaa858c3fedb50364f8fcec5b4c_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_64b4599861f56706e5dd5ba1d369da33747ff2d9064b0792ecd713c95fdaabc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b4599861f56706e5dd5ba1d369da33747ff2d9064b0792ecd713c95fdaabc9->enter($__internal_64b4599861f56706e5dd5ba1d369da33747ff2d9064b0792ecd713c95fdaabc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64b4599861f56706e5dd5ba1d369da33747ff2d9064b0792ecd713c95fdaabc9->leave($__internal_64b4599861f56706e5dd5ba1d369da33747ff2d9064b0792ecd713c95fdaabc9_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_e095f5129f91664486434914952a5be1446962270ac94ea51a18167a619dcb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e095f5129f91664486434914952a5be1446962270ac94ea51a18167a619dcb5f->enter($__internal_e095f5129f91664486434914952a5be1446962270ac94ea51a18167a619dcb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_e095f5129f91664486434914952a5be1446962270ac94ea51a18167a619dcb5f->leave($__internal_e095f5129f91664486434914952a5be1446962270ac94ea51a18167a619dcb5f_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_83529a38225e38023d2a6779fd7d7cffda0698f801161d8122938ba4b859f7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83529a38225e38023d2a6779fd7d7cffda0698f801161d8122938ba4b859f7ce->enter($__internal_83529a38225e38023d2a6779fd7d7cffda0698f801161d8122938ba4b859f7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_83529a38225e38023d2a6779fd7d7cffda0698f801161d8122938ba4b859f7ce->leave($__internal_83529a38225e38023d2a6779fd7d7cffda0698f801161d8122938ba4b859f7ce_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_d202f06a47c7ab84b6dacfc47430874812a1edb71e06ae975398c8ea96748a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d202f06a47c7ab84b6dacfc47430874812a1edb71e06ae975398c8ea96748a78->enter($__internal_d202f06a47c7ab84b6dacfc47430874812a1edb71e06ae975398c8ea96748a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_d202f06a47c7ab84b6dacfc47430874812a1edb71e06ae975398c8ea96748a78->leave($__internal_d202f06a47c7ab84b6dacfc47430874812a1edb71e06ae975398c8ea96748a78_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_0b4fac7f7a78c21ba0b11124d72c3cb996138efa4de6b52619bbbca1a3c231e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4fac7f7a78c21ba0b11124d72c3cb996138efa4de6b52619bbbca1a3c231e7->enter($__internal_0b4fac7f7a78c21ba0b11124d72c3cb996138efa4de6b52619bbbca1a3c231e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_0b4fac7f7a78c21ba0b11124d72c3cb996138efa4de6b52619bbbca1a3c231e7->leave($__internal_0b4fac7f7a78c21ba0b11124d72c3cb996138efa4de6b52619bbbca1a3c231e7_prof);

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
