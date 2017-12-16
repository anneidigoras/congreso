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
        $__internal_8a2844852227675f69f31a0fe68c881ec2e160ddf9fd7d907cc1dd298caf9af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2844852227675f69f31a0fe68c881ec2e160ddf9fd7d907cc1dd298caf9af8->enter($__internal_8a2844852227675f69f31a0fe68c881ec2e160ddf9fd7d907cc1dd298caf9af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8a2844852227675f69f31a0fe68c881ec2e160ddf9fd7d907cc1dd298caf9af8->leave($__internal_8a2844852227675f69f31a0fe68c881ec2e160ddf9fd7d907cc1dd298caf9af8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ba7e2456c0a88be51d15397939e85635bad243c988dc2c1d650bf486392b36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba7e2456c0a88be51d15397939e85635bad243c988dc2c1d650bf486392b36f->enter($__internal_6ba7e2456c0a88be51d15397939e85635bad243c988dc2c1d650bf486392b36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6ba7e2456c0a88be51d15397939e85635bad243c988dc2c1d650bf486392b36f->leave($__internal_6ba7e2456c0a88be51d15397939e85635bad243c988dc2c1d650bf486392b36f_prof);

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
