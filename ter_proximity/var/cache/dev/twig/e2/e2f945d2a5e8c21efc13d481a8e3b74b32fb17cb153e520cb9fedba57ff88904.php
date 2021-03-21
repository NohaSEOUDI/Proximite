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

/* pins/prise_rdv/indexRdv.html.twig */
class __TwigTemplate_4c734f85ee3aa3c14deb70330a994469437ce31d6b6c3e4dc5b6611e57aa570d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/prise_rdv/indexRdv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/prise_rdv/indexRdv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pins/prise_rdv/indexRdv.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PriseRdvController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 ";
        // line 7
        echo twig_include($this->env, $context, "Layouts/partials/_nav.html.twig");
        echo "

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .container  { justify-content: center; flex-wrap: wrap; display: inline-flex;  grid-gap: 2px 2em;}
</style>

    

   </br>
   </br>

 <div class=\"container mb-3 form-check\">

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reservations"]) || array_key_exists("Reservations", $context) ? $context["Reservations"] : (function () { throw new RuntimeError('Variable "Reservations" does not exist.', 22, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 23
            echo "<div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Rdv numero   ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24), "html", null, true);
            echo " </div>
  <div class=\"card-body\">
      id Reservation: ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</br>
      id client :";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "client", [], "any", false, false, false, 27), "html", null, true);
            echo "</br>
      validee par fournisseur : ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "valideeParFournisseur", [], "any", false, false, false, 28), "html", null, true);
            echo "</br>
      id Type de survice : ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "service", [], "any", false, false, false, 29), "html", null, true);
            echo "</br>
      id fournisseur : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "fournisseur", [], "any", false, false, false, 30), "html", null, true);
            echo "</br>
      Frais: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "frais", [], "any", false, false, false, 31), "html", null, true);
            echo "</br>


      <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rdv_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
      
     


  <a href=\"#\" onclick=\"event.preventDefault(); confirm('Êtes-vous sûr d\\'annuler ce RDV?') && document.getElementById('js-pin-delete-form').submit();\" class=\"btn btn-primary\">Annuler</a>

  <form id=\"js-pin-delete-form\" action=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rdv_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" method=\"post\" style=\"display: none;\">   
  <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
  </form> 

  </div>
</div>
</br>

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pins/prise_rdv/indexRdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 50,  170 => 41,  160 => 34,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  129 => 24,  126 => 23,  109 => 22,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PriseRdvController!{% endblock %}

{% block body %}

 {{ include('Layouts/partials/_nav.html.twig') }}

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .container  { justify-content: center; flex-wrap: wrap; display: inline-flex;  grid-gap: 2px 2em;}
</style>

    

   </br>
   </br>

 <div class=\"container mb-3 form-check\">

{% for r in Reservations %}
<div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Rdv numero   {{ loop.index }} </div>
  <div class=\"card-body\">
      id Reservation: {{ r.id }}</br>
      id client :{{ r.client }}</br>
      validee par fournisseur : {{ r.valideeParFournisseur }}</br>
      id Type de survice : {{ r.service }}</br>
      id fournisseur : {{ r.fournisseur}}</br>
      Frais: {{ r.frais}}</br>


      <a href=\"{{ path('app_rdv_edit', {id: r.id}) }}\" class=\"btn btn-primary\">Modifier</a>
      
     


  <a href=\"#\" onclick=\"event.preventDefault(); confirm('Êtes-vous sûr d\\'annuler ce RDV?') && document.getElementById('js-pin-delete-form').submit();\" class=\"btn btn-primary\">Annuler</a>

  <form id=\"js-pin-delete-form\" action=\"{{ path('app_rdv_delete', {id: r.id}) }}\" method=\"post\" style=\"display: none;\">   
  <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
  </form> 

  </div>
</div>
</br>

{% endfor %}
</div>
{% endblock %}
", "pins/prise_rdv/indexRdv.html.twig", "/home/noisette/L3_20-21/S6/ter-l3-proximite/ter_proximity/templates/pins/prise_rdv/indexRdv.html.twig");
    }
}
