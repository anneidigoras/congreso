<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_f3ae4349d6f83565a6ccff27abf097f6938bb55b401dffad888812ab6a332e96 extends Twig_Template
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
        $__internal_216cce7bc23de33170ff0aefdb55f0c8786f5a4c8cbfa987b32dda0b9e737439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216cce7bc23de33170ff0aefdb55f0c8786f5a4c8cbfa987b32dda0b9e737439->enter($__internal_216cce7bc23de33170ff0aefdb55f0c8786f5a4c8cbfa987b32dda0b9e737439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_216cce7bc23de33170ff0aefdb55f0c8786f5a4c8cbfa987b32dda0b9e737439->leave($__internal_216cce7bc23de33170ff0aefdb55f0c8786f5a4c8cbfa987b32dda0b9e737439_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_tel.html.twig");
    }
}
