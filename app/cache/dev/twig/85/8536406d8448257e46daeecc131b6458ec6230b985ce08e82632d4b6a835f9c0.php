<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_9c591f7752e12960e66c9d089d1fea62b11cd33c8cecf47955510b8299081b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58427b1b3e6c7359d101f34bfe9c8bbd6767af0f68d948d1c4fdf8c498874056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58427b1b3e6c7359d101f34bfe9c8bbd6767af0f68d948d1c4fdf8c498874056->enter($__internal_58427b1b3e6c7359d101f34bfe9c8bbd6767af0f68d948d1c4fdf8c498874056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58427b1b3e6c7359d101f34bfe9c8bbd6767af0f68d948d1c4fdf8c498874056->leave($__internal_58427b1b3e6c7359d101f34bfe9c8bbd6767af0f68d948d1c4fdf8c498874056_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_337f4c5a4a78474341354f9599a9de98f2f93e0f44d8ce69798923bfdadf071c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337f4c5a4a78474341354f9599a9de98f2f93e0f44d8ce69798923bfdadf071c->enter($__internal_337f4c5a4a78474341354f9599a9de98f2f93e0f44d8ce69798923bfdadf071c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_337f4c5a4a78474341354f9599a9de98f2f93e0f44d8ce69798923bfdadf071c->leave($__internal_337f4c5a4a78474341354f9599a9de98f2f93e0f44d8ce69798923bfdadf071c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0412c4c4c9a244216786844df67f4fac1f0787351bd8645cd43bcfeece2763db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0412c4c4c9a244216786844df67f4fac1f0787351bd8645cd43bcfeece2763db->enter($__internal_0412c4c4c9a244216786844df67f4fac1f0787351bd8645cd43bcfeece2763db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0412c4c4c9a244216786844df67f4fac1f0787351bd8645cd43bcfeece2763db->leave($__internal_0412c4c4c9a244216786844df67f4fac1f0787351bd8645cd43bcfeece2763db_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_688399bc364daebeba3c94dfc63b9a07236a903bc89bd90776caac1baf25699f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688399bc364daebeba3c94dfc63b9a07236a903bc89bd90776caac1baf25699f->enter($__internal_688399bc364daebeba3c94dfc63b9a07236a903bc89bd90776caac1baf25699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_688399bc364daebeba3c94dfc63b9a07236a903bc89bd90776caac1baf25699f->leave($__internal_688399bc364daebeba3c94dfc63b9a07236a903bc89bd90776caac1baf25699f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2cffadbcfd85103360e05ac1647a15f8e74278b572fe186c3af08801251d148e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cffadbcfd85103360e05ac1647a15f8e74278b572fe186c3af08801251d148e->enter($__internal_2cffadbcfd85103360e05ac1647a15f8e74278b572fe186c3af08801251d148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2cffadbcfd85103360e05ac1647a15f8e74278b572fe186c3af08801251d148e->leave($__internal_2cffadbcfd85103360e05ac1647a15f8e74278b572fe186c3af08801251d148e_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
