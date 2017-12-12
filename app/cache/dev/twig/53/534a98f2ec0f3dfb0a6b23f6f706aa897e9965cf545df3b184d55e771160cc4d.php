<?php

/* default/layout.html.twig */
class __TwigTemplate_d1c51e62866c61f75d85dcc95e341de3a1f7594b4dba98bb040fb629a91d497c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d92f7cfc708cca2704801acddb4c0df4f83dc0ca99c50773dc6893fea1f8611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d92f7cfc708cca2704801acddb4c0df4f83dc0ca99c50773dc6893fea1f8611->enter($__internal_2d92f7cfc708cca2704801acddb4c0df4f83dc0ca99c50773dc6893fea1f8611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        // line 2
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "\t</body>
</html>
";
        
        $__internal_2d92f7cfc708cca2704801acddb4c0df4f83dc0ca99c50773dc6893fea1f8611->leave($__internal_2d92f7cfc708cca2704801acddb4c0df4f83dc0ca99c50773dc6893fea1f8611_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14c2b22ce4a55e2fd6ebff927edc88de83a0959d622e5111101fd423bfa8262c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c2b22ce4a55e2fd6ebff927edc88de83a0959d622e5111101fd423bfa8262c->enter($__internal_14c2b22ce4a55e2fd6ebff927edc88de83a0959d622e5111101fd423bfa8262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_14c2b22ce4a55e2fd6ebff927edc88de83a0959d622e5111101fd423bfa8262c->leave($__internal_14c2b22ce4a55e2fd6ebff927edc88de83a0959d622e5111101fd423bfa8262c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a51d9be756e11233b814e466050cf27824954847874c9444480fec79e663b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a51d9be756e11233b814e466050cf27824954847874c9444480fec79e663b71->enter($__internal_9a51d9be756e11233b814e466050cf27824954847874c9444480fec79e663b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a51d9be756e11233b814e466050cf27824954847874c9444480fec79e663b71->leave($__internal_9a51d9be756e11233b814e466050cf27824954847874c9444480fec79e663b71_prof);

    }

    public function getTemplateName()
    {
        return "default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  46 => 5,  37 => 9,  35 => 8,  29 => 5,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!doctype html>
<html>
\t<head>
\t\t<title>{% block title %}Default title{% endblock %}</title>
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
</html>
", "default/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\default\\layout.html.twig");
    }
}
