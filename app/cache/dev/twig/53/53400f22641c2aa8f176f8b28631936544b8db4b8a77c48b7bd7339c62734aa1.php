<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a29fc25e3cfef5868f2ecc758eb36fce680eee09784ca7e8289c0bbc1c4a0c30 extends Twig_Template
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
        $__internal_acf4f7be784f1e4a57bd0c5e54c2f4849d29ca037097702211f15a92e1467dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf4f7be784f1e4a57bd0c5e54c2f4849d29ca037097702211f15a92e1467dbe->enter($__internal_acf4f7be784f1e4a57bd0c5e54c2f4849d29ca037097702211f15a92e1467dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_acf4f7be784f1e4a57bd0c5e54c2f4849d29ca037097702211f15a92e1467dbe->leave($__internal_acf4f7be784f1e4a57bd0c5e54c2f4849d29ca037097702211f15a92e1467dbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
