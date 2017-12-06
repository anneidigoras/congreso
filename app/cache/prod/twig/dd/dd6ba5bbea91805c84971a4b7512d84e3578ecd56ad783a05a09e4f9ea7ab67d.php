<?php

/* @CongresoCongreso/Congreso/fecha.php */
class __TwigTemplate_71bd7840697c3892dff2e6dbf606a468978932132f4b6b9a79152e6ce458dfa8 extends Twig_Template
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
        // line 1
        echo "<?php
  header(\"Cache-Control: no-cache\"); 
  echo date(\$_POST['formato']);
?>

";
    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/fecha.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CongresoCongreso/Congreso/fecha.php", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\fecha.php");
    }
}
