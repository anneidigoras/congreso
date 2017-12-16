<?php

/* base.html.twig */
class __TwigTemplate_3cba105d67f4c2f02b1e76bb3e485f667e2db6a3de45cb55569460e16ee8c034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navigation' => array($this, 'block_navigation'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'tabla' => array($this, 'block_tabla'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11710811d0c7f5693d8bcb34b6c83056a95b885fb1b56f1524fabcef02a3e0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11710811d0c7f5693d8bcb34b6c83056a95b885fb1b56f1524fabcef02a3e0e2->enter($__internal_11710811d0c7f5693d8bcb34b6c83056a95b885fb1b56f1524fabcef02a3e0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 33
        echo "                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        echo "</a></h1>
            </header>
        <div id=\"wrapper\">
    
        
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 48
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 53
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 54
        echo "        </div>
        
        <!-- end #sidebar -->
        <div style=\"clear: both;\">&nbsp;</div>
    </div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Congreso Científico. Todos los derechos reservados. Diseño por <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>";
        
        $__internal_11710811d0c7f5693d8bcb34b6c83056a95b885fb1b56f1524fabcef02a3e0e2->leave($__internal_11710811d0c7f5693d8bcb34b6c83056a95b885fb1b56f1524fabcef02a3e0e2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60f98b482b1e8bebd81999bb3c0edd78fee77fa1d794a470becc072c8a3850e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f98b482b1e8bebd81999bb3c0edd78fee77fa1d794a470becc072c8a3850e0->enter($__internal_60f98b482b1e8bebd81999bb3c0edd78fee77fa1d794a470becc072c8a3850e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_60f98b482b1e8bebd81999bb3c0edd78fee77fa1d794a470becc072c8a3850e0->leave($__internal_60f98b482b1e8bebd81999bb3c0edd78fee77fa1d794a470becc072c8a3850e0_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a904d7eacce379a117cb3a631c2a49b7dee83f4d195ed0f22a66ebb06298a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a904d7eacce379a117cb3a631c2a49b7dee83f4d195ed0f22a66ebb06298a88->enter($__internal_5a904d7eacce379a117cb3a631c2a49b7dee83f4d195ed0f22a66ebb06298a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_5a904d7eacce379a117cb3a631c2a49b7dee83f4d195ed0f22a66ebb06298a88->leave($__internal_5a904d7eacce379a117cb3a631c2a49b7dee83f4d195ed0f22a66ebb06298a88_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_de6439c6c720d586e4d2014ab32e426d3d78f12ba84f4733ad3179e3270c636f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6439c6c720d586e4d2014ab32e426d3d78f12ba84f4733ad3179e3270c636f->enter($__internal_de6439c6c720d586e4d2014ab32e426d3d78f12ba84f4733ad3179e3270c636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 21
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_list");
        echo "\">Inicio</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_contact");
        echo "\">Contacto</a></li>
                                ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a></li>
                                ";
        } else {
            // line 28
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a></li>
                                ";
        }
        // line 30
        echo "                            </ul>
                        </nav>
                    ";
        
        $__internal_de6439c6c720d586e4d2014ab32e426d3d78f12ba84f4733ad3179e3270c636f->leave($__internal_de6439c6c720d586e4d2014ab32e426d3d78f12ba84f4733ad3179e3270c636f_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f6b6d4500161394c460c0b3b9f1800334e407ea91fe1d993a39aaa80f73de56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b6d4500161394c460c0b3b9f1800334e407ea91fe1d993a39aaa80f73de56->enter($__internal_7f6b6d4500161394c460c0b3b9f1800334e407ea91fe1d993a39aaa80f73de56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7f6b6d4500161394c460c0b3b9f1800334e407ea91fe1d993a39aaa80f73de56->leave($__internal_7f6b6d4500161394c460c0b3b9f1800334e407ea91fe1d993a39aaa80f73de56_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_04d5d9fc518bd28b16c6a7313f61b198be5259b9c634fa2f88237287bab9df7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d5d9fc518bd28b16c6a7313f61b198be5259b9c634fa2f88237287bab9df7b->enter($__internal_04d5d9fc518bd28b16c6a7313f61b198be5259b9c634fa2f88237287bab9df7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04d5d9fc518bd28b16c6a7313f61b198be5259b9c634fa2f88237287bab9df7b->leave($__internal_04d5d9fc518bd28b16c6a7313f61b198be5259b9c634fa2f88237287bab9df7b_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_6626996717deea205d8ecb00e74626063280465b56d5f9e5fd884b053d62127d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6626996717deea205d8ecb00e74626063280465b56d5f9e5fd884b053d62127d->enter($__internal_6626996717deea205d8ecb00e74626063280465b56d5f9e5fd884b053d62127d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_6626996717deea205d8ecb00e74626063280465b56d5f9e5fd884b053d62127d->leave($__internal_6626996717deea205d8ecb00e74626063280465b56d5f9e5fd884b053d62127d_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_949fae5ec00da715f20705494144fe1d73b55bd7817a0225f9525f8fd2d72f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949fae5ec00da715f20705494144fe1d73b55bd7817a0225f9525f8fd2d72f6a->enter($__internal_949fae5ec00da715f20705494144fe1d73b55bd7817a0225f9525f8fd2d72f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_949fae5ec00da715f20705494144fe1d73b55bd7817a0225f9525f8fd2d72f6a->leave($__internal_949fae5ec00da715f20705494144fe1d73b55bd7817a0225f9525f8fd2d72f6a_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_5fbfe13450a126272ac858d7f0c07ac28cc207dc05f569482a7d807f4fa1cb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbfe13450a126272ac858d7f0c07ac28cc207dc05f569482a7d807f4fa1cb76->enter($__internal_5fbfe13450a126272ac858d7f0c07ac28cc207dc05f569482a7d807f4fa1cb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_5fbfe13450a126272ac858d7f0c07ac28cc207dc05f569482a7d807f4fa1cb76->leave($__internal_5fbfe13450a126272ac858d7f0c07ac28cc207dc05f569482a7d807f4fa1cb76_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_757606f4b8849205e2cde36c510cacc469302159370dbf457f1039ea322d1168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757606f4b8849205e2cde36c510cacc469302159370dbf457f1039ea322d1168->enter($__internal_757606f4b8849205e2cde36c510cacc469302159370dbf457f1039ea322d1168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_757606f4b8849205e2cde36c510cacc469302159370dbf457f1039ea322d1168->leave($__internal_757606f4b8849205e2cde36c510cacc469302159370dbf457f1039ea322d1168_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 53,  227 => 52,  216 => 51,  205 => 47,  194 => 46,  183 => 34,  174 => 30,  168 => 28,  162 => 26,  160 => 25,  156 => 24,  152 => 23,  148 => 21,  142 => 20,  134 => 14,  128 => 13,  119 => 11,  113 => 7,  107 => 6,  87 => 54,  84 => 53,  81 => 52,  79 => 51,  74 => 48,  71 => 47,  69 => 46,  54 => 34,  51 => 33,  49 => 20,  43 => 16,  40 => 13,  38 => 6,  31 => 1,);
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
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        {% block javascripts %}
            
        {% endblock %}
    </head>
    <body>
        <header id=\"header\">
                <div class=\"top\">
                    {% block navigation %}
                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"{{ path('congreso_congreso_list')}}\">Inicio</a></li>
                                <li><a href=\"{{ path('congreso_congreso_contact')}}\">Contacto</a></li>
                                {% if is_granted('ROLE_ADMIN')%}
                                    <li><a href=\"{{ path('congreso_admin_logout')}}\">Salir</a></li>
                                {% else %}
                                    <li><a href=\"{{ path('congreso_admin_login')}}\">Entrar</a></li>
                                {% endif %}
                            </ul>
                        </nav>
                    {% endblock %}
                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">{% block title %}{% endblock %}</a></h1>
            </header>
        <div id=\"wrapper\">
    
        
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            {% block body %}{% endblock %}
            {% block tabla %}{% endblock %}
        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            {% block sidebar %}{% endblock %}
            {% block linea %}{% endblock %}
            {% block sidebar1 %}{% endblock %}
        </div>
        
        <!-- end #sidebar -->
        <div style=\"clear: both;\">&nbsp;</div>
    </div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Congreso Científico. Todos los derechos reservados. Diseño por <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
