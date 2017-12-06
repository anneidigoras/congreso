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
        $__internal_e84629a8b43abfd5fa9d5f3458ed7bdceaaa64f238198bd276b67dc49ccc210b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84629a8b43abfd5fa9d5f3458ed7bdceaaa64f238198bd276b67dc49ccc210b->enter($__internal_e84629a8b43abfd5fa9d5f3458ed7bdceaaa64f238198bd276b67dc49ccc210b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84629a8b43abfd5fa9d5f3458ed7bdceaaa64f238198bd276b67dc49ccc210b->leave($__internal_e84629a8b43abfd5fa9d5f3458ed7bdceaaa64f238198bd276b67dc49ccc210b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64dc100dbc29698b428c7a6f35a6a19fa172704739dc2e1c44c8c08a9b9d983b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64dc100dbc29698b428c7a6f35a6a19fa172704739dc2e1c44c8c08a9b9d983b->enter($__internal_64dc100dbc29698b428c7a6f35a6a19fa172704739dc2e1c44c8c08a9b9d983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_64dc100dbc29698b428c7a6f35a6a19fa172704739dc2e1c44c8c08a9b9d983b->leave($__internal_64dc100dbc29698b428c7a6f35a6a19fa172704739dc2e1c44c8c08a9b9d983b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f68e13613de62d2c92662f34b87fc376cd136313e5c19fc9afd6f5057827af2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68e13613de62d2c92662f34b87fc376cd136313e5c19fc9afd6f5057827af2b->enter($__internal_f68e13613de62d2c92662f34b87fc376cd136313e5c19fc9afd6f5057827af2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f68e13613de62d2c92662f34b87fc376cd136313e5c19fc9afd6f5057827af2b->leave($__internal_f68e13613de62d2c92662f34b87fc376cd136313e5c19fc9afd6f5057827af2b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd2e2ac97607d1ac9e30612e77b9d84c47c9d15baa21aa71748f0f53f924574e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2e2ac97607d1ac9e30612e77b9d84c47c9d15baa21aa71748f0f53f924574e->enter($__internal_bd2e2ac97607d1ac9e30612e77b9d84c47c9d15baa21aa71748f0f53f924574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd2e2ac97607d1ac9e30612e77b9d84c47c9d15baa21aa71748f0f53f924574e->leave($__internal_bd2e2ac97607d1ac9e30612e77b9d84c47c9d15baa21aa71748f0f53f924574e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ceb76c953701974c5a58de618b8e3a78bacf07d7ed1c677889ec71a9f276785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ceb76c953701974c5a58de618b8e3a78bacf07d7ed1c677889ec71a9f276785->enter($__internal_7ceb76c953701974c5a58de618b8e3a78bacf07d7ed1c677889ec71a9f276785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7ceb76c953701974c5a58de618b8e3a78bacf07d7ed1c677889ec71a9f276785->leave($__internal_7ceb76c953701974c5a58de618b8e3a78bacf07d7ed1c677889ec71a9f276785_prof);

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
