<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_df58981b57036f7c17d503df2830623538fe972fd72628108287c6db3cddafb3 extends Twig_Template
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
        $__internal_8b7588318a3ae92ef77198d102cc693cac18f8fc656fb468475b8763e1fc7e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7588318a3ae92ef77198d102cc693cac18f8fc656fb468475b8763e1fc7e12->enter($__internal_8b7588318a3ae92ef77198d102cc693cac18f8fc656fb468475b8763e1fc7e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8b7588318a3ae92ef77198d102cc693cac18f8fc656fb468475b8763e1fc7e12->leave($__internal_8b7588318a3ae92ef77198d102cc693cac18f8fc656fb468475b8763e1fc7e12_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_92c1f723b143c8724a9bba8bfd97df3dc4b70da5bd1d5241681cfaaeb0b6093e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c1f723b143c8724a9bba8bfd97df3dc4b70da5bd1d5241681cfaaeb0b6093e->enter($__internal_92c1f723b143c8724a9bba8bfd97df3dc4b70da5bd1d5241681cfaaeb0b6093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_92c1f723b143c8724a9bba8bfd97df3dc4b70da5bd1d5241681cfaaeb0b6093e->leave($__internal_92c1f723b143c8724a9bba8bfd97df3dc4b70da5bd1d5241681cfaaeb0b6093e_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
