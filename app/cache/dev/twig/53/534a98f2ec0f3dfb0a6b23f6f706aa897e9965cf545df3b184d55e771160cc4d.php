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
        $__internal_75fd880fea615f7e2f3e3437d63bd2891f6b58887812dad0db81488e30a7d3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fd880fea615f7e2f3e3437d63bd2891f6b58887812dad0db81488e30a7d3cf->enter($__internal_75fd880fea615f7e2f3e3437d63bd2891f6b58887812dad0db81488e30a7d3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_75fd880fea615f7e2f3e3437d63bd2891f6b58887812dad0db81488e30a7d3cf->leave($__internal_75fd880fea615f7e2f3e3437d63bd2891f6b58887812dad0db81488e30a7d3cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22c97a134dbc736d752f71776c41cd251a14819126ef35c324e1af8b41acbaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c97a134dbc736d752f71776c41cd251a14819126ef35c324e1af8b41acbaa6->enter($__internal_22c97a134dbc736d752f71776c41cd251a14819126ef35c324e1af8b41acbaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_22c97a134dbc736d752f71776c41cd251a14819126ef35c324e1af8b41acbaa6->leave($__internal_22c97a134dbc736d752f71776c41cd251a14819126ef35c324e1af8b41acbaa6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b9a799fdd424137d0cd1f15d28eb8ccdbd76948ec40a838702651b40e7e1fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9a799fdd424137d0cd1f15d28eb8ccdbd76948ec40a838702651b40e7e1fff->enter($__internal_9b9a799fdd424137d0cd1f15d28eb8ccdbd76948ec40a838702651b40e7e1fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b9a799fdd424137d0cd1f15d28eb8ccdbd76948ec40a838702651b40e7e1fff->leave($__internal_9b9a799fdd424137d0cd1f15d28eb8ccdbd76948ec40a838702651b40e7e1fff_prof);

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
