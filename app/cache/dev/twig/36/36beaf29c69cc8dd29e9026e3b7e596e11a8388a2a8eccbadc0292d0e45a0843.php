<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c4acda108b424e7b8ce1717b8a82658bb21cff2e737bfa8f7cc54fbd8261c0b4 extends Twig_Template
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
        $__internal_f259ec8f4024b2aa8d3ad7196f60b219a853bd73a67a0e348a1322fe679235d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f259ec8f4024b2aa8d3ad7196f60b219a853bd73a67a0e348a1322fe679235d6->enter($__internal_f259ec8f4024b2aa8d3ad7196f60b219a853bd73a67a0e348a1322fe679235d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_f259ec8f4024b2aa8d3ad7196f60b219a853bd73a67a0e348a1322fe679235d6->leave($__internal_f259ec8f4024b2aa8d3ad7196f60b219a853bd73a67a0e348a1322fe679235d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
