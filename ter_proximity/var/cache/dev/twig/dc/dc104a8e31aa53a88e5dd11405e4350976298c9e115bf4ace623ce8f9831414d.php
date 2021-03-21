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

/* pins/index.html.twig */
class __TwigTemplate_c149e6a67984940d752983406c92b17a5b79d60b5e8aa5c14fc58a04b864725f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\" >
\t\t<title>Project</title>

\t\t<!-- Bootstrap 4.5.2 CSS -->
\t\t <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\">
      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>

\t\t
\t\t<!-- FontAwesome CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
\t\t<!-- Startup CSS (Styles for all blocks) - Remove \".min\" if you would edit a css code -->
\t\t<link href=\"css/style.css\" rel=\"stylesheet\" />
\t
\t</head> 
\t<body>
\t\t<header class=\"pt-195 pb-110 bg-light header_1\">
\t\t<nav class=\"header_menu_1 pt-30 pb-30 mt-30\">
\t\t\t\t<div class=\"container px-xl-0\">
\t\t\t\t\t<div class=\"row justify-content-center align-items-center f-18 medium\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"link img_link\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"1200\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"link color-heading mx-15\">
\t\t\t\t\t\t\t\tAcceuil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link color-heading mx-15\">
\t\t\t\t\t\t\t\tAnnonces
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "\t\t\t\t <div class=\"col-lg-3\">
\t\t            <a class=\"btn sm action-1\" href=\"#\" onclick=\"event.preventDefault(); document.getElementById('js-logout-form').submit();\">Logout</a>
\t\t         </div>

\t\t          <form id=\"js-logout-form\" action=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" method=\"POST\" style=\"display: none;\">
\t\t            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("logout"), "html", null, true);
            echo "\">
\t\t          </form>

\t\t ";
        } else {
            // line 46
            echo "\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 d-flex justify-content-end align-items-center\" data-aos=\"fade-up\" data-aos-delay=\"1600\">
\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"link mr-20 color-heading\">
\t\t\t\t\t\t\t\tInscription 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn sm action-1\">
\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t";
        }
        // line 55
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
</nav>

\t\t
\t\t
\t\t\t<div class=\"container\">
\t\t
\t\t\t\t<h1 class=\"big text-center\" data-aos=\"fade-up\" data-aos-delay=\"0\">
\t\t\t\t\tClique Service Proximity
\t\t\t\t</h1>
\t\t\t\t<div class=\"mw-600 mx-auto mt-30 f-22 color-heading text-center text-adaptive\" data-aos=\"fade-up\" data-aos-delay=\"400\">
\t\t\t\t\tBesoin d'un plombier, Maçon, peintre, médecin  ou autre ? 
\t\t\t\t\t<br> Proximity vous fournit les prises de rendez-vous avec 
\t\t\t\t\t<br> les prestataires les plus qualifiés dans le domaine.
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-80 text-center buttons\" data-aos=\"fade-up\" data-aos-delay=\"800\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"\"  class=\"btn action-1 xl\">
\t\t\t\t\t\t\tRechercher un prestataire
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- Blog 1 -->
\t\t\t<section class=\"bg-light blog_1\">
\t\t\t\t<div class=\"container px-xl-0\">
\t\t\t\t\t 
\t\t\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-xl-5 d-flex justify-content-center\">
\t\t\t\t\t\t\t<img src=\"uploads/e0ce35c7af4fc7e17fcb3e2b33abc54e.jpg\" alt=\"\" class=\"w-full\" data-aos=\"fade-up\" data-aos-delay=\"0\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 pt-100 pb-100\">
\t\t\t\t\t\t\t<h3 class=\"mb-25\" data-aos=\"fade-up\" data-aos-delay=\"800\">
\t\t\t\t\t\t\t\tVous êtes un professionnel ? inscrivez-vous pour publier votre annonce.  
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"mb-70 color-heading f-18 text-adaptive\" data-aos=\"fade-up\" data-aos-delay=\"1200\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between\" data-aos=\"fade-up\" data-aos-delay=\"1600\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_fournisseur");
        echo "\" class=\"mb-4 mb-sm-0 btn action-1 f-16 ml-210 xl\">
\t\t\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Feature 1 -->
\t\t\t\t<section class=\"pt-105 pb-45 bg-light text-center feature_1\">
\t\t\t\t\t<div class=\"container px-xl-0\">
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-xl-10\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 mb-50\" data-aos=\"fade-up\" data-aos-delay=\"400\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-briefcase f-60 action-3\">
\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-20 mb-25 f-22 title\">
\t\t\t\t\t\t\t\t\t\t\tProfessionnels
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"color-heading text-adaptive\">
\t\t\t\t\t\t\t\t\t\t\tPlusieurs services offerts par des professionnels qualifiés dans un seul endroit.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 mb-50\" data-aos=\"fade-up\" data-aos-delay=\"800\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-compress-arrows-alt f-60 action-3\">
\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-20 mb-25 f-22 title\">
\t\t\t\t\t\t\t\t\t\t\tProximité
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"color-heading text-adaptive\">
\t\t\t\t\t\t\t\t\t\t\tMaçons, plombiers ou même médecins
\t\t\t\t\t\t\t\t\t\t\t<br> ils sont tous la proches de chez vous.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 mb-50\" data-aos=\"fade-up\" data-aos-delay=\"1200\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-desktop f-60 action-3\" data-aos=\"fade-up\" data-aos-delay=\"0\">
\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-20 mb-25 f-22 title\">
\t\t\t\t\t\t\t\t\t\t\tRapidité
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"color-heading text-adaptive\">
\t\t\t\t\t\t\t\t\t\t\tTrouvez du travail  ou recrutez un 
\t\t\t\t\t\t\t\t\t\t\t<br> prestataire en un click seulement.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js\" integrity=\"sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js\" integrity=\"sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG\" crossorigin=\"anonymous\"></script>
\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pins/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 95,  116 => 55,  108 => 50,  102 => 47,  99 => 46,  92 => 42,  88 => 41,  82 => 37,  80 => 36,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\" >
\t\t<title>Project</title>

\t\t<!-- Bootstrap 4.5.2 CSS -->
\t\t <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\">
      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>

\t\t
\t\t<!-- FontAwesome CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
\t\t<!-- Startup CSS (Styles for all blocks) - Remove \".min\" if you would edit a css code -->
\t\t<link href=\"css/style.css\" rel=\"stylesheet\" />
\t
\t</head> 
\t<body>
\t\t<header class=\"pt-195 pb-110 bg-light header_1\">
\t\t<nav class=\"header_menu_1 pt-30 pb-30 mt-30\">
\t\t\t\t<div class=\"container px-xl-0\">
\t\t\t\t\t<div class=\"row justify-content-center align-items-center f-18 medium\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"link img_link\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 text-center\" data-aos=\"fade-up\" data-aos-delay=\"1200\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"link color-heading mx-15\">
\t\t\t\t\t\t\t\tAcceuil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link color-heading mx-15\">
\t\t\t\t\t\t\t\tAnnonces
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t{% if app.user %}
\t\t\t\t <div class=\"col-lg-3\">
\t\t            <a class=\"btn sm action-1\" href=\"#\" onclick=\"event.preventDefault(); document.getElementById('js-logout-form').submit();\">Logout</a>
\t\t         </div>

\t\t          <form id=\"js-logout-form\" action=\"{{ path('app_logout') }}\" method=\"POST\" style=\"display: none;\">
\t\t            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('logout') }}\">
\t\t          </form>

\t\t {% else %}
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 d-flex justify-content-end align-items-center\" data-aos=\"fade-up\" data-aos-delay=\"1600\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\" class=\"link mr-20 color-heading\">
\t\t\t\t\t\t\t\tInscription 
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{path('app_login')}}\" class=\"btn sm action-1\">
\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
</nav>

\t\t
\t\t
\t\t\t<div class=\"container\">
\t\t
\t\t\t\t<h1 class=\"big text-center\" data-aos=\"fade-up\" data-aos-delay=\"0\">
\t\t\t\t\tClique Service Proximity
\t\t\t\t</h1>
\t\t\t\t<div class=\"mw-600 mx-auto mt-30 f-22 color-heading text-center text-adaptive\" data-aos=\"fade-up\" data-aos-delay=\"400\">
\t\t\t\t\tBesoin d'un plombier, Maçon, peintre, médecin  ou autre ? 
\t\t\t\t\t<br> Proximity vous fournit les prises de rendez-vous avec 
\t\t\t\t\t<br> les prestataires les plus qualifiés dans le domaine.
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-80 text-center buttons\" data-aos=\"fade-up\" data-aos-delay=\"800\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"\"  class=\"btn action-1 xl\">
\t\t\t\t\t\t\tRechercher un prestataire
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!-- Blog 1 -->
\t\t\t<section class=\"bg-light blog_1\">
\t\t\t\t<div class=\"container px-xl-0\">
\t\t\t\t\t 
\t\t\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-xl-5 d-flex justify-content-center\">
\t\t\t\t\t\t\t<img src=\"uploads/e0ce35c7af4fc7e17fcb3e2b33abc54e.jpg\" alt=\"\" class=\"w-full\" data-aos=\"fade-up\" data-aos-delay=\"0\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 pt-100 pb-100\">
\t\t\t\t\t\t\t<h3 class=\"mb-25\" data-aos=\"fade-up\" data-aos-delay=\"800\">
\t\t\t\t\t\t\t\tVous êtes un professionnel ? inscrivez-vous pour publier votre annonce.  
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"mb-70 color-heading f-18 text-adaptive\" data-aos=\"fade-up\" data-aos-delay=\"1200\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between\" data-aos=\"fade-up\" data-aos-delay=\"1600\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_add_fournisseur') }}\" class=\"mb-4 mb-sm-0 btn action-1 f-16 ml-210 xl\">
\t\t\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Feature 1 -->
\t\t\t\t<section class=\"pt-105 pb-45 bg-light text-center feature_1\">
\t\t\t\t\t<div class=\"container px-xl-0\">
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-xl-10\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 mb-50\" data-aos=\"fade-up\" data-aos-delay=\"400\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-briefcase f-60 action-3\">
\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-20 mb-25 f-22 title\">
\t\t\t\t\t\t\t\t\t\t\tProfessionnels
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"color-heading text-adaptive\">
\t\t\t\t\t\t\t\t\t\t\tPlusieurs services offerts par des professionnels qualifiés dans un seul endroit.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 mb-50\" data-aos=\"fade-up\" data-aos-delay=\"800\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-compress-arrows-alt f-60 action-3\">
\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-20 mb-25 f-22 title\">
\t\t\t\t\t\t\t\t\t\t\tProximité
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"color-heading text-adaptive\">
\t\t\t\t\t\t\t\t\t\t\tMaçons, plombiers ou même médecins
\t\t\t\t\t\t\t\t\t\t\t<br> ils sont tous la proches de chez vous.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 mb-50\" data-aos=\"fade-up\" data-aos-delay=\"1200\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-desktop f-60 action-3\" data-aos=\"fade-up\" data-aos-delay=\"0\">
\t\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-20 mb-25 f-22 title\">
\t\t\t\t\t\t\t\t\t\t\tRapidité
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"color-heading text-adaptive\">
\t\t\t\t\t\t\t\t\t\t\tTrouvez du travail  ou recrutez un 
\t\t\t\t\t\t\t\t\t\t\t<br> prestataire en un click seulement.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js\" integrity=\"sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js\" integrity=\"sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG\" crossorigin=\"anonymous\"></script>
\t</body>
</html>", "pins/index.html.twig", "/home/noisette/L3_20-21/S6/ter-l3-proximite/ter_proximity/templates/pins/index.html.twig");
    }
}
