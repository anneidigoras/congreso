<?php

/* ::base.html.twig */
class __TwigTemplate_3c7154162f5f5dc0d920db7fdfe949f309b9f3fd132ccc85d99177bdcdfadce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85b098772b2dc39fc416f4598104e4c147dbb93cc7c90a5ff4468a505525a189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b098772b2dc39fc416f4598104e4c147dbb93cc7c90a5ff4468a505525a189->enter($__internal_85b098772b2dc39fc416f4598104e4c147dbb93cc7c90a5ff4468a505525a189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "    </head>
    <body>

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo " </a></h1>
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a>
                ";
        } else {
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a>    
                ";
        }
        // line 26
        echo "            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 39
        $this->displayBlock('sidebar', $context, $blocks);
        // line 40
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 41
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 42
        echo "
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
</html>";
        
        $__internal_85b098772b2dc39fc416f4598104e4c147dbb93cc7c90a5ff4468a505525a189->leave($__internal_85b098772b2dc39fc416f4598104e4c147dbb93cc7c90a5ff4468a505525a189_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a67120d27c34bdf4a2e9da4cb1d224f56571dba801540f13ad223fd0039f9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a67120d27c34bdf4a2e9da4cb1d224f56571dba801540f13ad223fd0039f9f2->enter($__internal_3a67120d27c34bdf4a2e9da4cb1d224f56571dba801540f13ad223fd0039f9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Congreso científico</title>
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_3a67120d27c34bdf4a2e9da4cb1d224f56571dba801540f13ad223fd0039f9f2->leave($__internal_3a67120d27c34bdf4a2e9da4cb1d224f56571dba801540f13ad223fd0039f9f2_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_faf069a74b0dcd6b0fe5cd8f0c6153fe98ecc9ea31461d4515279d6c5d4c42b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf069a74b0dcd6b0fe5cd8f0c6153fe98ecc9ea31461d4515279d6c5d4c42b3->enter($__internal_faf069a74b0dcd6b0fe5cd8f0c6153fe98ecc9ea31461d4515279d6c5d4c42b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_faf069a74b0dcd6b0fe5cd8f0c6153fe98ecc9ea31461d4515279d6c5d4c42b3->leave($__internal_faf069a74b0dcd6b0fe5cd8f0c6153fe98ecc9ea31461d4515279d6c5d4c42b3_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_89c8b3995dbde4a16158d870c9b37d2b17a72fa481718f1ee2a37ea7e5b09d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c8b3995dbde4a16158d870c9b37d2b17a72fa481718f1ee2a37ea7e5b09d70->enter($__internal_89c8b3995dbde4a16158d870c9b37d2b17a72fa481718f1ee2a37ea7e5b09d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89c8b3995dbde4a16158d870c9b37d2b17a72fa481718f1ee2a37ea7e5b09d70->leave($__internal_89c8b3995dbde4a16158d870c9b37d2b17a72fa481718f1ee2a37ea7e5b09d70_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_debf8490929429c44b8e99fa5770b93aa3ab7f8a8763dbd2779e95f80d2e8be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debf8490929429c44b8e99fa5770b93aa3ab7f8a8763dbd2779e95f80d2e8be4->enter($__internal_debf8490929429c44b8e99fa5770b93aa3ab7f8a8763dbd2779e95f80d2e8be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_debf8490929429c44b8e99fa5770b93aa3ab7f8a8763dbd2779e95f80d2e8be4->leave($__internal_debf8490929429c44b8e99fa5770b93aa3ab7f8a8763dbd2779e95f80d2e8be4_prof);

    }

    // line 40
    public function block_linea($context, array $blocks = array())
    {
        $__internal_22ff15d415426b7925242911fcc95330227e86173ea74d5555616eef7de89d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ff15d415426b7925242911fcc95330227e86173ea74d5555616eef7de89d2d->enter($__internal_22ff15d415426b7925242911fcc95330227e86173ea74d5555616eef7de89d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_22ff15d415426b7925242911fcc95330227e86173ea74d5555616eef7de89d2d->leave($__internal_22ff15d415426b7925242911fcc95330227e86173ea74d5555616eef7de89d2d_prof);

    }

    // line 41
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_c23f51b3264717480dc85d664e09db5543a30a43139ddbcfc40cb3675e56851e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23f51b3264717480dc85d664e09db5543a30a43139ddbcfc40cb3675e56851e->enter($__internal_c23f51b3264717480dc85d664e09db5543a30a43139ddbcfc40cb3675e56851e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_c23f51b3264717480dc85d664e09db5543a30a43139ddbcfc40cb3675e56851e->leave($__internal_c23f51b3264717480dc85d664e09db5543a30a43139ddbcfc40cb3675e56851e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 41,  166 => 40,  155 => 39,  144 => 35,  132 => 20,  123 => 11,  117 => 7,  111 => 6,  90 => 42,  87 => 41,  84 => 40,  82 => 39,  77 => 36,  75 => 35,  64 => 26,  58 => 24,  52 => 22,  50 => 21,  46 => 20,  37 => 13,  35 => 6,  28 => 1,);
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
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
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
