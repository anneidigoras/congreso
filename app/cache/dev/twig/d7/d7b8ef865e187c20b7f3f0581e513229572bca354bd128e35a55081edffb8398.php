<?php

/* @CongresoCongreso/layout.html.twig */
class __TwigTemplate_4e877c02292a15b22564915b91474889d0b9c6fac0d4cec026d44da17e7891df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@CongresoCongreso/layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c32819ba99ae36f0e3be7370707d4b1b77085e327cebe49a680aa0b43a5bb1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32819ba99ae36f0e3be7370707d4b1b77085e327cebe49a680aa0b43a5bb1a9->enter($__internal_c32819ba99ae36f0e3be7370707d4b1b77085e327cebe49a680aa0b43a5bb1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32819ba99ae36f0e3be7370707d4b1b77085e327cebe49a680aa0b43a5bb1a9->leave($__internal_c32819ba99ae36f0e3be7370707d4b1b77085e327cebe49a680aa0b43a5bb1a9_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ea23e913861c7ebd69ba4a1e453a7b82058c67dcc77908aa595112b190a2f507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea23e913861c7ebd69ba4a1e453a7b82058c67dcc77908aa595112b190a2f507->enter($__internal_ea23e913861c7ebd69ba4a1e453a7b82058c67dcc77908aa595112b190a2f507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_ea23e913861c7ebd69ba4a1e453a7b82058c67dcc77908aa595112b190a2f507->leave($__internal_ea23e913861c7ebd69ba4a1e453a7b82058c67dcc77908aa595112b190a2f507_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
   
{% endblock %}", "@CongresoCongreso/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\layout.html.twig");
    }
}
