<?php

/* default/layout.html.twig */
class __TwigTemplate_d1c51e62866c61f75d85dcc95e341de3a1f7594b4dba98bb040fb629a91d497c extends Twig_Template
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
        $__internal_3ab5d7fe2be61c48fbce3ee62732e7c8a7d85c1d29b39bd559496bf5647e1f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab5d7fe2be61c48fbce3ee62732e7c8a7d85c1d29b39bd559496bf5647e1f36->enter($__internal_3ab5d7fe2be61c48fbce3ee62732e7c8a7d85c1d29b39bd559496bf5647e1f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_3ab5d7fe2be61c48fbce3ee62732e7c8a7d85c1d29b39bd559496bf5647e1f36->leave($__internal_3ab5d7fe2be61c48fbce3ee62732e7c8a7d85c1d29b39bd559496bf5647e1f36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8709ab73d8146e9ad53c13b28ae1274c651b3a7339d16da3dc1ac60d7bbe3425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8709ab73d8146e9ad53c13b28ae1274c651b3a7339d16da3dc1ac60d7bbe3425->enter($__internal_8709ab73d8146e9ad53c13b28ae1274c651b3a7339d16da3dc1ac60d7bbe3425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_8709ab73d8146e9ad53c13b28ae1274c651b3a7339d16da3dc1ac60d7bbe3425->leave($__internal_8709ab73d8146e9ad53c13b28ae1274c651b3a7339d16da3dc1ac60d7bbe3425_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a3447e4346b206b60ae41fe08f225bddbeb15ccef3ff72e8b8527968c1a349c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3447e4346b206b60ae41fe08f225bddbeb15ccef3ff72e8b8527968c1a349c->enter($__internal_2a3447e4346b206b60ae41fe08f225bddbeb15ccef3ff72e8b8527968c1a349c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a3447e4346b206b60ae41fe08f225bddbeb15ccef3ff72e8b8527968c1a349c->leave($__internal_2a3447e4346b206b60ae41fe08f225bddbeb15ccef3ff72e8b8527968c1a349c_prof);

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
