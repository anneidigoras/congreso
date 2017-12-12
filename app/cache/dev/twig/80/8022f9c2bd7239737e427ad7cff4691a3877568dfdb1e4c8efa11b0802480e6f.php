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
        $__internal_0e343a90288905c49a964f7f55701546350fd7ef11c8f0c4600c80a06a8f44fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e343a90288905c49a964f7f55701546350fd7ef11c8f0c4600c80a06a8f44fd->enter($__internal_0e343a90288905c49a964f7f55701546350fd7ef11c8f0c4600c80a06a8f44fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseIng.html.twig"));

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
        
        $__internal_0e343a90288905c49a964f7f55701546350fd7ef11c8f0c4600c80a06a8f44fd->leave($__internal_0e343a90288905c49a964f7f55701546350fd7ef11c8f0c4600c80a06a8f44fd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1124838ba02ef98e4a44ddcc42882ec565716ef5ab7f31c28cae3f85e0a790c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1124838ba02ef98e4a44ddcc42882ec565716ef5ab7f31c28cae3f85e0a790c4->enter($__internal_1124838ba02ef98e4a44ddcc42882ec565716ef5ab7f31c28cae3f85e0a790c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1124838ba02ef98e4a44ddcc42882ec565716ef5ab7f31c28cae3f85e0a790c4->leave($__internal_1124838ba02ef98e4a44ddcc42882ec565716ef5ab7f31c28cae3f85e0a790c4_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fc98e45f3a37b1010f14d1490ff7031e125aa14e0b489914f3a78ad9f10a9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc98e45f3a37b1010f14d1490ff7031e125aa14e0b489914f3a78ad9f10a9db->enter($__internal_3fc98e45f3a37b1010f14d1490ff7031e125aa14e0b489914f3a78ad9f10a9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_3fc98e45f3a37b1010f14d1490ff7031e125aa14e0b489914f3a78ad9f10a9db->leave($__internal_3fc98e45f3a37b1010f14d1490ff7031e125aa14e0b489914f3a78ad9f10a9db_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac2d324a1fc456da67a199f0aa468c06ec1dc606a10b7efe857e09486893424d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2d324a1fc456da67a199f0aa468c06ec1dc606a10b7efe857e09486893424d->enter($__internal_ac2d324a1fc456da67a199f0aa468c06ec1dc606a10b7efe857e09486893424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_ac2d324a1fc456da67a199f0aa468c06ec1dc606a10b7efe857e09486893424d->leave($__internal_ac2d324a1fc456da67a199f0aa468c06ec1dc606a10b7efe857e09486893424d_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_81b5f99d5b7a8b304ad941e0d3f7081e76ca2a63188d17963098497ed647f332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b5f99d5b7a8b304ad941e0d3f7081e76ca2a63188d17963098497ed647f332->enter($__internal_81b5f99d5b7a8b304ad941e0d3f7081e76ca2a63188d17963098497ed647f332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81b5f99d5b7a8b304ad941e0d3f7081e76ca2a63188d17963098497ed647f332->leave($__internal_81b5f99d5b7a8b304ad941e0d3f7081e76ca2a63188d17963098497ed647f332_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_b52fad54b036d6e3b13d8bdfd897f7ad63168427d1dc0ea5a7be6767e31dad9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52fad54b036d6e3b13d8bdfd897f7ad63168427d1dc0ea5a7be6767e31dad9d->enter($__internal_b52fad54b036d6e3b13d8bdfd897f7ad63168427d1dc0ea5a7be6767e31dad9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_b52fad54b036d6e3b13d8bdfd897f7ad63168427d1dc0ea5a7be6767e31dad9d->leave($__internal_b52fad54b036d6e3b13d8bdfd897f7ad63168427d1dc0ea5a7be6767e31dad9d_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6affdb54ea0b71b904e39668c8825bea321eec190db7487efd974732cc4bb42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6affdb54ea0b71b904e39668c8825bea321eec190db7487efd974732cc4bb42e->enter($__internal_6affdb54ea0b71b904e39668c8825bea321eec190db7487efd974732cc4bb42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6affdb54ea0b71b904e39668c8825bea321eec190db7487efd974732cc4bb42e->leave($__internal_6affdb54ea0b71b904e39668c8825bea321eec190db7487efd974732cc4bb42e_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_b17bbfc8ba7eb359d438834a7bf266cedf9ab162c957459170567b1e56e65db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17bbfc8ba7eb359d438834a7bf266cedf9ab162c957459170567b1e56e65db2->enter($__internal_b17bbfc8ba7eb359d438834a7bf266cedf9ab162c957459170567b1e56e65db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_b17bbfc8ba7eb359d438834a7bf266cedf9ab162c957459170567b1e56e65db2->leave($__internal_b17bbfc8ba7eb359d438834a7bf266cedf9ab162c957459170567b1e56e65db2_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_beef790e61a0080fb4c92b87e463af83566328f560b6da55dece2940a0a12460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beef790e61a0080fb4c92b87e463af83566328f560b6da55dece2940a0a12460->enter($__internal_beef790e61a0080fb4c92b87e463af83566328f560b6da55dece2940a0a12460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_beef790e61a0080fb4c92b87e463af83566328f560b6da55dece2940a0a12460->leave($__internal_beef790e61a0080fb4c92b87e463af83566328f560b6da55dece2940a0a12460_prof);

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
