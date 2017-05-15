<?php

/* @HomeBlogDefault/layout.html.twig */
class __TwigTemplate_13d62d1886193fb66f7054fbd3d3622d37daa623e218be66a646269028b3d890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ok' => array($this, 'block_ok'),
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d8ae93476e13426d6eda8a731e2112a019d473d294a39c8b48ecb1a699f4684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8ae93476e13426d6eda8a731e2112a019d473d294a39c8b48ecb1a699f4684->enter($__internal_8d8ae93476e13426d6eda8a731e2112a019d473d294a39c8b48ecb1a699f4684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HomeBlogDefault/layout.html.twig"));

        $__internal_3c5faf97f71239d2e801b2f7a05320c0591f4f591d16f0070a4f111e7c85e779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5faf97f71239d2e801b2f7a05320c0591f4f591d16f0070a4f111e7c85e779->enter($__internal_3c5faf97f71239d2e801b2f7a05320c0591f4f591d16f0070a4f111e7c85e779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HomeBlogDefault/layout.html.twig"));

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
";
        // line 32
        $this->displayBlock('ok', $context, $blocks);
        // line 34
        echo "    <header class=\"style1 docHeader\">
        <nav id=\"sticktop\" class=\"navbar navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header clearfix\">
                    <a class=\"navbar-brand\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/logo-footer.png"), "html", null, true);
        echo "\" alt=\"/\"></a>
                </div>
                <div id=\"dl-menu\" class=\"xv-menuwrapper responsive-menu\">
                    <button class=\"dl-trigger\">Open Menu</button>

                    <ul class=\"dl-menu clearfix\">
                        <li class=\"active\"><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index.html"), "html", null, true);
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo "\">social</a></li>
                        <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo "\">business</a></li>
                        <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo ">Tech</a></li>
                        <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/archive.html"), "html", null, true);
        echo ">Sports</a></li>
                        <li class=\"parent\"><a href=\"#\">Pages</a>
                            <ul class=\"lg-submenu\">
                                <li class=\"parent\"><a href=\"#\">Home Pages <span class=\"badge badge-red\">Hot</span></a>
                                    <ul class=\"lg-submenu\">
                                        <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index.html"), "html", null, true);
        echo "\">Home</a></li>
                                        <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index2.html"), "html", null, true);
        echo "\">Home 2</a></li>
                                        <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index3.html"), "html", null, true);
        echo "\">Home 3</a></li>
                                        <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/index4.html"), "html", null, true);
        echo "\">Home Dark</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/404.html"), "html", null, true);
        echo "\">404 Error Page <span class=\"badge badge-green\">Bonus</span></a></li>
                                <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/page.html"), "html", null, true);
        echo "\">Page Template <span class=\"badge badge-yellow\">new</span></a></li>
                                <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/contact.html"), "html", null, true);
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/single.html"), "html", null, true);
        echo "\">Single Article</a></li>
                                <li><a href=\"";
        // line 63
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
    ";
        // line 93
        $this->displayBlock('slider', $context, $blocks);
        // line 96
        echo "    <!--=================================
    Page
    =================================-->
    <div class=\"mainWrapper\">
        <div class=\"container\">
            <div class=\"pageContentArea clearfix\">

                <main>
                    <h5 class=\"mb-20\">Recent Hot News..</h5>
                    <article>
                        <figure class=\"multiImages\">
                            <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img1.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img2.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h1><a href=\"#\">New record from Micheal Loudino</a></h1>
                            <time datetime=\"2015-01-31 08:30:45.687\">25 november, 2014</time>
                            <div class=\"specialContent\">
                                <div class=\"shareWrapper\">
                                    <ul class=\"social-list\">
                                        <li><a target=\"_blank\" class=\"icon-twitter twitter-bg btn-twitter\" href=\"https://twitter.com/intent/tweet?url=YOUR-URL\"></a>
                                        </li>
                                        <li><a target=\"_blank\" class=\"icon-facebook facebook-bg\" href=\"http://www.facebook.com/sharer/sharer.php?u=YOUR-URL\"></a></li>
                                        <li><a target=\"_blank\" class=\"icon-google-plus gplus-bg\" href=\"https://plus.google.com/share?url=YOUR-URL\"></a></li>
                                    </ul>
                                    <button><i class=\"icon-next-1-f\"></i></button>
                                </div>
                            </div>
                        </header>
                        <p>Integer tristique mi lobortis porttitor, aenean faucibus tincidunt
                            tristique curabitur mattis elit quis varius finibus. In sagittis urna necsufril,
                            fringilla semper, aenean scelerisque eleifend.</p>
                        <footer>
                            <a href=\"#\"><i class=\"icon-like2\"></i> 52</a>
                        </footer>
                    </article>

                    <article>
                        <figure>
                            <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img3.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h1><a href=\"#\">New record from Micheal Loudino</a></h1>
                            <time datetime=\"2015-01-31 08:30:45.687\">25 november, 2014</time>
                            <div class=\"specialContent\">
                                <div class=\"shareWrapper\">
                                    <ul class=\"social-list\">
                                        <li><a target=\"_blank\" class=\"icon-twitter twitter-bg btn-twitter\" href=\"https://twitter.com/intent/tweet?url=YOUR-URL\"></a>
                                        </li>
                                        <li><a target=\"_blank\" class=\"icon-facebook facebook-bg\" href=\"http://www.facebook.com/sharer/sharer.php?u=YOUR-URL\"></a></li>
                                        <li><a target=\"_blank\" class=\"icon-google-plus gplus-bg\" href=\"https://plus.google.com/share?url=YOUR-URL\"></a></li>
                                    </ul>
                                    <button><i class=\"icon-next-1-f\"></i></button>
                                </div>
                            </div>
                        </header>
                        <p>Integer tristique mi lobortis porttitor, aenean faucibus tincidunt
                            tristique curabitur mattis elit quis varius finibus. In sagittis urna necsufril,
                            fringilla semper, aenean scelerisque eleifend.</p>
                        <footer>
                            <a href=\"#\"><i class=\"icon-like2\"></i> 52</a>
                        </footer>
                    </article>

                    <article>
                        <figure>
                            <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img2.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h1><a href=\"#\">New record from Micheal Loudino</a></h1>
                            <time datetime=\"2015-01-31 08:30:45.687\">25 november, 2014</time>
                            <div class=\"specialContent\">
                                <div class=\"shareWrapper\">
                                    <ul class=\"social-list\">
                                        <li><a target=\"_blank\" class=\"icon-twitter twitter-bg btn-twitter\" href=\"https://twitter.com/intent/tweet?url=YOUR-URL\"></a>
                                        </li>
                                        <li><a target=\"_blank\" class=\"icon-facebook facebook-bg\" href=\"http://www.facebook.com/sharer/sharer.php?u=YOUR-URL\"></a></li>
                                        <li><a target=\"_blank\" class=\"icon-google-plus gplus-bg\" href=\"https://plus.google.com/share?url=YOUR-URL\"></a></li>
                                    </ul>
                                    <button><i class=\"icon-next-1-f\"></i></button>
                                </div>
                            </div>
                        </header>
                        <p>Integer tristique mi lobortis porttitor, aenean faucibus tincidunt
                            tristique curabitur mattis elit quis varius finibus. In sagittis urna necsufril,
                            fringilla semper, aenean scelerisque eleifend.</p>
                        <footer>
                            <a href=\"#\"><i class=\"icon-like2\"></i> 52</a>
                        </footer>
                    </article>

                </main><!--main content of current page-->

                <aside class=\"sidebar\">
                    <header>
                        <h3>What's New</h3>
                        <time datetime=\"2015-03-02\">2015-03-02</time>
                    </header>
                    <div class=\"widget widget_timeline\">
                        <div class=\"timeline-wrap\">
                            <article>
                                <figure>
                                    <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img6.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>


                            <article>

                                <div class=\"embed-responsive embed-responsive-16by9\">
                                    <iframe class=\"embed-responsive-item\" src=\"//player.vimeo.com/video/68382468\" ></iframe>
                                </div>

                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>

                            <article>
                                <figure class=\"multiImages\">
                                    <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img7.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                                    <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/2.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>

                            <article>
                                <figure>
                                    <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img8.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>

                            <article>
                                <figure>
                                    <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img9.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>

                            <article>
                                <figure>
                                    <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img1.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>
                            <article>
                                <figure>
                                    <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/3.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>
                            <a href=\"#\" class=\"loadTimeline\">Visit timeline</a>
                        </div><!--timeline-wrap-->
                    </div>
                </aside><!--sidebar-->

            </div><!--pageContentArea-->
        </div>
    </div>
    <div class=\"container\">
        <!--=================================
        Most visitied
        =================================-->
        <section class=\"most_visited\">
            <header><h2>Most viewed</h2></header>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4\">
                    <article>
                        <figure>
                            <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img5.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h3><a href=\"#\">Hot Air Ballon Ride </a></h3>
                            <time datetime=\"2015-01-26 08:30:45.687\">26 jan, 2015</time>
                        </header>
                        <div class=\"article_content\">
                            <p>Proin ornare ultrices ipsumelo tempor tempus nullam, scels erisquer  vivamus sagittis felis.</p>
                        </div>
                        <footer>
                            <a href=\"#\" class=\"readMore\">read</a>
                        </footer>
                    </article>
                </div><!--column-->

                <div class=\"col-xs-12 col-sm-4\">
                    <article>
                        <figure>
                            <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img4.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h3><a href=\"#\">Hot Air Ballon Ride </a></h3>
                            <time datetime=\"2015-01-26 08:30:45.687\">26 jan, 2015</time>
                        </header>
                        <div class=\"article_content\">
                            <p>Proin ornare ultrices ipsumelo tempor tempus nullam, scels erisquer  vivamus sagittis felis.</p>
                        </div>
                        <footer>
                            <a href=\"#\" class=\"readMore\">read</a>
                        </footer>
                    </article>
                </div><!--column-->

                <div class=\"col-xs-12 col-sm-4\">
                    <article>
                        <figure>
                            <img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img2.jpg"), "html", null, true);
        echo "\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h3><a href=\"#\">Hot Air Ballon Ride </a></h3>
                            <time datetime=\"2015-01-26 08:30:45.687\">26 jan, 2015</time>
                        </header>
                        <div class=\"article_content\">
                            <p>Proin ornare ultrices ipsumelo tempor tempus nullam, scels erisquer  vivamus sagittis felis.</p>
                        </div>
                        <footer>
                            <a href=\"#\" class=\"readMore\">read</a>
                        </footer>
                    </article>
                </div><!--column-->
            </div><!--row-->
            <footer>
                <a class=\"viewAllPopular btn\" href=\"#\">More</a>
            </footer>
        </section>

    </div><!--container-->
    <!--=================================
    footer
    =================================-->
    <footer>
        <div class=\"container\">
            <div class=\"footer_inner\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-5 col-lg-4\">
                        <a href=\"#\" class=\"logo-footer\"><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/logo-footer.png"), "html", null, true);
        echo "\" alt=\"\" width=\"149\" height=\"25\" /></a>
                        <div class=\"widget widget_text\">
                            <p>Phasellus odio arcu semper non est atero, elementum  metus maecenas posuere mauris eros,
                                sed tempus eros tempor venullam interdum lorem sitr
                                donec atr lacus in nisi blandit venenatis quis id exodus, Phasellus pharetra elmig.</p>
                        </div>
                    </div>
                </div><!--row-->
                <div class=\"widget widget_menu\">
                    <nav class=\"sitemap\">
                        <ul>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Contacts</a></li>
                            <li><a href=\"#\">Editorial Staff</a></li>
                            <li><a href=\"#\">Advertising</a></li>
                        </ul>
                    </nav>
                </div>

                <div class=\"widget widget_newsletter\">
                    <form class=\"form_newsletter\">
                        <label for=\"subEmail\"><i class=\"icon-mail2\"></i> get our last articles</label>
                        <input id=\"subEmail\" type=\"email\" required=\"required\"/>
                        <button>subscribe</button>
                    </form>
                </div>
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
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/jquery.dlmenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/lib/jquery.inview.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/js/app/main.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
        
        $__internal_8d8ae93476e13426d6eda8a731e2112a019d473d294a39c8b48ecb1a699f4684->leave($__internal_8d8ae93476e13426d6eda8a731e2112a019d473d294a39c8b48ecb1a699f4684_prof);

        
        $__internal_3c5faf97f71239d2e801b2f7a05320c0591f4f591d16f0070a4f111e7c85e779->leave($__internal_3c5faf97f71239d2e801b2f7a05320c0591f4f591d16f0070a4f111e7c85e779_prof);

    }

    // line 32
    public function block_ok($context, array $blocks = array())
    {
        $__internal_3e108c0428f5d09c419553520d63d28869324bd27e6ec78e73d5617c44f49f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e108c0428f5d09c419553520d63d28869324bd27e6ec78e73d5617c44f49f61->enter($__internal_3e108c0428f5d09c419553520d63d28869324bd27e6ec78e73d5617c44f49f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ok"));

        $__internal_744ef81907e789e39908cc5af1e118136eec10bb0310582047e7c312caf23530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744ef81907e789e39908cc5af1e118136eec10bb0310582047e7c312caf23530->enter($__internal_744ef81907e789e39908cc5af1e118136eec10bb0310582047e7c312caf23530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ok"));

        // line 33
        echo "    ";
        
        $__internal_744ef81907e789e39908cc5af1e118136eec10bb0310582047e7c312caf23530->leave($__internal_744ef81907e789e39908cc5af1e118136eec10bb0310582047e7c312caf23530_prof);

        
        $__internal_3e108c0428f5d09c419553520d63d28869324bd27e6ec78e73d5617c44f49f61->leave($__internal_3e108c0428f5d09c419553520d63d28869324bd27e6ec78e73d5617c44f49f61_prof);

    }

    // line 93
    public function block_slider($context, array $blocks = array())
    {
        $__internal_a44561037abb705de505eb5a50585f85b46e2f17233a38d14961fd972020dd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44561037abb705de505eb5a50585f85b46e2f17233a38d14961fd972020dd4e->enter($__internal_a44561037abb705de505eb5a50585f85b46e2f17233a38d14961fd972020dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_292ae0289cc5a56d1b036322778aa1e53c7fa155aa1da495d0d0c04c580a4cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292ae0289cc5a56d1b036322778aa1e53c7fa155aa1da495d0d0c04c580a4cfc->enter($__internal_292ae0289cc5a56d1b036322778aa1e53c7fa155aa1da495d0d0c04c580a4cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 94
        echo "
    ";
        
        $__internal_292ae0289cc5a56d1b036322778aa1e53c7fa155aa1da495d0d0c04c580a4cfc->leave($__internal_292ae0289cc5a56d1b036322778aa1e53c7fa155aa1da495d0d0c04c580a4cfc_prof);

        
        $__internal_a44561037abb705de505eb5a50585f85b46e2f17233a38d14961fd972020dd4e->leave($__internal_a44561037abb705de505eb5a50585f85b46e2f17233a38d14961fd972020dd4e_prof);

    }

    public function getTemplateName()
    {
        return "@HomeBlogDefault/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 94,  599 => 93,  589 => 33,  580 => 32,  564 => 405,  560 => 404,  556 => 403,  552 => 402,  548 => 401,  544 => 400,  499 => 358,  467 => 329,  446 => 311,  425 => 293,  396 => 267,  383 => 257,  369 => 246,  355 => 235,  341 => 224,  337 => 223,  309 => 198,  270 => 162,  240 => 135,  210 => 108,  206 => 107,  193 => 96,  191 => 93,  158 => 63,  154 => 62,  150 => 61,  146 => 60,  142 => 59,  136 => 56,  132 => 55,  128 => 54,  124 => 53,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  100 => 44,  89 => 38,  83 => 34,  81 => 32,  70 => 24,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  44 => 16,  27 => 1,);
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
{% block ok %}
    {% endblock %}
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
    {% block slider %}

    {% endblock %}
    <!--=================================
    Page
    =================================-->
    <div class=\"mainWrapper\">
        <div class=\"container\">
            <div class=\"pageContentArea clearfix\">

                <main>
                    <h5 class=\"mb-20\">Recent Hot News..</h5>
                    <article>
                        <figure class=\"multiImages\">
                            <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img1.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                            <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img2.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h1><a href=\"#\">New record from Micheal Loudino</a></h1>
                            <time datetime=\"2015-01-31 08:30:45.687\">25 november, 2014</time>
                            <div class=\"specialContent\">
                                <div class=\"shareWrapper\">
                                    <ul class=\"social-list\">
                                        <li><a target=\"_blank\" class=\"icon-twitter twitter-bg btn-twitter\" href=\"https://twitter.com/intent/tweet?url=YOUR-URL\"></a>
                                        </li>
                                        <li><a target=\"_blank\" class=\"icon-facebook facebook-bg\" href=\"http://www.facebook.com/sharer/sharer.php?u=YOUR-URL\"></a></li>
                                        <li><a target=\"_blank\" class=\"icon-google-plus gplus-bg\" href=\"https://plus.google.com/share?url=YOUR-URL\"></a></li>
                                    </ul>
                                    <button><i class=\"icon-next-1-f\"></i></button>
                                </div>
                            </div>
                        </header>
                        <p>Integer tristique mi lobortis porttitor, aenean faucibus tincidunt
                            tristique curabitur mattis elit quis varius finibus. In sagittis urna necsufril,
                            fringilla semper, aenean scelerisque eleifend.</p>
                        <footer>
                            <a href=\"#\"><i class=\"icon-like2\"></i> 52</a>
                        </footer>
                    </article>

                    <article>
                        <figure>
                            <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img3.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h1><a href=\"#\">New record from Micheal Loudino</a></h1>
                            <time datetime=\"2015-01-31 08:30:45.687\">25 november, 2014</time>
                            <div class=\"specialContent\">
                                <div class=\"shareWrapper\">
                                    <ul class=\"social-list\">
                                        <li><a target=\"_blank\" class=\"icon-twitter twitter-bg btn-twitter\" href=\"https://twitter.com/intent/tweet?url=YOUR-URL\"></a>
                                        </li>
                                        <li><a target=\"_blank\" class=\"icon-facebook facebook-bg\" href=\"http://www.facebook.com/sharer/sharer.php?u=YOUR-URL\"></a></li>
                                        <li><a target=\"_blank\" class=\"icon-google-plus gplus-bg\" href=\"https://plus.google.com/share?url=YOUR-URL\"></a></li>
                                    </ul>
                                    <button><i class=\"icon-next-1-f\"></i></button>
                                </div>
                            </div>
                        </header>
                        <p>Integer tristique mi lobortis porttitor, aenean faucibus tincidunt
                            tristique curabitur mattis elit quis varius finibus. In sagittis urna necsufril,
                            fringilla semper, aenean scelerisque eleifend.</p>
                        <footer>
                            <a href=\"#\"><i class=\"icon-like2\"></i> 52</a>
                        </footer>
                    </article>

                    <article>
                        <figure>
                            <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img2.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h1><a href=\"#\">New record from Micheal Loudino</a></h1>
                            <time datetime=\"2015-01-31 08:30:45.687\">25 november, 2014</time>
                            <div class=\"specialContent\">
                                <div class=\"shareWrapper\">
                                    <ul class=\"social-list\">
                                        <li><a target=\"_blank\" class=\"icon-twitter twitter-bg btn-twitter\" href=\"https://twitter.com/intent/tweet?url=YOUR-URL\"></a>
                                        </li>
                                        <li><a target=\"_blank\" class=\"icon-facebook facebook-bg\" href=\"http://www.facebook.com/sharer/sharer.php?u=YOUR-URL\"></a></li>
                                        <li><a target=\"_blank\" class=\"icon-google-plus gplus-bg\" href=\"https://plus.google.com/share?url=YOUR-URL\"></a></li>
                                    </ul>
                                    <button><i class=\"icon-next-1-f\"></i></button>
                                </div>
                            </div>
                        </header>
                        <p>Integer tristique mi lobortis porttitor, aenean faucibus tincidunt
                            tristique curabitur mattis elit quis varius finibus. In sagittis urna necsufril,
                            fringilla semper, aenean scelerisque eleifend.</p>
                        <footer>
                            <a href=\"#\"><i class=\"icon-like2\"></i> 52</a>
                        </footer>
                    </article>

                </main><!--main content of current page-->

                <aside class=\"sidebar\">
                    <header>
                        <h3>What's New</h3>
                        <time datetime=\"2015-03-02\">2015-03-02</time>
                    </header>
                    <div class=\"widget widget_timeline\">
                        <div class=\"timeline-wrap\">
                            <article>
                                <figure>
                                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img6.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>


                            <article>

                                <div class=\"embed-responsive embed-responsive-16by9\">
                                    <iframe class=\"embed-responsive-item\" src=\"//player.vimeo.com/video/68382468\" ></iframe>
                                </div>

                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>

                            <article>
                                <figure class=\"multiImages\">
                                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img7.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/2.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>

                            <article>
                                <figure>
                                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img8.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>

                            <article>
                                <figure>
                                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img9.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>

                            <article>
                                <figure>
                                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img1.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>
                            <article>
                                <figure>
                                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/3.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                                </figure>
                                <header>
                                    <h3><a href=\"#\">Winter is here!</a></h3>
                                    <time datetime=\"2015-01-31 08:30:45.687\">26 jan</time>
                                </header>
                                <p>Pellentesque nibh enim sagittis velurisu lorem mollis ultrices lacus.</p>
                            </article>
                            <a href=\"#\" class=\"loadTimeline\">Visit timeline</a>
                        </div><!--timeline-wrap-->
                    </div>
                </aside><!--sidebar-->

            </div><!--pageContentArea-->
        </div>
    </div>
    <div class=\"container\">
        <!--=================================
        Most visitied
        =================================-->
        <section class=\"most_visited\">
            <header><h2>Most viewed</h2></header>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4\">
                    <article>
                        <figure>
                            <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img5.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h3><a href=\"#\">Hot Air Ballon Ride </a></h3>
                            <time datetime=\"2015-01-26 08:30:45.687\">26 jan, 2015</time>
                        </header>
                        <div class=\"article_content\">
                            <p>Proin ornare ultrices ipsumelo tempor tempus nullam, scels erisquer  vivamus sagittis felis.</p>
                        </div>
                        <footer>
                            <a href=\"#\" class=\"readMore\">read</a>
                        </footer>
                    </article>
                </div><!--column-->

                <div class=\"col-xs-12 col-sm-4\">
                    <article>
                        <figure>
                            <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img4.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h3><a href=\"#\">Hot Air Ballon Ride </a></h3>
                            <time datetime=\"2015-01-26 08:30:45.687\">26 jan, 2015</time>
                        </header>
                        <div class=\"article_content\">
                            <p>Proin ornare ultrices ipsumelo tempor tempus nullam, scels erisquer  vivamus sagittis felis.</p>
                        </div>
                        <footer>
                            <a href=\"#\" class=\"readMore\">read</a>
                        </footer>
                    </article>
                </div><!--column-->

                <div class=\"col-xs-12 col-sm-4\">
                    <article>
                        <figure>
                            <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img2.jpg\") }}\" width=\"1200\" height=\"570\" alt=\"\"/>
                        </figure>
                        <header>
                            <h3><a href=\"#\">Hot Air Ballon Ride </a></h3>
                            <time datetime=\"2015-01-26 08:30:45.687\">26 jan, 2015</time>
                        </header>
                        <div class=\"article_content\">
                            <p>Proin ornare ultrices ipsumelo tempor tempus nullam, scels erisquer  vivamus sagittis felis.</p>
                        </div>
                        <footer>
                            <a href=\"#\" class=\"readMore\">read</a>
                        </footer>
                    </article>
                </div><!--column-->
            </div><!--row-->
            <footer>
                <a class=\"viewAllPopular btn\" href=\"#\">More</a>
            </footer>
        </section>

    </div><!--container-->
    <!--=================================
    footer
    =================================-->
    <footer>
        <div class=\"container\">
            <div class=\"footer_inner\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-5 col-lg-4\">
                        <a href=\"#\" class=\"logo-footer\"><img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/logo-footer.png\") }}\" alt=\"\" width=\"149\" height=\"25\" /></a>
                        <div class=\"widget widget_text\">
                            <p>Phasellus odio arcu semper non est atero, elementum  metus maecenas posuere mauris eros,
                                sed tempus eros tempor venullam interdum lorem sitr
                                donec atr lacus in nisi blandit venenatis quis id exodus, Phasellus pharetra elmig.</p>
                        </div>
                    </div>
                </div><!--row-->
                <div class=\"widget widget_menu\">
                    <nav class=\"sitemap\">
                        <ul>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Contacts</a></li>
                            <li><a href=\"#\">Editorial Staff</a></li>
                            <li><a href=\"#\">Advertising</a></li>
                        </ul>
                    </nav>
                </div>

                <div class=\"widget widget_newsletter\">
                    <form class=\"form_newsletter\">
                        <label for=\"subEmail\"><i class=\"icon-mail2\"></i> get our last articles</label>
                        <input id=\"subEmail\" type=\"email\" required=\"required\"/>
                        <button>subscribe</button>
                    </form>
                </div>
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
", "@HomeBlogDefault/layout.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\src\\HomeBlog\\DefaultBundle\\Resources\\views\\layout.html.twig");
    }
}
