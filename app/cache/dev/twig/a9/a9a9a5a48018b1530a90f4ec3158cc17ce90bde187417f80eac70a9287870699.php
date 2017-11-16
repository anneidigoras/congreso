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
        $__internal_427aa58cff742618f37e4fd16b9a6900aaa73b4b5d7b321296af92369a24ffcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427aa58cff742618f37e4fd16b9a6900aaa73b4b5d7b321296af92369a24ffcc->enter($__internal_427aa58cff742618f37e4fd16b9a6900aaa73b4b5d7b321296af92369a24ffcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_427aa58cff742618f37e4fd16b9a6900aaa73b4b5d7b321296af92369a24ffcc->leave($__internal_427aa58cff742618f37e4fd16b9a6900aaa73b4b5d7b321296af92369a24ffcc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e871866f78b6eee869f3199cd46ba57b30707deed542ec35946ff051146e55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e871866f78b6eee869f3199cd46ba57b30707deed542ec35946ff051146e55d->enter($__internal_9e871866f78b6eee869f3199cd46ba57b30707deed542ec35946ff051146e55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_9e871866f78b6eee869f3199cd46ba57b30707deed542ec35946ff051146e55d->leave($__internal_9e871866f78b6eee869f3199cd46ba57b30707deed542ec35946ff051146e55d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7127036ddcbdc643f264975ae2bbed9fe9be1d5dce6ccefaf03468e2e90d51e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7127036ddcbdc643f264975ae2bbed9fe9be1d5dce6ccefaf03468e2e90d51e1->enter($__internal_7127036ddcbdc643f264975ae2bbed9fe9be1d5dce6ccefaf03468e2e90d51e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7127036ddcbdc643f264975ae2bbed9fe9be1d5dce6ccefaf03468e2e90d51e1->leave($__internal_7127036ddcbdc643f264975ae2bbed9fe9be1d5dce6ccefaf03468e2e90d51e1_prof);

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
