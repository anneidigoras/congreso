<?php

/* ::base.html.twig */
class __TwigTemplate_3c7154162f5f5dc0d920db7fdfe949f309b9f3fd132ccc85d99177bdcdfadce1 extends Twig_Template
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
        $__internal_43d7bddff96c87a3a8b59dd147d58f87fa55dc5bed1295ad6b23041a338de640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d7bddff96c87a3a8b59dd147d58f87fa55dc5bed1295ad6b23041a338de640->enter($__internal_43d7bddff96c87a3a8b59dd147d58f87fa55dc5bed1295ad6b23041a338de640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_43d7bddff96c87a3a8b59dd147d58f87fa55dc5bed1295ad6b23041a338de640->leave($__internal_43d7bddff96c87a3a8b59dd147d58f87fa55dc5bed1295ad6b23041a338de640_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75717fbe508852fbdefadf6a581625b2ea14633873863ac4270760d30e8ff427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75717fbe508852fbdefadf6a581625b2ea14633873863ac4270760d30e8ff427->enter($__internal_75717fbe508852fbdefadf6a581625b2ea14633873863ac4270760d30e8ff427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_75717fbe508852fbdefadf6a581625b2ea14633873863ac4270760d30e8ff427->leave($__internal_75717fbe508852fbdefadf6a581625b2ea14633873863ac4270760d30e8ff427_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1bd387be4cf9e1065d929c7a6f8fbf1c45d847e02871a75f3df0848d8753ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bd387be4cf9e1065d929c7a6f8fbf1c45d847e02871a75f3df0848d8753ceb->enter($__internal_e1bd387be4cf9e1065d929c7a6f8fbf1c45d847e02871a75f3df0848d8753ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_e1bd387be4cf9e1065d929c7a6f8fbf1c45d847e02871a75f3df0848d8753ceb->leave($__internal_e1bd387be4cf9e1065d929c7a6f8fbf1c45d847e02871a75f3df0848d8753ceb_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_2374665efb5e9c004da00756666b16b3fc5bb28530e485a0fc71920fb795ba7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2374665efb5e9c004da00756666b16b3fc5bb28530e485a0fc71920fb795ba7d->enter($__internal_2374665efb5e9c004da00756666b16b3fc5bb28530e485a0fc71920fb795ba7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2374665efb5e9c004da00756666b16b3fc5bb28530e485a0fc71920fb795ba7d->leave($__internal_2374665efb5e9c004da00756666b16b3fc5bb28530e485a0fc71920fb795ba7d_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_613e3e949c15fe12054bce54877731a4d57008c90d3d46ab410d3c90418a4c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613e3e949c15fe12054bce54877731a4d57008c90d3d46ab410d3c90418a4c6c->enter($__internal_613e3e949c15fe12054bce54877731a4d57008c90d3d46ab410d3c90418a4c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_613e3e949c15fe12054bce54877731a4d57008c90d3d46ab410d3c90418a4c6c->leave($__internal_613e3e949c15fe12054bce54877731a4d57008c90d3d46ab410d3c90418a4c6c_prof);

    }

    // line 35
    public function block_linea($context, array $blocks = array())
    {
        $__internal_71fda0ea07ecee0ec591f1a30375b0d03be55d4c34ec360602b759dcc014f9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fda0ea07ecee0ec591f1a30375b0d03be55d4c34ec360602b759dcc014f9c5->enter($__internal_71fda0ea07ecee0ec591f1a30375b0d03be55d4c34ec360602b759dcc014f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_71fda0ea07ecee0ec591f1a30375b0d03be55d4c34ec360602b759dcc014f9c5->leave($__internal_71fda0ea07ecee0ec591f1a30375b0d03be55d4c34ec360602b759dcc014f9c5_prof);

    }

    // line 36
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_3e5abc1eb67feb278190c5e093feb0a7eaf35e9eaa662e6765ab5e7fae38cca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5abc1eb67feb278190c5e093feb0a7eaf35e9eaa662e6765ab5e7fae38cca8->enter($__internal_3e5abc1eb67feb278190c5e093feb0a7eaf35e9eaa662e6765ab5e7fae38cca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_3e5abc1eb67feb278190c5e093feb0a7eaf35e9eaa662e6765ab5e7fae38cca8->leave($__internal_3e5abc1eb67feb278190c5e093feb0a7eaf35e9eaa662e6765ab5e7fae38cca8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
