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
        $__internal_75ffbb6c06830c24a7991f1ff5f4022ecbba0dc225591110a5810c9e38b69bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ffbb6c06830c24a7991f1ff5f4022ecbba0dc225591110a5810c9e38b69bea->enter($__internal_75ffbb6c06830c24a7991f1ff5f4022ecbba0dc225591110a5810c9e38b69bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_75ffbb6c06830c24a7991f1ff5f4022ecbba0dc225591110a5810c9e38b69bea->leave($__internal_75ffbb6c06830c24a7991f1ff5f4022ecbba0dc225591110a5810c9e38b69bea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12a4bae19031ead496436d70eb0bda168a851e5eb2fabb52bf845bfe3a8f93cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a4bae19031ead496436d70eb0bda168a851e5eb2fabb52bf845bfe3a8f93cd->enter($__internal_12a4bae19031ead496436d70eb0bda168a851e5eb2fabb52bf845bfe3a8f93cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_12a4bae19031ead496436d70eb0bda168a851e5eb2fabb52bf845bfe3a8f93cd->leave($__internal_12a4bae19031ead496436d70eb0bda168a851e5eb2fabb52bf845bfe3a8f93cd_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_904ebc095d428b97fccc88802165101b398c2d4c192f93934578b40d8c8c0747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904ebc095d428b97fccc88802165101b398c2d4c192f93934578b40d8c8c0747->enter($__internal_904ebc095d428b97fccc88802165101b398c2d4c192f93934578b40d8c8c0747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_904ebc095d428b97fccc88802165101b398c2d4c192f93934578b40d8c8c0747->leave($__internal_904ebc095d428b97fccc88802165101b398c2d4c192f93934578b40d8c8c0747_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d513c15811e2aa8a9d18e1321a0da081321db3226e1b203b4a75f5f82eec988d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d513c15811e2aa8a9d18e1321a0da081321db3226e1b203b4a75f5f82eec988d->enter($__internal_d513c15811e2aa8a9d18e1321a0da081321db3226e1b203b4a75f5f82eec988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_d513c15811e2aa8a9d18e1321a0da081321db3226e1b203b4a75f5f82eec988d->leave($__internal_d513c15811e2aa8a9d18e1321a0da081321db3226e1b203b4a75f5f82eec988d_prof);

    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2912581f40559a751bc1b93b89c6ef424c3688c2bc287ae1952088f8e3ad07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2912581f40559a751bc1b93b89c6ef424c3688c2bc287ae1952088f8e3ad07d->enter($__internal_b2912581f40559a751bc1b93b89c6ef424c3688c2bc287ae1952088f8e3ad07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b2912581f40559a751bc1b93b89c6ef424c3688c2bc287ae1952088f8e3ad07d->leave($__internal_b2912581f40559a751bc1b93b89c6ef424c3688c2bc287ae1952088f8e3ad07d_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_fafe7e787f20a68b272b43d96c7822b20822d49fe428a5065d4d1df9a931892d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafe7e787f20a68b272b43d96c7822b20822d49fe428a5065d4d1df9a931892d->enter($__internal_fafe7e787f20a68b272b43d96c7822b20822d49fe428a5065d4d1df9a931892d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fafe7e787f20a68b272b43d96c7822b20822d49fe428a5065d4d1df9a931892d->leave($__internal_fafe7e787f20a68b272b43d96c7822b20822d49fe428a5065d4d1df9a931892d_prof);

    }

    // line 50
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_00926959b3120b013ac639b5568f323327d2d63827f5e975bb211a01c55f09a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00926959b3120b013ac639b5568f323327d2d63827f5e975bb211a01c55f09a9->enter($__internal_00926959b3120b013ac639b5568f323327d2d63827f5e975bb211a01c55f09a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_00926959b3120b013ac639b5568f323327d2d63827f5e975bb211a01c55f09a9->leave($__internal_00926959b3120b013ac639b5568f323327d2d63827f5e975bb211a01c55f09a9_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d4d18956055434668fd4e7b152c9707e359c09f9e24610ce09b26fc2db8b765e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d18956055434668fd4e7b152c9707e359c09f9e24610ce09b26fc2db8b765e->enter($__internal_d4d18956055434668fd4e7b152c9707e359c09f9e24610ce09b26fc2db8b765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d4d18956055434668fd4e7b152c9707e359c09f9e24610ce09b26fc2db8b765e->leave($__internal_d4d18956055434668fd4e7b152c9707e359c09f9e24610ce09b26fc2db8b765e_prof);

    }

    // line 55
    public function block_linea($context, array $blocks = array())
    {
        $__internal_ebb3ff99cc0695446219ab9f7813f97650830fe3b1c78e25b0c73f0d74abae50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb3ff99cc0695446219ab9f7813f97650830fe3b1c78e25b0c73f0d74abae50->enter($__internal_ebb3ff99cc0695446219ab9f7813f97650830fe3b1c78e25b0c73f0d74abae50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_ebb3ff99cc0695446219ab9f7813f97650830fe3b1c78e25b0c73f0d74abae50->leave($__internal_ebb3ff99cc0695446219ab9f7813f97650830fe3b1c78e25b0c73f0d74abae50_prof);

    }

    // line 56
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_32acfa2cec93329408de036b6c9e1555a0931d93005cbf053710a8ad2c9b40a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32acfa2cec93329408de036b6c9e1555a0931d93005cbf053710a8ad2c9b40a8->enter($__internal_32acfa2cec93329408de036b6c9e1555a0931d93005cbf053710a8ad2c9b40a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_32acfa2cec93329408de036b6c9e1555a0931d93005cbf053710a8ad2c9b40a8->leave($__internal_32acfa2cec93329408de036b6c9e1555a0931d93005cbf053710a8ad2c9b40a8_prof);

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
