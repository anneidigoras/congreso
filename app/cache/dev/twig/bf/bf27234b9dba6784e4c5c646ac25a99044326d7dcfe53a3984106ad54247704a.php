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
        $__internal_c122b9145aeb24b12be8542eac4c25cb3c567f121d49e47501cdc3bee29ba9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c122b9145aeb24b12be8542eac4c25cb3c567f121d49e47501cdc3bee29ba9c9->enter($__internal_c122b9145aeb24b12be8542eac4c25cb3c567f121d49e47501cdc3bee29ba9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_c122b9145aeb24b12be8542eac4c25cb3c567f121d49e47501cdc3bee29ba9c9->leave($__internal_c122b9145aeb24b12be8542eac4c25cb3c567f121d49e47501cdc3bee29ba9c9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3941daf77e2aa71d292c72a3cad11240511d961b77efef1f4de94b2284091222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3941daf77e2aa71d292c72a3cad11240511d961b77efef1f4de94b2284091222->enter($__internal_3941daf77e2aa71d292c72a3cad11240511d961b77efef1f4de94b2284091222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_3941daf77e2aa71d292c72a3cad11240511d961b77efef1f4de94b2284091222->leave($__internal_3941daf77e2aa71d292c72a3cad11240511d961b77efef1f4de94b2284091222_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_daadaff801a91a8073932e70085deaac613986560bbf8b6080c0d16ae1ee24b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daadaff801a91a8073932e70085deaac613986560bbf8b6080c0d16ae1ee24b7->enter($__internal_daadaff801a91a8073932e70085deaac613986560bbf8b6080c0d16ae1ee24b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_daadaff801a91a8073932e70085deaac613986560bbf8b6080c0d16ae1ee24b7->leave($__internal_daadaff801a91a8073932e70085deaac613986560bbf8b6080c0d16ae1ee24b7_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_90bb9cf11b1cc49241a086d1bd20ce709a241cea1dd168e2d5e7a005576997d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bb9cf11b1cc49241a086d1bd20ce709a241cea1dd168e2d5e7a005576997d9->enter($__internal_90bb9cf11b1cc49241a086d1bd20ce709a241cea1dd168e2d5e7a005576997d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_90bb9cf11b1cc49241a086d1bd20ce709a241cea1dd168e2d5e7a005576997d9->leave($__internal_90bb9cf11b1cc49241a086d1bd20ce709a241cea1dd168e2d5e7a005576997d9_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_a693a5cc1da34c9d0cf6b7994f1c99484e516f4ed6e035ef5c52e44631588861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a693a5cc1da34c9d0cf6b7994f1c99484e516f4ed6e035ef5c52e44631588861->enter($__internal_a693a5cc1da34c9d0cf6b7994f1c99484e516f4ed6e035ef5c52e44631588861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_a693a5cc1da34c9d0cf6b7994f1c99484e516f4ed6e035ef5c52e44631588861->leave($__internal_a693a5cc1da34c9d0cf6b7994f1c99484e516f4ed6e035ef5c52e44631588861_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_65496eed37b15368292de4fa28a12546657a23961ea522d0f1fc252878c9b881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65496eed37b15368292de4fa28a12546657a23961ea522d0f1fc252878c9b881->enter($__internal_65496eed37b15368292de4fa28a12546657a23961ea522d0f1fc252878c9b881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_65496eed37b15368292de4fa28a12546657a23961ea522d0f1fc252878c9b881->leave($__internal_65496eed37b15368292de4fa28a12546657a23961ea522d0f1fc252878c9b881_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_205ac4a127a3291df38cca4cdea39875f1612d6d936c4c67a63d480615f18617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205ac4a127a3291df38cca4cdea39875f1612d6d936c4c67a63d480615f18617->enter($__internal_205ac4a127a3291df38cca4cdea39875f1612d6d936c4c67a63d480615f18617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_205ac4a127a3291df38cca4cdea39875f1612d6d936c4c67a63d480615f18617->leave($__internal_205ac4a127a3291df38cca4cdea39875f1612d6d936c4c67a63d480615f18617_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_05be7ed65832b2b910e03985ffda21ded7105f7dba550aa56254747976e950ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05be7ed65832b2b910e03985ffda21ded7105f7dba550aa56254747976e950ed->enter($__internal_05be7ed65832b2b910e03985ffda21ded7105f7dba550aa56254747976e950ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_05be7ed65832b2b910e03985ffda21ded7105f7dba550aa56254747976e950ed->leave($__internal_05be7ed65832b2b910e03985ffda21ded7105f7dba550aa56254747976e950ed_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e1a92975ba826cfef7682288d99c60f49bd361609f0765733480dc94815cda31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a92975ba826cfef7682288d99c60f49bd361609f0765733480dc94815cda31->enter($__internal_e1a92975ba826cfef7682288d99c60f49bd361609f0765733480dc94815cda31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_e1a92975ba826cfef7682288d99c60f49bd361609f0765733480dc94815cda31->leave($__internal_e1a92975ba826cfef7682288d99c60f49bd361609f0765733480dc94815cda31_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0e80d76dd617357bcb58be7bb59a9a1ede21b2f5b2c4c5556dc1a92f3173550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e80d76dd617357bcb58be7bb59a9a1ede21b2f5b2c4c5556dc1a92f3173550->enter($__internal_c0e80d76dd617357bcb58be7bb59a9a1ede21b2f5b2c4c5556dc1a92f3173550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0e80d76dd617357bcb58be7bb59a9a1ede21b2f5b2c4c5556dc1a92f3173550->leave($__internal_c0e80d76dd617357bcb58be7bb59a9a1ede21b2f5b2c4c5556dc1a92f3173550_prof);

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
