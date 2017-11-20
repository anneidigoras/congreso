<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_545adaa793c6bab4c4b190e50f5cef6801e71912efd073087ec5b28f6dde29cf extends Twig_Template
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
        $__internal_47d7de4adcd9e05bd18fbc0bdeec706f8fc57f42e0871ae81b390c4e42c66808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d7de4adcd9e05bd18fbc0bdeec706f8fc57f42e0871ae81b390c4e42c66808->enter($__internal_47d7de4adcd9e05bd18fbc0bdeec706f8fc57f42e0871ae81b390c4e42c66808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_47d7de4adcd9e05bd18fbc0bdeec706f8fc57f42e0871ae81b390c4e42c66808->leave($__internal_47d7de4adcd9e05bd18fbc0bdeec706f8fc57f42e0871ae81b390c4e42c66808_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
