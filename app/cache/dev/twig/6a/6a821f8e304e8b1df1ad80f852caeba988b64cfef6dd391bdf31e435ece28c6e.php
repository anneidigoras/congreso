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
        $__internal_bb58dae3c3ab32f57b3b6fcd3fb9e439015a1e10ee007d7a9e28bbd0e5a8eaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb58dae3c3ab32f57b3b6fcd3fb9e439015a1e10ee007d7a9e28bbd0e5a8eaa2->enter($__internal_bb58dae3c3ab32f57b3b6fcd3fb9e439015a1e10ee007d7a9e28bbd0e5a8eaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_bb58dae3c3ab32f57b3b6fcd3fb9e439015a1e10ee007d7a9e28bbd0e5a8eaa2->leave($__internal_bb58dae3c3ab32f57b3b6fcd3fb9e439015a1e10ee007d7a9e28bbd0e5a8eaa2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b5cd114375e3ed687ab3a2a1bbca6cd38b82ea99870edb6e495d65c6ab2adcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5cd114375e3ed687ab3a2a1bbca6cd38b82ea99870edb6e495d65c6ab2adcc->enter($__internal_8b5cd114375e3ed687ab3a2a1bbca6cd38b82ea99870edb6e495d65c6ab2adcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_8b5cd114375e3ed687ab3a2a1bbca6cd38b82ea99870edb6e495d65c6ab2adcc->leave($__internal_8b5cd114375e3ed687ab3a2a1bbca6cd38b82ea99870edb6e495d65c6ab2adcc_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a1956e9925f80e7c76914f7939151a336b0eb557847ea9af2663b120d0c851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a1956e9925f80e7c76914f7939151a336b0eb557847ea9af2663b120d0c851->enter($__internal_c4a1956e9925f80e7c76914f7939151a336b0eb557847ea9af2663b120d0c851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4a1956e9925f80e7c76914f7939151a336b0eb557847ea9af2663b120d0c851->leave($__internal_c4a1956e9925f80e7c76914f7939151a336b0eb557847ea9af2663b120d0c851_prof);

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
