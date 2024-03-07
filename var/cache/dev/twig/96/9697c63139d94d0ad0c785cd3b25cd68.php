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

/* produit/enfant.html.twig */
class __TwigTemplate_b8f04bc44d7cbe6049b0e2eaeef37138 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/enfant.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/enfant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/enfant.html.twig", 1);
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
        echo "    <!--? Preloader Start -->
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
        echo "\"><span class=\"flaticon-shopping-cart\">
                                    ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "session", [], "any", false, false, false, 65), "get", ["cart"], "method", false, false, false, 65)) {
            // line 66
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "session", [], "any", false, false, false, 66), "get", ["cartData"], "method", false, false, false, 66), "data", [], "any", false, false, false, 66), "quantityCart", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                    ";
        } else {
            // line 68
            echo "                                        0   
                                    ";
        }
        // line 70
        echo "                                </span></a> </li>
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
        <!-- Latest Products Start -->
        <section class=\"popular-items \">
            <div class=\"container\">
                <div class=\"d-flex justify-content-between mt-10\" style=\"padding-bottom: 20px;\">
    <div>
        <h6>Acceuil > Magasin > All</h6>
    </div>
    <div>
        <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addproduit");
        echo "\" class=\"genric-btn danger circle\">Vendre un produit</a>
    </div>
</div>

<div class=\"text-right mt-3\">
    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherproduit");
        echo "\" class=\"genric-btn danger circle\">Liste de mes produits</a>
</div>

                <div class=\"row\">
            <h3 class=\"mb-30\">Filtrer Par :</h3>
            <div class=\"d-flex\">
                <div class=\"single-element-widget mt-30\" style=\"margin-left: 20px;\">
                <div class=\"default-select\" id=\"default-select\">
                     <style>
                                .small-button {
                                    padding: 0.25rem 0.5rem;
                                    font-size: 0.875rem;
                                    line-height: 1.5;
                                    border-radius: 0.2rem;
                                }
                                </style>
                    <div class=\"input-group-icon mt-10\">
                    <div class=\"icon\"><i aria-hidden=\"true\"></i></div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary small-button dropdown-toggle\" type=\"button\" id=\"categoryDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Categorie
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"categoryDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Robe</a>
                        <a class=\"dropdown-item\" href=\"#\">Pull</a>
                        <a class=\"dropdown-item\" href=\"#\">Veste</a>
                        <a class=\"dropdown-item\" href=\"#\">Pantalon</a>
                        <a class=\"dropdown-item\" href=\"#\">Chaussure</a>
                        <a class=\"dropdown-item\" href=\"#\">Short</a>
                        <a class=\"dropdown-item\" href=\"#\">Monteau</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"single-element-widget mt-30\" style=\"margin-left: 20px;\">
                <div class=\"default-select\" id=\"default-select\">
                    <style>
                                .small-button {
                                    padding: 0.25rem 0.5rem;
                                    font-size: 0.875rem;
                                    line-height: 1.5;
                                    border-radius: 0.2rem;
                                }
                                </style>
                    <div class=\"input-group-icon mt-10\">
                    <div class=\"icon\"><i aria-hidden=\"true\"></i></div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary small-button dropdown-toggle\" type=\"button\" id=\"sizeDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Taille
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"sizeDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">XS</a>
                        <a class=\"dropdown-item\" href=\"#\">S</a>
                        <a class=\"dropdown-item\" href=\"#\">M</a>
                        <a class=\"dropdown-item\" href=\"#\">L</a>
                        <a class=\"dropdown-item\" href=\"#\">XL</a>
                        <a class=\"dropdown-item\" href=\"#\">XXL</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"single-element-widget mt-30\" style=\"margin-left: 20px;\">
                <div class=\"default-select\" id=\"default-select\">
                    <style>
                                .small-button {
                                    padding: 0.25rem 0.5rem;
                                    font-size: 0.875rem;
                                    line-height: 1.5;
                                    border-radius: 0.2rem;
                                }
                                </style>
                    <div class=\"input-group-icon mt-10\">
                    <div class=\"icon\"><i aria-hidden=\"true\"></i></div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary small-button dropdown-toggle\" type=\"button\" id=\"stateDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Etat
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"stateDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Neuf</a>
                        <a class=\"dropdown-item\" href=\"#\">Comme Neuf</a>
                        <a class=\"dropdown-item\" href=\"#\">Utiliser</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
                <!-- Nav Card -->
                <div class=\"tab-content mt-30\" id=\"nav-tabContent\">
                    <!-- card one -->
                    <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                        <div class=\"row\">
                            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/popular2.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"img-cap\">
                                            <span>Acheter maintenant</span>
                                        </div>
                                        <div class=\"favorit-items\">
                                            <span class=\"flaticon-heart\"></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">Robe Enfant</a></h3>
                                        <span>50 DT</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/popular3.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"img-cap\">
                                            <span>Acheter maintenant</span>
                                        </div>
                                        <div class=\"favorit-items\">
                                            <span class=\"flaticon-heart\"></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">Bottes Enfant</a></h3>
                                        <span>80 DT</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/popular12.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"img-cap\">
                                            <span>Acheter maintenant</span>
                                        </div>
                                        <div class=\"favorit-items\">
                                            <span class=\"flaticon-heart\"></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">Pull Enfant</a></h3>
                                        <span>40 DT</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/popular13.png"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"img-cap\">
                                            <span>Acheter maintenant</span>
                                        </div>
                                        <div class=\"favorit-items\">
                                            <span class=\"flaticon-heart\"></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">Pantoufle Enfant</a></h3>
                                        <span>20 DT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
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
        // line 309
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
        return "produit/enfant.html.twig";
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
        return array (  429 => 309,  363 => 246,  343 => 229,  323 => 212,  303 => 195,  202 => 97,  194 => 92,  170 => 70,  166 => 68,  160 => 66,  158 => 65,  154 => 64,  129 => 42,  119 => 35,  115 => 34,  111 => 33,  106 => 31,  102 => 30,  93 => 24,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
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
                                <li><a href=\"{{path('app_panier')}}\"><span class=\"flaticon-shopping-cart\">
                                    {% if app.session.get('cart') %}
                                    {{ app.session.get('cartData').data.quantityCart }}
                                    {% else %}
                                        0   
                                    {%endif %}
                                </span></a> </li>
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
        <!-- Latest Products Start -->
        <section class=\"popular-items \">
            <div class=\"container\">
                <div class=\"d-flex justify-content-between mt-10\" style=\"padding-bottom: 20px;\">
    <div>
        <h6>Acceuil > Magasin > All</h6>
    </div>
    <div>
        <a href=\"{{ path('app_addproduit') }}\" class=\"genric-btn danger circle\">Vendre un produit</a>
    </div>
</div>

<div class=\"text-right mt-3\">
    <a href=\"{{ path('app_afficherproduit') }}\" class=\"genric-btn danger circle\">Liste de mes produits</a>
</div>

                <div class=\"row\">
            <h3 class=\"mb-30\">Filtrer Par :</h3>
            <div class=\"d-flex\">
                <div class=\"single-element-widget mt-30\" style=\"margin-left: 20px;\">
                <div class=\"default-select\" id=\"default-select\">
                     <style>
                                .small-button {
                                    padding: 0.25rem 0.5rem;
                                    font-size: 0.875rem;
                                    line-height: 1.5;
                                    border-radius: 0.2rem;
                                }
                                </style>
                    <div class=\"input-group-icon mt-10\">
                    <div class=\"icon\"><i aria-hidden=\"true\"></i></div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary small-button dropdown-toggle\" type=\"button\" id=\"categoryDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Categorie
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"categoryDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Robe</a>
                        <a class=\"dropdown-item\" href=\"#\">Pull</a>
                        <a class=\"dropdown-item\" href=\"#\">Veste</a>
                        <a class=\"dropdown-item\" href=\"#\">Pantalon</a>
                        <a class=\"dropdown-item\" href=\"#\">Chaussure</a>
                        <a class=\"dropdown-item\" href=\"#\">Short</a>
                        <a class=\"dropdown-item\" href=\"#\">Monteau</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"single-element-widget mt-30\" style=\"margin-left: 20px;\">
                <div class=\"default-select\" id=\"default-select\">
                    <style>
                                .small-button {
                                    padding: 0.25rem 0.5rem;
                                    font-size: 0.875rem;
                                    line-height: 1.5;
                                    border-radius: 0.2rem;
                                }
                                </style>
                    <div class=\"input-group-icon mt-10\">
                    <div class=\"icon\"><i aria-hidden=\"true\"></i></div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary small-button dropdown-toggle\" type=\"button\" id=\"sizeDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Taille
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"sizeDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">XS</a>
                        <a class=\"dropdown-item\" href=\"#\">S</a>
                        <a class=\"dropdown-item\" href=\"#\">M</a>
                        <a class=\"dropdown-item\" href=\"#\">L</a>
                        <a class=\"dropdown-item\" href=\"#\">XL</a>
                        <a class=\"dropdown-item\" href=\"#\">XXL</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class=\"single-element-widget mt-30\" style=\"margin-left: 20px;\">
                <div class=\"default-select\" id=\"default-select\">
                    <style>
                                .small-button {
                                    padding: 0.25rem 0.5rem;
                                    font-size: 0.875rem;
                                    line-height: 1.5;
                                    border-radius: 0.2rem;
                                }
                                </style>
                    <div class=\"input-group-icon mt-10\">
                    <div class=\"icon\"><i aria-hidden=\"true\"></i></div>
                    <div class=\"dropdown\">
                        <button class=\"btn btn-secondary small-button dropdown-toggle\" type=\"button\" id=\"stateDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Etat
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"stateDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">Neuf</a>
                        <a class=\"dropdown-item\" href=\"#\">Comme Neuf</a>
                        <a class=\"dropdown-item\" href=\"#\">Utiliser</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
                <!-- Nav Card -->
                <div class=\"tab-content mt-30\" id=\"nav-tabContent\">
                    <!-- card one -->
                    <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                        <div class=\"row\">
                            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <img src=\"{{ asset('/img/gallery/popular2.png') }}\" alt=\"\">
                                        <div class=\"img-cap\">
                                            <span>Acheter maintenant</span>
                                        </div>
                                        <div class=\"favorit-items\">
                                            <span class=\"flaticon-heart\"></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">Robe Enfant</a></h3>
                                        <span>50 DT</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <img src=\"{{ asset('/img/gallery/popular3.png') }}\" alt=\"\">
                                        <div class=\"img-cap\">
                                            <span>Acheter maintenant</span>
                                        </div>
                                        <div class=\"favorit-items\">
                                            <span class=\"flaticon-heart\"></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">Bottes Enfant</a></h3>
                                        <span>80 DT</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <img src=\"{{ asset('/img/gallery/popular12.png') }}\" alt=\"\">
                                        <div class=\"img-cap\">
                                            <span>Acheter maintenant</span>
                                        </div>
                                        <div class=\"favorit-items\">
                                            <span class=\"flaticon-heart\"></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">Pull Enfant</a></h3>
                                        <span>40 DT</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-6\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <img src=\"{{ asset('/img/gallery/popular13.png') }}\" alt=\"\">
                                        <div class=\"img-cap\">
                                            <span>Acheter maintenant</span>
                                        </div>
                                        <div class=\"favorit-items\">
                                            <span class=\"flaticon-heart\"></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">Pantoufle Enfant</a></h3>
                                        <span>20 DT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
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
    {% endblock %}", "produit/enfant.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\produit\\enfant.html.twig");
    }
}
