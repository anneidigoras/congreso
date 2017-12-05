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
        $__internal_5316581115ebdd1d98f51d7837966a72db7d0f03f7668df68d040469c72937fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5316581115ebdd1d98f51d7837966a72db7d0f03f7668df68d040469c72937fb->enter($__internal_5316581115ebdd1d98f51d7837966a72db7d0f03f7668df68d040469c72937fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5316581115ebdd1d98f51d7837966a72db7d0f03f7668df68d040469c72937fb->leave($__internal_5316581115ebdd1d98f51d7837966a72db7d0f03f7668df68d040469c72937fb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b350dad6d15265e712678d9534b469723c36af42e6faa3e966ee7484493d449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b350dad6d15265e712678d9534b469723c36af42e6faa3e966ee7484493d449->enter($__internal_0b350dad6d15265e712678d9534b469723c36af42e6faa3e966ee7484493d449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0b350dad6d15265e712678d9534b469723c36af42e6faa3e966ee7484493d449->leave($__internal_0b350dad6d15265e712678d9534b469723c36af42e6faa3e966ee7484493d449_prof);

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
