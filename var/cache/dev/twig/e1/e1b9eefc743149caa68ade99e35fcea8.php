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

/* commande/index1.html.twig */
class __TwigTemplate_249f5a84bd10b54cf4502ec02f9de7d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/index1.html.twig", 1);
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
    <!-- Latest Products Start -->
    <section class=\"popular-items\">
        <div class=\"container\">
            <div class=\"row product-btn justify-content-between mb-30\">
                <div class=\"properties__button\">
                    <!--End Nav Button  -->
                </div>
                <!-- Grid and List view -->
            </div>
            <style>
                .card {
                    height: 100%;
                }

                .card-body {
                    height: 100%;
                }

                .btn-edit,
                .btn-delete {
                    padding: 5px 10px;
                    font-size: 16px;
                }
            </style>
            <div class=\"container mt-5\">
                <h1 class=\"text-center mb-4\">Liste des commandes</h1>
                <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <form action=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_commande");
        echo "\" method=\"GET\">
                <div class=\"form-group\">
                    <input type=\"text\" id=\"adresse\" name=\"adresse\" placeholder=\"Entrez une adresse\" style=\"padding: 11px; border: 1px solid #ccc; border-radius: 5px; margin-right: 0px; width: 300px; font-size: 13px;\">
                </div>
                <button type=\"submit\" style=\"padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 13px;\">Rechercher</button>
            </form>
        </div>
        <div class=\"col-md-6\">
            <form action=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_commande");
        echo "\" method=\"GET\" class=\"text-right\" >
                <div class=\"form-group d-inline-block\">
                    <select class=\"form-control mb-20\" id=\"tri\" name=\"tri\" >
                        <option value=\"\">Trier par ordre :</option>
                        <option value=\"asc\" ";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "query", [], "any", false, false, false, 115), "get", ["tri"], "method", false, false, false, 115) == "asc")) {
            echo "selected";
        }
        echo ">Croissant</option>
                        <option value=\"desc\" ";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "query", [], "any", false, false, false, 116), "get", ["tri"], "method", false, false, false, 116) == "desc")) {
            echo "selected";
        }
        echo ">Décroissant</option>
                    </select>
                    <button type=\"submit\" style=\"padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 13px;\">Trier</button>
                </div>
            </form>
        </div>
    </div>
                <div class=\"row\">
                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 125
            echo "                    <div class=\"col-md-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-header text-center\">
                                Commande Num : #";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 128), "html", null, true);
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 128)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\" style=\"padding: 5px 10px; background-color:grey;font-size: 20px; margin-left: 290px;\"><i class=\"fas fa-file-pdf\"></i></a>
                                
                            </div>
                            
                            <div class=\"card-body\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\"><strong>Adresse:</strong> ";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresse", [], "any", false, false, false, 134), "html", null, true);
            echo "</li>
                                    <li class=\"list-group-item\"><strong>Paiement:</strong> ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 135), "html", null, true);
            echo "</li>
                                    <li class=\"list-group-item\"><strong>Code Postal:</strong> ";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "codepostal", [], "any", false, false, false, 136), "html", null, true);
            echo "</li>
                                    <li class=\"list-group-item\"><strong>Numero Tel:</strong> ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "numero", [], "any", false, false, false, 137), "html", null, true);
            echo "</li>
                                    <li class=\"list-group-item\"><strong>Nom Entreprise:</strong> ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getNomEntreprise", [], "any", false, false, false, 138), "html", null, true);
            echo "</li>
                                    <li class=\"list-group-item\"><strong>Prix Total de la commande:</strong> ";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "prixTotal", [], "any", false, false, false, 139), "html", null, true);
            echo "</li>
                                    <li class=\"list-group-item\"><strong>Produits:</strong>
                                        <ul>
                                            ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["commande"], "produits", [], "any", false, false, false, 142));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 143
                echo "                                            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 143), "html", null, true);
                echo "</li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"card-footer text-right\">
                                <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary btn-edit\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger btn-delete\">
                                    <i class=\"fas fa-trash\"></i> Supprimer
                                </a>
                            
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                </div>
                <div class=\"mt-4\">
                    <a href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\" class=\"btn btn-primary\">Retour au catalogue</a>
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
        // line 179
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
        return "commande/index1.html.twig";
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
        return array (  337 => 179,  318 => 163,  314 => 161,  300 => 153,  294 => 150,  287 => 145,  278 => 143,  274 => 142,  268 => 139,  264 => 138,  260 => 137,  256 => 136,  252 => 135,  248 => 134,  237 => 128,  232 => 125,  228 => 124,  215 => 116,  209 => 115,  202 => 111,  191 => 103,  146 => 61,  121 => 39,  111 => 32,  106 => 30,  102 => 29,  93 => 23,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
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
    <!-- Latest Products Start -->
    <section class=\"popular-items\">
        <div class=\"container\">
            <div class=\"row product-btn justify-content-between mb-30\">
                <div class=\"properties__button\">
                    <!--End Nav Button  -->
                </div>
                <!-- Grid and List view -->
            </div>
            <style>
                .card {
                    height: 100%;
                }

                .card-body {
                    height: 100%;
                }

                .btn-edit,
                .btn-delete {
                    padding: 5px 10px;
                    font-size: 16px;
                }
            </style>
            <div class=\"container mt-5\">
                <h1 class=\"text-center mb-4\">Liste des commandes</h1>
                <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <form action=\"{{ path('app_show_commande') }}\" method=\"GET\">
                <div class=\"form-group\">
                    <input type=\"text\" id=\"adresse\" name=\"adresse\" placeholder=\"Entrez une adresse\" style=\"padding: 11px; border: 1px solid #ccc; border-radius: 5px; margin-right: 0px; width: 300px; font-size: 13px;\">
                </div>
                <button type=\"submit\" style=\"padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 13px;\">Rechercher</button>
            </form>
        </div>
        <div class=\"col-md-6\">
            <form action=\"{{ path('app_show_commande') }}\" method=\"GET\" class=\"text-right\" >
                <div class=\"form-group d-inline-block\">
                    <select class=\"form-control mb-20\" id=\"tri\" name=\"tri\" >
                        <option value=\"\">Trier par ordre :</option>
                        <option value=\"asc\" {% if app.request.query.get('tri') == 'asc' %}selected{% endif %}>Croissant</option>
                        <option value=\"desc\" {% if app.request.query.get('tri') == 'desc' %}selected{% endif %}>Décroissant</option>
                    </select>
                    <button type=\"submit\" style=\"padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 13px;\">Trier</button>
                </div>
            </form>
        </div>
    </div>
                <div class=\"row\">
                    {% for commande in commandes %}
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-header text-center\">
                                Commande Num : #{{ commande.id }}  <a href=\"{{ path('app_commande_pdf', {'id': commande.id}) }}\" class=\"btn btn-sm btn-danger\" style=\"padding: 5px 10px; background-color:grey;font-size: 20px; margin-left: 290px;\"><i class=\"fas fa-file-pdf\"></i></a>
                                
                            </div>
                            
                            <div class=\"card-body\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\"><strong>Adresse:</strong> {{ commande.adresse }}</li>
                                    <li class=\"list-group-item\"><strong>Paiement:</strong> {{ commande.paiement }}</li>
                                    <li class=\"list-group-item\"><strong>Code Postal:</strong> {{ commande.codepostal }}</li>
                                    <li class=\"list-group-item\"><strong>Numero Tel:</strong> {{ commande.numero }}</li>
                                    <li class=\"list-group-item\"><strong>Nom Entreprise:</strong> {{ commande.getNomEntreprise }}</li>
                                    <li class=\"list-group-item\"><strong>Prix Total de la commande:</strong> {{ commande.prixTotal }}</li>
                                    <li class=\"list-group-item\"><strong>Produits:</strong>
                                        <ul>
                                            {% for produit in commande.produits %}
                                            <li>{{ produit.nom }}</li>
                                            {% endfor %}
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"card-footer text-right\">
                                <a href=\"{{ path('app_commande_edit', {'id': commande.id}) }}\" class=\"btn btn-sm btn-primary btn-edit\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"{{ path('app_commande_delete', {'id': commande.id}) }}\" class=\"btn btn-sm btn-danger btn-delete\">
                                    <i class=\"fas fa-trash\"></i> Supprimer
                                </a>
                            
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
                <div class=\"mt-4\">
                    <a href=\"{{ path('app_produit') }}\" class=\"btn btn-primary\">Retour au catalogue</a>
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
{% endblock %}", "commande/index1.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\commande\\index1.html.twig");
    }
}
