<?php

/* ::baseIng.html.twig */
class __TwigTemplate_221dd5e52c8ef1efddeb33c0d892cef8caebb3da46e95a7af8909be828849105 extends Twig_Template
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
        $__internal_51b468c02a3420f337843b9071e680658eb2470dc6c4dda761a1346853927116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b468c02a3420f337843b9071e680658eb2470dc6c4dda761a1346853927116->enter($__internal_51b468c02a3420f337843b9071e680658eb2470dc6c4dda761a1346853927116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseIng.html.twig"));

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
            echo "\">Log out</a>
                ";
        } else {
            // line 27
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Log in</a>    
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
    <p>&copy; Scientific congres.All rights reserved.Designed by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>";
        
        $__internal_51b468c02a3420f337843b9071e680658eb2470dc6c4dda761a1346853927116->leave($__internal_51b468c02a3420f337843b9071e680658eb2470dc6c4dda761a1346853927116_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c43f187ada3fca7226165ef15d5f0528b33aceb782dbd5e8c6b38ea0f5ce0e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43f187ada3fca7226165ef15d5f0528b33aceb782dbd5e8c6b38ea0f5ce0e1a->enter($__internal_c43f187ada3fca7226165ef15d5f0528b33aceb782dbd5e8c6b38ea0f5ce0e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Scientific congress</title>
            <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_c43f187ada3fca7226165ef15d5f0528b33aceb782dbd5e8c6b38ea0f5ce0e1a->leave($__internal_c43f187ada3fca7226165ef15d5f0528b33aceb782dbd5e8c6b38ea0f5ce0e1a_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8537eb19b4a653cd404cc2db7f83772a1a4e62e6d3d6a07051f307d9d0165e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8537eb19b4a653cd404cc2db7f83772a1a4e62e6d3d6a07051f307d9d0165e9e->enter($__internal_8537eb19b4a653cd404cc2db7f83772a1a4e62e6d3d6a07051f307d9d0165e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_8537eb19b4a653cd404cc2db7f83772a1a4e62e6d3d6a07051f307d9d0165e9e->leave($__internal_8537eb19b4a653cd404cc2db7f83772a1a4e62e6d3d6a07051f307d9d0165e9e_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_4365bff8543e807a9f429e4f7ddd67c4db2262ba6b4cb5ccca2c32db1a610696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4365bff8543e807a9f429e4f7ddd67c4db2262ba6b4cb5ccca2c32db1a610696->enter($__internal_4365bff8543e807a9f429e4f7ddd67c4db2262ba6b4cb5ccca2c32db1a610696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_4365bff8543e807a9f429e4f7ddd67c4db2262ba6b4cb5ccca2c32db1a610696->leave($__internal_4365bff8543e807a9f429e4f7ddd67c4db2262ba6b4cb5ccca2c32db1a610696_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_04c08bab57d083462be20d01bc6cc6714a5ae68534e0f52607ddc726842e2a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c08bab57d083462be20d01bc6cc6714a5ae68534e0f52607ddc726842e2a53->enter($__internal_04c08bab57d083462be20d01bc6cc6714a5ae68534e0f52607ddc726842e2a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04c08bab57d083462be20d01bc6cc6714a5ae68534e0f52607ddc726842e2a53->leave($__internal_04c08bab57d083462be20d01bc6cc6714a5ae68534e0f52607ddc726842e2a53_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_3468458d3da98e5f61971a1f7130fe460572b2b523f1065909faf756aad17f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3468458d3da98e5f61971a1f7130fe460572b2b523f1065909faf756aad17f1b->enter($__internal_3468458d3da98e5f61971a1f7130fe460572b2b523f1065909faf756aad17f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_3468458d3da98e5f61971a1f7130fe460572b2b523f1065909faf756aad17f1b->leave($__internal_3468458d3da98e5f61971a1f7130fe460572b2b523f1065909faf756aad17f1b_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_571d7cff3a37249a102634a1a921400c62ab387f0673f150ed0d9c1f36520271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571d7cff3a37249a102634a1a921400c62ab387f0673f150ed0d9c1f36520271->enter($__internal_571d7cff3a37249a102634a1a921400c62ab387f0673f150ed0d9c1f36520271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_571d7cff3a37249a102634a1a921400c62ab387f0673f150ed0d9c1f36520271->leave($__internal_571d7cff3a37249a102634a1a921400c62ab387f0673f150ed0d9c1f36520271_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_7393ff2abc5e5c1fd661b0d51d71c55601152a893a4bbd402a1828831202ba39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7393ff2abc5e5c1fd661b0d51d71c55601152a893a4bbd402a1828831202ba39->enter($__internal_7393ff2abc5e5c1fd661b0d51d71c55601152a893a4bbd402a1828831202ba39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_7393ff2abc5e5c1fd661b0d51d71c55601152a893a4bbd402a1828831202ba39->leave($__internal_7393ff2abc5e5c1fd661b0d51d71c55601152a893a4bbd402a1828831202ba39_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_890987e835e793e4f8568c9deb884b1a1515a466948e4993334eac778c7acdb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890987e835e793e4f8568c9deb884b1a1515a466948e4993334eac778c7acdb1->enter($__internal_890987e835e793e4f8568c9deb884b1a1515a466948e4993334eac778c7acdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_890987e835e793e4f8568c9deb884b1a1515a466948e4993334eac778c7acdb1->leave($__internal_890987e835e793e4f8568c9deb884b1a1515a466948e4993334eac778c7acdb1_prof);

    }

    public function getTemplateName()
    {
        return "::baseIng.html.twig";
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
            <title>Scientific congress</title>
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
                    <a href=\"{{ path('congreso_admin_logout')}}\">Log out</a>
                {% else %}
                    <a href=\"{{ path('congreso_admin_login')}}\">Log in</a>    
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
    <p>&copy; Scientific congres.All rights reserved.Designed by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>", "::baseIng.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/baseIng.html.twig");
    }
}
