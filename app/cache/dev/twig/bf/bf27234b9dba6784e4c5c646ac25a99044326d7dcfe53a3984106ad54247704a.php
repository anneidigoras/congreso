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
        $__internal_c8fa652c71c2b48beb41740b6be87038b1d0a3e6984ee3d7745bd90ac3112973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fa652c71c2b48beb41740b6be87038b1d0a3e6984ee3d7745bd90ac3112973->enter($__internal_c8fa652c71c2b48beb41740b6be87038b1d0a3e6984ee3d7745bd90ac3112973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_c8fa652c71c2b48beb41740b6be87038b1d0a3e6984ee3d7745bd90ac3112973->leave($__internal_c8fa652c71c2b48beb41740b6be87038b1d0a3e6984ee3d7745bd90ac3112973_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0d9b0e32804ea749b3d4ff4cd139d13be3d177fad440b1e91442fea7327189c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d9b0e32804ea749b3d4ff4cd139d13be3d177fad440b1e91442fea7327189c->enter($__internal_c0d9b0e32804ea749b3d4ff4cd139d13be3d177fad440b1e91442fea7327189c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_c0d9b0e32804ea749b3d4ff4cd139d13be3d177fad440b1e91442fea7327189c->leave($__internal_c0d9b0e32804ea749b3d4ff4cd139d13be3d177fad440b1e91442fea7327189c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36e12aa3630c8dfb6f452443d5ae6abb58f0717ebf89e979a6bcb56110220459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e12aa3630c8dfb6f452443d5ae6abb58f0717ebf89e979a6bcb56110220459->enter($__internal_36e12aa3630c8dfb6f452443d5ae6abb58f0717ebf89e979a6bcb56110220459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_36e12aa3630c8dfb6f452443d5ae6abb58f0717ebf89e979a6bcb56110220459->leave($__internal_36e12aa3630c8dfb6f452443d5ae6abb58f0717ebf89e979a6bcb56110220459_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_885f772ac7289e01fc31f9620d25b3dd53845803699fff22ebd2ebfdc389357a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885f772ac7289e01fc31f9620d25b3dd53845803699fff22ebd2ebfdc389357a->enter($__internal_885f772ac7289e01fc31f9620d25b3dd53845803699fff22ebd2ebfdc389357a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_885f772ac7289e01fc31f9620d25b3dd53845803699fff22ebd2ebfdc389357a->leave($__internal_885f772ac7289e01fc31f9620d25b3dd53845803699fff22ebd2ebfdc389357a_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_59dd00728605f405b026c285ff92843c5f9edadadbcc08f09932bed02dedcf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dd00728605f405b026c285ff92843c5f9edadadbcc08f09932bed02dedcf14->enter($__internal_59dd00728605f405b026c285ff92843c5f9edadadbcc08f09932bed02dedcf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_59dd00728605f405b026c285ff92843c5f9edadadbcc08f09932bed02dedcf14->leave($__internal_59dd00728605f405b026c285ff92843c5f9edadadbcc08f09932bed02dedcf14_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_0a6231aaa0bc1281e3a3be5b80e33bd339c1245d39f91c1f5a5c31dfb4731e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6231aaa0bc1281e3a3be5b80e33bd339c1245d39f91c1f5a5c31dfb4731e52->enter($__internal_0a6231aaa0bc1281e3a3be5b80e33bd339c1245d39f91c1f5a5c31dfb4731e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_0a6231aaa0bc1281e3a3be5b80e33bd339c1245d39f91c1f5a5c31dfb4731e52->leave($__internal_0a6231aaa0bc1281e3a3be5b80e33bd339c1245d39f91c1f5a5c31dfb4731e52_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d8ceb81f914ed6c1ee2f2a70fc37a786ae4038b52f6014c6067ceac9281d52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8ceb81f914ed6c1ee2f2a70fc37a786ae4038b52f6014c6067ceac9281d52f->enter($__internal_2d8ceb81f914ed6c1ee2f2a70fc37a786ae4038b52f6014c6067ceac9281d52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d8ceb81f914ed6c1ee2f2a70fc37a786ae4038b52f6014c6067ceac9281d52f->leave($__internal_2d8ceb81f914ed6c1ee2f2a70fc37a786ae4038b52f6014c6067ceac9281d52f_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c7201b32850d861a3d38beaae098c4ecb6b5746a70b4b3307f390b33c5d16003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7201b32850d861a3d38beaae098c4ecb6b5746a70b4b3307f390b33c5d16003->enter($__internal_c7201b32850d861a3d38beaae098c4ecb6b5746a70b4b3307f390b33c5d16003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_c7201b32850d861a3d38beaae098c4ecb6b5746a70b4b3307f390b33c5d16003->leave($__internal_c7201b32850d861a3d38beaae098c4ecb6b5746a70b4b3307f390b33c5d16003_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c602d7d3dc78e86e02d7490987a91c58be9eecf3aa38524230ae943735cb8d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c602d7d3dc78e86e02d7490987a91c58be9eecf3aa38524230ae943735cb8d80->enter($__internal_c602d7d3dc78e86e02d7490987a91c58be9eecf3aa38524230ae943735cb8d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_c602d7d3dc78e86e02d7490987a91c58be9eecf3aa38524230ae943735cb8d80->leave($__internal_c602d7d3dc78e86e02d7490987a91c58be9eecf3aa38524230ae943735cb8d80_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b093afb7680c318bdedb88f84f5ea28c4373ae15acdc1e46999f6a05366eb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b093afb7680c318bdedb88f84f5ea28c4373ae15acdc1e46999f6a05366eb5f->enter($__internal_0b093afb7680c318bdedb88f84f5ea28c4373ae15acdc1e46999f6a05366eb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0b093afb7680c318bdedb88f84f5ea28c4373ae15acdc1e46999f6a05366eb5f->leave($__internal_0b093afb7680c318bdedb88f84f5ea28c4373ae15acdc1e46999f6a05366eb5f_prof);

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
