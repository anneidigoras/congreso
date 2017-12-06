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
        $__internal_d34cdda8d3659909502ec98b8e5f58c9bb7cb580639e942e4230592c218100c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34cdda8d3659909502ec98b8e5f58c9bb7cb580639e942e4230592c218100c2->enter($__internal_d34cdda8d3659909502ec98b8e5f58c9bb7cb580639e942e4230592c218100c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/fecha.php"));

        // line 1
        echo "<?php
  header(\"Cache-Control: no-cache\"); 
  echo date(\$_POST['formato']);
?>

";
        
        $__internal_d34cdda8d3659909502ec98b8e5f58c9bb7cb580639e942e4230592c218100c2->leave($__internal_d34cdda8d3659909502ec98b8e5f58c9bb7cb580639e942e4230592c218100c2_prof);

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
