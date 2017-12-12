<?php

/* @CongresoCongreso/Congreso/showAjax.html.twig */
class __TwigTemplate_6bede9d25add7edb9f06ad13203f79f5ca26f50c9651a4d3dbbbb158bce90a4c extends Twig_Template
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
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? null), "info", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/showAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CongresoCongreso/Congreso/showAjax.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\showAjax.html.twig");
    }
}
