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
        $__internal_e4ee4ee2ea078c5e309e741bdbdb0b1f66e39b4262faf654cbb4728a4fc20e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ee4ee2ea078c5e309e741bdbdb0b1f66e39b4262faf654cbb4728a4fc20e45->enter($__internal_e4ee4ee2ea078c5e309e741bdbdb0b1f66e39b4262faf654cbb4728a4fc20e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_e4ee4ee2ea078c5e309e741bdbdb0b1f66e39b4262faf654cbb4728a4fc20e45->leave($__internal_e4ee4ee2ea078c5e309e741bdbdb0b1f66e39b4262faf654cbb4728a4fc20e45_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_14d57e4c1408d5878a382bb7b8637899c06bc40fdf41772d2ea3c35e93ddb7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d57e4c1408d5878a382bb7b8637899c06bc40fdf41772d2ea3c35e93ddb7d0->enter($__internal_14d57e4c1408d5878a382bb7b8637899c06bc40fdf41772d2ea3c35e93ddb7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_14d57e4c1408d5878a382bb7b8637899c06bc40fdf41772d2ea3c35e93ddb7d0->leave($__internal_14d57e4c1408d5878a382bb7b8637899c06bc40fdf41772d2ea3c35e93ddb7d0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16433bd57aa57b513f361d493f358dcc0a296f26bb940f53d6fc250ec2095ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16433bd57aa57b513f361d493f358dcc0a296f26bb940f53d6fc250ec2095ca2->enter($__internal_16433bd57aa57b513f361d493f358dcc0a296f26bb940f53d6fc250ec2095ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_16433bd57aa57b513f361d493f358dcc0a296f26bb940f53d6fc250ec2095ca2->leave($__internal_16433bd57aa57b513f361d493f358dcc0a296f26bb940f53d6fc250ec2095ca2_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bb83ec9acc5bdd3a25d9e42688788ca96932227202a551fe165841b9356733b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb83ec9acc5bdd3a25d9e42688788ca96932227202a551fe165841b9356733b8->enter($__internal_bb83ec9acc5bdd3a25d9e42688788ca96932227202a551fe165841b9356733b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_bb83ec9acc5bdd3a25d9e42688788ca96932227202a551fe165841b9356733b8->leave($__internal_bb83ec9acc5bdd3a25d9e42688788ca96932227202a551fe165841b9356733b8_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_0a89be5bb7fa76dcec8d0dfe409c1b8cfba53e880a939daedb1e476ade2a20dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a89be5bb7fa76dcec8d0dfe409c1b8cfba53e880a939daedb1e476ade2a20dd->enter($__internal_0a89be5bb7fa76dcec8d0dfe409c1b8cfba53e880a939daedb1e476ade2a20dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_0a89be5bb7fa76dcec8d0dfe409c1b8cfba53e880a939daedb1e476ade2a20dd->leave($__internal_0a89be5bb7fa76dcec8d0dfe409c1b8cfba53e880a939daedb1e476ade2a20dd_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_10af9941e0973583fb7a4a30a43050af93d2d3a94d19be75335b9c52a0ac7fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10af9941e0973583fb7a4a30a43050af93d2d3a94d19be75335b9c52a0ac7fd3->enter($__internal_10af9941e0973583fb7a4a30a43050af93d2d3a94d19be75335b9c52a0ac7fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_10af9941e0973583fb7a4a30a43050af93d2d3a94d19be75335b9c52a0ac7fd3->leave($__internal_10af9941e0973583fb7a4a30a43050af93d2d3a94d19be75335b9c52a0ac7fd3_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c6ed39b310bd64b06c0c1464774e4d2568fe8269909e63e04212cae0d40b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c6ed39b310bd64b06c0c1464774e4d2568fe8269909e63e04212cae0d40b66->enter($__internal_a0c6ed39b310bd64b06c0c1464774e4d2568fe8269909e63e04212cae0d40b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a0c6ed39b310bd64b06c0c1464774e4d2568fe8269909e63e04212cae0d40b66->leave($__internal_a0c6ed39b310bd64b06c0c1464774e4d2568fe8269909e63e04212cae0d40b66_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_69e5467141144d60a74b70d510bcba054d00b156ebad290d31c32ff5940f1147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e5467141144d60a74b70d510bcba054d00b156ebad290d31c32ff5940f1147->enter($__internal_69e5467141144d60a74b70d510bcba054d00b156ebad290d31c32ff5940f1147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_69e5467141144d60a74b70d510bcba054d00b156ebad290d31c32ff5940f1147->leave($__internal_69e5467141144d60a74b70d510bcba054d00b156ebad290d31c32ff5940f1147_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4fa29ceabe142789b85f4d8d4df7f1f8894948a3f4d23ca12864fc27b1673bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa29ceabe142789b85f4d8d4df7f1f8894948a3f4d23ca12864fc27b1673bb4->enter($__internal_4fa29ceabe142789b85f4d8d4df7f1f8894948a3f4d23ca12864fc27b1673bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_4fa29ceabe142789b85f4d8d4df7f1f8894948a3f4d23ca12864fc27b1673bb4->leave($__internal_4fa29ceabe142789b85f4d8d4df7f1f8894948a3f4d23ca12864fc27b1673bb4_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a841c1b14cd9a4d6747a348ce024acf43adcdcb21b549a237e8933630239734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a841c1b14cd9a4d6747a348ce024acf43adcdcb21b549a237e8933630239734->enter($__internal_8a841c1b14cd9a4d6747a348ce024acf43adcdcb21b549a237e8933630239734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8a841c1b14cd9a4d6747a348ce024acf43adcdcb21b549a237e8933630239734->leave($__internal_8a841c1b14cd9a4d6747a348ce024acf43adcdcb21b549a237e8933630239734_prof);

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
