<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5874258645544b1b28a47887f9a48d95f7d8c54dbc8290bae882d2203642a22b extends Twig_Template
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
        $__internal_e1a0ff262000c15084c0bc35c2d0a7e6b2f8a42e152b8c06b4b0d95ebe015ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a0ff262000c15084c0bc35c2d0a7e6b2f8a42e152b8c06b4b0d95ebe015ea9->enter($__internal_e1a0ff262000c15084c0bc35c2d0a7e6b2f8a42e152b8c06b4b0d95ebe015ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e1a0ff262000c15084c0bc35c2d0a7e6b2f8a42e152b8c06b4b0d95ebe015ea9->leave($__internal_e1a0ff262000c15084c0bc35c2d0a7e6b2f8a42e152b8c06b4b0d95ebe015ea9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
