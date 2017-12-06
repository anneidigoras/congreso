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
        $__internal_0979be453587d70a81b8ab420d3147757b533581cce77f3de658738c17add94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0979be453587d70a81b8ab420d3147757b533581cce77f3de658738c17add94e->enter($__internal_0979be453587d70a81b8ab420d3147757b533581cce77f3de658738c17add94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0979be453587d70a81b8ab420d3147757b533581cce77f3de658738c17add94e->leave($__internal_0979be453587d70a81b8ab420d3147757b533581cce77f3de658738c17add94e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce14682443c7ec9d0189ec5aa7977b0f8c8b48ffe1fd590bda73ee45130d154a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce14682443c7ec9d0189ec5aa7977b0f8c8b48ffe1fd590bda73ee45130d154a->enter($__internal_ce14682443c7ec9d0189ec5aa7977b0f8c8b48ffe1fd590bda73ee45130d154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ce14682443c7ec9d0189ec5aa7977b0f8c8b48ffe1fd590bda73ee45130d154a->leave($__internal_ce14682443c7ec9d0189ec5aa7977b0f8c8b48ffe1fd590bda73ee45130d154a_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01657531df51485dc787bc788726774542ad6f3c28731f86519a39f461d03464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01657531df51485dc787bc788726774542ad6f3c28731f86519a39f461d03464->enter($__internal_01657531df51485dc787bc788726774542ad6f3c28731f86519a39f461d03464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_01657531df51485dc787bc788726774542ad6f3c28731f86519a39f461d03464->leave($__internal_01657531df51485dc787bc788726774542ad6f3c28731f86519a39f461d03464_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8b6cb6c89589bdbbf5677bdd00ea7a6742a2d6de5c1bb59a9778bab8648fec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b6cb6c89589bdbbf5677bdd00ea7a6742a2d6de5c1bb59a9778bab8648fec8->enter($__internal_b8b6cb6c89589bdbbf5677bdd00ea7a6742a2d6de5c1bb59a9778bab8648fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_b8b6cb6c89589bdbbf5677bdd00ea7a6742a2d6de5c1bb59a9778bab8648fec8->leave($__internal_b8b6cb6c89589bdbbf5677bdd00ea7a6742a2d6de5c1bb59a9778bab8648fec8_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a4e2a0da1d3935ec955605a3b2e4c4d0a7963e2a0c16d40114a65f4da3013a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4e2a0da1d3935ec955605a3b2e4c4d0a7963e2a0c16d40114a65f4da3013a2->enter($__internal_2a4e2a0da1d3935ec955605a3b2e4c4d0a7963e2a0c16d40114a65f4da3013a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a4e2a0da1d3935ec955605a3b2e4c4d0a7963e2a0c16d40114a65f4da3013a2->leave($__internal_2a4e2a0da1d3935ec955605a3b2e4c4d0a7963e2a0c16d40114a65f4da3013a2_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_66a113266f692b9258d7fc2169b03cee69d04f15f55390c2e2a7395f93f14984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a113266f692b9258d7fc2169b03cee69d04f15f55390c2e2a7395f93f14984->enter($__internal_66a113266f692b9258d7fc2169b03cee69d04f15f55390c2e2a7395f93f14984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_66a113266f692b9258d7fc2169b03cee69d04f15f55390c2e2a7395f93f14984->leave($__internal_66a113266f692b9258d7fc2169b03cee69d04f15f55390c2e2a7395f93f14984_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bc1344b86c8e2757e6ff7bd43a5a4bfea99e0a0d1ca4c355f99bf53af4a7c293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1344b86c8e2757e6ff7bd43a5a4bfea99e0a0d1ca4c355f99bf53af4a7c293->enter($__internal_bc1344b86c8e2757e6ff7bd43a5a4bfea99e0a0d1ca4c355f99bf53af4a7c293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_bc1344b86c8e2757e6ff7bd43a5a4bfea99e0a0d1ca4c355f99bf53af4a7c293->leave($__internal_bc1344b86c8e2757e6ff7bd43a5a4bfea99e0a0d1ca4c355f99bf53af4a7c293_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_2b9af2fc1e4fd037f2bcb4a3edb26dbbfc5e8db1fdba9325a77c98a14bb018bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9af2fc1e4fd037f2bcb4a3edb26dbbfc5e8db1fdba9325a77c98a14bb018bc->enter($__internal_2b9af2fc1e4fd037f2bcb4a3edb26dbbfc5e8db1fdba9325a77c98a14bb018bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_2b9af2fc1e4fd037f2bcb4a3edb26dbbfc5e8db1fdba9325a77c98a14bb018bc->leave($__internal_2b9af2fc1e4fd037f2bcb4a3edb26dbbfc5e8db1fdba9325a77c98a14bb018bc_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_b2793c5d2622b6a0a3f423c33e877bafa689e124f79fa3170f9c86896fdaa156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2793c5d2622b6a0a3f423c33e877bafa689e124f79fa3170f9c86896fdaa156->enter($__internal_b2793c5d2622b6a0a3f423c33e877bafa689e124f79fa3170f9c86896fdaa156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_b2793c5d2622b6a0a3f423c33e877bafa689e124f79fa3170f9c86896fdaa156->leave($__internal_b2793c5d2622b6a0a3f423c33e877bafa689e124f79fa3170f9c86896fdaa156_prof);

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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
