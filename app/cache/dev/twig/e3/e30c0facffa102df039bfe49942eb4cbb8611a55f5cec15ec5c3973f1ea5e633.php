<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_d68212891ee6b69b202e83148bac723a0b7e825db22647e698a30fc356009cc7 extends Twig_Template
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
        $__internal_49c600e6c2d5a83b195d6f6e66eaf74f6e74ada943cb97831f98537e36bc61e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c600e6c2d5a83b195d6f6e66eaf74f6e74ada943cb97831f98537e36bc61e5->enter($__internal_49c600e6c2d5a83b195d6f6e66eaf74f6e74ada943cb97831f98537e36bc61e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_49c600e6c2d5a83b195d6f6e66eaf74f6e74ada943cb97831f98537e36bc61e5->leave($__internal_49c600e6c2d5a83b195d6f6e66eaf74f6e74ada943cb97831f98537e36bc61e5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
", "EasyAdminBundle:default:label_null.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/label_null.html.twig");
    }
}
