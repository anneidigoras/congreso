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
        $__internal_cd0669996fe2fbb94c64fb9fc286d99f7c9b27895ebe70009144e809f3b169eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0669996fe2fbb94c64fb9fc286d99f7c9b27895ebe70009144e809f3b169eb->enter($__internal_cd0669996fe2fbb94c64fb9fc286d99f7c9b27895ebe70009144e809f3b169eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_cd0669996fe2fbb94c64fb9fc286d99f7c9b27895ebe70009144e809f3b169eb->leave($__internal_cd0669996fe2fbb94c64fb9fc286d99f7c9b27895ebe70009144e809f3b169eb_prof);

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
