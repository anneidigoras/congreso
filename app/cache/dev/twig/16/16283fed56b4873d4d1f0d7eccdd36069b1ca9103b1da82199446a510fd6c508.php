<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_93f16091f2bccf4926b89df0de6a40223192bb7948e2e9fd0bee4fd92dd457fd extends Twig_Template
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
        $__internal_16e7d2c05acf23a45df75028803c102a3e13a27dfad9cdfb6bcc25423b7747fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e7d2c05acf23a45df75028803c102a3e13a27dfad9cdfb6bcc25423b7747fd->enter($__internal_16e7d2c05acf23a45df75028803c102a3e13a27dfad9cdfb6bcc25423b7747fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_16e7d2c05acf23a45df75028803c102a3e13a27dfad9cdfb6bcc25423b7747fd->leave($__internal_16e7d2c05acf23a45df75028803c102a3e13a27dfad9cdfb6bcc25423b7747fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
