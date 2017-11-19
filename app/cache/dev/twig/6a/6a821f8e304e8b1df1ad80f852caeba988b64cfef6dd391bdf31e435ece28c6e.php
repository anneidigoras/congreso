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
        $__internal_4c7f611903b7368583d2d869d8f412a2a12e36767dd74fe781dfe947188c4989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7f611903b7368583d2d869d8f412a2a12e36767dd74fe781dfe947188c4989->enter($__internal_4c7f611903b7368583d2d869d8f412a2a12e36767dd74fe781dfe947188c4989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_4c7f611903b7368583d2d869d8f412a2a12e36767dd74fe781dfe947188c4989->leave($__internal_4c7f611903b7368583d2d869d8f412a2a12e36767dd74fe781dfe947188c4989_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a5a6d95c1a8be06f3c92af1b2657fdaf93e5333d60df6fdd448e90402c24f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5a6d95c1a8be06f3c92af1b2657fdaf93e5333d60df6fdd448e90402c24f4b->enter($__internal_8a5a6d95c1a8be06f3c92af1b2657fdaf93e5333d60df6fdd448e90402c24f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_8a5a6d95c1a8be06f3c92af1b2657fdaf93e5333d60df6fdd448e90402c24f4b->leave($__internal_8a5a6d95c1a8be06f3c92af1b2657fdaf93e5333d60df6fdd448e90402c24f4b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebda3fe32b2ce960fb09eb52c3d268b45dc389dab9e8c9080e87a427fb3991e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebda3fe32b2ce960fb09eb52c3d268b45dc389dab9e8c9080e87a427fb3991e5->enter($__internal_ebda3fe32b2ce960fb09eb52c3d268b45dc389dab9e8c9080e87a427fb3991e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ebda3fe32b2ce960fb09eb52c3d268b45dc389dab9e8c9080e87a427fb3991e5->leave($__internal_ebda3fe32b2ce960fb09eb52c3d268b45dc389dab9e8c9080e87a427fb3991e5_prof);

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
