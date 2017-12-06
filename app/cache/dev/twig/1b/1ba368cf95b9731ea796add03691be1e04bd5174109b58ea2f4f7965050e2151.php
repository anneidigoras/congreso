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
        $__internal_af38109dc3b53280f46089e00705b7abda700638a5842dfd4baa53adfee7b2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af38109dc3b53280f46089e00705b7abda700638a5842dfd4baa53adfee7b2a0->enter($__internal_af38109dc3b53280f46089e00705b7abda700638a5842dfd4baa53adfee7b2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_af38109dc3b53280f46089e00705b7abda700638a5842dfd4baa53adfee7b2a0->leave($__internal_af38109dc3b53280f46089e00705b7abda700638a5842dfd4baa53adfee7b2a0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5b7e7ddd48b0a625ebd4b57b2f54f7c9a041f740da953e1a3df0a96512aca4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b7e7ddd48b0a625ebd4b57b2f54f7c9a041f740da953e1a3df0a96512aca4a->enter($__internal_b5b7e7ddd48b0a625ebd4b57b2f54f7c9a041f740da953e1a3df0a96512aca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b5b7e7ddd48b0a625ebd4b57b2f54f7c9a041f740da953e1a3df0a96512aca4a->leave($__internal_b5b7e7ddd48b0a625ebd4b57b2f54f7c9a041f740da953e1a3df0a96512aca4a_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c7c52c98e861549c3559db5a90e69b8fbb0ccdbc0e92d4a3ac391fd5a74b923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7c52c98e861549c3559db5a90e69b8fbb0ccdbc0e92d4a3ac391fd5a74b923->enter($__internal_8c7c52c98e861549c3559db5a90e69b8fbb0ccdbc0e92d4a3ac391fd5a74b923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_8c7c52c98e861549c3559db5a90e69b8fbb0ccdbc0e92d4a3ac391fd5a74b923->leave($__internal_8c7c52c98e861549c3559db5a90e69b8fbb0ccdbc0e92d4a3ac391fd5a74b923_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_106f07fa17bc6f88933efaf7918e756c649aac3c91ba2bd1c72ea37c75fe27b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106f07fa17bc6f88933efaf7918e756c649aac3c91ba2bd1c72ea37c75fe27b0->enter($__internal_106f07fa17bc6f88933efaf7918e756c649aac3c91ba2bd1c72ea37c75fe27b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_106f07fa17bc6f88933efaf7918e756c649aac3c91ba2bd1c72ea37c75fe27b0->leave($__internal_106f07fa17bc6f88933efaf7918e756c649aac3c91ba2bd1c72ea37c75fe27b0_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc7733da9dfb249d5a80ce0256e2a1e76f310d87b86c255960c8eaba18ecd141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7733da9dfb249d5a80ce0256e2a1e76f310d87b86c255960c8eaba18ecd141->enter($__internal_fc7733da9dfb249d5a80ce0256e2a1e76f310d87b86c255960c8eaba18ecd141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc7733da9dfb249d5a80ce0256e2a1e76f310d87b86c255960c8eaba18ecd141->leave($__internal_fc7733da9dfb249d5a80ce0256e2a1e76f310d87b86c255960c8eaba18ecd141_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_e42163747b7e8e5f1b133528951e5aadb32617a5c71148a0feea127b30f349ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42163747b7e8e5f1b133528951e5aadb32617a5c71148a0feea127b30f349ca->enter($__internal_e42163747b7e8e5f1b133528951e5aadb32617a5c71148a0feea127b30f349ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_e42163747b7e8e5f1b133528951e5aadb32617a5c71148a0feea127b30f349ca->leave($__internal_e42163747b7e8e5f1b133528951e5aadb32617a5c71148a0feea127b30f349ca_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0ce5a6684c398e014880271f53ffe9da12992ea9c38be5c26067de8695a93916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce5a6684c398e014880271f53ffe9da12992ea9c38be5c26067de8695a93916->enter($__internal_0ce5a6684c398e014880271f53ffe9da12992ea9c38be5c26067de8695a93916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_0ce5a6684c398e014880271f53ffe9da12992ea9c38be5c26067de8695a93916->leave($__internal_0ce5a6684c398e014880271f53ffe9da12992ea9c38be5c26067de8695a93916_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_36c4b78cd846604d5d731cde46d1d040bc2d2309e0552d7f6dc9ce849f96b67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c4b78cd846604d5d731cde46d1d040bc2d2309e0552d7f6dc9ce849f96b67c->enter($__internal_36c4b78cd846604d5d731cde46d1d040bc2d2309e0552d7f6dc9ce849f96b67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_36c4b78cd846604d5d731cde46d1d040bc2d2309e0552d7f6dc9ce849f96b67c->leave($__internal_36c4b78cd846604d5d731cde46d1d040bc2d2309e0552d7f6dc9ce849f96b67c_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ded26572df7865d0310e6cba5e655ea877f60cd8de9b6b269d0907fe50c2e9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded26572df7865d0310e6cba5e655ea877f60cd8de9b6b269d0907fe50c2e9e2->enter($__internal_ded26572df7865d0310e6cba5e655ea877f60cd8de9b6b269d0907fe50c2e9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_ded26572df7865d0310e6cba5e655ea877f60cd8de9b6b269d0907fe50c2e9e2->leave($__internal_ded26572df7865d0310e6cba5e655ea877f60cd8de9b6b269d0907fe50c2e9e2_prof);

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
