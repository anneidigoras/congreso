<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_c6397bc65fd41207b14a46fc6d7c64bab47209356d5dc7897b8fb3641e2c2d94 extends Twig_Template
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
        $__internal_5c59a940038e883b37c6f68fd2e306c9a64d9c8d7a4bd00a26d5cf75d151c5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c59a940038e883b37c6f68fd2e306c9a64d9c8d7a4bd00a26d5cf75d151c5f5->enter($__internal_5c59a940038e883b37c6f68fd2e306c9a64d9c8d7a4bd00a26d5cf75d151c5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["filename"] ?? $this->getContext($context, "filename"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_5c59a940038e883b37c6f68fd2e306c9a64d9c8d7a4bd00a26d5cf75d151c5f5->leave($__internal_5c59a940038e883b37c6f68fd2e306c9a64d9c8d7a4bd00a26d5cf75d151c5f5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_file.html.twig");
    }
}
