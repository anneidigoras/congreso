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
        $__internal_1e6599e44ce6badeb2d3acc971cc0777acc97fc325aa7ee041336997b3a7344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6599e44ce6badeb2d3acc971cc0777acc97fc325aa7ee041336997b3a7344d->enter($__internal_1e6599e44ce6badeb2d3acc971cc0777acc97fc325aa7ee041336997b3a7344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 34
        $this->displayBlock('sidebar', $context, $blocks);
        // line 35
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 36
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 37
        echo "
        </div>
        
        <!-- end #sidebar -->
        <div style=\"clear: both;\">&nbsp;</div>
    </div>
    <div class=\"container\"><img src=\"images/img03.png\" width=\"1000\" height=\"40\" alt=\"\" /></div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Untitled. All rights reserved. Design by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>. Photos by <a href=\"http://fotogrph.com/\">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>";
        
        $__internal_1e6599e44ce6badeb2d3acc971cc0777acc97fc325aa7ee041336997b3a7344d->leave($__internal_1e6599e44ce6badeb2d3acc971cc0777acc97fc325aa7ee041336997b3a7344d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aca79a1966c8a2a273e656582cfbbe1440860a8b1e37eff919b2cb73e72caee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca79a1966c8a2a273e656582cfbbe1440860a8b1e37eff919b2cb73e72caee7->enter($__internal_aca79a1966c8a2a273e656582cfbbe1440860a8b1e37eff919b2cb73e72caee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aca79a1966c8a2a273e656582cfbbe1440860a8b1e37eff919b2cb73e72caee7->leave($__internal_aca79a1966c8a2a273e656582cfbbe1440860a8b1e37eff919b2cb73e72caee7_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cf60807cb456fb428fa3770b82535c0876525bbe82b8621b0f431efee5fe6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf60807cb456fb428fa3770b82535c0876525bbe82b8621b0f431efee5fe6bc->enter($__internal_3cf60807cb456fb428fa3770b82535c0876525bbe82b8621b0f431efee5fe6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_3cf60807cb456fb428fa3770b82535c0876525bbe82b8621b0f431efee5fe6bc->leave($__internal_3cf60807cb456fb428fa3770b82535c0876525bbe82b8621b0f431efee5fe6bc_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_2999d9df68edbea5d4522a6acae1d70f5af7004750fe009ac31c36a9614a390d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2999d9df68edbea5d4522a6acae1d70f5af7004750fe009ac31c36a9614a390d->enter($__internal_2999d9df68edbea5d4522a6acae1d70f5af7004750fe009ac31c36a9614a390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2999d9df68edbea5d4522a6acae1d70f5af7004750fe009ac31c36a9614a390d->leave($__internal_2999d9df68edbea5d4522a6acae1d70f5af7004750fe009ac31c36a9614a390d_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3326e11471ff00bccfae3a522b821c48bf57092514292df4ef6fe333eb3ff671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3326e11471ff00bccfae3a522b821c48bf57092514292df4ef6fe333eb3ff671->enter($__internal_3326e11471ff00bccfae3a522b821c48bf57092514292df4ef6fe333eb3ff671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_3326e11471ff00bccfae3a522b821c48bf57092514292df4ef6fe333eb3ff671->leave($__internal_3326e11471ff00bccfae3a522b821c48bf57092514292df4ef6fe333eb3ff671_prof);

    }

    // line 35
    public function block_linea($context, array $blocks = array())
    {
        $__internal_c4348b3b46f131dc3dd2405d00b74d4622eca2f0899a23995a2f2e8a0fba463e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4348b3b46f131dc3dd2405d00b74d4622eca2f0899a23995a2f2e8a0fba463e->enter($__internal_c4348b3b46f131dc3dd2405d00b74d4622eca2f0899a23995a2f2e8a0fba463e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_c4348b3b46f131dc3dd2405d00b74d4622eca2f0899a23995a2f2e8a0fba463e->leave($__internal_c4348b3b46f131dc3dd2405d00b74d4622eca2f0899a23995a2f2e8a0fba463e_prof);

    }

    // line 36
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_f0754d571292fe2186c74582761c2b9c55e56792f3ecd57bc12f6a941811fbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0754d571292fe2186c74582761c2b9c55e56792f3ecd57bc12f6a941811fbaf->enter($__internal_f0754d571292fe2186c74582761c2b9c55e56792f3ecd57bc12f6a941811fbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_f0754d571292fe2186c74582761c2b9c55e56792f3ecd57bc12f6a941811fbaf->leave($__internal_f0754d571292fe2186c74582761c2b9c55e56792f3ecd57bc12f6a941811fbaf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 36,  151 => 35,  140 => 34,  129 => 30,  117 => 20,  108 => 11,  102 => 7,  96 => 6,  74 => 37,  71 => 36,  68 => 35,  66 => 34,  61 => 31,  59 => 30,  46 => 20,  37 => 13,  35 => 6,  28 => 1,);
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
    <div class=\"container\"><img src=\"images/img03.png\" width=\"1000\" height=\"40\" alt=\"\" /></div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Untitled. All rights reserved. Design by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>. Photos by <a href=\"http://fotogrph.com/\">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
