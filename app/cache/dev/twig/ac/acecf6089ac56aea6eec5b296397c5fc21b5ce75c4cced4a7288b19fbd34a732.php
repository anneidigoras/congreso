<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_c0a47770b13bfe6d02060758a54a98092b4ddcf8f061b8378b497e064e719e07 extends Twig_Template
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
        $__internal_38864b0df0c1510960c4e47a08a4e17d586cdd8eb8dbb24e2c58661a0e69b724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38864b0df0c1510960c4e47a08a4e17d586cdd8eb8dbb24e2c58661a0e69b724->enter($__internal_38864b0df0c1510960c4e47a08a4e17d586cdd8eb8dbb24e2c58661a0e69b724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_38864b0df0c1510960c4e47a08a4e17d586cdd8eb8dbb24e2c58661a0e69b724->leave($__internal_38864b0df0c1510960c4e47a08a4e17d586cdd8eb8dbb24e2c58661a0e69b724_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "@EasyAdmin/default/label_inaccessible.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\label_inaccessible.html.twig");
    }
}
