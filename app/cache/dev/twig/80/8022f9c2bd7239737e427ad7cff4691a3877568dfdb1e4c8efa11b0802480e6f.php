<?php

/* baseIng.html.twig */
class __TwigTemplate_6b1ea119c2469e75b974f4918de2db0dd7a395f44ae789833da534f7c2601389 extends Twig_Template
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
        $__internal_45fe6318c271f07d077e890e07aa469dc3b283b873e802b5e8200e6461915225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fe6318c271f07d077e890e07aa469dc3b283b873e802b5e8200e6461915225->enter($__internal_45fe6318c271f07d077e890e07aa469dc3b283b873e802b5e8200e6461915225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseIng.html.twig"));

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
        
        $__internal_45fe6318c271f07d077e890e07aa469dc3b283b873e802b5e8200e6461915225->leave($__internal_45fe6318c271f07d077e890e07aa469dc3b283b873e802b5e8200e6461915225_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_782ab123130289977bef5740a6e3da2ed98e39ad1536c07806e5504bbfb18c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782ab123130289977bef5740a6e3da2ed98e39ad1536c07806e5504bbfb18c16->enter($__internal_782ab123130289977bef5740a6e3da2ed98e39ad1536c07806e5504bbfb18c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_782ab123130289977bef5740a6e3da2ed98e39ad1536c07806e5504bbfb18c16->leave($__internal_782ab123130289977bef5740a6e3da2ed98e39ad1536c07806e5504bbfb18c16_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_811e4ab0b8f74ed7fed581753455b2a4ef75ba7ef03ff43f55830bf959d7c319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811e4ab0b8f74ed7fed581753455b2a4ef75ba7ef03ff43f55830bf959d7c319->enter($__internal_811e4ab0b8f74ed7fed581753455b2a4ef75ba7ef03ff43f55830bf959d7c319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_811e4ab0b8f74ed7fed581753455b2a4ef75ba7ef03ff43f55830bf959d7c319->leave($__internal_811e4ab0b8f74ed7fed581753455b2a4ef75ba7ef03ff43f55830bf959d7c319_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0f49728f884156dcd0013395f13cb9c192cb8041e4fcb9455034c2d72b67036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f49728f884156dcd0013395f13cb9c192cb8041e4fcb9455034c2d72b67036->enter($__internal_b0f49728f884156dcd0013395f13cb9c192cb8041e4fcb9455034c2d72b67036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_b0f49728f884156dcd0013395f13cb9c192cb8041e4fcb9455034c2d72b67036->leave($__internal_b0f49728f884156dcd0013395f13cb9c192cb8041e4fcb9455034c2d72b67036_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e7e63b04c0ab93ee1405f22f2bdd8289eb474bcbc5c5c5cc5b790d98896e9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7e63b04c0ab93ee1405f22f2bdd8289eb474bcbc5c5c5cc5b790d98896e9b8->enter($__internal_5e7e63b04c0ab93ee1405f22f2bdd8289eb474bcbc5c5c5cc5b790d98896e9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e7e63b04c0ab93ee1405f22f2bdd8289eb474bcbc5c5c5cc5b790d98896e9b8->leave($__internal_5e7e63b04c0ab93ee1405f22f2bdd8289eb474bcbc5c5c5cc5b790d98896e9b8_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_83c42b13937927b28fe1282ad36263723abaabbdc3aba23acdc90439da190dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c42b13937927b28fe1282ad36263723abaabbdc3aba23acdc90439da190dd3->enter($__internal_83c42b13937927b28fe1282ad36263723abaabbdc3aba23acdc90439da190dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_83c42b13937927b28fe1282ad36263723abaabbdc3aba23acdc90439da190dd3->leave($__internal_83c42b13937927b28fe1282ad36263723abaabbdc3aba23acdc90439da190dd3_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_42ab67428acc63f5f0d2038be73902c6fabb3d95dbd492cd068eed7e068099ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ab67428acc63f5f0d2038be73902c6fabb3d95dbd492cd068eed7e068099ab->enter($__internal_42ab67428acc63f5f0d2038be73902c6fabb3d95dbd492cd068eed7e068099ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_42ab67428acc63f5f0d2038be73902c6fabb3d95dbd492cd068eed7e068099ab->leave($__internal_42ab67428acc63f5f0d2038be73902c6fabb3d95dbd492cd068eed7e068099ab_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_ff6f6bcad1310c4ae3396ea24289d4a8daf0cdc62d3014da3386aa0e1cd9f860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6f6bcad1310c4ae3396ea24289d4a8daf0cdc62d3014da3386aa0e1cd9f860->enter($__internal_ff6f6bcad1310c4ae3396ea24289d4a8daf0cdc62d3014da3386aa0e1cd9f860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_ff6f6bcad1310c4ae3396ea24289d4a8daf0cdc62d3014da3386aa0e1cd9f860->leave($__internal_ff6f6bcad1310c4ae3396ea24289d4a8daf0cdc62d3014da3386aa0e1cd9f860_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_f4be602e809a71400a61a12800026d77f502a811cefd50874bfd49daf8bb233c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4be602e809a71400a61a12800026d77f502a811cefd50874bfd49daf8bb233c->enter($__internal_f4be602e809a71400a61a12800026d77f502a811cefd50874bfd49daf8bb233c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_f4be602e809a71400a61a12800026d77f502a811cefd50874bfd49daf8bb233c->leave($__internal_f4be602e809a71400a61a12800026d77f502a811cefd50874bfd49daf8bb233c_prof);

    }

    public function getTemplateName()
    {
        return "baseIng.html.twig";
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
</html>", "baseIng.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\baseIng.html.twig");
    }
}
