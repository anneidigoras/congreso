<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c1d79d306fb826b3ee5c32323332ee9778605ff0b610f60372a419d69131209f extends Twig_Template
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
        $__internal_ca91aafc1436ccaf31b0ca3c25b4e080a4a60120fb56ccb5fd82a42366bfd764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca91aafc1436ccaf31b0ca3c25b4e080a4a60120fb56ccb5fd82a42366bfd764->enter($__internal_ca91aafc1436ccaf31b0ca3c25b4e080a4a60120fb56ccb5fd82a42366bfd764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ca91aafc1436ccaf31b0ca3c25b4e080a4a60120fb56ccb5fd82a42366bfd764->leave($__internal_ca91aafc1436ccaf31b0ca3c25b4e080a4a60120fb56ccb5fd82a42366bfd764_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
