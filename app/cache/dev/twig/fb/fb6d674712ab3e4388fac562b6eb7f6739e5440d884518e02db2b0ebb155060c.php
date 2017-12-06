<?php

/* @CongresoAdmin/Default/index.html.twig */
class __TwigTemplate_c9471cefa255ff9f3386ed605de345dfe82b1ba6037494e64869eda751f0ca86 extends Twig_Template
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
        $__internal_9b397205cc72aa7114eb5062e48dc58eeaf45165068e5a68b1748584cbca1c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b397205cc72aa7114eb5062e48dc58eeaf45165068e5a68b1748584cbca1c92->enter($__internal_9b397205cc72aa7114eb5062e48dc58eeaf45165068e5a68b1748584cbca1c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoAdmin/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9b397205cc72aa7114eb5062e48dc58eeaf45165068e5a68b1748584cbca1c92->leave($__internal_9b397205cc72aa7114eb5062e48dc58eeaf45165068e5a68b1748584cbca1c92_prof);

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
