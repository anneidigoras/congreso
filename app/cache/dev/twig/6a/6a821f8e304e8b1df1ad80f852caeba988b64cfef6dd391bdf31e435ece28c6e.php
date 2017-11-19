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
        $__internal_d5a21349f8160861ac35bd5c356be676bbbe5a239079e49bda462ad9665df8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a21349f8160861ac35bd5c356be676bbbe5a239079e49bda462ad9665df8ab->enter($__internal_d5a21349f8160861ac35bd5c356be676bbbe5a239079e49bda462ad9665df8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_d5a21349f8160861ac35bd5c356be676bbbe5a239079e49bda462ad9665df8ab->leave($__internal_d5a21349f8160861ac35bd5c356be676bbbe5a239079e49bda462ad9665df8ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef74166fce9c4d9f2b4ae9afa99e7274020bb5f4d055d3fb85f09e2ba01f2c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef74166fce9c4d9f2b4ae9afa99e7274020bb5f4d055d3fb85f09e2ba01f2c9d->enter($__internal_ef74166fce9c4d9f2b4ae9afa99e7274020bb5f4d055d3fb85f09e2ba01f2c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_ef74166fce9c4d9f2b4ae9afa99e7274020bb5f4d055d3fb85f09e2ba01f2c9d->leave($__internal_ef74166fce9c4d9f2b4ae9afa99e7274020bb5f4d055d3fb85f09e2ba01f2c9d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2385934e2de2d767abff9d77bdb7ba3398410e7abb181d5250b63bb9a4faf80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2385934e2de2d767abff9d77bdb7ba3398410e7abb181d5250b63bb9a4faf80->enter($__internal_e2385934e2de2d767abff9d77bdb7ba3398410e7abb181d5250b63bb9a4faf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2385934e2de2d767abff9d77bdb7ba3398410e7abb181d5250b63bb9a4faf80->leave($__internal_e2385934e2de2d767abff9d77bdb7ba3398410e7abb181d5250b63bb9a4faf80_prof);

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
