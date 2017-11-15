<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee854cef16eb21a91a1339eb0438b332191416acd527c5b9a1667dfe716d7173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee854cef16eb21a91a1339eb0438b332191416acd527c5b9a1667dfe716d7173->enter($__internal_ee854cef16eb21a91a1339eb0438b332191416acd527c5b9a1667dfe716d7173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee854cef16eb21a91a1339eb0438b332191416acd527c5b9a1667dfe716d7173->leave($__internal_ee854cef16eb21a91a1339eb0438b332191416acd527c5b9a1667dfe716d7173_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_696a1462813217f1077623fda9ccae7421d2df73579c3807e863cf6cca548722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696a1462813217f1077623fda9ccae7421d2df73579c3807e863cf6cca548722->enter($__internal_696a1462813217f1077623fda9ccae7421d2df73579c3807e863cf6cca548722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_696a1462813217f1077623fda9ccae7421d2df73579c3807e863cf6cca548722->leave($__internal_696a1462813217f1077623fda9ccae7421d2df73579c3807e863cf6cca548722_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_412bf4670ce25d00b193b69c06ffce4ef7f429ecddf8b8cebabd6c881e0ed0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412bf4670ce25d00b193b69c06ffce4ef7f429ecddf8b8cebabd6c881e0ed0dd->enter($__internal_412bf4670ce25d00b193b69c06ffce4ef7f429ecddf8b8cebabd6c881e0ed0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_412bf4670ce25d00b193b69c06ffce4ef7f429ecddf8b8cebabd6c881e0ed0dd->leave($__internal_412bf4670ce25d00b193b69c06ffce4ef7f429ecddf8b8cebabd6c881e0ed0dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89a5f6d869e1d263e809b88080481b39ba0e571c95452219e480ba97bdd7fa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a5f6d869e1d263e809b88080481b39ba0e571c95452219e480ba97bdd7fa35->enter($__internal_89a5f6d869e1d263e809b88080481b39ba0e571c95452219e480ba97bdd7fa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89a5f6d869e1d263e809b88080481b39ba0e571c95452219e480ba97bdd7fa35->leave($__internal_89a5f6d869e1d263e809b88080481b39ba0e571c95452219e480ba97bdd7fa35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
