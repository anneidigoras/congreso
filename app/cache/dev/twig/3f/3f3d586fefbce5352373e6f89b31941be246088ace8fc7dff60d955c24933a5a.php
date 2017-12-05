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
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3928ec1bc0bc5b52c4c508d37ff1b57260623c1763308e671df6f799bde5ff92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3928ec1bc0bc5b52c4c508d37ff1b57260623c1763308e671df6f799bde5ff92->enter($__internal_3928ec1bc0bc5b52c4c508d37ff1b57260623c1763308e671df6f799bde5ff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            </div>
            <div>
            ";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 28
        echo "            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 43
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 44
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
        
        $__internal_3928ec1bc0bc5b52c4c508d37ff1b57260623c1763308e671df6f799bde5ff92->leave($__internal_3928ec1bc0bc5b52c4c508d37ff1b57260623c1763308e671df6f799bde5ff92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e21f8f871d2243f84bac7fea64a680a1a62b57dfc241fa3bda84283f6efd56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e21f8f871d2243f84bac7fea64a680a1a62b57dfc241fa3bda84283f6efd56c->enter($__internal_8e21f8f871d2243f84bac7fea64a680a1a62b57dfc241fa3bda84283f6efd56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8e21f8f871d2243f84bac7fea64a680a1a62b57dfc241fa3bda84283f6efd56c->leave($__internal_8e21f8f871d2243f84bac7fea64a680a1a62b57dfc241fa3bda84283f6efd56c_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ed641c98ca7251471b619b4fe28e4a0346680238213492942f587f78ec6d111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed641c98ca7251471b619b4fe28e4a0346680238213492942f587f78ec6d111->enter($__internal_6ed641c98ca7251471b619b4fe28e4a0346680238213492942f587f78ec6d111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_6ed641c98ca7251471b619b4fe28e4a0346680238213492942f587f78ec6d111->leave($__internal_6ed641c98ca7251471b619b4fe28e4a0346680238213492942f587f78ec6d111_prof);

    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_34e2baf62fce0ba7cdb63441e1dc0e62714fa14d68c8aa5ac5a35e68ec21eede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e2baf62fce0ba7cdb63441e1dc0e62714fa14d68c8aa5ac5a35e68ec21eede->enter($__internal_34e2baf62fce0ba7cdb63441e1dc0e62714fa14d68c8aa5ac5a35e68ec21eede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        echo " 
                ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_admin_logout");
            echo "\">Salir</a></li>
                ";
        }
        // line 27
        echo "            ";
        
        $__internal_34e2baf62fce0ba7cdb63441e1dc0e62714fa14d68c8aa5ac5a35e68ec21eede->leave($__internal_34e2baf62fce0ba7cdb63441e1dc0e62714fa14d68c8aa5ac5a35e68ec21eede_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_e413399e57448c68ca66cb1dd737a7fea6ce971a94ea36e8a0d0a5dbbb63dcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e413399e57448c68ca66cb1dd737a7fea6ce971a94ea36e8a0d0a5dbbb63dcc3->enter($__internal_e413399e57448c68ca66cb1dd737a7fea6ce971a94ea36e8a0d0a5dbbb63dcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e413399e57448c68ca66cb1dd737a7fea6ce971a94ea36e8a0d0a5dbbb63dcc3->leave($__internal_e413399e57448c68ca66cb1dd737a7fea6ce971a94ea36e8a0d0a5dbbb63dcc3_prof);

    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_87fd482cd513aa75d4749808be700040d94eb798401ec16543c4f5d621e32133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fd482cd513aa75d4749808be700040d94eb798401ec16543c4f5d621e32133->enter($__internal_87fd482cd513aa75d4749808be700040d94eb798401ec16543c4f5d621e32133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_87fd482cd513aa75d4749808be700040d94eb798401ec16543c4f5d621e32133->leave($__internal_87fd482cd513aa75d4749808be700040d94eb798401ec16543c4f5d621e32133_prof);

    }

    // line 42
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e3bb5659ef9217f3bbdb9c7eccff063e9ae950e60d607284c66ca76650c21d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3bb5659ef9217f3bbdb9c7eccff063e9ae950e60d607284c66ca76650c21d9c->enter($__internal_e3bb5659ef9217f3bbdb9c7eccff063e9ae950e60d607284c66ca76650c21d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_e3bb5659ef9217f3bbdb9c7eccff063e9ae950e60d607284c66ca76650c21d9c->leave($__internal_e3bb5659ef9217f3bbdb9c7eccff063e9ae950e60d607284c66ca76650c21d9c_prof);

    }

    // line 43
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_c3e93631bff747fc12ecc7db2633b6628da8805f8d44e03e48d34783d17f861f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e93631bff747fc12ecc7db2633b6628da8805f8d44e03e48d34783d17f861f->enter($__internal_c3e93631bff747fc12ecc7db2633b6628da8805f8d44e03e48d34783d17f861f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_c3e93631bff747fc12ecc7db2633b6628da8805f8d44e03e48d34783d17f861f->leave($__internal_c3e93631bff747fc12ecc7db2633b6628da8805f8d44e03e48d34783d17f861f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 43,  180 => 42,  169 => 41,  158 => 37,  151 => 27,  145 => 25,  143 => 24,  135 => 23,  123 => 20,  114 => 11,  108 => 7,  102 => 6,  81 => 44,  78 => 43,  75 => 42,  73 => 41,  68 => 38,  66 => 37,  55 => 28,  53 => 23,  47 => 20,  38 => 13,  36 => 6,  29 => 1,);
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
            </div>
            <div>
            {% block navigation %} 
                {% if is_granted('ROLE_ADMIN') %}
                    <li><a href=\"{{ path('blogger_admin_logout')}}\">Salir</a></li>
                {% endif %}
            {% endblock %}
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
