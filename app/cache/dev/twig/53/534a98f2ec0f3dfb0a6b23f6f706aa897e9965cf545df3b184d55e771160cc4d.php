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
        $__internal_f5f33131451b6f37f9333abd9b848d227deb963a84a434d9c437773155c0c74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f33131451b6f37f9333abd9b848d227deb963a84a434d9c437773155c0c74f->enter($__internal_f5f33131451b6f37f9333abd9b848d227deb963a84a434d9c437773155c0c74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

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
        
        $__internal_f5f33131451b6f37f9333abd9b848d227deb963a84a434d9c437773155c0c74f->leave($__internal_f5f33131451b6f37f9333abd9b848d227deb963a84a434d9c437773155c0c74f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_efd30a4d6b20f10bdf83132f5bc10d177d09b6058667b79380b0d4d08b776132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd30a4d6b20f10bdf83132f5bc10d177d09b6058667b79380b0d4d08b776132->enter($__internal_efd30a4d6b20f10bdf83132f5bc10d177d09b6058667b79380b0d4d08b776132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_efd30a4d6b20f10bdf83132f5bc10d177d09b6058667b79380b0d4d08b776132->leave($__internal_efd30a4d6b20f10bdf83132f5bc10d177d09b6058667b79380b0d4d08b776132_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6dc55d15c4e0b21057e32771baf242cf98b21087e476266e726b011909ce329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dc55d15c4e0b21057e32771baf242cf98b21087e476266e726b011909ce329->enter($__internal_e6dc55d15c4e0b21057e32771baf242cf98b21087e476266e726b011909ce329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6dc55d15c4e0b21057e32771baf242cf98b21087e476266e726b011909ce329->leave($__internal_e6dc55d15c4e0b21057e32771baf242cf98b21087e476266e726b011909ce329_prof);

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
