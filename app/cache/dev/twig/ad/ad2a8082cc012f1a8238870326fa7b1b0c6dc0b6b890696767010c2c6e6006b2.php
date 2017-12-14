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
        $__internal_1a6009e41210fbf37f37094b4cc156a7521c7aeb5a19b77830671475ca3919be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6009e41210fbf37f37094b4cc156a7521c7aeb5a19b77830671475ca3919be->enter($__internal_1a6009e41210fbf37f37094b4cc156a7521c7aeb5a19b77830671475ca3919be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a6009e41210fbf37f37094b4cc156a7521c7aeb5a19b77830671475ca3919be->leave($__internal_1a6009e41210fbf37f37094b4cc156a7521c7aeb5a19b77830671475ca3919be_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1a0734675437538f742e12d0477fe59a313ca52c8b94832a3c885b0d8b0bdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a0734675437538f742e12d0477fe59a313ca52c8b94832a3c885b0d8b0bdfb->enter($__internal_a1a0734675437538f742e12d0477fe59a313ca52c8b94832a3c885b0d8b0bdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a1a0734675437538f742e12d0477fe59a313ca52c8b94832a3c885b0d8b0bdfb->leave($__internal_a1a0734675437538f742e12d0477fe59a313ca52c8b94832a3c885b0d8b0bdfb_prof);

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
