<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_84b769fc3093c41789e8074ef7aafac1ed99e95d2155fe52f21b975c118da4c8 extends Twig_Template
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
        $__internal_c7d281c0ceb1e5aa8626b4f4d247c78b71aa6e72714011bcddf7e9b923845d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d281c0ceb1e5aa8626b4f4d247c78b71aa6e72714011bcddf7e9b923845d8a->enter($__internal_c7d281c0ceb1e5aa8626b4f4d247c78b71aa6e72714011bcddf7e9b923845d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c7d281c0ceb1e5aa8626b4f4d247c78b71aa6e72714011bcddf7e9b923845d8a->leave($__internal_c7d281c0ceb1e5aa8626b4f4d247c78b71aa6e72714011bcddf7e9b923845d8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
