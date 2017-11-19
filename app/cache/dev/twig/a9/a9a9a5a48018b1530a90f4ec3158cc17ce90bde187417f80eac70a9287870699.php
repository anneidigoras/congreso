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
        $__internal_34af7514939ae03d65ab9b5b07ba8a02e302a2b48dfe0c03b47b93f00bb0693a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34af7514939ae03d65ab9b5b07ba8a02e302a2b48dfe0c03b47b93f00bb0693a->enter($__internal_34af7514939ae03d65ab9b5b07ba8a02e302a2b48dfe0c03b47b93f00bb0693a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_34af7514939ae03d65ab9b5b07ba8a02e302a2b48dfe0c03b47b93f00bb0693a->leave($__internal_34af7514939ae03d65ab9b5b07ba8a02e302a2b48dfe0c03b47b93f00bb0693a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebe54a22ca817fa3daced5c8597721be9271de8146eddd4106e6533d650c7538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe54a22ca817fa3daced5c8597721be9271de8146eddd4106e6533d650c7538->enter($__internal_ebe54a22ca817fa3daced5c8597721be9271de8146eddd4106e6533d650c7538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_ebe54a22ca817fa3daced5c8597721be9271de8146eddd4106e6533d650c7538->leave($__internal_ebe54a22ca817fa3daced5c8597721be9271de8146eddd4106e6533d650c7538_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_596b8fa77b75ff718c549457facfbe4cf0364ed7c67db2dbb0a469ad117c2ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596b8fa77b75ff718c549457facfbe4cf0364ed7c67db2dbb0a469ad117c2ed9->enter($__internal_596b8fa77b75ff718c549457facfbe4cf0364ed7c67db2dbb0a469ad117c2ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_596b8fa77b75ff718c549457facfbe4cf0364ed7c67db2dbb0a469ad117c2ed9->leave($__internal_596b8fa77b75ff718c549457facfbe4cf0364ed7c67db2dbb0a469ad117c2ed9_prof);

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
