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
        $__internal_44458d8e36528f411713b3c73c6cb6d0db2e970801d893b51ba3619536b67613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44458d8e36528f411713b3c73c6cb6d0db2e970801d893b51ba3619536b67613->enter($__internal_44458d8e36528f411713b3c73c6cb6d0db2e970801d893b51ba3619536b67613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">";
        // line 19
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
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 34
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 35
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 36
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
        
        $__internal_44458d8e36528f411713b3c73c6cb6d0db2e970801d893b51ba3619536b67613->leave($__internal_44458d8e36528f411713b3c73c6cb6d0db2e970801d893b51ba3619536b67613_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdaa157f47b39d6d8feca64638560da5267e6de45e124ea60d696519ba02b7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaa157f47b39d6d8feca64638560da5267e6de45e124ea60d696519ba02b7f5->enter($__internal_bdaa157f47b39d6d8feca64638560da5267e6de45e124ea60d696519ba02b7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_bdaa157f47b39d6d8feca64638560da5267e6de45e124ea60d696519ba02b7f5->leave($__internal_bdaa157f47b39d6d8feca64638560da5267e6de45e124ea60d696519ba02b7f5_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_317dd2a6a32d5416a94905dba193e7c3958c4fa3aee96742e95a55ed72a5b731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317dd2a6a32d5416a94905dba193e7c3958c4fa3aee96742e95a55ed72a5b731->enter($__internal_317dd2a6a32d5416a94905dba193e7c3958c4fa3aee96742e95a55ed72a5b731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_317dd2a6a32d5416a94905dba193e7c3958c4fa3aee96742e95a55ed72a5b731->leave($__internal_317dd2a6a32d5416a94905dba193e7c3958c4fa3aee96742e95a55ed72a5b731_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_728a2e4a8b63fe93afd8af41ca9afd3f7b1d937dae43b4e6f87b3db9801f37f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728a2e4a8b63fe93afd8af41ca9afd3f7b1d937dae43b4e6f87b3db9801f37f4->enter($__internal_728a2e4a8b63fe93afd8af41ca9afd3f7b1d937dae43b4e6f87b3db9801f37f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_728a2e4a8b63fe93afd8af41ca9afd3f7b1d937dae43b4e6f87b3db9801f37f4->leave($__internal_728a2e4a8b63fe93afd8af41ca9afd3f7b1d937dae43b4e6f87b3db9801f37f4_prof);

    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0e855419c6523822ce613114e36bfdfe1d905633e079baa113678e05c9edf36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e855419c6523822ce613114e36bfdfe1d905633e079baa113678e05c9edf36c->enter($__internal_0e855419c6523822ce613114e36bfdfe1d905633e079baa113678e05c9edf36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_0e855419c6523822ce613114e36bfdfe1d905633e079baa113678e05c9edf36c->leave($__internal_0e855419c6523822ce613114e36bfdfe1d905633e079baa113678e05c9edf36c_prof);

    }

    // line 34
    public function block_linea($context, array $blocks = array())
    {
        $__internal_56c38e05aca7a5e9789b5c086b150568e00315558a8000a2a6eb8516ba53beac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c38e05aca7a5e9789b5c086b150568e00315558a8000a2a6eb8516ba53beac->enter($__internal_56c38e05aca7a5e9789b5c086b150568e00315558a8000a2a6eb8516ba53beac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_56c38e05aca7a5e9789b5c086b150568e00315558a8000a2a6eb8516ba53beac->leave($__internal_56c38e05aca7a5e9789b5c086b150568e00315558a8000a2a6eb8516ba53beac_prof);

    }

    // line 35
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_c30a3ccd7702a375a1bdd73ec36a6d2e366c75ae7c8b8433317db48edf739b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30a3ccd7702a375a1bdd73ec36a6d2e366c75ae7c8b8433317db48edf739b41->enter($__internal_c30a3ccd7702a375a1bdd73ec36a6d2e366c75ae7c8b8433317db48edf739b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_c30a3ccd7702a375a1bdd73ec36a6d2e366c75ae7c8b8433317db48edf739b41->leave($__internal_c30a3ccd7702a375a1bdd73ec36a6d2e366c75ae7c8b8433317db48edf739b41_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  150 => 34,  139 => 33,  128 => 29,  116 => 19,  107 => 10,  102 => 7,  96 => 6,  74 => 36,  71 => 35,  68 => 34,  66 => 33,  61 => 30,  59 => 29,  46 => 19,  37 => 12,  35 => 6,  28 => 1,);
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
