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

/* panier/index.html.twig */
class __TwigTemplate_9c971d1759f4179051c5e92007ba2a7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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
        echo "    <header>
        <!-- Header Start -->
        <div class=\"header-area\">
            <div class=\"main-header header-sticky\">
                <div class=\"container-fluid\">
                    <div class=\"menu-wrapper\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"home.html\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class=\"main-menu d-none d-lg-block\">
                            <nav>                                                
                                <ul id=\"navigation\">  
                                    <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Acceuil</a></li>
                                    <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\">Magasin</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homme");
        echo "\">Homme</a></li>
                                            <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_femme");
        echo "\">Femme</a></li>
                                            <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enfant");
        echo "\">Enfant</a></li>
                                        </ul> 
                                    </li>
                                    <li><a href=\"about.html\">A propos</a></li>
                                    <li class=\"hot\"><a href=\"#\">Nouveauté</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"evenement.html\">Nos Evenement</a></li>
                                            <li><a href=\"";
        // line 30
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
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\"><span class=\"flaticon-shopping-cart\">
                                    ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", ["cart"], "method", false, false, false, 53)) {
            // line 54
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "get", ["cartData"], "method", false, false, false, 54), "data", [], "any", false, false, false, 54), "quantityCart", [], "any", false, false, false, 54), "html", null, true);
            echo "
                                    ";
        } else {
            // line 56
            echo "                                        0   
                                    ";
        }
        // line 58
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
    <div class=\"section\">
    <div class=\"container\">
        <div class=\"hero-cap text-center\">
                              <h2>Cart List</h2>
                          </div>
        <div class=\"row\">
            <div class=\"col-12 text-right\"> 
            <div class=\"supprimer mb-3\">
                <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartDelete");
        echo "\" class=\"btn btn-outline-secondary rounded-pill btn-sm\" style=\"padding: 16px 15px; font-size: 16px;\">Vider votre panier !</a>
            </div>
        </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"table-responsive shop_cart_table\">
                    <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"produit-thumbnail\">&nbsp;</th>
                                    <th class=\"produit-name\">Produit</th>
                                    <th class=\"produit-price\">Prix</th>
                                    <th class=\"produit-quantity\">Quantité</th>
                                    <th class=\"produit-subtotal\">Total</th>
                                    <th class=\"produit-remove\">Supprimer</th>
                                </tr>
                            </thead> 
                            <tbody>
                              ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "session", [], "any", false, false, false, 99), "get", ["cart"], "method", false, false, false, 99)) {
            // line 100
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 100, $this->source); })()), "produits", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 101
                echo "                                    <tr>
                                    
                                        <td class=\"produit-thumbnail\">
                                            ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 104), "image", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imgproduit/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 105), "image", [], "any", false, false, false, 105))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 105), "nom", [], "any", false, false, false, 105), "html", null, true);
                    echo "\" class=\"img-circle\" style=\"max-width: 50px; max-height: 80px; border-radius: 50%;\">
                                            ";
                }
                // line 107
                echo "                                        </td>
                                        <td class=\"produit-name\" data-title=\"produit\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 108), "nom", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>
                                        <td class=\"produit-price\" data-title=\"Price\">";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 109), "prix", [], "any", false, false, false, 109), "html", null, true);
                echo "</td>
                                        <td class=\"produit-quantity\" data-title=\"Quantity\"><div class=\"quantity\">
                                        <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartDeletep", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111)]), "html", null, true);
                echo "\" class=\"minus\" style=\"font-size: 10px;\"><i class=\"fas fa-minus\" style=\"color: black;\"></i></a>
                                        <input type=\"text\" name=\"quantity\" value=\"";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 112), "html", null, true);
                echo "\" title=\"Qty\" class=\"qty\" size=\"4\">
                                        <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartAdd", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113)]), "html", null, true);
                echo "\" class=\"plus\" style=\"font-size: 10px;\">
                                            <i class=\"fas fa-plus\" style=\"color: black;\"></i>
                                        </a>
                                        </div></td>
                                        <td class=\"produit-subtotal\" data-title=\"Total\">";
                // line 117
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 117) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 117), "prix", [], "any", false, false, false, 117)), "html", null, true);
                echo " DT</td>
                                        <td class=\"produit-remove\" data-title=\"Remove\">
                                        <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartDeleteAll", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119)]), "html", null, true);
                echo "\" style=\"margin-right: 10px;\">
                                            <span class=\"text-danger\" style=\"font-size: 24px;\">
                                                &times;
                                            </span>
                                        </a>
                                    </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                               ";
        } else {
            // line 128
            echo "                                    <p>Votre panier est vide !<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
            echo "\"> Poursuivre vos achats</a> </p>
                                ";
        }
        // line 130
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class=\"produit-thumbnail\">&nbsp;</th>
                                    <th class=\"produit-name\">Produit</th>
                                    <th class=\"produit-price\">Prix</th>
                                    <th class=\"produit-quantity\">Quantité</th>
                                    <th class=\"produit-subtotal\">Total</th>
                                    <th class=\"produit-remove\">Supprimer</th>
                                </tr>
                            </tfoot>
                        </table>
                          <p>
                             <a class=\"btn btn-outline-secondary rounded-pill btn-sm \" href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\" style=\"padding: 15px 15px; font-size: 14px;\">Poursuivre vos achats <i class=\"ti-shopping-cart-full\"></i></a>  
                        </p>
                      </div>
                  </div>                    
              <div class=\"row\">
                  <div class=\"col-md-6\">
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"border p-3 p-md-4\">
                        <div class=\"heading_s1 mb-3\">
                            <h6>Panier Totaux</h6>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td class=\"cart_total_label\">Panier Sous total HT</td>
                                        <td class=\"cart_total_amount\"> ";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 160, $this->source); })()), "data", [], "any", false, false, false, 160), "subTotalHT", [], "any", false, false, false, 160), "html", null, true);
        echo " DT</td>
                                    </tr>
                                    <tr>
                                        <td class=\"cart_total_label\">Taxe (20%) </td>
                                        <td class=\"cart_total_amount\"> ";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 164, $this->source); })()), "data", [], "any", false, false, false, 164), "taxe", [], "any", false, false, false, 164), "html", null, true);
        echo " DT</td>
                                    </tr>
                                    <tr>
                                        <td class=\"cart_total_label\">Total TTC</td>
                                        <td class=\"cart_total_amount\"><strong> ";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 168, $this->source); })()), "data", [], "any", false, false, false, 168), "subTotalTTC", [], "any", false, false, false, 168), "html", null, true);
        echo " DT</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addcommande");
        echo "\" class=\"btn btn-fill-out\">Valider votre commande</a>
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
        // line 191
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
        return "panier/index.html.twig";
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
        return array (  356 => 191,  335 => 173,  327 => 168,  320 => 164,  313 => 160,  293 => 143,  278 => 130,  272 => 128,  269 => 127,  255 => 119,  250 => 117,  243 => 113,  239 => 112,  235 => 111,  230 => 109,  226 => 108,  223 => 107,  215 => 105,  213 => 104,  208 => 101,  203 => 100,  201 => 99,  178 => 79,  155 => 58,  151 => 56,  145 => 54,  143 => 53,  139 => 52,  114 => 30,  104 => 23,  100 => 22,  96 => 21,  91 => 19,  87 => 18,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
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
    <div class=\"section\">
    <div class=\"container\">
        <div class=\"hero-cap text-center\">
                              <h2>Cart List</h2>
                          </div>
        <div class=\"row\">
            <div class=\"col-12 text-right\"> 
            <div class=\"supprimer mb-3\">
                <a href=\"{{ path('cartDelete') }}\" class=\"btn btn-outline-secondary rounded-pill btn-sm\" style=\"padding: 16px 15px; font-size: 16px;\">Vider votre panier !</a>
            </div>
        </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"table-responsive shop_cart_table\">
                    <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"produit-thumbnail\">&nbsp;</th>
                                    <th class=\"produit-name\">Produit</th>
                                    <th class=\"produit-price\">Prix</th>
                                    <th class=\"produit-quantity\">Quantité</th>
                                    <th class=\"produit-subtotal\">Total</th>
                                    <th class=\"produit-remove\">Supprimer</th>
                                </tr>
                            </thead> 
                            <tbody>
                              {% if app.session.get('cart') %}
                                {% for element in cart.produits %}
                                    <tr>
                                    
                                        <td class=\"produit-thumbnail\">
                                            {% if element.produit.image %}
                                                <img src=\"{{ asset('imgproduit/' ~ element.produit.image) }}\" alt=\"{{ element.produit.nom }}\" class=\"img-circle\" style=\"max-width: 50px; max-height: 80px; border-radius: 50%;\">
                                            {% endif %}
                                        </td>
                                        <td class=\"produit-name\" data-title=\"produit\">{{element.produit.nom}}</td>
                                        <td class=\"produit-price\" data-title=\"Price\">{{element.produit.prix}}</td>
                                        <td class=\"produit-quantity\" data-title=\"Quantity\"><div class=\"quantity\">
                                        <a href=\"{{ path('cartDeletep', {'id': element.produit.id}) }}\" class=\"minus\" style=\"font-size: 10px;\"><i class=\"fas fa-minus\" style=\"color: black;\"></i></a>
                                        <input type=\"text\" name=\"quantity\" value=\"{{element.quantity}}\" title=\"Qty\" class=\"qty\" size=\"4\">
                                        <a href=\"{{ path('cartAdd', {'id': element.produit.id}) }}\" class=\"plus\" style=\"font-size: 10px;\">
                                            <i class=\"fas fa-plus\" style=\"color: black;\"></i>
                                        </a>
                                        </div></td>
                                        <td class=\"produit-subtotal\" data-title=\"Total\">{{ element.quantity * element.produit.prix }} DT</td>
                                        <td class=\"produit-remove\" data-title=\"Remove\">
                                        <a href=\"{{ path('cartDeleteAll', {'id': element.produit.id}) }}\" style=\"margin-right: 10px;\">
                                            <span class=\"text-danger\" style=\"font-size: 24px;\">
                                                &times;
                                            </span>
                                        </a>
                                    </td>
                                    </tr>
                                {% endfor %}
                               {% else %}
                                    <p>Votre panier est vide !<a href=\"{{ path('app_produit')}}\"> Poursuivre vos achats</a> </p>
                                {% endif %}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class=\"produit-thumbnail\">&nbsp;</th>
                                    <th class=\"produit-name\">Produit</th>
                                    <th class=\"produit-price\">Prix</th>
                                    <th class=\"produit-quantity\">Quantité</th>
                                    <th class=\"produit-subtotal\">Total</th>
                                    <th class=\"produit-remove\">Supprimer</th>
                                </tr>
                            </tfoot>
                        </table>
                          <p>
                             <a class=\"btn btn-outline-secondary rounded-pill btn-sm \" href=\"{{ path('app_produit')}}\" style=\"padding: 15px 15px; font-size: 14px;\">Poursuivre vos achats <i class=\"ti-shopping-cart-full\"></i></a>  
                        </p>
                      </div>
                  </div>                    
              <div class=\"row\">
                  <div class=\"col-md-6\">
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"border p-3 p-md-4\">
                        <div class=\"heading_s1 mb-3\">
                            <h6>Panier Totaux</h6>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td class=\"cart_total_label\">Panier Sous total HT</td>
                                        <td class=\"cart_total_amount\"> {{ cart.data.subTotalHT}} DT</td>
                                    </tr>
                                    <tr>
                                        <td class=\"cart_total_label\">Taxe (20%) </td>
                                        <td class=\"cart_total_amount\"> {{ cart.data.taxe }} DT</td>
                                    </tr>
                                    <tr>
                                        <td class=\"cart_total_label\">Total TTC</td>
                                        <td class=\"cart_total_amount\"><strong> {{ cart.data.subTotalTTC  }} DT</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href=\"{{ path('app_addcommande')}}\" class=\"btn btn-fill-out\">Valider votre commande</a>
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
{% endblock %}", "panier/index.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\panier\\index.html.twig");
    }
}
