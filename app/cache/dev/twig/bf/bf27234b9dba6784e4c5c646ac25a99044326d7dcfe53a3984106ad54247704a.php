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
        $__internal_04d7fb8edde450fb8556e4ad648e6a56533ca0e795cf6513d8259992c0008434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d7fb8edde450fb8556e4ad648e6a56533ca0e795cf6513d8259992c0008434->enter($__internal_04d7fb8edde450fb8556e4ad648e6a56533ca0e795cf6513d8259992c0008434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_04d7fb8edde450fb8556e4ad648e6a56533ca0e795cf6513d8259992c0008434->leave($__internal_04d7fb8edde450fb8556e4ad648e6a56533ca0e795cf6513d8259992c0008434_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbfe67476cb453263d34da259ebf12daa202cde12f308746431fc0bc956f1d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfe67476cb453263d34da259ebf12daa202cde12f308746431fc0bc956f1d59->enter($__internal_bbfe67476cb453263d34da259ebf12daa202cde12f308746431fc0bc956f1d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_bbfe67476cb453263d34da259ebf12daa202cde12f308746431fc0bc956f1d59->leave($__internal_bbfe67476cb453263d34da259ebf12daa202cde12f308746431fc0bc956f1d59_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_787abf2778a0c064067850ecddb17155b45188eaf8ed9edc42c8451edf228e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787abf2778a0c064067850ecddb17155b45188eaf8ed9edc42c8451edf228e16->enter($__internal_787abf2778a0c064067850ecddb17155b45188eaf8ed9edc42c8451edf228e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_787abf2778a0c064067850ecddb17155b45188eaf8ed9edc42c8451edf228e16->leave($__internal_787abf2778a0c064067850ecddb17155b45188eaf8ed9edc42c8451edf228e16_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_efec8b220baa03fee9e9e8b2064eac0d4342b551bc6b97b008a1abedf5a9fea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efec8b220baa03fee9e9e8b2064eac0d4342b551bc6b97b008a1abedf5a9fea1->enter($__internal_efec8b220baa03fee9e9e8b2064eac0d4342b551bc6b97b008a1abedf5a9fea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_efec8b220baa03fee9e9e8b2064eac0d4342b551bc6b97b008a1abedf5a9fea1->leave($__internal_efec8b220baa03fee9e9e8b2064eac0d4342b551bc6b97b008a1abedf5a9fea1_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_3b6ec80dc3967874e9328e9a07c7eb5692903d3ea4b17f91c5a8152d636be90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6ec80dc3967874e9328e9a07c7eb5692903d3ea4b17f91c5a8152d636be90c->enter($__internal_3b6ec80dc3967874e9328e9a07c7eb5692903d3ea4b17f91c5a8152d636be90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_3b6ec80dc3967874e9328e9a07c7eb5692903d3ea4b17f91c5a8152d636be90c->leave($__internal_3b6ec80dc3967874e9328e9a07c7eb5692903d3ea4b17f91c5a8152d636be90c_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_333e200df6fe010e22363c25338aee0d9fba07a799beebd3edbf0f167af65832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333e200df6fe010e22363c25338aee0d9fba07a799beebd3edbf0f167af65832->enter($__internal_333e200df6fe010e22363c25338aee0d9fba07a799beebd3edbf0f167af65832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_333e200df6fe010e22363c25338aee0d9fba07a799beebd3edbf0f167af65832->leave($__internal_333e200df6fe010e22363c25338aee0d9fba07a799beebd3edbf0f167af65832_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fc21bf4e3220c7033be8e8b0b8281ff3301c7eb4ac7ba4c027c70fe545c5bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc21bf4e3220c7033be8e8b0b8281ff3301c7eb4ac7ba4c027c70fe545c5bf6->enter($__internal_7fc21bf4e3220c7033be8e8b0b8281ff3301c7eb4ac7ba4c027c70fe545c5bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7fc21bf4e3220c7033be8e8b0b8281ff3301c7eb4ac7ba4c027c70fe545c5bf6->leave($__internal_7fc21bf4e3220c7033be8e8b0b8281ff3301c7eb4ac7ba4c027c70fe545c5bf6_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c0194a4bd99bc39def6f1b509b7457b4b169938f04fe99bb48675f420848b3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0194a4bd99bc39def6f1b509b7457b4b169938f04fe99bb48675f420848b3c0->enter($__internal_c0194a4bd99bc39def6f1b509b7457b4b169938f04fe99bb48675f420848b3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_c0194a4bd99bc39def6f1b509b7457b4b169938f04fe99bb48675f420848b3c0->leave($__internal_c0194a4bd99bc39def6f1b509b7457b4b169938f04fe99bb48675f420848b3c0_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_04b97027d102ff58edcbce1bffc3e476d58780e50be26c6cce7aa4c37f8f9ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b97027d102ff58edcbce1bffc3e476d58780e50be26c6cce7aa4c37f8f9ac0->enter($__internal_04b97027d102ff58edcbce1bffc3e476d58780e50be26c6cce7aa4c37f8f9ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_04b97027d102ff58edcbce1bffc3e476d58780e50be26c6cce7aa4c37f8f9ac0->leave($__internal_04b97027d102ff58edcbce1bffc3e476d58780e50be26c6cce7aa4c37f8f9ac0_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a971c2d6bf5207f1e822656d114fcdf00cad506df69d2d757244789ded4e6f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a971c2d6bf5207f1e822656d114fcdf00cad506df69d2d757244789ded4e6f5d->enter($__internal_a971c2d6bf5207f1e822656d114fcdf00cad506df69d2d757244789ded4e6f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a971c2d6bf5207f1e822656d114fcdf00cad506df69d2d757244789ded4e6f5d->leave($__internal_a971c2d6bf5207f1e822656d114fcdf00cad506df69d2d757244789ded4e6f5d_prof);

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
