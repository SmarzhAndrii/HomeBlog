<?php

/* @HomeBlogAdmin/layout.html.twig */
class __TwigTemplate_4672dd52a0e9054de4ff3fd2660790a363e0cca3012660435b351d72d76599fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'edit' => array($this, 'block_edit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1eff9b18507ef2fc6d8b9dff38d4c698966578d1bef6a924d42d1fc4b0e1756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1eff9b18507ef2fc6d8b9dff38d4c698966578d1bef6a924d42d1fc4b0e1756->enter($__internal_d1eff9b18507ef2fc6d8b9dff38d4c698966578d1bef6a924d42d1fc4b0e1756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HomeBlogAdmin/layout.html.twig"));

        $__internal_a33f0adf1659aa80b8e77711819858d4b04f28ac5de267cc1f5abf8de7321112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33f0adf1659aa80b8e77711819858d4b04f28ac5de267cc1f5abf8de7321112->enter($__internal_a33f0adf1659aa80b8e77711819858d4b04f28ac5de267cc1f5abf8de7321112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HomeBlogAdmin/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html class=\"no-js\">

<head>
    <meta charset=\"utf-8\">
    <title>A.Smarzh - Home</title>
    <!--=================================
    Google Fonts
    =================================-->
    <link href=\"http://fonts.googleapis.com/css?family=Ubuntu:400,300\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Questrial\" rel=\"stylesheet\" type=\"text/css\">
    <!--=================================
    Style Sheets
    =================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/css/pixeden-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/css/animations.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/css/dl-menu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/css/main.css"), "html", null, true);
        echo "\">


    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body class=\"dark-skin\">

<div class=\"xv-overFlow\">
    <!--========================================
    Body Content
    ===========================================-->

    <header class=\"style1 docHeader\">
        <nav id=\"sticktop\" class=\"navbar navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header clearfix\">
                    <a class=\"navbar-brand\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/logo-footer.png"), "html", null, true);
        echo "\" alt=\"/\"></a>
                </div>
                <div id=\"dl-menu\" class=\"xv-menuwrapper responsive-menu\">
                    <button class=\"dl-trigger\">Open Menu</button>

                    <ul class=\"dl-menu clearfix\">
                        <li class=\"active\"><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index.html"), "html", null, true);
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo "\">social</a></li>
                        <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo "\">business</a></li>
                        <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo ">Tech</a></li>
                        <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo ">Sports</a></li>
                        <li class=\"parent\"><a href=\"#\">Pages</a>
                            <ul class=\"lg-submenu\">
                                <li class=\"parent\"><a href=\"#\">Home Pages <span class=\"badge badge-red\">Hot</span></a>
                                    <ul class=\"lg-submenu\">
                                        <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index.html"), "html", null, true);
        echo "\">Home</a></li>
                                        <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index2.html"), "html", null, true);
        echo "\">Home 2</a></li>
                                        <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index3.html"), "html", null, true);
        echo "\">Home 3</a></li>
                                        <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index4.html"), "html", null, true);
        echo "\">Home Dark</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/404.html"), "html", null, true);
        echo "\">404 Error Page <span class=\"badge badge-green\">Bonus</span></a></li>
                                <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/page.html"), "html", null, true);
        echo "\">Page Template <span class=\"badge badge-yellow\">new</span></a></li>
                                <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/contact.html"), "html", null, true);
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/single.html"), "html", null, true);
        echo "\">Single Article</a></li>
                                <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo "\">Archive Page</a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!-- /dl-menuwrapper/xv-menuwrapper  -->
            </div>
        </nav>

    </header>

    <!--========================================================
    After header/ Search area
    ========================================================-->
    <div class=\"after-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <form class=\"search-form\">
                        <input type=\"text\"/>
                        <button type=\"submit\"><i class=\"icon-search\"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
    Slider Area
    =================================-->
    <!--=================================
    Page
    =================================-->
    <div class=\"mainWrapper\">
        <div class=\"container\">
            <div class=\"pageContentArea clearfix\">

                <main>
                    ";
        // line 100
        $this->displayBlock('edit', $context, $blocks);
        // line 102
        echo "
                </main><!--main content of current page-->

                <aside class=\"sidebar\">
                    <header>
                        <h3>Admin panel</h3>
                    </header>
                    <div class=\"widget widget_timeline\">
                        <div class=\"timeline-wrap\">
                            <ul class=\"dl-menu clearfix\">
                                <li class=\"parent\"><a href=\"#\">Статьи</a>
                                    <ul class=\"lg-submenu\">
                                                <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_blog_admin_article_add");
        echo "\">Добавить</a></li>
                                                <li><a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_blog_admin_article_list");
        echo "\">Список</a></li>
                                                <li><a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index3.html"), "html", null, true);
        echo "\">Список по категориям</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div><!--timeline-wrap-->
                    </div>
                </aside><!--sidebar-->

            </div><!--pageContentArea-->
        </div>
    </div>
    <!--=================================
    footer
    =================================-->
    <footer>
        <div class=\"container\">
            <div class=\"footer_inner\">
                <div class=\"copyrights\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-6\">
                            <div class=\"rights\">&copy; 2017 A.Smarzh - All right reserved.</div>
                        </div>
                    </div>
                </div><!--copyrights-->

            </div>
        </div>
    </footer>

</div>
<!--=================================
Script Source
=================================-->
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/jquery.dlmenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/jquery.inview.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/app/main.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
        
        $__internal_d1eff9b18507ef2fc6d8b9dff38d4c698966578d1bef6a924d42d1fc4b0e1756->leave($__internal_d1eff9b18507ef2fc6d8b9dff38d4c698966578d1bef6a924d42d1fc4b0e1756_prof);

        
        $__internal_a33f0adf1659aa80b8e77711819858d4b04f28ac5de267cc1f5abf8de7321112->leave($__internal_a33f0adf1659aa80b8e77711819858d4b04f28ac5de267cc1f5abf8de7321112_prof);

    }

    // line 100
    public function block_edit($context, array $blocks = array())
    {
        $__internal_8885ae773865592c8ef1dc1614a1fbb0b55e17342f989b6e8a9fd416bfdf9200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8885ae773865592c8ef1dc1614a1fbb0b55e17342f989b6e8a9fd416bfdf9200->enter($__internal_8885ae773865592c8ef1dc1614a1fbb0b55e17342f989b6e8a9fd416bfdf9200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        $__internal_3b23b3c0a51001dc36f0f8e482c167d4f0ceab57ff80271b107d18c8b3e4a508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b23b3c0a51001dc36f0f8e482c167d4f0ceab57ff80271b107d18c8b3e4a508->enter($__internal_3b23b3c0a51001dc36f0f8e482c167d4f0ceab57ff80271b107d18c8b3e4a508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        // line 101
        echo "                    ";
        
        $__internal_3b23b3c0a51001dc36f0f8e482c167d4f0ceab57ff80271b107d18c8b3e4a508->leave($__internal_3b23b3c0a51001dc36f0f8e482c167d4f0ceab57ff80271b107d18c8b3e4a508_prof);

        
        $__internal_8885ae773865592c8ef1dc1614a1fbb0b55e17342f989b6e8a9fd416bfdf9200->leave($__internal_8885ae773865592c8ef1dc1614a1fbb0b55e17342f989b6e8a9fd416bfdf9200_prof);

    }

    public function getTemplateName()
    {
        return "@HomeBlogAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 101,  292 => 100,  276 => 155,  272 => 154,  268 => 153,  264 => 152,  260 => 151,  256 => 150,  219 => 116,  215 => 115,  211 => 114,  197 => 102,  195 => 100,  154 => 62,  150 => 61,  146 => 60,  142 => 59,  138 => 58,  132 => 55,  128 => 54,  124 => 53,  120 => 52,  112 => 47,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  85 => 37,  69 => 24,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  47 => 17,  43 => 16,  26 => 1,);
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

<html class=\"no-js\">

<head>
    <meta charset=\"utf-8\">
    <title>A.Smarzh - Home</title>
    <!--=================================
    Google Fonts
    =================================-->
    <link href=\"http://fonts.googleapis.com/css?family=Ubuntu:400,300\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Questrial\" rel=\"stylesheet\" type=\"text/css\">
    <!--=================================
    Style Sheets
    =================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/homeblogdefault/assets/css/bootstrap.min.css\") }}\" >
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/homeblogdefault/assets/css/pixeden-icons.css\") }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/homeblogdefault/assets/css/owl.carousel.css\") }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/homeblogdefault/assets/css/animations.css\") }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"bundles/homeblogdefault/assets/css/dl-menu.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/homeblogdefault/assets/css/main.css\") }}\">


    <script src=\"{{ asset(\"bundles/homeblogdefault/assets/js/lib/modernizr-2.6.2-respond-1.1.0.min.js\") }}\"></script>
</head>
<body class=\"dark-skin\">

<div class=\"xv-overFlow\">
    <!--========================================
    Body Content
    ===========================================-->

    <header class=\"style1 docHeader\">
        <nav id=\"sticktop\" class=\"navbar navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header clearfix\">
                    <a class=\"navbar-brand\" href=\"{{ asset(\"bundles/homeblogdefault/index.html\") }}\"><img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/logo-footer.png\") }}\" alt=\"/\"></a>
                </div>
                <div id=\"dl-menu\" class=\"xv-menuwrapper responsive-menu\">
                    <button class=\"dl-trigger\">Open Menu</button>

                    <ul class=\"dl-menu clearfix\">
                        <li class=\"active\"><a href=\"{{ asset(\"bundles/homeblogdefault/index.html\") }}\">Home</a></li>
                        <li><a href=\"{{ asset(\"bundles/homeblogdefault/archive.html\") }}\">social</a></li>
                        <li><a href=\"{{ asset(\"bundles/homeblogdefault/archive.html\") }}\">business</a></li>
                        <li><a href=\"{{ asset(\"bundles/homeblogdefault/archive.html\") }}>Tech</a></li>
                        <li><a href=\"{{ asset(\"bundles/homeblogdefault/archive.html\") }}>Sports</a></li>
                        <li class=\"parent\"><a href=\"#\">Pages</a>
                            <ul class=\"lg-submenu\">
                                <li class=\"parent\"><a href=\"#\">Home Pages <span class=\"badge badge-red\">Hot</span></a>
                                    <ul class=\"lg-submenu\">
                                        <li><a href=\"{{ asset(\"bundles/homeblogdefault/index.html\") }}\">Home</a></li>
                                        <li><a href=\"{{ asset(\"bundles/homeblogdefault/index2.html\") }}\">Home 2</a></li>
                                        <li><a href=\"{{ asset(\"bundles/homeblogdefault/index3.html\") }}\">Home 3</a></li>
                                        <li><a href=\"{{ asset(\"bundles/homeblogdefault/index4.html\") }}\">Home Dark</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"{{ asset(\"bundles/homeblogdefault/404.html\") }}\">404 Error Page <span class=\"badge badge-green\">Bonus</span></a></li>
                                <li><a href=\"{{ asset(\"bundles/homeblogdefault/page.html\") }}\">Page Template <span class=\"badge badge-yellow\">new</span></a></li>
                                <li><a href=\"{{ asset(\"bundles/homeblogdefault/contact.html\") }}\">Contact</a></li>
                                <li><a href=\"{{ asset(\"bundles/homeblogdefault/single.html\") }}\">Single Article</a></li>
                                <li><a href=\"{{ asset(\"bundles/homeblogdefault/archive.html\") }}\">Archive Page</a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!-- /dl-menuwrapper/xv-menuwrapper  -->
            </div>
        </nav>

    </header>

    <!--========================================================
    After header/ Search area
    ========================================================-->
    <div class=\"after-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <form class=\"search-form\">
                        <input type=\"text\"/>
                        <button type=\"submit\"><i class=\"icon-search\"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
    Slider Area
    =================================-->
    <!--=================================
    Page
    =================================-->
    <div class=\"mainWrapper\">
        <div class=\"container\">
            <div class=\"pageContentArea clearfix\">

                <main>
                    {% block edit %}
                    {% endblock %}

                </main><!--main content of current page-->

                <aside class=\"sidebar\">
                    <header>
                        <h3>Admin panel</h3>
                    </header>
                    <div class=\"widget widget_timeline\">
                        <div class=\"timeline-wrap\">
                            <ul class=\"dl-menu clearfix\">
                                <li class=\"parent\"><a href=\"#\">Статьи</a>
                                    <ul class=\"lg-submenu\">
                                                <li><a href=\"{{ path(\"home_blog_admin_article_add\") }}\">Добавить</a></li>
                                                <li><a href=\"{{ path(\"home_blog_admin_article_list\") }}\">Список</a></li>
                                                <li><a href=\"{{ asset(\"bundles/homeblogdefault/index3.html\") }}\">Список по категориям</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div><!--timeline-wrap-->
                    </div>
                </aside><!--sidebar-->

            </div><!--pageContentArea-->
        </div>
    </div>
    <!--=================================
    footer
    =================================-->
    <footer>
        <div class=\"container\">
            <div class=\"footer_inner\">
                <div class=\"copyrights\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-6\">
                            <div class=\"rights\">&copy; 2017 A.Smarzh - All right reserved.</div>
                        </div>
                    </div>
                </div><!--copyrights-->

            </div>
        </div>
    </footer>

</div>
<!--=================================
Script Source
=================================-->
<script src=\"{{ asset(\"bundles/homeblogdefault/assets/js/lib/jquery.js\") }}\"></script>
<script src=\"{{ asset(\"bundles/homeblogdefault/assets/js/lib/jquery.dlmenu.js\") }}\"></script>
<script src=\"{{ asset(\"bundles/homeblogdefault/assets/js/lib/owl.carousel.min.js\") }}\"></script>
<script src=\"{{ asset(\"bundles/homeblogdefault/assets/js/lib/jquery.sticky.js\") }}\"></script>
<script src=\"{{ asset(\"bundles/homeblogdefault/assets/js/lib/jquery.inview.js\") }}\"></script>
<script src=\"{{ asset(\"bundles/homeblogdefault/assets/js/app/main.js\") }}\"></script>


</body>
</html>
", "@HomeBlogAdmin/layout.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\src\\HomeBlog\\AdminBundle\\Resources\\views\\layout.html.twig");
    }
}
