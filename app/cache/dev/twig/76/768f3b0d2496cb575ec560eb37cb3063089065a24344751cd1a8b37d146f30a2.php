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
        $__internal_4a19a3f1d2adcc5b5c5dce5749b6a8ab1a200b9008f0d477095a272b6bb950e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a19a3f1d2adcc5b5c5dce5749b6a8ab1a200b9008f0d477095a272b6bb950e3->enter($__internal_4a19a3f1d2adcc5b5c5dce5749b6a8ab1a200b9008f0d477095a272b6bb950e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_4a19a3f1d2adcc5b5c5dce5749b6a8ab1a200b9008f0d477095a272b6bb950e3->leave($__internal_4a19a3f1d2adcc5b5c5dce5749b6a8ab1a200b9008f0d477095a272b6bb950e3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_154da86e4b56a332bc38f089fc29001ae8125fb695dd8299362995d503bcecbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154da86e4b56a332bc38f089fc29001ae8125fb695dd8299362995d503bcecbd->enter($__internal_154da86e4b56a332bc38f089fc29001ae8125fb695dd8299362995d503bcecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_154da86e4b56a332bc38f089fc29001ae8125fb695dd8299362995d503bcecbd->leave($__internal_154da86e4b56a332bc38f089fc29001ae8125fb695dd8299362995d503bcecbd_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_118aad8b11b7aef54c66bc5d951fa883cff9cea6f0217f77d868b407bc67af5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118aad8b11b7aef54c66bc5d951fa883cff9cea6f0217f77d868b407bc67af5e->enter($__internal_118aad8b11b7aef54c66bc5d951fa883cff9cea6f0217f77d868b407bc67af5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_118aad8b11b7aef54c66bc5d951fa883cff9cea6f0217f77d868b407bc67af5e->leave($__internal_118aad8b11b7aef54c66bc5d951fa883cff9cea6f0217f77d868b407bc67af5e_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_db684e6f1288b4d39eab8d6d7d95c4156f0e8509992d4375210aac1e9715c4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db684e6f1288b4d39eab8d6d7d95c4156f0e8509992d4375210aac1e9715c4f1->enter($__internal_db684e6f1288b4d39eab8d6d7d95c4156f0e8509992d4375210aac1e9715c4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_db684e6f1288b4d39eab8d6d7d95c4156f0e8509992d4375210aac1e9715c4f1->leave($__internal_db684e6f1288b4d39eab8d6d7d95c4156f0e8509992d4375210aac1e9715c4f1_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_01ada182f3d7b9ee642f00b596af97baf100adea03559f76c2597f22d26b6d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ada182f3d7b9ee642f00b596af97baf100adea03559f76c2597f22d26b6d73->enter($__internal_01ada182f3d7b9ee642f00b596af97baf100adea03559f76c2597f22d26b6d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_01ada182f3d7b9ee642f00b596af97baf100adea03559f76c2597f22d26b6d73->leave($__internal_01ada182f3d7b9ee642f00b596af97baf100adea03559f76c2597f22d26b6d73_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_0e6ae2ab14443bc3c9d54fa79dfd0dddec5cd195dc42dd46205b0d81e958dcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6ae2ab14443bc3c9d54fa79dfd0dddec5cd195dc42dd46205b0d81e958dcac->enter($__internal_0e6ae2ab14443bc3c9d54fa79dfd0dddec5cd195dc42dd46205b0d81e958dcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_0e6ae2ab14443bc3c9d54fa79dfd0dddec5cd195dc42dd46205b0d81e958dcac->leave($__internal_0e6ae2ab14443bc3c9d54fa79dfd0dddec5cd195dc42dd46205b0d81e958dcac_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_385f6febd8cfc6ec31e73a15b7725f997de22494bca9a5c881d6e84289c28f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385f6febd8cfc6ec31e73a15b7725f997de22494bca9a5c881d6e84289c28f16->enter($__internal_385f6febd8cfc6ec31e73a15b7725f997de22494bca9a5c881d6e84289c28f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_385f6febd8cfc6ec31e73a15b7725f997de22494bca9a5c881d6e84289c28f16->leave($__internal_385f6febd8cfc6ec31e73a15b7725f997de22494bca9a5c881d6e84289c28f16_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9352dae1d166d1a980a803764faaef825a4c5cdeffc850d732ffa885a23ddde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9352dae1d166d1a980a803764faaef825a4c5cdeffc850d732ffa885a23ddde6->enter($__internal_9352dae1d166d1a980a803764faaef825a4c5cdeffc850d732ffa885a23ddde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9352dae1d166d1a980a803764faaef825a4c5cdeffc850d732ffa885a23ddde6->leave($__internal_9352dae1d166d1a980a803764faaef825a4c5cdeffc850d732ffa885a23ddde6_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5b23b7338e41497518c1dea74130e272e512752fd8af4720506e45c1eb08b1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b23b7338e41497518c1dea74130e272e512752fd8af4720506e45c1eb08b1bc->enter($__internal_5b23b7338e41497518c1dea74130e272e512752fd8af4720506e45c1eb08b1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_5b23b7338e41497518c1dea74130e272e512752fd8af4720506e45c1eb08b1bc->leave($__internal_5b23b7338e41497518c1dea74130e272e512752fd8af4720506e45c1eb08b1bc_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f710fc771f48fd55820e116f227d70b562c4ff990756dc668f337d873a6b8d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f710fc771f48fd55820e116f227d70b562c4ff990756dc668f337d873a6b8d1a->enter($__internal_f710fc771f48fd55820e116f227d70b562c4ff990756dc668f337d873a6b8d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f710fc771f48fd55820e116f227d70b562c4ff990756dc668f337d873a6b8d1a->leave($__internal_f710fc771f48fd55820e116f227d70b562c4ff990756dc668f337d873a6b8d1a_prof);

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
