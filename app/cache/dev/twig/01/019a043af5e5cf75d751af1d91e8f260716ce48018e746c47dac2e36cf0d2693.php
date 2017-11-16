<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b32aeecb9087488d343927ac7c0b74a08980a2da1b65b406071e9056fd065ddd extends Twig_Template
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
        $__internal_b2ca93eff486510cefe3c2634718c7f191a88fae16d91a39cf4d3a4b0bbfceae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ca93eff486510cefe3c2634718c7f191a88fae16d91a39cf4d3a4b0bbfceae->enter($__internal_b2ca93eff486510cefe3c2634718c7f191a88fae16d91a39cf4d3a4b0bbfceae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b2ca93eff486510cefe3c2634718c7f191a88fae16d91a39cf4d3a4b0bbfceae->leave($__internal_b2ca93eff486510cefe3c2634718c7f191a88fae16d91a39cf4d3a4b0bbfceae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
