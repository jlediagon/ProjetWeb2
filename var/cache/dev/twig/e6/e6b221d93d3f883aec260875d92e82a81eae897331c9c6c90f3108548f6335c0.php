<?php

/* @GSEBAdminHistory/History/listDemandes.html.twig */
class __TwigTemplate_4933ef2726f50acd9ca09919b5d86a3d27ad16709159c5c2fe1c55413fe47fe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GSEBMain/layout.html.twig", "@GSEBAdminHistory/History/listDemandes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GSEBMain/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBAdminHistory/History/listDemandes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBAdminHistory/History/listDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2>Liste des Demandes effectués </h2>

    <ul class=\"list-group\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listDemandes"]) ? $context["listDemandes"] : $this->getContext($context, "listDemandes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 9
            echo "            ";
            if (($this->getAttribute($context["demande"], "etat", array()) == 1)) {
                // line 10
                echo "                <li class=\"list-group\" >
                    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_user_history_view", array("id_demande" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "sujet", array()), "html", null, true);
                echo "
                    </a>
                    par ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "prenom", array()), "html", null, true);
                echo ",
                    le ";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                        <button type=\"button\" class=\"btn btn-success\" type=\"button\" >Demande validée</button>
                </li>
            ";
            }
            // line 19
            echo "
            ";
            // line 20
            if (($this->getAttribute($context["demande"], "etat", array()) == 2)) {
                // line 21
                echo "                <li class=\"list-group\" >
                    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_user_history_view", array("id_demande" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "sujet", array()), "html", null, true);
                echo "
                    </a>
                    par ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "prenom", array()), "html", null, true);
                echo ",
                    le ";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                        <button type=\"button\" class=\"btn btn-warning\" type=\"button\" >En cours de validation</button>

                </li>
            ";
            }
            // line 31
            echo "            ";
            if (($this->getAttribute($context["demande"], "etat", array()) == 3)) {
                // line 32
                echo "                <li class=\"list-group\" >
                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_user_history_view", array("id_demande" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "sujet", array()), "html", null, true);
                echo "
                    </a>
                    par ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["demande"], "contact", array()), "prenom", array()), "html", null, true);
                echo ",
                    le ";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                    <button type=\"button\" class=\"btn btn-danger\" type=\"button\" >Demande non validée</button>
                </li>
            ";
            }
            // line 41
            echo "
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            <li class=\"list-group\">Pas (encore !) de demandes </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GSEBAdminHistory/History/listDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 45,  153 => 43,  147 => 41,  140 => 37,  134 => 36,  129 => 34,  125 => 33,  122 => 32,  119 => 31,  111 => 26,  105 => 25,  100 => 23,  96 => 22,  93 => 21,  91 => 20,  88 => 19,  81 => 15,  75 => 14,  70 => 12,  66 => 11,  63 => 10,  60 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@GSEBMain/layout.html.twig\" %}

{% block body %}

    <h2>Liste des Demandes effectués </h2>

    <ul class=\"list-group\">
        {% for demande in listDemandes %}
            {% if demande.etat == 1 %}
                <li class=\"list-group\" >
                    <a href=\"{{ path('gseb_user_history_view', {'id_demande': demande.id}) }}\">
                    {{ demande.sujet }}
                    </a>
                    par {{ demande.contact.nom }} {{ demande.contact.prenom }},
                    le {{ demande.date|date('d/m/Y') }}
                        <button type=\"button\" class=\"btn btn-success\" type=\"button\" >Demande validée</button>
                </li>
            {% endif %}

            {% if demande.etat == 2 %}
                <li class=\"list-group\" >
                    <a href=\"{{ path('gseb_user_history_view', {'id_demande': demande.id}) }}\">
                    {{ demande.sujet }}
                    </a>
                    par {{ demande.contact.nom }} {{ demande.contact.prenom }},
                    le {{ demande.date|date('d/m/Y') }}
                        <button type=\"button\" class=\"btn btn-warning\" type=\"button\" >En cours de validation</button>

                </li>
            {% endif %}
            {% if demande.etat == 3 %}
                <li class=\"list-group\" >
                    <a href=\"{{ path('gseb_user_history_view', {'id_demande': demande.id}) }}\">
                    {{ demande.sujet }}
                    </a>
                    par {{ demande.contact.nom }} {{ demande.contact.prenom }},
                    le {{ demande.date|date('d/m/Y') }}
                    <button type=\"button\" class=\"btn btn-danger\" type=\"button\" >Demande non validée</button>
                </li>
            {% endif %}

            {% else %}
            <li class=\"list-group\">Pas (encore !) de demandes </li>
        {% endfor %}
  </ul>
{% endblock %}

", "@GSEBAdminHistory/History/listDemandes.html.twig", "/var/www/html/FormdGseb/src/GSEB/AdminHistoryBundle/Resources/views/History/listDemandes.html.twig");
    }
}
