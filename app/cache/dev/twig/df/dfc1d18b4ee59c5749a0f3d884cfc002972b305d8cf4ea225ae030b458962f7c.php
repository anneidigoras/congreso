<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7f46a89c9e80a2dea438a5af49b703d8b62e8687933a737e6db175dd9a0c41ea extends Twig_Template
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
        $__internal_d2cae5ded5545da5059f410728ffa1df4c0419378e9a2be18763d1372ee98835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cae5ded5545da5059f410728ffa1df4c0419378e9a2be18763d1372ee98835->enter($__internal_d2cae5ded5545da5059f410728ffa1df4c0419378e9a2be18763d1372ee98835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d2cae5ded5545da5059f410728ffa1df4c0419378e9a2be18763d1372ee98835->leave($__internal_d2cae5ded5545da5059f410728ffa1df4c0419378e9a2be18763d1372ee98835_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
