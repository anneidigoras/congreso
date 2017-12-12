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
        $__internal_1527c11ebacdd07ceba0069bf146af6ef03ec7faca994eb95266e44c45c49104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1527c11ebacdd07ceba0069bf146af6ef03ec7faca994eb95266e44c45c49104->enter($__internal_1527c11ebacdd07ceba0069bf146af6ef03ec7faca994eb95266e44c45c49104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1527c11ebacdd07ceba0069bf146af6ef03ec7faca994eb95266e44c45c49104->leave($__internal_1527c11ebacdd07ceba0069bf146af6ef03ec7faca994eb95266e44c45c49104_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c012b6b07ea9fa33e2337c09dc824a2057d313387922a18edfe6f0166193f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c012b6b07ea9fa33e2337c09dc824a2057d313387922a18edfe6f0166193f29->enter($__internal_2c012b6b07ea9fa33e2337c09dc824a2057d313387922a18edfe6f0166193f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2c012b6b07ea9fa33e2337c09dc824a2057d313387922a18edfe6f0166193f29->leave($__internal_2c012b6b07ea9fa33e2337c09dc824a2057d313387922a18edfe6f0166193f29_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dd35949f5ef28e9d7b9eb4779ab19df2a717ea6d5947efd8b0aa14a4b6def80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd35949f5ef28e9d7b9eb4779ab19df2a717ea6d5947efd8b0aa14a4b6def80->enter($__internal_8dd35949f5ef28e9d7b9eb4779ab19df2a717ea6d5947efd8b0aa14a4b6def80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_8dd35949f5ef28e9d7b9eb4779ab19df2a717ea6d5947efd8b0aa14a4b6def80->leave($__internal_8dd35949f5ef28e9d7b9eb4779ab19df2a717ea6d5947efd8b0aa14a4b6def80_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_acc7908993dae9ad7a12ab35b255714839d4d4dc734fd0c879fa14740df2848e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc7908993dae9ad7a12ab35b255714839d4d4dc734fd0c879fa14740df2848e->enter($__internal_acc7908993dae9ad7a12ab35b255714839d4d4dc734fd0c879fa14740df2848e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_acc7908993dae9ad7a12ab35b255714839d4d4dc734fd0c879fa14740df2848e->leave($__internal_acc7908993dae9ad7a12ab35b255714839d4d4dc734fd0c879fa14740df2848e_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ad6bc2eef6e3cb62d3b43ecb73f705ad8d340bd583e33d4b96b95053d7b9c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad6bc2eef6e3cb62d3b43ecb73f705ad8d340bd583e33d4b96b95053d7b9c9d->enter($__internal_8ad6bc2eef6e3cb62d3b43ecb73f705ad8d340bd583e33d4b96b95053d7b9c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8ad6bc2eef6e3cb62d3b43ecb73f705ad8d340bd583e33d4b96b95053d7b9c9d->leave($__internal_8ad6bc2eef6e3cb62d3b43ecb73f705ad8d340bd583e33d4b96b95053d7b9c9d_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee28d3e8bbdb59cc7d6c2c6c5ac9e7d956cfdf363a432857cfcae796b31cfde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee28d3e8bbdb59cc7d6c2c6c5ac9e7d956cfdf363a432857cfcae796b31cfde8->enter($__internal_ee28d3e8bbdb59cc7d6c2c6c5ac9e7d956cfdf363a432857cfcae796b31cfde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee28d3e8bbdb59cc7d6c2c6c5ac9e7d956cfdf363a432857cfcae796b31cfde8->leave($__internal_ee28d3e8bbdb59cc7d6c2c6c5ac9e7d956cfdf363a432857cfcae796b31cfde8_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_c6ca636bb35bff0a9f49b7aee3db302d85a0ca21e9b0c4b6b5ce97d5fb04ebf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ca636bb35bff0a9f49b7aee3db302d85a0ca21e9b0c4b6b5ce97d5fb04ebf8->enter($__internal_c6ca636bb35bff0a9f49b7aee3db302d85a0ca21e9b0c4b6b5ce97d5fb04ebf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_c6ca636bb35bff0a9f49b7aee3db302d85a0ca21e9b0c4b6b5ce97d5fb04ebf8->leave($__internal_c6ca636bb35bff0a9f49b7aee3db302d85a0ca21e9b0c4b6b5ce97d5fb04ebf8_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3f19b12895b9818b1e16a4df80df7910c6215c2183db449e583f96fa3f5195bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f19b12895b9818b1e16a4df80df7910c6215c2183db449e583f96fa3f5195bb->enter($__internal_3f19b12895b9818b1e16a4df80df7910c6215c2183db449e583f96fa3f5195bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_3f19b12895b9818b1e16a4df80df7910c6215c2183db449e583f96fa3f5195bb->leave($__internal_3f19b12895b9818b1e16a4df80df7910c6215c2183db449e583f96fa3f5195bb_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_2b6177d34cf4a4061561b64bb37b72c9c0b09c0389774c29baa8e02bb8b3d531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6177d34cf4a4061561b64bb37b72c9c0b09c0389774c29baa8e02bb8b3d531->enter($__internal_2b6177d34cf4a4061561b64bb37b72c9c0b09c0389774c29baa8e02bb8b3d531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_2b6177d34cf4a4061561b64bb37b72c9c0b09c0389774c29baa8e02bb8b3d531->leave($__internal_2b6177d34cf4a4061561b64bb37b72c9c0b09c0389774c29baa8e02bb8b3d531_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_6f50cf3992e194656d2069b66bceb198e87f5d8003eddd0385c33805eba9790b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f50cf3992e194656d2069b66bceb198e87f5d8003eddd0385c33805eba9790b->enter($__internal_6f50cf3992e194656d2069b66bceb198e87f5d8003eddd0385c33805eba9790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_6f50cf3992e194656d2069b66bceb198e87f5d8003eddd0385c33805eba9790b->leave($__internal_6f50cf3992e194656d2069b66bceb198e87f5d8003eddd0385c33805eba9790b_prof);

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
