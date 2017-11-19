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
        $__internal_bfdb78f99c86c3d7954b83aab1a00c69424d19fbfd461f9058c5464868529a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdb78f99c86c3d7954b83aab1a00c69424d19fbfd461f9058c5464868529a48->enter($__internal_bfdb78f99c86c3d7954b83aab1a00c69424d19fbfd461f9058c5464868529a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_bfdb78f99c86c3d7954b83aab1a00c69424d19fbfd461f9058c5464868529a48->leave($__internal_bfdb78f99c86c3d7954b83aab1a00c69424d19fbfd461f9058c5464868529a48_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bc923edbbcb3e11aae2070b2d999ccebe087f11dbd70e90935b6d73206eae1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc923edbbcb3e11aae2070b2d999ccebe087f11dbd70e90935b6d73206eae1a->enter($__internal_7bc923edbbcb3e11aae2070b2d999ccebe087f11dbd70e90935b6d73206eae1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_7bc923edbbcb3e11aae2070b2d999ccebe087f11dbd70e90935b6d73206eae1a->leave($__internal_7bc923edbbcb3e11aae2070b2d999ccebe087f11dbd70e90935b6d73206eae1a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b365c61215e596943494a08d60896714b2c445b08571136f91139ed0ddb510bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b365c61215e596943494a08d60896714b2c445b08571136f91139ed0ddb510bd->enter($__internal_b365c61215e596943494a08d60896714b2c445b08571136f91139ed0ddb510bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_b365c61215e596943494a08d60896714b2c445b08571136f91139ed0ddb510bd->leave($__internal_b365c61215e596943494a08d60896714b2c445b08571136f91139ed0ddb510bd_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_833ea16e789aea95aec2eb8056ccd2d248bdc6f6ff6bff0e02ba2f1e0f671c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833ea16e789aea95aec2eb8056ccd2d248bdc6f6ff6bff0e02ba2f1e0f671c04->enter($__internal_833ea16e789aea95aec2eb8056ccd2d248bdc6f6ff6bff0e02ba2f1e0f671c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_833ea16e789aea95aec2eb8056ccd2d248bdc6f6ff6bff0e02ba2f1e0f671c04->leave($__internal_833ea16e789aea95aec2eb8056ccd2d248bdc6f6ff6bff0e02ba2f1e0f671c04_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_18bdabd2f3fb7c2db02407c288ee05ebeaa6f8d3eaf79f9614269af5db10c66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bdabd2f3fb7c2db02407c288ee05ebeaa6f8d3eaf79f9614269af5db10c66b->enter($__internal_18bdabd2f3fb7c2db02407c288ee05ebeaa6f8d3eaf79f9614269af5db10c66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_18bdabd2f3fb7c2db02407c288ee05ebeaa6f8d3eaf79f9614269af5db10c66b->leave($__internal_18bdabd2f3fb7c2db02407c288ee05ebeaa6f8d3eaf79f9614269af5db10c66b_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_83c5b64066a50010ed7900cd75e4063d12142dfbb1d7bcaecfbd9f70bf3fa0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c5b64066a50010ed7900cd75e4063d12142dfbb1d7bcaecfbd9f70bf3fa0b6->enter($__internal_83c5b64066a50010ed7900cd75e4063d12142dfbb1d7bcaecfbd9f70bf3fa0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_83c5b64066a50010ed7900cd75e4063d12142dfbb1d7bcaecfbd9f70bf3fa0b6->leave($__internal_83c5b64066a50010ed7900cd75e4063d12142dfbb1d7bcaecfbd9f70bf3fa0b6_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_da55a5226871b49f40ab81caf1fc17ceac581bdb9066b4336620d221e1dc1b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da55a5226871b49f40ab81caf1fc17ceac581bdb9066b4336620d221e1dc1b9b->enter($__internal_da55a5226871b49f40ab81caf1fc17ceac581bdb9066b4336620d221e1dc1b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da55a5226871b49f40ab81caf1fc17ceac581bdb9066b4336620d221e1dc1b9b->leave($__internal_da55a5226871b49f40ab81caf1fc17ceac581bdb9066b4336620d221e1dc1b9b_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_399404ad9d775c88b859275e2c1c6ddd217cbc0faeb78f9777b75c9ddc72677c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399404ad9d775c88b859275e2c1c6ddd217cbc0faeb78f9777b75c9ddc72677c->enter($__internal_399404ad9d775c88b859275e2c1c6ddd217cbc0faeb78f9777b75c9ddc72677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_399404ad9d775c88b859275e2c1c6ddd217cbc0faeb78f9777b75c9ddc72677c->leave($__internal_399404ad9d775c88b859275e2c1c6ddd217cbc0faeb78f9777b75c9ddc72677c_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_06b564cacfb72f51ee4e02b035d60395f2cc85e7206c6962fc9ace97b6ce2710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b564cacfb72f51ee4e02b035d60395f2cc85e7206c6962fc9ace97b6ce2710->enter($__internal_06b564cacfb72f51ee4e02b035d60395f2cc85e7206c6962fc9ace97b6ce2710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_06b564cacfb72f51ee4e02b035d60395f2cc85e7206c6962fc9ace97b6ce2710->leave($__internal_06b564cacfb72f51ee4e02b035d60395f2cc85e7206c6962fc9ace97b6ce2710_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04857dc8b900105647ca7fa3cec55784cfe921ce6c4bd0e17d741e62c054f449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04857dc8b900105647ca7fa3cec55784cfe921ce6c4bd0e17d741e62c054f449->enter($__internal_04857dc8b900105647ca7fa3cec55784cfe921ce6c4bd0e17d741e62c054f449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_04857dc8b900105647ca7fa3cec55784cfe921ce6c4bd0e17d741e62c054f449->leave($__internal_04857dc8b900105647ca7fa3cec55784cfe921ce6c4bd0e17d741e62c054f449_prof);

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
