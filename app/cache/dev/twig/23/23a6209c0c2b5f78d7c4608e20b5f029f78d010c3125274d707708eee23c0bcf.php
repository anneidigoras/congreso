<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f648599efe1454a4846fcc31202338dc7d8145f182c0582fba9ff331283071df extends Twig_Template
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
        $__internal_3ae1cb5d617ca9358490e95a45bc4544e8522c81e4da81453b693f3d77934f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae1cb5d617ca9358490e95a45bc4544e8522c81e4da81453b693f3d77934f54->enter($__internal_3ae1cb5d617ca9358490e95a45bc4544e8522c81e4da81453b693f3d77934f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3ae1cb5d617ca9358490e95a45bc4544e8522c81e4da81453b693f3d77934f54->leave($__internal_3ae1cb5d617ca9358490e95a45bc4544e8522c81e4da81453b693f3d77934f54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
