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
        $__internal_8ece42bb5ad5e714427797ca2b4e783df6748a8d678a1b23a4ae48c783dcba4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ece42bb5ad5e714427797ca2b4e783df6748a8d678a1b23a4ae48c783dcba4a->enter($__internal_8ece42bb5ad5e714427797ca2b4e783df6748a8d678a1b23a4ae48c783dcba4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_8ece42bb5ad5e714427797ca2b4e783df6748a8d678a1b23a4ae48c783dcba4a->leave($__internal_8ece42bb5ad5e714427797ca2b4e783df6748a8d678a1b23a4ae48c783dcba4a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b56caf3b1295bf0228c3040cd144f712913ca40ea43cca8f5def28d8285cfd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56caf3b1295bf0228c3040cd144f712913ca40ea43cca8f5def28d8285cfd06->enter($__internal_b56caf3b1295bf0228c3040cd144f712913ca40ea43cca8f5def28d8285cfd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_b56caf3b1295bf0228c3040cd144f712913ca40ea43cca8f5def28d8285cfd06->leave($__internal_b56caf3b1295bf0228c3040cd144f712913ca40ea43cca8f5def28d8285cfd06_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_85d817d1f1be10ade35292b3a4007a22c94789ebbe4e4b5d7e6e52d2b3949aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d817d1f1be10ade35292b3a4007a22c94789ebbe4e4b5d7e6e52d2b3949aa6->enter($__internal_85d817d1f1be10ade35292b3a4007a22c94789ebbe4e4b5d7e6e52d2b3949aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85d817d1f1be10ade35292b3a4007a22c94789ebbe4e4b5d7e6e52d2b3949aa6->leave($__internal_85d817d1f1be10ade35292b3a4007a22c94789ebbe4e4b5d7e6e52d2b3949aa6_prof);

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
