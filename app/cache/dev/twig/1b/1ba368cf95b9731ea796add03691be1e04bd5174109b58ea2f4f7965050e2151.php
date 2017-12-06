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
        $__internal_3719b0d5abfc379add205dd385162bc3f464852205f24a72a02fe2863aa665c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3719b0d5abfc379add205dd385162bc3f464852205f24a72a02fe2863aa665c7->enter($__internal_3719b0d5abfc379add205dd385162bc3f464852205f24a72a02fe2863aa665c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <h1><a href=\"#\">";
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
        
        $__internal_3719b0d5abfc379add205dd385162bc3f464852205f24a72a02fe2863aa665c7->leave($__internal_3719b0d5abfc379add205dd385162bc3f464852205f24a72a02fe2863aa665c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cd2eada44483bca8e3a55c6f3e71e572aaaa5c8eb303924859afd94cf6a43f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd2eada44483bca8e3a55c6f3e71e572aaaa5c8eb303924859afd94cf6a43f8->enter($__internal_8cd2eada44483bca8e3a55c6f3e71e572aaaa5c8eb303924859afd94cf6a43f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8cd2eada44483bca8e3a55c6f3e71e572aaaa5c8eb303924859afd94cf6a43f8->leave($__internal_8cd2eada44483bca8e3a55c6f3e71e572aaaa5c8eb303924859afd94cf6a43f8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d79daab04499b64ab715e3041213b879b65d7251c274fb4fa9dbaa5b3e1e80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d79daab04499b64ab715e3041213b879b65d7251c274fb4fa9dbaa5b3e1e80f->enter($__internal_9d79daab04499b64ab715e3041213b879b65d7251c274fb4fa9dbaa5b3e1e80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_9d79daab04499b64ab715e3041213b879b65d7251c274fb4fa9dbaa5b3e1e80f->leave($__internal_9d79daab04499b64ab715e3041213b879b65d7251c274fb4fa9dbaa5b3e1e80f_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0248aefcb253e5f26dd1f20e624f14e05d2e36b7e12ef764ab9aeb26c1081a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0248aefcb253e5f26dd1f20e624f14e05d2e36b7e12ef764ab9aeb26c1081a8->enter($__internal_b0248aefcb253e5f26dd1f20e624f14e05d2e36b7e12ef764ab9aeb26c1081a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_b0248aefcb253e5f26dd1f20e624f14e05d2e36b7e12ef764ab9aeb26c1081a8->leave($__internal_b0248aefcb253e5f26dd1f20e624f14e05d2e36b7e12ef764ab9aeb26c1081a8_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_92fd6e2fbd1fcca882a82ccf46b1ad789e1d66b9558a2e94d015769b96c6fc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fd6e2fbd1fcca882a82ccf46b1ad789e1d66b9558a2e94d015769b96c6fc7d->enter($__internal_92fd6e2fbd1fcca882a82ccf46b1ad789e1d66b9558a2e94d015769b96c6fc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_92fd6e2fbd1fcca882a82ccf46b1ad789e1d66b9558a2e94d015769b96c6fc7d->leave($__internal_92fd6e2fbd1fcca882a82ccf46b1ad789e1d66b9558a2e94d015769b96c6fc7d_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_cfdd260af7457e3c96c1bfd115a1aff5de20abff33f365c4584a54f46f553449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdd260af7457e3c96c1bfd115a1aff5de20abff33f365c4584a54f46f553449->enter($__internal_cfdd260af7457e3c96c1bfd115a1aff5de20abff33f365c4584a54f46f553449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_cfdd260af7457e3c96c1bfd115a1aff5de20abff33f365c4584a54f46f553449->leave($__internal_cfdd260af7457e3c96c1bfd115a1aff5de20abff33f365c4584a54f46f553449_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_28f26afbdc5759cc17ff386997bfd0a06bdd1d04dc0bd15b9a0d40f70062cf92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f26afbdc5759cc17ff386997bfd0a06bdd1d04dc0bd15b9a0d40f70062cf92->enter($__internal_28f26afbdc5759cc17ff386997bfd0a06bdd1d04dc0bd15b9a0d40f70062cf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_28f26afbdc5759cc17ff386997bfd0a06bdd1d04dc0bd15b9a0d40f70062cf92->leave($__internal_28f26afbdc5759cc17ff386997bfd0a06bdd1d04dc0bd15b9a0d40f70062cf92_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_491e297c9277da53dee9314b3aba373fefbfc9d66fcb67b4a2fbfae9b55a597d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491e297c9277da53dee9314b3aba373fefbfc9d66fcb67b4a2fbfae9b55a597d->enter($__internal_491e297c9277da53dee9314b3aba373fefbfc9d66fcb67b4a2fbfae9b55a597d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_491e297c9277da53dee9314b3aba373fefbfc9d66fcb67b4a2fbfae9b55a597d->leave($__internal_491e297c9277da53dee9314b3aba373fefbfc9d66fcb67b4a2fbfae9b55a597d_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_e569afdbd1b3cc9a80c79e989913c416388ee3f73d8cc74447d17970819e5f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e569afdbd1b3cc9a80c79e989913c416388ee3f73d8cc74447d17970819e5f81->enter($__internal_e569afdbd1b3cc9a80c79e989913c416388ee3f73d8cc74447d17970819e5f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_e569afdbd1b3cc9a80c79e989913c416388ee3f73d8cc74447d17970819e5f81->leave($__internal_e569afdbd1b3cc9a80c79e989913c416388ee3f73d8cc74447d17970819e5f81_prof);

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
                <h1><a href=\"#\">{% block title %} {% endblock %} </a></h1>
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
