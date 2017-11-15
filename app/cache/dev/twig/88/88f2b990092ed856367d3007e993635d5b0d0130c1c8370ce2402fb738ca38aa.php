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
        $__internal_c0c9c753e9a0d2955cfbd2c49bc3e88b415568d2e685a80f2ef8f8d3c8c83628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c9c753e9a0d2955cfbd2c49bc3e88b415568d2e685a80f2ef8f8d3c8c83628->enter($__internal_c0c9c753e9a0d2955cfbd2c49bc3e88b415568d2e685a80f2ef8f8d3c8c83628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c0c9c753e9a0d2955cfbd2c49bc3e88b415568d2e685a80f2ef8f8d3c8c83628->leave($__internal_c0c9c753e9a0d2955cfbd2c49bc3e88b415568d2e685a80f2ef8f8d3c8c83628_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e825ee74aad69db227b2091178c2dafbcb7ceee9f8e7e6044762a0b3e65f70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e825ee74aad69db227b2091178c2dafbcb7ceee9f8e7e6044762a0b3e65f70e->enter($__internal_9e825ee74aad69db227b2091178c2dafbcb7ceee9f8e7e6044762a0b3e65f70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e825ee74aad69db227b2091178c2dafbcb7ceee9f8e7e6044762a0b3e65f70e->leave($__internal_9e825ee74aad69db227b2091178c2dafbcb7ceee9f8e7e6044762a0b3e65f70e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a80ca36a4b2f8943ba4c0eb5e06fbf7bd6f1fa172d31223b650dfad4c7de08f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80ca36a4b2f8943ba4c0eb5e06fbf7bd6f1fa172d31223b650dfad4c7de08f9->enter($__internal_a80ca36a4b2f8943ba4c0eb5e06fbf7bd6f1fa172d31223b650dfad4c7de08f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a80ca36a4b2f8943ba4c0eb5e06fbf7bd6f1fa172d31223b650dfad4c7de08f9->leave($__internal_a80ca36a4b2f8943ba4c0eb5e06fbf7bd6f1fa172d31223b650dfad4c7de08f9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ec222b756e25521fa724381d4df5d81ec02334f9395a0c5a856dee42f9c5ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec222b756e25521fa724381d4df5d81ec02334f9395a0c5a856dee42f9c5ec0->enter($__internal_0ec222b756e25521fa724381d4df5d81ec02334f9395a0c5a856dee42f9c5ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ec222b756e25521fa724381d4df5d81ec02334f9395a0c5a856dee42f9c5ec0->leave($__internal_0ec222b756e25521fa724381d4df5d81ec02334f9395a0c5a856dee42f9c5ec0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e9ace0523e2f0efad27f2889a1a6ce791d77a9cefda3a4787f575deb292e53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9ace0523e2f0efad27f2889a1a6ce791d77a9cefda3a4787f575deb292e53d->enter($__internal_8e9ace0523e2f0efad27f2889a1a6ce791d77a9cefda3a4787f575deb292e53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8e9ace0523e2f0efad27f2889a1a6ce791d77a9cefda3a4787f575deb292e53d->leave($__internal_8e9ace0523e2f0efad27f2889a1a6ce791d77a9cefda3a4787f575deb292e53d_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
