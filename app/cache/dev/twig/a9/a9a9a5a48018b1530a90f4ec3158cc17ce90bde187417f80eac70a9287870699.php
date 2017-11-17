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
        $__internal_a67c67f04d9ceb5d5f2d24365086fd58edcf07e691927c553df7ea055c8b1182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67c67f04d9ceb5d5f2d24365086fd58edcf07e691927c553df7ea055c8b1182->enter($__internal_a67c67f04d9ceb5d5f2d24365086fd58edcf07e691927c553df7ea055c8b1182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_a67c67f04d9ceb5d5f2d24365086fd58edcf07e691927c553df7ea055c8b1182->leave($__internal_a67c67f04d9ceb5d5f2d24365086fd58edcf07e691927c553df7ea055c8b1182_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_993dab4d71db6fb8553dd05a98bcc733e2e39131ad5bfb685a7312d55e5368b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993dab4d71db6fb8553dd05a98bcc733e2e39131ad5bfb685a7312d55e5368b5->enter($__internal_993dab4d71db6fb8553dd05a98bcc733e2e39131ad5bfb685a7312d55e5368b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_993dab4d71db6fb8553dd05a98bcc733e2e39131ad5bfb685a7312d55e5368b5->leave($__internal_993dab4d71db6fb8553dd05a98bcc733e2e39131ad5bfb685a7312d55e5368b5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e911b0e7870656b8232135c54032b1fe6dbb7c74a1b52accd8cedff4b99b6666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e911b0e7870656b8232135c54032b1fe6dbb7c74a1b52accd8cedff4b99b6666->enter($__internal_e911b0e7870656b8232135c54032b1fe6dbb7c74a1b52accd8cedff4b99b6666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e911b0e7870656b8232135c54032b1fe6dbb7c74a1b52accd8cedff4b99b6666->leave($__internal_e911b0e7870656b8232135c54032b1fe6dbb7c74a1b52accd8cedff4b99b6666_prof);

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
