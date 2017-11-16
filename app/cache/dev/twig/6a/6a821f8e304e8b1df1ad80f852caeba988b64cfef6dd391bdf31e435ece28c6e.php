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
        $__internal_103243f866a4241199442c1c17f325d16d2ed9adef3c04e2ab9e794c70726cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103243f866a4241199442c1c17f325d16d2ed9adef3c04e2ab9e794c70726cf7->enter($__internal_103243f866a4241199442c1c17f325d16d2ed9adef3c04e2ab9e794c70726cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_103243f866a4241199442c1c17f325d16d2ed9adef3c04e2ab9e794c70726cf7->leave($__internal_103243f866a4241199442c1c17f325d16d2ed9adef3c04e2ab9e794c70726cf7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96c869c18ae5eecd4c9efe20dd92775c667e24b0cdc6f6eb7a77ca60f1c9b606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c869c18ae5eecd4c9efe20dd92775c667e24b0cdc6f6eb7a77ca60f1c9b606->enter($__internal_96c869c18ae5eecd4c9efe20dd92775c667e24b0cdc6f6eb7a77ca60f1c9b606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_96c869c18ae5eecd4c9efe20dd92775c667e24b0cdc6f6eb7a77ca60f1c9b606->leave($__internal_96c869c18ae5eecd4c9efe20dd92775c667e24b0cdc6f6eb7a77ca60f1c9b606_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_04c7d23f1cff881c69403a9d56d952fc4ff96510dcb6d7ab8c60f850a7d2a11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c7d23f1cff881c69403a9d56d952fc4ff96510dcb6d7ab8c60f850a7d2a11b->enter($__internal_04c7d23f1cff881c69403a9d56d952fc4ff96510dcb6d7ab8c60f850a7d2a11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04c7d23f1cff881c69403a9d56d952fc4ff96510dcb6d7ab8c60f850a7d2a11b->leave($__internal_04c7d23f1cff881c69403a9d56d952fc4ff96510dcb6d7ab8c60f850a7d2a11b_prof);

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
