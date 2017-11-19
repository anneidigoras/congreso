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
        $__internal_34716d3dff52e9568f0bc3b9f9ddd4ed892547f31fd790c9988061537cc33309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34716d3dff52e9568f0bc3b9f9ddd4ed892547f31fd790c9988061537cc33309->enter($__internal_34716d3dff52e9568f0bc3b9f9ddd4ed892547f31fd790c9988061537cc33309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_34716d3dff52e9568f0bc3b9f9ddd4ed892547f31fd790c9988061537cc33309->leave($__internal_34716d3dff52e9568f0bc3b9f9ddd4ed892547f31fd790c9988061537cc33309_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb7b3a0f90ffc8e51a1d0a6ec8d80498d7a061ef4d31c1c856d40328a3e56780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7b3a0f90ffc8e51a1d0a6ec8d80498d7a061ef4d31c1c856d40328a3e56780->enter($__internal_bb7b3a0f90ffc8e51a1d0a6ec8d80498d7a061ef4d31c1c856d40328a3e56780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_bb7b3a0f90ffc8e51a1d0a6ec8d80498d7a061ef4d31c1c856d40328a3e56780->leave($__internal_bb7b3a0f90ffc8e51a1d0a6ec8d80498d7a061ef4d31c1c856d40328a3e56780_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_42057552e420ef976ff785be9767d49933cf9b72aa7bc4699cc76258f0351af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42057552e420ef976ff785be9767d49933cf9b72aa7bc4699cc76258f0351af9->enter($__internal_42057552e420ef976ff785be9767d49933cf9b72aa7bc4699cc76258f0351af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42057552e420ef976ff785be9767d49933cf9b72aa7bc4699cc76258f0351af9->leave($__internal_42057552e420ef976ff785be9767d49933cf9b72aa7bc4699cc76258f0351af9_prof);

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
