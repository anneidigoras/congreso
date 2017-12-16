<?php

/* ::base.html.twig */
class __TwigTemplate_c7f7343bc74cd1b834c90fb50f66c37284021a6cb101e0b0d671eb97d5525204 extends Twig_Template
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
        // line 36
        echo "                </div>
                <h1><a id=\"titulo-lista\" href=\"#\">";
        // line 37
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
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            ";
        $this->displayBlock('tabla', $context, $blocks);
        // line 51
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 55
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 56
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 57
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
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "            
        ";
    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        // line 21
        echo "                        <nav>
                            <ul class=\"navigation\">
                                ";
        // line 23
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 24
            echo "                                    <li>Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "</li>
                                ";
        }
        // line 26
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_list");
        echo "\">Inicio</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_contact");
        echo "\">Contacto</a></li>
                                ";
        // line 28
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 29
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_logout");
            echo "\">Salir</a></li>
                                ";
        } else {
            // line 31
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_admin_login");
            echo "\">Entrar</a></li>
                                ";
        }
        // line 33
        echo "                            </ul>
                        </nav>
                    ";
    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    // line 50
    public function block_tabla($context, array $blocks = array())
    {
    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 55
    public function block_linea($context, array $blocks = array())
    {
    }

    // line 56
    public function block_sidebar1($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 56,  188 => 55,  183 => 54,  178 => 50,  173 => 49,  168 => 37,  162 => 33,  156 => 31,  150 => 29,  148 => 28,  144 => 27,  139 => 26,  133 => 24,  131 => 23,  127 => 21,  124 => 20,  119 => 14,  116 => 13,  110 => 11,  104 => 7,  101 => 6,  84 => 57,  81 => 56,  78 => 55,  76 => 54,  71 => 51,  68 => 50,  66 => 49,  51 => 37,  48 => 36,  46 => 20,  40 => 16,  37 => 13,  35 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
