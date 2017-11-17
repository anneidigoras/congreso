<?php

/* base.html.twig */
class __TwigTemplate_d882acde4f4b42cd8633763c1d480248c057bf1eb49dc40eeba39fe53f81788a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f6527177baf3473757c53fec1e6679bb6f3b8667d3c11d3437236949cb50bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6527177baf3473757c53fec1e6679bb6f3b8667d3c11d3437236949cb50bba->enter($__internal_3f6527177baf3473757c53fec1e6679bb6f3b8667d3c11d3437236949cb50bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Sovereign 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120902

-->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta name=\"keywords\" content=\"\" />
<meta name=\"description\" content=\"\" />
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<title>Congreso científico</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
</head>
<body>
<div id=\"wrapper\">
\t
\t\t<div id=\"header\" class=\"container\">
\t\t\t<div id=\"logo\">
\t\t\t\t<h1><a href=\"#\">";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo " </a></h1>
\t\t\t</div>
\t\t</div>
\t
\t<!-- end #header -->
\t<div id=\"page\">
\t\t<div id=\"three-columns\">
\t\t
\t\t</div>
\t\t<div id=\"content\">
\t\t\t";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "\t\t</div>
\t\t<!-- end #content -->
\t\t<div id=\"sidebar\">
\t\t\t";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "\t\t\t";
        $this->displayBlock('linea', $context, $blocks);
        // line 45
        echo "\t\t\t";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 46
        echo "
\t\t</div>
\t\t
\t\t<!-- end #sidebar -->
\t\t<div style=\"clear: both;\">&nbsp;</div>
\t</div>
\t<div class=\"container\"><img src=\"images/img03.png\" width=\"1000\" height=\"40\" alt=\"\" /></div>
\t<!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
\t<p>&copy; Untitled. All rights reserved. Design by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>. Photos by <a href=\"http://fotogrph.com/\">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
";
        
        $__internal_3f6527177baf3473757c53fec1e6679bb6f3b8667d3c11d3437236949cb50bba->leave($__internal_3f6527177baf3473757c53fec1e6679bb6f3b8667d3c11d3437236949cb50bba_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_a32f41023696de2214512e159a4ea960d72d35d70e7503e50ad14090c7f91a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32f41023696de2214512e159a4ea960d72d35d70e7503e50ad14090c7f91a69->enter($__internal_a32f41023696de2214512e159a4ea960d72d35d70e7503e50ad14090c7f91a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_a32f41023696de2214512e159a4ea960d72d35d70e7503e50ad14090c7f91a69->leave($__internal_a32f41023696de2214512e159a4ea960d72d35d70e7503e50ad14090c7f91a69_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_f88f76288037d118141a1131e52d4bc73737636f577534483bb9906e5d286651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88f76288037d118141a1131e52d4bc73737636f577534483bb9906e5d286651->enter($__internal_f88f76288037d118141a1131e52d4bc73737636f577534483bb9906e5d286651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f88f76288037d118141a1131e52d4bc73737636f577534483bb9906e5d286651->leave($__internal_f88f76288037d118141a1131e52d4bc73737636f577534483bb9906e5d286651_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_31f71e1e741c0c3af6e2455a9f01afcdf39f1cf1b792adf77cea4ec87ce32df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f71e1e741c0c3af6e2455a9f01afcdf39f1cf1b792adf77cea4ec87ce32df3->enter($__internal_31f71e1e741c0c3af6e2455a9f01afcdf39f1cf1b792adf77cea4ec87ce32df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_31f71e1e741c0c3af6e2455a9f01afcdf39f1cf1b792adf77cea4ec87ce32df3->leave($__internal_31f71e1e741c0c3af6e2455a9f01afcdf39f1cf1b792adf77cea4ec87ce32df3_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_7d0a6f12fc8faa4fdb01b24fa253f024f2bd47df4c502b4b3ba12970c0e17a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0a6f12fc8faa4fdb01b24fa253f024f2bd47df4c502b4b3ba12970c0e17a12->enter($__internal_7d0a6f12fc8faa4fdb01b24fa253f024f2bd47df4c502b4b3ba12970c0e17a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_7d0a6f12fc8faa4fdb01b24fa253f024f2bd47df4c502b4b3ba12970c0e17a12->leave($__internal_7d0a6f12fc8faa4fdb01b24fa253f024f2bd47df4c502b4b3ba12970c0e17a12_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_3d4ffc6aa1559cb10b532e46804ff41a62d740f28b5abc3a6bec62ecaea86b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4ffc6aa1559cb10b532e46804ff41a62d740f28b5abc3a6bec62ecaea86b2c->enter($__internal_3d4ffc6aa1559cb10b532e46804ff41a62d740f28b5abc3a6bec62ecaea86b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_3d4ffc6aa1559cb10b532e46804ff41a62d740f28b5abc3a6bec62ecaea86b2c->leave($__internal_3d4ffc6aa1559cb10b532e46804ff41a62d740f28b5abc3a6bec62ecaea86b2c_prof);

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
        return array (  156 => 45,  145 => 44,  134 => 43,  123 => 39,  111 => 29,  88 => 46,  85 => 45,  82 => 44,  80 => 43,  75 => 40,  73 => 39,  60 => 29,  50 => 22,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Sovereign 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120902

-->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta name=\"keywords\" content=\"\" />
<meta name=\"description\" content=\"\" />
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<title>Congreso científico</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
<link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
</head>
<body>
<div id=\"wrapper\">
\t
\t\t<div id=\"header\" class=\"container\">
\t\t\t<div id=\"logo\">
\t\t\t\t<h1><a href=\"#\">{% block title %} {% endblock %} </a></h1>
\t\t\t</div>
\t\t</div>
\t
\t<!-- end #header -->
\t<div id=\"page\">
\t\t<div id=\"three-columns\">
\t\t
\t\t</div>
\t\t<div id=\"content\">
\t\t\t{% block body %}{% endblock %}
\t\t</div>
\t\t<!-- end #content -->
\t\t<div id=\"sidebar\">
\t\t\t{% block sidebar %}{% endblock %}
\t\t\t{% block linea %}{% endblock %}
\t\t\t{% block sidebar1 %}{% endblock %}

\t\t</div>
\t\t
\t\t<!-- end #sidebar -->
\t\t<div style=\"clear: both;\">&nbsp;</div>
\t</div>
\t<div class=\"container\"><img src=\"images/img03.png\" width=\"1000\" height=\"40\" alt=\"\" /></div>
\t<!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
\t<p>&copy; Untitled. All rights reserved. Design by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>. Photos by <a href=\"http://fotogrph.com/\">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
