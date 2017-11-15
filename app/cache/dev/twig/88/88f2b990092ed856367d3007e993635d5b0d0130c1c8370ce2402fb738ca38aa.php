<?php

/* base.html.twig */
class __TwigTemplate_d882acde4f4b42cd8633763c1d480248c057bf1eb49dc40eeba39fe53f81788a extends Twig_Template
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
        $__internal_4943ea0563a782c45139c3b608e3af0fba6c54aef3b330187abb79b047e24dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4943ea0563a782c45139c3b608e3af0fba6c54aef3b330187abb79b047e24dfe->enter($__internal_4943ea0563a782c45139c3b608e3af0fba6c54aef3b330187abb79b047e24dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4943ea0563a782c45139c3b608e3af0fba6c54aef3b330187abb79b047e24dfe->leave($__internal_4943ea0563a782c45139c3b608e3af0fba6c54aef3b330187abb79b047e24dfe_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b52d11918fd54d806f249acf2938c02843b037a74a2bf04b905cd96131b91156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52d11918fd54d806f249acf2938c02843b037a74a2bf04b905cd96131b91156->enter($__internal_b52d11918fd54d806f249acf2938c02843b037a74a2bf04b905cd96131b91156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_b52d11918fd54d806f249acf2938c02843b037a74a2bf04b905cd96131b91156->leave($__internal_b52d11918fd54d806f249acf2938c02843b037a74a2bf04b905cd96131b91156_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e72f37df591b782ca989c9634a21506cfa9b1e3b72f5b54e6ad9991c59eb1f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72f37df591b782ca989c9634a21506cfa9b1e3b72f5b54e6ad9991c59eb1f2f->enter($__internal_e72f37df591b782ca989c9634a21506cfa9b1e3b72f5b54e6ad9991c59eb1f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_e72f37df591b782ca989c9634a21506cfa9b1e3b72f5b54e6ad9991c59eb1f2f->leave($__internal_e72f37df591b782ca989c9634a21506cfa9b1e3b72f5b54e6ad9991c59eb1f2f_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6734b4318e7e69bf635edab650c59bb5c5988466d8a385def6119dabe1028ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6734b4318e7e69bf635edab650c59bb5c5988466d8a385def6119dabe1028ded->enter($__internal_6734b4318e7e69bf635edab650c59bb5c5988466d8a385def6119dabe1028ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_6734b4318e7e69bf635edab650c59bb5c5988466d8a385def6119dabe1028ded->leave($__internal_6734b4318e7e69bf635edab650c59bb5c5988466d8a385def6119dabe1028ded_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_8220b50d0e3b372df6ce8dbced95d61a8f92767636654c52198e8c18f002de93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8220b50d0e3b372df6ce8dbced95d61a8f92767636654c52198e8c18f002de93->enter($__internal_8220b50d0e3b372df6ce8dbced95d61a8f92767636654c52198e8c18f002de93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_8220b50d0e3b372df6ce8dbced95d61a8f92767636654c52198e8c18f002de93->leave($__internal_8220b50d0e3b372df6ce8dbced95d61a8f92767636654c52198e8c18f002de93_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_4ee2007532b1a84e2fd4f8c817346745a056ecda6dcfa6036ec1b3cc25621863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee2007532b1a84e2fd4f8c817346745a056ecda6dcfa6036ec1b3cc25621863->enter($__internal_4ee2007532b1a84e2fd4f8c817346745a056ecda6dcfa6036ec1b3cc25621863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_4ee2007532b1a84e2fd4f8c817346745a056ecda6dcfa6036ec1b3cc25621863->leave($__internal_4ee2007532b1a84e2fd4f8c817346745a056ecda6dcfa6036ec1b3cc25621863_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_2786c6d1958f4e56ca8a92081cd14dbc0b9efee026e4eb442668b54edd193b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2786c6d1958f4e56ca8a92081cd14dbc0b9efee026e4eb442668b54edd193b1d->enter($__internal_2786c6d1958f4e56ca8a92081cd14dbc0b9efee026e4eb442668b54edd193b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2786c6d1958f4e56ca8a92081cd14dbc0b9efee026e4eb442668b54edd193b1d->leave($__internal_2786c6d1958f4e56ca8a92081cd14dbc0b9efee026e4eb442668b54edd193b1d_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_28c6cc342e41926b07b1d29fceacfdd18f6c6494755352cef5d6c7259b3a5efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c6cc342e41926b07b1d29fceacfdd18f6c6494755352cef5d6c7259b3a5efb->enter($__internal_28c6cc342e41926b07b1d29fceacfdd18f6c6494755352cef5d6c7259b3a5efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_28c6cc342e41926b07b1d29fceacfdd18f6c6494755352cef5d6c7259b3a5efb->leave($__internal_28c6cc342e41926b07b1d29fceacfdd18f6c6494755352cef5d6c7259b3a5efb_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4544e52645e1956e0544b9881169fcca3e6a6c86a5399a112d1908dc6bd6bf74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4544e52645e1956e0544b9881169fcca3e6a6c86a5399a112d1908dc6bd6bf74->enter($__internal_4544e52645e1956e0544b9881169fcca3e6a6c86a5399a112d1908dc6bd6bf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_4544e52645e1956e0544b9881169fcca3e6a6c86a5399a112d1908dc6bd6bf74->leave($__internal_4544e52645e1956e0544b9881169fcca3e6a6c86a5399a112d1908dc6bd6bf74_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6b361fe93a2e826fc2a5ffb9b24becc2bcc006deb9243a8bbcb8d65414ea783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b361fe93a2e826fc2a5ffb9b24becc2bcc006deb9243a8bbcb8d65414ea783->enter($__internal_a6b361fe93a2e826fc2a5ffb9b24becc2bcc006deb9243a8bbcb8d65414ea783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6b361fe93a2e826fc2a5ffb9b24becc2bcc006deb9243a8bbcb8d65414ea783->leave($__internal_a6b361fe93a2e826fc2a5ffb9b24becc2bcc006deb9243a8bbcb8d65414ea783_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
</html>", "base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
