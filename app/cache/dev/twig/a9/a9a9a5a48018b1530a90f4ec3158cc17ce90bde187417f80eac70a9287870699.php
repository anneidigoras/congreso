<?php

/* default/layout.html.twig */
class __TwigTemplate_c306888c358bf9f7e42d49abb0fd454d6b2252dbcc5e575a22cdee5300b16897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98f49fc71e488b7f4607a3e5400c99c56b1100d97504bc76066539f9b1b76ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f49fc71e488b7f4607a3e5400c99c56b1100d97504bc76066539f9b1b76ef8->enter($__internal_98f49fc71e488b7f4607a3e5400c99c56b1100d97504bc76066539f9b1b76ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        // line 2
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "\t</body>
</html>
";
        
        $__internal_98f49fc71e488b7f4607a3e5400c99c56b1100d97504bc76066539f9b1b76ef8->leave($__internal_98f49fc71e488b7f4607a3e5400c99c56b1100d97504bc76066539f9b1b76ef8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c02c8483c51b74f4bf2897720a95cbe447ae29edac9a761df239a08d9f2c923d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02c8483c51b74f4bf2897720a95cbe447ae29edac9a761df239a08d9f2c923d->enter($__internal_c02c8483c51b74f4bf2897720a95cbe447ae29edac9a761df239a08d9f2c923d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_c02c8483c51b74f4bf2897720a95cbe447ae29edac9a761df239a08d9f2c923d->leave($__internal_c02c8483c51b74f4bf2897720a95cbe447ae29edac9a761df239a08d9f2c923d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c4c1f2b69bece8b99a56bab211c00c688c7a942fb0f857746f9798c1d99b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c4c1f2b69bece8b99a56bab211c00c688c7a942fb0f857746f9798c1d99b08->enter($__internal_23c4c1f2b69bece8b99a56bab211c00c688c7a942fb0f857746f9798c1d99b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23c4c1f2b69bece8b99a56bab211c00c688c7a942fb0f857746f9798c1d99b08->leave($__internal_23c4c1f2b69bece8b99a56bab211c00c688c7a942fb0f857746f9798c1d99b08_prof);

    }

    public function getTemplateName()
    {
        return "default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  46 => 5,  37 => 9,  35 => 8,  29 => 5,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!doctype html>
<html>
\t<head>
\t\t<title>{% block title %}Default title{% endblock %}</title>
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
</html>
", "default/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\default\\layout.html.twig");
    }
}
