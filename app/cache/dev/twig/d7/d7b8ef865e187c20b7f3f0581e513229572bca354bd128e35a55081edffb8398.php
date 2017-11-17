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
        $__internal_242b23b5e0d39db02ffd4168abf8aeb148a92ff8e5fe9330da4049c54c93acea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242b23b5e0d39db02ffd4168abf8aeb148a92ff8e5fe9330da4049c54c93acea->enter($__internal_242b23b5e0d39db02ffd4168abf8aeb148a92ff8e5fe9330da4049c54c93acea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_242b23b5e0d39db02ffd4168abf8aeb148a92ff8e5fe9330da4049c54c93acea->leave($__internal_242b23b5e0d39db02ffd4168abf8aeb148a92ff8e5fe9330da4049c54c93acea_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8d33b6ff566b3856aa6c3ec6a86b9756e605cc663176b0c6bf29025435e1479b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d33b6ff566b3856aa6c3ec6a86b9756e605cc663176b0c6bf29025435e1479b->enter($__internal_8d33b6ff566b3856aa6c3ec6a86b9756e605cc663176b0c6bf29025435e1479b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_8d33b6ff566b3856aa6c3ec6a86b9756e605cc663176b0c6bf29025435e1479b->leave($__internal_8d33b6ff566b3856aa6c3ec6a86b9756e605cc663176b0c6bf29025435e1479b_prof);

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
