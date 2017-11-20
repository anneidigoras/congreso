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
        $__internal_142463d16b858cdde689c803c73c912cd673976c8853b23add45f9fb4d9e7506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142463d16b858cdde689c803c73c912cd673976c8853b23add45f9fb4d9e7506->enter($__internal_142463d16b858cdde689c803c73c912cd673976c8853b23add45f9fb4d9e7506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_142463d16b858cdde689c803c73c912cd673976c8853b23add45f9fb4d9e7506->leave($__internal_142463d16b858cdde689c803c73c912cd673976c8853b23add45f9fb4d9e7506_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3930394a388c267d59602fe777c3c4a2edddddac434ce9db6d831e5f99dde382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3930394a388c267d59602fe777c3c4a2edddddac434ce9db6d831e5f99dde382->enter($__internal_3930394a388c267d59602fe777c3c4a2edddddac434ce9db6d831e5f99dde382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_3930394a388c267d59602fe777c3c4a2edddddac434ce9db6d831e5f99dde382->leave($__internal_3930394a388c267d59602fe777c3c4a2edddddac434ce9db6d831e5f99dde382_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91260424e3db7ac8381e152306a96b27be4a822df3cd734a9ad73c76c82959a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91260424e3db7ac8381e152306a96b27be4a822df3cd734a9ad73c76c82959a0->enter($__internal_91260424e3db7ac8381e152306a96b27be4a822df3cd734a9ad73c76c82959a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_91260424e3db7ac8381e152306a96b27be4a822df3cd734a9ad73c76c82959a0->leave($__internal_91260424e3db7ac8381e152306a96b27be4a822df3cd734a9ad73c76c82959a0_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ba19e9e7631a46d875366c7ca20d54dafc839652d037780187a82dbbe68707ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba19e9e7631a46d875366c7ca20d54dafc839652d037780187a82dbbe68707ec->enter($__internal_ba19e9e7631a46d875366c7ca20d54dafc839652d037780187a82dbbe68707ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_ba19e9e7631a46d875366c7ca20d54dafc839652d037780187a82dbbe68707ec->leave($__internal_ba19e9e7631a46d875366c7ca20d54dafc839652d037780187a82dbbe68707ec_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_a5a2c46865b735c7935c45c55104e8b1d832003cfb51c8c26d66a7d5eaecf4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a2c46865b735c7935c45c55104e8b1d832003cfb51c8c26d66a7d5eaecf4b0->enter($__internal_a5a2c46865b735c7935c45c55104e8b1d832003cfb51c8c26d66a7d5eaecf4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_a5a2c46865b735c7935c45c55104e8b1d832003cfb51c8c26d66a7d5eaecf4b0->leave($__internal_a5a2c46865b735c7935c45c55104e8b1d832003cfb51c8c26d66a7d5eaecf4b0_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_059f0a6cff2935357ee1ffcc18bb33c8a09b5e4379a979d211af4b691962818c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059f0a6cff2935357ee1ffcc18bb33c8a09b5e4379a979d211af4b691962818c->enter($__internal_059f0a6cff2935357ee1ffcc18bb33c8a09b5e4379a979d211af4b691962818c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_059f0a6cff2935357ee1ffcc18bb33c8a09b5e4379a979d211af4b691962818c->leave($__internal_059f0a6cff2935357ee1ffcc18bb33c8a09b5e4379a979d211af4b691962818c_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00911ae17152d5367938fb363746205db55fec7f309c90b077ddfe7299af5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00911ae17152d5367938fb363746205db55fec7f309c90b077ddfe7299af5fe->enter($__internal_a00911ae17152d5367938fb363746205db55fec7f309c90b077ddfe7299af5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a00911ae17152d5367938fb363746205db55fec7f309c90b077ddfe7299af5fe->leave($__internal_a00911ae17152d5367938fb363746205db55fec7f309c90b077ddfe7299af5fe_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d1cd5624429bd873b727a90e2ba0cf358c19787072a5dc6d56ee69d2c039edab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cd5624429bd873b727a90e2ba0cf358c19787072a5dc6d56ee69d2c039edab->enter($__internal_d1cd5624429bd873b727a90e2ba0cf358c19787072a5dc6d56ee69d2c039edab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d1cd5624429bd873b727a90e2ba0cf358c19787072a5dc6d56ee69d2c039edab->leave($__internal_d1cd5624429bd873b727a90e2ba0cf358c19787072a5dc6d56ee69d2c039edab_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ca50cf41e3b2bc805e870255517e641e7a0d05ce13f6abbc899a2d81ceda4da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca50cf41e3b2bc805e870255517e641e7a0d05ce13f6abbc899a2d81ceda4da8->enter($__internal_ca50cf41e3b2bc805e870255517e641e7a0d05ce13f6abbc899a2d81ceda4da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_ca50cf41e3b2bc805e870255517e641e7a0d05ce13f6abbc899a2d81ceda4da8->leave($__internal_ca50cf41e3b2bc805e870255517e641e7a0d05ce13f6abbc899a2d81ceda4da8_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7a0c47b5c2829bfcea3e93dd91722b64e6a24769d76987fcdcbaa70aaec790d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a0c47b5c2829bfcea3e93dd91722b64e6a24769d76987fcdcbaa70aaec790d->enter($__internal_e7a0c47b5c2829bfcea3e93dd91722b64e6a24769d76987fcdcbaa70aaec790d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e7a0c47b5c2829bfcea3e93dd91722b64e6a24769d76987fcdcbaa70aaec790d->leave($__internal_e7a0c47b5c2829bfcea3e93dd91722b64e6a24769d76987fcdcbaa70aaec790d_prof);

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
