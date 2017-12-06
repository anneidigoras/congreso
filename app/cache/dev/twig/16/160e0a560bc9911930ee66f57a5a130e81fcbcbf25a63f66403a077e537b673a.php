<?php

/* CongresoCongresoBundle:Default:index.html.twig */
class __TwigTemplate_77b4644a5209544383caede60838eca4c036bf654ede2de782de745b909ce08f extends Twig_Template
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
        $__internal_5df62aa7ff5ef7458436978038f3d44e1261a9dcf1baee3c302b10d55c75e667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df62aa7ff5ef7458436978038f3d44e1261a9dcf1baee3c302b10d55c75e667->enter($__internal_5df62aa7ff5ef7458436978038f3d44e1261a9dcf1baee3c302b10d55c75e667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_5df62aa7ff5ef7458436978038f3d44e1261a9dcf1baee3c302b10d55c75e667->leave($__internal_5df62aa7ff5ef7458436978038f3d44e1261a9dcf1baee3c302b10d55c75e667_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Default:index.html.twig";
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
", "CongresoCongresoBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Default/index.html.twig");
    }
}
