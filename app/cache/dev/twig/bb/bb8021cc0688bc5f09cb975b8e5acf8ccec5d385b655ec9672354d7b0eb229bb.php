<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_1cb318250d342d9498226bd7c30ce86c7eee9f44d324229bd46c796832d41d45 extends Twig_Template
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
        $__internal_9a0aa623429e538776f771123d2e1581d2e6b6a5d8480a9ab7dd3a89dc1ebfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0aa623429e538776f771123d2e1581d2e6b6a5d8480a9ab7dd3a89dc1ebfca->enter($__internal_9a0aa623429e538776f771123d2e1581d2e6b6a5d8480a9ab7dd3a89dc1ebfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_9a0aa623429e538776f771123d2e1581d2e6b6a5d8480a9ab7dd3a89dc1ebfca->leave($__internal_9a0aa623429e538776f771123d2e1581d2e6b6a5d8480a9ab7dd3a89dc1ebfca_prof);

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
