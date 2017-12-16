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
        $__internal_58239f92939915edc552106b48c5c0bbebc385d97d4b53733eed0d94233d2f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58239f92939915edc552106b48c5c0bbebc385d97d4b53733eed0d94233d2f50->enter($__internal_58239f92939915edc552106b48c5c0bbebc385d97d4b53733eed0d94233d2f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_58239f92939915edc552106b48c5c0bbebc385d97d4b53733eed0d94233d2f50->leave($__internal_58239f92939915edc552106b48c5c0bbebc385d97d4b53733eed0d94233d2f50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_373c91fb8ad5b7fffd914c16cce1aa75d2962aa7e730a2d6717e455e02599b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373c91fb8ad5b7fffd914c16cce1aa75d2962aa7e730a2d6717e455e02599b7c->enter($__internal_373c91fb8ad5b7fffd914c16cce1aa75d2962aa7e730a2d6717e455e02599b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_373c91fb8ad5b7fffd914c16cce1aa75d2962aa7e730a2d6717e455e02599b7c->leave($__internal_373c91fb8ad5b7fffd914c16cce1aa75d2962aa7e730a2d6717e455e02599b7c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71d35e46872bdcad9aa8450bf614b9d791f3516e9e9663c0e1d4014a9dfa17c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d35e46872bdcad9aa8450bf614b9d791f3516e9e9663c0e1d4014a9dfa17c1->enter($__internal_71d35e46872bdcad9aa8450bf614b9d791f3516e9e9663c0e1d4014a9dfa17c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_71d35e46872bdcad9aa8450bf614b9d791f3516e9e9663c0e1d4014a9dfa17c1->leave($__internal_71d35e46872bdcad9aa8450bf614b9d791f3516e9e9663c0e1d4014a9dfa17c1_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_40721485c52f557ae09df176cf662b8ed82849fb77d5cc39cc5a48bde0b57e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40721485c52f557ae09df176cf662b8ed82849fb77d5cc39cc5a48bde0b57e3e->enter($__internal_40721485c52f557ae09df176cf662b8ed82849fb77d5cc39cc5a48bde0b57e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_40721485c52f557ae09df176cf662b8ed82849fb77d5cc39cc5a48bde0b57e3e->leave($__internal_40721485c52f557ae09df176cf662b8ed82849fb77d5cc39cc5a48bde0b57e3e_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_e61f98c46317248afbf4f71e24b76927c88870ce1ceac92c0ffc37cb28216f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61f98c46317248afbf4f71e24b76927c88870ce1ceac92c0ffc37cb28216f16->enter($__internal_e61f98c46317248afbf4f71e24b76927c88870ce1ceac92c0ffc37cb28216f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e61f98c46317248afbf4f71e24b76927c88870ce1ceac92c0ffc37cb28216f16->leave($__internal_e61f98c46317248afbf4f71e24b76927c88870ce1ceac92c0ffc37cb28216f16_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_22c2e031873e44dcbf86906b8834fc4d416350307ec42a11a016842af28ac020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c2e031873e44dcbf86906b8834fc4d416350307ec42a11a016842af28ac020->enter($__internal_22c2e031873e44dcbf86906b8834fc4d416350307ec42a11a016842af28ac020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22c2e031873e44dcbf86906b8834fc4d416350307ec42a11a016842af28ac020->leave($__internal_22c2e031873e44dcbf86906b8834fc4d416350307ec42a11a016842af28ac020_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_4dc8a2fd93409fe8917aa6779eed5d796d53ca6eb90369a12d85ffb0587629b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc8a2fd93409fe8917aa6779eed5d796d53ca6eb90369a12d85ffb0587629b4->enter($__internal_4dc8a2fd93409fe8917aa6779eed5d796d53ca6eb90369a12d85ffb0587629b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_4dc8a2fd93409fe8917aa6779eed5d796d53ca6eb90369a12d85ffb0587629b4->leave($__internal_4dc8a2fd93409fe8917aa6779eed5d796d53ca6eb90369a12d85ffb0587629b4_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_69ccd5e4b614e3733078f9e01ecfadfa670b9cdaca1562a73c910dc1cce908df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ccd5e4b614e3733078f9e01ecfadfa670b9cdaca1562a73c910dc1cce908df->enter($__internal_69ccd5e4b614e3733078f9e01ecfadfa670b9cdaca1562a73c910dc1cce908df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_69ccd5e4b614e3733078f9e01ecfadfa670b9cdaca1562a73c910dc1cce908df->leave($__internal_69ccd5e4b614e3733078f9e01ecfadfa670b9cdaca1562a73c910dc1cce908df_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_2cfc6d112d80a57205b2842bf950b4c9bd392590b7378b644271e9f504eaa48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfc6d112d80a57205b2842bf950b4c9bd392590b7378b644271e9f504eaa48a->enter($__internal_2cfc6d112d80a57205b2842bf950b4c9bd392590b7378b644271e9f504eaa48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_2cfc6d112d80a57205b2842bf950b4c9bd392590b7378b644271e9f504eaa48a->leave($__internal_2cfc6d112d80a57205b2842bf950b4c9bd392590b7378b644271e9f504eaa48a_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_8b3fa1205ac92e3d8b5248584a63aeac479cd93d01ea28061ad2382f41cac417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3fa1205ac92e3d8b5248584a63aeac479cd93d01ea28061ad2382f41cac417->enter($__internal_8b3fa1205ac92e3d8b5248584a63aeac479cd93d01ea28061ad2382f41cac417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_8b3fa1205ac92e3d8b5248584a63aeac479cd93d01ea28061ad2382f41cac417->leave($__internal_8b3fa1205ac92e3d8b5248584a63aeac479cd93d01ea28061ad2382f41cac417_prof);

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
