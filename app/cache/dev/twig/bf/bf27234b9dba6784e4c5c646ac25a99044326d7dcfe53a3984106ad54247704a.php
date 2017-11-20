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
        $__internal_64614ffb34927fa58a8869c8726b987b6cebf1cd1dde37374c0462ad05467c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64614ffb34927fa58a8869c8726b987b6cebf1cd1dde37374c0462ad05467c5b->enter($__internal_64614ffb34927fa58a8869c8726b987b6cebf1cd1dde37374c0462ad05467c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_64614ffb34927fa58a8869c8726b987b6cebf1cd1dde37374c0462ad05467c5b->leave($__internal_64614ffb34927fa58a8869c8726b987b6cebf1cd1dde37374c0462ad05467c5b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_365c0ebd809c62d97d851a2bc62790de00575354e2e1c561c52719c92aa5c4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365c0ebd809c62d97d851a2bc62790de00575354e2e1c561c52719c92aa5c4ee->enter($__internal_365c0ebd809c62d97d851a2bc62790de00575354e2e1c561c52719c92aa5c4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_365c0ebd809c62d97d851a2bc62790de00575354e2e1c561c52719c92aa5c4ee->leave($__internal_365c0ebd809c62d97d851a2bc62790de00575354e2e1c561c52719c92aa5c4ee_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9796a0cccc58297c89a288f75db81f03750a2b7fcf578eefafc97d2699f51afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9796a0cccc58297c89a288f75db81f03750a2b7fcf578eefafc97d2699f51afa->enter($__internal_9796a0cccc58297c89a288f75db81f03750a2b7fcf578eefafc97d2699f51afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_9796a0cccc58297c89a288f75db81f03750a2b7fcf578eefafc97d2699f51afa->leave($__internal_9796a0cccc58297c89a288f75db81f03750a2b7fcf578eefafc97d2699f51afa_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2999552b4b81e6181ef294df3e9209f2eb4343835708730f9c863fba646371fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2999552b4b81e6181ef294df3e9209f2eb4343835708730f9c863fba646371fd->enter($__internal_2999552b4b81e6181ef294df3e9209f2eb4343835708730f9c863fba646371fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_2999552b4b81e6181ef294df3e9209f2eb4343835708730f9c863fba646371fd->leave($__internal_2999552b4b81e6181ef294df3e9209f2eb4343835708730f9c863fba646371fd_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_a94a15db81bfacb3075dcdfae9b123a9a609728cf30363f8585adf960148dad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94a15db81bfacb3075dcdfae9b123a9a609728cf30363f8585adf960148dad0->enter($__internal_a94a15db81bfacb3075dcdfae9b123a9a609728cf30363f8585adf960148dad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_a94a15db81bfacb3075dcdfae9b123a9a609728cf30363f8585adf960148dad0->leave($__internal_a94a15db81bfacb3075dcdfae9b123a9a609728cf30363f8585adf960148dad0_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_9e4ad33cd12c86966d8a7db91c31aa20a9f369e5367bb5ac805d42a5f5d721e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4ad33cd12c86966d8a7db91c31aa20a9f369e5367bb5ac805d42a5f5d721e7->enter($__internal_9e4ad33cd12c86966d8a7db91c31aa20a9f369e5367bb5ac805d42a5f5d721e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_9e4ad33cd12c86966d8a7db91c31aa20a9f369e5367bb5ac805d42a5f5d721e7->leave($__internal_9e4ad33cd12c86966d8a7db91c31aa20a9f369e5367bb5ac805d42a5f5d721e7_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc31aac6dba6325096d0ccad2bc37be5f1b4023996ebfcd7a0c3279c450bf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc31aac6dba6325096d0ccad2bc37be5f1b4023996ebfcd7a0c3279c450bf23->enter($__internal_2dc31aac6dba6325096d0ccad2bc37be5f1b4023996ebfcd7a0c3279c450bf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2dc31aac6dba6325096d0ccad2bc37be5f1b4023996ebfcd7a0c3279c450bf23->leave($__internal_2dc31aac6dba6325096d0ccad2bc37be5f1b4023996ebfcd7a0c3279c450bf23_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_68eb445c92ba2d04b84a966005cab7db4e14e4fbe20c8350c0a4f2e37519c087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68eb445c92ba2d04b84a966005cab7db4e14e4fbe20c8350c0a4f2e37519c087->enter($__internal_68eb445c92ba2d04b84a966005cab7db4e14e4fbe20c8350c0a4f2e37519c087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_68eb445c92ba2d04b84a966005cab7db4e14e4fbe20c8350c0a4f2e37519c087->leave($__internal_68eb445c92ba2d04b84a966005cab7db4e14e4fbe20c8350c0a4f2e37519c087_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4dafbde3d868d8924f2aa6b7774f25c7c77eee8c8e1229e0c1d871f518161a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dafbde3d868d8924f2aa6b7774f25c7c77eee8c8e1229e0c1d871f518161a09->enter($__internal_4dafbde3d868d8924f2aa6b7774f25c7c77eee8c8e1229e0c1d871f518161a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_4dafbde3d868d8924f2aa6b7774f25c7c77eee8c8e1229e0c1d871f518161a09->leave($__internal_4dafbde3d868d8924f2aa6b7774f25c7c77eee8c8e1229e0c1d871f518161a09_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ca22e72109d1123edcee1f7f64ac2ae36793f1b5e716b0d7f6812a61bdfa23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca22e72109d1123edcee1f7f64ac2ae36793f1b5e716b0d7f6812a61bdfa23d->enter($__internal_0ca22e72109d1123edcee1f7f64ac2ae36793f1b5e716b0d7f6812a61bdfa23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ca22e72109d1123edcee1f7f64ac2ae36793f1b5e716b0d7f6812a61bdfa23d->leave($__internal_0ca22e72109d1123edcee1f7f64ac2ae36793f1b5e716b0d7f6812a61bdfa23d_prof);

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
