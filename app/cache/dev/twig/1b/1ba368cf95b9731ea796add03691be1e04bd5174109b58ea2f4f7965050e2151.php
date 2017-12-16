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
        $__internal_f504357c25474dc304e60422282c67eb3ea4a696fbb58bbd56825bfd2c20fad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f504357c25474dc304e60422282c67eb3ea4a696fbb58bbd56825bfd2c20fad1->enter($__internal_f504357c25474dc304e60422282c67eb3ea4a696fbb58bbd56825bfd2c20fad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f504357c25474dc304e60422282c67eb3ea4a696fbb58bbd56825bfd2c20fad1->leave($__internal_f504357c25474dc304e60422282c67eb3ea4a696fbb58bbd56825bfd2c20fad1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c8c4898b4102a436a02cf74b544ec8e998def47e716c1bd81fa82c324f14a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8c4898b4102a436a02cf74b544ec8e998def47e716c1bd81fa82c324f14a23->enter($__internal_8c8c4898b4102a436a02cf74b544ec8e998def47e716c1bd81fa82c324f14a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8c8c4898b4102a436a02cf74b544ec8e998def47e716c1bd81fa82c324f14a23->leave($__internal_8c8c4898b4102a436a02cf74b544ec8e998def47e716c1bd81fa82c324f14a23_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0453565194aca2c852f8c6631e5baa96b5bccd2f087c7f5b040875ec41505a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0453565194aca2c852f8c6631e5baa96b5bccd2f087c7f5b040875ec41505a78->enter($__internal_0453565194aca2c852f8c6631e5baa96b5bccd2f087c7f5b040875ec41505a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_0453565194aca2c852f8c6631e5baa96b5bccd2f087c7f5b040875ec41505a78->leave($__internal_0453565194aca2c852f8c6631e5baa96b5bccd2f087c7f5b040875ec41505a78_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2f2a997a704bf226d1bf1d4138553fc8ebc5e7f31850597821f107b485708c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2a997a704bf226d1bf1d4138553fc8ebc5e7f31850597821f107b485708c9e->enter($__internal_2f2a997a704bf226d1bf1d4138553fc8ebc5e7f31850597821f107b485708c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2f2a997a704bf226d1bf1d4138553fc8ebc5e7f31850597821f107b485708c9e->leave($__internal_2f2a997a704bf226d1bf1d4138553fc8ebc5e7f31850597821f107b485708c9e_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_370eecb478d9bc2091b6c1bab650ac1046f572d29c656210010708fd788e173d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370eecb478d9bc2091b6c1bab650ac1046f572d29c656210010708fd788e173d->enter($__internal_370eecb478d9bc2091b6c1bab650ac1046f572d29c656210010708fd788e173d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_370eecb478d9bc2091b6c1bab650ac1046f572d29c656210010708fd788e173d->leave($__internal_370eecb478d9bc2091b6c1bab650ac1046f572d29c656210010708fd788e173d_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5b46f89049da731e0c2c95ef203f31bb8f1fc80fc86b1c3d6f02f3c44fa714f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b46f89049da731e0c2c95ef203f31bb8f1fc80fc86b1c3d6f02f3c44fa714f->enter($__internal_b5b46f89049da731e0c2c95ef203f31bb8f1fc80fc86b1c3d6f02f3c44fa714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5b46f89049da731e0c2c95ef203f31bb8f1fc80fc86b1c3d6f02f3c44fa714f->leave($__internal_b5b46f89049da731e0c2c95ef203f31bb8f1fc80fc86b1c3d6f02f3c44fa714f_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_35651667675e6ba8ff93cd7ae2d191e4451b5fb139a7a1436a044d44c36139d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35651667675e6ba8ff93cd7ae2d191e4451b5fb139a7a1436a044d44c36139d0->enter($__internal_35651667675e6ba8ff93cd7ae2d191e4451b5fb139a7a1436a044d44c36139d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_35651667675e6ba8ff93cd7ae2d191e4451b5fb139a7a1436a044d44c36139d0->leave($__internal_35651667675e6ba8ff93cd7ae2d191e4451b5fb139a7a1436a044d44c36139d0_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d00ba7bffc39e4d80b2ea5fa9afc97aa2958cc72e1b3995e3a6b5330c5b4ebd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00ba7bffc39e4d80b2ea5fa9afc97aa2958cc72e1b3995e3a6b5330c5b4ebd3->enter($__internal_d00ba7bffc39e4d80b2ea5fa9afc97aa2958cc72e1b3995e3a6b5330c5b4ebd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d00ba7bffc39e4d80b2ea5fa9afc97aa2958cc72e1b3995e3a6b5330c5b4ebd3->leave($__internal_d00ba7bffc39e4d80b2ea5fa9afc97aa2958cc72e1b3995e3a6b5330c5b4ebd3_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e1870dfc566c67dcdfb20dea0af9f26d996b5c4f20f5687dd8f03c262a79f267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1870dfc566c67dcdfb20dea0af9f26d996b5c4f20f5687dd8f03c262a79f267->enter($__internal_e1870dfc566c67dcdfb20dea0af9f26d996b5c4f20f5687dd8f03c262a79f267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_e1870dfc566c67dcdfb20dea0af9f26d996b5c4f20f5687dd8f03c262a79f267->leave($__internal_e1870dfc566c67dcdfb20dea0af9f26d996b5c4f20f5687dd8f03c262a79f267_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_1dff7cdf1e2ddeaf0865e3a86a9909ab02b03e0c069942aec2fe370bdf840429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dff7cdf1e2ddeaf0865e3a86a9909ab02b03e0c069942aec2fe370bdf840429->enter($__internal_1dff7cdf1e2ddeaf0865e3a86a9909ab02b03e0c069942aec2fe370bdf840429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_1dff7cdf1e2ddeaf0865e3a86a9909ab02b03e0c069942aec2fe370bdf840429->leave($__internal_1dff7cdf1e2ddeaf0865e3a86a9909ab02b03e0c069942aec2fe370bdf840429_prof);

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
