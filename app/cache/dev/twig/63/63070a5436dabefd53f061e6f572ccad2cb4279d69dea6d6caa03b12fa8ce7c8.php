<?php

/* @EasyAdmin/default/field_object.html.twig */
class __TwigTemplate_2f2c0fc8ffd81c67dc3221f0c98fe80736840474b24e8097c52d1a578ac37211 extends Twig_Template
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
        $__internal_5e78eb79974bbc4cb344fd40b6ea09b6184994f0c40bc6aac5a92a09ab2aa960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e78eb79974bbc4cb344fd40b6ea09b6184994f0c40bc6aac5a92a09ab2aa960->enter($__internal_5e78eb79974bbc4cb344fd40b6ea09b6184994f0c40bc6aac5a92a09ab2aa960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_5e78eb79974bbc4cb344fd40b6ea09b6184994f0c40bc6aac5a92a09ab2aa960->leave($__internal_5e78eb79974bbc4cb344fd40b6ea09b6184994f0c40bc6aac5a92a09ab2aa960_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/field_object.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_object.html.twig");
    }
}
