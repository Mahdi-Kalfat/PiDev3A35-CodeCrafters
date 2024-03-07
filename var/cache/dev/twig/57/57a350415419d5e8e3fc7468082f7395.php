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

/* commande/commande.html.twig */
class __TwigTemplate_404dda53d0a72fe9c5e3cd6cab328ea9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/commande.html.twig", 1);
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
        echo "    <!-- Header Start -->
        <div class=\"header-area\">
            <div class=\"main-header header-sticky\">
                <div class=\"container-fluid\">
                    <div class=\"menu-wrapper\">
                        <!-- Logo -->
                        <div class=\"logo\">
                            <a href=\"home.html\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class=\"main-menu d-none d-lg-block\">
                            <nav>                                                
                                <ul id=\"navigation\">  
                                    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Acceuil</a></li>
                                    <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\">Magasin</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homme");
        echo "\">Homme</a></li>
                                            <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_femme");
        echo "\">Femme</a></li>
                                            <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enfant");
        echo "\">Enfant</a></li>
                                        </ul> 
                                    </li>
                                    <li><a href=\"about.html\">A propos</a></li>
                                    <li class=\"hot\"><a href=\"#\">Nouveauté</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"evenement.html\">Nos Evenement</a></li>
                                            <li><a href=\"";
        // line 29
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
        // line 51
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
        <!--================login_part Area =================-->
        <div class=\"section-top-border\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-lg-8 col-md-8\">
                    <h3 class=\"mt-30 mb-30 text-center\">Entrez les détails nécessaire pour finaliser votre achat !</h3>
                    
                  <form action=\"\" method=\"POST\">
<div class=\"col-md-12 form-group p_star d-flex justify-content-center\">
    <label for=\"stripePayment\" class=\"border rounded p-2 text-center\">
            Vous pouvez effectuer le paiement directement via la carte bancaire :
            <!-- Bouton Pay With Card -->
            <script
                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\" 
                data-key=\"pk_test_51OpfUGDCxyxLdTEx8rvGvuSEDP05VTMnHqHRcMF90HBvlp7wDfFoVPNpUTdkt8Fc38Jk7t7faOC7eOdMFpDgAFOi00dgiRStca\"
                data-amount=\"";
        // line 79
        echo twig_escape_filter($this->env, ((isset($context["prixTotalPanier"]) || array_key_exists("prixTotalPanier", $context) ? $context["prixTotalPanier"] : (function () { throw new RuntimeError('Variable "prixTotalPanier" does not exist.', 79, $this->source); })()) * 100), "html", null, true);
        echo "\" 
                data-name=\"Wetek\"
                data-description=\"Entrez les détails de votre carte !\"
                data-image=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo/logo.png"), "html", null, true);
        echo "\"
                data-locale=\"auto\">
            </script>
            <!-- Texte approprié -->
            
        </label>
    </div>
</form>
                            ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 90, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"col-md-12 form-group p_star\">
                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 92, $this->source); })()), "adresse", [], "any", false, false, false, 92), 'widget', ["attr" => ["placeholder" => "Address ", "class" => "form-control"]]);
        echo "
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 93, $this->source); })()), "adresse", [], "any", false, false, false, 93), 'errors');
        echo "
                                   </div>
                                    <div class=\"dropdown\">
                                   <div class=\"col-md-12 form-group p_star\">
                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 97, $this->source); })()), "paiement", [], "any", false, false, false, 97), 'widget', ["attr" => ["placeholder" => "Methode de paiement"]]);
        echo "
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 98, $this->source); })()), "paiement", [], "any", false, false, false, 98), 'errors');
        echo "
                                   </div>
                                    </div>
                                   <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 102, $this->source); })()), "codepostal", [], "any", false, false, false, 102), 'widget', ["attr" => ["placeholder" => "Code postal", "class" => "form-control"]]);
        echo "
                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 103, $this->source); })()), "codepostal", [], "any", false, false, false, 103), 'errors');
        echo "
                                   </div>
                                   <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 106, $this->source); })()), "nom_entreprise", [], "any", false, false, false, 106), 'widget', ["attr" => ["placeholder" => "Nom de votre entreprise (si vous avez)", "class" => "form-control"]]);
        echo "
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 107, $this->source); })()), "nom_entreprise", [], "any", false, false, false, 107), 'errors');
        echo "
                                   </div>
                                   <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 110, $this->source); })()), "numero", [], "any", false, false, false, 110), 'widget', ["attr" => ["placeholder" => "Votre numero", "class" => "form-control"]]);
        echo "
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 111, $this->source); })()), "numero", [], "any", false, false, false, 111), 'errors');
        echo "
                                   </div>
                                    <style>
                                    .button-container > *:first-child {
                                     margin-right: 10px;
                                    }
                                    </style>
                                    <div class=\"col-md-12 form-group p_star border rounded text-center\">
                                        <label for=\"produits\" class=\"font-weight-bold\">Produits associés à votre commande :</label>
                                        <div class=\"products-list \"> 
                                            <ul class=\"list-unstyled \">
                                                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nomsProduits"]) || array_key_exists("nomsProduits", $context) ? $context["nomsProduits"] : (function () { throw new RuntimeError('Variable "nomsProduits" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nomProduit"]) {
            // line 123
            echo "                                                    <li><i class=\"fas fa-check-circle text-success mr-2\"></i>";
            echo twig_escape_filter($this->env, $context["nomProduit"], "html", null, true);
            echo "</li> <!-- icone check-->
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nomProduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                            </ul>
                                        </div>
                                        <p class=\"mt-3\">
                                            <label for=\"produits\" class=\"font-weight-bold\">Montant total de votre commande :</label>
                                            <span style=\"background-color: #f0f0f0; color: #333; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;\">";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["prixTotalPanier"]) || array_key_exists("prixTotalPanier", $context) ? $context["prixTotalPanier"] : (function () { throw new RuntimeError('Variable "prixTotalPanier" does not exist.', 129, $this->source); })()), "html", null, true);
        echo " DT</span> 
                                        </p>
                                    </div>                    
                                    <div class=\"col-md-12 form-group p_star d-flex justify-content-center\">
                                    <div class=\"button-container\">
                                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 134, $this->source); })()), "Valider", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "btn btn-sm btn-primary genric-btn danger circle arrow"]]);
        echo "
                                    <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\" class=\"genric-btn danger circle arrow\">Retour ver le panier </a>                                   
                                    </div>
                                    </div>
                            ";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 138, $this->source); })()), 'form_end');
        echo "

                </div>
            </div>
        </div>
        <!--================login_part end =================-->
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
        // line 155
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
                                   

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "commande/commande.html.twig";
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
        return array (  308 => 155,  288 => 138,  282 => 135,  278 => 134,  270 => 129,  264 => 125,  255 => 123,  251 => 122,  237 => 111,  233 => 110,  227 => 107,  223 => 106,  217 => 103,  213 => 102,  206 => 98,  202 => 97,  195 => 93,  191 => 92,  186 => 90,  175 => 82,  169 => 79,  138 => 51,  113 => 29,  103 => 22,  99 => 21,  95 => 20,  90 => 18,  86 => 17,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

\t{% block body %}
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
        <!--================login_part Area =================-->
        <div class=\"section-top-border\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-lg-8 col-md-8\">
                    <h3 class=\"mt-30 mb-30 text-center\">Entrez les détails nécessaire pour finaliser votre achat !</h3>
                    
                  <form action=\"\" method=\"POST\">
<div class=\"col-md-12 form-group p_star d-flex justify-content-center\">
    <label for=\"stripePayment\" class=\"border rounded p-2 text-center\">
            Vous pouvez effectuer le paiement directement via la carte bancaire :
            <!-- Bouton Pay With Card -->
            <script
                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\" 
                data-key=\"pk_test_51OpfUGDCxyxLdTEx8rvGvuSEDP05VTMnHqHRcMF90HBvlp7wDfFoVPNpUTdkt8Fc38Jk7t7faOC7eOdMFpDgAFOi00dgiRStca\"
                data-amount=\"{{ prixTotalPanier * 100 }}\" 
                data-name=\"Wetek\"
                data-description=\"Entrez les détails de votre carte !\"
                data-image=\"{{ asset('/img/logo/logo.png') }}\"
                data-locale=\"auto\">
            </script>
            <!-- Texte approprié -->
            
        </label>
    </div>
</form>
                            {{ form_start(formAdd, {attr: {novalidate: 'novalidate'}}) }}
                                    <div class=\"col-md-12 form-group p_star\">
                                        {{ form_widget(formAdd.adresse, {'attr': {'placeholder': 'Address ', 'class': 'form-control'}}) }}
                                        {{ form_errors(formAdd.adresse) }}
                                   </div>
                                    <div class=\"dropdown\">
                                   <div class=\"col-md-12 form-group p_star\">
                                        {{ form_widget(formAdd.paiement, {'attr': {'placeholder': 'Methode de paiement'} }) }}
                                        {{ form_errors(formAdd.paiement) }}
                                   </div>
                                    </div>
                                   <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.codepostal, {'attr': {'placeholder': 'Code postal', 'class': 'form-control'}} ) }}
                                    {{ form_errors(formAdd.codepostal) }}
                                   </div>
                                   <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.nom_entreprise, {'attr': {'placeholder': 'Nom de votre entreprise (si vous avez)', 'class': 'form-control'}} ) }}
                                    {{ form_errors(formAdd.nom_entreprise) }}
                                   </div>
                                   <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.numero, {'attr': {'placeholder': 'Votre numero', 'class': 'form-control'}} ) }}
                                    {{ form_errors(formAdd.numero) }}
                                   </div>
                                    <style>
                                    .button-container > *:first-child {
                                     margin-right: 10px;
                                    }
                                    </style>
                                    <div class=\"col-md-12 form-group p_star border rounded text-center\">
                                        <label for=\"produits\" class=\"font-weight-bold\">Produits associés à votre commande :</label>
                                        <div class=\"products-list \"> 
                                            <ul class=\"list-unstyled \">
                                                {% for nomProduit in nomsProduits %}
                                                    <li><i class=\"fas fa-check-circle text-success mr-2\"></i>{{ nomProduit }}</li> <!-- icone check-->
                                                {% endfor %}
                                            </ul>
                                        </div>
                                        <p class=\"mt-3\">
                                            <label for=\"produits\" class=\"font-weight-bold\">Montant total de votre commande :</label>
                                            <span style=\"background-color: #f0f0f0; color: #333; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px;\">{{ prixTotalPanier }} DT</span> 
                                        </p>
                                    </div>                    
                                    <div class=\"col-md-12 form-group p_star d-flex justify-content-center\">
                                    <div class=\"button-container\">
                                    {{ form_widget(formAdd.Valider, {'attr': {'class': 'btn btn-sm btn-primary genric-btn danger circle arrow' } }) }}
                                    <a href=\"{{path('app_panier')}}\" class=\"genric-btn danger circle arrow\">Retour ver le panier </a>                                   
                                    </div>
                                    </div>
                            {{ form_end(formAdd) }}

                </div>
            </div>
        </div>
        <!--================login_part end =================-->
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
                                   

    {% endblock %}", "commande/commande.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\commande\\commande.html.twig");
    }
}
