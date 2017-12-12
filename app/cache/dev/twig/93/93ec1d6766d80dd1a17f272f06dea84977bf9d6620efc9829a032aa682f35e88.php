<?php

/* ::baseIng.html.twig */
class __TwigTemplate_221dd5e52c8ef1efddeb33c0d892cef8caebb3da46e95a7af8909be828849105 extends Twig_Template
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
        $__internal_9b09b4b39b8c6f881651acc7abdc441c00a015dde8b2ec3f623839012c951e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b09b4b39b8c6f881651acc7abdc441c00a015dde8b2ec3f623839012c951e6c->enter($__internal_9b09b4b39b8c6f881651acc7abdc441c00a015dde8b2ec3f623839012c951e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseIng.html.twig"));

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
            echo "\">Log out</a>
                ";
        } else {
            // line 27
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Log in</a>    
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
    <p>&copy; Scientific congres.All rights reserved.Designed by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>";
        
        $__internal_9b09b4b39b8c6f881651acc7abdc441c00a015dde8b2ec3f623839012c951e6c->leave($__internal_9b09b4b39b8c6f881651acc7abdc441c00a015dde8b2ec3f623839012c951e6c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0866f3d38ae5ddf9e4a585605ddc843c472772a5fda407c9fb298ec2be3118c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0866f3d38ae5ddf9e4a585605ddc843c472772a5fda407c9fb298ec2be3118c8->enter($__internal_0866f3d38ae5ddf9e4a585605ddc843c472772a5fda407c9fb298ec2be3118c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <title>Scientific congress</title>
            <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_0866f3d38ae5ddf9e4a585605ddc843c472772a5fda407c9fb298ec2be3118c8->leave($__internal_0866f3d38ae5ddf9e4a585605ddc843c472772a5fda407c9fb298ec2be3118c8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30ad60d4c72f0be30825d1618179833adfd2e02924f73ae3443b6ed55ff03447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ad60d4c72f0be30825d1618179833adfd2e02924f73ae3443b6ed55ff03447->enter($__internal_30ad60d4c72f0be30825d1618179833adfd2e02924f73ae3443b6ed55ff03447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_30ad60d4c72f0be30825d1618179833adfd2e02924f73ae3443b6ed55ff03447->leave($__internal_30ad60d4c72f0be30825d1618179833adfd2e02924f73ae3443b6ed55ff03447_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bd4842a250259f140eb47e42ed376af66a91b691da1a6afc2654742b7ab5461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd4842a250259f140eb47e42ed376af66a91b691da1a6afc2654742b7ab5461->enter($__internal_2bd4842a250259f140eb47e42ed376af66a91b691da1a6afc2654742b7ab5461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_2bd4842a250259f140eb47e42ed376af66a91b691da1a6afc2654742b7ab5461->leave($__internal_2bd4842a250259f140eb47e42ed376af66a91b691da1a6afc2654742b7ab5461_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_955665b2cc3b517bb6dd7a4c5938d599f270dc9105eecdb5207b3afe5437e2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955665b2cc3b517bb6dd7a4c5938d599f270dc9105eecdb5207b3afe5437e2ca->enter($__internal_955665b2cc3b517bb6dd7a4c5938d599f270dc9105eecdb5207b3afe5437e2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_955665b2cc3b517bb6dd7a4c5938d599f270dc9105eecdb5207b3afe5437e2ca->leave($__internal_955665b2cc3b517bb6dd7a4c5938d599f270dc9105eecdb5207b3afe5437e2ca_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_58d63674322602596c633607d4a4adbc7fde5699d664aeb59193d0c776b12db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d63674322602596c633607d4a4adbc7fde5699d664aeb59193d0c776b12db5->enter($__internal_58d63674322602596c633607d4a4adbc7fde5699d664aeb59193d0c776b12db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_58d63674322602596c633607d4a4adbc7fde5699d664aeb59193d0c776b12db5->leave($__internal_58d63674322602596c633607d4a4adbc7fde5699d664aeb59193d0c776b12db5_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7886ec765e27e5db7f75051b5a81668e85a7688eff01f9ecef240c5bce005f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7886ec765e27e5db7f75051b5a81668e85a7688eff01f9ecef240c5bce005f13->enter($__internal_7886ec765e27e5db7f75051b5a81668e85a7688eff01f9ecef240c5bce005f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7886ec765e27e5db7f75051b5a81668e85a7688eff01f9ecef240c5bce005f13->leave($__internal_7886ec765e27e5db7f75051b5a81668e85a7688eff01f9ecef240c5bce005f13_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_8bbdde3873088e77a030a815a6df39773f9eaef57c7c7ad2f37af2812711f8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbdde3873088e77a030a815a6df39773f9eaef57c7c7ad2f37af2812711f8e1->enter($__internal_8bbdde3873088e77a030a815a6df39773f9eaef57c7c7ad2f37af2812711f8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_8bbdde3873088e77a030a815a6df39773f9eaef57c7c7ad2f37af2812711f8e1->leave($__internal_8bbdde3873088e77a030a815a6df39773f9eaef57c7c7ad2f37af2812711f8e1_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_5b4258c327af00e67e4286cd9b0afaa5366507a402547859d66b7887a9d5efb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4258c327af00e67e4286cd9b0afaa5366507a402547859d66b7887a9d5efb3->enter($__internal_5b4258c327af00e67e4286cd9b0afaa5366507a402547859d66b7887a9d5efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_5b4258c327af00e67e4286cd9b0afaa5366507a402547859d66b7887a9d5efb3->leave($__internal_5b4258c327af00e67e4286cd9b0afaa5366507a402547859d66b7887a9d5efb3_prof);

    }

    public function getTemplateName()
    {
        return "::baseIng.html.twig";
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
            <title>Scientific congress</title>
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
                    <a href=\"{{ path('congreso_admin_logout')}}\">Log out</a>
                {% else %}
                    <a href=\"{{ path('congreso_admin_login')}}\">Log in</a>    
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
    <p>&copy; Scientific congres.All rights reserved.Designed by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>", "::baseIng.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/baseIng.html.twig");
    }
}
