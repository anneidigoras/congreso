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
        $__internal_fcc753734e22ea379a68cbaca3f06ae21df4cc1f463aade26c1986e2a9436ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc753734e22ea379a68cbaca3f06ae21df4cc1f463aade26c1986e2a9436ccf->enter($__internal_fcc753734e22ea379a68cbaca3f06ae21df4cc1f463aade26c1986e2a9436ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_fcc753734e22ea379a68cbaca3f06ae21df4cc1f463aade26c1986e2a9436ccf->leave($__internal_fcc753734e22ea379a68cbaca3f06ae21df4cc1f463aade26c1986e2a9436ccf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7260b4c6e497604f747fcd9690b5d01ebcdefa73d1445180b87e5ec75028434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7260b4c6e497604f747fcd9690b5d01ebcdefa73d1445180b87e5ec75028434->enter($__internal_b7260b4c6e497604f747fcd9690b5d01ebcdefa73d1445180b87e5ec75028434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_b7260b4c6e497604f747fcd9690b5d01ebcdefa73d1445180b87e5ec75028434->leave($__internal_b7260b4c6e497604f747fcd9690b5d01ebcdefa73d1445180b87e5ec75028434_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ada2793f06bfc824d352e16899964b3587fcc129fd4df929a75248345ddcbf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ada2793f06bfc824d352e16899964b3587fcc129fd4df929a75248345ddcbf0->enter($__internal_4ada2793f06bfc824d352e16899964b3587fcc129fd4df929a75248345ddcbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ada2793f06bfc824d352e16899964b3587fcc129fd4df929a75248345ddcbf0->leave($__internal_4ada2793f06bfc824d352e16899964b3587fcc129fd4df929a75248345ddcbf0_prof);

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
