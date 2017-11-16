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
        $__internal_095f6ca48bb2dd775daab43b02ae500b4acdf68b2a8e3efc95a301793c27b436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095f6ca48bb2dd775daab43b02ae500b4acdf68b2a8e3efc95a301793c27b436->enter($__internal_095f6ca48bb2dd775daab43b02ae500b4acdf68b2a8e3efc95a301793c27b436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_095f6ca48bb2dd775daab43b02ae500b4acdf68b2a8e3efc95a301793c27b436->leave($__internal_095f6ca48bb2dd775daab43b02ae500b4acdf68b2a8e3efc95a301793c27b436_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dc0f0ed99976126ffe32b3f7d2a4e8e1ba5ea10a2fb35dd4b1332760ae1ffc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc0f0ed99976126ffe32b3f7d2a4e8e1ba5ea10a2fb35dd4b1332760ae1ffc0->enter($__internal_6dc0f0ed99976126ffe32b3f7d2a4e8e1ba5ea10a2fb35dd4b1332760ae1ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_6dc0f0ed99976126ffe32b3f7d2a4e8e1ba5ea10a2fb35dd4b1332760ae1ffc0->leave($__internal_6dc0f0ed99976126ffe32b3f7d2a4e8e1ba5ea10a2fb35dd4b1332760ae1ffc0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ef3d9a39e8260b43c9beba8d42f1e7f100c35aa2afebd4e5badf14b9a7b16fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef3d9a39e8260b43c9beba8d42f1e7f100c35aa2afebd4e5badf14b9a7b16fb->enter($__internal_2ef3d9a39e8260b43c9beba8d42f1e7f100c35aa2afebd4e5badf14b9a7b16fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_2ef3d9a39e8260b43c9beba8d42f1e7f100c35aa2afebd4e5badf14b9a7b16fb->leave($__internal_2ef3d9a39e8260b43c9beba8d42f1e7f100c35aa2afebd4e5badf14b9a7b16fb_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_253a50fde51e218eb7d453f7734fc926405674d61148baa9e5082103998b0469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253a50fde51e218eb7d453f7734fc926405674d61148baa9e5082103998b0469->enter($__internal_253a50fde51e218eb7d453f7734fc926405674d61148baa9e5082103998b0469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_253a50fde51e218eb7d453f7734fc926405674d61148baa9e5082103998b0469->leave($__internal_253a50fde51e218eb7d453f7734fc926405674d61148baa9e5082103998b0469_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_b43ccf6b635fe74b7fc6852eb3ec7042f7d716e4486d4f3d631f40b109de8cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43ccf6b635fe74b7fc6852eb3ec7042f7d716e4486d4f3d631f40b109de8cc2->enter($__internal_b43ccf6b635fe74b7fc6852eb3ec7042f7d716e4486d4f3d631f40b109de8cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_b43ccf6b635fe74b7fc6852eb3ec7042f7d716e4486d4f3d631f40b109de8cc2->leave($__internal_b43ccf6b635fe74b7fc6852eb3ec7042f7d716e4486d4f3d631f40b109de8cc2_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_d848239ab1498e9d835775cb160798bf75bb20ebc54b167b91ae133726614b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d848239ab1498e9d835775cb160798bf75bb20ebc54b167b91ae133726614b70->enter($__internal_d848239ab1498e9d835775cb160798bf75bb20ebc54b167b91ae133726614b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_d848239ab1498e9d835775cb160798bf75bb20ebc54b167b91ae133726614b70->leave($__internal_d848239ab1498e9d835775cb160798bf75bb20ebc54b167b91ae133726614b70_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed29fb21350e601198322996947b0bd89ecd703e613c4f17b2bc1b0372ff3915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed29fb21350e601198322996947b0bd89ecd703e613c4f17b2bc1b0372ff3915->enter($__internal_ed29fb21350e601198322996947b0bd89ecd703e613c4f17b2bc1b0372ff3915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed29fb21350e601198322996947b0bd89ecd703e613c4f17b2bc1b0372ff3915->leave($__internal_ed29fb21350e601198322996947b0bd89ecd703e613c4f17b2bc1b0372ff3915_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1e2602ca7f89536a6f5b852c8c9a29ce447110b4efbed7efaae767a6f39f7bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2602ca7f89536a6f5b852c8c9a29ce447110b4efbed7efaae767a6f39f7bf2->enter($__internal_1e2602ca7f89536a6f5b852c8c9a29ce447110b4efbed7efaae767a6f39f7bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_1e2602ca7f89536a6f5b852c8c9a29ce447110b4efbed7efaae767a6f39f7bf2->leave($__internal_1e2602ca7f89536a6f5b852c8c9a29ce447110b4efbed7efaae767a6f39f7bf2_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c18a7c77dc707402b6f40ab641a1baeb90d708467c364656a43d6ed3dfd9eb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18a7c77dc707402b6f40ab641a1baeb90d708467c364656a43d6ed3dfd9eb15->enter($__internal_c18a7c77dc707402b6f40ab641a1baeb90d708467c364656a43d6ed3dfd9eb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_c18a7c77dc707402b6f40ab641a1baeb90d708467c364656a43d6ed3dfd9eb15->leave($__internal_c18a7c77dc707402b6f40ab641a1baeb90d708467c364656a43d6ed3dfd9eb15_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_547fa6139cdeebe4f1781a421f8747dd3f3cdd54e5c9908d1deed6b09641e7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547fa6139cdeebe4f1781a421f8747dd3f3cdd54e5c9908d1deed6b09641e7dd->enter($__internal_547fa6139cdeebe4f1781a421f8747dd3f3cdd54e5c9908d1deed6b09641e7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_547fa6139cdeebe4f1781a421f8747dd3f3cdd54e5c9908d1deed6b09641e7dd->leave($__internal_547fa6139cdeebe4f1781a421f8747dd3f3cdd54e5c9908d1deed6b09641e7dd_prof);

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
