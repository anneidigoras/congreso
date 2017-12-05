<?php

/* base.html.twig */
class __TwigTemplate_d882acde4f4b42cd8633763c1d480248c057bf1eb49dc40eeba39fe53f81788a extends Twig_Template
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
        $__internal_aa91d886e447df7f151b36476d4aa34b2ddce1a36545022e0b918475986081ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa91d886e447df7f151b36476d4aa34b2ddce1a36545022e0b918475986081ba->enter($__internal_aa91d886e447df7f151b36476d4aa34b2ddce1a36545022e0b918475986081ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_aa91d886e447df7f151b36476d4aa34b2ddce1a36545022e0b918475986081ba->leave($__internal_aa91d886e447df7f151b36476d4aa34b2ddce1a36545022e0b918475986081ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_992eb48b205b6e10dcbb055c0ae53a0f20208987d5eb1429d409b86afd007f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992eb48b205b6e10dcbb055c0ae53a0f20208987d5eb1429d409b86afd007f7d->enter($__internal_992eb48b205b6e10dcbb055c0ae53a0f20208987d5eb1429d409b86afd007f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_992eb48b205b6e10dcbb055c0ae53a0f20208987d5eb1429d409b86afd007f7d->leave($__internal_992eb48b205b6e10dcbb055c0ae53a0f20208987d5eb1429d409b86afd007f7d_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_3831b512e4a1e089b48c3e7922cae53fe5a9c432231538dd6ac548629dc1ea31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3831b512e4a1e089b48c3e7922cae53fe5a9c432231538dd6ac548629dc1ea31->enter($__internal_3831b512e4a1e089b48c3e7922cae53fe5a9c432231538dd6ac548629dc1ea31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_3831b512e4a1e089b48c3e7922cae53fe5a9c432231538dd6ac548629dc1ea31->leave($__internal_3831b512e4a1e089b48c3e7922cae53fe5a9c432231538dd6ac548629dc1ea31_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c2e6ed34ee82e6444d3552a326a64e59b91518155bce7768f3ccf30da10aaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2e6ed34ee82e6444d3552a326a64e59b91518155bce7768f3ccf30da10aaea->enter($__internal_4c2e6ed34ee82e6444d3552a326a64e59b91518155bce7768f3ccf30da10aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c2e6ed34ee82e6444d3552a326a64e59b91518155bce7768f3ccf30da10aaea->leave($__internal_4c2e6ed34ee82e6444d3552a326a64e59b91518155bce7768f3ccf30da10aaea_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0b76784bf7542197c9ed6acbe2573ddfb60d34b235b37e10a8b0d9035e4ec1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b76784bf7542197c9ed6acbe2573ddfb60d34b235b37e10a8b0d9035e4ec1d1->enter($__internal_0b76784bf7542197c9ed6acbe2573ddfb60d34b235b37e10a8b0d9035e4ec1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_0b76784bf7542197c9ed6acbe2573ddfb60d34b235b37e10a8b0d9035e4ec1d1->leave($__internal_0b76784bf7542197c9ed6acbe2573ddfb60d34b235b37e10a8b0d9035e4ec1d1_prof);

    }

    // line 40
    public function block_linea($context, array $blocks = array())
    {
        $__internal_d9fdc0efb80b572c9bae3c41828927f58e7e88067a4b6e140de65b43cd060509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fdc0efb80b572c9bae3c41828927f58e7e88067a4b6e140de65b43cd060509->enter($__internal_d9fdc0efb80b572c9bae3c41828927f58e7e88067a4b6e140de65b43cd060509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_d9fdc0efb80b572c9bae3c41828927f58e7e88067a4b6e140de65b43cd060509->leave($__internal_d9fdc0efb80b572c9bae3c41828927f58e7e88067a4b6e140de65b43cd060509_prof);

    }

    // line 41
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_fa2501945b1ba83c2362f3f413aec0c3547e49f0cd47658278d203d6fe5cfc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2501945b1ba83c2362f3f413aec0c3547e49f0cd47658278d203d6fe5cfc65->enter($__internal_fa2501945b1ba83c2362f3f413aec0c3547e49f0cd47658278d203d6fe5cfc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_fa2501945b1ba83c2362f3f413aec0c3547e49f0cd47658278d203d6fe5cfc65->leave($__internal_fa2501945b1ba83c2362f3f413aec0c3547e49f0cd47658278d203d6fe5cfc65_prof);

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
