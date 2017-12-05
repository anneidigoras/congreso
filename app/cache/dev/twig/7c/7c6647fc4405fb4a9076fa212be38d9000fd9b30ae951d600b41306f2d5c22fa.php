<?php

/* CongresoAdminBundle:Default:index.html.twig */
class __TwigTemplate_f534515b64113dc0213606c35acd32b37edaf124e6edbf942cb3bc76f5e45ee8 extends Twig_Template
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
        $__internal_04f42b599a8758ce49d17a54a240c3174d06592702f737d02ff9a17c0cc57c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f42b599a8758ce49d17a54a240c3174d06592702f737d02ff9a17c0cc57c3a->enter($__internal_04f42b599a8758ce49d17a54a240c3174d06592702f737d02ff9a17c0cc57c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_04f42b599a8758ce49d17a54a240c3174d06592702f737d02ff9a17c0cc57c3a->leave($__internal_04f42b599a8758ce49d17a54a240c3174d06592702f737d02ff9a17c0cc57c3a_prof);

    }

    public function getTemplateName()
    {
        return "CongresoAdminBundle:Default:index.html.twig";
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
", "CongresoAdminBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
