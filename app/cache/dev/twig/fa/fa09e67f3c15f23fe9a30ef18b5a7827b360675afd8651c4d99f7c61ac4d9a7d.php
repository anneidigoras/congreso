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
        $__internal_2cf297b058b85c9f43facf74a5914003c14cd06bf879fbeb1e8ab3ff65d41916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf297b058b85c9f43facf74a5914003c14cd06bf879fbeb1e8ab3ff65d41916->enter($__internal_2cf297b058b85c9f43facf74a5914003c14cd06bf879fbeb1e8ab3ff65d41916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_2cf297b058b85c9f43facf74a5914003c14cd06bf879fbeb1e8ab3ff65d41916->leave($__internal_2cf297b058b85c9f43facf74a5914003c14cd06bf879fbeb1e8ab3ff65d41916_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63e58a6059ab2516ba8c72545ac1e854a9b180498bedccc664a29592ad046495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e58a6059ab2516ba8c72545ac1e854a9b180498bedccc664a29592ad046495->enter($__internal_63e58a6059ab2516ba8c72545ac1e854a9b180498bedccc664a29592ad046495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_63e58a6059ab2516ba8c72545ac1e854a9b180498bedccc664a29592ad046495->leave($__internal_63e58a6059ab2516ba8c72545ac1e854a9b180498bedccc664a29592ad046495_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_999243ba084953ba78a063bf9aceaa6aff4dfe0182e97d4114958c551f584bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999243ba084953ba78a063bf9aceaa6aff4dfe0182e97d4114958c551f584bba->enter($__internal_999243ba084953ba78a063bf9aceaa6aff4dfe0182e97d4114958c551f584bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_999243ba084953ba78a063bf9aceaa6aff4dfe0182e97d4114958c551f584bba->leave($__internal_999243ba084953ba78a063bf9aceaa6aff4dfe0182e97d4114958c551f584bba_prof);

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
