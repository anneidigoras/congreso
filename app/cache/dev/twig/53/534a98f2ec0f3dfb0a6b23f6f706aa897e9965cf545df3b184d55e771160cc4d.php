<?php

/* default/layout.html.twig */
class __TwigTemplate_d1c51e62866c61f75d85dcc95e341de3a1f7594b4dba98bb040fb629a91d497c extends Twig_Template
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
        $__internal_98e11bf6c6e7a8298fb03836830918eb7c89c598b87835356f89651964de970e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e11bf6c6e7a8298fb03836830918eb7c89c598b87835356f89651964de970e->enter($__internal_98e11bf6c6e7a8298fb03836830918eb7c89c598b87835356f89651964de970e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_98e11bf6c6e7a8298fb03836830918eb7c89c598b87835356f89651964de970e->leave($__internal_98e11bf6c6e7a8298fb03836830918eb7c89c598b87835356f89651964de970e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f7611eda1e6f4231f9746c83affbc0b393726a12dbc064e09a912b2b01c7b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7611eda1e6f4231f9746c83affbc0b393726a12dbc064e09a912b2b01c7b95->enter($__internal_5f7611eda1e6f4231f9746c83affbc0b393726a12dbc064e09a912b2b01c7b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_5f7611eda1e6f4231f9746c83affbc0b393726a12dbc064e09a912b2b01c7b95->leave($__internal_5f7611eda1e6f4231f9746c83affbc0b393726a12dbc064e09a912b2b01c7b95_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_58118c3e8bf8b7344aa6c2cff58a99de25bf0bf1e05272a879f5cfc4313723e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58118c3e8bf8b7344aa6c2cff58a99de25bf0bf1e05272a879f5cfc4313723e7->enter($__internal_58118c3e8bf8b7344aa6c2cff58a99de25bf0bf1e05272a879f5cfc4313723e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58118c3e8bf8b7344aa6c2cff58a99de25bf0bf1e05272a879f5cfc4313723e7->leave($__internal_58118c3e8bf8b7344aa6c2cff58a99de25bf0bf1e05272a879f5cfc4313723e7_prof);

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
