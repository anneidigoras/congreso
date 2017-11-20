<?php

/* base1.html.twig */
class __TwigTemplate_924ec02007a70357c34faf8e74b0503ded3bafc1856475f932eb0c6b77c86f4c extends Twig_Template
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
        $__internal_c6249750134af41e0ca2d17aaaecb68fd51d69fb0e5dca92dd0cb67bbdd51a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6249750134af41e0ca2d17aaaecb68fd51d69fb0e5dca92dd0cb67bbdd51a7d->enter($__internal_c6249750134af41e0ca2d17aaaecb68fd51d69fb0e5dca92dd0cb67bbdd51a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_c6249750134af41e0ca2d17aaaecb68fd51d69fb0e5dca92dd0cb67bbdd51a7d->leave($__internal_c6249750134af41e0ca2d17aaaecb68fd51d69fb0e5dca92dd0cb67bbdd51a7d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f033befea6ad8d471e211f9b6fc523c5bb78ae2a79db9304d65403cc32361bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f033befea6ad8d471e211f9b6fc523c5bb78ae2a79db9304d65403cc32361bf->enter($__internal_5f033befea6ad8d471e211f9b6fc523c5bb78ae2a79db9304d65403cc32361bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_5f033befea6ad8d471e211f9b6fc523c5bb78ae2a79db9304d65403cc32361bf->leave($__internal_5f033befea6ad8d471e211f9b6fc523c5bb78ae2a79db9304d65403cc32361bf_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8fb9a40c4f11381fcc5c1f9a8b8ec59a7df70949dbcbef58e40dbe25490667a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fb9a40c4f11381fcc5c1f9a8b8ec59a7df70949dbcbef58e40dbe25490667a->enter($__internal_a8fb9a40c4f11381fcc5c1f9a8b8ec59a7df70949dbcbef58e40dbe25490667a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_a8fb9a40c4f11381fcc5c1f9a8b8ec59a7df70949dbcbef58e40dbe25490667a->leave($__internal_a8fb9a40c4f11381fcc5c1f9a8b8ec59a7df70949dbcbef58e40dbe25490667a_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0a768694eaa0aa7d5acbb75f8a16658be2f6f03201f33ee082cac1efd3a87ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a768694eaa0aa7d5acbb75f8a16658be2f6f03201f33ee082cac1efd3a87ec3->enter($__internal_0a768694eaa0aa7d5acbb75f8a16658be2f6f03201f33ee082cac1efd3a87ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_0a768694eaa0aa7d5acbb75f8a16658be2f6f03201f33ee082cac1efd3a87ec3->leave($__internal_0a768694eaa0aa7d5acbb75f8a16658be2f6f03201f33ee082cac1efd3a87ec3_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_f75278fdd00b3fd0319ec5058f189ef7c7f704e89a46d8c996ae6ce5d7307fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75278fdd00b3fd0319ec5058f189ef7c7f704e89a46d8c996ae6ce5d7307fa3->enter($__internal_f75278fdd00b3fd0319ec5058f189ef7c7f704e89a46d8c996ae6ce5d7307fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_f75278fdd00b3fd0319ec5058f189ef7c7f704e89a46d8c996ae6ce5d7307fa3->leave($__internal_f75278fdd00b3fd0319ec5058f189ef7c7f704e89a46d8c996ae6ce5d7307fa3_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_4a9062f7b03448fe0eaf687660867fbd03d566271f2389348d0ba52d7aa4440b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9062f7b03448fe0eaf687660867fbd03d566271f2389348d0ba52d7aa4440b->enter($__internal_4a9062f7b03448fe0eaf687660867fbd03d566271f2389348d0ba52d7aa4440b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_4a9062f7b03448fe0eaf687660867fbd03d566271f2389348d0ba52d7aa4440b->leave($__internal_4a9062f7b03448fe0eaf687660867fbd03d566271f2389348d0ba52d7aa4440b_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb26d237201889e75e41da9063b50f187a9a2d4ba0f975e2d992af4c0206bb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb26d237201889e75e41da9063b50f187a9a2d4ba0f975e2d992af4c0206bb34->enter($__internal_bb26d237201889e75e41da9063b50f187a9a2d4ba0f975e2d992af4c0206bb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb26d237201889e75e41da9063b50f187a9a2d4ba0f975e2d992af4c0206bb34->leave($__internal_bb26d237201889e75e41da9063b50f187a9a2d4ba0f975e2d992af4c0206bb34_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_aced2bcf778d2663497ac4ea15f9547693723998cff4cd55cb1dbe1654246125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aced2bcf778d2663497ac4ea15f9547693723998cff4cd55cb1dbe1654246125->enter($__internal_aced2bcf778d2663497ac4ea15f9547693723998cff4cd55cb1dbe1654246125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_aced2bcf778d2663497ac4ea15f9547693723998cff4cd55cb1dbe1654246125->leave($__internal_aced2bcf778d2663497ac4ea15f9547693723998cff4cd55cb1dbe1654246125_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_259d4ef6cdbbf8c031447f807c815bd00b0adaa2c278a59b74c3dda5ab50acf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259d4ef6cdbbf8c031447f807c815bd00b0adaa2c278a59b74c3dda5ab50acf6->enter($__internal_259d4ef6cdbbf8c031447f807c815bd00b0adaa2c278a59b74c3dda5ab50acf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_259d4ef6cdbbf8c031447f807c815bd00b0adaa2c278a59b74c3dda5ab50acf6->leave($__internal_259d4ef6cdbbf8c031447f807c815bd00b0adaa2c278a59b74c3dda5ab50acf6_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0467b7b52c5c3e6ac69ccfb2c3f2448a86ffb4a99732b8fd2e72082ff34b0159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0467b7b52c5c3e6ac69ccfb2c3f2448a86ffb4a99732b8fd2e72082ff34b0159->enter($__internal_0467b7b52c5c3e6ac69ccfb2c3f2448a86ffb4a99732b8fd2e72082ff34b0159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0467b7b52c5c3e6ac69ccfb2c3f2448a86ffb4a99732b8fd2e72082ff34b0159->leave($__internal_0467b7b52c5c3e6ac69ccfb2c3f2448a86ffb4a99732b8fd2e72082ff34b0159_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
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
</html>", "base1.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base1.html.twig");
    }
}
