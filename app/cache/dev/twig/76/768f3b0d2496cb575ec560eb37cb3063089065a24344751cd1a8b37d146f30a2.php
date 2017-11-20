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
        $__internal_d48d9d4e653738a058a7511bd6837411f35dee739fc84d760452ac57eaa9924d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48d9d4e653738a058a7511bd6837411f35dee739fc84d760452ac57eaa9924d->enter($__internal_d48d9d4e653738a058a7511bd6837411f35dee739fc84d760452ac57eaa9924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_d48d9d4e653738a058a7511bd6837411f35dee739fc84d760452ac57eaa9924d->leave($__internal_d48d9d4e653738a058a7511bd6837411f35dee739fc84d760452ac57eaa9924d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b67351b3e02516f455f80940c293a5a2ba64fa84047f664c45fc660654496a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b67351b3e02516f455f80940c293a5a2ba64fa84047f664c45fc660654496a3->enter($__internal_0b67351b3e02516f455f80940c293a5a2ba64fa84047f664c45fc660654496a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_0b67351b3e02516f455f80940c293a5a2ba64fa84047f664c45fc660654496a3->leave($__internal_0b67351b3e02516f455f80940c293a5a2ba64fa84047f664c45fc660654496a3_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcbd76c0214d81a7b99256819523719fb8ab613cb6123e6b9b1404a6059790c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbd76c0214d81a7b99256819523719fb8ab613cb6123e6b9b1404a6059790c9->enter($__internal_dcbd76c0214d81a7b99256819523719fb8ab613cb6123e6b9b1404a6059790c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_dcbd76c0214d81a7b99256819523719fb8ab613cb6123e6b9b1404a6059790c9->leave($__internal_dcbd76c0214d81a7b99256819523719fb8ab613cb6123e6b9b1404a6059790c9_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_71a0a105dcb6c4bd70d80a03d51a213421907f74f2273cf287c912b662e0e128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a0a105dcb6c4bd70d80a03d51a213421907f74f2273cf287c912b662e0e128->enter($__internal_71a0a105dcb6c4bd70d80a03d51a213421907f74f2273cf287c912b662e0e128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_71a0a105dcb6c4bd70d80a03d51a213421907f74f2273cf287c912b662e0e128->leave($__internal_71a0a105dcb6c4bd70d80a03d51a213421907f74f2273cf287c912b662e0e128_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_34571fe232f67b89bb2fce8aa0ba4c34b903732c63c423ff2b990291543d6872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34571fe232f67b89bb2fce8aa0ba4c34b903732c63c423ff2b990291543d6872->enter($__internal_34571fe232f67b89bb2fce8aa0ba4c34b903732c63c423ff2b990291543d6872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_34571fe232f67b89bb2fce8aa0ba4c34b903732c63c423ff2b990291543d6872->leave($__internal_34571fe232f67b89bb2fce8aa0ba4c34b903732c63c423ff2b990291543d6872_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_3372e3c7df8923e26333f88bb2e395ea1482e728e4da121eced11e97103fc445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3372e3c7df8923e26333f88bb2e395ea1482e728e4da121eced11e97103fc445->enter($__internal_3372e3c7df8923e26333f88bb2e395ea1482e728e4da121eced11e97103fc445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_3372e3c7df8923e26333f88bb2e395ea1482e728e4da121eced11e97103fc445->leave($__internal_3372e3c7df8923e26333f88bb2e395ea1482e728e4da121eced11e97103fc445_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_1089b55beea5530247dce8abcb4e8758008581070fe330742cddc3941e0fb4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1089b55beea5530247dce8abcb4e8758008581070fe330742cddc3941e0fb4c2->enter($__internal_1089b55beea5530247dce8abcb4e8758008581070fe330742cddc3941e0fb4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1089b55beea5530247dce8abcb4e8758008581070fe330742cddc3941e0fb4c2->leave($__internal_1089b55beea5530247dce8abcb4e8758008581070fe330742cddc3941e0fb4c2_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c5106a33b49a9ad6da7e1794891ad3f8cad638ff092738b26e901477ccd92c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5106a33b49a9ad6da7e1794891ad3f8cad638ff092738b26e901477ccd92c5d->enter($__internal_c5106a33b49a9ad6da7e1794891ad3f8cad638ff092738b26e901477ccd92c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_c5106a33b49a9ad6da7e1794891ad3f8cad638ff092738b26e901477ccd92c5d->leave($__internal_c5106a33b49a9ad6da7e1794891ad3f8cad638ff092738b26e901477ccd92c5d_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_897a0f8a5e9df2a690045aa107ecdcdf49cb3d3ac26439f54dc295b6471ac192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897a0f8a5e9df2a690045aa107ecdcdf49cb3d3ac26439f54dc295b6471ac192->enter($__internal_897a0f8a5e9df2a690045aa107ecdcdf49cb3d3ac26439f54dc295b6471ac192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_897a0f8a5e9df2a690045aa107ecdcdf49cb3d3ac26439f54dc295b6471ac192->leave($__internal_897a0f8a5e9df2a690045aa107ecdcdf49cb3d3ac26439f54dc295b6471ac192_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f7c9f51e49ded7d136a0a72001b06b0a5891328f31cc3c4caaa5b2f26623360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7c9f51e49ded7d136a0a72001b06b0a5891328f31cc3c4caaa5b2f26623360->enter($__internal_6f7c9f51e49ded7d136a0a72001b06b0a5891328f31cc3c4caaa5b2f26623360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f7c9f51e49ded7d136a0a72001b06b0a5891328f31cc3c4caaa5b2f26623360->leave($__internal_6f7c9f51e49ded7d136a0a72001b06b0a5891328f31cc3c4caaa5b2f26623360_prof);

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
