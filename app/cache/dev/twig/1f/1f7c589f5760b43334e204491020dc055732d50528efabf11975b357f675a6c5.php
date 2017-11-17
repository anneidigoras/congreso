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
        $__internal_edbb1e26f2295cb1220fd708de717cd0b8c9dacb49015399d6ae586f2082fee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbb1e26f2295cb1220fd708de717cd0b8c9dacb49015399d6ae586f2082fee8->enter($__internal_edbb1e26f2295cb1220fd708de717cd0b8c9dacb49015399d6ae586f2082fee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_edbb1e26f2295cb1220fd708de717cd0b8c9dacb49015399d6ae586f2082fee8->leave($__internal_edbb1e26f2295cb1220fd708de717cd0b8c9dacb49015399d6ae586f2082fee8_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf2d563cc8ecf6424dc221b12e6d0b81168782a99e2524befc7bbb6236df5ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2d563cc8ecf6424dc221b12e6d0b81168782a99e2524befc7bbb6236df5ea8->enter($__internal_cf2d563cc8ecf6424dc221b12e6d0b81168782a99e2524befc7bbb6236df5ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_cf2d563cc8ecf6424dc221b12e6d0b81168782a99e2524befc7bbb6236df5ea8->leave($__internal_cf2d563cc8ecf6424dc221b12e6d0b81168782a99e2524befc7bbb6236df5ea8_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb1a1ce16fa1e3c35827681e2e1ebba28bff4d90836498ad64a9044939f3587f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1a1ce16fa1e3c35827681e2e1ebba28bff4d90836498ad64a9044939f3587f->enter($__internal_eb1a1ce16fa1e3c35827681e2e1ebba28bff4d90836498ad64a9044939f3587f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb1a1ce16fa1e3c35827681e2e1ebba28bff4d90836498ad64a9044939f3587f->leave($__internal_eb1a1ce16fa1e3c35827681e2e1ebba28bff4d90836498ad64a9044939f3587f_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9f9ab01e9f2b98e84bc2c1501c519e1f52ab55aa631315dd8fd66db9a53e6b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9ab01e9f2b98e84bc2c1501c519e1f52ab55aa631315dd8fd66db9a53e6b7d->enter($__internal_9f9ab01e9f2b98e84bc2c1501c519e1f52ab55aa631315dd8fd66db9a53e6b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9f9ab01e9f2b98e84bc2c1501c519e1f52ab55aa631315dd8fd66db9a53e6b7d->leave($__internal_9f9ab01e9f2b98e84bc2c1501c519e1f52ab55aa631315dd8fd66db9a53e6b7d_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_0edf4b0e25b1e62dddb4f9965c1edc057006028af8c74f5f64e9e3792f24d98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edf4b0e25b1e62dddb4f9965c1edc057006028af8c74f5f64e9e3792f24d98a->enter($__internal_0edf4b0e25b1e62dddb4f9965c1edc057006028af8c74f5f64e9e3792f24d98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_0edf4b0e25b1e62dddb4f9965c1edc057006028af8c74f5f64e9e3792f24d98a->leave($__internal_0edf4b0e25b1e62dddb4f9965c1edc057006028af8c74f5f64e9e3792f24d98a_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_8795203112d3ecb3b93f1ee71f1f54e540087bfc5255ecd4242be1a34d3b2fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8795203112d3ecb3b93f1ee71f1f54e540087bfc5255ecd4242be1a34d3b2fad->enter($__internal_8795203112d3ecb3b93f1ee71f1f54e540087bfc5255ecd4242be1a34d3b2fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_8795203112d3ecb3b93f1ee71f1f54e540087bfc5255ecd4242be1a34d3b2fad->leave($__internal_8795203112d3ecb3b93f1ee71f1f54e540087bfc5255ecd4242be1a34d3b2fad_prof);

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
