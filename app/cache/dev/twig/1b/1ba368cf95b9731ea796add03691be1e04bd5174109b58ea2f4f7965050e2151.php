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
        $__internal_c9019a76610f2909d0b0e79109db044a41cd4c208c931773b02b4c744ec13a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9019a76610f2909d0b0e79109db044a41cd4c208c931773b02b4c744ec13a53->enter($__internal_c9019a76610f2909d0b0e79109db044a41cd4c208c931773b02b4c744ec13a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c9019a76610f2909d0b0e79109db044a41cd4c208c931773b02b4c744ec13a53->leave($__internal_c9019a76610f2909d0b0e79109db044a41cd4c208c931773b02b4c744ec13a53_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6f754813c8dcc06693bbc8dc0c8f7728831aa9b83178ecf801223b428f60501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f754813c8dcc06693bbc8dc0c8f7728831aa9b83178ecf801223b428f60501->enter($__internal_d6f754813c8dcc06693bbc8dc0c8f7728831aa9b83178ecf801223b428f60501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d6f754813c8dcc06693bbc8dc0c8f7728831aa9b83178ecf801223b428f60501->leave($__internal_d6f754813c8dcc06693bbc8dc0c8f7728831aa9b83178ecf801223b428f60501_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08da0fc5ee0e29bd4886573e0a90c6b9d69e2f1e8874ead53a8e10e37c2d61ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08da0fc5ee0e29bd4886573e0a90c6b9d69e2f1e8874ead53a8e10e37c2d61ce->enter($__internal_08da0fc5ee0e29bd4886573e0a90c6b9d69e2f1e8874ead53a8e10e37c2d61ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_08da0fc5ee0e29bd4886573e0a90c6b9d69e2f1e8874ead53a8e10e37c2d61ce->leave($__internal_08da0fc5ee0e29bd4886573e0a90c6b9d69e2f1e8874ead53a8e10e37c2d61ce_prof);

    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f23bb9b029aa4220d867b0148bec77b4c5a1ed5c6888bfb4a808ee0f3eeb091c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23bb9b029aa4220d867b0148bec77b4c5a1ed5c6888bfb4a808ee0f3eeb091c->enter($__internal_f23bb9b029aa4220d867b0148bec77b4c5a1ed5c6888bfb4a808ee0f3eeb091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_f23bb9b029aa4220d867b0148bec77b4c5a1ed5c6888bfb4a808ee0f3eeb091c->leave($__internal_f23bb9b029aa4220d867b0148bec77b4c5a1ed5c6888bfb4a808ee0f3eeb091c_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_461691a4f7b2fd5d2cee1f62830046f1dd75bee509c7df6c9ed65cf4db72c3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461691a4f7b2fd5d2cee1f62830046f1dd75bee509c7df6c9ed65cf4db72c3cc->enter($__internal_461691a4f7b2fd5d2cee1f62830046f1dd75bee509c7df6c9ed65cf4db72c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_461691a4f7b2fd5d2cee1f62830046f1dd75bee509c7df6c9ed65cf4db72c3cc->leave($__internal_461691a4f7b2fd5d2cee1f62830046f1dd75bee509c7df6c9ed65cf4db72c3cc_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3808793bdecf1648c444a6d07ff8f467928ff135400396efd33d5953b35c10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3808793bdecf1648c444a6d07ff8f467928ff135400396efd33d5953b35c10e->enter($__internal_e3808793bdecf1648c444a6d07ff8f467928ff135400396efd33d5953b35c10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3808793bdecf1648c444a6d07ff8f467928ff135400396efd33d5953b35c10e->leave($__internal_e3808793bdecf1648c444a6d07ff8f467928ff135400396efd33d5953b35c10e_prof);

    }

    // line 47
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_c2f4572d38ee6826ebef64bc01520707b075d7093d475b0a7e0c6deccb332dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f4572d38ee6826ebef64bc01520707b075d7093d475b0a7e0c6deccb332dfc->enter($__internal_c2f4572d38ee6826ebef64bc01520707b075d7093d475b0a7e0c6deccb332dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_c2f4572d38ee6826ebef64bc01520707b075d7093d475b0a7e0c6deccb332dfc->leave($__internal_c2f4572d38ee6826ebef64bc01520707b075d7093d475b0a7e0c6deccb332dfc_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2ad7949c4e7bda2e71984f0492f67589f5b9565b04d420087aa305655bcda060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad7949c4e7bda2e71984f0492f67589f5b9565b04d420087aa305655bcda060->enter($__internal_2ad7949c4e7bda2e71984f0492f67589f5b9565b04d420087aa305655bcda060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2ad7949c4e7bda2e71984f0492f67589f5b9565b04d420087aa305655bcda060->leave($__internal_2ad7949c4e7bda2e71984f0492f67589f5b9565b04d420087aa305655bcda060_prof);

    }

    // line 52
    public function block_linea($context, array $blocks = array())
    {
        $__internal_19610e47e69510ec23f6409f61b336f85a025caf0b1de3120bd1b028a3581368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19610e47e69510ec23f6409f61b336f85a025caf0b1de3120bd1b028a3581368->enter($__internal_19610e47e69510ec23f6409f61b336f85a025caf0b1de3120bd1b028a3581368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_19610e47e69510ec23f6409f61b336f85a025caf0b1de3120bd1b028a3581368->leave($__internal_19610e47e69510ec23f6409f61b336f85a025caf0b1de3120bd1b028a3581368_prof);

    }

    // line 53
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ec303d04b0083cfe68c989b1070c73cf33e65ab78127485e37c9a6b1bb0ec422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec303d04b0083cfe68c989b1070c73cf33e65ab78127485e37c9a6b1bb0ec422->enter($__internal_ec303d04b0083cfe68c989b1070c73cf33e65ab78127485e37c9a6b1bb0ec422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_ec303d04b0083cfe68c989b1070c73cf33e65ab78127485e37c9a6b1bb0ec422->leave($__internal_ec303d04b0083cfe68c989b1070c73cf33e65ab78127485e37c9a6b1bb0ec422_prof);

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
