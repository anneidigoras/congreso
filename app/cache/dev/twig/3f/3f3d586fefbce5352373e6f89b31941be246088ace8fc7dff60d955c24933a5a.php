<?php

/* ::base.html.twig */
class __TwigTemplate_667bd328f123b816040981999141982f6cbf19b0d2ea556d84210f86e4c44f68 extends Twig_Template
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
        $__internal_458485c9f9244b279a670f9771df29991c2a31107229f80cfefee69875871a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458485c9f9244b279a670f9771df29991c2a31107229f80cfefee69875871a9c->enter($__internal_458485c9f9244b279a670f9771df29991c2a31107229f80cfefee69875871a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_458485c9f9244b279a670f9771df29991c2a31107229f80cfefee69875871a9c->leave($__internal_458485c9f9244b279a670f9771df29991c2a31107229f80cfefee69875871a9c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6530d9193e1cdb06ffcd1b5fd0736b76579ea7e7f55a2bdafc762d752d9718a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6530d9193e1cdb06ffcd1b5fd0736b76579ea7e7f55a2bdafc762d752d9718a5->enter($__internal_6530d9193e1cdb06ffcd1b5fd0736b76579ea7e7f55a2bdafc762d752d9718a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6530d9193e1cdb06ffcd1b5fd0736b76579ea7e7f55a2bdafc762d752d9718a5->leave($__internal_6530d9193e1cdb06ffcd1b5fd0736b76579ea7e7f55a2bdafc762d752d9718a5_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_447daeb42ee55c282f318ab02a823d2dd353ffb2a4f47955f825795b65c78733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447daeb42ee55c282f318ab02a823d2dd353ffb2a4f47955f825795b65c78733->enter($__internal_447daeb42ee55c282f318ab02a823d2dd353ffb2a4f47955f825795b65c78733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_447daeb42ee55c282f318ab02a823d2dd353ffb2a4f47955f825795b65c78733->leave($__internal_447daeb42ee55c282f318ab02a823d2dd353ffb2a4f47955f825795b65c78733_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e7462f053348abbaca5ea633444e5c7746b71306c3d461b920a9cae496602e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7462f053348abbaca5ea633444e5c7746b71306c3d461b920a9cae496602e3->enter($__internal_2e7462f053348abbaca5ea633444e5c7746b71306c3d461b920a9cae496602e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_2e7462f053348abbaca5ea633444e5c7746b71306c3d461b920a9cae496602e3->leave($__internal_2e7462f053348abbaca5ea633444e5c7746b71306c3d461b920a9cae496602e3_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_368274426509fd69cc8835b2396ff2242dfb0d9046a552ae21d656660a88391c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368274426509fd69cc8835b2396ff2242dfb0d9046a552ae21d656660a88391c->enter($__internal_368274426509fd69cc8835b2396ff2242dfb0d9046a552ae21d656660a88391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_368274426509fd69cc8835b2396ff2242dfb0d9046a552ae21d656660a88391c->leave($__internal_368274426509fd69cc8835b2396ff2242dfb0d9046a552ae21d656660a88391c_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_de95ea2d731bd4b692e32cb2bd1706ccb67ed0b76df94be63f33831e0264efd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de95ea2d731bd4b692e32cb2bd1706ccb67ed0b76df94be63f33831e0264efd9->enter($__internal_de95ea2d731bd4b692e32cb2bd1706ccb67ed0b76df94be63f33831e0264efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_de95ea2d731bd4b692e32cb2bd1706ccb67ed0b76df94be63f33831e0264efd9->leave($__internal_de95ea2d731bd4b692e32cb2bd1706ccb67ed0b76df94be63f33831e0264efd9_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_acf2d58500f10bdecda55c24bfaa496dbe512281c2f64462095992f4702768d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf2d58500f10bdecda55c24bfaa496dbe512281c2f64462095992f4702768d8->enter($__internal_acf2d58500f10bdecda55c24bfaa496dbe512281c2f64462095992f4702768d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_acf2d58500f10bdecda55c24bfaa496dbe512281c2f64462095992f4702768d8->leave($__internal_acf2d58500f10bdecda55c24bfaa496dbe512281c2f64462095992f4702768d8_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_1dec53321e1200721ef8e0bf8b6e9282b889f63f658ddda61de54e661d0efe1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dec53321e1200721ef8e0bf8b6e9282b889f63f658ddda61de54e661d0efe1c->enter($__internal_1dec53321e1200721ef8e0bf8b6e9282b889f63f658ddda61de54e661d0efe1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_1dec53321e1200721ef8e0bf8b6e9282b889f63f658ddda61de54e661d0efe1c->leave($__internal_1dec53321e1200721ef8e0bf8b6e9282b889f63f658ddda61de54e661d0efe1c_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_17a56db5b3516f1ce39bded94b88e1cc98bcd4de606eadef172227408b16fb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a56db5b3516f1ce39bded94b88e1cc98bcd4de606eadef172227408b16fb38->enter($__internal_17a56db5b3516f1ce39bded94b88e1cc98bcd4de606eadef172227408b16fb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_17a56db5b3516f1ce39bded94b88e1cc98bcd4de606eadef172227408b16fb38->leave($__internal_17a56db5b3516f1ce39bded94b88e1cc98bcd4de606eadef172227408b16fb38_prof);

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
</html>", "::base.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/base.html.twig");
    }
}
