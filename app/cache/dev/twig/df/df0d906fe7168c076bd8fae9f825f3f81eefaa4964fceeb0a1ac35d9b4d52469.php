<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_62c1bcfd9d93daca2545583053af38daed66420e92c8e37ceda6f6b6a5ab76c0 extends Twig_Template
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
        $__internal_157cab23fa026b1b993a6beaf08f88f9d39a87161dedf23ea762e5f08502306f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157cab23fa026b1b993a6beaf08f88f9d39a87161dedf23ea762e5f08502306f->enter($__internal_157cab23fa026b1b993a6beaf08f88f9d39a87161dedf23ea762e5f08502306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_157cab23fa026b1b993a6beaf08f88f9d39a87161dedf23ea762e5f08502306f->leave($__internal_157cab23fa026b1b993a6beaf08f88f9d39a87161dedf23ea762e5f08502306f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d17af3aacdd0be749a732ced134298e6f1d5e7b626f03a0337278f1a2878544c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17af3aacdd0be749a732ced134298e6f1d5e7b626f03a0337278f1a2878544c->enter($__internal_d17af3aacdd0be749a732ced134298e6f1d5e7b626f03a0337278f1a2878544c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d17af3aacdd0be749a732ced134298e6f1d5e7b626f03a0337278f1a2878544c->leave($__internal_d17af3aacdd0be749a732ced134298e6f1d5e7b626f03a0337278f1a2878544c_prof);

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
