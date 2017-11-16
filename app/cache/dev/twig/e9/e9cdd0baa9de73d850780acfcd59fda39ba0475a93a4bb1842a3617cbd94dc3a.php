<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f141eb1e86b072731be90c05b7295252f22a1560d0a5d7e76efd4e6e06ab87a9 extends Twig_Template
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
        $__internal_fbfb99a400cb1e94cfd1052c9626406f6b2ccb3a4a77230ee95fa85b16b3cfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfb99a400cb1e94cfd1052c9626406f6b2ccb3a4a77230ee95fa85b16b3cfff->enter($__internal_fbfb99a400cb1e94cfd1052c9626406f6b2ccb3a4a77230ee95fa85b16b3cfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fbfb99a400cb1e94cfd1052c9626406f6b2ccb3a4a77230ee95fa85b16b3cfff->leave($__internal_fbfb99a400cb1e94cfd1052c9626406f6b2ccb3a4a77230ee95fa85b16b3cfff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
