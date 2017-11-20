<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_880ef13c2e6c4c1d905a94cf2592981490fb55af3b3bdd9a9b1ebd892cc89387 extends Twig_Template
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
        $__internal_2e26bd6899ae4857180540bf783999fcd15c8b1e3041e010c866f3ca583ef963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e26bd6899ae4857180540bf783999fcd15c8b1e3041e010c866f3ca583ef963->enter($__internal_2e26bd6899ae4857180540bf783999fcd15c8b1e3041e010c866f3ca583ef963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2e26bd6899ae4857180540bf783999fcd15c8b1e3041e010c866f3ca583ef963->leave($__internal_2e26bd6899ae4857180540bf783999fcd15c8b1e3041e010c866f3ca583ef963_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
