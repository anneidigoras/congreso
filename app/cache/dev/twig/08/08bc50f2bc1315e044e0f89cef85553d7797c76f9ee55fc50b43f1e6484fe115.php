<?php

/* @CongresoCongreso/Default/index.html.twig */
class __TwigTemplate_a4dba656d46dccdf1633c235e1d3690aaed5102cdd90411c5c77d3ceaf6c78eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e440854e2ddf53499021631c10fc9d689d2ed61dfcfa1f8d10ec3d0928deab24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e440854e2ddf53499021631c10fc9d689d2ed61dfcfa1f8d10ec3d0928deab24->enter($__internal_e440854e2ddf53499021631c10fc9d689d2ed61dfcfa1f8d10ec3d0928deab24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_e440854e2ddf53499021631c10fc9d689d2ed61dfcfa1f8d10ec3d0928deab24->leave($__internal_e440854e2ddf53499021631c10fc9d689d2ed61dfcfa1f8d10ec3d0928deab24_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "@CongresoCongreso/Default/index.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
