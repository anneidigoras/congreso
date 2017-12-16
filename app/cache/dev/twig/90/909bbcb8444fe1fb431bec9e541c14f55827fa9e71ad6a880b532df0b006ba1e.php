<?php

/* @CongresoCongreso/Track/list.html.twig */
class __TwigTemplate_1e42ab424d54261d8345c48fadded75e7f3c7ebf5b5409f0467bee16d95c4d5c extends Twig_Template
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
        $__internal_140daf0f93975f30e142f1d468f3e28e86355677881fcff5536b2f3ebc43cd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140daf0f93975f30e142f1d468f3e28e86355677881fcff5536b2f3ebc43cd0c->enter($__internal_140daf0f93975f30e142f1d468f3e28e86355677881fcff5536b2f3ebc43cd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Track/list.html.twig"));

        // line 2
        echo "
<p class=\"continue\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "campo", array()), "html", null, true);
        echo "</a></p>
";
        
        $__internal_140daf0f93975f30e142f1d468f3e28e86355677881fcff5536b2f3ebc43cd0c->leave($__internal_140daf0f93975f30e142f1d468f3e28e86355677881fcff5536b2f3ebc43cd0c_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Track/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Track/list.html.twig #}

<p class=\"continue\"><a href=\"{{ path('congreso_track_arttrac', { 'id': track.id }) }}\">{{ track.campo }}</a></p>
", "@CongresoCongreso/Track/list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Track\\list.html.twig");
    }
}
