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
        $__internal_abfd2a41827f5a0803592ff2c31ed784926168630f81c1f99847daad18581a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfd2a41827f5a0803592ff2c31ed784926168630f81c1f99847daad18581a5b->enter($__internal_abfd2a41827f5a0803592ff2c31ed784926168630f81c1f99847daad18581a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_abfd2a41827f5a0803592ff2c31ed784926168630f81c1f99847daad18581a5b->leave($__internal_abfd2a41827f5a0803592ff2c31ed784926168630f81c1f99847daad18581a5b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_83da3bd6d9e2e841bb5b542f556325f41a47354d9dd1d8fa53e7214f35991f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83da3bd6d9e2e841bb5b542f556325f41a47354d9dd1d8fa53e7214f35991f6d->enter($__internal_83da3bd6d9e2e841bb5b542f556325f41a47354d9dd1d8fa53e7214f35991f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_83da3bd6d9e2e841bb5b542f556325f41a47354d9dd1d8fa53e7214f35991f6d->leave($__internal_83da3bd6d9e2e841bb5b542f556325f41a47354d9dd1d8fa53e7214f35991f6d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf29cee82c8348b1ef1ef2eb6d8c01c974f43a0796a7e01b88a5d503f5d295a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf29cee82c8348b1ef1ef2eb6d8c01c974f43a0796a7e01b88a5d503f5d295a2->enter($__internal_cf29cee82c8348b1ef1ef2eb6d8c01c974f43a0796a7e01b88a5d503f5d295a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_cf29cee82c8348b1ef1ef2eb6d8c01c974f43a0796a7e01b88a5d503f5d295a2->leave($__internal_cf29cee82c8348b1ef1ef2eb6d8c01c974f43a0796a7e01b88a5d503f5d295a2_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1e320a8c624af70b8f9075393e503f50dd07a14ac734ce575bafcbf9118c5a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e320a8c624af70b8f9075393e503f50dd07a14ac734ce575bafcbf9118c5a3a->enter($__internal_1e320a8c624af70b8f9075393e503f50dd07a14ac734ce575bafcbf9118c5a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_1e320a8c624af70b8f9075393e503f50dd07a14ac734ce575bafcbf9118c5a3a->leave($__internal_1e320a8c624af70b8f9075393e503f50dd07a14ac734ce575bafcbf9118c5a3a_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_1e8dc561783e73db31dba3f4fd349a70bda15842d145fd36199c8d77ea487a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8dc561783e73db31dba3f4fd349a70bda15842d145fd36199c8d77ea487a6d->enter($__internal_1e8dc561783e73db31dba3f4fd349a70bda15842d145fd36199c8d77ea487a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_1e8dc561783e73db31dba3f4fd349a70bda15842d145fd36199c8d77ea487a6d->leave($__internal_1e8dc561783e73db31dba3f4fd349a70bda15842d145fd36199c8d77ea487a6d_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_541a5e30ac2752f9483f68ad11dbfbf4a2a717e58e20fa1c887865c8987537df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541a5e30ac2752f9483f68ad11dbfbf4a2a717e58e20fa1c887865c8987537df->enter($__internal_541a5e30ac2752f9483f68ad11dbfbf4a2a717e58e20fa1c887865c8987537df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_541a5e30ac2752f9483f68ad11dbfbf4a2a717e58e20fa1c887865c8987537df->leave($__internal_541a5e30ac2752f9483f68ad11dbfbf4a2a717e58e20fa1c887865c8987537df_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_7efc1d309586249c91a35d62e1f70dfff8ca716dc5bf1a17722197717b790899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efc1d309586249c91a35d62e1f70dfff8ca716dc5bf1a17722197717b790899->enter($__internal_7efc1d309586249c91a35d62e1f70dfff8ca716dc5bf1a17722197717b790899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7efc1d309586249c91a35d62e1f70dfff8ca716dc5bf1a17722197717b790899->leave($__internal_7efc1d309586249c91a35d62e1f70dfff8ca716dc5bf1a17722197717b790899_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a1a3f06129eecca90c2d89b8346c185e7d8cf44af277c376c803fd185bad2a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a3f06129eecca90c2d89b8346c185e7d8cf44af277c376c803fd185bad2a75->enter($__internal_a1a3f06129eecca90c2d89b8346c185e7d8cf44af277c376c803fd185bad2a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a1a3f06129eecca90c2d89b8346c185e7d8cf44af277c376c803fd185bad2a75->leave($__internal_a1a3f06129eecca90c2d89b8346c185e7d8cf44af277c376c803fd185bad2a75_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3ff5f4f3072d07865b632d4e3b811b525b98fa98b428d4b4d8619733da71c53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff5f4f3072d07865b632d4e3b811b525b98fa98b428d4b4d8619733da71c53b->enter($__internal_3ff5f4f3072d07865b632d4e3b811b525b98fa98b428d4b4d8619733da71c53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_3ff5f4f3072d07865b632d4e3b811b525b98fa98b428d4b4d8619733da71c53b->leave($__internal_3ff5f4f3072d07865b632d4e3b811b525b98fa98b428d4b4d8619733da71c53b_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bab54f83f1daf9e09098ac4d4cc94ef90a7549782ae6dbc91a575fa3e5ea3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bab54f83f1daf9e09098ac4d4cc94ef90a7549782ae6dbc91a575fa3e5ea3ee->enter($__internal_6bab54f83f1daf9e09098ac4d4cc94ef90a7549782ae6dbc91a575fa3e5ea3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6bab54f83f1daf9e09098ac4d4cc94ef90a7549782ae6dbc91a575fa3e5ea3ee->leave($__internal_6bab54f83f1daf9e09098ac4d4cc94ef90a7549782ae6dbc91a575fa3e5ea3ee_prof);

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
