<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_673ecf309ce9673f92ac8e50a4ee1698b0dd108b427c7dfc76237f117e1565cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78d49d5b876a73293f3b02ba4f9f18e8176c1624240166e0a98bcc2d2262a651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d49d5b876a73293f3b02ba4f9f18e8176c1624240166e0a98bcc2d2262a651->enter($__internal_78d49d5b876a73293f3b02ba4f9f18e8176c1624240166e0a98bcc2d2262a651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_78d49d5b876a73293f3b02ba4f9f18e8176c1624240166e0a98bcc2d2262a651->leave($__internal_78d49d5b876a73293f3b02ba4f9f18e8176c1624240166e0a98bcc2d2262a651_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d335d2aeb24fc729fbc682d675d5b2a8710b39326dbaecaeceaa35b6b366f612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d335d2aeb24fc729fbc682d675d5b2a8710b39326dbaecaeceaa35b6b366f612->enter($__internal_d335d2aeb24fc729fbc682d675d5b2a8710b39326dbaecaeceaa35b6b366f612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d335d2aeb24fc729fbc682d675d5b2a8710b39326dbaecaeceaa35b6b366f612->leave($__internal_d335d2aeb24fc729fbc682d675d5b2a8710b39326dbaecaeceaa35b6b366f612_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
