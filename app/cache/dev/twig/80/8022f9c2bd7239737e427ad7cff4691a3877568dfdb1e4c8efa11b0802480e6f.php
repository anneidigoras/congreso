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
        $__internal_2e9d880e12e4deb1d30acae1bfae007d02327834382832118dba9c3bf1313ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9d880e12e4deb1d30acae1bfae007d02327834382832118dba9c3bf1313ab0->enter($__internal_2e9d880e12e4deb1d30acae1bfae007d02327834382832118dba9c3bf1313ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseIng.html.twig"));

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
        
        $__internal_2e9d880e12e4deb1d30acae1bfae007d02327834382832118dba9c3bf1313ab0->leave($__internal_2e9d880e12e4deb1d30acae1bfae007d02327834382832118dba9c3bf1313ab0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b97af33c2692522e44512ea4ad69dbcc714b8ca733d66b1b6a8d24881465827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97af33c2692522e44512ea4ad69dbcc714b8ca733d66b1b6a8d24881465827b->enter($__internal_b97af33c2692522e44512ea4ad69dbcc714b8ca733d66b1b6a8d24881465827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b97af33c2692522e44512ea4ad69dbcc714b8ca733d66b1b6a8d24881465827b->leave($__internal_b97af33c2692522e44512ea4ad69dbcc714b8ca733d66b1b6a8d24881465827b_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b4d7f4668264c8befba6b354136bc54a4ce4da4019f068857845d8b5487d1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4d7f4668264c8befba6b354136bc54a4ce4da4019f068857845d8b5487d1f8->enter($__internal_4b4d7f4668264c8befba6b354136bc54a4ce4da4019f068857845d8b5487d1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            
        ";
        
        $__internal_4b4d7f4668264c8befba6b354136bc54a4ce4da4019f068857845d8b5487d1f8->leave($__internal_4b4d7f4668264c8befba6b354136bc54a4ce4da4019f068857845d8b5487d1f8_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_e057ebfae613f0b93d986476fc9aa391f01f91e25b3794766b2306995628dded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e057ebfae613f0b93d986476fc9aa391f01f91e25b3794766b2306995628dded->enter($__internal_e057ebfae613f0b93d986476fc9aa391f01f91e25b3794766b2306995628dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_e057ebfae613f0b93d986476fc9aa391f01f91e25b3794766b2306995628dded->leave($__internal_e057ebfae613f0b93d986476fc9aa391f01f91e25b3794766b2306995628dded_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bf7097d636b8ab1d42ec9e3889139bc05f834cfe1971939e3ae7d4a76166749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf7097d636b8ab1d42ec9e3889139bc05f834cfe1971939e3ae7d4a76166749->enter($__internal_4bf7097d636b8ab1d42ec9e3889139bc05f834cfe1971939e3ae7d4a76166749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4bf7097d636b8ab1d42ec9e3889139bc05f834cfe1971939e3ae7d4a76166749->leave($__internal_4bf7097d636b8ab1d42ec9e3889139bc05f834cfe1971939e3ae7d4a76166749_prof);

    }

    // line 39
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_7e1da1f56ddf5895a71b44587a0a2e17712ea57f2d80c61e9a9c681f528d9450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1da1f56ddf5895a71b44587a0a2e17712ea57f2d80c61e9a9c681f528d9450->enter($__internal_7e1da1f56ddf5895a71b44587a0a2e17712ea57f2d80c61e9a9c681f528d9450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        
        $__internal_7e1da1f56ddf5895a71b44587a0a2e17712ea57f2d80c61e9a9c681f528d9450->leave($__internal_7e1da1f56ddf5895a71b44587a0a2e17712ea57f2d80c61e9a9c681f528d9450_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_59b4119ab5aca273bf524f750c5fa8d27421a982eb04f8b7ab8bbe500df39596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b4119ab5aca273bf524f750c5fa8d27421a982eb04f8b7ab8bbe500df39596->enter($__internal_59b4119ab5aca273bf524f750c5fa8d27421a982eb04f8b7ab8bbe500df39596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_59b4119ab5aca273bf524f750c5fa8d27421a982eb04f8b7ab8bbe500df39596->leave($__internal_59b4119ab5aca273bf524f750c5fa8d27421a982eb04f8b7ab8bbe500df39596_prof);

    }

    // line 44
    public function block_linea($context, array $blocks = array())
    {
        $__internal_ee5f6520043a45f3f3008fc9efcaea0e6eb0beb802d0dbb60331d5efd7271828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5f6520043a45f3f3008fc9efcaea0e6eb0beb802d0dbb60331d5efd7271828->enter($__internal_ee5f6520043a45f3f3008fc9efcaea0e6eb0beb802d0dbb60331d5efd7271828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_ee5f6520043a45f3f3008fc9efcaea0e6eb0beb802d0dbb60331d5efd7271828->leave($__internal_ee5f6520043a45f3f3008fc9efcaea0e6eb0beb802d0dbb60331d5efd7271828_prof);

    }

    // line 45
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_c045b254d77073d8c5df516124be7b162da98879e52cfc44c3fdbc5c2b057ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c045b254d77073d8c5df516124be7b162da98879e52cfc44c3fdbc5c2b057ec0->enter($__internal_c045b254d77073d8c5df516124be7b162da98879e52cfc44c3fdbc5c2b057ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_c045b254d77073d8c5df516124be7b162da98879e52cfc44c3fdbc5c2b057ec0->leave($__internal_c045b254d77073d8c5df516124be7b162da98879e52cfc44c3fdbc5c2b057ec0_prof);

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
