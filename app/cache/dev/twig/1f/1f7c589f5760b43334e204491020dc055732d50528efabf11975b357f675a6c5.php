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
        $__internal_b427d621db96fda0df795ab74251da5acbfb14e7ca36f5aa455ae88e3512f913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b427d621db96fda0df795ab74251da5acbfb14e7ca36f5aa455ae88e3512f913->enter($__internal_b427d621db96fda0df795ab74251da5acbfb14e7ca36f5aa455ae88e3512f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b427d621db96fda0df795ab74251da5acbfb14e7ca36f5aa455ae88e3512f913->leave($__internal_b427d621db96fda0df795ab74251da5acbfb14e7ca36f5aa455ae88e3512f913_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54950563f8be60f55e602b78e7434855fb65eddf7544841de663820b405f93d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54950563f8be60f55e602b78e7434855fb65eddf7544841de663820b405f93d5->enter($__internal_54950563f8be60f55e602b78e7434855fb65eddf7544841de663820b405f93d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_54950563f8be60f55e602b78e7434855fb65eddf7544841de663820b405f93d5->leave($__internal_54950563f8be60f55e602b78e7434855fb65eddf7544841de663820b405f93d5_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_0da4b03aed6ea559fb33d522444bad3a6ec00e7c6c539af0993e5d58eba7aefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da4b03aed6ea559fb33d522444bad3a6ec00e7c6c539af0993e5d58eba7aefa->enter($__internal_0da4b03aed6ea559fb33d522444bad3a6ec00e7c6c539af0993e5d58eba7aefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_0da4b03aed6ea559fb33d522444bad3a6ec00e7c6c539af0993e5d58eba7aefa->leave($__internal_0da4b03aed6ea559fb33d522444bad3a6ec00e7c6c539af0993e5d58eba7aefa_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_202cf4cad36cbbf2141a7f96aa709202010ec68b83e96073e03978834fb2d2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202cf4cad36cbbf2141a7f96aa709202010ec68b83e96073e03978834fb2d2ce->enter($__internal_202cf4cad36cbbf2141a7f96aa709202010ec68b83e96073e03978834fb2d2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_202cf4cad36cbbf2141a7f96aa709202010ec68b83e96073e03978834fb2d2ce->leave($__internal_202cf4cad36cbbf2141a7f96aa709202010ec68b83e96073e03978834fb2d2ce_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c1416d9392074b956a2eb0965aec86f77fa7894dd3de35d0de4576e9fa5d0e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1416d9392074b956a2eb0965aec86f77fa7894dd3de35d0de4576e9fa5d0e0a->enter($__internal_c1416d9392074b956a2eb0965aec86f77fa7894dd3de35d0de4576e9fa5d0e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_c1416d9392074b956a2eb0965aec86f77fa7894dd3de35d0de4576e9fa5d0e0a->leave($__internal_c1416d9392074b956a2eb0965aec86f77fa7894dd3de35d0de4576e9fa5d0e0a_prof);

    }

    // line 35
    public function block_linea($context, array $blocks = array())
    {
        $__internal_bfa91af4990ce6f0507763af8645c53834c1109e0e7b65372cc598466f74ed3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa91af4990ce6f0507763af8645c53834c1109e0e7b65372cc598466f74ed3d->enter($__internal_bfa91af4990ce6f0507763af8645c53834c1109e0e7b65372cc598466f74ed3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_bfa91af4990ce6f0507763af8645c53834c1109e0e7b65372cc598466f74ed3d->leave($__internal_bfa91af4990ce6f0507763af8645c53834c1109e0e7b65372cc598466f74ed3d_prof);

    }

    // line 36
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_8ce380562b084b413345a73998ea3f4af15e68db35754efa91100077e6cbf1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce380562b084b413345a73998ea3f4af15e68db35754efa91100077e6cbf1d8->enter($__internal_8ce380562b084b413345a73998ea3f4af15e68db35754efa91100077e6cbf1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_8ce380562b084b413345a73998ea3f4af15e68db35754efa91100077e6cbf1d8->leave($__internal_8ce380562b084b413345a73998ea3f4af15e68db35754efa91100077e6cbf1d8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
