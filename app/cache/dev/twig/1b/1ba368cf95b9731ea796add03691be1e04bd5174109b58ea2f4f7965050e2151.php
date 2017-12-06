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
        $__internal_a9cfd45968e65025aca2966d0665249634a3331d8926b82d4acb0e4b611a9c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cfd45968e65025aca2966d0665249634a3331d8926b82d4acb0e4b611a9c2a->enter($__internal_a9cfd45968e65025aca2966d0665249634a3331d8926b82d4acb0e4b611a9c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a id=\"titulo-lista\" href=\"#\">";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo " </a></h1>
                ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a>
                ";
        } else {
            // line 27
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a>    
                ";
        }
        // line 29
        echo "            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 40
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 45
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 46
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
        
        $__internal_a9cfd45968e65025aca2966d0665249634a3331d8926b82d4acb0e4b611a9c2a->leave($__internal_a9cfd45968e65025aca2966d0665249634a3331d8926b82d4acb0e4b611a9c2a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61a4a0bc1fe0354d052f32d3e402796dd4fe313f0b1291678f0d1df172c9e238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a4a0bc1fe0354d052f32d3e402796dd4fe313f0b1291678f0d1df172c9e238->enter($__internal_61a4a0bc1fe0354d052f32d3e402796dd4fe313f0b1291678f0d1df172c9e238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_61a4a0bc1fe0354d052f32d3e402796dd4fe313f0b1291678f0d1df172c9e238->leave($__internal_61a4a0bc1fe0354d052f32d3e402796dd4fe313f0b1291678f0d1df172c9e238_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfb5373fc345adf23b3dec20f3d29c1ee84694e95681164e5724391fef762a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb5373fc345adf23b3dec20f3d29c1ee84694e95681164e5724391fef762a3b->enter($__internal_bfb5373fc345adf23b3dec20f3d29c1ee84694e95681164e5724391fef762a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_bfb5373fc345adf23b3dec20f3d29c1ee84694e95681164e5724391fef762a3b->leave($__internal_bfb5373fc345adf23b3dec20f3d29c1ee84694e95681164e5724391fef762a3b_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5df39fd9bf2e70639ff0b8b9e6155d9da6e6ef303084ec52fc60ddc6ab4594a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5df39fd9bf2e70639ff0b8b9e6155d9da6e6ef303084ec52fc60ddc6ab4594a->enter($__internal_a5df39fd9bf2e70639ff0b8b9e6155d9da6e6ef303084ec52fc60ddc6ab4594a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_a5df39fd9bf2e70639ff0b8b9e6155d9da6e6ef303084ec52fc60ddc6ab4594a->leave($__internal_a5df39fd9bf2e70639ff0b8b9e6155d9da6e6ef303084ec52fc60ddc6ab4594a_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d0609f24da46c8c512dc413f64d11e105130cf0f7980a47e32b22cca6c00445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0609f24da46c8c512dc413f64d11e105130cf0f7980a47e32b22cca6c00445->enter($__internal_1d0609f24da46c8c512dc413f64d11e105130cf0f7980a47e32b22cca6c00445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d0609f24da46c8c512dc413f64d11e105130cf0f7980a47e32b22cca6c00445->leave($__internal_1d0609f24da46c8c512dc413f64d11e105130cf0f7980a47e32b22cca6c00445_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_d515d1d90efa4789cba0d66f2f257fc6b0d00c4a08280d00fd7772e595efca49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d515d1d90efa4789cba0d66f2f257fc6b0d00c4a08280d00fd7772e595efca49->enter($__internal_d515d1d90efa4789cba0d66f2f257fc6b0d00c4a08280d00fd7772e595efca49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_d515d1d90efa4789cba0d66f2f257fc6b0d00c4a08280d00fd7772e595efca49->leave($__internal_d515d1d90efa4789cba0d66f2f257fc6b0d00c4a08280d00fd7772e595efca49_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5a85ca3292f6822ee9d115fedc446385c1379ad9be4656302e2a2e84477bdf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a85ca3292f6822ee9d115fedc446385c1379ad9be4656302e2a2e84477bdf90->enter($__internal_5a85ca3292f6822ee9d115fedc446385c1379ad9be4656302e2a2e84477bdf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_5a85ca3292f6822ee9d115fedc446385c1379ad9be4656302e2a2e84477bdf90->leave($__internal_5a85ca3292f6822ee9d115fedc446385c1379ad9be4656302e2a2e84477bdf90_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_5b4586d5929667bfecc1e80f30859640fa07178f5d599be62b680d63788523bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4586d5929667bfecc1e80f30859640fa07178f5d599be62b680d63788523bb->enter($__internal_5b4586d5929667bfecc1e80f30859640fa07178f5d599be62b680d63788523bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_5b4586d5929667bfecc1e80f30859640fa07178f5d599be62b680d63788523bb->leave($__internal_5b4586d5929667bfecc1e80f30859640fa07178f5d599be62b680d63788523bb_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_b2a73291a361d904b05a1b690b2c23bdd39bc0771250c6496b94e34f339cf77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a73291a361d904b05a1b690b2c23bdd39bc0771250c6496b94e34f339cf77f->enter($__internal_b2a73291a361d904b05a1b690b2c23bdd39bc0771250c6496b94e34f339cf77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_b2a73291a361d904b05a1b690b2c23bdd39bc0771250c6496b94e34f339cf77f->leave($__internal_b2a73291a361d904b05a1b690b2c23bdd39bc0771250c6496b94e34f339cf77f_prof);

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
        return array (  209 => 45,  198 => 44,  187 => 43,  176 => 39,  165 => 38,  153 => 23,  145 => 14,  139 => 13,  130 => 11,  124 => 7,  118 => 6,  98 => 46,  95 => 45,  92 => 44,  90 => 43,  85 => 40,  82 => 39,  80 => 38,  69 => 29,  63 => 27,  57 => 25,  55 => 24,  51 => 23,  42 => 16,  39 => 13,  37 => 6,  30 => 1,);
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

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a id=\"titulo-lista\" href=\"#\">{% block title %} {% endblock %} </a></h1>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('congreso_admin_logout')}}\">Salir</a>
                {% else %}
                    <a href=\"{{ path('congreso_admin_login')}}\">Entrar</a>    
                {% endif %}
            </div>
        </div>
    
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
