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
        $__internal_01f6c88eaa11f0b605786bd6da10ff90518d4018f553cb1b7afd16cbe8050374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f6c88eaa11f0b605786bd6da10ff90518d4018f553cb1b7afd16cbe8050374->enter($__internal_01f6c88eaa11f0b605786bd6da10ff90518d4018f553cb1b7afd16cbe8050374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_01f6c88eaa11f0b605786bd6da10ff90518d4018f553cb1b7afd16cbe8050374->leave($__internal_01f6c88eaa11f0b605786bd6da10ff90518d4018f553cb1b7afd16cbe8050374_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf8c1ff9f1586b8e3b29501c16e89d83192885ee184ba9a41e2362110b0fad3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8c1ff9f1586b8e3b29501c16e89d83192885ee184ba9a41e2362110b0fad3d->enter($__internal_cf8c1ff9f1586b8e3b29501c16e89d83192885ee184ba9a41e2362110b0fad3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_cf8c1ff9f1586b8e3b29501c16e89d83192885ee184ba9a41e2362110b0fad3d->leave($__internal_cf8c1ff9f1586b8e3b29501c16e89d83192885ee184ba9a41e2362110b0fad3d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_059e5ab125d1a4a9ca8b22125945626aebc1e31dd4e43f74a1260d1b89033400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059e5ab125d1a4a9ca8b22125945626aebc1e31dd4e43f74a1260d1b89033400->enter($__internal_059e5ab125d1a4a9ca8b22125945626aebc1e31dd4e43f74a1260d1b89033400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_059e5ab125d1a4a9ca8b22125945626aebc1e31dd4e43f74a1260d1b89033400->leave($__internal_059e5ab125d1a4a9ca8b22125945626aebc1e31dd4e43f74a1260d1b89033400_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_cd528193cd45248aa1747a8ff6911de74f002f5117f5235e45eabb12b9c5ec4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd528193cd45248aa1747a8ff6911de74f002f5117f5235e45eabb12b9c5ec4d->enter($__internal_cd528193cd45248aa1747a8ff6911de74f002f5117f5235e45eabb12b9c5ec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_cd528193cd45248aa1747a8ff6911de74f002f5117f5235e45eabb12b9c5ec4d->leave($__internal_cd528193cd45248aa1747a8ff6911de74f002f5117f5235e45eabb12b9c5ec4d_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_52ff582c74efad744dc8d210b21b75d3102dac855a8ea6c67695fa12aa11bb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ff582c74efad744dc8d210b21b75d3102dac855a8ea6c67695fa12aa11bb35->enter($__internal_52ff582c74efad744dc8d210b21b75d3102dac855a8ea6c67695fa12aa11bb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_52ff582c74efad744dc8d210b21b75d3102dac855a8ea6c67695fa12aa11bb35->leave($__internal_52ff582c74efad744dc8d210b21b75d3102dac855a8ea6c67695fa12aa11bb35_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_636d1f6cdf754caa9d209be49d6d92f0f4bb7c7b15918821eec6e39f9d0db71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636d1f6cdf754caa9d209be49d6d92f0f4bb7c7b15918821eec6e39f9d0db71c->enter($__internal_636d1f6cdf754caa9d209be49d6d92f0f4bb7c7b15918821eec6e39f9d0db71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_636d1f6cdf754caa9d209be49d6d92f0f4bb7c7b15918821eec6e39f9d0db71c->leave($__internal_636d1f6cdf754caa9d209be49d6d92f0f4bb7c7b15918821eec6e39f9d0db71c_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd121ed210e3da8b66ce0f2f7721459e9d1a28b059849fc3adfd38d39a42db05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd121ed210e3da8b66ce0f2f7721459e9d1a28b059849fc3adfd38d39a42db05->enter($__internal_fd121ed210e3da8b66ce0f2f7721459e9d1a28b059849fc3adfd38d39a42db05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd121ed210e3da8b66ce0f2f7721459e9d1a28b059849fc3adfd38d39a42db05->leave($__internal_fd121ed210e3da8b66ce0f2f7721459e9d1a28b059849fc3adfd38d39a42db05_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9f76b3d22f0f75cedc26260917ac065dc911bd165d59410f964d9a52df05cab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f76b3d22f0f75cedc26260917ac065dc911bd165d59410f964d9a52df05cab6->enter($__internal_9f76b3d22f0f75cedc26260917ac065dc911bd165d59410f964d9a52df05cab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9f76b3d22f0f75cedc26260917ac065dc911bd165d59410f964d9a52df05cab6->leave($__internal_9f76b3d22f0f75cedc26260917ac065dc911bd165d59410f964d9a52df05cab6_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_392e632098c90151e59b2751d131bb0113815ebc34e3b31b70d44e1e16b7f33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392e632098c90151e59b2751d131bb0113815ebc34e3b31b70d44e1e16b7f33d->enter($__internal_392e632098c90151e59b2751d131bb0113815ebc34e3b31b70d44e1e16b7f33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_392e632098c90151e59b2751d131bb0113815ebc34e3b31b70d44e1e16b7f33d->leave($__internal_392e632098c90151e59b2751d131bb0113815ebc34e3b31b70d44e1e16b7f33d_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9beb1997361092928a0b641f1ba6f1d3925ffaae03f2025c05c111421283b826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9beb1997361092928a0b641f1ba6f1d3925ffaae03f2025c05c111421283b826->enter($__internal_9beb1997361092928a0b641f1ba6f1d3925ffaae03f2025c05c111421283b826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9beb1997361092928a0b641f1ba6f1d3925ffaae03f2025c05c111421283b826->leave($__internal_9beb1997361092928a0b641f1ba6f1d3925ffaae03f2025c05c111421283b826_prof);

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
