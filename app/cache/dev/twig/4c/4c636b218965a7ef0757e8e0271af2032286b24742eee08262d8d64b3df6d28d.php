<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_63339639420fb7bf4eec04adaf2b0e232994e2cc27fd36ff4fcabcf0da0c14c4 extends Twig_Template
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
        $__internal_0c7dcfb5ce99a973b439d3896a4d2d535bc9ad0b586946d6f95b75ad4dee005c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7dcfb5ce99a973b439d3896a4d2d535bc9ad0b586946d6f95b75ad4dee005c->enter($__internal_0c7dcfb5ce99a973b439d3896a4d2d535bc9ad0b586946d6f95b75ad4dee005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0c7dcfb5ce99a973b439d3896a4d2d535bc9ad0b586946d6f95b75ad4dee005c->leave($__internal_0c7dcfb5ce99a973b439d3896a4d2d535bc9ad0b586946d6f95b75ad4dee005c_prof);

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
