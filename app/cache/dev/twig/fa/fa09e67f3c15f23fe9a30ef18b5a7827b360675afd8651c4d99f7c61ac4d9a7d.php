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
        $__internal_d9d3bc8e969710f0ab072ce61b6f6e55fba5d55319cbab82792af6da02a9575a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d3bc8e969710f0ab072ce61b6f6e55fba5d55319cbab82792af6da02a9575a->enter($__internal_d9d3bc8e969710f0ab072ce61b6f6e55fba5d55319cbab82792af6da02a9575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_d9d3bc8e969710f0ab072ce61b6f6e55fba5d55319cbab82792af6da02a9575a->leave($__internal_d9d3bc8e969710f0ab072ce61b6f6e55fba5d55319cbab82792af6da02a9575a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_528d3a7717fa5c88d6bd887024a5378d64a03588ed19ad177e34f559508798b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528d3a7717fa5c88d6bd887024a5378d64a03588ed19ad177e34f559508798b3->enter($__internal_528d3a7717fa5c88d6bd887024a5378d64a03588ed19ad177e34f559508798b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_528d3a7717fa5c88d6bd887024a5378d64a03588ed19ad177e34f559508798b3->leave($__internal_528d3a7717fa5c88d6bd887024a5378d64a03588ed19ad177e34f559508798b3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_195d38326afd1471a1d10fe3301377b2f338ef7a619e6be6e08c905f177660aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195d38326afd1471a1d10fe3301377b2f338ef7a619e6be6e08c905f177660aa->enter($__internal_195d38326afd1471a1d10fe3301377b2f338ef7a619e6be6e08c905f177660aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_195d38326afd1471a1d10fe3301377b2f338ef7a619e6be6e08c905f177660aa->leave($__internal_195d38326afd1471a1d10fe3301377b2f338ef7a619e6be6e08c905f177660aa_prof);

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
