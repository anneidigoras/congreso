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
        $__internal_42d3b1ca96b9b5f8809eef20b7dcbc4e58b7c1d3cc807a212af28d4495d2a99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d3b1ca96b9b5f8809eef20b7dcbc4e58b7c1d3cc807a212af28d4495d2a99f->enter($__internal_42d3b1ca96b9b5f8809eef20b7dcbc4e58b7c1d3cc807a212af28d4495d2a99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_42d3b1ca96b9b5f8809eef20b7dcbc4e58b7c1d3cc807a212af28d4495d2a99f->leave($__internal_42d3b1ca96b9b5f8809eef20b7dcbc4e58b7c1d3cc807a212af28d4495d2a99f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a12132d26af9624f48788b717c73a2755de0a135e85f7796964fcf3faeea8b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12132d26af9624f48788b717c73a2755de0a135e85f7796964fcf3faeea8b41->enter($__internal_a12132d26af9624f48788b717c73a2755de0a135e85f7796964fcf3faeea8b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_a12132d26af9624f48788b717c73a2755de0a135e85f7796964fcf3faeea8b41->leave($__internal_a12132d26af9624f48788b717c73a2755de0a135e85f7796964fcf3faeea8b41_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4af0724db3bb14bb67452694b899a1bc240cb6b4213a0ee8eaba0fab83c1252d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af0724db3bb14bb67452694b899a1bc240cb6b4213a0ee8eaba0fab83c1252d->enter($__internal_4af0724db3bb14bb67452694b899a1bc240cb6b4213a0ee8eaba0fab83c1252d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4af0724db3bb14bb67452694b899a1bc240cb6b4213a0ee8eaba0fab83c1252d->leave($__internal_4af0724db3bb14bb67452694b899a1bc240cb6b4213a0ee8eaba0fab83c1252d_prof);

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
