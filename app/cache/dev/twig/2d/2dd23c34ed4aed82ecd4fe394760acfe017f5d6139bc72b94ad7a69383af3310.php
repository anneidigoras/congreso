<?php

/* ::base.html.twig */
class __TwigTemplate_dd32c3c690bb7a8dbb216eceda006c8c689e6ee2f067a1733fd259d5c620d65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_59378bd16d18c2d7525e9467ced9d557e023b237cb0903a0867d5df44b0220f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59378bd16d18c2d7525e9467ced9d557e023b237cb0903a0867d5df44b0220f3->enter($__internal_59378bd16d18c2d7525e9467ced9d557e023b237cb0903a0867d5df44b0220f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo " </a></h1>
                ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a>
                ";
        } else {
            // line 27
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a>    
                ";
        }
        // line 29
        echo "            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 40
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 45
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 46
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
        
        $__internal_59378bd16d18c2d7525e9467ced9d557e023b237cb0903a0867d5df44b0220f3->leave($__internal_59378bd16d18c2d7525e9467ced9d557e023b237cb0903a0867d5df44b0220f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee8e89891a93a10033d4a3ddf0e8c8f105b44c4a81c7cd585e4c8fe4a9958658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8e89891a93a10033d4a3ddf0e8c8f105b44c4a81c7cd585e4c8fe4a9958658->enter($__internal_ee8e89891a93a10033d4a3ddf0e8c8f105b44c4a81c7cd585e4c8fe4a9958658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ee8e89891a93a10033d4a3ddf0e8c8f105b44c4a81c7cd585e4c8fe4a9958658->leave($__internal_ee8e89891a93a10033d4a3ddf0e8c8f105b44c4a81c7cd585e4c8fe4a9958658_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2cce86fe35742244ad96f06ae231edd085de7ba2040cf4badda6413c6be5e642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cce86fe35742244ad96f06ae231edd085de7ba2040cf4badda6413c6be5e642->enter($__internal_2cce86fe35742244ad96f06ae231edd085de7ba2040cf4badda6413c6be5e642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_2cce86fe35742244ad96f06ae231edd085de7ba2040cf4badda6413c6be5e642->leave($__internal_2cce86fe35742244ad96f06ae231edd085de7ba2040cf4badda6413c6be5e642_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4b82af01a69d2dcf4937d8ebbc2af99283224fa401fd39ee71f9da42bbf1b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b82af01a69d2dcf4937d8ebbc2af99283224fa401fd39ee71f9da42bbf1b33->enter($__internal_f4b82af01a69d2dcf4937d8ebbc2af99283224fa401fd39ee71f9da42bbf1b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_f4b82af01a69d2dcf4937d8ebbc2af99283224fa401fd39ee71f9da42bbf1b33->leave($__internal_f4b82af01a69d2dcf4937d8ebbc2af99283224fa401fd39ee71f9da42bbf1b33_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a5181aaf2db58a6b2fe3e675e90742d83b3fe0180f9211812c75d61658d9008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5181aaf2db58a6b2fe3e675e90742d83b3fe0180f9211812c75d61658d9008->enter($__internal_4a5181aaf2db58a6b2fe3e675e90742d83b3fe0180f9211812c75d61658d9008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a5181aaf2db58a6b2fe3e675e90742d83b3fe0180f9211812c75d61658d9008->leave($__internal_4a5181aaf2db58a6b2fe3e675e90742d83b3fe0180f9211812c75d61658d9008_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_5ac8c47d140694f831ffb753c3444297f763083f1af78a4da144092a26f5d2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac8c47d140694f831ffb753c3444297f763083f1af78a4da144092a26f5d2c6->enter($__internal_5ac8c47d140694f831ffb753c3444297f763083f1af78a4da144092a26f5d2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_5ac8c47d140694f831ffb753c3444297f763083f1af78a4da144092a26f5d2c6->leave($__internal_5ac8c47d140694f831ffb753c3444297f763083f1af78a4da144092a26f5d2c6_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_de92b219ce6bbc90dfc68a41b5c292851b8027275a8eb846c4d973347c0db646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de92b219ce6bbc90dfc68a41b5c292851b8027275a8eb846c4d973347c0db646->enter($__internal_de92b219ce6bbc90dfc68a41b5c292851b8027275a8eb846c4d973347c0db646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_de92b219ce6bbc90dfc68a41b5c292851b8027275a8eb846c4d973347c0db646->leave($__internal_de92b219ce6bbc90dfc68a41b5c292851b8027275a8eb846c4d973347c0db646_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_cc6cd19f6a1b9ed8cd07fefb68f13c686f64d52ee4357517529f2742986c6962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6cd19f6a1b9ed8cd07fefb68f13c686f64d52ee4357517529f2742986c6962->enter($__internal_cc6cd19f6a1b9ed8cd07fefb68f13c686f64d52ee4357517529f2742986c6962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_cc6cd19f6a1b9ed8cd07fefb68f13c686f64d52ee4357517529f2742986c6962->leave($__internal_cc6cd19f6a1b9ed8cd07fefb68f13c686f64d52ee4357517529f2742986c6962_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_6b738a8b82bd3c9b96577ee4285c04b17dff91bb5f574bc3190015e310927b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b738a8b82bd3c9b96577ee4285c04b17dff91bb5f574bc3190015e310927b1a->enter($__internal_6b738a8b82bd3c9b96577ee4285c04b17dff91bb5f574bc3190015e310927b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_6b738a8b82bd3c9b96577ee4285c04b17dff91bb5f574bc3190015e310927b1a->leave($__internal_6b738a8b82bd3c9b96577ee4285c04b17dff91bb5f574bc3190015e310927b1a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 45,  198 => 44,  187 => 43,  176 => 39,  165 => 38,  153 => 23,  145 => 14,  139 => 13,  130 => 11,  124 => 7,  118 => 6,  98 => 46,  95 => 45,  92 => 44,  90 => 43,  85 => 40,  82 => 39,  80 => 38,  69 => 29,  63 => 27,  57 => 25,  55 => 24,  51 => 23,  42 => 16,  39 => 13,  37 => 6,  30 => 1,);
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

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">{% block title %} {% endblock %} </a></h1>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('congreso_admin_logout')}}\">Salir</a>
                {% else %}
                    <a href=\"{{ path('congreso_admin_login')}}\">Entrar</a>    
                {% endif %}
            </div>
        </div>
    
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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
