<?php

/* CongresoCongresoBundle:Comment:form.html.twig */
class __TwigTemplate_8b087eba8b005826b176050a560a8e1a05d66c27fa9d0b7047b89c641dc034d3 extends Twig_Template
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
        $__internal_81ef92c2099080739587ec1d051c1b8d851522dd888c11483fcb0d011aabfd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ef92c2099080739587ec1d051c1b8d851522dd888c11483fcb0d011aabfd02->enter($__internal_81ef92c2099080739587ec1d051c1b8d851522dd888c11483fcb0d011aabfd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_comment_create", array("articulo_id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "id", array()))), "html", null, true);
        echo "\" method=\"articulo\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " class=\"congreso\">
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
";
        
        $__internal_81ef92c2099080739587ec1d051c1b8d851522dd888c11483fcb0d011aabfd02->leave($__internal_81ef92c2099080739587ec1d051c1b8d851522dd888c11483fcb0d011aabfd02_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Comment/form.html.twig #}

<form action=\"{{ path('congreso_comment_create', { 'articulo_id' : comment.articulo.id } ) }}\" method=\"articulo\" {{ form_enctype(form) }} class=\"congreso\">
    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
", "CongresoCongresoBundle:Comment:form.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Comment/form.html.twig");
    }
}
