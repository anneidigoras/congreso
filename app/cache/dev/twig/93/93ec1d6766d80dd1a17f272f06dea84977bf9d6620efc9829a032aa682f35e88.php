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
        $__internal_25018404fb3f3104ce2c28e283bf6abea8dfb594c1714aa4970450cc8e87738b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25018404fb3f3104ce2c28e283bf6abea8dfb594c1714aa4970450cc8e87738b->enter($__internal_25018404fb3f3104ce2c28e283bf6abea8dfb594c1714aa4970450cc8e87738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseIng.html.twig"));

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
        
        $__internal_25018404fb3f3104ce2c28e283bf6abea8dfb594c1714aa4970450cc8e87738b->leave($__internal_25018404fb3f3104ce2c28e283bf6abea8dfb594c1714aa4970450cc8e87738b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbc57e4a18817c6833f835950c7df94c6a0f6b0164b7c590a28439288d301a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc57e4a18817c6833f835950c7df94c6a0f6b0164b7c590a28439288d301a32->enter($__internal_bbc57e4a18817c6833f835950c7df94c6a0f6b0164b7c590a28439288d301a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bbc57e4a18817c6833f835950c7df94c6a0f6b0164b7c590a28439288d301a32->leave($__internal_bbc57e4a18817c6833f835950c7df94c6a0f6b0164b7c590a28439288d301a32_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5bb6f8c8127a4df84bd8714f265aac3de124d2c69817a4e0d841220005cad10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bb6f8c8127a4df84bd8714f265aac3de124d2c69817a4e0d841220005cad10->enter($__internal_b5bb6f8c8127a4df84bd8714f265aac3de124d2c69817a4e0d841220005cad10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_b5bb6f8c8127a4df84bd8714f265aac3de124d2c69817a4e0d841220005cad10->leave($__internal_b5bb6f8c8127a4df84bd8714f265aac3de124d2c69817a4e0d841220005cad10_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1dad68d1d55be41847ae0d19e54627f3237a5049b45c894ec45c1aa1acb3667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dad68d1d55be41847ae0d19e54627f3237a5049b45c894ec45c1aa1acb3667->enter($__internal_f1dad68d1d55be41847ae0d19e54627f3237a5049b45c894ec45c1aa1acb3667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_f1dad68d1d55be41847ae0d19e54627f3237a5049b45c894ec45c1aa1acb3667->leave($__internal_f1dad68d1d55be41847ae0d19e54627f3237a5049b45c894ec45c1aa1acb3667_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee5f4eb0178dc0962756ee504eb1f63af0ff78c456ed73d97ef7dedbee739c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5f4eb0178dc0962756ee504eb1f63af0ff78c456ed73d97ef7dedbee739c66->enter($__internal_ee5f4eb0178dc0962756ee504eb1f63af0ff78c456ed73d97ef7dedbee739c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee5f4eb0178dc0962756ee504eb1f63af0ff78c456ed73d97ef7dedbee739c66->leave($__internal_ee5f4eb0178dc0962756ee504eb1f63af0ff78c456ed73d97ef7dedbee739c66_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_25e18b94a136e6356edf8440d6dbfe7c92e8717899b888f394fbca4d6db68227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e18b94a136e6356edf8440d6dbfe7c92e8717899b888f394fbca4d6db68227->enter($__internal_25e18b94a136e6356edf8440d6dbfe7c92e8717899b888f394fbca4d6db68227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_25e18b94a136e6356edf8440d6dbfe7c92e8717899b888f394fbca4d6db68227->leave($__internal_25e18b94a136e6356edf8440d6dbfe7c92e8717899b888f394fbca4d6db68227_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ad40ffe75ce55c3504a5a9f44a1e4cc4f7dbdea02a2da9255035310753389344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad40ffe75ce55c3504a5a9f44a1e4cc4f7dbdea02a2da9255035310753389344->enter($__internal_ad40ffe75ce55c3504a5a9f44a1e4cc4f7dbdea02a2da9255035310753389344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ad40ffe75ce55c3504a5a9f44a1e4cc4f7dbdea02a2da9255035310753389344->leave($__internal_ad40ffe75ce55c3504a5a9f44a1e4cc4f7dbdea02a2da9255035310753389344_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_8dddd952ef19f7fc42cfefc31c5c4bec3872b5c1acaa28aac7654a037e63fbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dddd952ef19f7fc42cfefc31c5c4bec3872b5c1acaa28aac7654a037e63fbb8->enter($__internal_8dddd952ef19f7fc42cfefc31c5c4bec3872b5c1acaa28aac7654a037e63fbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_8dddd952ef19f7fc42cfefc31c5c4bec3872b5c1acaa28aac7654a037e63fbb8->leave($__internal_8dddd952ef19f7fc42cfefc31c5c4bec3872b5c1acaa28aac7654a037e63fbb8_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_09f1b9ba4e985c9d36a55986e272374a35525e69fcf98a2393d2278d7589fe41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f1b9ba4e985c9d36a55986e272374a35525e69fcf98a2393d2278d7589fe41->enter($__internal_09f1b9ba4e985c9d36a55986e272374a35525e69fcf98a2393d2278d7589fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_09f1b9ba4e985c9d36a55986e272374a35525e69fcf98a2393d2278d7589fe41->leave($__internal_09f1b9ba4e985c9d36a55986e272374a35525e69fcf98a2393d2278d7589fe41_prof);

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
