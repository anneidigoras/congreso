<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_55df709132766dbf6088b85b498fc7385d2c18995ba0d4df6e422a0f7b072995 extends Twig_Template
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
        $__internal_0f685a47c3d2bb40b1d7f02590469d065448342cea0f0d52c2d5b113435c9b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f685a47c3d2bb40b1d7f02590469d065448342cea0f0d52c2d5b113435c9b43->enter($__internal_0f685a47c3d2bb40b1d7f02590469d065448342cea0f0d52c2d5b113435c9b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0f685a47c3d2bb40b1d7f02590469d065448342cea0f0d52c2d5b113435c9b43->leave($__internal_0f685a47c3d2bb40b1d7f02590469d065448342cea0f0d52c2d5b113435c9b43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
