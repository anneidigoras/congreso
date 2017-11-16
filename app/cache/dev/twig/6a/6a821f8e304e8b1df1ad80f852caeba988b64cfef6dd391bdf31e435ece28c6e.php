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
        $__internal_a4b2e1f5c3f12fcb3264ccbdd7c8b18633dc35aafc4d2dc4417695ba95c60b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b2e1f5c3f12fcb3264ccbdd7c8b18633dc35aafc4d2dc4417695ba95c60b0a->enter($__internal_a4b2e1f5c3f12fcb3264ccbdd7c8b18633dc35aafc4d2dc4417695ba95c60b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_a4b2e1f5c3f12fcb3264ccbdd7c8b18633dc35aafc4d2dc4417695ba95c60b0a->leave($__internal_a4b2e1f5c3f12fcb3264ccbdd7c8b18633dc35aafc4d2dc4417695ba95c60b0a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e04960d36eacac39b5fc2c5729adde7f7086ba6c4a8db15dc2ac36fb384bd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e04960d36eacac39b5fc2c5729adde7f7086ba6c4a8db15dc2ac36fb384bd69->enter($__internal_5e04960d36eacac39b5fc2c5729adde7f7086ba6c4a8db15dc2ac36fb384bd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_5e04960d36eacac39b5fc2c5729adde7f7086ba6c4a8db15dc2ac36fb384bd69->leave($__internal_5e04960d36eacac39b5fc2c5729adde7f7086ba6c4a8db15dc2ac36fb384bd69_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_eef8b1fda28d4a44cd078a4242727578906b1e695b0cb350f5a9a280aa036672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef8b1fda28d4a44cd078a4242727578906b1e695b0cb350f5a9a280aa036672->enter($__internal_eef8b1fda28d4a44cd078a4242727578906b1e695b0cb350f5a9a280aa036672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eef8b1fda28d4a44cd078a4242727578906b1e695b0cb350f5a9a280aa036672->leave($__internal_eef8b1fda28d4a44cd078a4242727578906b1e695b0cb350f5a9a280aa036672_prof);

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
