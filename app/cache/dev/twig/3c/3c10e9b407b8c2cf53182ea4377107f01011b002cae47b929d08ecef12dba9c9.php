<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9764227d5ded63f3725b8acb81b0cce965bc5b46f69eb3c91ecfef635fc0d66f extends Twig_Template
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
        $__internal_7ccd156e456c9f75da54932e152875e4bedae645cad676a50fa0e8487c2ca36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccd156e456c9f75da54932e152875e4bedae645cad676a50fa0e8487c2ca36c->enter($__internal_7ccd156e456c9f75da54932e152875e4bedae645cad676a50fa0e8487c2ca36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7ccd156e456c9f75da54932e152875e4bedae645cad676a50fa0e8487c2ca36c->leave($__internal_7ccd156e456c9f75da54932e152875e4bedae645cad676a50fa0e8487c2ca36c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}