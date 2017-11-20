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
        $__internal_0a0c118142f10f897dd4d1e4fdc1eff311cc0be3147465f96e8f53cbd45eb6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0c118142f10f897dd4d1e4fdc1eff311cc0be3147465f96e8f53cbd45eb6a7->enter($__internal_0a0c118142f10f897dd4d1e4fdc1eff311cc0be3147465f96e8f53cbd45eb6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_0a0c118142f10f897dd4d1e4fdc1eff311cc0be3147465f96e8f53cbd45eb6a7->leave($__internal_0a0c118142f10f897dd4d1e4fdc1eff311cc0be3147465f96e8f53cbd45eb6a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcbef6740010a59142bb90dbdf66fe2d4715c585931fdf086aaf4827ce3936a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbef6740010a59142bb90dbdf66fe2d4715c585931fdf086aaf4827ce3936a2->enter($__internal_bcbef6740010a59142bb90dbdf66fe2d4715c585931fdf086aaf4827ce3936a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_bcbef6740010a59142bb90dbdf66fe2d4715c585931fdf086aaf4827ce3936a2->leave($__internal_bcbef6740010a59142bb90dbdf66fe2d4715c585931fdf086aaf4827ce3936a2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_09111dd39d1ca98eb32969242a559008bf889103e18eed0f440dbdbd93b9a414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09111dd39d1ca98eb32969242a559008bf889103e18eed0f440dbdbd93b9a414->enter($__internal_09111dd39d1ca98eb32969242a559008bf889103e18eed0f440dbdbd93b9a414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09111dd39d1ca98eb32969242a559008bf889103e18eed0f440dbdbd93b9a414->leave($__internal_09111dd39d1ca98eb32969242a559008bf889103e18eed0f440dbdbd93b9a414_prof);

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
