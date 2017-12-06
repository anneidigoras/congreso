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
        $__internal_ee9771d6c8266145d804c6afc1774e62c190a47c7280a4eaaa1cd76dd7e6eaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9771d6c8266145d804c6afc1774e62c190a47c7280a4eaaa1cd76dd7e6eaae->enter($__internal_ee9771d6c8266145d804c6afc1774e62c190a47c7280a4eaaa1cd76dd7e6eaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_ee9771d6c8266145d804c6afc1774e62c190a47c7280a4eaaa1cd76dd7e6eaae->leave($__internal_ee9771d6c8266145d804c6afc1774e62c190a47c7280a4eaaa1cd76dd7e6eaae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02c2b4b14145792bb9de6cf2251b27a2fda6f458feec7bb0fe2a4c5f61552f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c2b4b14145792bb9de6cf2251b27a2fda6f458feec7bb0fe2a4c5f61552f26->enter($__internal_02c2b4b14145792bb9de6cf2251b27a2fda6f458feec7bb0fe2a4c5f61552f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_02c2b4b14145792bb9de6cf2251b27a2fda6f458feec7bb0fe2a4c5f61552f26->leave($__internal_02c2b4b14145792bb9de6cf2251b27a2fda6f458feec7bb0fe2a4c5f61552f26_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_224098e793a64132432f7187abb2526210f0d70a474c9bfdf0e00ba96200595b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224098e793a64132432f7187abb2526210f0d70a474c9bfdf0e00ba96200595b->enter($__internal_224098e793a64132432f7187abb2526210f0d70a474c9bfdf0e00ba96200595b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_224098e793a64132432f7187abb2526210f0d70a474c9bfdf0e00ba96200595b->leave($__internal_224098e793a64132432f7187abb2526210f0d70a474c9bfdf0e00ba96200595b_prof);

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
