<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_9d73cd9040d04253693a58ac5651618921b6d05eebd7d6a9e14a5e91d2fd468b extends Twig_Template
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
        $__internal_2824ea9ef189af088802aa9fab1a485409bd5da8ea74e79aba3aa421e8d65c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2824ea9ef189af088802aa9fab1a485409bd5da8ea74e79aba3aa421e8d65c46->enter($__internal_2824ea9ef189af088802aa9fab1a485409bd5da8ea74e79aba3aa421e8d65c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_2824ea9ef189af088802aa9fab1a485409bd5da8ea74e79aba3aa421e8d65c46->leave($__internal_2824ea9ef189af088802aa9fab1a485409bd5da8ea74e79aba3aa421e8d65c46_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
", "EasyAdminBundle:default:field_object.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_object.html.twig");
    }
}
