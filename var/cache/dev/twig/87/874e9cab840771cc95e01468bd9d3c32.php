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

/* produit/showproduit.html.twig */
class __TwigTemplate_eb7a51eabfa55fddcb33582867a5c9a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/showproduit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/showproduit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/showproduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <!--? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"";
        // line 9
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
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class=\"main-menu d-none d-lg-block\">
                            <nav>                                                
                                <ul id=\"navigation\">  
                                    <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Acceuil</a></li>
                                    <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\">Magasin</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
        echo "\">Liste de mes produits favoris</a></li>   
                                        </ul> 
                                    </li>
                                    <li><a href=\"about.html\">A propos</a></li>
                                    <li class=\"hot\"><a href=\"#\">Nouveauté</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"evenement.html\">Nos Evenement</a></li>
                                            <li><a href=\"";
        // line 39
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
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\"><span class=\"flaticon-shopping-cart\">
                                    ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "get", ["cart"], "method", false, false, false, 62)) {
            // line 63
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "get", ["cartData"], "method", false, false, false, 63), "data", [], "any", false, false, false, 63), "quantityCart", [], "any", false, false, false, 63), "html", null, true);
            echo "
                                    ";
        } else {
            // line 65
            echo "                                        0   
                                    ";
        }
        // line 67
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
        <section class=\"popular-items\">
            <div class=\"container\">

                <h6>Acceuil > Magasin > All</h6>
                    
                <div class=\"d-flex justify-content-end\" style=\"padding-bottom: 20px;\">
                    <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addproduit");
        echo "\" class=\"genric-btn circle mr-2\" style=\"background-color: red; color: white;\">Vendre un produit</a>
                    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherproduit");
        echo "\" class=\"genric-btn circle\" style=\"background-color: red; color: white;\">Liste de mes produits</a>
                </div>
                <form action=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\" method=\"GET\" style=\"margin-bottom: 20px;\">
                <input type=\"text\" name=\"marque\" placeholder=\"Rechercher par marque...\" style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-right: 10px; width: 200px; font-size: 13px;\">
                <button type=\"submit\" style=\"padding: 10px 20px; background-color: f2f2f2; color: black; border: none; border-radius: 5px; cursor: pointer; font-size: 13px;\">Rechercher</button>
            </form>
            <form action=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\" method=\"GET\">
        <div class=\"row\">
        <h3 class=\"mb-30\">Filtrer Par :</h3>
        <div class=\"d-flex\">
            <div class=\"single-element-widget mt-10\" style=\"margin-left: 20px;\">
            
                <select name=\"type\">
                    <option value=\"\">Types</option>
                    <option value=\"pull\">Pull</option>
                    <option value=\"veste\">Veste</option>
                    <option value=\"pantalon\">Pantalon</option>
                    <option value=\"chaussure\">Chaussure</option>
                </select>
            </div>
            <div class=\"single-element-widget mt-10\" style=\"margin-left: 20px;\">
                <select name=\"taille\">
                    <option value=\"\">Tailles</option>
                    <option value=\"XS\">XS</option>
                    <option value=\"S\">S</option>
                    <option value=\"M\">M</option>
                    <option value=\"L\">L</option>
                    <option value=\"XL\">XL</option>
                    <option value=\"XXL\">XXL</option>
                </select>
            </div>
            <div class=\"single-element-widget mt-10\" style=\"margin-left: 20px;\">
                <select name=\"etat\" >
                    <option value=\"\">Etats</option>
                    <option value=\"Neuf\">Neuf</option>
                    <option value=\"Comme Neuf\">Comme Neuf</option>
                    <option value=\"Utilisé\">Utilisé</option>
                </select>
            </div>
            <div class=\"single-element-widget mt-10\" style=\"margin-left: 20px;\">
                <button type=\"submit\"  style=\"padding: 8px 30px; background-color: #f2f2f2; color: black; border: none; border-radius: 20px; cursor: pointer; font-size: 12px;\">Filtrer</button>
            </div>
                </div>
            </div>
            </form>
                <!-- Nav Card -->
                <div class=\"tab-content mt-30\" id=\"nav-tabContent\">
                    <!-- card one -->
                    <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                        <div class=\"row\">
                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 139, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 140
            echo "                            <div class=\"col-md-4\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <div class=\"favorit-items\">
                                            <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_favorites", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            echo "\">
                                                <span class=\"flaticon-heart\" style=\"";
            // line 145
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 145), (isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 145, $this->source); })()))) {
                echo "color: red;";
            }
            echo "\"></span>
                                            </a>
                                        </div> <!-- 362*373 -->
                                ";
            // line 148
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 148)) {
                // line 149
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imgproduit/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 149))), "html", null, true);
                echo "\" alt=\"user-avatar\" class=\"img-circle img-fluid mx-auto\" style=\"width: 215px; height: 250px;\">
                                ";
            }
            // line 151
            echo "                                        <div class=\"img-cap\">
                                            <span><a href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartAdd", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            echo "\">Ajouter au panier</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            echo "\">Détails</a></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 156), "html", null, true);
            echo "</a></h3>
                                        <span>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 157), "html", null, true);
            echo " DT</span>                           
                                    </div>
                                    
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                        </div>
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
        // line 212
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
        return "produit/showproduit.html.twig";
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
        return array (  357 => 212,  306 => 163,  294 => 157,  290 => 156,  281 => 152,  278 => 151,  272 => 149,  270 => 148,  262 => 145,  258 => 144,  252 => 140,  248 => 139,  201 => 95,  194 => 91,  189 => 89,  185 => 88,  162 => 67,  158 => 65,  152 => 63,  150 => 62,  146 => 61,  121 => 39,  111 => 32,  106 => 30,  102 => 29,  93 => 23,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
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
                                            <li><a href=\"{{path('favoris')}}\">Liste de mes produits favoris</a></li>   
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
        <section class=\"popular-items\">
            <div class=\"container\">

                <h6>Acceuil > Magasin > All</h6>
                    
                <div class=\"d-flex justify-content-end\" style=\"padding-bottom: 20px;\">
                    <a href=\"{{ path('app_addproduit') }}\" class=\"genric-btn circle mr-2\" style=\"background-color: red; color: white;\">Vendre un produit</a>
                    <a href=\"{{ path('app_afficherproduit') }}\" class=\"genric-btn circle\" style=\"background-color: red; color: white;\">Liste de mes produits</a>
                </div>
                <form action=\"{{ path('app_produit') }}\" method=\"GET\" style=\"margin-bottom: 20px;\">
                <input type=\"text\" name=\"marque\" placeholder=\"Rechercher par marque...\" style=\"padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-right: 10px; width: 200px; font-size: 13px;\">
                <button type=\"submit\" style=\"padding: 10px 20px; background-color: f2f2f2; color: black; border: none; border-radius: 5px; cursor: pointer; font-size: 13px;\">Rechercher</button>
            </form>
            <form action=\"{{ path('app_produit') }}\" method=\"GET\">
        <div class=\"row\">
        <h3 class=\"mb-30\">Filtrer Par :</h3>
        <div class=\"d-flex\">
            <div class=\"single-element-widget mt-10\" style=\"margin-left: 20px;\">
            
                <select name=\"type\">
                    <option value=\"\">Types</option>
                    <option value=\"pull\">Pull</option>
                    <option value=\"veste\">Veste</option>
                    <option value=\"pantalon\">Pantalon</option>
                    <option value=\"chaussure\">Chaussure</option>
                </select>
            </div>
            <div class=\"single-element-widget mt-10\" style=\"margin-left: 20px;\">
                <select name=\"taille\">
                    <option value=\"\">Tailles</option>
                    <option value=\"XS\">XS</option>
                    <option value=\"S\">S</option>
                    <option value=\"M\">M</option>
                    <option value=\"L\">L</option>
                    <option value=\"XL\">XL</option>
                    <option value=\"XXL\">XXL</option>
                </select>
            </div>
            <div class=\"single-element-widget mt-10\" style=\"margin-left: 20px;\">
                <select name=\"etat\" >
                    <option value=\"\">Etats</option>
                    <option value=\"Neuf\">Neuf</option>
                    <option value=\"Comme Neuf\">Comme Neuf</option>
                    <option value=\"Utilisé\">Utilisé</option>
                </select>
            </div>
            <div class=\"single-element-widget mt-10\" style=\"margin-left: 20px;\">
                <button type=\"submit\"  style=\"padding: 8px 30px; background-color: #f2f2f2; color: black; border: none; border-radius: 20px; cursor: pointer; font-size: 12px;\">Filtrer</button>
            </div>
                </div>
            </div>
            </form>
                <!-- Nav Card -->
                <div class=\"tab-content mt-30\" id=\"nav-tabContent\">
                    <!-- card one -->
                    <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                        <div class=\"row\">
                        {% for produit in produits %}
                            <div class=\"col-md-4\">
                                <div class=\"single-popular-items mb-50 text-center\">
                                    <div class=\"popular-img\">
                                        <div class=\"favorit-items\">
                                            <a href=\"{{ path('add_to_favorites', {'id': produit.id}) }}\">
                                                <span class=\"flaticon-heart\" style=\"{% if produit.id in favoris %}color: red;{% endif %}\"></span>
                                            </a>
                                        </div> <!-- 362*373 -->
                                {% if produit.image %}
                                    <img src=\"{{ asset('imgproduit/' ~ produit.image) }}\" alt=\"user-avatar\" class=\"img-circle img-fluid mx-auto\" style=\"width: 215px; height: 250px;\">
                                {% endif %}
                                        <div class=\"img-cap\">
                                            <span><a href=\"{{ path('cartAdd', {'id':produit.id})}}\">Ajouter au panier</a> | <a href=\"{{ path('app_details_produit', {'id': produit.id}) }}\">Détails</a></span>
                                        </div>
                                    </div>
                                    <div class=\"popular-caption\">
                                        <h3><a href=\"product_details.html\">{{produit.nom}}</a></h3>
                                        <span>{{produit.prix}} DT</span>                           
                                    </div>
                                    
                                </div>
                            </div>
                        {% endfor %}
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
{% endblock %}", "produit/showproduit.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\produit\\showproduit.html.twig");
    }
}
