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
        $__internal_1fc506ea5fb933ada3add0c57d4caa3864e95b79ebf8cf84380c617f6cb43b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc506ea5fb933ada3add0c57d4caa3864e95b79ebf8cf84380c617f6cb43b92->enter($__internal_1fc506ea5fb933ada3add0c57d4caa3864e95b79ebf8cf84380c617f6cb43b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Congreso Científico. Todos los derechos reservados. Diseño por <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>";
        
        $__internal_1fc506ea5fb933ada3add0c57d4caa3864e95b79ebf8cf84380c617f6cb43b92->leave($__internal_1fc506ea5fb933ada3add0c57d4caa3864e95b79ebf8cf84380c617f6cb43b92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6707321f56b8ace83bc5d40839248114ab5f1ed553b2b57e4b66662860f998a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6707321f56b8ace83bc5d40839248114ab5f1ed553b2b57e4b66662860f998a2->enter($__internal_6707321f56b8ace83bc5d40839248114ab5f1ed553b2b57e4b66662860f998a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6707321f56b8ace83bc5d40839248114ab5f1ed553b2b57e4b66662860f998a2->leave($__internal_6707321f56b8ace83bc5d40839248114ab5f1ed553b2b57e4b66662860f998a2_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_15d2df5180954125aca5241667c158c0d67bc28ea5b7df58b9505b1c39177771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d2df5180954125aca5241667c158c0d67bc28ea5b7df58b9505b1c39177771->enter($__internal_15d2df5180954125aca5241667c158c0d67bc28ea5b7df58b9505b1c39177771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_15d2df5180954125aca5241667c158c0d67bc28ea5b7df58b9505b1c39177771->leave($__internal_15d2df5180954125aca5241667c158c0d67bc28ea5b7df58b9505b1c39177771_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_afd5acd7fefd9ed8d287eea6142a83e7b327b35fec264992752cd785c045e0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd5acd7fefd9ed8d287eea6142a83e7b327b35fec264992752cd785c045e0a5->enter($__internal_afd5acd7fefd9ed8d287eea6142a83e7b327b35fec264992752cd785c045e0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_afd5acd7fefd9ed8d287eea6142a83e7b327b35fec264992752cd785c045e0a5->leave($__internal_afd5acd7fefd9ed8d287eea6142a83e7b327b35fec264992752cd785c045e0a5_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_34e0de0ef6c70fd78fab1cff47c32d0e3d145dc6e456f0edb09949f98ff4c5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e0de0ef6c70fd78fab1cff47c32d0e3d145dc6e456f0edb09949f98ff4c5d4->enter($__internal_34e0de0ef6c70fd78fab1cff47c32d0e3d145dc6e456f0edb09949f98ff4c5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_34e0de0ef6c70fd78fab1cff47c32d0e3d145dc6e456f0edb09949f98ff4c5d4->leave($__internal_34e0de0ef6c70fd78fab1cff47c32d0e3d145dc6e456f0edb09949f98ff4c5d4_prof);

    }

    // line 35
    public function block_linea($context, array $blocks = array())
    {
        $__internal_0537db3b6f7fa5337e3854d045ef71f463062bdf854b671436852aa797a95ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0537db3b6f7fa5337e3854d045ef71f463062bdf854b671436852aa797a95ddf->enter($__internal_0537db3b6f7fa5337e3854d045ef71f463062bdf854b671436852aa797a95ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_0537db3b6f7fa5337e3854d045ef71f463062bdf854b671436852aa797a95ddf->leave($__internal_0537db3b6f7fa5337e3854d045ef71f463062bdf854b671436852aa797a95ddf_prof);

    }

    // line 36
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_cdca0a0922f8878eab5df9c204e751aca36bdf166ea574401a57687eb216675f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdca0a0922f8878eab5df9c204e751aca36bdf166ea574401a57687eb216675f->enter($__internal_cdca0a0922f8878eab5df9c204e751aca36bdf166ea574401a57687eb216675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_cdca0a0922f8878eab5df9c204e751aca36bdf166ea574401a57687eb216675f->leave($__internal_cdca0a0922f8878eab5df9c204e751aca36bdf166ea574401a57687eb216675f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 36,  150 => 35,  139 => 34,  128 => 30,  116 => 20,  107 => 11,  101 => 7,  95 => 6,  74 => 37,  71 => 36,  68 => 35,  66 => 34,  61 => 31,  59 => 30,  46 => 20,  37 => 13,  35 => 6,  28 => 1,);
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
