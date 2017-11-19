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
        $__internal_f1f908db572bc5445e691c6d34b6fc900c200eb51ad63a19d26d2cf74ee3516a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f908db572bc5445e691c6d34b6fc900c200eb51ad63a19d26d2cf74ee3516a->enter($__internal_f1f908db572bc5445e691c6d34b6fc900c200eb51ad63a19d26d2cf74ee3516a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_f1f908db572bc5445e691c6d34b6fc900c200eb51ad63a19d26d2cf74ee3516a->leave($__internal_f1f908db572bc5445e691c6d34b6fc900c200eb51ad63a19d26d2cf74ee3516a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6757203a02c3da7f6759c5f6b87f635054d56f6bf4f97e40e81eb59eca1e2c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6757203a02c3da7f6759c5f6b87f635054d56f6bf4f97e40e81eb59eca1e2c70->enter($__internal_6757203a02c3da7f6759c5f6b87f635054d56f6bf4f97e40e81eb59eca1e2c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_6757203a02c3da7f6759c5f6b87f635054d56f6bf4f97e40e81eb59eca1e2c70->leave($__internal_6757203a02c3da7f6759c5f6b87f635054d56f6bf4f97e40e81eb59eca1e2c70_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f75075bcca7112572e360fb722a05ae0ac78c58638f66981d7c88e81aafdddb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75075bcca7112572e360fb722a05ae0ac78c58638f66981d7c88e81aafdddb7->enter($__internal_f75075bcca7112572e360fb722a05ae0ac78c58638f66981d7c88e81aafdddb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f75075bcca7112572e360fb722a05ae0ac78c58638f66981d7c88e81aafdddb7->leave($__internal_f75075bcca7112572e360fb722a05ae0ac78c58638f66981d7c88e81aafdddb7_prof);

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
