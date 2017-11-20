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
        $__internal_3b554e4741c7d033b2e7d00e96e0ae31866c9e8ab0da3e738bfdb78a33312e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b554e4741c7d033b2e7d00e96e0ae31866c9e8ab0da3e738bfdb78a33312e10->enter($__internal_3b554e4741c7d033b2e7d00e96e0ae31866c9e8ab0da3e738bfdb78a33312e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_3b554e4741c7d033b2e7d00e96e0ae31866c9e8ab0da3e738bfdb78a33312e10->leave($__internal_3b554e4741c7d033b2e7d00e96e0ae31866c9e8ab0da3e738bfdb78a33312e10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2307ea20e2ae5c3253f8473fab7d74a242168dc0e06f33e53e2ea538662e6221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2307ea20e2ae5c3253f8473fab7d74a242168dc0e06f33e53e2ea538662e6221->enter($__internal_2307ea20e2ae5c3253f8473fab7d74a242168dc0e06f33e53e2ea538662e6221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_2307ea20e2ae5c3253f8473fab7d74a242168dc0e06f33e53e2ea538662e6221->leave($__internal_2307ea20e2ae5c3253f8473fab7d74a242168dc0e06f33e53e2ea538662e6221_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fb568e08318c515646ac58c368d9f707a329e4dd99b1f80e419ab54ebe53137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb568e08318c515646ac58c368d9f707a329e4dd99b1f80e419ab54ebe53137->enter($__internal_1fb568e08318c515646ac58c368d9f707a329e4dd99b1f80e419ab54ebe53137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1fb568e08318c515646ac58c368d9f707a329e4dd99b1f80e419ab54ebe53137->leave($__internal_1fb568e08318c515646ac58c368d9f707a329e4dd99b1f80e419ab54ebe53137_prof);

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
