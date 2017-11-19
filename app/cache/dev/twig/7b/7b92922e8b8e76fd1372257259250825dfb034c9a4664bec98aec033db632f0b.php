<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6089b51c445ce91b696adfe564e97c152be3c2500c4059eb176307b142986bb1 extends Twig_Template
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
        $__internal_9dcf56cd58cbbd00dd9e7938951d1a026dd78d6ccc5f3ed62934e1c91f0b9e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcf56cd58cbbd00dd9e7938951d1a026dd78d6ccc5f3ed62934e1c91f0b9e78->enter($__internal_9dcf56cd58cbbd00dd9e7938951d1a026dd78d6ccc5f3ed62934e1c91f0b9e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9dcf56cd58cbbd00dd9e7938951d1a026dd78d6ccc5f3ed62934e1c91f0b9e78->leave($__internal_9dcf56cd58cbbd00dd9e7938951d1a026dd78d6ccc5f3ed62934e1c91f0b9e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
