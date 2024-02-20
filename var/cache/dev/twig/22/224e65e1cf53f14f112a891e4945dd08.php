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

/* produit/home.html.twig */
class __TwigTemplate_add0e4af8b2e421a472ff70e9c161c8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "            <!--? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class=\"header-area\">
            <div class=\"main-header header-sticky\">
                <div class=\"container-fluid\">
                    <div class=\"menu-wrapper\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"home.html\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class=\"main-menu d-none d-lg-block\">
                            <nav>                                                
                                <ul id=\"navigation\">  
                                    <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Acceuil</a></li>
                                    <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\">Magasin</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homme");
        echo "\">Homme</a></li>
                                            <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_femme");
        echo "\">Femme</a></li>
                                            <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enfant");
        echo "\">Enfant</a></li>
                                        </ul> 
                                    </li>
                                    <li><a href=\"about.html\">A propos</a></li>
                                    <li class=\"hot\"><a href=\"#\">Nouveauté</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"evenement.html\">Nos Evenement</a></li>
                                            <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addproduit");
        echo "\">Nouveau Produit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">Forum</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"blog.html\">Forum</a></li>
                                            <li><a href=\"reclamation.html\">Reclamation</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Nous Contacter</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class=\"header-right\">
                            <ul>
                                <li>
                                    <div class=\"nav-search search-switch\">
                                        <span class=\"flaticon-search\"></span>
                                    </div>
                                </li>
                                <li> <a href=\"login.html\"><span class=\"flaticon-user\"></span></a></li>
                                <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\"><span class=\"flaticon-shopping-cart\"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start -->
        <div class=\"slider-area \">
            <div class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height d-flex align-items-center slide-bg\">
                    <div class=\"container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8\">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\" data-duration=\"2000ms\">Prêt à trier votre placard ?</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".7s\" data-duration=\"2000ms\">En un seul clic, WeTek vous offre la possibilité de revendre vos vêtements inutilisables et de récupérer de l'argent pour les réinvestir dans de nouveaux achats.</p>
                                    <!-- Hero-btn -->
                                    <div class=\"hero__btn\" data-animation=\"fadeInLeft\" data-delay=\".8s\" data-duration=\"2000ms\">
                                        <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addproduit");
        echo "\" class=\"btn hero-btn\">vendre vos produits</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block\">
                                <div class=\"hero__img\" data-animation=\"bounceIn\" data-delay=\".4s\">
                                    <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/hero/watch.png"), "html", null, true);
        echo "\" alt=\"\" class=\" heartbeat\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class=\"single-slider slider-height d-flex align-items-center slide-bg\">
                    <div class=\"container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8\">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\" data-duration=\"2000ms\">Prêt à trier votre placard ?</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".7s\" data-duration=\"2000ms\">En un seul clic, WeTek vous offre la possibilité de revendre vos vêtements inutilisables et de récupérer de l'argent pour les réinvestir dans de nouveaux achats.</p>
                                    <!-- Hero-btn -->
                                    <div class=\"hero__btn\" data-animation=\"fadeInLeft\" data-delay=\".8s\" data-duration=\"2000ms\">
                                        <a href=\"sellprod.html\" class=\"btn hero-btn\">vendre vos produits</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block\">
                                <div class=\"hero__img\" data-animation=\"bounceIn\" data-delay=\".4s\">
                                    <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/hero/watch.png"), "html", null, true);
        echo "\" alt=\"\" class=\" heartbeat\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
        <section class=\"new-product-area section-padding30\">
            <div class=\"container\">
                <!-- Section tittle -->
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"section-tittle mb-30 text-center\">
                            <h2>Notre Galerie</h2>
                        </div>
                    </div>
                </div>
        </section>
        <!--  New Product End -->
        <!--? Gallery Area Start -->
        <div class=\"gallery-area\">
            <div class=\"container-fluid p-0 fix\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-gallery mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery1.png);\"></div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-gallery mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery2.png);\"></div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-lg-12 col-md-6 col-sm-6\">
                                <div class=\"single-gallery mb-30\">
                                    <div class=\"gallery-img small-img\" style=\"background-image: url(assets/img/gallery/gallery3.png);\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-12 col-lg-12  col-md-6 col-sm-6\">
                                <div class=\"single-gallery mb-30\">
                                    <div class=\"gallery-img small-img\" style=\"background-image: url(assets/img/gallery/gallery4.png);\"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? Popular Items Start -->
        <div class=\"popular-items section-padding30\">
            <div class=\"container\">
                <!-- Section tittle -->
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8 col-md-10\">
                        <div class=\"section-tittle mb-70 text-center\">
                            <h2>Articles populaires</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-popular-items mb-50 text-center\">
                            <div class=\"popular-img\">
                                <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/popular4.png"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"img-cap\">
                                    <span>Ajouter au panier</span>
                                </div>
                                <div class=\"favorit-items\">
                                    <span class=\"flaticon-heart\"></span>
                                </div>
                            </div>
                            <div class=\"popular-caption\">
                                <h3><a href=\"product_details.html\">Bottines</a></h3>
                                <span>130 DT</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-popular-items mb-50 text-center\">
                            <div class=\"popular-img\">
                                <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/popular5.png"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"img-cap\">
                                    <span>Ajouter au panier</span>
                                </div>
                                <div class=\"favorit-items\">
                                    <span class=\"flaticon-heart\"></span>
                                </div>
                            </div>
                            <div class=\"popular-caption\">
                                <h3><a href=\"product_details.html\">Veste</a></h3>
                                <span>65 DT</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-popular-items mb-50 text-center\">
                            <div class=\"popular-img\">
                                <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/popular6.png"), "html", null, true);
        echo "\" alt=\"\">
                                <div class=\"img-cap\">
                                    <span>Ajouter au panier</span>
                                </div>
                                <div class=\"favorit-items\">
                                    <span class=\"flaticon-heart\"></span>
                                </div>
                            </div>
                            <div class=\"popular-caption\">
                                <h3><a href=\"product_details.html\">Bottes</a></h3>
                                <span>750 DT</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class=\"row justify-content-center\">
                    <div class=\"room-btn pt-70\">
                        <a href=\"shop.html\" class=\"btn hero-btn\">Afficher Plus de produit</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->
        <!--? Video Area Start -->
        <div class=\"video-area\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-12\">
                    <div class=\"video-wrap\">
                        <div class=\"play-btn \"><a class=\"popup-video\" href=\"https://www.youtube.com\"><i class=\"fas fa-play\"></i></a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Area End -->
        <!--? Watch Choice  Start-->
        <div class=\"watch-area  pt-70\">
  
        </div>
        <!-- Watch Choice  End-->
        <!--? Shop Method Start-->
        <div class=\"shop-method-area\">
            <div class=\"container\">
                <div class=\"method-wrapper\">
                    <div class=\"row d-flex justify-content-between\">
                        <div class=\"col-xl-4 col-lg-4 col-md-6\">
                            <div class=\"single-method mb-40\">
                                <i class=\"ti-package\"></i>
                                <h6>Livraison gratuite</h6>
                                <p>La livraison est offerte à partir de 200 DT d'achat.</p>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-4 col-md-6\">
                            <div class=\"single-method mb-40\">
                                <i class=\"ti-unlock\"></i>
                                <h6>Sécurité de paiement</h6>
                                <p>Vos paiements sont protégés grâce à des systèmes de paiement universels.</p>
                            </div>
                        </div> 
                        <div class=\"col-xl-4 col-lg-4 col-md-6\">
                            <div class=\"single-method mb-40\">
                                <i class=\"ti-reload\"></i>
                                <h6>Echange</h6>
                                <p>Vous avez la possibilité de modifier vos achats dans un délai de 30 jours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class=\"footer-area footer-padding\">
            <div class=\"container\">
                <div class=\"row d-flex justify-content-between\">
                    <div class=\"col-xl-3 col-lg-3 col-md-5 col-sm-6\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"single-footer-caption mb-30\">
                                <!-- logo -->
                                <div class=\"footer-logo\">
                                    <a href=\"index.html\"><img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo/logo2_footer.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"footer-tittle\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href=\"#\">About</a></li>
                                    <li><a href=\"#\"> Offers & Discounts</a></li>
                                    <li><a href=\"#\"> Get Coupon</a></li>
                                    <li><a href=\"#\">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-7\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href=\"#\">Woman Cloth</a></li>
                                    <li><a href=\"#\">Fashion Accessories</a></li>
                                    <li><a href=\"#\"> Man Accessories</a></li>
                                    <li><a href=\"#\"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-5 col-sm-7\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href=\"#\">Frequently Asked Questions</a></li>
                                    <li><a href=\"#\">Terms & Conditions</a></li>
                                    <li><a href=\"#\">Privacy Policy</a></li>
                                    <li><a href=\"#\">Report a Payment Issue</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-7 col-lg-8 col-md-7\">
                        <div class=\"footer-copy-right\">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made </i> by <a href=\"\" target=\"_blank\">CodeCrafters</a></p>                   
                        </div>
                    </div>
                    <div class=\"col-xl-5 col-lg-4 col-md-5\">
                        <div class=\"footer-copy-right f-right\">
                            <!-- social -->
                            <div class=\"footer-social\">
                                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/sai4ull\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                                <a href=\"#\"><i class=\"fas fa-globe\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class=\"search-model-box\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-btn\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Searching key.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "produit/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  418 => 307,  331 => 223,  311 => 206,  291 => 189,  218 => 119,  193 => 97,  184 => 91,  154 => 64,  129 => 42,  119 => 35,  115 => 34,  111 => 33,  106 => 31,  102 => 30,  93 => 24,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

\t{% block body %}
            <!--? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"{{ asset('/img/logo/logo.png') }}\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class=\"header-area\">
            <div class=\"main-header header-sticky\">
                <div class=\"container-fluid\">
                    <div class=\"menu-wrapper\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"home.html\"><img src=\"{{ asset('/img/logo/logo.png') }}\" alt=\"\"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class=\"main-menu d-none d-lg-block\">
                            <nav>                                                
                                <ul id=\"navigation\">  
                                    <li><a href=\"{{path('app_home')}}\">Acceuil</a></li>
                                    <li><a href=\"{{path('app_produit')}}\">Magasin</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"{{path('app_homme')}}\">Homme</a></li>
                                            <li><a href=\"{{path('app_femme')}}\">Femme</a></li>
                                            <li><a href=\"{{path('app_enfant')}}\">Enfant</a></li>
                                        </ul> 
                                    </li>
                                    <li><a href=\"about.html\">A propos</a></li>
                                    <li class=\"hot\"><a href=\"#\">Nouveauté</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"evenement.html\">Nos Evenement</a></li>
                                            <li><a href=\"{{path('app_addproduit')}}\">Nouveau Produit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">Forum</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"blog.html\">Forum</a></li>
                                            <li><a href=\"reclamation.html\">Reclamation</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Nous Contacter</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class=\"header-right\">
                            <ul>
                                <li>
                                    <div class=\"nav-search search-switch\">
                                        <span class=\"flaticon-search\"></span>
                                    </div>
                                </li>
                                <li> <a href=\"login.html\"><span class=\"flaticon-user\"></span></a></li>
                                <li><a href=\"{{path('app_panier')}}\"><span class=\"flaticon-shopping-cart\"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start -->
        <div class=\"slider-area \">
            <div class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height d-flex align-items-center slide-bg\">
                    <div class=\"container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8\">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\" data-duration=\"2000ms\">Prêt à trier votre placard ?</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".7s\" data-duration=\"2000ms\">En un seul clic, WeTek vous offre la possibilité de revendre vos vêtements inutilisables et de récupérer de l'argent pour les réinvestir dans de nouveaux achats.</p>
                                    <!-- Hero-btn -->
                                    <div class=\"hero__btn\" data-animation=\"fadeInLeft\" data-delay=\".8s\" data-duration=\"2000ms\">
                                        <a href=\"{{path('app_addproduit')}}\" class=\"btn hero-btn\">vendre vos produits</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block\">
                                <div class=\"hero__img\" data-animation=\"bounceIn\" data-delay=\".4s\">
                                    <img src=\"{{ asset('/img/hero/watch.png') }}\" alt=\"\" class=\" heartbeat\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class=\"single-slider slider-height d-flex align-items-center slide-bg\">
                    <div class=\"container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8\">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\".4s\" data-duration=\"2000ms\">Prêt à trier votre placard ?</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\".7s\" data-duration=\"2000ms\">En un seul clic, WeTek vous offre la possibilité de revendre vos vêtements inutilisables et de récupérer de l'argent pour les réinvestir dans de nouveaux achats.</p>
                                    <!-- Hero-btn -->
                                    <div class=\"hero__btn\" data-animation=\"fadeInLeft\" data-delay=\".8s\" data-duration=\"2000ms\">
                                        <a href=\"sellprod.html\" class=\"btn hero-btn\">vendre vos produits</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block\">
                                <div class=\"hero__img\" data-animation=\"bounceIn\" data-delay=\".4s\">
                                    <img src=\"{{ asset('/img/hero/watch.png') }}\" alt=\"\" class=\" heartbeat\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
        <section class=\"new-product-area section-padding30\">
            <div class=\"container\">
                <!-- Section tittle -->
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"section-tittle mb-30 text-center\">
                            <h2>Notre Galerie</h2>
                        </div>
                    </div>
                </div>
        </section>
        <!--  New Product End -->
        <!--? Gallery Area Start -->
        <div class=\"gallery-area\">
            <div class=\"container-fluid p-0 fix\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-gallery mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery1.png);\"></div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-gallery mb-30\">
                            <div class=\"gallery-img big-img\" style=\"background-image: url(assets/img/gallery/gallery2.png);\"></div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-4 col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-lg-12 col-md-6 col-sm-6\">
                                <div class=\"single-gallery mb-30\">
                                    <div class=\"gallery-img small-img\" style=\"background-image: url(assets/img/gallery/gallery3.png);\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-12 col-lg-12  col-md-6 col-sm-6\">
                                <div class=\"single-gallery mb-30\">
                                    <div class=\"gallery-img small-img\" style=\"background-image: url(assets/img/gallery/gallery4.png);\"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? Popular Items Start -->
        <div class=\"popular-items section-padding30\">
            <div class=\"container\">
                <!-- Section tittle -->
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8 col-md-10\">
                        <div class=\"section-tittle mb-70 text-center\">
                            <h2>Articles populaires</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-popular-items mb-50 text-center\">
                            <div class=\"popular-img\">
                                <img src=\"{{ asset('/img/gallery/popular4.png') }}\" alt=\"\">
                                <div class=\"img-cap\">
                                    <span>Ajouter au panier</span>
                                </div>
                                <div class=\"favorit-items\">
                                    <span class=\"flaticon-heart\"></span>
                                </div>
                            </div>
                            <div class=\"popular-caption\">
                                <h3><a href=\"product_details.html\">Bottines</a></h3>
                                <span>130 DT</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-popular-items mb-50 text-center\">
                            <div class=\"popular-img\">
                                <img src=\"{{ asset('/img/gallery/popular5.png') }}\" alt=\"\">
                                <div class=\"img-cap\">
                                    <span>Ajouter au panier</span>
                                </div>
                                <div class=\"favorit-items\">
                                    <span class=\"flaticon-heart\"></span>
                                </div>
                            </div>
                            <div class=\"popular-caption\">
                                <h3><a href=\"product_details.html\">Veste</a></h3>
                                <span>65 DT</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                        <div class=\"single-popular-items mb-50 text-center\">
                            <div class=\"popular-img\">
                                <img src=\"{{ asset('/img/gallery/popular6.png') }}\" alt=\"\">
                                <div class=\"img-cap\">
                                    <span>Ajouter au panier</span>
                                </div>
                                <div class=\"favorit-items\">
                                    <span class=\"flaticon-heart\"></span>
                                </div>
                            </div>
                            <div class=\"popular-caption\">
                                <h3><a href=\"product_details.html\">Bottes</a></h3>
                                <span>750 DT</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class=\"row justify-content-center\">
                    <div class=\"room-btn pt-70\">
                        <a href=\"shop.html\" class=\"btn hero-btn\">Afficher Plus de produit</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->
        <!--? Video Area Start -->
        <div class=\"video-area\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-12\">
                    <div class=\"video-wrap\">
                        <div class=\"play-btn \"><a class=\"popup-video\" href=\"https://www.youtube.com\"><i class=\"fas fa-play\"></i></a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Area End -->
        <!--? Watch Choice  Start-->
        <div class=\"watch-area  pt-70\">
  
        </div>
        <!-- Watch Choice  End-->
        <!--? Shop Method Start-->
        <div class=\"shop-method-area\">
            <div class=\"container\">
                <div class=\"method-wrapper\">
                    <div class=\"row d-flex justify-content-between\">
                        <div class=\"col-xl-4 col-lg-4 col-md-6\">
                            <div class=\"single-method mb-40\">
                                <i class=\"ti-package\"></i>
                                <h6>Livraison gratuite</h6>
                                <p>La livraison est offerte à partir de 200 DT d'achat.</p>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-4 col-md-6\">
                            <div class=\"single-method mb-40\">
                                <i class=\"ti-unlock\"></i>
                                <h6>Sécurité de paiement</h6>
                                <p>Vos paiements sont protégés grâce à des systèmes de paiement universels.</p>
                            </div>
                        </div> 
                        <div class=\"col-xl-4 col-lg-4 col-md-6\">
                            <div class=\"single-method mb-40\">
                                <i class=\"ti-reload\"></i>
                                <h6>Echange</h6>
                                <p>Vous avez la possibilité de modifier vos achats dans un délai de 30 jours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class=\"footer-area footer-padding\">
            <div class=\"container\">
                <div class=\"row d-flex justify-content-between\">
                    <div class=\"col-xl-3 col-lg-3 col-md-5 col-sm-6\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"single-footer-caption mb-30\">
                                <!-- logo -->
                                <div class=\"footer-logo\">
                                    <a href=\"index.html\"><img src=\"{{ asset('/img/logo/logo2_footer.png') }}\" alt=\"\"></a>
                                </div>
                                <div class=\"footer-tittle\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-3 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href=\"#\">About</a></li>
                                    <li><a href=\"#\"> Offers & Discounts</a></li>
                                    <li><a href=\"#\"> Get Coupon</a></li>
                                    <li><a href=\"#\">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-7\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href=\"#\">Woman Cloth</a></li>
                                    <li><a href=\"#\">Fashion Accessories</a></li>
                                    <li><a href=\"#\"> Man Accessories</a></li>
                                    <li><a href=\"#\"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-3 col-md-5 col-sm-7\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href=\"#\">Frequently Asked Questions</a></li>
                                    <li><a href=\"#\">Terms & Conditions</a></li>
                                    <li><a href=\"#\">Privacy Policy</a></li>
                                    <li><a href=\"#\">Report a Payment Issue</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-7 col-lg-8 col-md-7\">
                        <div class=\"footer-copy-right\">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made </i> by <a href=\"\" target=\"_blank\">CodeCrafters</a></p>                   
                        </div>
                    </div>
                    <div class=\"col-xl-5 col-lg-4 col-md-5\">
                        <div class=\"footer-copy-right f-right\">
                            <!-- social -->
                            <div class=\"footer-social\">
                                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/sai4ull\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                                <a href=\"#\"><i class=\"fas fa-globe\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class=\"search-model-box\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-btn\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Searching key.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    {% endblock %}
", "produit/home.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\produit\\home.html.twig");
    }
}
