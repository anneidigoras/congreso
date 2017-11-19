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
        $__internal_1fbfc7bfb1b3edbe662e17c9d251e3896ecaedcc4dbbcd7e9da25d1266cc8105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbfc7bfb1b3edbe662e17c9d251e3896ecaedcc4dbbcd7e9da25d1266cc8105->enter($__internal_1fbfc7bfb1b3edbe662e17c9d251e3896ecaedcc4dbbcd7e9da25d1266cc8105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_1fbfc7bfb1b3edbe662e17c9d251e3896ecaedcc4dbbcd7e9da25d1266cc8105->leave($__internal_1fbfc7bfb1b3edbe662e17c9d251e3896ecaedcc4dbbcd7e9da25d1266cc8105_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0f56eed713c69409d61095895698e3abb9e9d48c85e9c7c4399c5496b0f48b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f56eed713c69409d61095895698e3abb9e9d48c85e9c7c4399c5496b0f48b2->enter($__internal_c0f56eed713c69409d61095895698e3abb9e9d48c85e9c7c4399c5496b0f48b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_c0f56eed713c69409d61095895698e3abb9e9d48c85e9c7c4399c5496b0f48b2->leave($__internal_c0f56eed713c69409d61095895698e3abb9e9d48c85e9c7c4399c5496b0f48b2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba25705b2b9e89f17a3f5958dbb85a6f33a6e8a2db792964152055a2e87df3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba25705b2b9e89f17a3f5958dbb85a6f33a6e8a2db792964152055a2e87df3be->enter($__internal_ba25705b2b9e89f17a3f5958dbb85a6f33a6e8a2db792964152055a2e87df3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_ba25705b2b9e89f17a3f5958dbb85a6f33a6e8a2db792964152055a2e87df3be->leave($__internal_ba25705b2b9e89f17a3f5958dbb85a6f33a6e8a2db792964152055a2e87df3be_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_94a607860b20914c2fcdbbcb6444c19893f8f2ff913441efcd8368f5175812e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a607860b20914c2fcdbbcb6444c19893f8f2ff913441efcd8368f5175812e6->enter($__internal_94a607860b20914c2fcdbbcb6444c19893f8f2ff913441efcd8368f5175812e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_94a607860b20914c2fcdbbcb6444c19893f8f2ff913441efcd8368f5175812e6->leave($__internal_94a607860b20914c2fcdbbcb6444c19893f8f2ff913441efcd8368f5175812e6_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_83ec291871b95a8e1570426f9f941064a68130c0b088ced0fdaedb1511dca507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ec291871b95a8e1570426f9f941064a68130c0b088ced0fdaedb1511dca507->enter($__internal_83ec291871b95a8e1570426f9f941064a68130c0b088ced0fdaedb1511dca507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_83ec291871b95a8e1570426f9f941064a68130c0b088ced0fdaedb1511dca507->leave($__internal_83ec291871b95a8e1570426f9f941064a68130c0b088ced0fdaedb1511dca507_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_80f2617bee9798ba373a36f07a4169b72228204007b9e5e572c552dcf9676b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f2617bee9798ba373a36f07a4169b72228204007b9e5e572c552dcf9676b58->enter($__internal_80f2617bee9798ba373a36f07a4169b72228204007b9e5e572c552dcf9676b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_80f2617bee9798ba373a36f07a4169b72228204007b9e5e572c552dcf9676b58->leave($__internal_80f2617bee9798ba373a36f07a4169b72228204007b9e5e572c552dcf9676b58_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a894349897a6701f98320836e6e2ec8d53f75d8762d5dbb63f1c3a02b1f777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a894349897a6701f98320836e6e2ec8d53f75d8762d5dbb63f1c3a02b1f777->enter($__internal_09a894349897a6701f98320836e6e2ec8d53f75d8762d5dbb63f1c3a02b1f777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09a894349897a6701f98320836e6e2ec8d53f75d8762d5dbb63f1c3a02b1f777->leave($__internal_09a894349897a6701f98320836e6e2ec8d53f75d8762d5dbb63f1c3a02b1f777_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_26fe2ec0e2224651e349621433f9ee7cb814e265ed0241ff014d5719a5d5a8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fe2ec0e2224651e349621433f9ee7cb814e265ed0241ff014d5719a5d5a8da->enter($__internal_26fe2ec0e2224651e349621433f9ee7cb814e265ed0241ff014d5719a5d5a8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_26fe2ec0e2224651e349621433f9ee7cb814e265ed0241ff014d5719a5d5a8da->leave($__internal_26fe2ec0e2224651e349621433f9ee7cb814e265ed0241ff014d5719a5d5a8da_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7468eaab41d9565cee3022026ce35461151f03376061707b069da190b83aa0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7468eaab41d9565cee3022026ce35461151f03376061707b069da190b83aa0be->enter($__internal_7468eaab41d9565cee3022026ce35461151f03376061707b069da190b83aa0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_7468eaab41d9565cee3022026ce35461151f03376061707b069da190b83aa0be->leave($__internal_7468eaab41d9565cee3022026ce35461151f03376061707b069da190b83aa0be_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4a842c3a01f0d2365d7af4760d232507d72d5212d65d314da3629985b9b99c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a842c3a01f0d2365d7af4760d232507d72d5212d65d314da3629985b9b99c0->enter($__internal_a4a842c3a01f0d2365d7af4760d232507d72d5212d65d314da3629985b9b99c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4a842c3a01f0d2365d7af4760d232507d72d5212d65d314da3629985b9b99c0->leave($__internal_a4a842c3a01f0d2365d7af4760d232507d72d5212d65d314da3629985b9b99c0_prof);

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
