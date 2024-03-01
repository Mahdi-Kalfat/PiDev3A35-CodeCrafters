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

/* produit/back.html.twig */
class __TwigTemplate_0ed5780be08af51b950bd957a3e8a211 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/back.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "produit/back.html.twig", 1);
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
        // line 85
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
        // line 102
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
            <h4>Liste des produits</h4>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">List Des Produits</li>
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
                        Produit
                    </div>
                      <table class=\"table table-striped-columns\">
                        <thead>
                          <tr>
                            <th>Nom</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Marque</th>
                            <th>Etat</th>
                            <th>Type</th>
                            <th>Taille</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 159
            echo "    <tr>
        <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
        <td>
            <div class=\"col-6 text-center\">
                ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 163)) {
                // line 164
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imgproduit/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 164))), "html", null, true);
                echo "\" alt=\"user-avatar\" class=\"img-circle img-fluid mx-auto\" style=\"width: 200px;\">
                ";
            }
            // line 166
            echo "            </div>
        </td>
        <td>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 168), "html", null, true);
            echo "</td>
        <td>";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 169), "html", null, true);
            echo "</td>
        <td>";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "marque", [], "any", false, false, false, 170), "html", null, true);
            echo "</td>
        <td>";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "etat", [], "any", false, false, false, 171), "html", null, true);
            echo "</td>
        <td>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", [], "any", false, false, false, 172), "html", null, true);
            echo "</td>
        <td>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "taille", [], "any", false, false, false, 173), "html", null, true);
            echo "</td>
        <td>
            <a style=\"color: green;\" href=\"\">Confirmer</a> |
            <a style=\"color: red;\" href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 176)]), "html", null, true);
            echo "\">Refuser</a>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "</tbody>
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
        return "produit/back.html.twig";
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
        return array (  300 => 180,  290 => 176,  284 => 173,  280 => 172,  276 => 171,  272 => 170,  268 => 169,  264 => 168,  260 => 166,  254 => 164,  252 => 163,  246 => 160,  243 => 159,  239 => 158,  180 => 102,  160 => 85,  79 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
            <h4>Liste des produits</h4>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">List Des Produits</li>
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
                        Produit
                    </div>
                      <table class=\"table table-striped-columns\">
                        <thead>
                          <tr>
                            <th>Nom</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Marque</th>
                            <th>Etat</th>
                            <th>Type</th>
                            <th>Taille</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
    {% for produit in produits %}
    <tr>
        <td>{{ produit.nom }}</td>
        <td>
            <div class=\"col-6 text-center\">
                {% if produit.image %}
                <img src=\"{{ asset('imgproduit/' ~ produit.image) }}\" alt=\"user-avatar\" class=\"img-circle img-fluid mx-auto\" style=\"width: 200px;\">
                {% endif %}
            </div>
        </td>
        <td>{{ produit.description }}</td>
        <td>{{ produit.prix }}</td>
        <td>{{ produit.marque }}</td>
        <td>{{ produit.etat }}</td>
        <td>{{ produit.type }}</td>
        <td>{{ produit.taille }}</td>
        <td>
            <a style=\"color: green;\" href=\"\">Confirmer</a> |
            <a style=\"color: red;\" href=\"{{ path('app_produit_delete', {'id': produit.id}) }}\">Refuser</a>
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


", "produit/back.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\produit\\back.html.twig");
    }
}
