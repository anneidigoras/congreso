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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b273f42aa12059f1b31e4d9b7b5a19cc507e64ed8e6f5446aea77731994a4141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b273f42aa12059f1b31e4d9b7b5a19cc507e64ed8e6f5446aea77731994a4141->enter($__internal_b273f42aa12059f1b31e4d9b7b5a19cc507e64ed8e6f5446aea77731994a4141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "    </head>
    <body>

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo " </a></h1>
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a>
                ";
        } else {
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a>    
                ";
        }
        // line 26
        echo "            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 39
        $this->displayBlock('sidebar', $context, $blocks);
        // line 40
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 41
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 42
        echo "
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
</html>";
        
        $__internal_b273f42aa12059f1b31e4d9b7b5a19cc507e64ed8e6f5446aea77731994a4141->leave($__internal_b273f42aa12059f1b31e4d9b7b5a19cc507e64ed8e6f5446aea77731994a4141_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c830ce3b9f9fb5f967349d3c620f1be5bb0310767ff536ff357c33ced29df11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c830ce3b9f9fb5f967349d3c620f1be5bb0310767ff536ff357c33ced29df11d->enter($__internal_c830ce3b9f9fb5f967349d3c620f1be5bb0310767ff536ff357c33ced29df11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_c830ce3b9f9fb5f967349d3c620f1be5bb0310767ff536ff357c33ced29df11d->leave($__internal_c830ce3b9f9fb5f967349d3c620f1be5bb0310767ff536ff357c33ced29df11d_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_031bc8adf03e39417cc57ccffafea89d67487609006d94da375b4327cd5540af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031bc8adf03e39417cc57ccffafea89d67487609006d94da375b4327cd5540af->enter($__internal_031bc8adf03e39417cc57ccffafea89d67487609006d94da375b4327cd5540af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_031bc8adf03e39417cc57ccffafea89d67487609006d94da375b4327cd5540af->leave($__internal_031bc8adf03e39417cc57ccffafea89d67487609006d94da375b4327cd5540af_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_c13fab1bb5e855c325181fd285e62d762ac4d550e2f9c41342b440ce17418742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13fab1bb5e855c325181fd285e62d762ac4d550e2f9c41342b440ce17418742->enter($__internal_c13fab1bb5e855c325181fd285e62d762ac4d550e2f9c41342b440ce17418742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c13fab1bb5e855c325181fd285e62d762ac4d550e2f9c41342b440ce17418742->leave($__internal_c13fab1bb5e855c325181fd285e62d762ac4d550e2f9c41342b440ce17418742_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2545b44e0d050179ba7436e15436f4218c678fc4d227c13d5f18e0854a47a0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2545b44e0d050179ba7436e15436f4218c678fc4d227c13d5f18e0854a47a0a8->enter($__internal_2545b44e0d050179ba7436e15436f4218c678fc4d227c13d5f18e0854a47a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2545b44e0d050179ba7436e15436f4218c678fc4d227c13d5f18e0854a47a0a8->leave($__internal_2545b44e0d050179ba7436e15436f4218c678fc4d227c13d5f18e0854a47a0a8_prof);

    }

    // line 40
    public function block_linea($context, array $blocks = array())
    {
        $__internal_04f0d44c4610fa01e68a8ecaa29f2564880ff6210cdff1b3cdf695747d84058f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f0d44c4610fa01e68a8ecaa29f2564880ff6210cdff1b3cdf695747d84058f->enter($__internal_04f0d44c4610fa01e68a8ecaa29f2564880ff6210cdff1b3cdf695747d84058f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_04f0d44c4610fa01e68a8ecaa29f2564880ff6210cdff1b3cdf695747d84058f->leave($__internal_04f0d44c4610fa01e68a8ecaa29f2564880ff6210cdff1b3cdf695747d84058f_prof);

    }

    // line 41
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_d4e8e0404acccb27e18aaf1572229708b34c3fa9eeaca49823d359d04ec355d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e8e0404acccb27e18aaf1572229708b34c3fa9eeaca49823d359d04ec355d7->enter($__internal_d4e8e0404acccb27e18aaf1572229708b34c3fa9eeaca49823d359d04ec355d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_d4e8e0404acccb27e18aaf1572229708b34c3fa9eeaca49823d359d04ec355d7->leave($__internal_d4e8e0404acccb27e18aaf1572229708b34c3fa9eeaca49823d359d04ec355d7_prof);

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
        return array (  177 => 41,  166 => 40,  155 => 39,  144 => 35,  132 => 20,  123 => 11,  117 => 7,  111 => 6,  90 => 42,  87 => 41,  84 => 40,  82 => 39,  77 => 36,  75 => 35,  64 => 26,  58 => 24,  52 => 22,  50 => 21,  46 => 20,  37 => 13,  35 => 6,  28 => 1,);
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
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
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
