<?php

/* base.html.twig */
class __TwigTemplate_d882acde4f4b42cd8633763c1d480248c057bf1eb49dc40eeba39fe53f81788a extends Twig_Template
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
        $__internal_65c021c49feaa2caf7a4ac321af707479e8e4b1d7115d85aa49bb3d9d9597df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c021c49feaa2caf7a4ac321af707479e8e4b1d7115d85aa49bb3d9d9597df3->enter($__internal_65c021c49feaa2caf7a4ac321af707479e8e4b1d7115d85aa49bb3d9d9597df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_65c021c49feaa2caf7a4ac321af707479e8e4b1d7115d85aa49bb3d9d9597df3->leave($__internal_65c021c49feaa2caf7a4ac321af707479e8e4b1d7115d85aa49bb3d9d9597df3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41c8171ceaf2a70aefb5faedb9ceca0447374eb2e8f6d5cd8e97915717cf4f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c8171ceaf2a70aefb5faedb9ceca0447374eb2e8f6d5cd8e97915717cf4f74->enter($__internal_41c8171ceaf2a70aefb5faedb9ceca0447374eb2e8f6d5cd8e97915717cf4f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41c8171ceaf2a70aefb5faedb9ceca0447374eb2e8f6d5cd8e97915717cf4f74->leave($__internal_41c8171ceaf2a70aefb5faedb9ceca0447374eb2e8f6d5cd8e97915717cf4f74_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66ddf01369a940b99ea97df9f7aa44ae8bfd0a1ec0dbf01a787dbe5d19ca18e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ddf01369a940b99ea97df9f7aa44ae8bfd0a1ec0dbf01a787dbe5d19ca18e3->enter($__internal_66ddf01369a940b99ea97df9f7aa44ae8bfd0a1ec0dbf01a787dbe5d19ca18e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_66ddf01369a940b99ea97df9f7aa44ae8bfd0a1ec0dbf01a787dbe5d19ca18e3->leave($__internal_66ddf01369a940b99ea97df9f7aa44ae8bfd0a1ec0dbf01a787dbe5d19ca18e3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e98b8215f7037b8186e72ee439cd8e7f9f09abb34d5996bd088e938669b1430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e98b8215f7037b8186e72ee439cd8e7f9f09abb34d5996bd088e938669b1430->enter($__internal_9e98b8215f7037b8186e72ee439cd8e7f9f09abb34d5996bd088e938669b1430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e98b8215f7037b8186e72ee439cd8e7f9f09abb34d5996bd088e938669b1430->leave($__internal_9e98b8215f7037b8186e72ee439cd8e7f9f09abb34d5996bd088e938669b1430_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbb66a68ffd64f2a988bdfd52133a8f140894de8d3d7e2db24999698d986850d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb66a68ffd64f2a988bdfd52133a8f140894de8d3d7e2db24999698d986850d->enter($__internal_bbb66a68ffd64f2a988bdfd52133a8f140894de8d3d7e2db24999698d986850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbb66a68ffd64f2a988bdfd52133a8f140894de8d3d7e2db24999698d986850d->leave($__internal_bbb66a68ffd64f2a988bdfd52133a8f140894de8d3d7e2db24999698d986850d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\app\\Resources\\views\\base.html.twig");
    }
}
