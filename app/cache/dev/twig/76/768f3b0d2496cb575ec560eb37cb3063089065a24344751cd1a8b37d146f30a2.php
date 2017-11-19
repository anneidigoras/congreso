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
        $__internal_cc48d148bb4fd26b5463115ef01f56494bb76831a34b524e0f37787859bc09a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc48d148bb4fd26b5463115ef01f56494bb76831a34b524e0f37787859bc09a5->enter($__internal_cc48d148bb4fd26b5463115ef01f56494bb76831a34b524e0f37787859bc09a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_cc48d148bb4fd26b5463115ef01f56494bb76831a34b524e0f37787859bc09a5->leave($__internal_cc48d148bb4fd26b5463115ef01f56494bb76831a34b524e0f37787859bc09a5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e111456cdcd77b4296ddad3f649c1f7eb25c8e2f27d270046d974ed00916327e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e111456cdcd77b4296ddad3f649c1f7eb25c8e2f27d270046d974ed00916327e->enter($__internal_e111456cdcd77b4296ddad3f649c1f7eb25c8e2f27d270046d974ed00916327e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_e111456cdcd77b4296ddad3f649c1f7eb25c8e2f27d270046d974ed00916327e->leave($__internal_e111456cdcd77b4296ddad3f649c1f7eb25c8e2f27d270046d974ed00916327e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eae2268c72adfb41035527c1a05c7d479953180f9cdc80b26443716f516f70b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae2268c72adfb41035527c1a05c7d479953180f9cdc80b26443716f516f70b0->enter($__internal_eae2268c72adfb41035527c1a05c7d479953180f9cdc80b26443716f516f70b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_eae2268c72adfb41035527c1a05c7d479953180f9cdc80b26443716f516f70b0->leave($__internal_eae2268c72adfb41035527c1a05c7d479953180f9cdc80b26443716f516f70b0_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b72bf70322dd5b9d4a081b10b384d52cc6d1491eb3d91891f3b428c18999f225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72bf70322dd5b9d4a081b10b384d52cc6d1491eb3d91891f3b428c18999f225->enter($__internal_b72bf70322dd5b9d4a081b10b384d52cc6d1491eb3d91891f3b428c18999f225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_b72bf70322dd5b9d4a081b10b384d52cc6d1491eb3d91891f3b428c18999f225->leave($__internal_b72bf70322dd5b9d4a081b10b384d52cc6d1491eb3d91891f3b428c18999f225_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_3429c5e077a336dd78f246bad544f1e1770fa68798afee357a0291762a307c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3429c5e077a336dd78f246bad544f1e1770fa68798afee357a0291762a307c59->enter($__internal_3429c5e077a336dd78f246bad544f1e1770fa68798afee357a0291762a307c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_3429c5e077a336dd78f246bad544f1e1770fa68798afee357a0291762a307c59->leave($__internal_3429c5e077a336dd78f246bad544f1e1770fa68798afee357a0291762a307c59_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_fc7ca77ee700badfc22acd166d897019e0e080b333302c10ff4abd40d3dbd256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7ca77ee700badfc22acd166d897019e0e080b333302c10ff4abd40d3dbd256->enter($__internal_fc7ca77ee700badfc22acd166d897019e0e080b333302c10ff4abd40d3dbd256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_fc7ca77ee700badfc22acd166d897019e0e080b333302c10ff4abd40d3dbd256->leave($__internal_fc7ca77ee700badfc22acd166d897019e0e080b333302c10ff4abd40d3dbd256_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b70f911099f49273180aa3e827eca6f4ef67f715b71ecaf09f0186acaf33581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b70f911099f49273180aa3e827eca6f4ef67f715b71ecaf09f0186acaf33581->enter($__internal_4b70f911099f49273180aa3e827eca6f4ef67f715b71ecaf09f0186acaf33581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b70f911099f49273180aa3e827eca6f4ef67f715b71ecaf09f0186acaf33581->leave($__internal_4b70f911099f49273180aa3e827eca6f4ef67f715b71ecaf09f0186acaf33581_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_34bc0d7c90b268cdae076e3e8a18b79c812c66631c54ec8fa411da08d2c1cc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bc0d7c90b268cdae076e3e8a18b79c812c66631c54ec8fa411da08d2c1cc70->enter($__internal_34bc0d7c90b268cdae076e3e8a18b79c812c66631c54ec8fa411da08d2c1cc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_34bc0d7c90b268cdae076e3e8a18b79c812c66631c54ec8fa411da08d2c1cc70->leave($__internal_34bc0d7c90b268cdae076e3e8a18b79c812c66631c54ec8fa411da08d2c1cc70_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8738322198d89b8bc135b325a3537e1be6363c8091491d709a3fadaee385dbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8738322198d89b8bc135b325a3537e1be6363c8091491d709a3fadaee385dbb6->enter($__internal_8738322198d89b8bc135b325a3537e1be6363c8091491d709a3fadaee385dbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_8738322198d89b8bc135b325a3537e1be6363c8091491d709a3fadaee385dbb6->leave($__internal_8738322198d89b8bc135b325a3537e1be6363c8091491d709a3fadaee385dbb6_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fa646b4988fc3084504e76566e595005c2d8bb1d84fd539474628e244d70168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa646b4988fc3084504e76566e595005c2d8bb1d84fd539474628e244d70168->enter($__internal_0fa646b4988fc3084504e76566e595005c2d8bb1d84fd539474628e244d70168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0fa646b4988fc3084504e76566e595005c2d8bb1d84fd539474628e244d70168->leave($__internal_0fa646b4988fc3084504e76566e595005c2d8bb1d84fd539474628e244d70168_prof);

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
