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
        $__internal_47397c9dd866317cd67c1974b60e17b86115b4939dc4301a01b3eb68ae6f58e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47397c9dd866317cd67c1974b60e17b86115b4939dc4301a01b3eb68ae6f58e3->enter($__internal_47397c9dd866317cd67c1974b60e17b86115b4939dc4301a01b3eb68ae6f58e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        
        $__internal_47397c9dd866317cd67c1974b60e17b86115b4939dc4301a01b3eb68ae6f58e3->leave($__internal_47397c9dd866317cd67c1974b60e17b86115b4939dc4301a01b3eb68ae6f58e3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_26126e226f0a25bda93aa0b30507b0c5229b985e5697125cc75028284e469a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26126e226f0a25bda93aa0b30507b0c5229b985e5697125cc75028284e469a67->enter($__internal_26126e226f0a25bda93aa0b30507b0c5229b985e5697125cc75028284e469a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_26126e226f0a25bda93aa0b30507b0c5229b985e5697125cc75028284e469a67->leave($__internal_26126e226f0a25bda93aa0b30507b0c5229b985e5697125cc75028284e469a67_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45580043675ab3c6ad55fed7ea326f7d593e8b7b94f5e5d824e74ad5e3ba96ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45580043675ab3c6ad55fed7ea326f7d593e8b7b94f5e5d824e74ad5e3ba96ea->enter($__internal_45580043675ab3c6ad55fed7ea326f7d593e8b7b94f5e5d824e74ad5e3ba96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_45580043675ab3c6ad55fed7ea326f7d593e8b7b94f5e5d824e74ad5e3ba96ea->leave($__internal_45580043675ab3c6ad55fed7ea326f7d593e8b7b94f5e5d824e74ad5e3ba96ea_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3b334997246c169f1c026d4839f312e637b0bf0e4c33cdaae530d12e59359ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b334997246c169f1c026d4839f312e637b0bf0e4c33cdaae530d12e59359ef5->enter($__internal_3b334997246c169f1c026d4839f312e637b0bf0e4c33cdaae530d12e59359ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_3b334997246c169f1c026d4839f312e637b0bf0e4c33cdaae530d12e59359ef5->leave($__internal_3b334997246c169f1c026d4839f312e637b0bf0e4c33cdaae530d12e59359ef5_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_46f8f6b37cd910d10e89b505a89d47325ae5cea4c27c58351f00c8a19d729eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f8f6b37cd910d10e89b505a89d47325ae5cea4c27c58351f00c8a19d729eae->enter($__internal_46f8f6b37cd910d10e89b505a89d47325ae5cea4c27c58351f00c8a19d729eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_46f8f6b37cd910d10e89b505a89d47325ae5cea4c27c58351f00c8a19d729eae->leave($__internal_46f8f6b37cd910d10e89b505a89d47325ae5cea4c27c58351f00c8a19d729eae_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_8f2e20cb88b578c6faa609c0fda089b18fc1b4f9085e53d902f6c348e47783c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2e20cb88b578c6faa609c0fda089b18fc1b4f9085e53d902f6c348e47783c0->enter($__internal_8f2e20cb88b578c6faa609c0fda089b18fc1b4f9085e53d902f6c348e47783c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_8f2e20cb88b578c6faa609c0fda089b18fc1b4f9085e53d902f6c348e47783c0->leave($__internal_8f2e20cb88b578c6faa609c0fda089b18fc1b4f9085e53d902f6c348e47783c0_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_0945db82541275b9c2afdd1b87bc0bfd202ba9374fbb9b7402037c4ad7855340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0945db82541275b9c2afdd1b87bc0bfd202ba9374fbb9b7402037c4ad7855340->enter($__internal_0945db82541275b9c2afdd1b87bc0bfd202ba9374fbb9b7402037c4ad7855340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0945db82541275b9c2afdd1b87bc0bfd202ba9374fbb9b7402037c4ad7855340->leave($__internal_0945db82541275b9c2afdd1b87bc0bfd202ba9374fbb9b7402037c4ad7855340_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_583b87a9dd3202a05a1f7c8d49e6de4909ae5a8eac8994e76a3bb2b3a47fda75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583b87a9dd3202a05a1f7c8d49e6de4909ae5a8eac8994e76a3bb2b3a47fda75->enter($__internal_583b87a9dd3202a05a1f7c8d49e6de4909ae5a8eac8994e76a3bb2b3a47fda75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_583b87a9dd3202a05a1f7c8d49e6de4909ae5a8eac8994e76a3bb2b3a47fda75->leave($__internal_583b87a9dd3202a05a1f7c8d49e6de4909ae5a8eac8994e76a3bb2b3a47fda75_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_78cd64105a55405e947fad4b3acb5aa3d9f5cb6a770804c50516b65ec0f00ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cd64105a55405e947fad4b3acb5aa3d9f5cb6a770804c50516b65ec0f00ca2->enter($__internal_78cd64105a55405e947fad4b3acb5aa3d9f5cb6a770804c50516b65ec0f00ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_78cd64105a55405e947fad4b3acb5aa3d9f5cb6a770804c50516b65ec0f00ca2->leave($__internal_78cd64105a55405e947fad4b3acb5aa3d9f5cb6a770804c50516b65ec0f00ca2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dfba92370ca2bb9d65045bb298ad07de33cb6aff6005137260e0b1918acd8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfba92370ca2bb9d65045bb298ad07de33cb6aff6005137260e0b1918acd8a7->enter($__internal_8dfba92370ca2bb9d65045bb298ad07de33cb6aff6005137260e0b1918acd8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8dfba92370ca2bb9d65045bb298ad07de33cb6aff6005137260e0b1918acd8a7->leave($__internal_8dfba92370ca2bb9d65045bb298ad07de33cb6aff6005137260e0b1918acd8a7_prof);

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
