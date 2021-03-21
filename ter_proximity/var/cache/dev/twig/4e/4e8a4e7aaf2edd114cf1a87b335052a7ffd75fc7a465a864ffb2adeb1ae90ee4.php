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

/* pins/addfournisseur.html.twig */
class __TwigTemplate_18d82e2533b75a9d7b2f3a1a904a287f6c894b1292ecaec4d451d12f677cce44 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/addfournisseur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pins/addfournisseur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pins/addfournisseur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h2>Inscrivez-vous pour publier votre annonce.</h2>
</br>
     <div class=\"form-group col-lg-6\">
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 7, $this->source); })()), 'form_start');
        // line 8
        echo "     ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'row', ["attr" => ["placeholder" => "votre nom"]]);
        echo "
     ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 9, $this->source); })()), "prenom", [], "any", false, false, false, 9), 'row', ["attr" => ["placeholder" => "votre prenom"]]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), 'row', ["attr" => ["placeholder" => "votre email"]]);
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 11, $this->source); })()), "password", [], "any", false, false, false, 11), 'row', ["attr" => ["placeholder" => "votre mot de passe"]]);
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 12, $this->source); })()), "politique", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "votre politique"]]);
        echo "
  
    </div>
    
    <!--div class=\"form-group col-lg-6\">
      <label for=\"\">Confirmation du mot de passe</label>
      <input type=\"password\" class=\"form-control\" id=\"\" placeholder=\"confirmation du mot de passe\">
    </div-->
    
    <button type=\"submit\" id=\"suite\" class=\"btn btn-primary\">Enregistrer et passer à la suite</button>
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
    
 <SPAN style=\"position: absolute; top: 10px; left: 55%;\">
 <img src=\"../uploads/e0ce35c7af4fc7e17fcb3e2b33abc54e.jpg\" width=\"550\" height=\"680\" alt=\"\" class=\"w-full\" data-aos=\"fade-up\" data-aos-delay=\"0\">
</SPAN>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pins/addfournisseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  92 => 12,  88 => 11,  84 => 10,  80 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <h2>Inscrivez-vous pour publier votre annonce.</h2>
</br>
     <div class=\"form-group col-lg-6\">
    {{ form_start(formFournisseur) }}{# balise ouvrante du form avec la methode et l'action #}
     {{ form_row(formFournisseur.nom,{'attr':{'placeholder': \"votre nom\"}}) }}
     {{ form_row(formFournisseur.prenom,{'attr':{'placeholder': \"votre prenom\"}}) }}
    {{ form_row(formFournisseur.email,{'attr':{'placeholder': \"votre email\"}}) }}
    {{ form_row(formFournisseur.password,{'attr':{'placeholder': \"votre mot de passe\"}}) }}
    {{ form_row(formFournisseur.politique,{'attr':{'placeholder': \"votre politique\"}}) }}
  
    </div>
    
    <!--div class=\"form-group col-lg-6\">
      <label for=\"\">Confirmation du mot de passe</label>
      <input type=\"password\" class=\"form-control\" id=\"\" placeholder=\"confirmation du mot de passe\">
    </div-->
    
    <button type=\"submit\" id=\"suite\" class=\"btn btn-primary\">Enregistrer et passer à la suite</button>
    {{ form_end(formFournisseur) }}
    
 <SPAN style=\"position: absolute; top: 10px; left: 55%;\">
 <img src=\"../uploads/e0ce35c7af4fc7e17fcb3e2b33abc54e.jpg\" width=\"550\" height=\"680\" alt=\"\" class=\"w-full\" data-aos=\"fade-up\" data-aos-delay=\"0\">
</SPAN>
    {#{{form(formFournisseur)}} pour afficher le formulaire en entier #}
{% endblock %}", "pins/addfournisseur.html.twig", "/home/noisette/L3_20-21/S6/ter-l3-proximite/ter_proximity/templates/pins/addfournisseur.html.twig");
    }
}
