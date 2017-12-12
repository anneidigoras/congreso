<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_09570b33813551fe564e788bfd3dc193122e53efd893352e1ae54a9ec992d82a extends Twig_Template
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
        $__internal_7c7bb76a659a52af4f29b817dfd6c8b44c164f81ecc03977f951772f4df8cc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7bb76a659a52af4f29b817dfd6c8b44c164f81ecc03977f951772f4df8cc67->enter($__internal_7c7bb76a659a52af4f29b817dfd6c8b44c164f81ecc03977f951772f4df8cc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_7c7bb76a659a52af4f29b817dfd6c8b44c164f81ecc03977f951772f4df8cc67->leave($__internal_7c7bb76a659a52af4f29b817dfd6c8b44c164f81ecc03977f951772f4df8cc67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
