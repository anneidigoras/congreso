<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_880ef13c2e6c4c1d905a94cf2592981490fb55af3b3bdd9a9b1ebd892cc89387 extends Twig_Template
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
        $__internal_7d8b5aed53e8e2c717794455dcb60e9503ada65d8121be1a4e7ce808e4573b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8b5aed53e8e2c717794455dcb60e9503ada65d8121be1a4e7ce808e4573b10->enter($__internal_7d8b5aed53e8e2c717794455dcb60e9503ada65d8121be1a4e7ce808e4573b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7d8b5aed53e8e2c717794455dcb60e9503ada65d8121be1a4e7ce808e4573b10->leave($__internal_7d8b5aed53e8e2c717794455dcb60e9503ada65d8121be1a4e7ce808e4573b10_prof);

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
