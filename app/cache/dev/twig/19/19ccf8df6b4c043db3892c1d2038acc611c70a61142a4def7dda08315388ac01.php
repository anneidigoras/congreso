<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8de038b88c147e207e8a73f264e40ff20b7723494b438e2d7e77f0eee2af4026 extends Twig_Template
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
        $__internal_fb32650afc8eb14961c892f6f573e6f3a0c28b1524f426f7e0e691a1f6980465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb32650afc8eb14961c892f6f573e6f3a0c28b1524f426f7e0e691a1f6980465->enter($__internal_fb32650afc8eb14961c892f6f573e6f3a0c28b1524f426f7e0e691a1f6980465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fb32650afc8eb14961c892f6f573e6f3a0c28b1524f426f7e0e691a1f6980465->leave($__internal_fb32650afc8eb14961c892f6f573e6f3a0c28b1524f426f7e0e691a1f6980465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
