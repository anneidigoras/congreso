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
        $__internal_a4bf5b8484cc25c57ecc9601207f6f95524d701be828de6682f53bca20ef73a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bf5b8484cc25c57ecc9601207f6f95524d701be828de6682f53bca20ef73a5->enter($__internal_a4bf5b8484cc25c57ecc9601207f6f95524d701be828de6682f53bca20ef73a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a4bf5b8484cc25c57ecc9601207f6f95524d701be828de6682f53bca20ef73a5->leave($__internal_a4bf5b8484cc25c57ecc9601207f6f95524d701be828de6682f53bca20ef73a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b822c8a0801fc834ff7af03558ac7b1a721ec467ac506c8d94fd8b05605b14ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b822c8a0801fc834ff7af03558ac7b1a721ec467ac506c8d94fd8b05605b14ee->enter($__internal_b822c8a0801fc834ff7af03558ac7b1a721ec467ac506c8d94fd8b05605b14ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b822c8a0801fc834ff7af03558ac7b1a721ec467ac506c8d94fd8b05605b14ee->leave($__internal_b822c8a0801fc834ff7af03558ac7b1a721ec467ac506c8d94fd8b05605b14ee_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0ca54ab5ef1113da8fdeb1f42d37e2fa950512299935955b19969ec63ab2e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ca54ab5ef1113da8fdeb1f42d37e2fa950512299935955b19969ec63ab2e34->enter($__internal_f0ca54ab5ef1113da8fdeb1f42d37e2fa950512299935955b19969ec63ab2e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_f0ca54ab5ef1113da8fdeb1f42d37e2fa950512299935955b19969ec63ab2e34->leave($__internal_f0ca54ab5ef1113da8fdeb1f42d37e2fa950512299935955b19969ec63ab2e34_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a17580f02c349786bae1e61d87cb4c1abd38f52f4e8a35c6369efba71f01e368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17580f02c349786bae1e61d87cb4c1abd38f52f4e8a35c6369efba71f01e368->enter($__internal_a17580f02c349786bae1e61d87cb4c1abd38f52f4e8a35c6369efba71f01e368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_a17580f02c349786bae1e61d87cb4c1abd38f52f4e8a35c6369efba71f01e368->leave($__internal_a17580f02c349786bae1e61d87cb4c1abd38f52f4e8a35c6369efba71f01e368_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c09cd8e340ac1e0669acf1e7948ce8a0eaf4b67001b557b690bec581a059781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c09cd8e340ac1e0669acf1e7948ce8a0eaf4b67001b557b690bec581a059781->enter($__internal_4c09cd8e340ac1e0669acf1e7948ce8a0eaf4b67001b557b690bec581a059781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4c09cd8e340ac1e0669acf1e7948ce8a0eaf4b67001b557b690bec581a059781->leave($__internal_4c09cd8e340ac1e0669acf1e7948ce8a0eaf4b67001b557b690bec581a059781_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9d8ba60a3b591095644ea6c761de2acae0643f36ce6834c88e0bfb21957f192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d8ba60a3b591095644ea6c761de2acae0643f36ce6834c88e0bfb21957f192->enter($__internal_d9d8ba60a3b591095644ea6c761de2acae0643f36ce6834c88e0bfb21957f192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9d8ba60a3b591095644ea6c761de2acae0643f36ce6834c88e0bfb21957f192->leave($__internal_d9d8ba60a3b591095644ea6c761de2acae0643f36ce6834c88e0bfb21957f192_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_51630c761503887b12fedfd6cf25c1920946bda8b74dc753cb397ec095a5cf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51630c761503887b12fedfd6cf25c1920946bda8b74dc753cb397ec095a5cf23->enter($__internal_51630c761503887b12fedfd6cf25c1920946bda8b74dc753cb397ec095a5cf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_51630c761503887b12fedfd6cf25c1920946bda8b74dc753cb397ec095a5cf23->leave($__internal_51630c761503887b12fedfd6cf25c1920946bda8b74dc753cb397ec095a5cf23_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_519011ac95a2af8e050c8bddaed74d4d500f164ce8206a26b4da6624cc8eecc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519011ac95a2af8e050c8bddaed74d4d500f164ce8206a26b4da6624cc8eecc8->enter($__internal_519011ac95a2af8e050c8bddaed74d4d500f164ce8206a26b4da6624cc8eecc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_519011ac95a2af8e050c8bddaed74d4d500f164ce8206a26b4da6624cc8eecc8->leave($__internal_519011ac95a2af8e050c8bddaed74d4d500f164ce8206a26b4da6624cc8eecc8_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_3a0cab4a39899901a0b0f2880b7500941ed0b3261cc3ed4a76a077f635ee1232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0cab4a39899901a0b0f2880b7500941ed0b3261cc3ed4a76a077f635ee1232->enter($__internal_3a0cab4a39899901a0b0f2880b7500941ed0b3261cc3ed4a76a077f635ee1232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_3a0cab4a39899901a0b0f2880b7500941ed0b3261cc3ed4a76a077f635ee1232->leave($__internal_3a0cab4a39899901a0b0f2880b7500941ed0b3261cc3ed4a76a077f635ee1232_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_d31746c22ee6e79efb4acbc0dba3bba4d1479d3c557971fd90475f40f0982890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31746c22ee6e79efb4acbc0dba3bba4d1479d3c557971fd90475f40f0982890->enter($__internal_d31746c22ee6e79efb4acbc0dba3bba4d1479d3c557971fd90475f40f0982890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_d31746c22ee6e79efb4acbc0dba3bba4d1479d3c557971fd90475f40f0982890->leave($__internal_d31746c22ee6e79efb4acbc0dba3bba4d1479d3c557971fd90475f40f0982890_prof);

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
