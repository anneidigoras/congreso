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
        $__internal_e5dce91de9dcf52b32a3a9062be8600dbb90c396f6fb6980f1f6ceb5b9df8130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dce91de9dcf52b32a3a9062be8600dbb90c396f6fb6980f1f6ceb5b9df8130->enter($__internal_e5dce91de9dcf52b32a3a9062be8600dbb90c396f6fb6980f1f6ceb5b9df8130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5dce91de9dcf52b32a3a9062be8600dbb90c396f6fb6980f1f6ceb5b9df8130->leave($__internal_e5dce91de9dcf52b32a3a9062be8600dbb90c396f6fb6980f1f6ceb5b9df8130_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b555cc37284296ea0942dbcd5d686c4e8ce712a1da2995472534dfd7c30f61bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b555cc37284296ea0942dbcd5d686c4e8ce712a1da2995472534dfd7c30f61bb->enter($__internal_b555cc37284296ea0942dbcd5d686c4e8ce712a1da2995472534dfd7c30f61bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b555cc37284296ea0942dbcd5d686c4e8ce712a1da2995472534dfd7c30f61bb->leave($__internal_b555cc37284296ea0942dbcd5d686c4e8ce712a1da2995472534dfd7c30f61bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bc6ac308335f7f8533c52aa1e05e1923a6f40724e22bdba2b9824bd0a3d943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc6ac308335f7f8533c52aa1e05e1923a6f40724e22bdba2b9824bd0a3d943d->enter($__internal_7bc6ac308335f7f8533c52aa1e05e1923a6f40724e22bdba2b9824bd0a3d943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_7bc6ac308335f7f8533c52aa1e05e1923a6f40724e22bdba2b9824bd0a3d943d->leave($__internal_7bc6ac308335f7f8533c52aa1e05e1923a6f40724e22bdba2b9824bd0a3d943d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a999fe1a684f49ab4b365da0023b7685f4afc6260cd3f3c9964f8642d3dce89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a999fe1a684f49ab4b365da0023b7685f4afc6260cd3f3c9964f8642d3dce89->enter($__internal_4a999fe1a684f49ab4b365da0023b7685f4afc6260cd3f3c9964f8642d3dce89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a999fe1a684f49ab4b365da0023b7685f4afc6260cd3f3c9964f8642d3dce89->leave($__internal_4a999fe1a684f49ab4b365da0023b7685f4afc6260cd3f3c9964f8642d3dce89_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b7b6ee5f2a08ee1ed9dbae1609bc471d90bd50da43c1ed6964dd73d99740e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7b6ee5f2a08ee1ed9dbae1609bc471d90bd50da43c1ed6964dd73d99740e68->enter($__internal_6b7b6ee5f2a08ee1ed9dbae1609bc471d90bd50da43c1ed6964dd73d99740e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6b7b6ee5f2a08ee1ed9dbae1609bc471d90bd50da43c1ed6964dd73d99740e68->leave($__internal_6b7b6ee5f2a08ee1ed9dbae1609bc471d90bd50da43c1ed6964dd73d99740e68_prof);

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
