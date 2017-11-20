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
        $__internal_9fcf9da0be4cb7207dbfd1054ed96519c4114d93f2da1a47d9bea30e9f206722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcf9da0be4cb7207dbfd1054ed96519c4114d93f2da1a47d9bea30e9f206722->enter($__internal_9fcf9da0be4cb7207dbfd1054ed96519c4114d93f2da1a47d9bea30e9f206722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_9fcf9da0be4cb7207dbfd1054ed96519c4114d93f2da1a47d9bea30e9f206722->leave($__internal_9fcf9da0be4cb7207dbfd1054ed96519c4114d93f2da1a47d9bea30e9f206722_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c622b87dcec0b9621bfdd45786d2c82b2a15066e91dd7d6affaeab7cac471e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c622b87dcec0b9621bfdd45786d2c82b2a15066e91dd7d6affaeab7cac471e0->enter($__internal_2c622b87dcec0b9621bfdd45786d2c82b2a15066e91dd7d6affaeab7cac471e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_2c622b87dcec0b9621bfdd45786d2c82b2a15066e91dd7d6affaeab7cac471e0->leave($__internal_2c622b87dcec0b9621bfdd45786d2c82b2a15066e91dd7d6affaeab7cac471e0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15a72a5fbe35769cd98703283c8c3187efcb9baa9815845808a5e26b47bba9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a72a5fbe35769cd98703283c8c3187efcb9baa9815845808a5e26b47bba9d2->enter($__internal_15a72a5fbe35769cd98703283c8c3187efcb9baa9815845808a5e26b47bba9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_15a72a5fbe35769cd98703283c8c3187efcb9baa9815845808a5e26b47bba9d2->leave($__internal_15a72a5fbe35769cd98703283c8c3187efcb9baa9815845808a5e26b47bba9d2_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_49f4da27ebf2307e01afa84672719af8bba2fc01c92fa44a4d4a91436b9e3399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f4da27ebf2307e01afa84672719af8bba2fc01c92fa44a4d4a91436b9e3399->enter($__internal_49f4da27ebf2307e01afa84672719af8bba2fc01c92fa44a4d4a91436b9e3399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_49f4da27ebf2307e01afa84672719af8bba2fc01c92fa44a4d4a91436b9e3399->leave($__internal_49f4da27ebf2307e01afa84672719af8bba2fc01c92fa44a4d4a91436b9e3399_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_cc5c2307e5c4667fcd7b77191315eb228cb7b1498997513d64045fa5f520dfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5c2307e5c4667fcd7b77191315eb228cb7b1498997513d64045fa5f520dfaa->enter($__internal_cc5c2307e5c4667fcd7b77191315eb228cb7b1498997513d64045fa5f520dfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_cc5c2307e5c4667fcd7b77191315eb228cb7b1498997513d64045fa5f520dfaa->leave($__internal_cc5c2307e5c4667fcd7b77191315eb228cb7b1498997513d64045fa5f520dfaa_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_8b9a7067e47c7f9d4076b20e2c9d416840c328f3a20949f68998711726a02845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9a7067e47c7f9d4076b20e2c9d416840c328f3a20949f68998711726a02845->enter($__internal_8b9a7067e47c7f9d4076b20e2c9d416840c328f3a20949f68998711726a02845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_8b9a7067e47c7f9d4076b20e2c9d416840c328f3a20949f68998711726a02845->leave($__internal_8b9a7067e47c7f9d4076b20e2c9d416840c328f3a20949f68998711726a02845_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_c772769b29e79f9e947925415d27c3a48739b4646a592a4bd4e2f985a18afc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c772769b29e79f9e947925415d27c3a48739b4646a592a4bd4e2f985a18afc4f->enter($__internal_c772769b29e79f9e947925415d27c3a48739b4646a592a4bd4e2f985a18afc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c772769b29e79f9e947925415d27c3a48739b4646a592a4bd4e2f985a18afc4f->leave($__internal_c772769b29e79f9e947925415d27c3a48739b4646a592a4bd4e2f985a18afc4f_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6c13a819ee1b02b56cb1976bf6c600219b7dbcda8706ced6c8d5fc10d66952e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c13a819ee1b02b56cb1976bf6c600219b7dbcda8706ced6c8d5fc10d66952e3->enter($__internal_6c13a819ee1b02b56cb1976bf6c600219b7dbcda8706ced6c8d5fc10d66952e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6c13a819ee1b02b56cb1976bf6c600219b7dbcda8706ced6c8d5fc10d66952e3->leave($__internal_6c13a819ee1b02b56cb1976bf6c600219b7dbcda8706ced6c8d5fc10d66952e3_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0f213f2308d1ef2ddf8afc51906e8f4349cc2a28c5cb7a1f9eeeaccc27ad147e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f213f2308d1ef2ddf8afc51906e8f4349cc2a28c5cb7a1f9eeeaccc27ad147e->enter($__internal_0f213f2308d1ef2ddf8afc51906e8f4349cc2a28c5cb7a1f9eeeaccc27ad147e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_0f213f2308d1ef2ddf8afc51906e8f4349cc2a28c5cb7a1f9eeeaccc27ad147e->leave($__internal_0f213f2308d1ef2ddf8afc51906e8f4349cc2a28c5cb7a1f9eeeaccc27ad147e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b7950dbc6e4854ccb8d9132ad2ab6bd5c488d0113621a6d45037343c3b4adc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7950dbc6e4854ccb8d9132ad2ab6bd5c488d0113621a6d45037343c3b4adc2->enter($__internal_6b7950dbc6e4854ccb8d9132ad2ab6bd5c488d0113621a6d45037343c3b4adc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6b7950dbc6e4854ccb8d9132ad2ab6bd5c488d0113621a6d45037343c3b4adc2->leave($__internal_6b7950dbc6e4854ccb8d9132ad2ab6bd5c488d0113621a6d45037343c3b4adc2_prof);

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
