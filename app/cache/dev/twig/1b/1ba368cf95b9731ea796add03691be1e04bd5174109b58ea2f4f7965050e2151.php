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
        $__internal_c7b5b06c5fe5b1ac4978c29fd38904120677bfe5374e4cbe67e6eb2d2d8e8253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b5b06c5fe5b1ac4978c29fd38904120677bfe5374e4cbe67e6eb2d2d8e8253->enter($__internal_c7b5b06c5fe5b1ac4978c29fd38904120677bfe5374e4cbe67e6eb2d2d8e8253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c7b5b06c5fe5b1ac4978c29fd38904120677bfe5374e4cbe67e6eb2d2d8e8253->leave($__internal_c7b5b06c5fe5b1ac4978c29fd38904120677bfe5374e4cbe67e6eb2d2d8e8253_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f9e9988ea91e66549add58da1e4ca76bb49c6c0db9f3fc2cc7920f945f6e677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9e9988ea91e66549add58da1e4ca76bb49c6c0db9f3fc2cc7920f945f6e677->enter($__internal_1f9e9988ea91e66549add58da1e4ca76bb49c6c0db9f3fc2cc7920f945f6e677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1f9e9988ea91e66549add58da1e4ca76bb49c6c0db9f3fc2cc7920f945f6e677->leave($__internal_1f9e9988ea91e66549add58da1e4ca76bb49c6c0db9f3fc2cc7920f945f6e677_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f03ef4069ad2bdfecec4523f3644feae5a3ce039ee01df6da4eeca7d31185fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03ef4069ad2bdfecec4523f3644feae5a3ce039ee01df6da4eeca7d31185fb5->enter($__internal_f03ef4069ad2bdfecec4523f3644feae5a3ce039ee01df6da4eeca7d31185fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_f03ef4069ad2bdfecec4523f3644feae5a3ce039ee01df6da4eeca7d31185fb5->leave($__internal_f03ef4069ad2bdfecec4523f3644feae5a3ce039ee01df6da4eeca7d31185fb5_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b271b842c014e579f6e7141f6ace9aaa2dad2501b83a9346bb1aff35d5face6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b271b842c014e579f6e7141f6ace9aaa2dad2501b83a9346bb1aff35d5face6f->enter($__internal_b271b842c014e579f6e7141f6ace9aaa2dad2501b83a9346bb1aff35d5face6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_b271b842c014e579f6e7141f6ace9aaa2dad2501b83a9346bb1aff35d5face6f->leave($__internal_b271b842c014e579f6e7141f6ace9aaa2dad2501b83a9346bb1aff35d5face6f_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae7b781c72eb0deaec378b621d2f1de6e3a5cc0b695a7f8e33d258fcef709e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7b781c72eb0deaec378b621d2f1de6e3a5cc0b695a7f8e33d258fcef709e21->enter($__internal_ae7b781c72eb0deaec378b621d2f1de6e3a5cc0b695a7f8e33d258fcef709e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ae7b781c72eb0deaec378b621d2f1de6e3a5cc0b695a7f8e33d258fcef709e21->leave($__internal_ae7b781c72eb0deaec378b621d2f1de6e3a5cc0b695a7f8e33d258fcef709e21_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb4fb2bf3e789f71eb8bf61314de5ec3961cf2ce0c16ccce111c5f440b11380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb4fb2bf3e789f71eb8bf61314de5ec3961cf2ce0c16ccce111c5f440b11380->enter($__internal_4cb4fb2bf3e789f71eb8bf61314de5ec3961cf2ce0c16ccce111c5f440b11380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4cb4fb2bf3e789f71eb8bf61314de5ec3961cf2ce0c16ccce111c5f440b11380->leave($__internal_4cb4fb2bf3e789f71eb8bf61314de5ec3961cf2ce0c16ccce111c5f440b11380_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_f92f8f2624e100eaa07101a0b11804b7d835a9c44f9aa46a3b78f8e295b01848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92f8f2624e100eaa07101a0b11804b7d835a9c44f9aa46a3b78f8e295b01848->enter($__internal_f92f8f2624e100eaa07101a0b11804b7d835a9c44f9aa46a3b78f8e295b01848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_f92f8f2624e100eaa07101a0b11804b7d835a9c44f9aa46a3b78f8e295b01848->leave($__internal_f92f8f2624e100eaa07101a0b11804b7d835a9c44f9aa46a3b78f8e295b01848_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5b79326bcefe6248ae123090b4472fad6d2f9861715a190daed03400c70d19f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b79326bcefe6248ae123090b4472fad6d2f9861715a190daed03400c70d19f3->enter($__internal_5b79326bcefe6248ae123090b4472fad6d2f9861715a190daed03400c70d19f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_5b79326bcefe6248ae123090b4472fad6d2f9861715a190daed03400c70d19f3->leave($__internal_5b79326bcefe6248ae123090b4472fad6d2f9861715a190daed03400c70d19f3_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_dbb428b436b082a0a6d5378c48be2409d259d60d5e121785d9668672495a048d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb428b436b082a0a6d5378c48be2409d259d60d5e121785d9668672495a048d->enter($__internal_dbb428b436b082a0a6d5378c48be2409d259d60d5e121785d9668672495a048d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_dbb428b436b082a0a6d5378c48be2409d259d60d5e121785d9668672495a048d->leave($__internal_dbb428b436b082a0a6d5378c48be2409d259d60d5e121785d9668672495a048d_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_2876c08269b4507d066e5e88ba3d6ef7c79e84f87f6874189ff49755d697832a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2876c08269b4507d066e5e88ba3d6ef7c79e84f87f6874189ff49755d697832a->enter($__internal_2876c08269b4507d066e5e88ba3d6ef7c79e84f87f6874189ff49755d697832a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_2876c08269b4507d066e5e88ba3d6ef7c79e84f87f6874189ff49755d697832a->leave($__internal_2876c08269b4507d066e5e88ba3d6ef7c79e84f87f6874189ff49755d697832a_prof);

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
