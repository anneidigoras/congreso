<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_e2e2d5e341d1ed12ff13061e387e865cb5533282b9420d1d8577038d3670b835 extends Twig_Template
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
        $__internal_9aa6cbd4fc2003bc4df6d79e3f7a85c40f9c0d5e6dcf23752366be056083d2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa6cbd4fc2003bc4df6d79e3f7a85c40f9c0d5e6dcf23752366be056083d2e2->enter($__internal_9aa6cbd4fc2003bc4df6d79e3f7a85c40f9c0d5e6dcf23752366be056083d2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9aa6cbd4fc2003bc4df6d79e3f7a85c40f9c0d5e6dcf23752366be056083d2e2->leave($__internal_9aa6cbd4fc2003bc4df6d79e3f7a85c40f9c0d5e6dcf23752366be056083d2e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
