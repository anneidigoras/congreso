<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_049ce523ac97f7a7822500990d0e0d7f6b100d90941d5e5a14ce7baab6e9cfc0 extends Twig_Template
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
        $__internal_c0c5182a33842ab4f2ffb2c5429cfa6ff2d2bbe0c6daab4c86b45873c1c6c4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c5182a33842ab4f2ffb2c5429cfa6ff2d2bbe0c6daab4c86b45873c1c6c4b2->enter($__internal_c0c5182a33842ab4f2ffb2c5429cfa6ff2d2bbe0c6daab4c86b45873c1c6c4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c0c5182a33842ab4f2ffb2c5429cfa6ff2d2bbe0c6daab4c86b45873c1c6c4b2->leave($__internal_c0c5182a33842ab4f2ffb2c5429cfa6ff2d2bbe0c6daab4c86b45873c1c6c4b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
