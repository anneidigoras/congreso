<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_169b16cc00541b35e6384337ce25d71734df96dfa65f92cec158e4e65976fad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CongresoCongresoBundle::layout.html.twig", 2);
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
        $__internal_4c2b3d87b6fd9770f11e89691a62ab8f5998876da71c7640238cb0f4d240f390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2b3d87b6fd9770f11e89691a62ab8f5998876da71c7640238cb0f4d240f390->enter($__internal_4c2b3d87b6fd9770f11e89691a62ab8f5998876da71c7640238cb0f4d240f390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c2b3d87b6fd9770f11e89691a62ab8f5998876da71c7640238cb0f4d240f390->leave($__internal_4c2b3d87b6fd9770f11e89691a62ab8f5998876da71c7640238cb0f4d240f390_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cac9aeacbb18aceb1c6741a4f42486aa5bb6f787240672edf0c31890bd8f471e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac9aeacbb18aceb1c6741a4f42486aa5bb6f787240672edf0c31890bd8f471e->enter($__internal_cac9aeacbb18aceb1c6741a4f42486aa5bb6f787240672edf0c31890bd8f471e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_cac9aeacbb18aceb1c6741a4f42486aa5bb6f787240672edf0c31890bd8f471e->leave($__internal_cac9aeacbb18aceb1c6741a4f42486aa5bb6f787240672edf0c31890bd8f471e_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle::layout.html.twig";
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
   
{% endblock %}", "CongresoCongresoBundle::layout.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\layout.html.twig");
    }
}
