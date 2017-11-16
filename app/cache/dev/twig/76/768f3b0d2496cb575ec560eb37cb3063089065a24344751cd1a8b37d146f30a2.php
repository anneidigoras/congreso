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
        $__internal_7549dcfed4207788763286de1b1d79e0f83396fd98878a607c7c557c55b1e417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7549dcfed4207788763286de1b1d79e0f83396fd98878a607c7c557c55b1e417->enter($__internal_7549dcfed4207788763286de1b1d79e0f83396fd98878a607c7c557c55b1e417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_7549dcfed4207788763286de1b1d79e0f83396fd98878a607c7c557c55b1e417->leave($__internal_7549dcfed4207788763286de1b1d79e0f83396fd98878a607c7c557c55b1e417_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_da7e48649591c6166ef368ff9a1b9089ea14db13885f407bcec4a6783bf344fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7e48649591c6166ef368ff9a1b9089ea14db13885f407bcec4a6783bf344fa->enter($__internal_da7e48649591c6166ef368ff9a1b9089ea14db13885f407bcec4a6783bf344fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_da7e48649591c6166ef368ff9a1b9089ea14db13885f407bcec4a6783bf344fa->leave($__internal_da7e48649591c6166ef368ff9a1b9089ea14db13885f407bcec4a6783bf344fa_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dfb90469aedad1b5edd351e5ba7f4dbc323d275c85bba837fbbca076d1c4ee8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb90469aedad1b5edd351e5ba7f4dbc323d275c85bba837fbbca076d1c4ee8d->enter($__internal_dfb90469aedad1b5edd351e5ba7f4dbc323d275c85bba837fbbca076d1c4ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_dfb90469aedad1b5edd351e5ba7f4dbc323d275c85bba837fbbca076d1c4ee8d->leave($__internal_dfb90469aedad1b5edd351e5ba7f4dbc323d275c85bba837fbbca076d1c4ee8d_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5183cf98d47cb66916be1a1bc8c4a93da26bb92be144379d545c8e796fec1dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5183cf98d47cb66916be1a1bc8c4a93da26bb92be144379d545c8e796fec1dc9->enter($__internal_5183cf98d47cb66916be1a1bc8c4a93da26bb92be144379d545c8e796fec1dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_5183cf98d47cb66916be1a1bc8c4a93da26bb92be144379d545c8e796fec1dc9->leave($__internal_5183cf98d47cb66916be1a1bc8c4a93da26bb92be144379d545c8e796fec1dc9_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_775a530b7d16d5588ba450adbbac92a09f731c5b1448c0095afede39e3100b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775a530b7d16d5588ba450adbbac92a09f731c5b1448c0095afede39e3100b05->enter($__internal_775a530b7d16d5588ba450adbbac92a09f731c5b1448c0095afede39e3100b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_775a530b7d16d5588ba450adbbac92a09f731c5b1448c0095afede39e3100b05->leave($__internal_775a530b7d16d5588ba450adbbac92a09f731c5b1448c0095afede39e3100b05_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_b6368b07f46d17205774f9253d8160d0fee05987da87377709d0b5bc5d9d8d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6368b07f46d17205774f9253d8160d0fee05987da87377709d0b5bc5d9d8d4e->enter($__internal_b6368b07f46d17205774f9253d8160d0fee05987da87377709d0b5bc5d9d8d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_b6368b07f46d17205774f9253d8160d0fee05987da87377709d0b5bc5d9d8d4e->leave($__internal_b6368b07f46d17205774f9253d8160d0fee05987da87377709d0b5bc5d9d8d4e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b5fa930db79c5b52f4e00ba9c7b9d6ab8c532570c155bfd3da40c01c12d0fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5fa930db79c5b52f4e00ba9c7b9d6ab8c532570c155bfd3da40c01c12d0fac->enter($__internal_3b5fa930db79c5b52f4e00ba9c7b9d6ab8c532570c155bfd3da40c01c12d0fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b5fa930db79c5b52f4e00ba9c7b9d6ab8c532570c155bfd3da40c01c12d0fac->leave($__internal_3b5fa930db79c5b52f4e00ba9c7b9d6ab8c532570c155bfd3da40c01c12d0fac_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6dbd3458ef90fb14f39d63016c0efb70eac8d5ee3a3eafffe8cf5c312dda0c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbd3458ef90fb14f39d63016c0efb70eac8d5ee3a3eafffe8cf5c312dda0c6e->enter($__internal_6dbd3458ef90fb14f39d63016c0efb70eac8d5ee3a3eafffe8cf5c312dda0c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6dbd3458ef90fb14f39d63016c0efb70eac8d5ee3a3eafffe8cf5c312dda0c6e->leave($__internal_6dbd3458ef90fb14f39d63016c0efb70eac8d5ee3a3eafffe8cf5c312dda0c6e_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_45e7918be2378754bfd19cf2e08b75f7decaf90a1fd05f22a98329705ae70707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e7918be2378754bfd19cf2e08b75f7decaf90a1fd05f22a98329705ae70707->enter($__internal_45e7918be2378754bfd19cf2e08b75f7decaf90a1fd05f22a98329705ae70707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_45e7918be2378754bfd19cf2e08b75f7decaf90a1fd05f22a98329705ae70707->leave($__internal_45e7918be2378754bfd19cf2e08b75f7decaf90a1fd05f22a98329705ae70707_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_765dcba1c5d9ee278ce27bb1976038bd56e9797c747fad17b102a9f1882c8d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765dcba1c5d9ee278ce27bb1976038bd56e9797c747fad17b102a9f1882c8d01->enter($__internal_765dcba1c5d9ee278ce27bb1976038bd56e9797c747fad17b102a9f1882c8d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_765dcba1c5d9ee278ce27bb1976038bd56e9797c747fad17b102a9f1882c8d01->leave($__internal_765dcba1c5d9ee278ce27bb1976038bd56e9797c747fad17b102a9f1882c8d01_prof);

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
