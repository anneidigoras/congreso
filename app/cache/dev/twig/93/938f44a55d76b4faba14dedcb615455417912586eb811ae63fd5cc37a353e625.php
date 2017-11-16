<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
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
        $__internal_c8fcb3afcf5b62e63d6908b35b19583cc46d00b554ae8fecf3b611c3a645dee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fcb3afcf5b62e63d6908b35b19583cc46d00b554ae8fecf3b611c3a645dee2->enter($__internal_c8fcb3afcf5b62e63d6908b35b19583cc46d00b554ae8fecf3b611c3a645dee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8fcb3afcf5b62e63d6908b35b19583cc46d00b554ae8fecf3b611c3a645dee2->leave($__internal_c8fcb3afcf5b62e63d6908b35b19583cc46d00b554ae8fecf3b611c3a645dee2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_179c763be0619d545c01e3c60ec808a17c4bae50813e2471215e972aa39336b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179c763be0619d545c01e3c60ec808a17c4bae50813e2471215e972aa39336b6->enter($__internal_179c763be0619d545c01e3c60ec808a17c4bae50813e2471215e972aa39336b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_179c763be0619d545c01e3c60ec808a17c4bae50813e2471215e972aa39336b6->leave($__internal_179c763be0619d545c01e3c60ec808a17c4bae50813e2471215e972aa39336b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75ab8fb92621ace7e4101d039f921f7412f08493e4fe773ea7afbdbd24dfcdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ab8fb92621ace7e4101d039f921f7412f08493e4fe773ea7afbdbd24dfcdde->enter($__internal_75ab8fb92621ace7e4101d039f921f7412f08493e4fe773ea7afbdbd24dfcdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_75ab8fb92621ace7e4101d039f921f7412f08493e4fe773ea7afbdbd24dfcdde->leave($__internal_75ab8fb92621ace7e4101d039f921f7412f08493e4fe773ea7afbdbd24dfcdde_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ac6b226969d8b874507a561dbc64ffa18c4b8e703b82b312240cb90b0791840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac6b226969d8b874507a561dbc64ffa18c4b8e703b82b312240cb90b0791840->enter($__internal_8ac6b226969d8b874507a561dbc64ffa18c4b8e703b82b312240cb90b0791840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ac6b226969d8b874507a561dbc64ffa18c4b8e703b82b312240cb90b0791840->leave($__internal_8ac6b226969d8b874507a561dbc64ffa18c4b8e703b82b312240cb90b0791840_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_140b71b58b5b906c8808b2e61edfa1449c2cb168bc55f2acf3864f06ca2a47dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140b71b58b5b906c8808b2e61edfa1449c2cb168bc55f2acf3864f06ca2a47dd->enter($__internal_140b71b58b5b906c8808b2e61edfa1449c2cb168bc55f2acf3864f06ca2a47dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_140b71b58b5b906c8808b2e61edfa1449c2cb168bc55f2acf3864f06ca2a47dd->leave($__internal_140b71b58b5b906c8808b2e61edfa1449c2cb168bc55f2acf3864f06ca2a47dd_prof);

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
