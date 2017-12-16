<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d0bcd13e8a409df123603a641872fe21b43a8daa89343941be8c75e38d510d40 extends Twig_Template
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
        $__internal_2fff988c9d6d56ef82f175c90cc91865a1be1d8a01cd2420a0df891ab681193e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fff988c9d6d56ef82f175c90cc91865a1be1d8a01cd2420a0df891ab681193e->enter($__internal_2fff988c9d6d56ef82f175c90cc91865a1be1d8a01cd2420a0df891ab681193e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2fff988c9d6d56ef82f175c90cc91865a1be1d8a01cd2420a0df891ab681193e->leave($__internal_2fff988c9d6d56ef82f175c90cc91865a1be1d8a01cd2420a0df891ab681193e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9255ba71a32beee924f785c2aa1e10c9da0e1dcc4a8646817a4af8aa086a9cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9255ba71a32beee924f785c2aa1e10c9da0e1dcc4a8646817a4af8aa086a9cdb->enter($__internal_9255ba71a32beee924f785c2aa1e10c9da0e1dcc4a8646817a4af8aa086a9cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9255ba71a32beee924f785c2aa1e10c9da0e1dcc4a8646817a4af8aa086a9cdb->leave($__internal_9255ba71a32beee924f785c2aa1e10c9da0e1dcc4a8646817a4af8aa086a9cdb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
