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
        $__internal_1eff46c8446cc2bc06e3d33418cb6dea0d9ea7d0a0d8717ffc2f8bf2893a67b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eff46c8446cc2bc06e3d33418cb6dea0d9ea7d0a0d8717ffc2f8bf2893a67b6->enter($__internal_1eff46c8446cc2bc06e3d33418cb6dea0d9ea7d0a0d8717ffc2f8bf2893a67b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_1eff46c8446cc2bc06e3d33418cb6dea0d9ea7d0a0d8717ffc2f8bf2893a67b6->leave($__internal_1eff46c8446cc2bc06e3d33418cb6dea0d9ea7d0a0d8717ffc2f8bf2893a67b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5e4c96e3c67dcc64dc97e4e32df4971e36aceac791d66aa087aa1e7d929d6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e4c96e3c67dcc64dc97e4e32df4971e36aceac791d66aa087aa1e7d929d6a3->enter($__internal_c5e4c96e3c67dcc64dc97e4e32df4971e36aceac791d66aa087aa1e7d929d6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_c5e4c96e3c67dcc64dc97e4e32df4971e36aceac791d66aa087aa1e7d929d6a3->leave($__internal_c5e4c96e3c67dcc64dc97e4e32df4971e36aceac791d66aa087aa1e7d929d6a3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb339c69d93449abce162d51562d432fe25c9d76bf30779d681e5aac761148d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb339c69d93449abce162d51562d432fe25c9d76bf30779d681e5aac761148d->enter($__internal_7bb339c69d93449abce162d51562d432fe25c9d76bf30779d681e5aac761148d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7bb339c69d93449abce162d51562d432fe25c9d76bf30779d681e5aac761148d->leave($__internal_7bb339c69d93449abce162d51562d432fe25c9d76bf30779d681e5aac761148d_prof);

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
