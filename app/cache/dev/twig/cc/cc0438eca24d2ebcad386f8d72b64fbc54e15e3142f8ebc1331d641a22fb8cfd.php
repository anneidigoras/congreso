<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_72f4f79ef830f3cadeb0a1d09504fa34f33bea51151a0ce0b0ede9de249ca9c8 extends Twig_Template
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
        $__internal_83254e4d93910f0b7da7b2e1dccd9051c18d7bd856b9f6b1f97b0d3fcc10db1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83254e4d93910f0b7da7b2e1dccd9051c18d7bd856b9f6b1f97b0d3fcc10db1d->enter($__internal_83254e4d93910f0b7da7b2e1dccd9051c18d7bd856b9f6b1f97b0d3fcc10db1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_83254e4d93910f0b7da7b2e1dccd9051c18d7bd856b9f6b1f97b0d3fcc10db1d->leave($__internal_83254e4d93910f0b7da7b2e1dccd9051c18d7bd856b9f6b1f97b0d3fcc10db1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
