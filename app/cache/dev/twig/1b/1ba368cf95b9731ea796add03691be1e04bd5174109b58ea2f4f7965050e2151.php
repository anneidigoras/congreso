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
        $__internal_38dd22a78aafe8587b21a51fd9f8007ec976c4ff7b815199644c9f9b0cf859aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38dd22a78aafe8587b21a51fd9f8007ec976c4ff7b815199644c9f9b0cf859aa->enter($__internal_38dd22a78aafe8587b21a51fd9f8007ec976c4ff7b815199644c9f9b0cf859aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_38dd22a78aafe8587b21a51fd9f8007ec976c4ff7b815199644c9f9b0cf859aa->leave($__internal_38dd22a78aafe8587b21a51fd9f8007ec976c4ff7b815199644c9f9b0cf859aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0b6434f8566d93f18a1c2fafe8d8ed08d8b6323988ced863cf5cdf9854ee1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b6434f8566d93f18a1c2fafe8d8ed08d8b6323988ced863cf5cdf9854ee1a3->enter($__internal_b0b6434f8566d93f18a1c2fafe8d8ed08d8b6323988ced863cf5cdf9854ee1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b0b6434f8566d93f18a1c2fafe8d8ed08d8b6323988ced863cf5cdf9854ee1a3->leave($__internal_b0b6434f8566d93f18a1c2fafe8d8ed08d8b6323988ced863cf5cdf9854ee1a3_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df4bc992c27c2bfb12ddb1bf81e91e31fa874bc6b4a04d048f4dbe1a12b9a8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4bc992c27c2bfb12ddb1bf81e91e31fa874bc6b4a04d048f4dbe1a12b9a8a7->enter($__internal_df4bc992c27c2bfb12ddb1bf81e91e31fa874bc6b4a04d048f4dbe1a12b9a8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_df4bc992c27c2bfb12ddb1bf81e91e31fa874bc6b4a04d048f4dbe1a12b9a8a7->leave($__internal_df4bc992c27c2bfb12ddb1bf81e91e31fa874bc6b4a04d048f4dbe1a12b9a8a7_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_fec28fee5af344c04530fc20f0bacb293619e374e728a079da745d27f20dccef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec28fee5af344c04530fc20f0bacb293619e374e728a079da745d27f20dccef->enter($__internal_fec28fee5af344c04530fc20f0bacb293619e374e728a079da745d27f20dccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_fec28fee5af344c04530fc20f0bacb293619e374e728a079da745d27f20dccef->leave($__internal_fec28fee5af344c04530fc20f0bacb293619e374e728a079da745d27f20dccef_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb5887abc77b7ac595e2169cdf9d9acfe618bddf350f478530235b9f6a99218e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5887abc77b7ac595e2169cdf9d9acfe618bddf350f478530235b9f6a99218e->enter($__internal_bb5887abc77b7ac595e2169cdf9d9acfe618bddf350f478530235b9f6a99218e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bb5887abc77b7ac595e2169cdf9d9acfe618bddf350f478530235b9f6a99218e->leave($__internal_bb5887abc77b7ac595e2169cdf9d9acfe618bddf350f478530235b9f6a99218e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3995b0e5070aedbe86c2b2d2544ff7942249cd8fbc34023fa61646b7abd9338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3995b0e5070aedbe86c2b2d2544ff7942249cd8fbc34023fa61646b7abd9338->enter($__internal_a3995b0e5070aedbe86c2b2d2544ff7942249cd8fbc34023fa61646b7abd9338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3995b0e5070aedbe86c2b2d2544ff7942249cd8fbc34023fa61646b7abd9338->leave($__internal_a3995b0e5070aedbe86c2b2d2544ff7942249cd8fbc34023fa61646b7abd9338_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_387e70e78d33af24d938a9d80b261a8cd0f70e4cb9be7623946dae1754fbcfed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387e70e78d33af24d938a9d80b261a8cd0f70e4cb9be7623946dae1754fbcfed->enter($__internal_387e70e78d33af24d938a9d80b261a8cd0f70e4cb9be7623946dae1754fbcfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_387e70e78d33af24d938a9d80b261a8cd0f70e4cb9be7623946dae1754fbcfed->leave($__internal_387e70e78d33af24d938a9d80b261a8cd0f70e4cb9be7623946dae1754fbcfed_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_280b3829aa67574a41879929adb38507e49503674daf06a481f334da07c44808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280b3829aa67574a41879929adb38507e49503674daf06a481f334da07c44808->enter($__internal_280b3829aa67574a41879929adb38507e49503674daf06a481f334da07c44808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_280b3829aa67574a41879929adb38507e49503674daf06a481f334da07c44808->leave($__internal_280b3829aa67574a41879929adb38507e49503674daf06a481f334da07c44808_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_459baed41f996427269f67bf417d01e453a33f1aa05a78f18c947080bfb4a4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459baed41f996427269f67bf417d01e453a33f1aa05a78f18c947080bfb4a4ce->enter($__internal_459baed41f996427269f67bf417d01e453a33f1aa05a78f18c947080bfb4a4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_459baed41f996427269f67bf417d01e453a33f1aa05a78f18c947080bfb4a4ce->leave($__internal_459baed41f996427269f67bf417d01e453a33f1aa05a78f18c947080bfb4a4ce_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_7b769b1f571ab874c13a57bbb8833dae05d1f142cd5c79007eb050cc7811d157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b769b1f571ab874c13a57bbb8833dae05d1f142cd5c79007eb050cc7811d157->enter($__internal_7b769b1f571ab874c13a57bbb8833dae05d1f142cd5c79007eb050cc7811d157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_7b769b1f571ab874c13a57bbb8833dae05d1f142cd5c79007eb050cc7811d157->leave($__internal_7b769b1f571ab874c13a57bbb8833dae05d1f142cd5c79007eb050cc7811d157_prof);

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
