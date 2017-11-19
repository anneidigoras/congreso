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
        $__internal_7caf1c70fd904bd49758d4c45b96074fa1dc2b373d825383f40e38af2813db03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7caf1c70fd904bd49758d4c45b96074fa1dc2b373d825383f40e38af2813db03->enter($__internal_7caf1c70fd904bd49758d4c45b96074fa1dc2b373d825383f40e38af2813db03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_7caf1c70fd904bd49758d4c45b96074fa1dc2b373d825383f40e38af2813db03->leave($__internal_7caf1c70fd904bd49758d4c45b96074fa1dc2b373d825383f40e38af2813db03_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa2672bd9b973097d5b506d01992628c28e9fa94f63b90b61d6eddb9b79aa76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2672bd9b973097d5b506d01992628c28e9fa94f63b90b61d6eddb9b79aa76f->enter($__internal_fa2672bd9b973097d5b506d01992628c28e9fa94f63b90b61d6eddb9b79aa76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_fa2672bd9b973097d5b506d01992628c28e9fa94f63b90b61d6eddb9b79aa76f->leave($__internal_fa2672bd9b973097d5b506d01992628c28e9fa94f63b90b61d6eddb9b79aa76f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9726b9a18c246f09f9f10fc65b323351ed64e0bd19891510f3e19548add17ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9726b9a18c246f09f9f10fc65b323351ed64e0bd19891510f3e19548add17ec->enter($__internal_d9726b9a18c246f09f9f10fc65b323351ed64e0bd19891510f3e19548add17ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_d9726b9a18c246f09f9f10fc65b323351ed64e0bd19891510f3e19548add17ec->leave($__internal_d9726b9a18c246f09f9f10fc65b323351ed64e0bd19891510f3e19548add17ec_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a9eb23c99783a1346df6b7ebbb1ace37ed3820fb49703be2d49fd9a49628ed35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9eb23c99783a1346df6b7ebbb1ace37ed3820fb49703be2d49fd9a49628ed35->enter($__internal_a9eb23c99783a1346df6b7ebbb1ace37ed3820fb49703be2d49fd9a49628ed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_a9eb23c99783a1346df6b7ebbb1ace37ed3820fb49703be2d49fd9a49628ed35->leave($__internal_a9eb23c99783a1346df6b7ebbb1ace37ed3820fb49703be2d49fd9a49628ed35_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_8e6a47081e4881b36ca52580fea1de05e9df7b97721071d50a9e1f87356a8fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6a47081e4881b36ca52580fea1de05e9df7b97721071d50a9e1f87356a8fb2->enter($__internal_8e6a47081e4881b36ca52580fea1de05e9df7b97721071d50a9e1f87356a8fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_8e6a47081e4881b36ca52580fea1de05e9df7b97721071d50a9e1f87356a8fb2->leave($__internal_8e6a47081e4881b36ca52580fea1de05e9df7b97721071d50a9e1f87356a8fb2_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_d5965b470e2871594067982a29dbb0efa1f64478245d70e9aac847b1fb388943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5965b470e2871594067982a29dbb0efa1f64478245d70e9aac847b1fb388943->enter($__internal_d5965b470e2871594067982a29dbb0efa1f64478245d70e9aac847b1fb388943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_d5965b470e2871594067982a29dbb0efa1f64478245d70e9aac847b1fb388943->leave($__internal_d5965b470e2871594067982a29dbb0efa1f64478245d70e9aac847b1fb388943_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e9da0b9347cdca560730c7e29afb5e052d655ed5c5ae42e226fc8c73392686b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9da0b9347cdca560730c7e29afb5e052d655ed5c5ae42e226fc8c73392686b->enter($__internal_5e9da0b9347cdca560730c7e29afb5e052d655ed5c5ae42e226fc8c73392686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e9da0b9347cdca560730c7e29afb5e052d655ed5c5ae42e226fc8c73392686b->leave($__internal_5e9da0b9347cdca560730c7e29afb5e052d655ed5c5ae42e226fc8c73392686b_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_37c0262cd6b995ae366345d3f4c8b3f7c46a5ed9ead39cf307612e6f9f95f267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c0262cd6b995ae366345d3f4c8b3f7c46a5ed9ead39cf307612e6f9f95f267->enter($__internal_37c0262cd6b995ae366345d3f4c8b3f7c46a5ed9ead39cf307612e6f9f95f267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_37c0262cd6b995ae366345d3f4c8b3f7c46a5ed9ead39cf307612e6f9f95f267->leave($__internal_37c0262cd6b995ae366345d3f4c8b3f7c46a5ed9ead39cf307612e6f9f95f267_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_37b04b9438e8426c170d4be6ceaa4de4359ab330d8aa7c99a83261d015be7aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b04b9438e8426c170d4be6ceaa4de4359ab330d8aa7c99a83261d015be7aa5->enter($__internal_37b04b9438e8426c170d4be6ceaa4de4359ab330d8aa7c99a83261d015be7aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_37b04b9438e8426c170d4be6ceaa4de4359ab330d8aa7c99a83261d015be7aa5->leave($__internal_37b04b9438e8426c170d4be6ceaa4de4359ab330d8aa7c99a83261d015be7aa5_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46891d927420818f2554490ec0036e824a6ba49ad79e0a9b7a2d2367ed30ac7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46891d927420818f2554490ec0036e824a6ba49ad79e0a9b7a2d2367ed30ac7b->enter($__internal_46891d927420818f2554490ec0036e824a6ba49ad79e0a9b7a2d2367ed30ac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_46891d927420818f2554490ec0036e824a6ba49ad79e0a9b7a2d2367ed30ac7b->leave($__internal_46891d927420818f2554490ec0036e824a6ba49ad79e0a9b7a2d2367ed30ac7b_prof);

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
