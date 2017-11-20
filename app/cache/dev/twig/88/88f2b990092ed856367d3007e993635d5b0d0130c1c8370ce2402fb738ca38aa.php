<?php

/* base.html.twig */
class __TwigTemplate_d882acde4f4b42cd8633763c1d480248c057bf1eb49dc40eeba39fe53f81788a extends Twig_Template
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
        $__internal_94d081c461ff9c744ba01b201d0badf0859342b65cde955afee2fda9014664e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d081c461ff9c744ba01b201d0badf0859342b65cde955afee2fda9014664e2->enter($__internal_94d081c461ff9c744ba01b201d0badf0859342b65cde955afee2fda9014664e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo " </a></h1>
            </div>
        </div>
    
    <!-- end #header -->
    <div id=\"page\">
        <div id=\"three-columns\">
        
        </div>
        <div id=\"content\">
            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        </div>
        <!-- end #content -->
        <div id=\"sidebar\">
            ";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 34
        echo "            ";
        $this->displayBlock('linea', $context, $blocks);
        // line 35
        echo "            ";
        $this->displayBlock('sidebar1', $context, $blocks);
        // line 36
        echo "
        </div>
        
        <!-- end #sidebar -->
        <div style=\"clear: both;\">&nbsp;</div>
    </div>
    <div class=\"container\"><img src=\"images/img03.png\" width=\"1000\" height=\"40\" alt=\"\" /></div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Untitled. All rights reserved. Design by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>. Photos by <a href=\"http://fotogrph.com/\">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>";
        
        $__internal_94d081c461ff9c744ba01b201d0badf0859342b65cde955afee2fda9014664e2->leave($__internal_94d081c461ff9c744ba01b201d0badf0859342b65cde955afee2fda9014664e2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7273ef99c4abb55bad8e3e5e2923c1d42e7d8554f979c3a4d71e67e9ccbbfa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7273ef99c4abb55bad8e3e5e2923c1d42e7d8554f979c3a4d71e67e9ccbbfa6f->enter($__internal_7273ef99c4abb55bad8e3e5e2923c1d42e7d8554f979c3a4d71e67e9ccbbfa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_7273ef99c4abb55bad8e3e5e2923c1d42e7d8554f979c3a4d71e67e9ccbbfa6f->leave($__internal_7273ef99c4abb55bad8e3e5e2923c1d42e7d8554f979c3a4d71e67e9ccbbfa6f_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8022c2b1feac6d6adf3f8ce1d80e61783125c534b489b816761aed277ae266d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8022c2b1feac6d6adf3f8ce1d80e61783125c534b489b816761aed277ae266d->enter($__internal_b8022c2b1feac6d6adf3f8ce1d80e61783125c534b489b816761aed277ae266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_b8022c2b1feac6d6adf3f8ce1d80e61783125c534b489b816761aed277ae266d->leave($__internal_b8022c2b1feac6d6adf3f8ce1d80e61783125c534b489b816761aed277ae266d_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fdfda003eda3bae2614fb117c35864fef5071dedba827551c84b5d07a01627c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdfda003eda3bae2614fb117c35864fef5071dedba827551c84b5d07a01627c->enter($__internal_5fdfda003eda3bae2614fb117c35864fef5071dedba827551c84b5d07a01627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5fdfda003eda3bae2614fb117c35864fef5071dedba827551c84b5d07a01627c->leave($__internal_5fdfda003eda3bae2614fb117c35864fef5071dedba827551c84b5d07a01627c_prof);

    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cafaeb8989e8f12aaff0c149d765ed7712da78c5c0f2d55c6c6a66f9dde9d900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafaeb8989e8f12aaff0c149d765ed7712da78c5c0f2d55c6c6a66f9dde9d900->enter($__internal_cafaeb8989e8f12aaff0c149d765ed7712da78c5c0f2d55c6c6a66f9dde9d900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_cafaeb8989e8f12aaff0c149d765ed7712da78c5c0f2d55c6c6a66f9dde9d900->leave($__internal_cafaeb8989e8f12aaff0c149d765ed7712da78c5c0f2d55c6c6a66f9dde9d900_prof);

    }

    // line 34
    public function block_linea($context, array $blocks = array())
    {
        $__internal_cd3868f1996e8abe7694154e58047d1b5fae0fb8319dd380d05e71d5a5f2edf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3868f1996e8abe7694154e58047d1b5fae0fb8319dd380d05e71d5a5f2edf4->enter($__internal_cd3868f1996e8abe7694154e58047d1b5fae0fb8319dd380d05e71d5a5f2edf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        
        $__internal_cd3868f1996e8abe7694154e58047d1b5fae0fb8319dd380d05e71d5a5f2edf4->leave($__internal_cd3868f1996e8abe7694154e58047d1b5fae0fb8319dd380d05e71d5a5f2edf4_prof);

    }

    // line 35
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_02e0d4c234af3f495001f17ea2af7da3a07e7604a1a7ad40bb4c6c86254aa227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e0d4c234af3f495001f17ea2af7da3a07e7604a1a7ad40bb4c6c86254aa227->enter($__internal_02e0d4c234af3f495001f17ea2af7da3a07e7604a1a7ad40bb4c6c86254aa227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        
        $__internal_02e0d4c234af3f495001f17ea2af7da3a07e7604a1a7ad40bb4c6c86254aa227->leave($__internal_02e0d4c234af3f495001f17ea2af7da3a07e7604a1a7ad40bb4c6c86254aa227_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  150 => 34,  139 => 33,  128 => 29,  116 => 19,  107 => 10,  102 => 7,  96 => 6,  74 => 36,  71 => 35,  68 => 34,  66 => 33,  61 => 30,  59 => 29,  46 => 19,  37 => 12,  35 => 6,  28 => 1,);
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
            <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>

        <div id=\"wrapper\">
    
        <div id=\"header\" class=\"container\">
            <div id=\"logo\">
                <h1><a href=\"#\">{% block title %} {% endblock %} </a></h1>
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
    <div class=\"container\"><img src=\"images/img03.png\" width=\"1000\" height=\"40\" alt=\"\" /></div>
    <!-- end #page --> 
</div>
<div id=\"footer-content\"></div>
<div id=\"footer\">
    <p>&copy; Untitled. All rights reserved. Design by <a href=\"http://templated.co\" rel=\"nofollow\">TEMPLATED</a>. Photos by <a href=\"http://fotogrph.com/\">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base.html.twig");
    }
}
