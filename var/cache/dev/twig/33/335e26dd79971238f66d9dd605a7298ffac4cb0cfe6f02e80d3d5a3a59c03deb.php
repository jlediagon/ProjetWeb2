<?php

/* @GSEBDemande/Add/listAttributs.html.twig */
class __TwigTemplate_6f72f8f9f16c6c242ef4380b428ce5e19ace9eff14cb71b8301451bad79df244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBMain/layout.html.twig", "@GSEBDemande/Add/listAttributs.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sebplatform_body' => array($this, 'block_sebplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GSEBMain/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBDemande/Add/listAttributs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBDemande/Add/listAttributs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Selection du type d'objet 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_sebplatform_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sebplatform_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sebplatform_body"));

        // line 10
        echo "Votre demande de création a bien été prise en compte voici un récapitulatif :<br>
<h3>Sujet de la demande :</h3> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "sujet", array()), "html", null, true);
        echo " <br>
<h3>Nom de l'équipement a créer : </h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "object", array()), "name", array()), "html", null, true);
        echo "<br>
<h3>Type de l'objet : </h3>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nameObjtype"]) ? $context["nameObjtype"] : $this->getContext($context, "nameObjtype")), "html", null, true);
        echo " <br> <br>
<h3>A présent, veuillez saisir les attributs de votre équipement :</h3> 
Si vous n'êtes pas en présence de l'information, saisissez : none <br><br>
    <form  action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_demande_attributs", array("id_demande" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : $this->getContext($context, "demande")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" >
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")));
        foreach ($context['_seq'] as $context["_key"] => $context["carac"]) {
            // line 18
            echo "        <div class=\"form-group\">
          <label for=\"Attribut\"> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "name", array()), "html", null, true);
            echo " </label>
          ";
            // line 20
            if (($this->getAttribute($context["carac"], "type", array()) == "uint")) {
                // line 21
                echo "            <input type=\"number\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "id", array()), "html", null, true);
                echo "\" class=\"form-control\"  placeholder=\"Renseigner un entier\">
          ";
            } elseif (($this->getAttribute(            // line 22
$context["carac"], "type", array()) == "date")) {
                // line 23
                echo "            <input type=\"date\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "id", array()), "html", null, true);
                echo "\" class=\"form-control\"  placeholder=\"Renseigner la date, au format YYYY-MM-DD\">
          ";
            } elseif (($this->getAttribute(            // line 24
$context["carac"], "type", array()) == "float")) {
                // line 25
                echo "            <input type=\"number\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "id", array()), "html", null, true);
                echo "\" class=\"form-control\"  placeholder=\"Renseigner un nombre décimal (au format 0.00)\">
          ";
            } else {
                // line 27
                echo "            <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["carac"], "id", array()), "html", null, true);
                echo "\" class=\"form-control\"  placeholder=\"Renseigner une chaîne de caractère\">
          ";
            }
            // line 29
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    <input type=\"submit\" value= \"Valider\" class=\"form-control\" >
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GSEBDemande/Add/listAttributs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 31,  130 => 29,  124 => 27,  118 => 25,  116 => 24,  111 => 23,  109 => 22,  104 => 21,  102 => 20,  98 => 19,  95 => 18,  91 => 17,  87 => 16,  81 => 13,  77 => 12,  73 => 11,  70 => 10,  61 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/GSEB/PlatformBundle/Resources/views/Action/modif.html.twig #}

{% extends \"@GSEBMain/layout.html.twig\" %}

{% block title %}
  Selection du type d'objet 
{% endblock %}

{% block sebplatform_body %}
Votre demande de création a bien été prise en compte voici un récapitulatif :<br>
<h3>Sujet de la demande :</h3> {{demande.sujet}} <br>
<h3>Nom de l'équipement a créer : </h3>{{demande.object.name}}<br>
<h3>Type de l'objet : </h3>{{ nameObjtype }} <br> <br>
<h3>A présent, veuillez saisir les attributs de votre équipement :</h3> 
Si vous n'êtes pas en présence de l'information, saisissez : none <br><br>
    <form  action=\"{{ path('gseb_demande_attributs', {'id_demande': demande.id}) }}\" method=\"post\" >
    {% for carac in resultat %}
        <div class=\"form-group\">
          <label for=\"Attribut\"> {{ carac.name }} </label>
          {% if carac.type == \"uint\" %}
            <input type=\"number\" name=\"{{ carac.id }}\" class=\"form-control\"  placeholder=\"Renseigner un entier\">
          {% elseif carac.type == 'date' %}
            <input type=\"date\" name=\"{{ carac.id }}\" class=\"form-control\"  placeholder=\"Renseigner la date, au format YYYY-MM-DD\">
          {% elseif carac.type == 'float' %}
            <input type=\"number\" name=\"{{ carac.id }}\" class=\"form-control\"  placeholder=\"Renseigner un nombre décimal (au format 0.00)\">
          {% else %}
            <input type=\"text\" name=\"{{ carac.id }}\" class=\"form-control\"  placeholder=\"Renseigner une chaîne de caractère\">
          {% endif %}
        </div>
    {% endfor %}
    <input type=\"submit\" value= \"Valider\" class=\"form-control\" >
    </form>
{% endblock %}", "@GSEBDemande/Add/listAttributs.html.twig", "/var/www/html/FormdGseb/src/GSEB/DemandeBundle/Resources/views/Add/listAttributs.html.twig");
    }
}
