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
        $__internal_738d42d7799508cfc09f20d6d943ac8c061d5c7fff9fb9cfe856c42c8fbd9372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738d42d7799508cfc09f20d6d943ac8c061d5c7fff9fb9cfe856c42c8fbd9372->enter($__internal_738d42d7799508cfc09f20d6d943ac8c061d5c7fff9fb9cfe856c42c8fbd9372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_738d42d7799508cfc09f20d6d943ac8c061d5c7fff9fb9cfe856c42c8fbd9372->leave($__internal_738d42d7799508cfc09f20d6d943ac8c061d5c7fff9fb9cfe856c42c8fbd9372_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be7167974b660558068d6d946457c99a75cbfdaa936b5615970bec1e81d11ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7167974b660558068d6d946457c99a75cbfdaa936b5615970bec1e81d11ac0->enter($__internal_be7167974b660558068d6d946457c99a75cbfdaa936b5615970bec1e81d11ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_be7167974b660558068d6d946457c99a75cbfdaa936b5615970bec1e81d11ac0->leave($__internal_be7167974b660558068d6d946457c99a75cbfdaa936b5615970bec1e81d11ac0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f84a716008a9d6c39e2e2f4846f9d2afc30ec4c5cf900e7bb8a94c8a0266d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f84a716008a9d6c39e2e2f4846f9d2afc30ec4c5cf900e7bb8a94c8a0266d81->enter($__internal_4f84a716008a9d6c39e2e2f4846f9d2afc30ec4c5cf900e7bb8a94c8a0266d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f84a716008a9d6c39e2e2f4846f9d2afc30ec4c5cf900e7bb8a94c8a0266d81->leave($__internal_4f84a716008a9d6c39e2e2f4846f9d2afc30ec4c5cf900e7bb8a94c8a0266d81_prof);

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
