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
        $__internal_4b73ac83b0fb21110f33062da95d4b24d2bcfad6fc61660b8d049298bead7461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b73ac83b0fb21110f33062da95d4b24d2bcfad6fc61660b8d049298bead7461->enter($__internal_4b73ac83b0fb21110f33062da95d4b24d2bcfad6fc61660b8d049298bead7461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4b73ac83b0fb21110f33062da95d4b24d2bcfad6fc61660b8d049298bead7461->leave($__internal_4b73ac83b0fb21110f33062da95d4b24d2bcfad6fc61660b8d049298bead7461_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9af65acb2fc98d344863b1a49b714b311e1ebb5ecd3e1c9afae92984473e4069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af65acb2fc98d344863b1a49b714b311e1ebb5ecd3e1c9afae92984473e4069->enter($__internal_9af65acb2fc98d344863b1a49b714b311e1ebb5ecd3e1c9afae92984473e4069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9af65acb2fc98d344863b1a49b714b311e1ebb5ecd3e1c9afae92984473e4069->leave($__internal_9af65acb2fc98d344863b1a49b714b311e1ebb5ecd3e1c9afae92984473e4069_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_100764a2dc9ee8961f45a0e6f1cca8ebf5771d26c365de1e231a810490a208a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100764a2dc9ee8961f45a0e6f1cca8ebf5771d26c365de1e231a810490a208a1->enter($__internal_100764a2dc9ee8961f45a0e6f1cca8ebf5771d26c365de1e231a810490a208a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_100764a2dc9ee8961f45a0e6f1cca8ebf5771d26c365de1e231a810490a208a1->leave($__internal_100764a2dc9ee8961f45a0e6f1cca8ebf5771d26c365de1e231a810490a208a1_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f376e22b177515ee51a51b5e63ae1fe878a7f2b5722c0eada45391bddca3f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f376e22b177515ee51a51b5e63ae1fe878a7f2b5722c0eada45391bddca3f83->enter($__internal_9f376e22b177515ee51a51b5e63ae1fe878a7f2b5722c0eada45391bddca3f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_9f376e22b177515ee51a51b5e63ae1fe878a7f2b5722c0eada45391bddca3f83->leave($__internal_9f376e22b177515ee51a51b5e63ae1fe878a7f2b5722c0eada45391bddca3f83_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba7c8e870cbed2c7685e1525eb3df85d984637500596fcc0baae7803a27ac783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7c8e870cbed2c7685e1525eb3df85d984637500596fcc0baae7803a27ac783->enter($__internal_ba7c8e870cbed2c7685e1525eb3df85d984637500596fcc0baae7803a27ac783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba7c8e870cbed2c7685e1525eb3df85d984637500596fcc0baae7803a27ac783->leave($__internal_ba7c8e870cbed2c7685e1525eb3df85d984637500596fcc0baae7803a27ac783_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_43cf2333760d035aaea6c607cc3a11042768ec1ab71a1c758883490cfd1904fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cf2333760d035aaea6c607cc3a11042768ec1ab71a1c758883490cfd1904fb->enter($__internal_43cf2333760d035aaea6c607cc3a11042768ec1ab71a1c758883490cfd1904fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_43cf2333760d035aaea6c607cc3a11042768ec1ab71a1c758883490cfd1904fb->leave($__internal_43cf2333760d035aaea6c607cc3a11042768ec1ab71a1c758883490cfd1904fb_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cca202a547bcbc1fdbe4d5f9e80ba0a507c21124b178e925d51bef8b3cd128f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca202a547bcbc1fdbe4d5f9e80ba0a507c21124b178e925d51bef8b3cd128f3->enter($__internal_cca202a547bcbc1fdbe4d5f9e80ba0a507c21124b178e925d51bef8b3cd128f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_cca202a547bcbc1fdbe4d5f9e80ba0a507c21124b178e925d51bef8b3cd128f3->leave($__internal_cca202a547bcbc1fdbe4d5f9e80ba0a507c21124b178e925d51bef8b3cd128f3_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e20b16a27330f63126e723036f2e5478d8aae0457c8bf20722e42978cbe63923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20b16a27330f63126e723036f2e5478d8aae0457c8bf20722e42978cbe63923->enter($__internal_e20b16a27330f63126e723036f2e5478d8aae0457c8bf20722e42978cbe63923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_e20b16a27330f63126e723036f2e5478d8aae0457c8bf20722e42978cbe63923->leave($__internal_e20b16a27330f63126e723036f2e5478d8aae0457c8bf20722e42978cbe63923_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_9fd90f2ee6670ad92e4840a9ce64f72e9755e626646b2236260f0bdc993319b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd90f2ee6670ad92e4840a9ce64f72e9755e626646b2236260f0bdc993319b7->enter($__internal_9fd90f2ee6670ad92e4840a9ce64f72e9755e626646b2236260f0bdc993319b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_9fd90f2ee6670ad92e4840a9ce64f72e9755e626646b2236260f0bdc993319b7->leave($__internal_9fd90f2ee6670ad92e4840a9ce64f72e9755e626646b2236260f0bdc993319b7_prof);

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
