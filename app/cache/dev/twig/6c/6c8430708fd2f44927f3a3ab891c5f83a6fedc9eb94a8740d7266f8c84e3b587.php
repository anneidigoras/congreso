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
        $__internal_ea5f123374a45d1ac16c900a4a5a9bd05f08fa8352bf45cf7f2db4dc98ce1bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5f123374a45d1ac16c900a4a5a9bd05f08fa8352bf45cf7f2db4dc98ce1bba->enter($__internal_ea5f123374a45d1ac16c900a4a5a9bd05f08fa8352bf45cf7f2db4dc98ce1bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea5f123374a45d1ac16c900a4a5a9bd05f08fa8352bf45cf7f2db4dc98ce1bba->leave($__internal_ea5f123374a45d1ac16c900a4a5a9bd05f08fa8352bf45cf7f2db4dc98ce1bba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a49e397e1957aaceaf76c5c2035cb8d68c129097eb5f6bfa34463172509d0ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49e397e1957aaceaf76c5c2035cb8d68c129097eb5f6bfa34463172509d0ad9->enter($__internal_a49e397e1957aaceaf76c5c2035cb8d68c129097eb5f6bfa34463172509d0ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a49e397e1957aaceaf76c5c2035cb8d68c129097eb5f6bfa34463172509d0ad9->leave($__internal_a49e397e1957aaceaf76c5c2035cb8d68c129097eb5f6bfa34463172509d0ad9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_89798eaf95b42e7dee1e62619711f6a9b13738ea6eefc338c4811456bd2ef002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89798eaf95b42e7dee1e62619711f6a9b13738ea6eefc338c4811456bd2ef002->enter($__internal_89798eaf95b42e7dee1e62619711f6a9b13738ea6eefc338c4811456bd2ef002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_89798eaf95b42e7dee1e62619711f6a9b13738ea6eefc338c4811456bd2ef002->leave($__internal_89798eaf95b42e7dee1e62619711f6a9b13738ea6eefc338c4811456bd2ef002_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9f7633780486ca548f39293dc9b892cb6a09b815fa9bb20b1adf0a883d03bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f7633780486ca548f39293dc9b892cb6a09b815fa9bb20b1adf0a883d03bfb->enter($__internal_c9f7633780486ca548f39293dc9b892cb6a09b815fa9bb20b1adf0a883d03bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9f7633780486ca548f39293dc9b892cb6a09b815fa9bb20b1adf0a883d03bfb->leave($__internal_c9f7633780486ca548f39293dc9b892cb6a09b815fa9bb20b1adf0a883d03bfb_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_fda0911d288de0efae0f40d1ca796fec60856ec03623968207108dd7ffd288b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda0911d288de0efae0f40d1ca796fec60856ec03623968207108dd7ffd288b2->enter($__internal_fda0911d288de0efae0f40d1ca796fec60856ec03623968207108dd7ffd288b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fda0911d288de0efae0f40d1ca796fec60856ec03623968207108dd7ffd288b2->leave($__internal_fda0911d288de0efae0f40d1ca796fec60856ec03623968207108dd7ffd288b2_prof);

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
