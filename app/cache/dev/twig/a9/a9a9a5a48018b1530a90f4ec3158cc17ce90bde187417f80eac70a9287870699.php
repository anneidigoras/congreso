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
        $__internal_bd5e38aa4a985ed4130f3689dfc92b3f33ff7d871715716a72b5a743954a4b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5e38aa4a985ed4130f3689dfc92b3f33ff7d871715716a72b5a743954a4b12->enter($__internal_bd5e38aa4a985ed4130f3689dfc92b3f33ff7d871715716a72b5a743954a4b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_bd5e38aa4a985ed4130f3689dfc92b3f33ff7d871715716a72b5a743954a4b12->leave($__internal_bd5e38aa4a985ed4130f3689dfc92b3f33ff7d871715716a72b5a743954a4b12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_46c0a5d78755cb13867243671a71d1aa67e54aa27a5c8f089712fdd0adab6dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c0a5d78755cb13867243671a71d1aa67e54aa27a5c8f089712fdd0adab6dd9->enter($__internal_46c0a5d78755cb13867243671a71d1aa67e54aa27a5c8f089712fdd0adab6dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_46c0a5d78755cb13867243671a71d1aa67e54aa27a5c8f089712fdd0adab6dd9->leave($__internal_46c0a5d78755cb13867243671a71d1aa67e54aa27a5c8f089712fdd0adab6dd9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aee73b54ad146d2d7db1d470cd214369a3e74f6f1a32fbb73b4964f45718af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aee73b54ad146d2d7db1d470cd214369a3e74f6f1a32fbb73b4964f45718af4->enter($__internal_0aee73b54ad146d2d7db1d470cd214369a3e74f6f1a32fbb73b4964f45718af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0aee73b54ad146d2d7db1d470cd214369a3e74f6f1a32fbb73b4964f45718af4->leave($__internal_0aee73b54ad146d2d7db1d470cd214369a3e74f6f1a32fbb73b4964f45718af4_prof);

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
