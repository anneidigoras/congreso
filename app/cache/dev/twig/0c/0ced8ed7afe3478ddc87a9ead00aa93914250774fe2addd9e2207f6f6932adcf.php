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
        $__internal_edd021314adc35522464c39d260d7462ff95d918e5e507ed1bee8a372e939b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd021314adc35522464c39d260d7462ff95d918e5e507ed1bee8a372e939b32->enter($__internal_edd021314adc35522464c39d260d7462ff95d918e5e507ed1bee8a372e939b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_edd021314adc35522464c39d260d7462ff95d918e5e507ed1bee8a372e939b32->leave($__internal_edd021314adc35522464c39d260d7462ff95d918e5e507ed1bee8a372e939b32_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_840df6286bd602e04857fff8a2d096010eed88d413fa576045f8bacecbe74285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840df6286bd602e04857fff8a2d096010eed88d413fa576045f8bacecbe74285->enter($__internal_840df6286bd602e04857fff8a2d096010eed88d413fa576045f8bacecbe74285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_840df6286bd602e04857fff8a2d096010eed88d413fa576045f8bacecbe74285->leave($__internal_840df6286bd602e04857fff8a2d096010eed88d413fa576045f8bacecbe74285_prof);

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
