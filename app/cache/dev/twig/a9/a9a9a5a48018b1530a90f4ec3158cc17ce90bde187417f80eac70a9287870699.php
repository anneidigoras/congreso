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
        $__internal_cc8ed42a16bc52dcfb3426798b25b1db85217a46906936c0fcf582b466abdf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8ed42a16bc52dcfb3426798b25b1db85217a46906936c0fcf582b466abdf81->enter($__internal_cc8ed42a16bc52dcfb3426798b25b1db85217a46906936c0fcf582b466abdf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_cc8ed42a16bc52dcfb3426798b25b1db85217a46906936c0fcf582b466abdf81->leave($__internal_cc8ed42a16bc52dcfb3426798b25b1db85217a46906936c0fcf582b466abdf81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_818463969957f814f949ed3924c03773581246d7544ae4c5d3ad6f154c0070e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818463969957f814f949ed3924c03773581246d7544ae4c5d3ad6f154c0070e3->enter($__internal_818463969957f814f949ed3924c03773581246d7544ae4c5d3ad6f154c0070e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_818463969957f814f949ed3924c03773581246d7544ae4c5d3ad6f154c0070e3->leave($__internal_818463969957f814f949ed3924c03773581246d7544ae4c5d3ad6f154c0070e3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_132b78d78d2c0a4f6204efcbfac1435e8039b248ed61c2b77bbc35554a6c9040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132b78d78d2c0a4f6204efcbfac1435e8039b248ed61c2b77bbc35554a6c9040->enter($__internal_132b78d78d2c0a4f6204efcbfac1435e8039b248ed61c2b77bbc35554a6c9040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_132b78d78d2c0a4f6204efcbfac1435e8039b248ed61c2b77bbc35554a6c9040->leave($__internal_132b78d78d2c0a4f6204efcbfac1435e8039b248ed61c2b77bbc35554a6c9040_prof);

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
