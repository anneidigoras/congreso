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
        $__internal_09f2ebecbfb8a0163d6d8f473af211b94b181843224e9e83fa12814d6cef9ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f2ebecbfb8a0163d6d8f473af211b94b181843224e9e83fa12814d6cef9ab1->enter($__internal_09f2ebecbfb8a0163d6d8f473af211b94b181843224e9e83fa12814d6cef9ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_09f2ebecbfb8a0163d6d8f473af211b94b181843224e9e83fa12814d6cef9ab1->leave($__internal_09f2ebecbfb8a0163d6d8f473af211b94b181843224e9e83fa12814d6cef9ab1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_faad912d47bfe3267129960ee7f17b8cd70303685a4553654084baebe5021a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faad912d47bfe3267129960ee7f17b8cd70303685a4553654084baebe5021a2b->enter($__internal_faad912d47bfe3267129960ee7f17b8cd70303685a4553654084baebe5021a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_faad912d47bfe3267129960ee7f17b8cd70303685a4553654084baebe5021a2b->leave($__internal_faad912d47bfe3267129960ee7f17b8cd70303685a4553654084baebe5021a2b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e64725a57bb53f70008aa53f7b516c320cc721402548526a8e832dbf4feecd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e64725a57bb53f70008aa53f7b516c320cc721402548526a8e832dbf4feecd4->enter($__internal_9e64725a57bb53f70008aa53f7b516c320cc721402548526a8e832dbf4feecd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_9e64725a57bb53f70008aa53f7b516c320cc721402548526a8e832dbf4feecd4->leave($__internal_9e64725a57bb53f70008aa53f7b516c320cc721402548526a8e832dbf4feecd4_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4752db7c6d2383f0bef2b27452820de5a0e642255e8fe3757b6245d10fdae46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4752db7c6d2383f0bef2b27452820de5a0e642255e8fe3757b6245d10fdae46a->enter($__internal_4752db7c6d2383f0bef2b27452820de5a0e642255e8fe3757b6245d10fdae46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_4752db7c6d2383f0bef2b27452820de5a0e642255e8fe3757b6245d10fdae46a->leave($__internal_4752db7c6d2383f0bef2b27452820de5a0e642255e8fe3757b6245d10fdae46a_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_9d288af27c7f03a9a67408ddddb835a85ddcc5d7b54e150fb0604ae8d7c5ab21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d288af27c7f03a9a67408ddddb835a85ddcc5d7b54e150fb0604ae8d7c5ab21->enter($__internal_9d288af27c7f03a9a67408ddddb835a85ddcc5d7b54e150fb0604ae8d7c5ab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_9d288af27c7f03a9a67408ddddb835a85ddcc5d7b54e150fb0604ae8d7c5ab21->leave($__internal_9d288af27c7f03a9a67408ddddb835a85ddcc5d7b54e150fb0604ae8d7c5ab21_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_3c873ec337e76923c39ec072272a8e660fac59608fe13755a6be111e1e304e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c873ec337e76923c39ec072272a8e660fac59608fe13755a6be111e1e304e01->enter($__internal_3c873ec337e76923c39ec072272a8e660fac59608fe13755a6be111e1e304e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_3c873ec337e76923c39ec072272a8e660fac59608fe13755a6be111e1e304e01->leave($__internal_3c873ec337e76923c39ec072272a8e660fac59608fe13755a6be111e1e304e01_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6071adb9fdad0d2419f066d898580616d495c1924acf4d46050b264e8a9bee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6071adb9fdad0d2419f066d898580616d495c1924acf4d46050b264e8a9bee8->enter($__internal_d6071adb9fdad0d2419f066d898580616d495c1924acf4d46050b264e8a9bee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6071adb9fdad0d2419f066d898580616d495c1924acf4d46050b264e8a9bee8->leave($__internal_d6071adb9fdad0d2419f066d898580616d495c1924acf4d46050b264e8a9bee8_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_578e0ca48d03bcf98131be7be41b16ab752b64f1bdf8c021e4c4b0e8b1b58f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578e0ca48d03bcf98131be7be41b16ab752b64f1bdf8c021e4c4b0e8b1b58f89->enter($__internal_578e0ca48d03bcf98131be7be41b16ab752b64f1bdf8c021e4c4b0e8b1b58f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_578e0ca48d03bcf98131be7be41b16ab752b64f1bdf8c021e4c4b0e8b1b58f89->leave($__internal_578e0ca48d03bcf98131be7be41b16ab752b64f1bdf8c021e4c4b0e8b1b58f89_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_70da110132c416c86bde5dbd3173c266b2ac3955cf778a6a7b5bad737a065203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70da110132c416c86bde5dbd3173c266b2ac3955cf778a6a7b5bad737a065203->enter($__internal_70da110132c416c86bde5dbd3173c266b2ac3955cf778a6a7b5bad737a065203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_70da110132c416c86bde5dbd3173c266b2ac3955cf778a6a7b5bad737a065203->leave($__internal_70da110132c416c86bde5dbd3173c266b2ac3955cf778a6a7b5bad737a065203_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_626fffd3e192e3c400fa4d5a2a3b1be6bf342174a13c1e77587a6f76ab981c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626fffd3e192e3c400fa4d5a2a3b1be6bf342174a13c1e77587a6f76ab981c4b->enter($__internal_626fffd3e192e3c400fa4d5a2a3b1be6bf342174a13c1e77587a6f76ab981c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_626fffd3e192e3c400fa4d5a2a3b1be6bf342174a13c1e77587a6f76ab981c4b->leave($__internal_626fffd3e192e3c400fa4d5a2a3b1be6bf342174a13c1e77587a6f76ab981c4b_prof);

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
