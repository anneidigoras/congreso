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
        $__internal_fbe4800d94fed05a199cc33c5261265d08b7d250252ca64ddf0a326960882ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe4800d94fed05a199cc33c5261265d08b7d250252ca64ddf0a326960882ce6->enter($__internal_fbe4800d94fed05a199cc33c5261265d08b7d250252ca64ddf0a326960882ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fbe4800d94fed05a199cc33c5261265d08b7d250252ca64ddf0a326960882ce6->leave($__internal_fbe4800d94fed05a199cc33c5261265d08b7d250252ca64ddf0a326960882ce6_prof);

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
