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
        $__internal_dba7bd436d3c0f9539d2ff228b118dd3643899c4c04b30cc1ad847aa22073c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba7bd436d3c0f9539d2ff228b118dd3643899c4c04b30cc1ad847aa22073c46->enter($__internal_dba7bd436d3c0f9539d2ff228b118dd3643899c4c04b30cc1ad847aa22073c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_dba7bd436d3c0f9539d2ff228b118dd3643899c4c04b30cc1ad847aa22073c46->leave($__internal_dba7bd436d3c0f9539d2ff228b118dd3643899c4c04b30cc1ad847aa22073c46_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42d771e4e8bf7afd7803c2a4199de5613856aed1722385fb3ff3ddfc2ba74ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d771e4e8bf7afd7803c2a4199de5613856aed1722385fb3ff3ddfc2ba74ccc->enter($__internal_42d771e4e8bf7afd7803c2a4199de5613856aed1722385fb3ff3ddfc2ba74ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_42d771e4e8bf7afd7803c2a4199de5613856aed1722385fb3ff3ddfc2ba74ccc->leave($__internal_42d771e4e8bf7afd7803c2a4199de5613856aed1722385fb3ff3ddfc2ba74ccc_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5547b69589c28542b9ad202367e403d80649446ea81ded86bbc952580574023a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5547b69589c28542b9ad202367e403d80649446ea81ded86bbc952580574023a->enter($__internal_5547b69589c28542b9ad202367e403d80649446ea81ded86bbc952580574023a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_5547b69589c28542b9ad202367e403d80649446ea81ded86bbc952580574023a->leave($__internal_5547b69589c28542b9ad202367e403d80649446ea81ded86bbc952580574023a_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_fb103fe7b9f3a4003ab3d095f62cb74e0d7717d7f47257b6694d9af8579a3b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb103fe7b9f3a4003ab3d095f62cb74e0d7717d7f47257b6694d9af8579a3b9c->enter($__internal_fb103fe7b9f3a4003ab3d095f62cb74e0d7717d7f47257b6694d9af8579a3b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_fb103fe7b9f3a4003ab3d095f62cb74e0d7717d7f47257b6694d9af8579a3b9c->leave($__internal_fb103fe7b9f3a4003ab3d095f62cb74e0d7717d7f47257b6694d9af8579a3b9c_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_22060b7e9a1eb7f9c335b42372235901c6d5868e2091e0be32a5fb1a3260b258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22060b7e9a1eb7f9c335b42372235901c6d5868e2091e0be32a5fb1a3260b258->enter($__internal_22060b7e9a1eb7f9c335b42372235901c6d5868e2091e0be32a5fb1a3260b258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_22060b7e9a1eb7f9c335b42372235901c6d5868e2091e0be32a5fb1a3260b258->leave($__internal_22060b7e9a1eb7f9c335b42372235901c6d5868e2091e0be32a5fb1a3260b258_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_b42e60449be762c62ee15ee28f309dc388b09dafb27e5c146dc74cf9508c3ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42e60449be762c62ee15ee28f309dc388b09dafb27e5c146dc74cf9508c3ff8->enter($__internal_b42e60449be762c62ee15ee28f309dc388b09dafb27e5c146dc74cf9508c3ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b42e60449be762c62ee15ee28f309dc388b09dafb27e5c146dc74cf9508c3ff8->leave($__internal_b42e60449be762c62ee15ee28f309dc388b09dafb27e5c146dc74cf9508c3ff8_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_bc4ce39f8696a218f29405e9ae63f32d57f32a18ade9f6d7f1bac12f29ec159a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4ce39f8696a218f29405e9ae63f32d57f32a18ade9f6d7f1bac12f29ec159a->enter($__internal_bc4ce39f8696a218f29405e9ae63f32d57f32a18ade9f6d7f1bac12f29ec159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_bc4ce39f8696a218f29405e9ae63f32d57f32a18ade9f6d7f1bac12f29ec159a->leave($__internal_bc4ce39f8696a218f29405e9ae63f32d57f32a18ade9f6d7f1bac12f29ec159a_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bacaa516c4f0c92fbeaab1b08b637e287e0029a4d5d5d26b384329a665f49ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacaa516c4f0c92fbeaab1b08b637e287e0029a4d5d5d26b384329a665f49ba2->enter($__internal_bacaa516c4f0c92fbeaab1b08b637e287e0029a4d5d5d26b384329a665f49ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_bacaa516c4f0c92fbeaab1b08b637e287e0029a4d5d5d26b384329a665f49ba2->leave($__internal_bacaa516c4f0c92fbeaab1b08b637e287e0029a4d5d5d26b384329a665f49ba2_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e96dc8a135f2843ebd95475e0df0074cda7feb8bd202acea15068c97cd95066d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96dc8a135f2843ebd95475e0df0074cda7feb8bd202acea15068c97cd95066d->enter($__internal_e96dc8a135f2843ebd95475e0df0074cda7feb8bd202acea15068c97cd95066d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_e96dc8a135f2843ebd95475e0df0074cda7feb8bd202acea15068c97cd95066d->leave($__internal_e96dc8a135f2843ebd95475e0df0074cda7feb8bd202acea15068c97cd95066d_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_362047adfcccc62c8491568781a8101154e756359f7ecf5c9cae06962027e450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362047adfcccc62c8491568781a8101154e756359f7ecf5c9cae06962027e450->enter($__internal_362047adfcccc62c8491568781a8101154e756359f7ecf5c9cae06962027e450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_362047adfcccc62c8491568781a8101154e756359f7ecf5c9cae06962027e450->leave($__internal_362047adfcccc62c8491568781a8101154e756359f7ecf5c9cae06962027e450_prof);

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
