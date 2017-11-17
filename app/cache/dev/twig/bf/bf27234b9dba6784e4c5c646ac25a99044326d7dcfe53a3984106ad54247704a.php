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
        $__internal_a5172b51864ac36026f08a06d3dbe04e546e63e034808bfb2203ceed6250464b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5172b51864ac36026f08a06d3dbe04e546e63e034808bfb2203ceed6250464b->enter($__internal_a5172b51864ac36026f08a06d3dbe04e546e63e034808bfb2203ceed6250464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base1.html.twig"));

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
        
        $__internal_a5172b51864ac36026f08a06d3dbe04e546e63e034808bfb2203ceed6250464b->leave($__internal_a5172b51864ac36026f08a06d3dbe04e546e63e034808bfb2203ceed6250464b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a8295acbae2f40413880b38028e5150780c48789edf935c207fb846346973ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8295acbae2f40413880b38028e5150780c48789edf935c207fb846346973ed->enter($__internal_4a8295acbae2f40413880b38028e5150780c48789edf935c207fb846346973ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_4a8295acbae2f40413880b38028e5150780c48789edf935c207fb846346973ed->leave($__internal_4a8295acbae2f40413880b38028e5150780c48789edf935c207fb846346973ed_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c851f31415f7ea0b5cc7c5e65eb83f8f0cdd7d6e77e5663c13dc7156b83c0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c851f31415f7ea0b5cc7c5e65eb83f8f0cdd7d6e77e5663c13dc7156b83c0eb->enter($__internal_1c851f31415f7ea0b5cc7c5e65eb83f8f0cdd7d6e77e5663c13dc7156b83c0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_1c851f31415f7ea0b5cc7c5e65eb83f8f0cdd7d6e77e5663c13dc7156b83c0eb->leave($__internal_1c851f31415f7ea0b5cc7c5e65eb83f8f0cdd7d6e77e5663c13dc7156b83c0eb_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_210e06cd59e6c13f47bcd0e86e25f2450a1c8692247691dff86544a287a03fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210e06cd59e6c13f47bcd0e86e25f2450a1c8692247691dff86544a287a03fac->enter($__internal_210e06cd59e6c13f47bcd0e86e25f2450a1c8692247691dff86544a287a03fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_210e06cd59e6c13f47bcd0e86e25f2450a1c8692247691dff86544a287a03fac->leave($__internal_210e06cd59e6c13f47bcd0e86e25f2450a1c8692247691dff86544a287a03fac_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_5a23a5b012078a7c52d02c8e449be029b14f5158d2b403cf6894c2a1b28527da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a23a5b012078a7c52d02c8e449be029b14f5158d2b403cf6894c2a1b28527da->enter($__internal_5a23a5b012078a7c52d02c8e449be029b14f5158d2b403cf6894c2a1b28527da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_5a23a5b012078a7c52d02c8e449be029b14f5158d2b403cf6894c2a1b28527da->leave($__internal_5a23a5b012078a7c52d02c8e449be029b14f5158d2b403cf6894c2a1b28527da_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_0061cbff77637165f1d16b3c25a1ac6d38e0de49da34a016da2bb376f8577212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0061cbff77637165f1d16b3c25a1ac6d38e0de49da34a016da2bb376f8577212->enter($__internal_0061cbff77637165f1d16b3c25a1ac6d38e0de49da34a016da2bb376f8577212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_0061cbff77637165f1d16b3c25a1ac6d38e0de49da34a016da2bb376f8577212->leave($__internal_0061cbff77637165f1d16b3c25a1ac6d38e0de49da34a016da2bb376f8577212_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_960cfe608e54e3997dfb51fa2823242e5534a14815e2a097946bed52a63d441f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960cfe608e54e3997dfb51fa2823242e5534a14815e2a097946bed52a63d441f->enter($__internal_960cfe608e54e3997dfb51fa2823242e5534a14815e2a097946bed52a63d441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_960cfe608e54e3997dfb51fa2823242e5534a14815e2a097946bed52a63d441f->leave($__internal_960cfe608e54e3997dfb51fa2823242e5534a14815e2a097946bed52a63d441f_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7a4c7c6b9fc508083d7071063e52e42ef8235c82c2c80d44a81f4d7170f61d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4c7c6b9fc508083d7071063e52e42ef8235c82c2c80d44a81f4d7170f61d6d->enter($__internal_7a4c7c6b9fc508083d7071063e52e42ef8235c82c2c80d44a81f4d7170f61d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7a4c7c6b9fc508083d7071063e52e42ef8235c82c2c80d44a81f4d7170f61d6d->leave($__internal_7a4c7c6b9fc508083d7071063e52e42ef8235c82c2c80d44a81f4d7170f61d6d_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6ae7aa29803ab6f243c015e8aecb9947cd508b5c0b3368038b2455f1447bfdb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae7aa29803ab6f243c015e8aecb9947cd508b5c0b3368038b2455f1447bfdb1->enter($__internal_6ae7aa29803ab6f243c015e8aecb9947cd508b5c0b3368038b2455f1447bfdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_6ae7aa29803ab6f243c015e8aecb9947cd508b5c0b3368038b2455f1447bfdb1->leave($__internal_6ae7aa29803ab6f243c015e8aecb9947cd508b5c0b3368038b2455f1447bfdb1_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b29879664a843afadc7fe076a23a1f4e041c1188f9f66218a8fd940bf7045bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b29879664a843afadc7fe076a23a1f4e041c1188f9f66218a8fd940bf7045bb->enter($__internal_8b29879664a843afadc7fe076a23a1f4e041c1188f9f66218a8fd940bf7045bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b29879664a843afadc7fe076a23a1f4e041c1188f9f66218a8fd940bf7045bb->leave($__internal_8b29879664a843afadc7fe076a23a1f4e041c1188f9f66218a8fd940bf7045bb_prof);

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
