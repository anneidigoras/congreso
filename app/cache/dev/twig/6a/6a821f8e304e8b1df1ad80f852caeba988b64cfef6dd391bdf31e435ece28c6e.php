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
        $__internal_66c3be0f4090c5bdc40b9f40210ec0b86d216de32852bf4742054c1688f705dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c3be0f4090c5bdc40b9f40210ec0b86d216de32852bf4742054c1688f705dd->enter($__internal_66c3be0f4090c5bdc40b9f40210ec0b86d216de32852bf4742054c1688f705dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_66c3be0f4090c5bdc40b9f40210ec0b86d216de32852bf4742054c1688f705dd->leave($__internal_66c3be0f4090c5bdc40b9f40210ec0b86d216de32852bf4742054c1688f705dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a36e208080e328090c47abc44ab7b6c806f0be538e49e39064a2df1ba819438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a36e208080e328090c47abc44ab7b6c806f0be538e49e39064a2df1ba819438->enter($__internal_0a36e208080e328090c47abc44ab7b6c806f0be538e49e39064a2df1ba819438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_0a36e208080e328090c47abc44ab7b6c806f0be538e49e39064a2df1ba819438->leave($__internal_0a36e208080e328090c47abc44ab7b6c806f0be538e49e39064a2df1ba819438_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_346c846b9ee31045f252b603719171acadd37a26c9d16b421af20cb39a7093d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346c846b9ee31045f252b603719171acadd37a26c9d16b421af20cb39a7093d6->enter($__internal_346c846b9ee31045f252b603719171acadd37a26c9d16b421af20cb39a7093d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_346c846b9ee31045f252b603719171acadd37a26c9d16b421af20cb39a7093d6->leave($__internal_346c846b9ee31045f252b603719171acadd37a26c9d16b421af20cb39a7093d6_prof);

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
