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
        $__internal_c5b1e579eee839faa25e479a3a2a42aa509f95ab20df9a4c279981f96b731592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b1e579eee839faa25e479a3a2a42aa509f95ab20df9a4c279981f96b731592->enter($__internal_c5b1e579eee839faa25e479a3a2a42aa509f95ab20df9a4c279981f96b731592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_c5b1e579eee839faa25e479a3a2a42aa509f95ab20df9a4c279981f96b731592->leave($__internal_c5b1e579eee839faa25e479a3a2a42aa509f95ab20df9a4c279981f96b731592_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47e26200f628c7c3b2d06f1baf0c78901aa8dba141cea10c2a1c57a8556c1f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e26200f628c7c3b2d06f1baf0c78901aa8dba141cea10c2a1c57a8556c1f16->enter($__internal_47e26200f628c7c3b2d06f1baf0c78901aa8dba141cea10c2a1c57a8556c1f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_47e26200f628c7c3b2d06f1baf0c78901aa8dba141cea10c2a1c57a8556c1f16->leave($__internal_47e26200f628c7c3b2d06f1baf0c78901aa8dba141cea10c2a1c57a8556c1f16_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b623cb857ed7ac4fac0dc51e4fae11a81a3d7ec86a07a840cf001cb7a53d114a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b623cb857ed7ac4fac0dc51e4fae11a81a3d7ec86a07a840cf001cb7a53d114a->enter($__internal_b623cb857ed7ac4fac0dc51e4fae11a81a3d7ec86a07a840cf001cb7a53d114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b623cb857ed7ac4fac0dc51e4fae11a81a3d7ec86a07a840cf001cb7a53d114a->leave($__internal_b623cb857ed7ac4fac0dc51e4fae11a81a3d7ec86a07a840cf001cb7a53d114a_prof);

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
