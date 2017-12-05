<?php

/* @CongresoAdmin/Default/index.html.twig */
class __TwigTemplate_c0cea4fabf8f51c5f0026f6ed5a9e05697249c26b2a0d03cf18f5bf0d74872d2 extends Twig_Template
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
        $__internal_fe9c1becf3ce7ac6abd5ad6ea1b3cd22ca3606379a02272cf0f8716d23c3a031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9c1becf3ce7ac6abd5ad6ea1b3cd22ca3606379a02272cf0f8716d23c3a031->enter($__internal_fe9c1becf3ce7ac6abd5ad6ea1b3cd22ca3606379a02272cf0f8716d23c3a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoAdmin/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fe9c1becf3ce7ac6abd5ad6ea1b3cd22ca3606379a02272cf0f8716d23c3a031->leave($__internal_fe9c1becf3ce7ac6abd5ad6ea1b3cd22ca3606379a02272cf0f8716d23c3a031_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoAdmin/Default/index.html.twig";
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
", "@CongresoAdmin/Default/index.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
