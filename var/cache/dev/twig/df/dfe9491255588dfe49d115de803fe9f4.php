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

/* commande/backcommande.html.twig */
class __TwigTemplate_1677c67da0c83de5ee8a45fac9539b69 extends Template
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
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/backcommande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/backcommande.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "commande/backcommande.html.twig", 1);
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
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fullcalendar/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
  
<!-- Site wrapper -->
<div class=\"wrapper\">
  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Navbar Search -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
          <i class=\"fas fa-search\"></i>
        </a>
        <div class=\"navbar-search-block\">
          <form class=\"form-inline\">
            <div class=\"input-group input-group-sm\">
              <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-navbar\" type=\"submit\">
                  <i class=\"fas fa-search\"></i>
                </button>
                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                  <i class=\"fas fa-times\"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
          <i class=\"fas fa-expand-arrows-alt\"></i>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
          <i class=\"fas fa-th-large\"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"../../index.html\" class=\"d-block\">Anas Bettouzia</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-plus\"></i>
              <p>
                Gestion Produits
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-plus nav-icon\"></i>
                  <p>List Produits</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-plus\"></i>
              <p>
                Gestion Commande
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backc");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-plus nav-icon\"></i>
                  <p>List Commandes</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h4>Liste des Commandes</h4>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">List Des Commandes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <section class=\"content\">

<!-- Default box -->
              
                <div class=\"card bg-light\">
                    <div class=\"card-header text-muted border-bottom-0\">
                        Commande
                    </div>
                      <table class=\"table table-striped-columns\">
                        <thead>
                          <tr>
                            <th>Address</th>
                            <th>Paiement</th>
                            <th>Code Postal</th>
                            <th>Numero Tel</th>
                            <th>Nom Entreprise</th>
                            <th>Prix Total de la commande</th>
                                <th>Liste des Produits</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 159
            echo "                          <tr>
                                    <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "adresse", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
                                    <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 161), "html", null, true);
            echo "</td>
                                    <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "codepostal", [], "any", false, false, false, 162), "html", null, true);
            echo "</td>
                                    <td>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "numero", [], "any", false, false, false, 163), "html", null, true);
            echo "</td>
                                    <td>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "getNomEntreprise", [], "any", false, false, false, 164), "html", null, true);
            echo "</td>
                                    <td>";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "prixTotal", [], "any", false, false, false, 165), "html", null, true);
            echo "</td>
                                    <td>
                                            ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["commande"], "produits", [], "any", false, false, false, 167));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 168
                echo "                                            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 168), "html", null, true);
                echo "</li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                                        </td>
                                        <td>
                                        <a style=\"color: red;\" href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i> Supprimer</a>
                                    </td>
                                </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                        </tbody>
                      </table>
      </div>
      <!-- /.card -->
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class=\"main-footer\">
    <div class=\"float-right d-none d-sm-block\">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "commande/backcommande.html.twig";
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
        return array (  298 => 176,  288 => 172,  284 => 170,  275 => 168,  271 => 167,  266 => 165,  262 => 164,  258 => 163,  254 => 162,  250 => 161,  246 => 160,  243 => 159,  239 => 158,  181 => 103,  161 => 86,  79 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block body %}

            <link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/fullcalendar/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">
  
<!-- Site wrapper -->
<div class=\"wrapper\">
  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Navbar Search -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
          <i class=\"fas fa-search\"></i>
        </a>
        <div class=\"navbar-search-block\">
          <form class=\"form-inline\">
            <div class=\"input-group input-group-sm\">
              <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-navbar\" type=\"submit\">
                  <i class=\"fas fa-search\"></i>
                </button>
                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                  <i class=\"fas fa-times\"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
          <i class=\"fas fa-expand-arrows-alt\"></i>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
          <i class=\"fas fa-th-large\"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"../../index.html\" class=\"d-block\">Anas Bettouzia</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-plus\"></i>
              <p>
                Gestion Produits
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{path('app_back')}}\" class=\"nav-link\">
                  <i class=\"far fa-plus nav-icon\"></i>
                  <p>List Produits</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-plus\"></i>
              <p>
                Gestion Commande
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{path('app_backc')}}\" class=\"nav-link\">
                  <i class=\"far fa-plus nav-icon\"></i>
                  <p>List Commandes</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h4>Liste des Commandes</h4>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">List Des Commandes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <section class=\"content\">

<!-- Default box -->
              
                <div class=\"card bg-light\">
                    <div class=\"card-header text-muted border-bottom-0\">
                        Commande
                    </div>
                      <table class=\"table table-striped-columns\">
                        <thead>
                          <tr>
                            <th>Address</th>
                            <th>Paiement</th>
                            <th>Code Postal</th>
                            <th>Numero Tel</th>
                            <th>Nom Entreprise</th>
                            <th>Prix Total de la commande</th>
                                <th>Liste des Produits</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        {% for commande in commandes %}
                          <tr>
                                    <td>{{ commande.adresse }}</td>
                                    <td>{{ commande.paiement }}</td>
                                    <td>{{ commande.codepostal }}</td>
                                    <td>{{ commande.numero }}</td>
                                    <td>{{ commande.getNomEntreprise }}</td>
                                    <td>{{ commande.prixTotal }}</td>
                                    <td>
                                            {% for produit in commande.produits %}
                                            <li>{{ produit.nom }}</li>
                                            {% endfor %}
                                        </td>
                                        <td>
                                        <a style=\"color: red;\" href=\"{{ path('app_commande_delete', {'id': commande.id}) }}\"><i class=\"fas fa-trash\"></i> Supprimer</a>
                                    </td>
                                </tr>
                          {% endfor %}
                        </tbody>
                      </table>
      </div>
      <!-- /.card -->
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class=\"main-footer\">
    <div class=\"float-right d-none d-sm-block\">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
{% endblock %}


", "commande/backcommande.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\commande\\backcommande.html.twig");
    }
}
