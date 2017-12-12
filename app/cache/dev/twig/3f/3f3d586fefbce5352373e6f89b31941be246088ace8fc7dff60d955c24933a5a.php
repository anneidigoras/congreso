<?php

/* ::base.html.twig */
class __TwigTemplate_667bd328f123b816040981999141982f6cbf19b0d2ea556d84210f86e4c44f68 extends Twig_Template
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
        $__internal_534e875257a62300ed9dc68221513b16dd8f2dba045dd409239dee1aa4fc7d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534e875257a62300ed9dc68221513b16dd8f2dba045dd409239dee1aa4fc7d8b->enter($__internal_534e875257a62300ed9dc68221513b16dd8f2dba045dd409239dee1aa4fc7d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_534e875257a62300ed9dc68221513b16dd8f2dba045dd409239dee1aa4fc7d8b->leave($__internal_534e875257a62300ed9dc68221513b16dd8f2dba045dd409239dee1aa4fc7d8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aeecc71733f94de47d94002a7a4c966f8338105e7f7110008a87dbfef683267a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeecc71733f94de47d94002a7a4c966f8338105e7f7110008a87dbfef683267a->enter($__internal_aeecc71733f94de47d94002a7a4c966f8338105e7f7110008a87dbfef683267a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aeecc71733f94de47d94002a7a4c966f8338105e7f7110008a87dbfef683267a->leave($__internal_aeecc71733f94de47d94002a7a4c966f8338105e7f7110008a87dbfef683267a_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1759873ec3ef8d92e87c5f4f975604949a7216e6c30acf27f75235d01fc064ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1759873ec3ef8d92e87c5f4f975604949a7216e6c30acf27f75235d01fc064ff->enter($__internal_1759873ec3ef8d92e87c5f4f975604949a7216e6c30acf27f75235d01fc064ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_1759873ec3ef8d92e87c5f4f975604949a7216e6c30acf27f75235d01fc064ff->leave($__internal_1759873ec3ef8d92e87c5f4f975604949a7216e6c30acf27f75235d01fc064ff_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2d5f9dc681d2deb4bff1c60ed4f025cf57fe98f68316e69cd95580e689a46879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5f9dc681d2deb4bff1c60ed4f025cf57fe98f68316e69cd95580e689a46879->enter($__internal_2d5f9dc681d2deb4bff1c60ed4f025cf57fe98f68316e69cd95580e689a46879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2d5f9dc681d2deb4bff1c60ed4f025cf57fe98f68316e69cd95580e689a46879->leave($__internal_2d5f9dc681d2deb4bff1c60ed4f025cf57fe98f68316e69cd95580e689a46879_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_05dc0f8981b74ddbe28e70c3a4380998e1b639218d748099bc86946f16817764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05dc0f8981b74ddbe28e70c3a4380998e1b639218d748099bc86946f16817764->enter($__internal_05dc0f8981b74ddbe28e70c3a4380998e1b639218d748099bc86946f16817764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_05dc0f8981b74ddbe28e70c3a4380998e1b639218d748099bc86946f16817764->leave($__internal_05dc0f8981b74ddbe28e70c3a4380998e1b639218d748099bc86946f16817764_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_350ab9cc4bfbc043c78fb6f245d3bc5296816aa61a3ee25ecd8d0d326e8bf606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350ab9cc4bfbc043c78fb6f245d3bc5296816aa61a3ee25ecd8d0d326e8bf606->enter($__internal_350ab9cc4bfbc043c78fb6f245d3bc5296816aa61a3ee25ecd8d0d326e8bf606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_350ab9cc4bfbc043c78fb6f245d3bc5296816aa61a3ee25ecd8d0d326e8bf606->leave($__internal_350ab9cc4bfbc043c78fb6f245d3bc5296816aa61a3ee25ecd8d0d326e8bf606_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_a0dc32f0216795d83a9185affeaa73be749aac96059858c7315b8c9155146ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0dc32f0216795d83a9185affeaa73be749aac96059858c7315b8c9155146ee4->enter($__internal_a0dc32f0216795d83a9185affeaa73be749aac96059858c7315b8c9155146ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_a0dc32f0216795d83a9185affeaa73be749aac96059858c7315b8c9155146ee4->leave($__internal_a0dc32f0216795d83a9185affeaa73be749aac96059858c7315b8c9155146ee4_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_db4b82f4662f2302c516fa661eaea3a037bccf2e62ab94da33d6db93f96e3c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4b82f4662f2302c516fa661eaea3a037bccf2e62ab94da33d6db93f96e3c7f->enter($__internal_db4b82f4662f2302c516fa661eaea3a037bccf2e62ab94da33d6db93f96e3c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_db4b82f4662f2302c516fa661eaea3a037bccf2e62ab94da33d6db93f96e3c7f->leave($__internal_db4b82f4662f2302c516fa661eaea3a037bccf2e62ab94da33d6db93f96e3c7f_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e824a42c3eb35acfb5ab41849d241a8c064bdf700c2a5f8bf22bc9da3ab03f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e824a42c3eb35acfb5ab41849d241a8c064bdf700c2a5f8bf22bc9da3ab03f25->enter($__internal_e824a42c3eb35acfb5ab41849d241a8c064bdf700c2a5f8bf22bc9da3ab03f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_e824a42c3eb35acfb5ab41849d241a8c064bdf700c2a5f8bf22bc9da3ab03f25->leave($__internal_e824a42c3eb35acfb5ab41849d241a8c064bdf700c2a5f8bf22bc9da3ab03f25_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_99f2c4dda16fe6ec212df2f43be105b75e38e9c7696808c3c21cd6da7a0ce074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f2c4dda16fe6ec212df2f43be105b75e38e9c7696808c3c21cd6da7a0ce074->enter($__internal_99f2c4dda16fe6ec212df2f43be105b75e38e9c7696808c3c21cd6da7a0ce074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_99f2c4dda16fe6ec212df2f43be105b75e38e9c7696808c3c21cd6da7a0ce074->leave($__internal_99f2c4dda16fe6ec212df2f43be105b75e38e9c7696808c3c21cd6da7a0ce074_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
