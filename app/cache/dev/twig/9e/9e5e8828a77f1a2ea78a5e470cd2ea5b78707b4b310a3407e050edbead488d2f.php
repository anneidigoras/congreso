<?php

/* @CongresoCongreso/Congreso/fecha.php */
class __TwigTemplate_e2c9e022d9f4baf7ab313cee569a71ff841c9782db5ba30aa5cf82985767dae8 extends Twig_Template
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
        $__internal_a0307060595025fdf012b6760f94a68c403619a34a856f2e3b8b85d326b1856f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0307060595025fdf012b6760f94a68c403619a34a856f2e3b8b85d326b1856f->enter($__internal_a0307060595025fdf012b6760f94a68c403619a34a856f2e3b8b85d326b1856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/fecha.php"));

        // line 1
        echo "<?php
  header(\"Cache-Control: no-cache\"); 
  echo date(\$_POST['formato']);
?>

";
        
        $__internal_a0307060595025fdf012b6760f94a68c403619a34a856f2e3b8b85d326b1856f->leave($__internal_a0307060595025fdf012b6760f94a68c403619a34a856f2e3b8b85d326b1856f_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/fecha.php";
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
        return new Twig_Source("<?php
  header(\"Cache-Control: no-cache\"); 
  echo date(\$_POST['formato']);
?>

", "@CongresoCongreso/Congreso/fecha.php", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\fecha.php");
    }
}
