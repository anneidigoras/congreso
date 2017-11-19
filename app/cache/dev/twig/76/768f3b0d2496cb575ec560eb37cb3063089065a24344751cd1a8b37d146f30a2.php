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
        $__internal_8caa1928194b9576ee1ab4edb72905efc83677de1c60840e2825ff7ef88f3452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caa1928194b9576ee1ab4edb72905efc83677de1c60840e2825ff7ef88f3452->enter($__internal_8caa1928194b9576ee1ab4edb72905efc83677de1c60840e2825ff7ef88f3452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_8caa1928194b9576ee1ab4edb72905efc83677de1c60840e2825ff7ef88f3452->leave($__internal_8caa1928194b9576ee1ab4edb72905efc83677de1c60840e2825ff7ef88f3452_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ad4f9315c1e76539d66175af8515eab456da97a25252632a5e64daf0a1b2303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad4f9315c1e76539d66175af8515eab456da97a25252632a5e64daf0a1b2303->enter($__internal_9ad4f9315c1e76539d66175af8515eab456da97a25252632a5e64daf0a1b2303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_9ad4f9315c1e76539d66175af8515eab456da97a25252632a5e64daf0a1b2303->leave($__internal_9ad4f9315c1e76539d66175af8515eab456da97a25252632a5e64daf0a1b2303_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7fb4e1fd9074e45e284ab04a4a0eaa35b9293d4bc8444207e554416ccd83004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fb4e1fd9074e45e284ab04a4a0eaa35b9293d4bc8444207e554416ccd83004->enter($__internal_a7fb4e1fd9074e45e284ab04a4a0eaa35b9293d4bc8444207e554416ccd83004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_a7fb4e1fd9074e45e284ab04a4a0eaa35b9293d4bc8444207e554416ccd83004->leave($__internal_a7fb4e1fd9074e45e284ab04a4a0eaa35b9293d4bc8444207e554416ccd83004_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0adb52d8f8c3c6d92067642742a08d9621757fe191b374c6cee01251ce19136c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adb52d8f8c3c6d92067642742a08d9621757fe191b374c6cee01251ce19136c->enter($__internal_0adb52d8f8c3c6d92067642742a08d9621757fe191b374c6cee01251ce19136c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_0adb52d8f8c3c6d92067642742a08d9621757fe191b374c6cee01251ce19136c->leave($__internal_0adb52d8f8c3c6d92067642742a08d9621757fe191b374c6cee01251ce19136c_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_42a9fdffdba4f87f2bdd24fe85d7eaee016817f6ca0c47779091fd55936038b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a9fdffdba4f87f2bdd24fe85d7eaee016817f6ca0c47779091fd55936038b3->enter($__internal_42a9fdffdba4f87f2bdd24fe85d7eaee016817f6ca0c47779091fd55936038b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_42a9fdffdba4f87f2bdd24fe85d7eaee016817f6ca0c47779091fd55936038b3->leave($__internal_42a9fdffdba4f87f2bdd24fe85d7eaee016817f6ca0c47779091fd55936038b3_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_425924e66e647535f3d400d43e3d196ff493573c75b6f68abe3f836c021b9587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425924e66e647535f3d400d43e3d196ff493573c75b6f68abe3f836c021b9587->enter($__internal_425924e66e647535f3d400d43e3d196ff493573c75b6f68abe3f836c021b9587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_425924e66e647535f3d400d43e3d196ff493573c75b6f68abe3f836c021b9587->leave($__internal_425924e66e647535f3d400d43e3d196ff493573c75b6f68abe3f836c021b9587_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_728163a8bf357295ee893c5a6f9e31f6d557da1bd714e252ffe5a53e8b06eaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728163a8bf357295ee893c5a6f9e31f6d557da1bd714e252ffe5a53e8b06eaf8->enter($__internal_728163a8bf357295ee893c5a6f9e31f6d557da1bd714e252ffe5a53e8b06eaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_728163a8bf357295ee893c5a6f9e31f6d557da1bd714e252ffe5a53e8b06eaf8->leave($__internal_728163a8bf357295ee893c5a6f9e31f6d557da1bd714e252ffe5a53e8b06eaf8_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a4a53947e7ae5fe472108957f55e8f0fa0b5f7e1485366f68abae59d117292b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a53947e7ae5fe472108957f55e8f0fa0b5f7e1485366f68abae59d117292b0->enter($__internal_a4a53947e7ae5fe472108957f55e8f0fa0b5f7e1485366f68abae59d117292b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a4a53947e7ae5fe472108957f55e8f0fa0b5f7e1485366f68abae59d117292b0->leave($__internal_a4a53947e7ae5fe472108957f55e8f0fa0b5f7e1485366f68abae59d117292b0_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3a8185828d06dd09001e7d0876b2ab7a551035b3953d115a62ba8ce44363e443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8185828d06dd09001e7d0876b2ab7a551035b3953d115a62ba8ce44363e443->enter($__internal_3a8185828d06dd09001e7d0876b2ab7a551035b3953d115a62ba8ce44363e443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_3a8185828d06dd09001e7d0876b2ab7a551035b3953d115a62ba8ce44363e443->leave($__internal_3a8185828d06dd09001e7d0876b2ab7a551035b3953d115a62ba8ce44363e443_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9aa31d2b142aafcfb1667037756b734102768f8170cffc6f6fb65d5293ad91be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa31d2b142aafcfb1667037756b734102768f8170cffc6f6fb65d5293ad91be->enter($__internal_9aa31d2b142aafcfb1667037756b734102768f8170cffc6f6fb65d5293ad91be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9aa31d2b142aafcfb1667037756b734102768f8170cffc6f6fb65d5293ad91be->leave($__internal_9aa31d2b142aafcfb1667037756b734102768f8170cffc6f6fb65d5293ad91be_prof);

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
