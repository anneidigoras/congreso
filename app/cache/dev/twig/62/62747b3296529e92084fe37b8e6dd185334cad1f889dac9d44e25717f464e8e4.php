<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1702c812ecef6b6aa971837c089f4f729d904517d5057f28f68bd2fe41cfc005 extends Twig_Template
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
        $__internal_5de764de8e6fb8df00b1d0928716e6f9fa5f53a3a36c3c6d47f352ad2d826ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de764de8e6fb8df00b1d0928716e6f9fa5f53a3a36c3c6d47f352ad2d826ac3->enter($__internal_5de764de8e6fb8df00b1d0928716e6f9fa5f53a3a36c3c6d47f352ad2d826ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_5de764de8e6fb8df00b1d0928716e6f9fa5f53a3a36c3c6d47f352ad2d826ac3->leave($__internal_5de764de8e6fb8df00b1d0928716e6f9fa5f53a3a36c3c6d47f352ad2d826ac3_prof);

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
