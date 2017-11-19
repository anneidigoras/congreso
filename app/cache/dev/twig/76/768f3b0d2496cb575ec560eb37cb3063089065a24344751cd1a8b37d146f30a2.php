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
        $__internal_111534048f6efca99f4c02b0652e06cf69971e02c0a850f6e94523031253f7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111534048f6efca99f4c02b0652e06cf69971e02c0a850f6e94523031253f7d3->enter($__internal_111534048f6efca99f4c02b0652e06cf69971e02c0a850f6e94523031253f7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_111534048f6efca99f4c02b0652e06cf69971e02c0a850f6e94523031253f7d3->leave($__internal_111534048f6efca99f4c02b0652e06cf69971e02c0a850f6e94523031253f7d3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1752fe4e8548943373579f728c82659aed9959aca5c793954a2d9dcb7aba8db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1752fe4e8548943373579f728c82659aed9959aca5c793954a2d9dcb7aba8db0->enter($__internal_1752fe4e8548943373579f728c82659aed9959aca5c793954a2d9dcb7aba8db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_1752fe4e8548943373579f728c82659aed9959aca5c793954a2d9dcb7aba8db0->leave($__internal_1752fe4e8548943373579f728c82659aed9959aca5c793954a2d9dcb7aba8db0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fac8704f61b2b8bb51bdb15afb35ebd41e445fc03c43a60b5462c712d517ffcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac8704f61b2b8bb51bdb15afb35ebd41e445fc03c43a60b5462c712d517ffcf->enter($__internal_fac8704f61b2b8bb51bdb15afb35ebd41e445fc03c43a60b5462c712d517ffcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_fac8704f61b2b8bb51bdb15afb35ebd41e445fc03c43a60b5462c712d517ffcf->leave($__internal_fac8704f61b2b8bb51bdb15afb35ebd41e445fc03c43a60b5462c712d517ffcf_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c06fd837d87e27e3679546a88c680c69a91eea3583398b08051b38d30e150dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06fd837d87e27e3679546a88c680c69a91eea3583398b08051b38d30e150dce->enter($__internal_c06fd837d87e27e3679546a88c680c69a91eea3583398b08051b38d30e150dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_c06fd837d87e27e3679546a88c680c69a91eea3583398b08051b38d30e150dce->leave($__internal_c06fd837d87e27e3679546a88c680c69a91eea3583398b08051b38d30e150dce_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_a3423f90e47de01eaa37782ecd8b96c6e467aa095ca2a0c72e3bd9e37a24b9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3423f90e47de01eaa37782ecd8b96c6e467aa095ca2a0c72e3bd9e37a24b9f7->enter($__internal_a3423f90e47de01eaa37782ecd8b96c6e467aa095ca2a0c72e3bd9e37a24b9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_a3423f90e47de01eaa37782ecd8b96c6e467aa095ca2a0c72e3bd9e37a24b9f7->leave($__internal_a3423f90e47de01eaa37782ecd8b96c6e467aa095ca2a0c72e3bd9e37a24b9f7_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_cb1855710a64b483275c9bb7d55a18349d2e73474f71cedd82b18e08db6c2f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1855710a64b483275c9bb7d55a18349d2e73474f71cedd82b18e08db6c2f60->enter($__internal_cb1855710a64b483275c9bb7d55a18349d2e73474f71cedd82b18e08db6c2f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_cb1855710a64b483275c9bb7d55a18349d2e73474f71cedd82b18e08db6c2f60->leave($__internal_cb1855710a64b483275c9bb7d55a18349d2e73474f71cedd82b18e08db6c2f60_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_26528b1510726bb1b4bbf43fae75d80c6496261618c800e0b2d8656b8dbfd1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26528b1510726bb1b4bbf43fae75d80c6496261618c800e0b2d8656b8dbfd1cb->enter($__internal_26528b1510726bb1b4bbf43fae75d80c6496261618c800e0b2d8656b8dbfd1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26528b1510726bb1b4bbf43fae75d80c6496261618c800e0b2d8656b8dbfd1cb->leave($__internal_26528b1510726bb1b4bbf43fae75d80c6496261618c800e0b2d8656b8dbfd1cb_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9f2b9d2846b3610ff894501e7969fe1bc9e61069dba51f992c38cb048e2ae1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2b9d2846b3610ff894501e7969fe1bc9e61069dba51f992c38cb048e2ae1a8->enter($__internal_9f2b9d2846b3610ff894501e7969fe1bc9e61069dba51f992c38cb048e2ae1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9f2b9d2846b3610ff894501e7969fe1bc9e61069dba51f992c38cb048e2ae1a8->leave($__internal_9f2b9d2846b3610ff894501e7969fe1bc9e61069dba51f992c38cb048e2ae1a8_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_40aee2d64a71f5151c74fc0ec5f7d8113aa103b2c38f416a783c11f8e23408a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40aee2d64a71f5151c74fc0ec5f7d8113aa103b2c38f416a783c11f8e23408a2->enter($__internal_40aee2d64a71f5151c74fc0ec5f7d8113aa103b2c38f416a783c11f8e23408a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_40aee2d64a71f5151c74fc0ec5f7d8113aa103b2c38f416a783c11f8e23408a2->leave($__internal_40aee2d64a71f5151c74fc0ec5f7d8113aa103b2c38f416a783c11f8e23408a2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdc8ba9b3719af7015fd482ec02e38ef9b53b78028949e06b7ef89f092aab55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc8ba9b3719af7015fd482ec02e38ef9b53b78028949e06b7ef89f092aab55f->enter($__internal_fdc8ba9b3719af7015fd482ec02e38ef9b53b78028949e06b7ef89f092aab55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fdc8ba9b3719af7015fd482ec02e38ef9b53b78028949e06b7ef89f092aab55f->leave($__internal_fdc8ba9b3719af7015fd482ec02e38ef9b53b78028949e06b7ef89f092aab55f_prof);

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
