<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c46e0b8a4e5458e0367c0fb4900ab21881a3f1480f98bf8daa81018a70a2a2cf extends Twig_Template
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
        $__internal_7ded769949eacb20d74630ebb319e432f6b7e96c3374dcadbf6740d205a31e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded769949eacb20d74630ebb319e432f6b7e96c3374dcadbf6740d205a31e45->enter($__internal_7ded769949eacb20d74630ebb319e432f6b7e96c3374dcadbf6740d205a31e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7ded769949eacb20d74630ebb319e432f6b7e96c3374dcadbf6740d205a31e45->leave($__internal_7ded769949eacb20d74630ebb319e432f6b7e96c3374dcadbf6740d205a31e45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
