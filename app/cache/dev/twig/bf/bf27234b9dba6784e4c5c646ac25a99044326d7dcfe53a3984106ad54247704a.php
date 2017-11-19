<?php

/* ::base1.html.twig */
class __TwigTemplate_a02cb4dc680894378439ea426d28e9c38d863bbd68e5702981d1eb620050e7d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f38af3c84262ca1f19c7a796a548f09e0f7e43a9bb689d6a568ce69d42831d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38af3c84262ca1f19c7a796a548f09e0f7e43a9bb689d6a568ce69d42831d87->enter($__internal_f38af3c84262ca1f19c7a796a548f09e0f7e43a9bb689d6a568ce69d42831d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 33
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 36
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 45
        $this->displayBlock('sidebar', $context, $blocks);
        // line 46
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "            </div>
        </section>

        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>";
        
        $__internal_f38af3c84262ca1f19c7a796a548f09e0f7e43a9bb689d6a568ce69d42831d87->leave($__internal_f38af3c84262ca1f19c7a796a548f09e0f7e43a9bb689d6a568ce69d42831d87_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f0af88a82aba6cbbec856fa3e6bab13ccfc818673635dadbc638be580de3018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0af88a82aba6cbbec856fa3e6bab13ccfc818673635dadbc638be580de3018->enter($__internal_3f0af88a82aba6cbbec856fa3e6bab13ccfc818673635dadbc638be580de3018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_3f0af88a82aba6cbbec856fa3e6bab13ccfc818673635dadbc638be580de3018->leave($__internal_3f0af88a82aba6cbbec856fa3e6bab13ccfc818673635dadbc638be580de3018_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8185b6ce76a17b7bdcc608dead41c8da386306e6b688175e043d2771afe476ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8185b6ce76a17b7bdcc608dead41c8da386306e6b688175e043d2771afe476ef->enter($__internal_8185b6ce76a17b7bdcc608dead41c8da386306e6b688175e043d2771afe476ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_8185b6ce76a17b7bdcc608dead41c8da386306e6b688175e043d2771afe476ef->leave($__internal_8185b6ce76a17b7bdcc608dead41c8da386306e6b688175e043d2771afe476ef_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a7325975a96f29014b62091c58dc014131f32bc6e72466f00e9f1d7508bfe6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7325975a96f29014b62091c58dc014131f32bc6e72466f00e9f1d7508bfe6c9->enter($__internal_a7325975a96f29014b62091c58dc014131f32bc6e72466f00e9f1d7508bfe6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_a7325975a96f29014b62091c58dc014131f32bc6e72466f00e9f1d7508bfe6c9->leave($__internal_a7325975a96f29014b62091c58dc014131f32bc6e72466f00e9f1d7508bfe6c9_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_b32eecab0281f09bf0d22e97aa84d7684c509fe42f50602b01225a4275c68ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32eecab0281f09bf0d22e97aa84d7684c509fe42f50602b01225a4275c68ada->enter($__internal_b32eecab0281f09bf0d22e97aa84d7684c509fe42f50602b01225a4275c68ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_b32eecab0281f09bf0d22e97aa84d7684c509fe42f50602b01225a4275c68ada->leave($__internal_b32eecab0281f09bf0d22e97aa84d7684c509fe42f50602b01225a4275c68ada_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_791535033bcb06e0061888951f43aa14ec69a467d3f8f4dec9e21b9dcd07b2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791535033bcb06e0061888951f43aa14ec69a467d3f8f4dec9e21b9dcd07b2e5->enter($__internal_791535033bcb06e0061888951f43aa14ec69a467d3f8f4dec9e21b9dcd07b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_791535033bcb06e0061888951f43aa14ec69a467d3f8f4dec9e21b9dcd07b2e5->leave($__internal_791535033bcb06e0061888951f43aa14ec69a467d3f8f4dec9e21b9dcd07b2e5_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_67916f93b525e8f585ca853ae874fbb05b05d175a709216d05871c7db3a2a150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67916f93b525e8f585ca853ae874fbb05b05d175a709216d05871c7db3a2a150->enter($__internal_67916f93b525e8f585ca853ae874fbb05b05d175a709216d05871c7db3a2a150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67916f93b525e8f585ca853ae874fbb05b05d175a709216d05871c7db3a2a150->leave($__internal_67916f93b525e8f585ca853ae874fbb05b05d175a709216d05871c7db3a2a150_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d1a5da3f0cf6711cc182cfaa28a51cd124f40798910e15e52e748c633d1b4610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a5da3f0cf6711cc182cfaa28a51cd124f40798910e15e52e748c633d1b4610->enter($__internal_d1a5da3f0cf6711cc182cfaa28a51cd124f40798910e15e52e748c633d1b4610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d1a5da3f0cf6711cc182cfaa28a51cd124f40798910e15e52e748c633d1b4610->leave($__internal_d1a5da3f0cf6711cc182cfaa28a51cd124f40798910e15e52e748c633d1b4610_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e14699c28e6f207d4ea5e78f223d69dd8e2ee4001b01d375aaa5f4ce70e59d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14699c28e6f207d4ea5e78f223d69dd8e2ee4001b01d375aaa5f4ce70e59d55->enter($__internal_e14699c28e6f207d4ea5e78f223d69dd8e2ee4001b01d375aaa5f4ce70e59d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_e14699c28e6f207d4ea5e78f223d69dd8e2ee4001b01d375aaa5f4ce70e59d55->leave($__internal_e14699c28e6f207d4ea5e78f223d69dd8e2ee4001b01d375aaa5f4ce70e59d55_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbd3ff726193788f5b6598aec14b969555a200e1290b14f95413996b2fea8705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd3ff726193788f5b6598aec14b969555a200e1290b14f95413996b2fea8705->enter($__internal_fbd3ff726193788f5b6598aec14b969555a200e1290b14f95413996b2fea8705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fbd3ff726193788f5b6598aec14b969555a200e1290b14f95413996b2fea8705->leave($__internal_fbd3ff726193788f5b6598aec14b969555a200e1290b14f95413996b2fea8705_prof);

    }

    public function getTemplateName()
    {
        return "::base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 55,  212 => 50,  206 => 49,  195 => 45,  184 => 42,  172 => 37,  160 => 36,  144 => 23,  138 => 22,  129 => 13,  125 => 11,  119 => 10,  107 => 6,  99 => 56,  97 => 55,  92 => 52,  90 => 49,  85 => 46,  83 => 45,  79 => 43,  77 => 42,  69 => 37,  65 => 36,  60 => 33,  58 => 22,  47 => 15,  45 => 10,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>{% block title %}symblog{% endblock %} - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    {% block navigation %}
                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    {% endblock %}
                </div>

                <hgroup>
                    <h2>{% block blog_title %}<a href=\"#\">symblog</a>{% endblock %}</h2>
                    <h3>{% block blog_tagline %}<a href=\"#\">creando un blog en Symfony2</a>{% endblock %}</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                {% block body %}{% endblock %}
            </section>
            <aside class=\"sidebar\">
                {% block sidebar %}{% endblock %}
            </aside>

            <div id=\"footer\">
                {% block footer %}
                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>", "::base1.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base1.html.twig");
    }
}
