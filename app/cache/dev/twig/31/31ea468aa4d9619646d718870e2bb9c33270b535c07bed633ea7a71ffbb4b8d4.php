<?php

/* @CongresoCongreso/Congreso/showIng.html.twig */
class __TwigTemplate_9d45b2cb207af5a52d276b3f6bcf5ab5689e27faa3f163bf79c789545b77efdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layoutIng.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ca48d64aea17163c09797b85f5ee18aa65c3fd1cf495efeb5e24c2e7cb1afc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca48d64aea17163c09797b85f5ee18aa65c3fd1cf495efeb5e24c2e7cb1afc5->enter($__internal_6ca48d64aea17163c09797b85f5ee18aa65c3fd1cf495efeb5e24c2e7cb1afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/showIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca48d64aea17163c09797b85f5ee18aa65c3fd1cf495efeb5e24c2e7cb1afc5->leave($__internal_6ca48d64aea17163c09797b85f5ee18aa65c3fd1cf495efeb5e24c2e7cb1afc5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_685bee36088790b2736679700a5e8012bfcd04d9347367f80d3482726115d51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685bee36088790b2736679700a5e8012bfcd04d9347367f80d3482726115d51f->enter($__internal_685bee36088790b2736679700a5e8012bfcd04d9347367f80d3482726115d51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Selected article";
        
        $__internal_685bee36088790b2736679700a5e8012bfcd04d9347367f80d3482726115d51f->leave($__internal_685bee36088790b2736679700a5e8012bfcd04d9347367f80d3482726115d51f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9823eada72c72f4f5e3de21dd9a90b267e64104e5185c035b11264940d176763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9823eada72c72f4f5e3de21dd9a90b267e64104e5185c035b11264940d176763->enter($__internal_9823eada72c72f4f5e3de21dd9a90b267e64104e5185c035b11264940d176763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h4>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Publication date: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 15
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_9823eada72c72f4f5e3de21dd9a90b267e64104e5185c035b11264940d176763->leave($__internal_9823eada72c72f4f5e3de21dd9a90b267e64104e5185c035b11264940d176763_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ede314996c6af8415a8f5606292dd5354e79e1cda042b22a35d5d5071ea80a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ede314996c6af8415a8f5606292dd5354e79e1cda042b22a35d5d5071ea80a5->enter($__internal_1ede314996c6af8415a8f5606292dd5354e79e1cda042b22a35d5d5071ea80a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_1ede314996c6af8415a8f5606292dd5354e79e1cda042b22a35d5d5071ea80a5->leave($__internal_1ede314996c6af8415a8f5606292dd5354e79e1cda042b22a35d5d5071ea80a5_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_deddfa3d428529e546620bcff88ad48042da9f46b1e7e84aa63ca65598a54095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deddfa3d428529e546620bcff88ad48042da9f46b1e7e84aa63ca65598a54095->enter($__internal_deddfa3d428529e546620bcff88ad48042da9f46b1e7e84aa63ca65598a54095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_deddfa3d428529e546620bcff88ad48042da9f46b1e7e84aa63ca65598a54095->leave($__internal_deddfa3d428529e546620bcff88ad48042da9f46b1e7e84aa63ca65598a54095_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_51d6d44da833ebaca31c0a0efe0bcc45caa523082853a4b3e7a3dcb01fbc23b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d6d44da833ebaca31c0a0efe0bcc45caa523082853a4b3e7a3dcb01fbc23b0->enter($__internal_51d6d44da833ebaca31c0a0efe0bcc45caa523082853a4b3e7a3dcb01fbc23b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_51d6d44da833ebaca31c0a0efe0bcc45caa523082853a4b3e7a3dcb01fbc23b0->leave($__internal_51d6d44da833ebaca31c0a0efe0bcc45caa523082853a4b3e7a3dcb01fbc23b0_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ba4cf5d8d6398d317ebc55fe1c8950178e373456c9fba81a1473e322958a0382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4cf5d8d6398d317ebc55fe1c8950178e373456c9fba81a1473e322958a0382->enter($__internal_ba4cf5d8d6398d317ebc55fe1c8950178e373456c9fba81a1473e322958a0382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_ba4cf5d8d6398d317ebc55fe1c8950178e373456c9fba81a1473e322958a0382->leave($__internal_ba4cf5d8d6398d317ebc55fe1c8950178e373456c9fba81a1473e322958a0382_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/showIng.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 40,  153 => 39,  150 => 38,  144 => 37,  136 => 34,  130 => 33,  122 => 30,  120 => 29,  117 => 28,  111 => 27,  102 => 24,  98 => 23,  92 => 22,  82 => 18,  78 => 16,  76 => 15,  68 => 10,  63 => 8,  57 => 6,  51 => 5,  39 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/show.html.twig #}
{% extends \"CongresoCongresoBundle::layoutIng.html.twig\" %}
{% block title %}Selected article{% endblock %}

{% block body %}
\t<h4>{{ articulo.titulo }}</h4>

\t<div class=\"body\">{{ articulo.cuerpo }}</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Publication date: {{ articulo.publicacion |date('d-m-Y') }}</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t{% include 'CongresoCongresoBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'CongresoCongresoBundle:Comment:new', { 'articulo_id': articulo.id } )) }}
    </section>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"{{ asset('css/congreso.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}
<div class=\"tracks\">
{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'tracks': tracks } %}
</div>
{% endblock %}

{% block linea %}
<div class=\"separator\"></div>
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}
</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "@CongresoCongreso/Congreso/showIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\showIng.html.twig");
    }
}
