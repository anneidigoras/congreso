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
        $__internal_19d022dc5fc97d474f7b12cfcde7204913e462cd0126df29fc5ea5e52c674cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d022dc5fc97d474f7b12cfcde7204913e462cd0126df29fc5ea5e52c674cb1->enter($__internal_19d022dc5fc97d474f7b12cfcde7204913e462cd0126df29fc5ea5e52c674cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_19d022dc5fc97d474f7b12cfcde7204913e462cd0126df29fc5ea5e52c674cb1->leave($__internal_19d022dc5fc97d474f7b12cfcde7204913e462cd0126df29fc5ea5e52c674cb1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d21b79c43c225976e0d87442cc183073d24d018fda5ac03a547dadd2390eab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d21b79c43c225976e0d87442cc183073d24d018fda5ac03a547dadd2390eab4->enter($__internal_1d21b79c43c225976e0d87442cc183073d24d018fda5ac03a547dadd2390eab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_1d21b79c43c225976e0d87442cc183073d24d018fda5ac03a547dadd2390eab4->leave($__internal_1d21b79c43c225976e0d87442cc183073d24d018fda5ac03a547dadd2390eab4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_787a047e1cc1f4fec20a0b99b105c7abb47f8edef7b88de278ee4b542631f9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787a047e1cc1f4fec20a0b99b105c7abb47f8edef7b88de278ee4b542631f9e5->enter($__internal_787a047e1cc1f4fec20a0b99b105c7abb47f8edef7b88de278ee4b542631f9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_787a047e1cc1f4fec20a0b99b105c7abb47f8edef7b88de278ee4b542631f9e5->leave($__internal_787a047e1cc1f4fec20a0b99b105c7abb47f8edef7b88de278ee4b542631f9e5_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_75c3f8e14035df528b0eafd52cc10f386b3a6bde38d088d79fdb0cc619b0bbd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c3f8e14035df528b0eafd52cc10f386b3a6bde38d088d79fdb0cc619b0bbd2->enter($__internal_75c3f8e14035df528b0eafd52cc10f386b3a6bde38d088d79fdb0cc619b0bbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_75c3f8e14035df528b0eafd52cc10f386b3a6bde38d088d79fdb0cc619b0bbd2->leave($__internal_75c3f8e14035df528b0eafd52cc10f386b3a6bde38d088d79fdb0cc619b0bbd2_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_3536ff2991cf993235df00d8fb81eda2caeda2699267f9569c0554057def6747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3536ff2991cf993235df00d8fb81eda2caeda2699267f9569c0554057def6747->enter($__internal_3536ff2991cf993235df00d8fb81eda2caeda2699267f9569c0554057def6747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_3536ff2991cf993235df00d8fb81eda2caeda2699267f9569c0554057def6747->leave($__internal_3536ff2991cf993235df00d8fb81eda2caeda2699267f9569c0554057def6747_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_c357989e4abd309a9fdb9b77c1a8e067cb377b7b7090e4401c05a8dc730e642f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c357989e4abd309a9fdb9b77c1a8e067cb377b7b7090e4401c05a8dc730e642f->enter($__internal_c357989e4abd309a9fdb9b77c1a8e067cb377b7b7090e4401c05a8dc730e642f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_c357989e4abd309a9fdb9b77c1a8e067cb377b7b7090e4401c05a8dc730e642f->leave($__internal_c357989e4abd309a9fdb9b77c1a8e067cb377b7b7090e4401c05a8dc730e642f_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bce0cc4cb6c46fe67ed7152bd07cfc42e643f79f38d80ecdaf724d62b602904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bce0cc4cb6c46fe67ed7152bd07cfc42e643f79f38d80ecdaf724d62b602904->enter($__internal_6bce0cc4cb6c46fe67ed7152bd07cfc42e643f79f38d80ecdaf724d62b602904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6bce0cc4cb6c46fe67ed7152bd07cfc42e643f79f38d80ecdaf724d62b602904->leave($__internal_6bce0cc4cb6c46fe67ed7152bd07cfc42e643f79f38d80ecdaf724d62b602904_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_557a4cb3e492cbe2c3da62ca321d932a7a13139cd4a72a64223e60874fdc2aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557a4cb3e492cbe2c3da62ca321d932a7a13139cd4a72a64223e60874fdc2aab->enter($__internal_557a4cb3e492cbe2c3da62ca321d932a7a13139cd4a72a64223e60874fdc2aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_557a4cb3e492cbe2c3da62ca321d932a7a13139cd4a72a64223e60874fdc2aab->leave($__internal_557a4cb3e492cbe2c3da62ca321d932a7a13139cd4a72a64223e60874fdc2aab_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9edcfadb4cb0fd7ce671cdf1c72d57b795266b71ec30e8135f0a223db3bff1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edcfadb4cb0fd7ce671cdf1c72d57b795266b71ec30e8135f0a223db3bff1d3->enter($__internal_9edcfadb4cb0fd7ce671cdf1c72d57b795266b71ec30e8135f0a223db3bff1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_9edcfadb4cb0fd7ce671cdf1c72d57b795266b71ec30e8135f0a223db3bff1d3->leave($__internal_9edcfadb4cb0fd7ce671cdf1c72d57b795266b71ec30e8135f0a223db3bff1d3_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea6a8db761ffaa21c93f568d91e15de633fb81d0f0e2ed8d8d6c63447703bc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6a8db761ffaa21c93f568d91e15de633fb81d0f0e2ed8d8d6c63447703bc0f->enter($__internal_ea6a8db761ffaa21c93f568d91e15de633fb81d0f0e2ed8d8d6c63447703bc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ea6a8db761ffaa21c93f568d91e15de633fb81d0f0e2ed8d8d6c63447703bc0f->leave($__internal_ea6a8db761ffaa21c93f568d91e15de633fb81d0f0e2ed8d8d6c63447703bc0f_prof);

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
