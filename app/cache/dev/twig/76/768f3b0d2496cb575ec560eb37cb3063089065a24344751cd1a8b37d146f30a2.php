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
        $__internal_6345da8646d57bc2e60a4beed495a85bfbd3cf574c3b683a1f688ea9660c1108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6345da8646d57bc2e60a4beed495a85bfbd3cf574c3b683a1f688ea9660c1108->enter($__internal_6345da8646d57bc2e60a4beed495a85bfbd3cf574c3b683a1f688ea9660c1108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_6345da8646d57bc2e60a4beed495a85bfbd3cf574c3b683a1f688ea9660c1108->leave($__internal_6345da8646d57bc2e60a4beed495a85bfbd3cf574c3b683a1f688ea9660c1108_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9008a35f4e784edfeea5643498eaa1b8821c83fdefb89499d46f806080e74a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9008a35f4e784edfeea5643498eaa1b8821c83fdefb89499d46f806080e74a7->enter($__internal_a9008a35f4e784edfeea5643498eaa1b8821c83fdefb89499d46f806080e74a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_a9008a35f4e784edfeea5643498eaa1b8821c83fdefb89499d46f806080e74a7->leave($__internal_a9008a35f4e784edfeea5643498eaa1b8821c83fdefb89499d46f806080e74a7_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fe22c63a1b4e8a9ed424d15eac8fd9fcfb6f87dbd5f77747f9a81ab5c3ba169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe22c63a1b4e8a9ed424d15eac8fd9fcfb6f87dbd5f77747f9a81ab5c3ba169->enter($__internal_9fe22c63a1b4e8a9ed424d15eac8fd9fcfb6f87dbd5f77747f9a81ab5c3ba169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_9fe22c63a1b4e8a9ed424d15eac8fd9fcfb6f87dbd5f77747f9a81ab5c3ba169->leave($__internal_9fe22c63a1b4e8a9ed424d15eac8fd9fcfb6f87dbd5f77747f9a81ab5c3ba169_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_70df7367fee69420e4ca323eec7e44d508aaa2dbec7438df14e21c299e6b4100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70df7367fee69420e4ca323eec7e44d508aaa2dbec7438df14e21c299e6b4100->enter($__internal_70df7367fee69420e4ca323eec7e44d508aaa2dbec7438df14e21c299e6b4100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_70df7367fee69420e4ca323eec7e44d508aaa2dbec7438df14e21c299e6b4100->leave($__internal_70df7367fee69420e4ca323eec7e44d508aaa2dbec7438df14e21c299e6b4100_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_8c27e38f465e670328b3274bd4b90fe247568a3bee6babce627f47c22086d1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c27e38f465e670328b3274bd4b90fe247568a3bee6babce627f47c22086d1c3->enter($__internal_8c27e38f465e670328b3274bd4b90fe247568a3bee6babce627f47c22086d1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_8c27e38f465e670328b3274bd4b90fe247568a3bee6babce627f47c22086d1c3->leave($__internal_8c27e38f465e670328b3274bd4b90fe247568a3bee6babce627f47c22086d1c3_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_830f8e1f0811afa29a2c6ff564311d05e2ea9b7131261d1914db5b34b8f97f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830f8e1f0811afa29a2c6ff564311d05e2ea9b7131261d1914db5b34b8f97f62->enter($__internal_830f8e1f0811afa29a2c6ff564311d05e2ea9b7131261d1914db5b34b8f97f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_830f8e1f0811afa29a2c6ff564311d05e2ea9b7131261d1914db5b34b8f97f62->leave($__internal_830f8e1f0811afa29a2c6ff564311d05e2ea9b7131261d1914db5b34b8f97f62_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_1087504b047eff7f1f98ddf19fed0a0aab56f9da4eae95e62993e39aba54c5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1087504b047eff7f1f98ddf19fed0a0aab56f9da4eae95e62993e39aba54c5cd->enter($__internal_1087504b047eff7f1f98ddf19fed0a0aab56f9da4eae95e62993e39aba54c5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1087504b047eff7f1f98ddf19fed0a0aab56f9da4eae95e62993e39aba54c5cd->leave($__internal_1087504b047eff7f1f98ddf19fed0a0aab56f9da4eae95e62993e39aba54c5cd_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ae459402c167995381f3f9268ed595a3e94896dbb4e1c3c4a54afdd9e27116ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae459402c167995381f3f9268ed595a3e94896dbb4e1c3c4a54afdd9e27116ab->enter($__internal_ae459402c167995381f3f9268ed595a3e94896dbb4e1c3c4a54afdd9e27116ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ae459402c167995381f3f9268ed595a3e94896dbb4e1c3c4a54afdd9e27116ab->leave($__internal_ae459402c167995381f3f9268ed595a3e94896dbb4e1c3c4a54afdd9e27116ab_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b9bf0d5b64336205c73f497f97350b33d0d7f2f6b98cffb0c334d6ef21186060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bf0d5b64336205c73f497f97350b33d0d7f2f6b98cffb0c334d6ef21186060->enter($__internal_b9bf0d5b64336205c73f497f97350b33d0d7f2f6b98cffb0c334d6ef21186060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_b9bf0d5b64336205c73f497f97350b33d0d7f2f6b98cffb0c334d6ef21186060->leave($__internal_b9bf0d5b64336205c73f497f97350b33d0d7f2f6b98cffb0c334d6ef21186060_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a89b1b2d45124e9912c42ba51bc7b3286656962adfa53939815c4e4389b67009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89b1b2d45124e9912c42ba51bc7b3286656962adfa53939815c4e4389b67009->enter($__internal_a89b1b2d45124e9912c42ba51bc7b3286656962adfa53939815c4e4389b67009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a89b1b2d45124e9912c42ba51bc7b3286656962adfa53939815c4e4389b67009->leave($__internal_a89b1b2d45124e9912c42ba51bc7b3286656962adfa53939815c4e4389b67009_prof);

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
