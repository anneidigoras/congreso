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
        $__internal_f967c34326fd7ade7ef4cae38eaac254fbffa27528d15bba2e2a9288d5c56538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f967c34326fd7ade7ef4cae38eaac254fbffa27528d15bba2e2a9288d5c56538->enter($__internal_f967c34326fd7ade7ef4cae38eaac254fbffa27528d15bba2e2a9288d5c56538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseIng.html.twig"));

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
        
        $__internal_f967c34326fd7ade7ef4cae38eaac254fbffa27528d15bba2e2a9288d5c56538->leave($__internal_f967c34326fd7ade7ef4cae38eaac254fbffa27528d15bba2e2a9288d5c56538_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c05ffb11f10ee62c124311cf92d49c02be51c61205d57c139a0ae66ea3e5ad8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05ffb11f10ee62c124311cf92d49c02be51c61205d57c139a0ae66ea3e5ad8d->enter($__internal_c05ffb11f10ee62c124311cf92d49c02be51c61205d57c139a0ae66ea3e5ad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c05ffb11f10ee62c124311cf92d49c02be51c61205d57c139a0ae66ea3e5ad8d->leave($__internal_c05ffb11f10ee62c124311cf92d49c02be51c61205d57c139a0ae66ea3e5ad8d_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ed8ff883bc4a11a573012605111b39ed0fa3b172dc1232636fb4478c0c5f65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed8ff883bc4a11a573012605111b39ed0fa3b172dc1232636fb4478c0c5f65b->enter($__internal_3ed8ff883bc4a11a573012605111b39ed0fa3b172dc1232636fb4478c0c5f65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_3ed8ff883bc4a11a573012605111b39ed0fa3b172dc1232636fb4478c0c5f65b->leave($__internal_3ed8ff883bc4a11a573012605111b39ed0fa3b172dc1232636fb4478c0c5f65b_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_c528979b03a402829a3125efbc935e75eed36b26abee1890fb4ac6fcc409ccd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c528979b03a402829a3125efbc935e75eed36b26abee1890fb4ac6fcc409ccd4->enter($__internal_c528979b03a402829a3125efbc935e75eed36b26abee1890fb4ac6fcc409ccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_c528979b03a402829a3125efbc935e75eed36b26abee1890fb4ac6fcc409ccd4->leave($__internal_c528979b03a402829a3125efbc935e75eed36b26abee1890fb4ac6fcc409ccd4_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_741a719425900bbf8f5b777db7de27c42224f8c197574864fdebcdde3baeca74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741a719425900bbf8f5b777db7de27c42224f8c197574864fdebcdde3baeca74->enter($__internal_741a719425900bbf8f5b777db7de27c42224f8c197574864fdebcdde3baeca74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_741a719425900bbf8f5b777db7de27c42224f8c197574864fdebcdde3baeca74->leave($__internal_741a719425900bbf8f5b777db7de27c42224f8c197574864fdebcdde3baeca74_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_6426757ec9eb6bfed391dc41a20d24850cfef4cf558fd7871d03c8404107ff60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6426757ec9eb6bfed391dc41a20d24850cfef4cf558fd7871d03c8404107ff60->enter($__internal_6426757ec9eb6bfed391dc41a20d24850cfef4cf558fd7871d03c8404107ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_6426757ec9eb6bfed391dc41a20d24850cfef4cf558fd7871d03c8404107ff60->leave($__internal_6426757ec9eb6bfed391dc41a20d24850cfef4cf558fd7871d03c8404107ff60_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fd071e6298219792ac0ea3c03659493639504a762b0f7e6ea18b5ada6431e6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd071e6298219792ac0ea3c03659493639504a762b0f7e6ea18b5ada6431e6f5->enter($__internal_fd071e6298219792ac0ea3c03659493639504a762b0f7e6ea18b5ada6431e6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_fd071e6298219792ac0ea3c03659493639504a762b0f7e6ea18b5ada6431e6f5->leave($__internal_fd071e6298219792ac0ea3c03659493639504a762b0f7e6ea18b5ada6431e6f5_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_a332d382599db23350ab8f4de4c63e73ac7397aeb3ebafcf2fe69c39a4c02f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a332d382599db23350ab8f4de4c63e73ac7397aeb3ebafcf2fe69c39a4c02f79->enter($__internal_a332d382599db23350ab8f4de4c63e73ac7397aeb3ebafcf2fe69c39a4c02f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_a332d382599db23350ab8f4de4c63e73ac7397aeb3ebafcf2fe69c39a4c02f79->leave($__internal_a332d382599db23350ab8f4de4c63e73ac7397aeb3ebafcf2fe69c39a4c02f79_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_cf9c08c43534463ce8017748ab858d1740df4bfe624251f7d8405eca8282b016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9c08c43534463ce8017748ab858d1740df4bfe624251f7d8405eca8282b016->enter($__internal_cf9c08c43534463ce8017748ab858d1740df4bfe624251f7d8405eca8282b016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_cf9c08c43534463ce8017748ab858d1740df4bfe624251f7d8405eca8282b016->leave($__internal_cf9c08c43534463ce8017748ab858d1740df4bfe624251f7d8405eca8282b016_prof);

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
