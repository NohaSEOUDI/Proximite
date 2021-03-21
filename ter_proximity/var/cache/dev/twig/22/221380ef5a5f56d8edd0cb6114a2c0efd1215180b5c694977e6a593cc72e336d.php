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

/* pins/politique.html.twig */
class __TwigTemplate_9e597a5561d630d6dc8a5188080e417bd74374be89b847339f312394b0027827 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/politique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/politique.html.twig"));

        // line 1
        echo " <h3>Veuillez choisir votre politique </h3>
    <div class=\"form-group\"><!--debut-->
      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\" checked=\"\">
        <label class=\"custom-control-label\" for=\"customRadio1\">Pas de possibilité d'annulation une fois le client a réservé</label>
      </div>
      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">
        <label class=\"custom-control-label\" for=\"customRadio2\">Nécessite de payement d'un acompte pour toute réservation</label>
      </div>

      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio3\" name=\"customRadio\" class=\"custom-control-input\">
        <label class=\"custom-control-label\" for=\"customRadio3\">Possibilité de modification</label>
          <div class=\"form-check\">
          
           <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked=\"\">
           <label class=\"form-check-label\">Avec frais</label>
         </div>
      </div>
    </div><!--Fin-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pins/politique.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <h3>Veuillez choisir votre politique </h3>
    <div class=\"form-group\"><!--debut-->
      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\" checked=\"\">
        <label class=\"custom-control-label\" for=\"customRadio1\">Pas de possibilité d'annulation une fois le client a réservé</label>
      </div>
      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">
        <label class=\"custom-control-label\" for=\"customRadio2\">Nécessite de payement d'un acompte pour toute réservation</label>
      </div>

      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio3\" name=\"customRadio\" class=\"custom-control-input\">
        <label class=\"custom-control-label\" for=\"customRadio3\">Possibilité de modification</label>
          <div class=\"form-check\">
          
           <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked=\"\">
           <label class=\"form-check-label\">Avec frais</label>
         </div>
      </div>
    </div><!--Fin-->", "pins/politique.html.twig", "/home/noisette/L3_20-21/S6/ter-l3-proximite/ter_proximity/templates/pins/politique.html.twig");
    }
}
