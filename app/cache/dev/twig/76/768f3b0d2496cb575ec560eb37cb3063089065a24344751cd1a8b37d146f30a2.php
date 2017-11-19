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
        $__internal_0b210d42a1a327534dd19388b310008892401b028d666e4a642e8354de0c8ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b210d42a1a327534dd19388b310008892401b028d666e4a642e8354de0c8ab4->enter($__internal_0b210d42a1a327534dd19388b310008892401b028d666e4a642e8354de0c8ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_0b210d42a1a327534dd19388b310008892401b028d666e4a642e8354de0c8ab4->leave($__internal_0b210d42a1a327534dd19388b310008892401b028d666e4a642e8354de0c8ab4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d9f441a3e85c2d7d6c3254a28cc0fe22512a3e8cf650469c39c6fda08e6cc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9f441a3e85c2d7d6c3254a28cc0fe22512a3e8cf650469c39c6fda08e6cc7e->enter($__internal_5d9f441a3e85c2d7d6c3254a28cc0fe22512a3e8cf650469c39c6fda08e6cc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_5d9f441a3e85c2d7d6c3254a28cc0fe22512a3e8cf650469c39c6fda08e6cc7e->leave($__internal_5d9f441a3e85c2d7d6c3254a28cc0fe22512a3e8cf650469c39c6fda08e6cc7e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddbc2a35b53b6460ea6110ceffe5a27dc05dadb368b73d6f078d84e2c4fbb5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbc2a35b53b6460ea6110ceffe5a27dc05dadb368b73d6f078d84e2c4fbb5f1->enter($__internal_ddbc2a35b53b6460ea6110ceffe5a27dc05dadb368b73d6f078d84e2c4fbb5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_ddbc2a35b53b6460ea6110ceffe5a27dc05dadb368b73d6f078d84e2c4fbb5f1->leave($__internal_ddbc2a35b53b6460ea6110ceffe5a27dc05dadb368b73d6f078d84e2c4fbb5f1_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_644e88a95584c3e611dc7d3615c0fc62365fa12ea6d49eba0154c0da546e6852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644e88a95584c3e611dc7d3615c0fc62365fa12ea6d49eba0154c0da546e6852->enter($__internal_644e88a95584c3e611dc7d3615c0fc62365fa12ea6d49eba0154c0da546e6852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_644e88a95584c3e611dc7d3615c0fc62365fa12ea6d49eba0154c0da546e6852->leave($__internal_644e88a95584c3e611dc7d3615c0fc62365fa12ea6d49eba0154c0da546e6852_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_f460ae65fca5dcaa47eaa54748f051e441d59854c12b7566757f55cdd0e99b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f460ae65fca5dcaa47eaa54748f051e441d59854c12b7566757f55cdd0e99b97->enter($__internal_f460ae65fca5dcaa47eaa54748f051e441d59854c12b7566757f55cdd0e99b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_f460ae65fca5dcaa47eaa54748f051e441d59854c12b7566757f55cdd0e99b97->leave($__internal_f460ae65fca5dcaa47eaa54748f051e441d59854c12b7566757f55cdd0e99b97_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_69727a9d76b2a7d41581118a3ba421954fc80457f1eb8a661b4059dd2773b261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69727a9d76b2a7d41581118a3ba421954fc80457f1eb8a661b4059dd2773b261->enter($__internal_69727a9d76b2a7d41581118a3ba421954fc80457f1eb8a661b4059dd2773b261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_69727a9d76b2a7d41581118a3ba421954fc80457f1eb8a661b4059dd2773b261->leave($__internal_69727a9d76b2a7d41581118a3ba421954fc80457f1eb8a661b4059dd2773b261_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_61698c543b8e4c764bd709e145afea82da3160186da43ce042afb580bd9bb307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61698c543b8e4c764bd709e145afea82da3160186da43ce042afb580bd9bb307->enter($__internal_61698c543b8e4c764bd709e145afea82da3160186da43ce042afb580bd9bb307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61698c543b8e4c764bd709e145afea82da3160186da43ce042afb580bd9bb307->leave($__internal_61698c543b8e4c764bd709e145afea82da3160186da43ce042afb580bd9bb307_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_15dc7e81da474811d02327e5715e79543233ccdb1982fab7a11ab33f8068cbfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dc7e81da474811d02327e5715e79543233ccdb1982fab7a11ab33f8068cbfb->enter($__internal_15dc7e81da474811d02327e5715e79543233ccdb1982fab7a11ab33f8068cbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_15dc7e81da474811d02327e5715e79543233ccdb1982fab7a11ab33f8068cbfb->leave($__internal_15dc7e81da474811d02327e5715e79543233ccdb1982fab7a11ab33f8068cbfb_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_947260d4d6b25af442d641e36a6d7ef5a3343f9b223fecaff10578610e4e104f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947260d4d6b25af442d641e36a6d7ef5a3343f9b223fecaff10578610e4e104f->enter($__internal_947260d4d6b25af442d641e36a6d7ef5a3343f9b223fecaff10578610e4e104f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_947260d4d6b25af442d641e36a6d7ef5a3343f9b223fecaff10578610e4e104f->leave($__internal_947260d4d6b25af442d641e36a6d7ef5a3343f9b223fecaff10578610e4e104f_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0783797a6b95930658838ae58a761c67adb7cbe3a8ca6b04a162b9fbf7e4a027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0783797a6b95930658838ae58a761c67adb7cbe3a8ca6b04a162b9fbf7e4a027->enter($__internal_0783797a6b95930658838ae58a761c67adb7cbe3a8ca6b04a162b9fbf7e4a027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0783797a6b95930658838ae58a761c67adb7cbe3a8ca6b04a162b9fbf7e4a027->leave($__internal_0783797a6b95930658838ae58a761c67adb7cbe3a8ca6b04a162b9fbf7e4a027_prof);

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
