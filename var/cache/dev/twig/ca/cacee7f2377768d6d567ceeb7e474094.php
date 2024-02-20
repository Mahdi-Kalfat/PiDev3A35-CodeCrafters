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

/* baseback.html.twig */
class __TwigTemplate_dcbb2ed2405372d4ace1babca845e29b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
  <html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Wetek </title>
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "\t</head>
\t<body>
\t\t";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "   
\t</body>  
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fullcalendar/main.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "\t\t\t\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- jQuery UI 1.11.4 -->
\t\t\t\t\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t\t\t\t\t<!-- Bootstrap 4 -->
\t\t\t\t\t\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- ChartJS -->
\t\t\t\t\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- Sparkline -->
\t\t\t\t\t\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- JQVMap -->
\t\t\t\t\t\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- jQuery Knob Chart -->
\t\t\t\t\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- daterangepicker -->
\t\t\t\t\t\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- Tempusdominus Bootstrap 4 -->
\t\t\t\t\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- Summernote -->
\t\t\t\t\t\t<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- overlayScrollbars -->
\t\t\t\t\t\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- AdminLTE App -->
\t\t\t\t\t\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- AdminLTE for demo purposes -->
\t\t\t\t\t\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
\t\t\t\t\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  213 => 46,  208 => 44,  203 => 42,  198 => 40,  193 => 38,  188 => 36,  183 => 34,  179 => 33,  174 => 31,  169 => 29,  165 => 28,  160 => 26,  155 => 24,  150 => 22,  144 => 19,  138 => 17,  128 => 16,  110 => 15,  98 => 11,  94 => 10,  90 => 9,  87 => 8,  77 => 7,  65 => 47,  62 => 16,  60 => 15,  56 => 13,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
  <html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Wetek </title>
\t\t{% block stylesheets %}
            <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('plugins/fullcalendar/main.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('dist/css/adminlte.min.css') }}\">
\t\t{% endblock %}
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t\t{% block javascripts %}
\t\t\t\t\t\t<script src=\"{{ asset('plugins/jquery/jquery.min.js') }}\"></script>
\t\t\t\t\t\t<!-- jQuery UI 1.11.4 -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
\t\t\t\t\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t\t\t\t\t<!-- Bootstrap 4 -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t\t\t\t\t\t<!-- ChartJS -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/chart.js/Chart.min.js') }}\"></script>
\t\t\t\t\t\t<!-- Sparkline -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/sparklines/sparkline.js') }}\"></script>
\t\t\t\t\t\t<!-- JQVMap -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}\"></script>
\t\t\t\t\t\t<script src=\"{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}\"></script>
\t\t\t\t\t\t<!-- jQuery Knob Chart -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
\t\t\t\t\t\t<!-- daterangepicker -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/moment/moment.min.js') }}\"></script>
\t\t\t\t\t\t<script src=\"{{ asset('plugins/daterangepicker/daterangepicker.js') }}\"></script>
\t\t\t\t\t\t<!-- Tempusdominus Bootstrap 4 -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
\t\t\t\t\t\t<!-- Summernote -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/summernote/summernote-bs4.min.js') }}\"></script>
\t\t\t\t\t\t<!-- overlayScrollbars -->
\t\t\t\t\t\t<script src=\"{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
\t\t\t\t\t\t<!-- AdminLTE App -->
\t\t\t\t\t\t<script src=\"{{ asset('dist/js/adminlte.js') }}\"></script>
\t\t\t\t\t\t<!-- AdminLTE for demo purposes -->
\t\t\t\t\t\t<script src=\"{{ asset('dist/js/demo.js') }}\"></script>
\t\t\t\t\t\t<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
\t\t\t\t\t\t<script src=\"{{ asset('dist/js/pages/dashboard.js') }}\"></script>
\t\t\t{% endblock %}   
\t</body>  
</html>", "baseback.html.twig", "C:\\Users\\MSII\\Desktop\\projet_pidev\\projet_wetek\\templates\\baseback.html.twig");
    }
}
