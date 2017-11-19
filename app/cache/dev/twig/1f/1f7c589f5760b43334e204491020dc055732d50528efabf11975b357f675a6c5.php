<?php

/* ::base.html.twig */
class __TwigTemplate_3c7154162f5f5dc0d920db7fdfe949f309b9f3fd132ccc85d99177bdcdfadce1 extends Twig_Template
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
        $__internal_4ef6072dd25505ea778a0bcb9f6252eb7d06a324f0b2b33e0ba63e47ba26cdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef6072dd25505ea778a0bcb9f6252eb7d06a324f0b2b33e0ba63e47ba26cdfc->enter($__internal_4ef6072dd25505ea778a0bcb9f6252eb7d06a324f0b2b33e0ba63e47ba26cdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4ef6072dd25505ea778a0bcb9f6252eb7d06a324f0b2b33e0ba63e47ba26cdfc->leave($__internal_4ef6072dd25505ea778a0bcb9f6252eb7d06a324f0b2b33e0ba63e47ba26cdfc_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_d92ad8af3f7030004a0e664f1705e8eb747129d414fface5c5aa5348f463bd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92ad8af3f7030004a0e664f1705e8eb747129d414fface5c5aa5348f463bd2a->enter($__internal_d92ad8af3f7030004a0e664f1705e8eb747129d414fface5c5aa5348f463bd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_d92ad8af3f7030004a0e664f1705e8eb747129d414fface5c5aa5348f463bd2a->leave($__internal_d92ad8af3f7030004a0e664f1705e8eb747129d414fface5c5aa5348f463bd2a_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4c8a130453c650ecee220bd6eed19b01529084a9f6f106c998e9f09ca0e2399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c8a130453c650ecee220bd6eed19b01529084a9f6f106c998e9f09ca0e2399->enter($__internal_e4c8a130453c650ecee220bd6eed19b01529084a9f6f106c998e9f09ca0e2399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4c8a130453c650ecee220bd6eed19b01529084a9f6f106c998e9f09ca0e2399->leave($__internal_e4c8a130453c650ecee220bd6eed19b01529084a9f6f106c998e9f09ca0e2399_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b4486889740a59d69d42332a21c5830a2dac0f3c07bc770807cbc217c814d11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4486889740a59d69d42332a21c5830a2dac0f3c07bc770807cbc217c814d11c->enter($__internal_b4486889740a59d69d42332a21c5830a2dac0f3c07bc770807cbc217c814d11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_b4486889740a59d69d42332a21c5830a2dac0f3c07bc770807cbc217c814d11c->leave($__internal_b4486889740a59d69d42332a21c5830a2dac0f3c07bc770807cbc217c814d11c_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_56e89b554b410b8cac993ded65b4e232deffd46f5a9f1caa12064c8149de76f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e89b554b410b8cac993ded65b4e232deffd46f5a9f1caa12064c8149de76f2->enter($__internal_56e89b554b410b8cac993ded65b4e232deffd46f5a9f1caa12064c8149de76f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_56e89b554b410b8cac993ded65b4e232deffd46f5a9f1caa12064c8149de76f2->leave($__internal_56e89b554b410b8cac993ded65b4e232deffd46f5a9f1caa12064c8149de76f2_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_adeb1021b66793aaaf2e5f7c8b5dfcd9cd7a7e909640c79847447286733177b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adeb1021b66793aaaf2e5f7c8b5dfcd9cd7a7e909640c79847447286733177b9->enter($__internal_adeb1021b66793aaaf2e5f7c8b5dfcd9cd7a7e909640c79847447286733177b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_adeb1021b66793aaaf2e5f7c8b5dfcd9cd7a7e909640c79847447286733177b9->leave($__internal_adeb1021b66793aaaf2e5f7c8b5dfcd9cd7a7e909640c79847447286733177b9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
