<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_edec34a7ae274b2737e64d1e880b8b7788aef0e586559227ecd4cecf0c57e469 extends Twig_Template
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
        $__internal_3444e90358ff0152ed84ef9d5e70ba139e65200bd46f67ecf1111ecb85500c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3444e90358ff0152ed84ef9d5e70ba139e65200bd46f67ecf1111ecb85500c5a->enter($__internal_3444e90358ff0152ed84ef9d5e70ba139e65200bd46f67ecf1111ecb85500c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3444e90358ff0152ed84ef9d5e70ba139e65200bd46f67ecf1111ecb85500c5a->leave($__internal_3444e90358ff0152ed84ef9d5e70ba139e65200bd46f67ecf1111ecb85500c5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
