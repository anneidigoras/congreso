<?php

/* ::base.html.twig */
class __TwigTemplate_3c7154162f5f5dc0d920db7fdfe949f309b9f3fd132ccc85d99177bdcdfadce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc94bfafbe1c875f93a4f73e020cfdecdcd19b8910bba082ae08e62fbfdbd340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc94bfafbe1c875f93a4f73e020cfdecdcd19b8910bba082ae08e62fbfdbd340->enter($__internal_dc94bfafbe1c875f93a4f73e020cfdecdcd19b8910bba082ae08e62fbfdbd340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dc94bfafbe1c875f93a4f73e020cfdecdcd19b8910bba082ae08e62fbfdbd340->leave($__internal_dc94bfafbe1c875f93a4f73e020cfdecdcd19b8910bba082ae08e62fbfdbd340_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9cb237c3d323995f9e79299155d8cbf92d64e0de8e6d787fee760822e274587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cb237c3d323995f9e79299155d8cbf92d64e0de8e6d787fee760822e274587->enter($__internal_a9cb237c3d323995f9e79299155d8cbf92d64e0de8e6d787fee760822e274587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a9cb237c3d323995f9e79299155d8cbf92d64e0de8e6d787fee760822e274587->leave($__internal_a9cb237c3d323995f9e79299155d8cbf92d64e0de8e6d787fee760822e274587_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1132cde95cf254e0f8641f3c750034d4bb908da2a757f7a95bb7aa330cc63bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1132cde95cf254e0f8641f3c750034d4bb908da2a757f7a95bb7aa330cc63bfe->enter($__internal_1132cde95cf254e0f8641f3c750034d4bb908da2a757f7a95bb7aa330cc63bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1132cde95cf254e0f8641f3c750034d4bb908da2a757f7a95bb7aa330cc63bfe->leave($__internal_1132cde95cf254e0f8641f3c750034d4bb908da2a757f7a95bb7aa330cc63bfe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_357da585ed52f64ade99cbb89bb7e9b405f4884667bc43ad0b768e78dc287b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357da585ed52f64ade99cbb89bb7e9b405f4884667bc43ad0b768e78dc287b4c->enter($__internal_357da585ed52f64ade99cbb89bb7e9b405f4884667bc43ad0b768e78dc287b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_357da585ed52f64ade99cbb89bb7e9b405f4884667bc43ad0b768e78dc287b4c->leave($__internal_357da585ed52f64ade99cbb89bb7e9b405f4884667bc43ad0b768e78dc287b4c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5d9121a753414ec4ea90e6e25cc91bb7df7fb7883f992badb238dcff5260497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d9121a753414ec4ea90e6e25cc91bb7df7fb7883f992badb238dcff5260497->enter($__internal_b5d9121a753414ec4ea90e6e25cc91bb7df7fb7883f992badb238dcff5260497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b5d9121a753414ec4ea90e6e25cc91bb7df7fb7883f992badb238dcff5260497->leave($__internal_b5d9121a753414ec4ea90e6e25cc91bb7df7fb7883f992badb238dcff5260497_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
