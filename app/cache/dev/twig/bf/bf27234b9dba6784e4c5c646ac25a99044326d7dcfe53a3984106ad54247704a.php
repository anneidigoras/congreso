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
        $__internal_6663c99eeeb6bdec722b5bf8392b2b2b29eab9dc9f41a8980e26ff84772e0c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6663c99eeeb6bdec722b5bf8392b2b2b29eab9dc9f41a8980e26ff84772e0c93->enter($__internal_6663c99eeeb6bdec722b5bf8392b2b2b29eab9dc9f41a8980e26ff84772e0c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_6663c99eeeb6bdec722b5bf8392b2b2b29eab9dc9f41a8980e26ff84772e0c93->leave($__internal_6663c99eeeb6bdec722b5bf8392b2b2b29eab9dc9f41a8980e26ff84772e0c93_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_28e2687257059274fa9f082207ff7185f9cc425386ed08572e332473f876151e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e2687257059274fa9f082207ff7185f9cc425386ed08572e332473f876151e->enter($__internal_28e2687257059274fa9f082207ff7185f9cc425386ed08572e332473f876151e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_28e2687257059274fa9f082207ff7185f9cc425386ed08572e332473f876151e->leave($__internal_28e2687257059274fa9f082207ff7185f9cc425386ed08572e332473f876151e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fce14b3f48b1e1a9ef6b9cb652a49cb98a765c01e91363e602a4ac7fba986105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce14b3f48b1e1a9ef6b9cb652a49cb98a765c01e91363e602a4ac7fba986105->enter($__internal_fce14b3f48b1e1a9ef6b9cb652a49cb98a765c01e91363e602a4ac7fba986105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_fce14b3f48b1e1a9ef6b9cb652a49cb98a765c01e91363e602a4ac7fba986105->leave($__internal_fce14b3f48b1e1a9ef6b9cb652a49cb98a765c01e91363e602a4ac7fba986105_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6afa63866688168564196c7a5a8688a39383ed6f46da77f9eddee2caaa456677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afa63866688168564196c7a5a8688a39383ed6f46da77f9eddee2caaa456677->enter($__internal_6afa63866688168564196c7a5a8688a39383ed6f46da77f9eddee2caaa456677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_6afa63866688168564196c7a5a8688a39383ed6f46da77f9eddee2caaa456677->leave($__internal_6afa63866688168564196c7a5a8688a39383ed6f46da77f9eddee2caaa456677_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_e328e0dc45f06d5daf65233deccfce2191e20751df3599f06c115308af9f9906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e328e0dc45f06d5daf65233deccfce2191e20751df3599f06c115308af9f9906->enter($__internal_e328e0dc45f06d5daf65233deccfce2191e20751df3599f06c115308af9f9906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_e328e0dc45f06d5daf65233deccfce2191e20751df3599f06c115308af9f9906->leave($__internal_e328e0dc45f06d5daf65233deccfce2191e20751df3599f06c115308af9f9906_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_3c540d21f635eacfba9b90fccfc0b2414d0b8256645d95f40f7af19029194697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c540d21f635eacfba9b90fccfc0b2414d0b8256645d95f40f7af19029194697->enter($__internal_3c540d21f635eacfba9b90fccfc0b2414d0b8256645d95f40f7af19029194697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_3c540d21f635eacfba9b90fccfc0b2414d0b8256645d95f40f7af19029194697->leave($__internal_3c540d21f635eacfba9b90fccfc0b2414d0b8256645d95f40f7af19029194697_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_c722cd42441890b853cd5eff1ee712d81a65a4068d165a5c4eb6c8f483c2fe28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c722cd42441890b853cd5eff1ee712d81a65a4068d165a5c4eb6c8f483c2fe28->enter($__internal_c722cd42441890b853cd5eff1ee712d81a65a4068d165a5c4eb6c8f483c2fe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c722cd42441890b853cd5eff1ee712d81a65a4068d165a5c4eb6c8f483c2fe28->leave($__internal_c722cd42441890b853cd5eff1ee712d81a65a4068d165a5c4eb6c8f483c2fe28_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9a1137c6b5ba3088a9368d2a23b14dd3090af2d15a16ecba5ee6bdedd71abef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1137c6b5ba3088a9368d2a23b14dd3090af2d15a16ecba5ee6bdedd71abef3->enter($__internal_9a1137c6b5ba3088a9368d2a23b14dd3090af2d15a16ecba5ee6bdedd71abef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9a1137c6b5ba3088a9368d2a23b14dd3090af2d15a16ecba5ee6bdedd71abef3->leave($__internal_9a1137c6b5ba3088a9368d2a23b14dd3090af2d15a16ecba5ee6bdedd71abef3_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1d47ed52c08a48262be9f3700b8bd6f3745221714e75181bf2c5d81e8a37191e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d47ed52c08a48262be9f3700b8bd6f3745221714e75181bf2c5d81e8a37191e->enter($__internal_1d47ed52c08a48262be9f3700b8bd6f3745221714e75181bf2c5d81e8a37191e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_1d47ed52c08a48262be9f3700b8bd6f3745221714e75181bf2c5d81e8a37191e->leave($__internal_1d47ed52c08a48262be9f3700b8bd6f3745221714e75181bf2c5d81e8a37191e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1125cb20e0653f8c468dec47bb6130fa0970a748ef26f95a913a7668efe3d846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1125cb20e0653f8c468dec47bb6130fa0970a748ef26f95a913a7668efe3d846->enter($__internal_1125cb20e0653f8c468dec47bb6130fa0970a748ef26f95a913a7668efe3d846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1125cb20e0653f8c468dec47bb6130fa0970a748ef26f95a913a7668efe3d846->leave($__internal_1125cb20e0653f8c468dec47bb6130fa0970a748ef26f95a913a7668efe3d846_prof);

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
