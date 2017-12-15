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
        $__internal_88d73bb0497a18065d834e608537ed820d873e73b144dc16a7d9db9da3adeaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d73bb0497a18065d834e608537ed820d873e73b144dc16a7d9db9da3adeaa0->enter($__internal_88d73bb0497a18065d834e608537ed820d873e73b144dc16a7d9db9da3adeaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_88d73bb0497a18065d834e608537ed820d873e73b144dc16a7d9db9da3adeaa0->leave($__internal_88d73bb0497a18065d834e608537ed820d873e73b144dc16a7d9db9da3adeaa0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4f22f936cd6ca20d1b1a624c8228d3f9c794aea374715ac9cbcf67b133716b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f22f936cd6ca20d1b1a624c8228d3f9c794aea374715ac9cbcf67b133716b9->enter($__internal_a4f22f936cd6ca20d1b1a624c8228d3f9c794aea374715ac9cbcf67b133716b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_a4f22f936cd6ca20d1b1a624c8228d3f9c794aea374715ac9cbcf67b133716b9->leave($__internal_a4f22f936cd6ca20d1b1a624c8228d3f9c794aea374715ac9cbcf67b133716b9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_62e929865a14fae7b06071e752a8d67671da663400069c4e3424316e68e0abbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e929865a14fae7b06071e752a8d67671da663400069c4e3424316e68e0abbd->enter($__internal_62e929865a14fae7b06071e752a8d67671da663400069c4e3424316e68e0abbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62e929865a14fae7b06071e752a8d67671da663400069c4e3424316e68e0abbd->leave($__internal_62e929865a14fae7b06071e752a8d67671da663400069c4e3424316e68e0abbd_prof);

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
