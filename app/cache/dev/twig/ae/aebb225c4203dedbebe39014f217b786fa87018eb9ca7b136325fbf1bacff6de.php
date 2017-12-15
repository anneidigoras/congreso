<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_260434ddc24732c047643ec9aacf56490af543a8849c5aa9b2680113cd9fe008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d32e443f53959735c5ffa48f260dff490748b85f0034a37cc5c83b44f7eb0244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32e443f53959735c5ffa48f260dff490748b85f0034a37cc5c83b44f7eb0244->enter($__internal_d32e443f53959735c5ffa48f260dff490748b85f0034a37cc5c83b44f7eb0244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_d32e443f53959735c5ffa48f260dff490748b85f0034a37cc5c83b44f7eb0244->leave($__internal_d32e443f53959735c5ffa48f260dff490748b85f0034a37cc5c83b44f7eb0244_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3d9b8961dbca1706951d806c2adb1a4e5b953976b84dd0f2f842159c48644f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9b8961dbca1706951d806c2adb1a4e5b953976b84dd0f2f842159c48644f11->enter($__internal_3d9b8961dbca1706951d806c2adb1a4e5b953976b84dd0f2f842159c48644f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_3d9b8961dbca1706951d806c2adb1a4e5b953976b84dd0f2f842159c48644f11->leave($__internal_3d9b8961dbca1706951d806c2adb1a4e5b953976b84dd0f2f842159c48644f11_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_e8b0740843e55d29946954ba7709b964ee15692366863041b94fc888f5f606c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b0740843e55d29946954ba7709b964ee15692366863041b94fc888f5f606c9->enter($__internal_e8b0740843e55d29946954ba7709b964ee15692366863041b94fc888f5f606c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_e8b0740843e55d29946954ba7709b964ee15692366863041b94fc888f5f606c9->leave($__internal_e8b0740843e55d29946954ba7709b964ee15692366863041b94fc888f5f606c9_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_b1f15b3f1a24b322659e58e0dc809887281cb768575904d4293b63aacd3062e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f15b3f1a24b322659e58e0dc809887281cb768575904d4293b63aacd3062e4->enter($__internal_b1f15b3f1a24b322659e58e0dc809887281cb768575904d4293b63aacd3062e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_b1f15b3f1a24b322659e58e0dc809887281cb768575904d4293b63aacd3062e4->leave($__internal_b1f15b3f1a24b322659e58e0dc809887281cb768575904d4293b63aacd3062e4_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_dc674e04b28afd03d918f0796ceb451106187364deb155e953505d4aeed72ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc674e04b28afd03d918f0796ceb451106187364deb155e953505d4aeed72ef7->enter($__internal_dc674e04b28afd03d918f0796ceb451106187364deb155e953505d4aeed72ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_dc674e04b28afd03d918f0796ceb451106187364deb155e953505d4aeed72ef7->leave($__internal_dc674e04b28afd03d918f0796ceb451106187364deb155e953505d4aeed72ef7_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_a3cfcab67fbe1fb8bc41f41f5c4060e3679f237cc014f220e3c164a98a28a8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cfcab67fbe1fb8bc41f41f5c4060e3679f237cc014f220e3c164a98a28a8e5->enter($__internal_a3cfcab67fbe1fb8bc41f41f5c4060e3679f237cc014f220e3c164a98a28a8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_a3cfcab67fbe1fb8bc41f41f5c4060e3679f237cc014f220e3c164a98a28a8e5->leave($__internal_a3cfcab67fbe1fb8bc41f41f5c4060e3679f237cc014f220e3c164a98a28a8e5_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_725a42f7dc941856a205c01e3f3dde73e2b83e0b3a2ccae8b332aeaa0c656389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725a42f7dc941856a205c01e3f3dde73e2b83e0b3a2ccae8b332aeaa0c656389->enter($__internal_725a42f7dc941856a205c01e3f3dde73e2b83e0b3a2ccae8b332aeaa0c656389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_725a42f7dc941856a205c01e3f3dde73e2b83e0b3a2ccae8b332aeaa0c656389->leave($__internal_725a42f7dc941856a205c01e3f3dde73e2b83e0b3a2ccae8b332aeaa0c656389_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b29c616f56af862817097b21a6f6f00988d34bd38d14b79f6d9dd81af9b25d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29c616f56af862817097b21a6f6f00988d34bd38d14b79f6d9dd81af9b25d10->enter($__internal_b29c616f56af862817097b21a6f6f00988d34bd38d14b79f6d9dd81af9b25d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_b29c616f56af862817097b21a6f6f00988d34bd38d14b79f6d9dd81af9b25d10->leave($__internal_b29c616f56af862817097b21a6f6f00988d34bd38d14b79f6d9dd81af9b25d10_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_70701b1967776a9a7b0f8814242cafb65f79b047e1868a17438bb4826f59455b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70701b1967776a9a7b0f8814242cafb65f79b047e1868a17438bb4826f59455b->enter($__internal_70701b1967776a9a7b0f8814242cafb65f79b047e1868a17438bb4826f59455b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_70701b1967776a9a7b0f8814242cafb65f79b047e1868a17438bb4826f59455b->leave($__internal_70701b1967776a9a7b0f8814242cafb65f79b047e1868a17438bb4826f59455b_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_3bf56342946f24b581c43fac47db21a19d46cb00c105704ce803595198ed1cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf56342946f24b581c43fac47db21a19d46cb00c105704ce803595198ed1cdb->enter($__internal_3bf56342946f24b581c43fac47db21a19d46cb00c105704ce803595198ed1cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_3bf56342946f24b581c43fac47db21a19d46cb00c105704ce803595198ed1cdb->leave($__internal_3bf56342946f24b581c43fac47db21a19d46cb00c105704ce803595198ed1cdb_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_7e5d39e2c963cb5d3d08a4e139656f789a72009d65cdb8ce6993f7d9de85c75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5d39e2c963cb5d3d08a4e139656f789a72009d65cdb8ce6993f7d9de85c75d->enter($__internal_7e5d39e2c963cb5d3d08a4e139656f789a72009d65cdb8ce6993f7d9de85c75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_7e5d39e2c963cb5d3d08a4e139656f789a72009d65cdb8ce6993f7d9de85c75d->leave($__internal_7e5d39e2c963cb5d3d08a4e139656f789a72009d65cdb8ce6993f7d9de85c75d_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_10398aef05beb94334a5d62f8a24463e8a3e9eb0237cd1e8f5d3026d175c969c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10398aef05beb94334a5d62f8a24463e8a3e9eb0237cd1e8f5d3026d175c969c->enter($__internal_10398aef05beb94334a5d62f8a24463e8a3e9eb0237cd1e8f5d3026d175c969c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_10398aef05beb94334a5d62f8a24463e8a3e9eb0237cd1e8f5d3026d175c969c->leave($__internal_10398aef05beb94334a5d62f8a24463e8a3e9eb0237cd1e8f5d3026d175c969c_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_d8a9065f3cea1ad99165dfe7349ca0ea1af0f71923dcc721f530cb8eed4f1d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a9065f3cea1ad99165dfe7349ca0ea1af0f71923dcc721f530cb8eed4f1d1c->enter($__internal_d8a9065f3cea1ad99165dfe7349ca0ea1af0f71923dcc721f530cb8eed4f1d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_d8a9065f3cea1ad99165dfe7349ca0ea1af0f71923dcc721f530cb8eed4f1d1c->leave($__internal_d8a9065f3cea1ad99165dfe7349ca0ea1af0f71923dcc721f530cb8eed4f1d1c_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_a2797a22e99da3958e7b7285698b0c6362fa4258c8e5d120c6558a769b032cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2797a22e99da3958e7b7285698b0c6362fa4258c8e5d120c6558a769b032cab->enter($__internal_a2797a22e99da3958e7b7285698b0c6362fa4258c8e5d120c6558a769b032cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_a2797a22e99da3958e7b7285698b0c6362fa4258c8e5d120c6558a769b032cab->leave($__internal_a2797a22e99da3958e7b7285698b0c6362fa4258c8e5d120c6558a769b032cab_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_311aea3e8b63742305c9a2c0c98cbdb6b91f50773598ab50124a9e8e5198cc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311aea3e8b63742305c9a2c0c98cbdb6b91f50773598ab50124a9e8e5198cc52->enter($__internal_311aea3e8b63742305c9a2c0c98cbdb6b91f50773598ab50124a9e8e5198cc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_311aea3e8b63742305c9a2c0c98cbdb6b91f50773598ab50124a9e8e5198cc52->leave($__internal_311aea3e8b63742305c9a2c0c98cbdb6b91f50773598ab50124a9e8e5198cc52_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0942a0aaaa676ad0c153064af78a318ed32282e88ec7bc2f939d7c1a8ae380d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0942a0aaaa676ad0c153064af78a318ed32282e88ec7bc2f939d7c1a8ae380d9->enter($__internal_0942a0aaaa676ad0c153064af78a318ed32282e88ec7bc2f939d7c1a8ae380d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_0942a0aaaa676ad0c153064af78a318ed32282e88ec7bc2f939d7c1a8ae380d9->leave($__internal_0942a0aaaa676ad0c153064af78a318ed32282e88ec7bc2f939d7c1a8ae380d9_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_2e66c0dbee954cef41a96f0b5600ffde94e29d12f8fbec48a4fefa868eff1e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e66c0dbee954cef41a96f0b5600ffde94e29d12f8fbec48a4fefa868eff1e79->enter($__internal_2e66c0dbee954cef41a96f0b5600ffde94e29d12f8fbec48a4fefa868eff1e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_2e66c0dbee954cef41a96f0b5600ffde94e29d12f8fbec48a4fefa868eff1e79->leave($__internal_2e66c0dbee954cef41a96f0b5600ffde94e29d12f8fbec48a4fefa868eff1e79_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_70a7aae0da31401ec04ff2d231cf02a77fec06941bd6821897ba6abeb1fa5e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a7aae0da31401ec04ff2d231cf02a77fec06941bd6821897ba6abeb1fa5e89->enter($__internal_70a7aae0da31401ec04ff2d231cf02a77fec06941bd6821897ba6abeb1fa5e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_70a7aae0da31401ec04ff2d231cf02a77fec06941bd6821897ba6abeb1fa5e89->leave($__internal_70a7aae0da31401ec04ff2d231cf02a77fec06941bd6821897ba6abeb1fa5e89_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_a3e605597e37977c38e1ace0b600caa2d406c9c6a9055bad5d4ae0ca6743a6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e605597e37977c38e1ace0b600caa2d406c9c6a9055bad5d4ae0ca6743a6b4->enter($__internal_a3e605597e37977c38e1ace0b600caa2d406c9c6a9055bad5d4ae0ca6743a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_a3e605597e37977c38e1ace0b600caa2d406c9c6a9055bad5d4ae0ca6743a6b4->leave($__internal_a3e605597e37977c38e1ace0b600caa2d406c9c6a9055bad5d4ae0ca6743a6b4_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_82cdfad0510d3b145e5daab633979bee9b654dd0c93df7e4ec80c96b671a8c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cdfad0510d3b145e5daab633979bee9b654dd0c93df7e4ec80c96b671a8c07->enter($__internal_82cdfad0510d3b145e5daab633979bee9b654dd0c93df7e4ec80c96b671a8c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_82cdfad0510d3b145e5daab633979bee9b654dd0c93df7e4ec80c96b671a8c07->leave($__internal_82cdfad0510d3b145e5daab633979bee9b654dd0c93df7e4ec80c96b671a8c07_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_529ae59dd52c9639d08d7f713d60b5632bc34139fadcc6327052d90eb90dd998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529ae59dd52c9639d08d7f713d60b5632bc34139fadcc6327052d90eb90dd998->enter($__internal_529ae59dd52c9639d08d7f713d60b5632bc34139fadcc6327052d90eb90dd998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_529ae59dd52c9639d08d7f713d60b5632bc34139fadcc6327052d90eb90dd998->leave($__internal_529ae59dd52c9639d08d7f713d60b5632bc34139fadcc6327052d90eb90dd998_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_06115ad1ef37887b5839bed98d6bd92b06058de53c8ec51807dc19c02f8d9c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06115ad1ef37887b5839bed98d6bd92b06058de53c8ec51807dc19c02f8d9c99->enter($__internal_06115ad1ef37887b5839bed98d6bd92b06058de53c8ec51807dc19c02f8d9c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_06115ad1ef37887b5839bed98d6bd92b06058de53c8ec51807dc19c02f8d9c99->leave($__internal_06115ad1ef37887b5839bed98d6bd92b06058de53c8ec51807dc19c02f8d9c99_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_8a8d909eab7f49f76d5aa13b68213d21673e9a4a49ed106d5145d646e6f55356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8d909eab7f49f76d5aa13b68213d21673e9a4a49ed106d5145d646e6f55356->enter($__internal_8a8d909eab7f49f76d5aa13b68213d21673e9a4a49ed106d5145d646e6f55356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_8a8d909eab7f49f76d5aa13b68213d21673e9a4a49ed106d5145d646e6f55356->leave($__internal_8a8d909eab7f49f76d5aa13b68213d21673e9a4a49ed106d5145d646e6f55356_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_d8bf5033192cf96c9052e5f03789935f17fd508451b45d4e23a71933730addfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bf5033192cf96c9052e5f03789935f17fd508451b45d4e23a71933730addfa->enter($__internal_d8bf5033192cf96c9052e5f03789935f17fd508451b45d4e23a71933730addfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_d8bf5033192cf96c9052e5f03789935f17fd508451b45d4e23a71933730addfa->leave($__internal_d8bf5033192cf96c9052e5f03789935f17fd508451b45d4e23a71933730addfa_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 155,  626 => 148,  619 => 144,  612 => 140,  608 => 138,  605 => 137,  599 => 136,  579 => 134,  573 => 133,  563 => 129,  557 => 128,  549 => 149,  547 => 148,  542 => 145,  539 => 136,  537 => 133,  533 => 131,  530 => 128,  524 => 127,  516 => 120,  514 => 117,  512 => 116,  506 => 115,  498 => 122,  496 => 115,  493 => 114,  487 => 113,  475 => 97,  472 => 96,  466 => 95,  459 => 103,  454 => 100,  452 => 95,  443 => 89,  438 => 86,  433 => 84,  430 => 83,  428 => 82,  424 => 81,  421 => 80,  419 => 79,  413 => 77,  407 => 76,  398 => 104,  396 => 76,  392 => 74,  389 => 73,  383 => 72,  373 => 66,  364 => 65,  358 => 64,  349 => 107,  347 => 72,  342 => 69,  340 => 64,  333 => 60,  329 => 58,  323 => 57,  315 => 151,  313 => 127,  308 => 124,  306 => 113,  301 => 110,  299 => 57,  296 => 56,  290 => 55,  269 => 53,  261 => 160,  252 => 158,  248 => 157,  245 => 156,  243 => 155,  239 => 153,  237 => 55,  227 => 53,  221 => 52,  203 => 30,  197 => 29,  188 => 43,  185 => 42,  182 => 29,  176 => 28,  164 => 25,  161 => 24,  155 => 23,  145 => 15,  139 => 13,  133 => 12,  121 => 10,  113 => 162,  111 => 52,  107 => 50,  102 => 48,  97 => 47,  95 => 46,  92 => 45,  90 => 28,  87 => 27,  85 => 23,  82 => 22,  73 => 20,  69 => 19,  66 => 18,  64 => 12,  59 => 10,  48 => 2,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\layout.html.twig");
    }
}
