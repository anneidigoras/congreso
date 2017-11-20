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
        $__internal_57bea4c46056cb8f3e9c9897980f43e117dd314945cc04d33abe15e4cc01ba78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bea4c46056cb8f3e9c9897980f43e117dd314945cc04d33abe15e4cc01ba78->enter($__internal_57bea4c46056cb8f3e9c9897980f43e117dd314945cc04d33abe15e4cc01ba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_57bea4c46056cb8f3e9c9897980f43e117dd314945cc04d33abe15e4cc01ba78->leave($__internal_57bea4c46056cb8f3e9c9897980f43e117dd314945cc04d33abe15e4cc01ba78_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdf27f790864e280cc3155e8470524c8823d1f642b13f07bde6f9239f4284eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf27f790864e280cc3155e8470524c8823d1f642b13f07bde6f9239f4284eb0->enter($__internal_cdf27f790864e280cc3155e8470524c8823d1f642b13f07bde6f9239f4284eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_cdf27f790864e280cc3155e8470524c8823d1f642b13f07bde6f9239f4284eb0->leave($__internal_cdf27f790864e280cc3155e8470524c8823d1f642b13f07bde6f9239f4284eb0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dcc5599fd32d52d94ec04a4de55eea305749f86a8066955eae897e093c0f2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcc5599fd32d52d94ec04a4de55eea305749f86a8066955eae897e093c0f2f3->enter($__internal_9dcc5599fd32d52d94ec04a4de55eea305749f86a8066955eae897e093c0f2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9dcc5599fd32d52d94ec04a4de55eea305749f86a8066955eae897e093c0f2f3->leave($__internal_9dcc5599fd32d52d94ec04a4de55eea305749f86a8066955eae897e093c0f2f3_prof);

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
