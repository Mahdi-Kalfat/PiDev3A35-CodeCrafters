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

/* produit/panier.html.twig */
class __TwigTemplate_2cd104e529b521fbfc8f381e05fb8888 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/panier.html.twig", 1);
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
        echo "<!--? Preloader Start -->
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
                        <a href=\"home.html\"><img src=\"assets/img/logo/logo.png\" alt=\"\"></a>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homme");
        echo "\">Homme</a></li>
                                            <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_femme");
        echo "\">Femme</a></li>
                                            <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enfant");
        echo "\">Enfant</a></li>
                                    </ul> 
                                </li>
                                <li><a href=\"about.html\">A propos</a></li>
                                <li class=\"hot\"><a href=\"#\">Nouveauté</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"evenement.html\">Nos Evenement</a></li>
                                        <li><a href=\"new_details.html\">Nouveau Produit</a></li>
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
        // line 63
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
      <!-- Hero Area Start-->
      <div class=\"slider-area \">
          <div class=\"single-slider slider-height2 d-flex align-items-center\">
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-xl-12\">
                          <div class=\"hero-cap text-center\">
                              <h2>Cart List</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class=\"cart_area section_padding\">
        <div class=\"container\">
          <div class=\"cart_inner\">
            <div class=\"table-responsive\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Price</th>
                    <th scope=\"col\">Quantity</th>
                    <th scope=\"col\">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class=\"media\">
                        <div class=\"d-flex\">
                          <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/card1.png"), "html", null, true);
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"media-body\">
                          <p>Minimalistic shop for multipurpose use</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>\$360.00</h5>
                    </td>
                    <td>
                      <div class=\"product_count\">
                        <span class=\"input-number-decrement\"> <i class=\"ti-minus\"></i></span>
                        <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                        <span class=\"input-number-increment\"> <i class=\"ti-plus\"></i></span>
                      </div>
                    </td>
                    <td>
                      <h5>\$720.00</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class=\"media\">
                        <div class=\"d-flex\">
                          <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/gallery/card2.png"), "html", null, true);
        echo "\" alt=\"\" />
                        </div>
                        <div class=\"media-body\">
                          <p>Minimalistic shop for multipurpose use</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>\$360.00</h5>
                    </td>
                    <td>
                      <div class=\"product_count\">
                          <span class=\"input-number-decrement\"> <i class=\"ti-minus\"></i></span>
                          <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                          <span class=\"input-number-increment\"> <i class=\"ti-plus\"></i></span>
                      </div>
                    </td>
                    <td>
                      <h5>\$720.00</h5>
                    </td>
                  </tr>
                  <tr class=\"bottom_button\">
                    <td>
                      <a class=\"btn_1\" href=\"#\">Update Cart</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                      <div class=\"cupon_text float-right\">
                        <a class=\"btn_1\" href=\"#\">Close Coupon</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Subtotal</h5>
                    </td>
                    <td>
                      <h5>\$2160.00</h5>
                    </td>
                  </tr>
                  <tr class=\"shipping_area\">
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Shipping</h5>
                    </td>
                    <td>
                      <div class=\"shipping_box\">
                        <ul class=\"list\">
                          <li>
                            Flat Rate: \$5.00
                            <input type=\"radio\" aria-label=\"Radio button for following text input\">
                          </li>
                          <li>
                            Free Shipping
                            <input type=\"radio\" aria-label=\"Radio button for following text input\">
                          </li>
                          <li>
                            Flat Rate: \$10.00
                            <input type=\"radio\" aria-label=\"Radio button for following text input\">
                          </li>
                          <li class=\"active\">
                            Local Delivery: \$2.00
                            <input type=\"radio\" aria-label=\"Radio button for following text input\">
                          </li>
                        </ul>
                        <h6>
                          Calculate Shipping
                          <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                        </h6>
                        <select class=\"shipping_select\">
                          <option value=\"1\">Bangladesh</option>
                          <option value=\"2\">India</option>
                          <option value=\"4\">Pakistan</option>
                        </select>
                        <select class=\"shipping_select section_bg\">
                          <option value=\"1\">Select a State</option>
                          <option value=\"2\">Select a State</option>
                          <option value=\"4\">Select a State</option>
                        </select>
                        <input class=\"post_code\" type=\"text\" placeholder=\"Postcode/Zipcode\" />
                        <a class=\"btn_1\" href=\"#\">Update Details</a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class=\"checkout_btn_inner float-right\">
                <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\">Continue Shopping</a>
                <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addcommande");
        echo "\">Proceed to checkout</a>
              </div>
            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
  </main>>
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
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo/logo2_footer.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                              </div>
                              <div class=\"footer-tittle\">
                                  <div class=\"footer-pera\">
                                      <p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                              </div>
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
        return "produit/panier.html.twig";
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
        return array (  344 => 244,  324 => 227,  320 => 226,  226 => 135,  198 => 110,  148 => 63,  116 => 34,  112 => 33,  108 => 32,  103 => 30,  99 => 29,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
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
                        <a href=\"home.html\"><img src=\"assets/img/logo/logo.png\" alt=\"\"></a>
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
                                        <li><a href=\"new_details.html\">Nouveau Produit</a></li>
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
      <!-- Hero Area Start-->
      <div class=\"slider-area \">
          <div class=\"single-slider slider-height2 d-flex align-items-center\">
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-xl-12\">
                          <div class=\"hero-cap text-center\">
                              <h2>Cart List</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class=\"cart_area section_padding\">
        <div class=\"container\">
          <div class=\"cart_inner\">
            <div class=\"table-responsive\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Price</th>
                    <th scope=\"col\">Quantity</th>
                    <th scope=\"col\">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class=\"media\">
                        <div class=\"d-flex\">
                          <img src=\"{{ asset('/img/gallery/card1.png') }}\" alt=\"\" />
                        </div>
                        <div class=\"media-body\">
                          <p>Minimalistic shop for multipurpose use</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>\$360.00</h5>
                    </td>
                    <td>
                      <div class=\"product_count\">
                        <span class=\"input-number-decrement\"> <i class=\"ti-minus\"></i></span>
                        <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                        <span class=\"input-number-increment\"> <i class=\"ti-plus\"></i></span>
                      </div>
                    </td>
                    <td>
                      <h5>\$720.00</h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class=\"media\">
                        <div class=\"d-flex\">
                          <img src=\"{{ asset('/img/gallery/card2.png') }}\" alt=\"\" />
                        </div>
                        <div class=\"media-body\">
                          <p>Minimalistic shop for multipurpose use</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>\$360.00</h5>
                    </td>
                    <td>
                      <div class=\"product_count\">
                          <span class=\"input-number-decrement\"> <i class=\"ti-minus\"></i></span>
                          <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                          <span class=\"input-number-increment\"> <i class=\"ti-plus\"></i></span>
                      </div>
                    </td>
                    <td>
                      <h5>\$720.00</h5>
                    </td>
                  </tr>
                  <tr class=\"bottom_button\">
                    <td>
                      <a class=\"btn_1\" href=\"#\">Update Cart</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                      <div class=\"cupon_text float-right\">
                        <a class=\"btn_1\" href=\"#\">Close Coupon</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Subtotal</h5>
                    </td>
                    <td>
                      <h5>\$2160.00</h5>
                    </td>
                  </tr>
                  <tr class=\"shipping_area\">
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Shipping</h5>
                    </td>
                    <td>
                      <div class=\"shipping_box\">
                        <ul class=\"list\">
                          <li>
                            Flat Rate: \$5.00
                            <input type=\"radio\" aria-label=\"Radio button for following text input\">
                          </li>
                          <li>
                            Free Shipping
                            <input type=\"radio\" aria-label=\"Radio button for following text input\">
                          </li>
                          <li>
                            Flat Rate: \$10.00
                            <input type=\"radio\" aria-label=\"Radio button for following text input\">
                          </li>
                          <li class=\"active\">
                            Local Delivery: \$2.00
                            <input type=\"radio\" aria-label=\"Radio button for following text input\">
                          </li>
                        </ul>
                        <h6>
                          Calculate Shipping
                          <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                        </h6>
                        <select class=\"shipping_select\">
                          <option value=\"1\">Bangladesh</option>
                          <option value=\"2\">India</option>
                          <option value=\"4\">Pakistan</option>
                        </select>
                        <select class=\"shipping_select section_bg\">
                          <option value=\"1\">Select a State</option>
                          <option value=\"2\">Select a State</option>
                          <option value=\"4\">Select a State</option>
                        </select>
                        <input class=\"post_code\" type=\"text\" placeholder=\"Postcode/Zipcode\" />
                        <a class=\"btn_1\" href=\"#\">Update Details</a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class=\"checkout_btn_inner float-right\">
                <a class=\"btn btn-sm btn-primary\" href=\"{{path('app_produit')}}\">Continue Shopping</a>
                <a class=\"btn btn-sm btn-primary\" href=\"{{path('app_addcommande')}}\">Proceed to checkout</a>
              </div>
            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
  </main>>
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
                                  <div class=\"footer-pera\">
                                      <p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                              </div>
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
{% endblock %}", "produit/panier.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\produit\\panier.html.twig");
    }
}
