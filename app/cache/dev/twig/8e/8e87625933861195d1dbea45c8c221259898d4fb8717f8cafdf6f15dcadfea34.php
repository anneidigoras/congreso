<?php

/* @CongresoCongreso/Comment/form.html.twig */
class __TwigTemplate_b0736a15c21769d209010fc6bbc26001df17c39d5997651c6fe476a25a035308 extends Twig_Template
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
        $__internal_a44474ceadbf1d24ea93713441df7d43413871794b7ad6a4e4ef3ebdfc9c9c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44474ceadbf1d24ea93713441df7d43413871794b7ad6a4e4ef3ebdfc9c9c54->enter($__internal_a44474ceadbf1d24ea93713441df7d43413871794b7ad6a4e4ef3ebdfc9c9c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/form.html.twig"));

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
        
        $__internal_a44474ceadbf1d24ea93713441df7d43413871794b7ad6a4e4ef3ebdfc9c9c54->leave($__internal_a44474ceadbf1d24ea93713441df7d43413871794b7ad6a4e4ef3ebdfc9c9c54_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Comment/form.html.twig";
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
", "@CongresoCongreso/Comment/form.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Comment\\form.html.twig");
    }
}
