<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_0ff3e7148884db79966d1d92c0e83262eceabd20f1f0c790b94976f50b6b9bc0 extends Twig_Template
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
        $__internal_6e315ded3cf40f3a75300edc0c515f144ab24d01deef5b613fc524aba0f23857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e315ded3cf40f3a75300edc0c515f144ab24d01deef5b613fc524aba0f23857->enter($__internal_6e315ded3cf40f3a75300edc0c515f144ab24d01deef5b613fc524aba0f23857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_6e315ded3cf40f3a75300edc0c515f144ab24d01deef5b613fc524aba0f23857->leave($__internal_6e315ded3cf40f3a75300edc0c515f144ab24d01deef5b613fc524aba0f23857_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_empty.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\label_empty.html.twig");
    }
}
