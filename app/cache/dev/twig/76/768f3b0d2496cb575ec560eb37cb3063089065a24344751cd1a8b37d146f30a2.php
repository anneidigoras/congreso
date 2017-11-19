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
        $__internal_0aa74b04040206cec518fbf3be20e215cc479c7ef69467523e772b4127b1d850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa74b04040206cec518fbf3be20e215cc479c7ef69467523e772b4127b1d850->enter($__internal_0aa74b04040206cec518fbf3be20e215cc479c7ef69467523e772b4127b1d850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_0aa74b04040206cec518fbf3be20e215cc479c7ef69467523e772b4127b1d850->leave($__internal_0aa74b04040206cec518fbf3be20e215cc479c7ef69467523e772b4127b1d850_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b3387eb96b2a3bba326a8f6e2f6238c889a71a8f71b1239f28c9cebc87f31e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3387eb96b2a3bba326a8f6e2f6238c889a71a8f71b1239f28c9cebc87f31e0->enter($__internal_8b3387eb96b2a3bba326a8f6e2f6238c889a71a8f71b1239f28c9cebc87f31e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_8b3387eb96b2a3bba326a8f6e2f6238c889a71a8f71b1239f28c9cebc87f31e0->leave($__internal_8b3387eb96b2a3bba326a8f6e2f6238c889a71a8f71b1239f28c9cebc87f31e0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77e0cb153e3c22a156ca9b2257a594b6a6a337c0e02264cae30d87c42a7d17e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e0cb153e3c22a156ca9b2257a594b6a6a337c0e02264cae30d87c42a7d17e8->enter($__internal_77e0cb153e3c22a156ca9b2257a594b6a6a337c0e02264cae30d87c42a7d17e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_77e0cb153e3c22a156ca9b2257a594b6a6a337c0e02264cae30d87c42a7d17e8->leave($__internal_77e0cb153e3c22a156ca9b2257a594b6a6a337c0e02264cae30d87c42a7d17e8_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6e5a51c704f387741d7b97b7dd20b0ce41b79703d45ba53b7e92ef0f80647a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5a51c704f387741d7b97b7dd20b0ce41b79703d45ba53b7e92ef0f80647a71->enter($__internal_6e5a51c704f387741d7b97b7dd20b0ce41b79703d45ba53b7e92ef0f80647a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_6e5a51c704f387741d7b97b7dd20b0ce41b79703d45ba53b7e92ef0f80647a71->leave($__internal_6e5a51c704f387741d7b97b7dd20b0ce41b79703d45ba53b7e92ef0f80647a71_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_8a389ef737dc28619bfa2162cd96f0f888ccf7317f06feae00329e896b41bab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a389ef737dc28619bfa2162cd96f0f888ccf7317f06feae00329e896b41bab8->enter($__internal_8a389ef737dc28619bfa2162cd96f0f888ccf7317f06feae00329e896b41bab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_8a389ef737dc28619bfa2162cd96f0f888ccf7317f06feae00329e896b41bab8->leave($__internal_8a389ef737dc28619bfa2162cd96f0f888ccf7317f06feae00329e896b41bab8_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_87fab518dc3b575400616a8b83030b840839689083e162450fdb23a0f2c0466c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fab518dc3b575400616a8b83030b840839689083e162450fdb23a0f2c0466c->enter($__internal_87fab518dc3b575400616a8b83030b840839689083e162450fdb23a0f2c0466c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_87fab518dc3b575400616a8b83030b840839689083e162450fdb23a0f2c0466c->leave($__internal_87fab518dc3b575400616a8b83030b840839689083e162450fdb23a0f2c0466c_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec4eb01fc8ea736ac47cb5892415000f2101c65e7c3dcbae46658dbc3e6f5546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4eb01fc8ea736ac47cb5892415000f2101c65e7c3dcbae46658dbc3e6f5546->enter($__internal_ec4eb01fc8ea736ac47cb5892415000f2101c65e7c3dcbae46658dbc3e6f5546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec4eb01fc8ea736ac47cb5892415000f2101c65e7c3dcbae46658dbc3e6f5546->leave($__internal_ec4eb01fc8ea736ac47cb5892415000f2101c65e7c3dcbae46658dbc3e6f5546_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9a20a42453248fc225653a51ed112c49e621e903b876a48ca32044081123feed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a20a42453248fc225653a51ed112c49e621e903b876a48ca32044081123feed->enter($__internal_9a20a42453248fc225653a51ed112c49e621e903b876a48ca32044081123feed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9a20a42453248fc225653a51ed112c49e621e903b876a48ca32044081123feed->leave($__internal_9a20a42453248fc225653a51ed112c49e621e903b876a48ca32044081123feed_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b5f8435204d6e11a7c1fdad60976e042e80f9665e79f90ddea3ffab8cb04b487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f8435204d6e11a7c1fdad60976e042e80f9665e79f90ddea3ffab8cb04b487->enter($__internal_b5f8435204d6e11a7c1fdad60976e042e80f9665e79f90ddea3ffab8cb04b487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_b5f8435204d6e11a7c1fdad60976e042e80f9665e79f90ddea3ffab8cb04b487->leave($__internal_b5f8435204d6e11a7c1fdad60976e042e80f9665e79f90ddea3ffab8cb04b487_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84eb76653eed1bc2bd948eb0b6daf0881c7d55b64afc54cfa3627cfef1b82678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84eb76653eed1bc2bd948eb0b6daf0881c7d55b64afc54cfa3627cfef1b82678->enter($__internal_84eb76653eed1bc2bd948eb0b6daf0881c7d55b64afc54cfa3627cfef1b82678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_84eb76653eed1bc2bd948eb0b6daf0881c7d55b64afc54cfa3627cfef1b82678->leave($__internal_84eb76653eed1bc2bd948eb0b6daf0881c7d55b64afc54cfa3627cfef1b82678_prof);

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
