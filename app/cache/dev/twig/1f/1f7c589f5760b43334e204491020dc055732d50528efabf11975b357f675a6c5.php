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
        $__internal_33bbb409916dfc1461bd2f5328404a1a3949860274b827817b3c18472b00abd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bbb409916dfc1461bd2f5328404a1a3949860274b827817b3c18472b00abd1->enter($__internal_33bbb409916dfc1461bd2f5328404a1a3949860274b827817b3c18472b00abd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_33bbb409916dfc1461bd2f5328404a1a3949860274b827817b3c18472b00abd1->leave($__internal_33bbb409916dfc1461bd2f5328404a1a3949860274b827817b3c18472b00abd1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1eb83f7d714450421d13e7b8a7c90d1adab4145109cbc89f168196e7c5de9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eb83f7d714450421d13e7b8a7c90d1adab4145109cbc89f168196e7c5de9a1->enter($__internal_f1eb83f7d714450421d13e7b8a7c90d1adab4145109cbc89f168196e7c5de9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1eb83f7d714450421d13e7b8a7c90d1adab4145109cbc89f168196e7c5de9a1->leave($__internal_f1eb83f7d714450421d13e7b8a7c90d1adab4145109cbc89f168196e7c5de9a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3568f7d04367591e33b7880a9df491d92d3c3090db36277fb1d1a99c062f342c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3568f7d04367591e33b7880a9df491d92d3c3090db36277fb1d1a99c062f342c->enter($__internal_3568f7d04367591e33b7880a9df491d92d3c3090db36277fb1d1a99c062f342c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3568f7d04367591e33b7880a9df491d92d3c3090db36277fb1d1a99c062f342c->leave($__internal_3568f7d04367591e33b7880a9df491d92d3c3090db36277fb1d1a99c062f342c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a100234d7b4bbef0dbbf8964601ff63b9d940a265c3aa253ce9e4d47cd99e241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a100234d7b4bbef0dbbf8964601ff63b9d940a265c3aa253ce9e4d47cd99e241->enter($__internal_a100234d7b4bbef0dbbf8964601ff63b9d940a265c3aa253ce9e4d47cd99e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a100234d7b4bbef0dbbf8964601ff63b9d940a265c3aa253ce9e4d47cd99e241->leave($__internal_a100234d7b4bbef0dbbf8964601ff63b9d940a265c3aa253ce9e4d47cd99e241_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfc279d3396449a338397b3f90015c93d9160b0534bc2eeace21ca278f3ee995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc279d3396449a338397b3f90015c93d9160b0534bc2eeace21ca278f3ee995->enter($__internal_cfc279d3396449a338397b3f90015c93d9160b0534bc2eeace21ca278f3ee995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfc279d3396449a338397b3f90015c93d9160b0534bc2eeace21ca278f3ee995->leave($__internal_cfc279d3396449a338397b3f90015c93d9160b0534bc2eeace21ca278f3ee995_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\app/Resources\\views/base.html.twig");
    }
}
