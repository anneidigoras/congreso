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
        $__internal_0b78dad4277eff57084fd249ffc918d73d45c7b01e890cfa8ce354c64efaf4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b78dad4277eff57084fd249ffc918d73d45c7b01e890cfa8ce354c64efaf4c2->enter($__internal_0b78dad4277eff57084fd249ffc918d73d45c7b01e890cfa8ce354c64efaf4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_0b78dad4277eff57084fd249ffc918d73d45c7b01e890cfa8ce354c64efaf4c2->leave($__internal_0b78dad4277eff57084fd249ffc918d73d45c7b01e890cfa8ce354c64efaf4c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40d7c663dc3c7a15170a08ecc8da076607b94dc693a80c1b4c2c9a94d35402d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d7c663dc3c7a15170a08ecc8da076607b94dc693a80c1b4c2c9a94d35402d8->enter($__internal_40d7c663dc3c7a15170a08ecc8da076607b94dc693a80c1b4c2c9a94d35402d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_40d7c663dc3c7a15170a08ecc8da076607b94dc693a80c1b4c2c9a94d35402d8->leave($__internal_40d7c663dc3c7a15170a08ecc8da076607b94dc693a80c1b4c2c9a94d35402d8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a22cab155430c13ff2d4725f73372403e826530dd2972128e3ca951e98a7188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a22cab155430c13ff2d4725f73372403e826530dd2972128e3ca951e98a7188->enter($__internal_0a22cab155430c13ff2d4725f73372403e826530dd2972128e3ca951e98a7188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a22cab155430c13ff2d4725f73372403e826530dd2972128e3ca951e98a7188->leave($__internal_0a22cab155430c13ff2d4725f73372403e826530dd2972128e3ca951e98a7188_prof);

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
