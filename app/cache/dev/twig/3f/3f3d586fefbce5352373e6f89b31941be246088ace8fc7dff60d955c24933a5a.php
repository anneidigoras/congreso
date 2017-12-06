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
        $__internal_84fd5f4762fff2249a73371fffe505181c784ab2f2ad8e684fa84886cd203736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fd5f4762fff2249a73371fffe505181c784ab2f2ad8e684fa84886cd203736->enter($__internal_84fd5f4762fff2249a73371fffe505181c784ab2f2ad8e684fa84886cd203736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                <h1><a id=\"titulo-lista\" href=\"#\">";
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
        
        $__internal_84fd5f4762fff2249a73371fffe505181c784ab2f2ad8e684fa84886cd203736->leave($__internal_84fd5f4762fff2249a73371fffe505181c784ab2f2ad8e684fa84886cd203736_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3999572b91432dcd83e0fa2302024805262a34b04b6a48e9327cbe7ac3c080d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3999572b91432dcd83e0fa2302024805262a34b04b6a48e9327cbe7ac3c080d->enter($__internal_f3999572b91432dcd83e0fa2302024805262a34b04b6a48e9327cbe7ac3c080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f3999572b91432dcd83e0fa2302024805262a34b04b6a48e9327cbe7ac3c080d->leave($__internal_f3999572b91432dcd83e0fa2302024805262a34b04b6a48e9327cbe7ac3c080d_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_820f865a8953126ba4675580164331af56ac33fc4306964aa65a226babf6fa29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820f865a8953126ba4675580164331af56ac33fc4306964aa65a226babf6fa29->enter($__internal_820f865a8953126ba4675580164331af56ac33fc4306964aa65a226babf6fa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_820f865a8953126ba4675580164331af56ac33fc4306964aa65a226babf6fa29->leave($__internal_820f865a8953126ba4675580164331af56ac33fc4306964aa65a226babf6fa29_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_20b3e6a5a89cfaf567c0f45b1af9ad1eaa4b873c4bc8b7f1718719890e112152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b3e6a5a89cfaf567c0f45b1af9ad1eaa4b873c4bc8b7f1718719890e112152->enter($__internal_20b3e6a5a89cfaf567c0f45b1af9ad1eaa4b873c4bc8b7f1718719890e112152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_20b3e6a5a89cfaf567c0f45b1af9ad1eaa4b873c4bc8b7f1718719890e112152->leave($__internal_20b3e6a5a89cfaf567c0f45b1af9ad1eaa4b873c4bc8b7f1718719890e112152_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_183f66be5c317c7f36ae57863646c57e16ab409cc9aeb9097394073ae7f3ac07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183f66be5c317c7f36ae57863646c57e16ab409cc9aeb9097394073ae7f3ac07->enter($__internal_183f66be5c317c7f36ae57863646c57e16ab409cc9aeb9097394073ae7f3ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_183f66be5c317c7f36ae57863646c57e16ab409cc9aeb9097394073ae7f3ac07->leave($__internal_183f66be5c317c7f36ae57863646c57e16ab409cc9aeb9097394073ae7f3ac07_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_fca42c52062c6b2217681c0cb51f2738d31fa39aac53347a60b03b5281d5982d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca42c52062c6b2217681c0cb51f2738d31fa39aac53347a60b03b5281d5982d->enter($__internal_fca42c52062c6b2217681c0cb51f2738d31fa39aac53347a60b03b5281d5982d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_fca42c52062c6b2217681c0cb51f2738d31fa39aac53347a60b03b5281d5982d->leave($__internal_fca42c52062c6b2217681c0cb51f2738d31fa39aac53347a60b03b5281d5982d_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_540e4db19a1943422b4a1445f0734e86d1fec404e99c2b8ecfe2d2b082540a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540e4db19a1943422b4a1445f0734e86d1fec404e99c2b8ecfe2d2b082540a01->enter($__internal_540e4db19a1943422b4a1445f0734e86d1fec404e99c2b8ecfe2d2b082540a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_540e4db19a1943422b4a1445f0734e86d1fec404e99c2b8ecfe2d2b082540a01->leave($__internal_540e4db19a1943422b4a1445f0734e86d1fec404e99c2b8ecfe2d2b082540a01_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_684e99d3229745ece0f14d8db60f6e3fb1e7e58b801417b7f0524b8ae3d79be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684e99d3229745ece0f14d8db60f6e3fb1e7e58b801417b7f0524b8ae3d79be9->enter($__internal_684e99d3229745ece0f14d8db60f6e3fb1e7e58b801417b7f0524b8ae3d79be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_684e99d3229745ece0f14d8db60f6e3fb1e7e58b801417b7f0524b8ae3d79be9->leave($__internal_684e99d3229745ece0f14d8db60f6e3fb1e7e58b801417b7f0524b8ae3d79be9_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_32b33ae52153a0e4c9269f77147e7d842eac8ed9e23ba7c28dd846b5055002a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b33ae52153a0e4c9269f77147e7d842eac8ed9e23ba7c28dd846b5055002a8->enter($__internal_32b33ae52153a0e4c9269f77147e7d842eac8ed9e23ba7c28dd846b5055002a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_32b33ae52153a0e4c9269f77147e7d842eac8ed9e23ba7c28dd846b5055002a8->leave($__internal_32b33ae52153a0e4c9269f77147e7d842eac8ed9e23ba7c28dd846b5055002a8_prof);

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
                <h1><a id=\"titulo-lista\" href=\"#\">{% block title %} {% endblock %} </a></h1>
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
