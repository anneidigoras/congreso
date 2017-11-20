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
        $__internal_d4e7f66da9be9932ec7638f19fb03731e06cebb24b588f1b57c75d4cb7c4fb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e7f66da9be9932ec7638f19fb03731e06cebb24b588f1b57c75d4cb7c4fb14->enter($__internal_d4e7f66da9be9932ec7638f19fb03731e06cebb24b588f1b57c75d4cb7c4fb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_d4e7f66da9be9932ec7638f19fb03731e06cebb24b588f1b57c75d4cb7c4fb14->leave($__internal_d4e7f66da9be9932ec7638f19fb03731e06cebb24b588f1b57c75d4cb7c4fb14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd8eb6bd5b5e78f13630253bfa5582a32640010addff7afad79ceaa9c1f5dda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8eb6bd5b5e78f13630253bfa5582a32640010addff7afad79ceaa9c1f5dda5->enter($__internal_dd8eb6bd5b5e78f13630253bfa5582a32640010addff7afad79ceaa9c1f5dda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_dd8eb6bd5b5e78f13630253bfa5582a32640010addff7afad79ceaa9c1f5dda5->leave($__internal_dd8eb6bd5b5e78f13630253bfa5582a32640010addff7afad79ceaa9c1f5dda5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b14aefa5b6a28afc5fe7b0d62176b082fafa85d15505b9a9e2c7b3adddc2c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b14aefa5b6a28afc5fe7b0d62176b082fafa85d15505b9a9e2c7b3adddc2c0c->enter($__internal_3b14aefa5b6a28afc5fe7b0d62176b082fafa85d15505b9a9e2c7b3adddc2c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b14aefa5b6a28afc5fe7b0d62176b082fafa85d15505b9a9e2c7b3adddc2c0c->leave($__internal_3b14aefa5b6a28afc5fe7b0d62176b082fafa85d15505b9a9e2c7b3adddc2c0c_prof);

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
