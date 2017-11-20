<?php

/* ::base.html.twig */
class __TwigTemplate_b07f2eefc5f694716ffb52da200f12aa0909ff6ffa7d47a7a01134a38eeb08f5 extends Twig_Template
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
        $__internal_031b48acf9770e03e4202770692053a879b348878db255b1429142263fa08d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031b48acf9770e03e4202770692053a879b348878db255b1429142263fa08d17->enter($__internal_031b48acf9770e03e4202770692053a879b348878db255b1429142263fa08d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_031b48acf9770e03e4202770692053a879b348878db255b1429142263fa08d17->leave($__internal_031b48acf9770e03e4202770692053a879b348878db255b1429142263fa08d17_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_cabf921d1141f0912d2aea4eda825bf24953c1d73df4fe3dbc678b2aff55fdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabf921d1141f0912d2aea4eda825bf24953c1d73df4fe3dbc678b2aff55fdf5->enter($__internal_cabf921d1141f0912d2aea4eda825bf24953c1d73df4fe3dbc678b2aff55fdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_cabf921d1141f0912d2aea4eda825bf24953c1d73df4fe3dbc678b2aff55fdf5->leave($__internal_cabf921d1141f0912d2aea4eda825bf24953c1d73df4fe3dbc678b2aff55fdf5_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d3468bf63221c0f6d64a836ad707103f10447dce28b8240c844a93416f9a7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3468bf63221c0f6d64a836ad707103f10447dce28b8240c844a93416f9a7cc->enter($__internal_7d3468bf63221c0f6d64a836ad707103f10447dce28b8240c844a93416f9a7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d3468bf63221c0f6d64a836ad707103f10447dce28b8240c844a93416f9a7cc->leave($__internal_7d3468bf63221c0f6d64a836ad707103f10447dce28b8240c844a93416f9a7cc_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_944de352e2b8148a1ef1b4c8df9a95aebb7b4cb85d888bf1e84adf3c6b1a43c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944de352e2b8148a1ef1b4c8df9a95aebb7b4cb85d888bf1e84adf3c6b1a43c6->enter($__internal_944de352e2b8148a1ef1b4c8df9a95aebb7b4cb85d888bf1e84adf3c6b1a43c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_944de352e2b8148a1ef1b4c8df9a95aebb7b4cb85d888bf1e84adf3c6b1a43c6->leave($__internal_944de352e2b8148a1ef1b4c8df9a95aebb7b4cb85d888bf1e84adf3c6b1a43c6_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_0952546bd7cffa0b98258d9349ce14c3e8d8e3de3e901375cc46ae8e758e50d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0952546bd7cffa0b98258d9349ce14c3e8d8e3de3e901375cc46ae8e758e50d8->enter($__internal_0952546bd7cffa0b98258d9349ce14c3e8d8e3de3e901375cc46ae8e758e50d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_0952546bd7cffa0b98258d9349ce14c3e8d8e3de3e901375cc46ae8e758e50d8->leave($__internal_0952546bd7cffa0b98258d9349ce14c3e8d8e3de3e901375cc46ae8e758e50d8_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_6c167ddd5a827c7776785a8038a9a3194438222cae2d2b414a3a99cdce10ea82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c167ddd5a827c7776785a8038a9a3194438222cae2d2b414a3a99cdce10ea82->enter($__internal_6c167ddd5a827c7776785a8038a9a3194438222cae2d2b414a3a99cdce10ea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_6c167ddd5a827c7776785a8038a9a3194438222cae2d2b414a3a99cdce10ea82->leave($__internal_6c167ddd5a827c7776785a8038a9a3194438222cae2d2b414a3a99cdce10ea82_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
