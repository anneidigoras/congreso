<?php

/* baseIng.html.twig */
class __TwigTemplate_6b1ea119c2469e75b974f4918de2db0dd7a395f44ae789833da534f7c2601389 extends Twig_Template
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
        $__internal_ee9f8bdadd5d180d47b0711b836fc76fb3f22304d12819349652a0f6bb2446e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9f8bdadd5d180d47b0711b836fc76fb3f22304d12819349652a0f6bb2446e5->enter($__internal_ee9f8bdadd5d180d47b0711b836fc76fb3f22304d12819349652a0f6bb2446e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseIng.html.twig"));

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
        
        $__internal_ee9f8bdadd5d180d47b0711b836fc76fb3f22304d12819349652a0f6bb2446e5->leave($__internal_ee9f8bdadd5d180d47b0711b836fc76fb3f22304d12819349652a0f6bb2446e5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b641ed7c75adf8c8490638c2c4488a3e12e00797bc3eee9f7fee430267b31341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b641ed7c75adf8c8490638c2c4488a3e12e00797bc3eee9f7fee430267b31341->enter($__internal_b641ed7c75adf8c8490638c2c4488a3e12e00797bc3eee9f7fee430267b31341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b641ed7c75adf8c8490638c2c4488a3e12e00797bc3eee9f7fee430267b31341->leave($__internal_b641ed7c75adf8c8490638c2c4488a3e12e00797bc3eee9f7fee430267b31341_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a306aa72025b30c9d1c170a97896053c797470fa09ee51b674b8cae01e8755e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a306aa72025b30c9d1c170a97896053c797470fa09ee51b674b8cae01e8755e->enter($__internal_9a306aa72025b30c9d1c170a97896053c797470fa09ee51b674b8cae01e8755e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_9a306aa72025b30c9d1c170a97896053c797470fa09ee51b674b8cae01e8755e->leave($__internal_9a306aa72025b30c9d1c170a97896053c797470fa09ee51b674b8cae01e8755e_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4aef7da5aedad07c9bf38d3d80beffe0e8480b2b1f788713984b83a3c571555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4aef7da5aedad07c9bf38d3d80beffe0e8480b2b1f788713984b83a3c571555->enter($__internal_a4aef7da5aedad07c9bf38d3d80beffe0e8480b2b1f788713984b83a3c571555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_a4aef7da5aedad07c9bf38d3d80beffe0e8480b2b1f788713984b83a3c571555->leave($__internal_a4aef7da5aedad07c9bf38d3d80beffe0e8480b2b1f788713984b83a3c571555_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bad75f7ce138b5c8de9c4f1da8fa93e9fc1414fa710f313fdf8ea095a8f2bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bad75f7ce138b5c8de9c4f1da8fa93e9fc1414fa710f313fdf8ea095a8f2bd8->enter($__internal_2bad75f7ce138b5c8de9c4f1da8fa93e9fc1414fa710f313fdf8ea095a8f2bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2bad75f7ce138b5c8de9c4f1da8fa93e9fc1414fa710f313fdf8ea095a8f2bd8->leave($__internal_2bad75f7ce138b5c8de9c4f1da8fa93e9fc1414fa710f313fdf8ea095a8f2bd8_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_fcfb3c15d160da8f3f83b85f6919fcaa1b70d9c6855cc1d84903747f9e5f8297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfb3c15d160da8f3f83b85f6919fcaa1b70d9c6855cc1d84903747f9e5f8297->enter($__internal_fcfb3c15d160da8f3f83b85f6919fcaa1b70d9c6855cc1d84903747f9e5f8297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_fcfb3c15d160da8f3f83b85f6919fcaa1b70d9c6855cc1d84903747f9e5f8297->leave($__internal_fcfb3c15d160da8f3f83b85f6919fcaa1b70d9c6855cc1d84903747f9e5f8297_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ebbc8704f8d469f479b9310ab2d0e6ba43918c799a15c0c05618ac25bacd408e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbc8704f8d469f479b9310ab2d0e6ba43918c799a15c0c05618ac25bacd408e->enter($__internal_ebbc8704f8d469f479b9310ab2d0e6ba43918c799a15c0c05618ac25bacd408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ebbc8704f8d469f479b9310ab2d0e6ba43918c799a15c0c05618ac25bacd408e->leave($__internal_ebbc8704f8d469f479b9310ab2d0e6ba43918c799a15c0c05618ac25bacd408e_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_3fef2e8ad93a3ccf450c5b9e416c1c49ad1be854c7d9bc4fb8f289bb44b9d79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fef2e8ad93a3ccf450c5b9e416c1c49ad1be854c7d9bc4fb8f289bb44b9d79d->enter($__internal_3fef2e8ad93a3ccf450c5b9e416c1c49ad1be854c7d9bc4fb8f289bb44b9d79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_3fef2e8ad93a3ccf450c5b9e416c1c49ad1be854c7d9bc4fb8f289bb44b9d79d->leave($__internal_3fef2e8ad93a3ccf450c5b9e416c1c49ad1be854c7d9bc4fb8f289bb44b9d79d_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_be235546f6adfd42861402687b6630f5c3859cd647317821517cf0a05966bbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be235546f6adfd42861402687b6630f5c3859cd647317821517cf0a05966bbbd->enter($__internal_be235546f6adfd42861402687b6630f5c3859cd647317821517cf0a05966bbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_be235546f6adfd42861402687b6630f5c3859cd647317821517cf0a05966bbbd->leave($__internal_be235546f6adfd42861402687b6630f5c3859cd647317821517cf0a05966bbbd_prof);

    }

    public function getTemplateName()
    {
        return "baseIng.html.twig";
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
</html>", "baseIng.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\baseIng.html.twig");
    }
}