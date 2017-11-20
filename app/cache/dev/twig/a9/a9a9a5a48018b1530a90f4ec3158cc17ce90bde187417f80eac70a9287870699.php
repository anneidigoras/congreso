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
        $__internal_b9e95a618c7a7e9e3353c8c1108fd46fc9766b3cbadbdfa9cba4ffca2473a1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e95a618c7a7e9e3353c8c1108fd46fc9766b3cbadbdfa9cba4ffca2473a1a4->enter($__internal_b9e95a618c7a7e9e3353c8c1108fd46fc9766b3cbadbdfa9cba4ffca2473a1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_b9e95a618c7a7e9e3353c8c1108fd46fc9766b3cbadbdfa9cba4ffca2473a1a4->leave($__internal_b9e95a618c7a7e9e3353c8c1108fd46fc9766b3cbadbdfa9cba4ffca2473a1a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_910f7d0b4cab6719594b3e7e9d07d8b53bed06ee09cfcf2147e17200d7bbc561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910f7d0b4cab6719594b3e7e9d07d8b53bed06ee09cfcf2147e17200d7bbc561->enter($__internal_910f7d0b4cab6719594b3e7e9d07d8b53bed06ee09cfcf2147e17200d7bbc561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_910f7d0b4cab6719594b3e7e9d07d8b53bed06ee09cfcf2147e17200d7bbc561->leave($__internal_910f7d0b4cab6719594b3e7e9d07d8b53bed06ee09cfcf2147e17200d7bbc561_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef0e8fedc60c3820585ee49181fc979783dd8e729712273ed99c240d414a16de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0e8fedc60c3820585ee49181fc979783dd8e729712273ed99c240d414a16de->enter($__internal_ef0e8fedc60c3820585ee49181fc979783dd8e729712273ed99c240d414a16de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef0e8fedc60c3820585ee49181fc979783dd8e729712273ed99c240d414a16de->leave($__internal_ef0e8fedc60c3820585ee49181fc979783dd8e729712273ed99c240d414a16de_prof);

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
