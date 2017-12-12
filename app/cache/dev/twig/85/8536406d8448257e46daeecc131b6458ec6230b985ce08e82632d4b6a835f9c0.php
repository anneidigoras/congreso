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
        $__internal_5bcbbe5bc53dc7d1e80f8e787534a0ff4f3cc060d93a686cabd77501dc1f5227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcbbe5bc53dc7d1e80f8e787534a0ff4f3cc060d93a686cabd77501dc1f5227->enter($__internal_5bcbbe5bc53dc7d1e80f8e787534a0ff4f3cc060d93a686cabd77501dc1f5227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bcbbe5bc53dc7d1e80f8e787534a0ff4f3cc060d93a686cabd77501dc1f5227->leave($__internal_5bcbbe5bc53dc7d1e80f8e787534a0ff4f3cc060d93a686cabd77501dc1f5227_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f8467c1ea145bef3b70700443252dbec1255f9a2086e254ce0bd41dfe450d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8467c1ea145bef3b70700443252dbec1255f9a2086e254ce0bd41dfe450d2b->enter($__internal_1f8467c1ea145bef3b70700443252dbec1255f9a2086e254ce0bd41dfe450d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1f8467c1ea145bef3b70700443252dbec1255f9a2086e254ce0bd41dfe450d2b->leave($__internal_1f8467c1ea145bef3b70700443252dbec1255f9a2086e254ce0bd41dfe450d2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1148d9668fcc2e4262e3dd9b6b462ad214a96872ec071eab96b2d3d0fa9aee51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1148d9668fcc2e4262e3dd9b6b462ad214a96872ec071eab96b2d3d0fa9aee51->enter($__internal_1148d9668fcc2e4262e3dd9b6b462ad214a96872ec071eab96b2d3d0fa9aee51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1148d9668fcc2e4262e3dd9b6b462ad214a96872ec071eab96b2d3d0fa9aee51->leave($__internal_1148d9668fcc2e4262e3dd9b6b462ad214a96872ec071eab96b2d3d0fa9aee51_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_47a4a8b45281a83cec6030f0f3f1847469d9744afafe2e57b021eb38b59529b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a4a8b45281a83cec6030f0f3f1847469d9744afafe2e57b021eb38b59529b7->enter($__internal_47a4a8b45281a83cec6030f0f3f1847469d9744afafe2e57b021eb38b59529b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47a4a8b45281a83cec6030f0f3f1847469d9744afafe2e57b021eb38b59529b7->leave($__internal_47a4a8b45281a83cec6030f0f3f1847469d9744afafe2e57b021eb38b59529b7_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_477426c0d63ea652a264aea2276c80cb9369ab5d63f27ea5b897098bb80cc9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477426c0d63ea652a264aea2276c80cb9369ab5d63f27ea5b897098bb80cc9e1->enter($__internal_477426c0d63ea652a264aea2276c80cb9369ab5d63f27ea5b897098bb80cc9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_477426c0d63ea652a264aea2276c80cb9369ab5d63f27ea5b897098bb80cc9e1->leave($__internal_477426c0d63ea652a264aea2276c80cb9369ab5d63f27ea5b897098bb80cc9e1_prof);

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
