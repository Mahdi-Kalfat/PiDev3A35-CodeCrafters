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

/* produit/index.html.twig */
class __TwigTemplate_35977a6418c5344a9dc988d434337c4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
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
                                            <li><a href=\"";
        // line 41
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
        <div class=\"example-wrapper\">
    <h1 class=\"text-center mb-4\">Liste de mes Produits</h1>
        <section class=\"product-list\">
            <div class=\"container\">
               <div class=\"row\">
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 83
            echo "    <div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
        <div class=\"card h-100\">
            <a><img class=\"card-img-top\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imgproduit/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 85))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100%; height: 280px;\"></a>
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 87), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">
                    <strong>Description: </strong>
                    <span class=\"text-truncate\" style=\"max-width: 150px;\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 90), "html", null, true);
            echo "</span><br>
                    <strong>Prix: </strong>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 91), "html", null, true);
            echo " DT<br>
                    <strong>Marque: </strong>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "marque", [], "any", false, false, false, 92), "html", null, true);
            echo "<br>
                    <strong>État: </strong>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "etat", [], "any", false, false, false, 93), "html", null, true);
            echo "<br>
                    <strong>Type: </strong>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", [], "any", false, false, false, 94), "html", null, true);
            echo "<br>
                    <strong>Taille: </strong>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "taille", [], "any", false, false, false, 95), "html", null, true);
            echo "<br>
                </p>
            </div>
            <div class=\"card-footer text-right\">
                <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\" style=\"padding: 5px 10px; font-size: 20px;\">
                    <i class=\"fas fa-edit\"></i> 
                </a>
                <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\" style=\"padding: 5px 10px; font-size: 20px;\">
                    <i class=\"fas fa-trash\"></i> 
                </a>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "</div>

                        <div class=\"text-center mt-4\">
                            <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_addproduit");
        echo "\" class=\"btn btn-success\">Ajouter un autre produit</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        // line 129
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
        return "produit/index.html.twig";
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
        return array (  266 => 129,  246 => 112,  241 => 109,  228 => 102,  222 => 99,  215 => 95,  211 => 94,  207 => 93,  203 => 92,  199 => 91,  195 => 90,  189 => 87,  184 => 85,  180 => 83,  176 => 82,  154 => 63,  129 => 41,  119 => 34,  115 => 33,  111 => 32,  106 => 30,  102 => 29,  93 => 23,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
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
        <div class=\"example-wrapper\">
    <h1 class=\"text-center mb-4\">Liste de mes Produits</h1>
        <section class=\"product-list\">
            <div class=\"container\">
               <div class=\"row\">
    {% for produit in produits %}
    <div class=\"col-lg-3 col-md-4 col-sm-6 mb-4\">
        <div class=\"card h-100\">
            <a><img class=\"card-img-top\" src=\"{{ asset('imgproduit/' ~ produit.image) }}\" alt=\"\" style=\"width: 100%; height: 280px;\"></a>
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ produit.nom }}</h5>
                <p class=\"card-text\">
                    <strong>Description: </strong>
                    <span class=\"text-truncate\" style=\"max-width: 150px;\">{{ produit.description }}</span><br>
                    <strong>Prix: </strong>{{ produit.prix }} DT<br>
                    <strong>Marque: </strong>{{ produit.marque }}<br>
                    <strong>État: </strong>{{ produit.etat }}<br>
                    <strong>Type: </strong>{{ produit.type }}<br>
                    <strong>Taille: </strong>{{ produit.taille }}<br>
                </p>
            </div>
            <div class=\"card-footer text-right\">
                <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-sm btn-primary\" style=\"padding: 5px 10px; font-size: 20px;\">
                    <i class=\"fas fa-edit\"></i> 
                </a>
                <a href=\"{{ path('app_produit_delete', {'id': produit.id}) }}\" class=\"btn btn-sm btn-danger\" style=\"padding: 5px 10px; font-size: 20px;\">
                    <i class=\"fas fa-trash\"></i> 
                </a>
            </div>
        </div>
    </div>
{% endfor %}
</div>

                        <div class=\"text-center mt-4\">
                            <a href=\"{{ path('app_addproduit') }}\" class=\"btn btn-success\">Ajouter un autre produit</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
{% endblock %}", "produit/index.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\produit\\index.html.twig");
    }
}
