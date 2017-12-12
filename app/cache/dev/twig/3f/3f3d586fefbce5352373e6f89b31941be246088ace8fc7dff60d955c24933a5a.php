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
        $__internal_53b91e598d83130db05c963cd49f0fd905fdb847038536e87db77a3709a0055a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b91e598d83130db05c963cd49f0fd905fdb847038536e87db77a3709a0055a->enter($__internal_53b91e598d83130db05c963cd49f0fd905fdb847038536e87db77a3709a0055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_53b91e598d83130db05c963cd49f0fd905fdb847038536e87db77a3709a0055a->leave($__internal_53b91e598d83130db05c963cd49f0fd905fdb847038536e87db77a3709a0055a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e41b49627fed13d36b3307580684252ca3f6a12e3b09227907bb0edb33ea966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e41b49627fed13d36b3307580684252ca3f6a12e3b09227907bb0edb33ea966->enter($__internal_1e41b49627fed13d36b3307580684252ca3f6a12e3b09227907bb0edb33ea966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1e41b49627fed13d36b3307580684252ca3f6a12e3b09227907bb0edb33ea966->leave($__internal_1e41b49627fed13d36b3307580684252ca3f6a12e3b09227907bb0edb33ea966_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b0c5dfe845b78fc94ddf76d9e115052c985ff5abd258f023c182fce3cb24198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0c5dfe845b78fc94ddf76d9e115052c985ff5abd258f023c182fce3cb24198->enter($__internal_6b0c5dfe845b78fc94ddf76d9e115052c985ff5abd258f023c182fce3cb24198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_6b0c5dfe845b78fc94ddf76d9e115052c985ff5abd258f023c182fce3cb24198->leave($__internal_6b0c5dfe845b78fc94ddf76d9e115052c985ff5abd258f023c182fce3cb24198_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d0515f800b2c1ccbf50e63ffa7450b409bd45cb2a40bc80e9ab05b2503be5c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0515f800b2c1ccbf50e63ffa7450b409bd45cb2a40bc80e9ab05b2503be5c12->enter($__internal_d0515f800b2c1ccbf50e63ffa7450b409bd45cb2a40bc80e9ab05b2503be5c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_d0515f800b2c1ccbf50e63ffa7450b409bd45cb2a40bc80e9ab05b2503be5c12->leave($__internal_d0515f800b2c1ccbf50e63ffa7450b409bd45cb2a40bc80e9ab05b2503be5c12_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea769f174ae28202f3b1547fc67842269b8c990a29996f318cd3d30afb92d4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea769f174ae28202f3b1547fc67842269b8c990a29996f318cd3d30afb92d4b3->enter($__internal_ea769f174ae28202f3b1547fc67842269b8c990a29996f318cd3d30afb92d4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ea769f174ae28202f3b1547fc67842269b8c990a29996f318cd3d30afb92d4b3->leave($__internal_ea769f174ae28202f3b1547fc67842269b8c990a29996f318cd3d30afb92d4b3_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcdf230367e6ad744cd2ff7488317c7e27c58c64b6c2c2df7885f8d1be22eb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdf230367e6ad744cd2ff7488317c7e27c58c64b6c2c2df7885f8d1be22eb7a->enter($__internal_fcdf230367e6ad744cd2ff7488317c7e27c58c64b6c2c2df7885f8d1be22eb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcdf230367e6ad744cd2ff7488317c7e27c58c64b6c2c2df7885f8d1be22eb7a->leave($__internal_fcdf230367e6ad744cd2ff7488317c7e27c58c64b6c2c2df7885f8d1be22eb7a_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_292957b957628a37756abb54dee536035e5ee90a2ec3212136140c0088caf2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292957b957628a37756abb54dee536035e5ee90a2ec3212136140c0088caf2b6->enter($__internal_292957b957628a37756abb54dee536035e5ee90a2ec3212136140c0088caf2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_292957b957628a37756abb54dee536035e5ee90a2ec3212136140c0088caf2b6->leave($__internal_292957b957628a37756abb54dee536035e5ee90a2ec3212136140c0088caf2b6_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_00bf6a66b99306d4807eaec054d4712b9b1ef9723c25eba9922452ea60f692ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bf6a66b99306d4807eaec054d4712b9b1ef9723c25eba9922452ea60f692ef->enter($__internal_00bf6a66b99306d4807eaec054d4712b9b1ef9723c25eba9922452ea60f692ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_00bf6a66b99306d4807eaec054d4712b9b1ef9723c25eba9922452ea60f692ef->leave($__internal_00bf6a66b99306d4807eaec054d4712b9b1ef9723c25eba9922452ea60f692ef_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_a0d2fe4531cd09da3dcdeb4a81d4379b5c229bac4ca975dfc7eba2c4280266cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d2fe4531cd09da3dcdeb4a81d4379b5c229bac4ca975dfc7eba2c4280266cd->enter($__internal_a0d2fe4531cd09da3dcdeb4a81d4379b5c229bac4ca975dfc7eba2c4280266cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_a0d2fe4531cd09da3dcdeb4a81d4379b5c229bac4ca975dfc7eba2c4280266cd->leave($__internal_a0d2fe4531cd09da3dcdeb4a81d4379b5c229bac4ca975dfc7eba2c4280266cd_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_a7dd6ab806cd455ea07f68caf5fa2d8d199b31193b3c3406fd965cbb71ee0792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dd6ab806cd455ea07f68caf5fa2d8d199b31193b3c3406fd965cbb71ee0792->enter($__internal_a7dd6ab806cd455ea07f68caf5fa2d8d199b31193b3c3406fd965cbb71ee0792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_a7dd6ab806cd455ea07f68caf5fa2d8d199b31193b3c3406fd965cbb71ee0792->leave($__internal_a7dd6ab806cd455ea07f68caf5fa2d8d199b31193b3c3406fd965cbb71ee0792_prof);

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
