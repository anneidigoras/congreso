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
        $__internal_bdd0fcdf51f8302b3498a617b6212d2fe88f7474c5f398844040c3725406d5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd0fcdf51f8302b3498a617b6212d2fe88f7474c5f398844040c3725406d5c3->enter($__internal_bdd0fcdf51f8302b3498a617b6212d2fe88f7474c5f398844040c3725406d5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bdd0fcdf51f8302b3498a617b6212d2fe88f7474c5f398844040c3725406d5c3->leave($__internal_bdd0fcdf51f8302b3498a617b6212d2fe88f7474c5f398844040c3725406d5c3_prof);

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
