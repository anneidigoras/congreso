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
        $__internal_0e6c55de6ee45cae235f4d2a9ec0a1c6e9cace2645480289e9c2c59de3f836a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6c55de6ee45cae235f4d2a9ec0a1c6e9cace2645480289e9c2c59de3f836a2->enter($__internal_0e6c55de6ee45cae235f4d2a9ec0a1c6e9cace2645480289e9c2c59de3f836a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_0e6c55de6ee45cae235f4d2a9ec0a1c6e9cace2645480289e9c2c59de3f836a2->leave($__internal_0e6c55de6ee45cae235f4d2a9ec0a1c6e9cace2645480289e9c2c59de3f836a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf19a0066af77b5e640f1ae13eecede60f0b857492cf74aa9fd87d9c5c8ef4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf19a0066af77b5e640f1ae13eecede60f0b857492cf74aa9fd87d9c5c8ef4ef->enter($__internal_cf19a0066af77b5e640f1ae13eecede60f0b857492cf74aa9fd87d9c5c8ef4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_cf19a0066af77b5e640f1ae13eecede60f0b857492cf74aa9fd87d9c5c8ef4ef->leave($__internal_cf19a0066af77b5e640f1ae13eecede60f0b857492cf74aa9fd87d9c5c8ef4ef_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bea107a4f2239acd4ed0afc49c43630727d8adb957bd9c2cdc7431cffa91cd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea107a4f2239acd4ed0afc49c43630727d8adb957bd9c2cdc7431cffa91cd43->enter($__internal_bea107a4f2239acd4ed0afc49c43630727d8adb957bd9c2cdc7431cffa91cd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bea107a4f2239acd4ed0afc49c43630727d8adb957bd9c2cdc7431cffa91cd43->leave($__internal_bea107a4f2239acd4ed0afc49c43630727d8adb957bd9c2cdc7431cffa91cd43_prof);

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
