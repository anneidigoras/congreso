<?php

/* :default:layout.html.twig */
class __TwigTemplate_b68422589f8a02d627620d8c8951c1d77bd376aed4d8872967ef9999e330393a extends Twig_Template
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
        $__internal_889fdded862d21c3cfed5bdc5d4030882a0f2eb98ab2142e678a3ff88fb0f726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889fdded862d21c3cfed5bdc5d4030882a0f2eb98ab2142e678a3ff88fb0f726->enter($__internal_889fdded862d21c3cfed5bdc5d4030882a0f2eb98ab2142e678a3ff88fb0f726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_889fdded862d21c3cfed5bdc5d4030882a0f2eb98ab2142e678a3ff88fb0f726->leave($__internal_889fdded862d21c3cfed5bdc5d4030882a0f2eb98ab2142e678a3ff88fb0f726_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6500eaccdf40bcb426cfbe6300ee4ca526b1ea869a71264622bb8dbb5012e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6500eaccdf40bcb426cfbe6300ee4ca526b1ea869a71264622bb8dbb5012e1c->enter($__internal_a6500eaccdf40bcb426cfbe6300ee4ca526b1ea869a71264622bb8dbb5012e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_a6500eaccdf40bcb426cfbe6300ee4ca526b1ea869a71264622bb8dbb5012e1c->leave($__internal_a6500eaccdf40bcb426cfbe6300ee4ca526b1ea869a71264622bb8dbb5012e1c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_46e241180e3cc42c7430f27c95f409977ef60e8aa2ee1e80b464771c2e31f0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e241180e3cc42c7430f27c95f409977ef60e8aa2ee1e80b464771c2e31f0ba->enter($__internal_46e241180e3cc42c7430f27c95f409977ef60e8aa2ee1e80b464771c2e31f0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46e241180e3cc42c7430f27c95f409977ef60e8aa2ee1e80b464771c2e31f0ba->leave($__internal_46e241180e3cc42c7430f27c95f409977ef60e8aa2ee1e80b464771c2e31f0ba_prof);

    }

    public function getTemplateName()
    {
        return ":default:layout.html.twig";
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
", ":default:layout.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/default/layout.html.twig");
    }
}
