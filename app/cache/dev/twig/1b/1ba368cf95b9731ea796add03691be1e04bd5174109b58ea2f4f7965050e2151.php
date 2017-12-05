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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9342673819b8e15dbd41d2596175c9bd5c8140b8d238bc440073a8d038398630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9342673819b8e15dbd41d2596175c9bd5c8140b8d238bc440073a8d038398630->enter($__internal_9342673819b8e15dbd41d2596175c9bd5c8140b8d238bc440073a8d038398630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9342673819b8e15dbd41d2596175c9bd5c8140b8d238bc440073a8d038398630->leave($__internal_9342673819b8e15dbd41d2596175c9bd5c8140b8d238bc440073a8d038398630_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_257651f9515e7e0809ab3c514619354e8991a3fa384ebb7b4a368a9acb673e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257651f9515e7e0809ab3c514619354e8991a3fa384ebb7b4a368a9acb673e0d->enter($__internal_257651f9515e7e0809ab3c514619354e8991a3fa384ebb7b4a368a9acb673e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_257651f9515e7e0809ab3c514619354e8991a3fa384ebb7b4a368a9acb673e0d->leave($__internal_257651f9515e7e0809ab3c514619354e8991a3fa384ebb7b4a368a9acb673e0d_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e522e30477b55c48ab90f3be4631e3ce98123742d50411edfdd45060c8adb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e522e30477b55c48ab90f3be4631e3ce98123742d50411edfdd45060c8adb54->enter($__internal_2e522e30477b55c48ab90f3be4631e3ce98123742d50411edfdd45060c8adb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_2e522e30477b55c48ab90f3be4631e3ce98123742d50411edfdd45060c8adb54->leave($__internal_2e522e30477b55c48ab90f3be4631e3ce98123742d50411edfdd45060c8adb54_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_acf5538398fe57a6b448b1f7589c612b917204d0652d7b4523d8e06b49374d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf5538398fe57a6b448b1f7589c612b917204d0652d7b4523d8e06b49374d8c->enter($__internal_acf5538398fe57a6b448b1f7589c612b917204d0652d7b4523d8e06b49374d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_acf5538398fe57a6b448b1f7589c612b917204d0652d7b4523d8e06b49374d8c->leave($__internal_acf5538398fe57a6b448b1f7589c612b917204d0652d7b4523d8e06b49374d8c_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b84977f4de48e68577a5d0a3ede86a557d0f5eaf9ec1b1c2a3304aa4a722ced4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84977f4de48e68577a5d0a3ede86a557d0f5eaf9ec1b1c2a3304aa4a722ced4->enter($__internal_b84977f4de48e68577a5d0a3ede86a557d0f5eaf9ec1b1c2a3304aa4a722ced4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_b84977f4de48e68577a5d0a3ede86a557d0f5eaf9ec1b1c2a3304aa4a722ced4->leave($__internal_b84977f4de48e68577a5d0a3ede86a557d0f5eaf9ec1b1c2a3304aa4a722ced4_prof);

    }

    // line 40
    public function block_linea($context, array $blocks = array())
    {
        $__internal_02692837f08cc874708d3e3877ba272d54e0c763f7955178e3f430945e7d359c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02692837f08cc874708d3e3877ba272d54e0c763f7955178e3f430945e7d359c->enter($__internal_02692837f08cc874708d3e3877ba272d54e0c763f7955178e3f430945e7d359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_02692837f08cc874708d3e3877ba272d54e0c763f7955178e3f430945e7d359c->leave($__internal_02692837f08cc874708d3e3877ba272d54e0c763f7955178e3f430945e7d359c_prof);

    }

    // line 41
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_76c5fc88380377f3d339cc2e3b69832f58f36595e500c5bb6c2da11c23576214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c5fc88380377f3d339cc2e3b69832f58f36595e500c5bb6c2da11c23576214->enter($__internal_76c5fc88380377f3d339cc2e3b69832f58f36595e500c5bb6c2da11c23576214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_76c5fc88380377f3d339cc2e3b69832f58f36595e500c5bb6c2da11c23576214->leave($__internal_76c5fc88380377f3d339cc2e3b69832f58f36595e500c5bb6c2da11c23576214_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
</html>", "base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
