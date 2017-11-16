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
        $__internal_f83e5e5d370db404901f0ed49a2ea4ba1c8fb4d3dfa13b735c9f43b14386e6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83e5e5d370db404901f0ed49a2ea4ba1c8fb4d3dfa13b735c9f43b14386e6cb->enter($__internal_f83e5e5d370db404901f0ed49a2ea4ba1c8fb4d3dfa13b735c9f43b14386e6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_f83e5e5d370db404901f0ed49a2ea4ba1c8fb4d3dfa13b735c9f43b14386e6cb->leave($__internal_f83e5e5d370db404901f0ed49a2ea4ba1c8fb4d3dfa13b735c9f43b14386e6cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_248a4672c8c4fd7e23f8187df9167fa6aba0dc2c872107a9ba29e72760e0ca2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248a4672c8c4fd7e23f8187df9167fa6aba0dc2c872107a9ba29e72760e0ca2d->enter($__internal_248a4672c8c4fd7e23f8187df9167fa6aba0dc2c872107a9ba29e72760e0ca2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_248a4672c8c4fd7e23f8187df9167fa6aba0dc2c872107a9ba29e72760e0ca2d->leave($__internal_248a4672c8c4fd7e23f8187df9167fa6aba0dc2c872107a9ba29e72760e0ca2d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_96f4e5de82a3f7ece0f09897067868318f6ed207c3ed0a9c1efe9210104f67a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f4e5de82a3f7ece0f09897067868318f6ed207c3ed0a9c1efe9210104f67a2->enter($__internal_96f4e5de82a3f7ece0f09897067868318f6ed207c3ed0a9c1efe9210104f67a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96f4e5de82a3f7ece0f09897067868318f6ed207c3ed0a9c1efe9210104f67a2->leave($__internal_96f4e5de82a3f7ece0f09897067868318f6ed207c3ed0a9c1efe9210104f67a2_prof);

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
