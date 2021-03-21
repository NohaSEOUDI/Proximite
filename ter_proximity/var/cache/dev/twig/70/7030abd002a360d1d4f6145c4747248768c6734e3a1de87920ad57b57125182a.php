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

/* Layouts/partials/_nav.html.twig */
class __TwigTemplate_ef6ce1b905780a2916d42905e9f6f97bd2658932e85ab41eb950c604d8faa1b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layouts/partials/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Layouts/partials/_nav.html.twig"));

        // line 1
        echo "<header class=\"pt-195 pb-110 bg-light header_1\">
<nav  id='navigation' class=\"navbar navbar-expand-lg navbar-dark bg-primary\" style=\"background-color: #ff704d;\">
 

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Acceuil
          <span class=\"sr-only\">(current)</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Annonces</a>
      </li>
     ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rdv");
            echo "\">Mes RDV</a>
      </li>
      <li class=\"nav-item\">
         <a class=\"nav-link\" href=\"#\" onclick=\"event.preventDefault(); document.getElementById('js-logout-form').submit();\">Logout</a>

\t\t          <form id=\"js-logout-form\" action=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" method=\"POST\" style=\"display: none;\">
\t\t            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("logout"), "html", null, true);
            echo "\">
\t\t          </form>
      </li>

\t";
        } else {
            // line 28
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\"href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
        <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\" href=\"#\">Action</a>
          <a class=\"dropdown-item\" href=\"#\">Another action</a>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Separated link</a>
        </div>
      </li>
    </ul>
";
        }
        // line 46
        echo "  </div>
</nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Layouts/partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  96 => 32,  90 => 29,  87 => 28,  79 => 23,  75 => 22,  67 => 17,  64 => 16,  62 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"pt-195 pb-110 bg-light header_1\">
<nav  id='navigation' class=\"navbar navbar-expand-lg navbar-dark bg-primary\" style=\"background-color: #ff704d;\">
 

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Acceuil
          <span class=\"sr-only\">(current)</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Annonces</a>
      </li>
     {% if app.user %}
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_rdv') }}\">Mes RDV</a>
      </li>
      <li class=\"nav-item\">
         <a class=\"nav-link\" href=\"#\" onclick=\"event.preventDefault(); document.getElementById('js-logout-form').submit();\">Logout</a>

\t\t          <form id=\"js-logout-form\" action=\"{{ path('app_logout') }}\" method=\"POST\" style=\"display: none;\">
\t\t            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('logout') }}\">
\t\t          </form>
      </li>

\t{% else %}
      <li class=\"nav-item\">
        <a class=\"nav-link\"href=\"{{ path('app_register') }}\">Inscription</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
        <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\" href=\"#\">Action</a>
          <a class=\"dropdown-item\" href=\"#\">Another action</a>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Separated link</a>
        </div>
      </li>
    </ul>
{% endif %}
  </div>
</nav>
</header>", "Layouts/partials/_nav.html.twig", "/home/noisette/L3_20-21/S6/ter-l3-proximite/ter_proximity/templates/Layouts/partials/_nav.html.twig");
    }
}
