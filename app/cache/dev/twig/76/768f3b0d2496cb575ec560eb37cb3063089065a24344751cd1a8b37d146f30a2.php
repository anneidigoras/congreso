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
        $__internal_2e8f46de9ad5c0ea241fcd6803ddbba7ec3bfc0de4fe71ed87744d274cfcc4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8f46de9ad5c0ea241fcd6803ddbba7ec3bfc0de4fe71ed87744d274cfcc4ab->enter($__internal_2e8f46de9ad5c0ea241fcd6803ddbba7ec3bfc0de4fe71ed87744d274cfcc4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_2e8f46de9ad5c0ea241fcd6803ddbba7ec3bfc0de4fe71ed87744d274cfcc4ab->leave($__internal_2e8f46de9ad5c0ea241fcd6803ddbba7ec3bfc0de4fe71ed87744d274cfcc4ab_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d66ded19e663ede2fd56e8fbdab16ff71c96e65c9ed4a6be859d7a709aa12008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66ded19e663ede2fd56e8fbdab16ff71c96e65c9ed4a6be859d7a709aa12008->enter($__internal_d66ded19e663ede2fd56e8fbdab16ff71c96e65c9ed4a6be859d7a709aa12008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_d66ded19e663ede2fd56e8fbdab16ff71c96e65c9ed4a6be859d7a709aa12008->leave($__internal_d66ded19e663ede2fd56e8fbdab16ff71c96e65c9ed4a6be859d7a709aa12008_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eee39bcf3563d80788ad0dc3ac9ff2581e37a32b5bc0670eba20dcda6479b106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee39bcf3563d80788ad0dc3ac9ff2581e37a32b5bc0670eba20dcda6479b106->enter($__internal_eee39bcf3563d80788ad0dc3ac9ff2581e37a32b5bc0670eba20dcda6479b106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_eee39bcf3563d80788ad0dc3ac9ff2581e37a32b5bc0670eba20dcda6479b106->leave($__internal_eee39bcf3563d80788ad0dc3ac9ff2581e37a32b5bc0670eba20dcda6479b106_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9f23a67c8f0ccf50de69cf17f528825e6eb01f2ac3e4bf1ae406934591dcb396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f23a67c8f0ccf50de69cf17f528825e6eb01f2ac3e4bf1ae406934591dcb396->enter($__internal_9f23a67c8f0ccf50de69cf17f528825e6eb01f2ac3e4bf1ae406934591dcb396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_9f23a67c8f0ccf50de69cf17f528825e6eb01f2ac3e4bf1ae406934591dcb396->leave($__internal_9f23a67c8f0ccf50de69cf17f528825e6eb01f2ac3e4bf1ae406934591dcb396_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_3bc5fd63d927b1ce3ad2f2974a20dd21a56b7f9fcb6c4b108bb0dd0062293dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc5fd63d927b1ce3ad2f2974a20dd21a56b7f9fcb6c4b108bb0dd0062293dc2->enter($__internal_3bc5fd63d927b1ce3ad2f2974a20dd21a56b7f9fcb6c4b108bb0dd0062293dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_3bc5fd63d927b1ce3ad2f2974a20dd21a56b7f9fcb6c4b108bb0dd0062293dc2->leave($__internal_3bc5fd63d927b1ce3ad2f2974a20dd21a56b7f9fcb6c4b108bb0dd0062293dc2_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_9aee5ca70ede0f73cd552a23fda82fb4f01eb609522f26bb0a5b2c0e44a1aeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aee5ca70ede0f73cd552a23fda82fb4f01eb609522f26bb0a5b2c0e44a1aeec->enter($__internal_9aee5ca70ede0f73cd552a23fda82fb4f01eb609522f26bb0a5b2c0e44a1aeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_9aee5ca70ede0f73cd552a23fda82fb4f01eb609522f26bb0a5b2c0e44a1aeec->leave($__internal_9aee5ca70ede0f73cd552a23fda82fb4f01eb609522f26bb0a5b2c0e44a1aeec_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_b394e8a900c972075a162f0205acd9bd41ec0b5e0702393d68b86d90920d1f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b394e8a900c972075a162f0205acd9bd41ec0b5e0702393d68b86d90920d1f15->enter($__internal_b394e8a900c972075a162f0205acd9bd41ec0b5e0702393d68b86d90920d1f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b394e8a900c972075a162f0205acd9bd41ec0b5e0702393d68b86d90920d1f15->leave($__internal_b394e8a900c972075a162f0205acd9bd41ec0b5e0702393d68b86d90920d1f15_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f4bcf020c32473e5a1202d1f997f53afdde77bdbad2d49acf4346fe1df03d60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bcf020c32473e5a1202d1f997f53afdde77bdbad2d49acf4346fe1df03d60e->enter($__internal_f4bcf020c32473e5a1202d1f997f53afdde77bdbad2d49acf4346fe1df03d60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_f4bcf020c32473e5a1202d1f997f53afdde77bdbad2d49acf4346fe1df03d60e->leave($__internal_f4bcf020c32473e5a1202d1f997f53afdde77bdbad2d49acf4346fe1df03d60e_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_49c67dcf035e0e47b57eddf05b8142fd8f5c426d76961e62674928b6e7068841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c67dcf035e0e47b57eddf05b8142fd8f5c426d76961e62674928b6e7068841->enter($__internal_49c67dcf035e0e47b57eddf05b8142fd8f5c426d76961e62674928b6e7068841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_49c67dcf035e0e47b57eddf05b8142fd8f5c426d76961e62674928b6e7068841->leave($__internal_49c67dcf035e0e47b57eddf05b8142fd8f5c426d76961e62674928b6e7068841_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa40b4b734efc064e2796b118048c09e1fb3a0a722ad9db52b063d95b8448fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa40b4b734efc064e2796b118048c09e1fb3a0a722ad9db52b063d95b8448fa1->enter($__internal_fa40b4b734efc064e2796b118048c09e1fb3a0a722ad9db52b063d95b8448fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fa40b4b734efc064e2796b118048c09e1fb3a0a722ad9db52b063d95b8448fa1->leave($__internal_fa40b4b734efc064e2796b118048c09e1fb3a0a722ad9db52b063d95b8448fa1_prof);

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
