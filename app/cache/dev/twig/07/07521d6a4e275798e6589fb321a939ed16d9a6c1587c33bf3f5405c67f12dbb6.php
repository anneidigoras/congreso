<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_1c2dfa00878d8ed25c027d14f79a5772929266f9f936545211c2763536f4bdc7 extends Twig_Template
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
        $__internal_ed7200746a7df18fe5cab0efc163e165b8934ac137838af58d18e549e256b9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7200746a7df18fe5cab0efc163e165b8934ac137838af58d18e549e256b9cd->enter($__internal_ed7200746a7df18fe5cab0efc163e165b8934ac137838af58d18e549e256b9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_ed7200746a7df18fe5cab0efc163e165b8934ac137838af58d18e549e256b9cd->leave($__internal_ed7200746a7df18fe5cab0efc163e165b8934ac137838af58d18e549e256b9cd_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\label_null.html.twig");
    }
}
