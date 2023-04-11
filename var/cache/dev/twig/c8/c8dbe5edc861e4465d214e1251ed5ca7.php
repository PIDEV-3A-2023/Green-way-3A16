<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b9d5eee1d542469374b3e8782f7c07a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Home | Green Way</title>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/price-range.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
</head><!--/head-->

<body>

\t<header id=\"header\"><!--header-->
\t\t<div class=\"header_top\"><!--header_top-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"contactinfo\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i> +216 00 123 456</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope\"></i> Esprit@esprit.tn</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"social-icons pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header_top-->
\t\t
\t\t<div class=\"header-middle\"><!--header-middle-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"logo pull-left\">
\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Canada</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">UK</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\tDOLLAR
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Canadian Dollar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Pound</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<div class=\"shop-menu pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-user\"></i> Account</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i> Wishlist</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\"><i class=\"fa fa-crosshairs\"></i> Checkout</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\"><i class=\"fa fa-shopping-cart\"></i> Cart</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"><i class=\"fa fa-lock\"></i> Login</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-middle-->
\t
\t\t<div class=\"header-bottom\"><!--header-bottom-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mainmenu pull-left\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav collapse navbar-collapse\">
\t\t\t\t\t\t\t\t<li><a href=\"index.html\" class=\"active\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Shop<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product-details");
        echo "\">Product Details</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\">Checkout</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">Cart</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a></li> 
                                    </ul>
                                </li> 
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Blog<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog List</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog-single");
        echo "\">Blog Single</a></li>
                                    </ul>
                                </li> 
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notFound");
        echo "\">404</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"search_box pull-right\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-bottom-->
\t</header><!--/header-->
\t";
        // line 146
        $this->displayBlock('body', $context, $blocks);
        // line 908
        echo "\t<footer id=\"footer\"><!--Footer-->
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"companyinfo\">
\t\t\t\t\t\t\t<h2><span>e</span>-shopper</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 923
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/iframe1.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 938
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/iframe2.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 953
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/iframe3.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 968
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/iframe4.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"address\">
\t\t\t\t\t\t\t<img src=\"";
        // line 981
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/map.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"footer-widget\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Service</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Online Help</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Order Status</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Change Location</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ’s</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Quock Shop</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">T-Shirt</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Mens</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Womens</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Gift Cards</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Shoes</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Policies</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms of Use</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Privecy Policy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Refund Policy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Billing System</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Ticket System</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>About Shopper</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Company Information</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Careers</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Store Location</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Affillate Program</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Copyright</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 col-sm-offset-1\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>About Shopper</h2>
\t\t\t\t\t\t\t<form action=\"#\" class=\"searchform\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Your email address\" />
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-arrow-circle-o-right\"></i></button>
\t\t\t\t\t\t\t\t<p>Get the most recent updates from <br />our site and be updated your self...</p>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p class=\"pull-left\">Copyright © 2023 Green Way All rights reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</footer><!--/Footer-->
\t

  
    <script src=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 1068
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 1069
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 1070
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/price-range.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 146
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "    

\t<section id=\"slider\"><!--slider-->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>Free E-Commerce Template</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/girl1.jpg"), "html", null, true);
        echo "\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/pricing.png"), "html", null, true);
        echo "\"  class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>100% Responsive Design</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/girl2.jpg"), "html", null, true);
        echo "\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/pricing.png"), "html", null, true);
        echo "\"  class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>Free Ecommerce Template</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/girl3.jpg"), "html", null, true);
        echo "\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/pricing.png"), "html", null, true);
        echo "\" class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t</section><!--/slider-->
\t
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<div class=\"left-sidebar\">
\t\t\t\t\t\t<h2>Category</h2>
\t\t\t\t\t\t<div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#sportswear\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tSportswear
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"sportswear\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nike </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Under Armour </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Adidas </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Puma</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">ASICS </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#mens\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tMens
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"mens\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fendi</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Guess</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Valentino</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dior</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Versace</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Armani</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Prada</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dolce and Gabbana</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Chanel</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Gucci</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#womens\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tWomens
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"womens\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fendi</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Guess</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Valentino</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dior</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Versace</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Kids</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Fashion</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Households</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Interiors</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Clothing</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Bags</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Shoes</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/category-products-->
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"brands_products\"><!--brands_products-->
\t\t\t\t\t\t\t<h2>Brands</h2>
\t\t\t\t\t\t\t<div class=\"brands-name\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(50)</span>Acne</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(56)</span>Grüne Erde</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(27)</span>Albiro</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(32)</span>Ronhill</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(5)</span>Oddmolly</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(9)</span>Boudestijn</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(4)</span>Rösch creative culture</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/brands_products-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"price-range\"><!--price-range-->
\t\t\t\t\t\t\t<h2>Price Range</h2>
\t\t\t\t\t\t\t<div class=\"well text-center\">
\t\t\t\t\t\t\t\t <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"sl2\" ><br />
\t\t\t\t\t\t\t\t <b class=\"pull-left\">\$ 0</b> <b class=\"pull-right\">\$ 600</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/price-range-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"shipping text-center\"><!--shipping-->
\t\t\t\t\t\t\t<img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/shipping.jpg "), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</div><!--/shipping-->
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-9 padding-right\">
\t\t\t\t\t<div class=\"features_items\"><!--features_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">Features Items</h2>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/product2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/product3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/product4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/new.png"), "html", null, true);
        echo "\" class=\"new\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/product5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<img src=\"images/home/sale.png\" class=\"new\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/product6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div><!--features_items-->
\t\t\t\t\t
\t\t\t\t\t<div class=\"category-tab\"><!--category-tab-->
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tshirt\" data-toggle=\"tab\">T-Shirt</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#blazers\" data-toggle=\"tab\">Blazers</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#sunglass\" data-toggle=\"tab\">Sunglass</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#kids\" data-toggle=\"tab\">Kids</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#poloshirt\" data-toggle=\"tab\">Polo shirt</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane fade active in\" id=\"tshirt\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery2.jpg "), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"blazers\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery4.jpg "), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery3.jpg "), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery2.jpg "), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"sunglass\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"kids\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"poloshirt\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 780
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/gallery1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/category-tab-->
\t\t\t\t\t
\t\t\t\t\t<div class=\"recommended_items\"><!--recommended_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">recommended items</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"recommended-item-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t<div class=\"item active\">\t
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/recommend1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/recommend2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 842
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/recommend3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">\t
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/recommend1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 870
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/recommend2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/home/recommend3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t <a class=\"left recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t  <a class=\"right recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"next\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t  </a>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/recommended_items-->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1342 => 883,  1326 => 870,  1310 => 857,  1292 => 842,  1276 => 829,  1260 => 816,  1234 => 793,  1218 => 780,  1202 => 767,  1186 => 754,  1167 => 738,  1151 => 725,  1135 => 712,  1119 => 699,  1100 => 683,  1084 => 670,  1068 => 657,  1052 => 644,  1033 => 628,  1017 => 615,  1001 => 602,  985 => 589,  966 => 573,  950 => 560,  934 => 547,  918 => 534,  875 => 494,  844 => 466,  827 => 452,  812 => 440,  784 => 415,  756 => 390,  728 => 365,  712 => 352,  552 => 195,  548 => 194,  533 => 182,  529 => 181,  515 => 170,  511 => 169,  487 => 147,  477 => 146,  464 => 1072,  460 => 1071,  456 => 1070,  452 => 1069,  448 => 1068,  444 => 1067,  355 => 981,  339 => 968,  321 => 953,  303 => 938,  285 => 923,  268 => 908,  266 => 146,  250 => 133,  246 => 132,  240 => 129,  236 => 128,  228 => 123,  224 => 122,  220 => 121,  216 => 120,  212 => 119,  184 => 94,  180 => 93,  176 => 92,  142 => 61,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Home | Green Way</title>
    <link href=\"{{ asset('front/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/css/prettyPhoto.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/css/price-range.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/css/animate.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('front/css/main.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('front/css/responsive.css') }}\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"{{ asset('front/images/ico/favicon.ico') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('front/images/ico/apple-touch-icon-144-precomposed.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('front/images/ico/apple-touch-icon-114-precomposed.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('front/images/ico/apple-touch-icon-72-precomposed.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('front/images/ico/apple-touch-icon-57-precomposed.png') }}\">
</head><!--/head-->

<body>

\t<header id=\"header\"><!--header-->
\t\t<div class=\"header_top\"><!--header_top-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"contactinfo\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i> +216 00 123 456</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope\"></i> Esprit@esprit.tn</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"social-icons pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header_top-->
\t\t
\t\t<div class=\"header-middle\"><!--header-middle-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"logo pull-left\">
\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"{{ asset('front/images/home/logo.png') }}\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Canada</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">UK</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\tDOLLAR
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Canadian Dollar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Pound</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<div class=\"shop-menu pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-user\"></i> Account</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-star\"></i> Wishlist</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('checkout') }}\"><i class=\"fa fa-crosshairs\"></i> Checkout</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('cart') }}\"><i class=\"fa fa-shopping-cart\"></i> Cart</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('login') }}\"><i class=\"fa fa-lock\"></i> Login</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-middle-->
\t
\t\t<div class=\"header-bottom\"><!--header-bottom-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mainmenu pull-left\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav collapse navbar-collapse\">
\t\t\t\t\t\t\t\t<li><a href=\"index.html\" class=\"active\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Shop<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"{{ path('product') }}\">Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('product-details') }}\">Product Details</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('checkout') }}\">Checkout</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('cart') }}\">Cart</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('login') }}\">Login</a></li> 
                                    </ul>
                                </li> 
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Blog<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"{{ path('blog') }}\">Blog List</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('blog-single') }}\">Blog Single</a></li>
                                    </ul>
                                </li> 
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('notFound') }}\">404</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('contact') }}\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"search_box pull-right\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-bottom-->
\t</header><!--/header-->
\t{% block body %}
    

\t<section id=\"slider\"><!--slider-->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>Free E-Commerce Template</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/girl1.jpg') }}\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/pricing.png') }}\"  class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>100% Responsive Design</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/girl2.jpg') }}\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/pricing.png') }}\"  class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>Free Ecommerce Template</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/girl3.jpg') }}\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/pricing.png') }}\" class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t</section><!--/slider-->
\t
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<div class=\"left-sidebar\">
\t\t\t\t\t\t<h2>Category</h2>
\t\t\t\t\t\t<div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#sportswear\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tSportswear
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"sportswear\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nike </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Under Armour </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Adidas </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Puma</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">ASICS </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#mens\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tMens
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"mens\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fendi</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Guess</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Valentino</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dior</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Versace</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Armani</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Prada</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dolce and Gabbana</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Chanel</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Gucci</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#womens\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tWomens
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"womens\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fendi</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Guess</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Valentino</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dior</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Versace</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Kids</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Fashion</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Households</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Interiors</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Clothing</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Bags</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Shoes</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/category-products-->
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"brands_products\"><!--brands_products-->
\t\t\t\t\t\t\t<h2>Brands</h2>
\t\t\t\t\t\t\t<div class=\"brands-name\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(50)</span>Acne</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(56)</span>Grüne Erde</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(27)</span>Albiro</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(32)</span>Ronhill</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(5)</span>Oddmolly</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(9)</span>Boudestijn</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(4)</span>Rösch creative culture</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/brands_products-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"price-range\"><!--price-range-->
\t\t\t\t\t\t\t<h2>Price Range</h2>
\t\t\t\t\t\t\t<div class=\"well text-center\">
\t\t\t\t\t\t\t\t <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"sl2\" ><br />
\t\t\t\t\t\t\t\t <b class=\"pull-left\">\$ 0</b> <b class=\"pull-right\">\$ 600</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/price-range-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"shipping text-center\"><!--shipping-->
\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/shipping.jpg ')}}\" alt=\"\" />
\t\t\t\t\t\t</div><!--/shipping-->
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-9 padding-right\">
\t\t\t\t\t<div class=\"features_items\"><!--features_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">Features Items</h2>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/product1.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/product2.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/product3.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/product4.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/new.png')}}\" class=\"new\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/product5.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<img src=\"images/home/sale.png\" class=\"new\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/product6.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div><!--features_items-->
\t\t\t\t\t
\t\t\t\t\t<div class=\"category-tab\"><!--category-tab-->
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tshirt\" data-toggle=\"tab\">T-Shirt</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#blazers\" data-toggle=\"tab\">Blazers</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#sunglass\" data-toggle=\"tab\">Sunglass</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#kids\" data-toggle=\"tab\">Kids</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#poloshirt\" data-toggle=\"tab\">Polo shirt</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane fade active in\" id=\"tshirt\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery1.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery2.jpg ')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery3.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery4.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"blazers\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery4.jpg ')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery3.jpg ')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery2.jpg ')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery1.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"sunglass\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery3.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery4.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery1.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery2.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"kids\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery1.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery2.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery3.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery4.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"poloshirt\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery2.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery4.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery3.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/gallery1.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/category-tab-->
\t\t\t\t\t
\t\t\t\t\t<div class=\"recommended_items\"><!--recommended_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">recommended items</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"recommended-item-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t<div class=\"item active\">\t
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/recommend1.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/recommend2.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/recommend3.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">\t
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/recommend1.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/recommend2.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/recommend3.jpg')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t <a class=\"left recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t  <a class=\"right recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"next\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t  </a>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/recommended_items-->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t{% endblock %}
\t<footer id=\"footer\"><!--Footer-->
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"companyinfo\">
\t\t\t\t\t\t\t<h2><span>e</span>-shopper</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/iframe1.png')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/iframe2.png')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/iframe3.png')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"video-gallery text-center\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-img\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/iframe4.png')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"overlay-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p>Circle of Hands</p>
\t\t\t\t\t\t\t\t<h2>24 DEC 2014</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"address\">
\t\t\t\t\t\t\t<img src=\"{{ asset('front/images/home/map.png') }}\" alt=\"\" />
\t\t\t\t\t\t\t<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"footer-widget\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Service</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Online Help</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Order Status</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Change Location</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ’s</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Quock Shop</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">T-Shirt</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Mens</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Womens</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Gift Cards</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Shoes</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>Policies</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms of Use</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Privecy Policy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Refund Policy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Billing System</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Ticket System</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>About Shopper</h2>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Company Information</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Careers</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Store Location</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Affillate Program</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Copyright</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 col-sm-offset-1\">
\t\t\t\t\t\t<div class=\"single-widget\">
\t\t\t\t\t\t\t<h2>About Shopper</h2>
\t\t\t\t\t\t\t<form action=\"#\" class=\"searchform\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Your email address\" />
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-arrow-circle-o-right\"></i></button>
\t\t\t\t\t\t\t\t<p>Get the most recent updates from <br />our site and be updated your self...</p>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p class=\"pull-left\">Copyright © 2023 Green Way All rights reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</footer><!--/Footer-->
\t

  
    <script src=\"{{ asset('front/js/jquery.js')}}\"></script>
\t<script src=\"{{ asset('front/js/bootstrap.min.js')}}\"></script>
\t<script src=\"{{ asset('front/js/jquery.scrollUp.min.js')}}\"></script>
\t<script src=\"{{ asset('front/js/price-range.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.prettyPhoto.js')}}\"></script>
    <script src=\"{{ asset('front/js/main.js')}}\"></script>
</body>
</html>", "base.html.twig", "C:\\Users\\21695\\Documents\\GitHub\\Green-way-3A16\\templates\\base.html.twig");
    }
}
