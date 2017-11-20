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
        $__internal_c7573806ba119144eaf225c9e977c6bde55463d9bd3c179535da8ce35bc74a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7573806ba119144eaf225c9e977c6bde55463d9bd3c179535da8ce35bc74a85->enter($__internal_c7573806ba119144eaf225c9e977c6bde55463d9bd3c179535da8ce35bc74a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_c7573806ba119144eaf225c9e977c6bde55463d9bd3c179535da8ce35bc74a85->leave($__internal_c7573806ba119144eaf225c9e977c6bde55463d9bd3c179535da8ce35bc74a85_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c1bb9fecda1b843c22236c3ca8123ac30fa8361d864619c3d2b1554e4f32eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1bb9fecda1b843c22236c3ca8123ac30fa8361d864619c3d2b1554e4f32eb1->enter($__internal_0c1bb9fecda1b843c22236c3ca8123ac30fa8361d864619c3d2b1554e4f32eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_0c1bb9fecda1b843c22236c3ca8123ac30fa8361d864619c3d2b1554e4f32eb1->leave($__internal_0c1bb9fecda1b843c22236c3ca8123ac30fa8361d864619c3d2b1554e4f32eb1_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1041a31be0b0c022fb7ad5674e1b10f1732b2137b269383e33490cf4a6051fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1041a31be0b0c022fb7ad5674e1b10f1732b2137b269383e33490cf4a6051fb4->enter($__internal_1041a31be0b0c022fb7ad5674e1b10f1732b2137b269383e33490cf4a6051fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_1041a31be0b0c022fb7ad5674e1b10f1732b2137b269383e33490cf4a6051fb4->leave($__internal_1041a31be0b0c022fb7ad5674e1b10f1732b2137b269383e33490cf4a6051fb4_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0b4f6def81c46faf5d8a60ad07ca96a39386beed37351ef102d81eadd0c7fdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4f6def81c46faf5d8a60ad07ca96a39386beed37351ef102d81eadd0c7fdc0->enter($__internal_0b4f6def81c46faf5d8a60ad07ca96a39386beed37351ef102d81eadd0c7fdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_0b4f6def81c46faf5d8a60ad07ca96a39386beed37351ef102d81eadd0c7fdc0->leave($__internal_0b4f6def81c46faf5d8a60ad07ca96a39386beed37351ef102d81eadd0c7fdc0_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_2a2ce1c4211a9b69ac14a30bee3c98bd8ae0507c69e585dd46d28f36c533b9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2ce1c4211a9b69ac14a30bee3c98bd8ae0507c69e585dd46d28f36c533b9f9->enter($__internal_2a2ce1c4211a9b69ac14a30bee3c98bd8ae0507c69e585dd46d28f36c533b9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_2a2ce1c4211a9b69ac14a30bee3c98bd8ae0507c69e585dd46d28f36c533b9f9->leave($__internal_2a2ce1c4211a9b69ac14a30bee3c98bd8ae0507c69e585dd46d28f36c533b9f9_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_2f1598aa54a6763a1f61011945dffa2c4dfc30d8746a734368a7104e76b4c387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1598aa54a6763a1f61011945dffa2c4dfc30d8746a734368a7104e76b4c387->enter($__internal_2f1598aa54a6763a1f61011945dffa2c4dfc30d8746a734368a7104e76b4c387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_2f1598aa54a6763a1f61011945dffa2c4dfc30d8746a734368a7104e76b4c387->leave($__internal_2f1598aa54a6763a1f61011945dffa2c4dfc30d8746a734368a7104e76b4c387_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_87d66e5f2a9bbb145a3d67e15e8ad54b8f689021929e558209f3ae890d535899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d66e5f2a9bbb145a3d67e15e8ad54b8f689021929e558209f3ae890d535899->enter($__internal_87d66e5f2a9bbb145a3d67e15e8ad54b8f689021929e558209f3ae890d535899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87d66e5f2a9bbb145a3d67e15e8ad54b8f689021929e558209f3ae890d535899->leave($__internal_87d66e5f2a9bbb145a3d67e15e8ad54b8f689021929e558209f3ae890d535899_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9632c7f051ec2a223a049be544a96e3ef664a869ca0aa9b5ae69f737ec22a01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9632c7f051ec2a223a049be544a96e3ef664a869ca0aa9b5ae69f737ec22a01e->enter($__internal_9632c7f051ec2a223a049be544a96e3ef664a869ca0aa9b5ae69f737ec22a01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9632c7f051ec2a223a049be544a96e3ef664a869ca0aa9b5ae69f737ec22a01e->leave($__internal_9632c7f051ec2a223a049be544a96e3ef664a869ca0aa9b5ae69f737ec22a01e_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_94f64b8eaf7f2983c2e96a7b51bea7aaeb29f8d8448f90711590d61a37fa9c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f64b8eaf7f2983c2e96a7b51bea7aaeb29f8d8448f90711590d61a37fa9c42->enter($__internal_94f64b8eaf7f2983c2e96a7b51bea7aaeb29f8d8448f90711590d61a37fa9c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_94f64b8eaf7f2983c2e96a7b51bea7aaeb29f8d8448f90711590d61a37fa9c42->leave($__internal_94f64b8eaf7f2983c2e96a7b51bea7aaeb29f8d8448f90711590d61a37fa9c42_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_769d00a5e161847415291277b0eaa43c0bd3a4bce5426237f52432fca7ff786c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769d00a5e161847415291277b0eaa43c0bd3a4bce5426237f52432fca7ff786c->enter($__internal_769d00a5e161847415291277b0eaa43c0bd3a4bce5426237f52432fca7ff786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_769d00a5e161847415291277b0eaa43c0bd3a4bce5426237f52432fca7ff786c->leave($__internal_769d00a5e161847415291277b0eaa43c0bd3a4bce5426237f52432fca7ff786c_prof);

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
