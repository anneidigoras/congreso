<?php

/* :default:layout.html.twig */
class __TwigTemplate_2ce468a970c60ac4087e72a9447fa5bc9792429fbbe194dde39b5c0da8477368 extends Twig_Template
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
        $__internal_f75b5c12af911332e7a3e3249a9cd9b20ca9b7b87067d65b42370cd02488ea0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75b5c12af911332e7a3e3249a9cd9b20ca9b7b87067d65b42370cd02488ea0e->enter($__internal_f75b5c12af911332e7a3e3249a9cd9b20ca9b7b87067d65b42370cd02488ea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_f75b5c12af911332e7a3e3249a9cd9b20ca9b7b87067d65b42370cd02488ea0e->leave($__internal_f75b5c12af911332e7a3e3249a9cd9b20ca9b7b87067d65b42370cd02488ea0e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_18184e611ee69b50d85c099b21db481307c0a01e71f6620a04082393a3b23bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18184e611ee69b50d85c099b21db481307c0a01e71f6620a04082393a3b23bf0->enter($__internal_18184e611ee69b50d85c099b21db481307c0a01e71f6620a04082393a3b23bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_18184e611ee69b50d85c099b21db481307c0a01e71f6620a04082393a3b23bf0->leave($__internal_18184e611ee69b50d85c099b21db481307c0a01e71f6620a04082393a3b23bf0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_87c802aa8c7e1c73d313efdd60101cc5bf492a6e056402c845a6c2460f7e0d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c802aa8c7e1c73d313efdd60101cc5bf492a6e056402c845a6c2460f7e0d1b->enter($__internal_87c802aa8c7e1c73d313efdd60101cc5bf492a6e056402c845a6c2460f7e0d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87c802aa8c7e1c73d313efdd60101cc5bf492a6e056402c845a6c2460f7e0d1b->leave($__internal_87c802aa8c7e1c73d313efdd60101cc5bf492a6e056402c845a6c2460f7e0d1b_prof);

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
