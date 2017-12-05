<?php

/* CongresoAdminBundle:Default:index.html.twig */
class __TwigTemplate_0a55b053bcdea52dc7394d28fdd6de4ff98f0c4a4a4b92bf3b1b0d7a9176306c extends Twig_Template
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
        $__internal_889ac4d4cce02c15e8390b4d6986c3bf6feada4b6afefadfc6a9f60d7626afd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889ac4d4cce02c15e8390b4d6986c3bf6feada4b6afefadfc6a9f60d7626afd7->enter($__internal_889ac4d4cce02c15e8390b4d6986c3bf6feada4b6afefadfc6a9f60d7626afd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_889ac4d4cce02c15e8390b4d6986c3bf6feada4b6afefadfc6a9f60d7626afd7->leave($__internal_889ac4d4cce02c15e8390b4d6986c3bf6feada4b6afefadfc6a9f60d7626afd7_prof);

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
", "CongresoAdminBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\AdminBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
