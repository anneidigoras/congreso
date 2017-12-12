<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a82435d44d5712b0b8a57d0bb3ef5699e2369fd037fe0e8f85e1e168b5c3d6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_c6e6b6f5d141fa4effc314b3fd1db45d2a3e6f35e325d0e613d70db42c9dce78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e6b6f5d141fa4effc314b3fd1db45d2a3e6f35e325d0e613d70db42c9dce78->enter($__internal_c6e6b6f5d141fa4effc314b3fd1db45d2a3e6f35e325d0e613d70db42c9dce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e6b6f5d141fa4effc314b3fd1db45d2a3e6f35e325d0e613d70db42c9dce78->leave($__internal_c6e6b6f5d141fa4effc314b3fd1db45d2a3e6f35e325d0e613d70db42c9dce78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0afc67982a85568168ab1377c9f55713c0593ebbbf7fab63bf936cf3e5bc4a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afc67982a85568168ab1377c9f55713c0593ebbbf7fab63bf936cf3e5bc4a5a->enter($__internal_0afc67982a85568168ab1377c9f55713c0593ebbbf7fab63bf936cf3e5bc4a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0afc67982a85568168ab1377c9f55713c0593ebbbf7fab63bf936cf3e5bc4a5a->leave($__internal_0afc67982a85568168ab1377c9f55713c0593ebbbf7fab63bf936cf3e5bc4a5a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fbf0337f341e9cc6bcb319dc5f42a81c555cd3b008819fcd96092f4f3d14209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbf0337f341e9cc6bcb319dc5f42a81c555cd3b008819fcd96092f4f3d14209->enter($__internal_1fbf0337f341e9cc6bcb319dc5f42a81c555cd3b008819fcd96092f4f3d14209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1fbf0337f341e9cc6bcb319dc5f42a81c555cd3b008819fcd96092f4f3d14209->leave($__internal_1fbf0337f341e9cc6bcb319dc5f42a81c555cd3b008819fcd96092f4f3d14209_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_54b08671dc1c394c7079b986c6483949a673b4b971c35e7713f34f43864e3f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b08671dc1c394c7079b986c6483949a673b4b971c35e7713f34f43864e3f52->enter($__internal_54b08671dc1c394c7079b986c6483949a673b4b971c35e7713f34f43864e3f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54b08671dc1c394c7079b986c6483949a673b4b971c35e7713f34f43864e3f52->leave($__internal_54b08671dc1c394c7079b986c6483949a673b4b971c35e7713f34f43864e3f52_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1ffc5b415de9f44631131babcb98393886a975c061652aa01dd8f23eb0231ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffc5b415de9f44631131babcb98393886a975c061652aa01dd8f23eb0231ff1->enter($__internal_1ffc5b415de9f44631131babcb98393886a975c061652aa01dd8f23eb0231ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1ffc5b415de9f44631131babcb98393886a975c061652aa01dd8f23eb0231ff1->leave($__internal_1ffc5b415de9f44631131babcb98393886a975c061652aa01dd8f23eb0231ff1_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
