<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_76f343afe97eca32f3f1cdd1c1699f9d2ce299f2a84a781d46fe0c3de7df51b8 extends Twig_Template
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
        $__internal_8efcf0150b6de27bc1a94249f6b62f68301ca359dfdcf8ae1be49c3d9590b7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efcf0150b6de27bc1a94249f6b62f68301ca359dfdcf8ae1be49c3d9590b7df->enter($__internal_8efcf0150b6de27bc1a94249f6b62f68301ca359dfdcf8ae1be49c3d9590b7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8efcf0150b6de27bc1a94249f6b62f68301ca359dfdcf8ae1be49c3d9590b7df->leave($__internal_8efcf0150b6de27bc1a94249f6b62f68301ca359dfdcf8ae1be49c3d9590b7df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
