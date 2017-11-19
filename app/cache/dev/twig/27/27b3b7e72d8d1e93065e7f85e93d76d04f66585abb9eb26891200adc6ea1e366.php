<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_673ecf309ce9673f92ac8e50a4ee1698b0dd108b427c7dfc76237f117e1565cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76d47fa4a251bff5a282ca01727078a440ddd84f1d8c1ba8a1b06f6fb9c65518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d47fa4a251bff5a282ca01727078a440ddd84f1d8c1ba8a1b06f6fb9c65518->enter($__internal_76d47fa4a251bff5a282ca01727078a440ddd84f1d8c1ba8a1b06f6fb9c65518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_76d47fa4a251bff5a282ca01727078a440ddd84f1d8c1ba8a1b06f6fb9c65518->leave($__internal_76d47fa4a251bff5a282ca01727078a440ddd84f1d8c1ba8a1b06f6fb9c65518_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0c1a59ff4f77e9cec0fc0105044248725a398497114b78d29097e05400332d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c1a59ff4f77e9cec0fc0105044248725a398497114b78d29097e05400332d5->enter($__internal_a0c1a59ff4f77e9cec0fc0105044248725a398497114b78d29097e05400332d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a0c1a59ff4f77e9cec0fc0105044248725a398497114b78d29097e05400332d5->leave($__internal_a0c1a59ff4f77e9cec0fc0105044248725a398497114b78d29097e05400332d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
