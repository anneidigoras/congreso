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
        $__internal_f534b94334c7f6539635f34f034cb68661af8e8b58cd66fa1a2465a07988eb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f534b94334c7f6539635f34f034cb68661af8e8b58cd66fa1a2465a07988eb8f->enter($__internal_f534b94334c7f6539635f34f034cb68661af8e8b58cd66fa1a2465a07988eb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_f534b94334c7f6539635f34f034cb68661af8e8b58cd66fa1a2465a07988eb8f->leave($__internal_f534b94334c7f6539635f34f034cb68661af8e8b58cd66fa1a2465a07988eb8f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_20809d7e2faf00cc620a7786d492050508b13e6b8cf75c6964f33975a3d951d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20809d7e2faf00cc620a7786d492050508b13e6b8cf75c6964f33975a3d951d0->enter($__internal_20809d7e2faf00cc620a7786d492050508b13e6b8cf75c6964f33975a3d951d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_20809d7e2faf00cc620a7786d492050508b13e6b8cf75c6964f33975a3d951d0->leave($__internal_20809d7e2faf00cc620a7786d492050508b13e6b8cf75c6964f33975a3d951d0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bae572ea1d51fca62f66f6debe53ed21cdac4aea9eb3bf166aa0b7f90e6ffb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae572ea1d51fca62f66f6debe53ed21cdac4aea9eb3bf166aa0b7f90e6ffb9a->enter($__internal_bae572ea1d51fca62f66f6debe53ed21cdac4aea9eb3bf166aa0b7f90e6ffb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_bae572ea1d51fca62f66f6debe53ed21cdac4aea9eb3bf166aa0b7f90e6ffb9a->leave($__internal_bae572ea1d51fca62f66f6debe53ed21cdac4aea9eb3bf166aa0b7f90e6ffb9a_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2608790f43185ab35a7aabbc79072c547dd8b4a7fb5d47a7d5c0eab5232d55ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2608790f43185ab35a7aabbc79072c547dd8b4a7fb5d47a7d5c0eab5232d55ed->enter($__internal_2608790f43185ab35a7aabbc79072c547dd8b4a7fb5d47a7d5c0eab5232d55ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_2608790f43185ab35a7aabbc79072c547dd8b4a7fb5d47a7d5c0eab5232d55ed->leave($__internal_2608790f43185ab35a7aabbc79072c547dd8b4a7fb5d47a7d5c0eab5232d55ed_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_c076a524b92ae49a8ba747ba2141aa5178985894c8ca733580429347d3a02bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c076a524b92ae49a8ba747ba2141aa5178985894c8ca733580429347d3a02bcd->enter($__internal_c076a524b92ae49a8ba747ba2141aa5178985894c8ca733580429347d3a02bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_c076a524b92ae49a8ba747ba2141aa5178985894c8ca733580429347d3a02bcd->leave($__internal_c076a524b92ae49a8ba747ba2141aa5178985894c8ca733580429347d3a02bcd_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_37e44e55e6c9e8208f98c3104ed5844556f575d3df9897f100980544ed6f93d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e44e55e6c9e8208f98c3104ed5844556f575d3df9897f100980544ed6f93d8->enter($__internal_37e44e55e6c9e8208f98c3104ed5844556f575d3df9897f100980544ed6f93d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_37e44e55e6c9e8208f98c3104ed5844556f575d3df9897f100980544ed6f93d8->leave($__internal_37e44e55e6c9e8208f98c3104ed5844556f575d3df9897f100980544ed6f93d8_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5881a5702b6a1ac6759aadb36f67d80fef2251220a95b1dfdfe3bdd0a296af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5881a5702b6a1ac6759aadb36f67d80fef2251220a95b1dfdfe3bdd0a296af->enter($__internal_da5881a5702b6a1ac6759aadb36f67d80fef2251220a95b1dfdfe3bdd0a296af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da5881a5702b6a1ac6759aadb36f67d80fef2251220a95b1dfdfe3bdd0a296af->leave($__internal_da5881a5702b6a1ac6759aadb36f67d80fef2251220a95b1dfdfe3bdd0a296af_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fba58a7c252fe1bd4b2519f523cd6fc51d308af01b80b76040a4fe7ddfb9577d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba58a7c252fe1bd4b2519f523cd6fc51d308af01b80b76040a4fe7ddfb9577d->enter($__internal_fba58a7c252fe1bd4b2519f523cd6fc51d308af01b80b76040a4fe7ddfb9577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_fba58a7c252fe1bd4b2519f523cd6fc51d308af01b80b76040a4fe7ddfb9577d->leave($__internal_fba58a7c252fe1bd4b2519f523cd6fc51d308af01b80b76040a4fe7ddfb9577d_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_86a2ca2027707f38ccc397354e6331e82feebf81596e95d56664c2f07a173939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a2ca2027707f38ccc397354e6331e82feebf81596e95d56664c2f07a173939->enter($__internal_86a2ca2027707f38ccc397354e6331e82feebf81596e95d56664c2f07a173939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_86a2ca2027707f38ccc397354e6331e82feebf81596e95d56664c2f07a173939->leave($__internal_86a2ca2027707f38ccc397354e6331e82feebf81596e95d56664c2f07a173939_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12f2a11be926c3df5c664292a02620fe88270c97dde2d8ccc2aabc495961081e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f2a11be926c3df5c664292a02620fe88270c97dde2d8ccc2aabc495961081e->enter($__internal_12f2a11be926c3df5c664292a02620fe88270c97dde2d8ccc2aabc495961081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12f2a11be926c3df5c664292a02620fe88270c97dde2d8ccc2aabc495961081e->leave($__internal_12f2a11be926c3df5c664292a02620fe88270c97dde2d8ccc2aabc495961081e_prof);

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
