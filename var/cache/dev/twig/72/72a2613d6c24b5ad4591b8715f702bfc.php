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

/* produit/produit.html.twig */
class __TwigTemplate_acd90509b1402bf261a068dc618859e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/produit.html.twig", 1);
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
                    <h3 class=\"mt-30 mb-30 text-center\">Entrez les détails du produit a vendre</h3>
                            ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 70, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), 'widget', ["attr" => ["placeholder" => "Votre Nom", "class" => "form-control"]]);
        echo "
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), 'errors');
        echo "
                                </div>
                                    <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), 'widget', ["attr" => ["placeholder" => "Votre Description", "class" => "form-control"]]);
        echo "
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'errors');
        echo "
                                   </div>
                                   <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 80, $this->source); })()), "marque", [], "any", false, false, false, 80), 'widget', ["attr" => ["placeholder" => "Marque", "class" => "form-control"]]);
        echo "
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 81, $this->source); })()), "marque", [], "any", false, false, false, 81), 'errors');
        echo "
                                   </div>
                                    <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 84, $this->source); })()), "prix", [], "any", false, false, false, 84), 'widget', ["attr" => ["placeholder" => "Votre Prix", "class" => "form-control"]]);
        echo "
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 85, $this->source); })()), "prix", [], "any", false, false, false, 85), 'errors');
        echo "
                                   </div>
                                    <div class=\"dropdown\">
                                   <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 89, $this->source); })()), "etat", [], "any", false, false, false, 89), 'widget');
        echo "
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 90, $this->source); })()), "etat", [], "any", false, false, false, 90), 'errors');
        echo "
                                    </div>
                                    </div>
                                    <div class=\"dropdown\">
                                   <div class=\"col-md-12 form-group p_star\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 95, $this->source); })()), "type", [], "any", false, false, false, 95), 'widget', ["attr" => ["placeholder" => "Type"]]);
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 96, $this->source); })()), "type", [], "any", false, false, false, 96), 'errors');
        echo "
                                   </div>
                                   </div>
                                   <div class=\"dropdown\">
                                        <div class=\"col-md-12 form-group p_star\">
                                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 101, $this->source); })()), "taille", [], "any", false, false, false, 101), 'widget', ["attr" => ["placeholder" => "Taille"]]);
        echo "
                                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 102, $this->source); })()), "taille", [], "any", false, false, false, 102), 'errors');
        echo "
                                        </div>
                                    </div>
                                   <div class=\"form-group\">
                                    <label for=\"\">Image</label>
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 107, $this->source); })()), "image", [], "any", false, false, false, 107), 'widget', ["attr" => ["placeholder" => "Votre Image", "class" => "form-control"]]);
        echo "
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 108, $this->source); })()), "image", [], "any", false, false, false, 108), 'errors');
        echo "
                                   </div>
                                    <style>
                                    .button-container > *:first-child {
                                     margin-right: 10px;
                                    }
                                    </style>
                                    <div class=\"col-md-12 form-group p_star d-flex justify-content-center\">
                                    <div class=\"button-container\">
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 117, $this->source); })()), "ajouter", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "genric-btn danger circle arrow"]]);
        echo "
                                    <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        echo "\" class=\"genric-btn danger circle\">Annuler</a>
                                    </div>
                                    </div>
                            ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAdd"]) || array_key_exists("formAdd", $context) ? $context["formAdd"] : (function () { throw new RuntimeError('Variable "formAdd" does not exist.', 121, $this->source); })()), 'form_end');
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
        // line 137
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
        return "produit/produit.html.twig";
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
        return array (  287 => 137,  268 => 121,  262 => 118,  258 => 117,  246 => 108,  242 => 107,  234 => 102,  230 => 101,  222 => 96,  218 => 95,  210 => 90,  206 => 89,  199 => 85,  195 => 84,  189 => 81,  185 => 80,  179 => 77,  175 => 76,  169 => 73,  165 => 72,  160 => 70,  138 => 51,  113 => 29,  103 => 22,  99 => 21,  95 => 20,  90 => 18,  86 => 17,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
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
                    <h3 class=\"mt-30 mb-30 text-center\">Entrez les détails du produit a vendre</h3>
                            {{ form_start(formAdd, {attr: {novalidate: 'novalidate'}}) }}
                                    <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.nom, {'attr': {'placeholder': 'Votre Nom', 'class': 'form-control'}}) }}
                                    {{ form_errors(formAdd.nom) }}
                                </div>
                                    <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.description, {'attr': {'placeholder': 'Votre Description', 'class': 'form-control'}} ) }}
                                    {{ form_errors(formAdd.description) }}
                                   </div>
                                   <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.marque, {'attr': {'placeholder': 'Marque', 'class': 'form-control'}}) }}
                                    {{ form_errors(formAdd.marque) }}
                                   </div>
                                    <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.prix, {'attr': {'placeholder': 'Votre Prix', 'class': 'form-control'}}) }}
                                    {{ form_errors(formAdd.prix) }}
                                   </div>
                                    <div class=\"dropdown\">
                                   <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.etat) }}
                                    {{ form_errors(formAdd.etat) }}
                                    </div>
                                    </div>
                                    <div class=\"dropdown\">
                                   <div class=\"col-md-12 form-group p_star\">
                                    {{ form_widget(formAdd.type, {'attr': {'placeholder': 'Type'} }) }}
                                    {{ form_errors(formAdd.type) }}
                                   </div>
                                   </div>
                                   <div class=\"dropdown\">
                                        <div class=\"col-md-12 form-group p_star\">
                                            {{ form_widget(formAdd.taille, {'attr': {'placeholder': 'Taille'} }) }}
                                            {{ form_errors(formAdd.taille) }}
                                        </div>
                                    </div>
                                   <div class=\"form-group\">
                                    <label for=\"\">Image</label>
                                    {{ form_widget(formAdd.image, {'attr': {'placeholder': 'Votre Image', 'class': 'form-control'} }) }}
                                    {{ form_errors(formAdd.image) }}
                                   </div>
                                    <style>
                                    .button-container > *:first-child {
                                     margin-right: 10px;
                                    }
                                    </style>
                                    <div class=\"col-md-12 form-group p_star d-flex justify-content-center\">
                                    <div class=\"button-container\">
                                    {{ form_widget(formAdd.ajouter, {'attr': {'class': 'genric-btn danger circle arrow' } }) }}
                                    <a href=\"{{path('app_produit')}}\" class=\"genric-btn danger circle\">Annuler</a>
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
    {% endblock %}", "produit/produit.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\produit\\produit.html.twig");
    }
}
