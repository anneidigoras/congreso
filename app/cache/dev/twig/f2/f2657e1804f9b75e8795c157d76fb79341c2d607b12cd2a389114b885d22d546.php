<?php

/* CongresoAdminBundle:Default:index.html.twig */
class __TwigTemplate_2a6db36e865cc6c5d09f1534dfe9520134e416e7c531056f1de758b4ed479da6 extends Twig_Template
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
        $__internal_a276a2cd49cc5ec920c7459ee72c9352c895e84ece3500fa73c7d65bc8862c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a276a2cd49cc5ec920c7459ee72c9352c895e84ece3500fa73c7d65bc8862c6c->enter($__internal_a276a2cd49cc5ec920c7459ee72c9352c895e84ece3500fa73c7d65bc8862c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a276a2cd49cc5ec920c7459ee72c9352c895e84ece3500fa73c7d65bc8862c6c->leave($__internal_a276a2cd49cc5ec920c7459ee72c9352c895e84ece3500fa73c7d65bc8862c6c_prof);

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
