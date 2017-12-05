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
        $__internal_52311637153200186c5bdf2bf4fd920d29d208f3bdfa8f6d9d0d754e96a4b1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52311637153200186c5bdf2bf4fd920d29d208f3bdfa8f6d9d0d754e96a4b1ab->enter($__internal_52311637153200186c5bdf2bf4fd920d29d208f3bdfa8f6d9d0d754e96a4b1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_52311637153200186c5bdf2bf4fd920d29d208f3bdfa8f6d9d0d754e96a4b1ab->leave($__internal_52311637153200186c5bdf2bf4fd920d29d208f3bdfa8f6d9d0d754e96a4b1ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_740730eebbef335abfa6eab64f3702e5a32b61e9aca429362e6d98bed9f91142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740730eebbef335abfa6eab64f3702e5a32b61e9aca429362e6d98bed9f91142->enter($__internal_740730eebbef335abfa6eab64f3702e5a32b61e9aca429362e6d98bed9f91142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_740730eebbef335abfa6eab64f3702e5a32b61e9aca429362e6d98bed9f91142->leave($__internal_740730eebbef335abfa6eab64f3702e5a32b61e9aca429362e6d98bed9f91142_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e49834d60311175c9310a421a8dcfaf5812b242b2268df7f1c8fe6d0de56a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e49834d60311175c9310a421a8dcfaf5812b242b2268df7f1c8fe6d0de56a51->enter($__internal_5e49834d60311175c9310a421a8dcfaf5812b242b2268df7f1c8fe6d0de56a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e49834d60311175c9310a421a8dcfaf5812b242b2268df7f1c8fe6d0de56a51->leave($__internal_5e49834d60311175c9310a421a8dcfaf5812b242b2268df7f1c8fe6d0de56a51_prof);

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
