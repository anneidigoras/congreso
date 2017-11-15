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
        $__internal_afcb3b15649b4a9f90c897aed5894f63da312a2f2492c1ffdef97f0bbbdc3689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcb3b15649b4a9f90c897aed5894f63da312a2f2492c1ffdef97f0bbbdc3689->enter($__internal_afcb3b15649b4a9f90c897aed5894f63da312a2f2492c1ffdef97f0bbbdc3689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_afcb3b15649b4a9f90c897aed5894f63da312a2f2492c1ffdef97f0bbbdc3689->leave($__internal_afcb3b15649b4a9f90c897aed5894f63da312a2f2492c1ffdef97f0bbbdc3689_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e769c26255c49a7e46e5e8cb32fef33c04e1f4706e64ef6fea4ad79cd7a67c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e769c26255c49a7e46e5e8cb32fef33c04e1f4706e64ef6fea4ad79cd7a67c3->enter($__internal_1e769c26255c49a7e46e5e8cb32fef33c04e1f4706e64ef6fea4ad79cd7a67c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1e769c26255c49a7e46e5e8cb32fef33c04e1f4706e64ef6fea4ad79cd7a67c3->leave($__internal_1e769c26255c49a7e46e5e8cb32fef33c04e1f4706e64ef6fea4ad79cd7a67c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86df851d99bd2ea38a0a7d311d00c5ebb4320c92f412aad1723c2d82c0d0e776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86df851d99bd2ea38a0a7d311d00c5ebb4320c92f412aad1723c2d82c0d0e776->enter($__internal_86df851d99bd2ea38a0a7d311d00c5ebb4320c92f412aad1723c2d82c0d0e776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_86df851d99bd2ea38a0a7d311d00c5ebb4320c92f412aad1723c2d82c0d0e776->leave($__internal_86df851d99bd2ea38a0a7d311d00c5ebb4320c92f412aad1723c2d82c0d0e776_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_73d90f9e012dc318f454289fcf7cae0489e0e3d9e016714c122b7556db9946b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d90f9e012dc318f454289fcf7cae0489e0e3d9e016714c122b7556db9946b4->enter($__internal_73d90f9e012dc318f454289fcf7cae0489e0e3d9e016714c122b7556db9946b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73d90f9e012dc318f454289fcf7cae0489e0e3d9e016714c122b7556db9946b4->leave($__internal_73d90f9e012dc318f454289fcf7cae0489e0e3d9e016714c122b7556db9946b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c7ced6f0fb93b963c56844e96ed8f115372e58963d620b9412f87185193e9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7ced6f0fb93b963c56844e96ed8f115372e58963d620b9412f87185193e9db->enter($__internal_1c7ced6f0fb93b963c56844e96ed8f115372e58963d620b9412f87185193e9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c7ced6f0fb93b963c56844e96ed8f115372e58963d620b9412f87185193e9db->leave($__internal_1c7ced6f0fb93b963c56844e96ed8f115372e58963d620b9412f87185193e9db_prof);

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
