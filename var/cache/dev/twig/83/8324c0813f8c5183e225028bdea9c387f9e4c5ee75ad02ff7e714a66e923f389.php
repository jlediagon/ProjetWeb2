<?php

/* @GSEBMain/Accueil/accueil.html.twig */
class __TwigTemplate_09511133b6d05ee15d670a8f59a73afcc52da4c59bc910aa76422ef8e961c2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@GSEBMain/layout.html.twig", "@GSEBMain/Accueil/accueil.html.twig", 3);
        $this->blocks = array(
            'bodyTitle' => array($this, 'block_bodyTitle'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBMain/Accueil/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GSEBMain/Accueil/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_bodyTitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyTitle"));

        // line 5
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"card-deck\">
      <!-- Card 1 : première option : Ajouter une demande -->

      <div class=\"card\" style=\"width: 18rem;\">
        <img class=\"card-img-top\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Créer une demande</h5>
          <p class=\"card-text\">Créer une nouvelle demande d'ajout d'un équipement dans un datacenter</p>
          <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_main_homeaction", array("action" => "add"));
        echo "\" class=\"btn btn-primary\">Créer</a>
        </div>
      </div>

      <!-- Card 2 : Deuxième option : Editer une demande -->

      <div class=\"card\" style=\"width: 18rem;\">
        <img class=\"card-img-top\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/edit.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Modifier une demande</h5>
          <p class=\"card-text\">Modifier vos demandes en cours</p>
          <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_main_homeaction", array("action" => "edit"));
        echo "\" class=\"btn btn-primary\">Modifier</a>
        </div>
      </div>  
      
      <!-- Card 3 : Troisième option : Supprimer une demande -->

      <div class=\"card\" style=\"width: 18rem;\">
        <img class=\"card-img-top\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Supprimer une demande</h5>
          <p class=\"card-text\">Supprimer une de vos demandes en cours</p>
          <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gseb_main_homeaction", array("action" => "delete"));
        echo "\" class=\"btn btn-primary\">Supprimer</a>
        </div>
      </div>  
    </div>  


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GSEBMain/Accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  109 => 33,  99 => 26,  92 => 22,  82 => 15,  75 => 11,  69 => 7,  60 => 6,  50 => 5,  41 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/GSEB/MainBundle/Resources/views/Action/accueil.html.twig #}

{% extends \"@GSEBMain/layout.html.twig\" %}
{% block bodyTitle %}
    {% endblock %}
    {% block body %}
    <div class=\"card-deck\">
      <!-- Card 1 : première option : Ajouter une demande -->

      <div class=\"card\" style=\"width: 18rem;\">
        <img class=\"card-img-top\" src=\"{{ asset ('images/add.png') }}\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Créer une demande</h5>
          <p class=\"card-text\">Créer une nouvelle demande d'ajout d'un équipement dans un datacenter</p>
          <a href=\"{{ path('gseb_main_homeaction', {'action': 'add' } ) }}\" class=\"btn btn-primary\">Créer</a>
        </div>
      </div>

      <!-- Card 2 : Deuxième option : Editer une demande -->

      <div class=\"card\" style=\"width: 18rem;\">
        <img class=\"card-img-top\" src=\"{{ asset ('images/edit.png') }}\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Modifier une demande</h5>
          <p class=\"card-text\">Modifier vos demandes en cours</p>
          <a href=\"{{ path('gseb_main_homeaction', {'action': 'edit' } ) }}\" class=\"btn btn-primary\">Modifier</a>
        </div>
      </div>  
      
      <!-- Card 3 : Troisième option : Supprimer une demande -->

      <div class=\"card\" style=\"width: 18rem;\">
        <img class=\"card-img-top\" src=\"{{ asset ('images/delete.png') }}\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Supprimer une demande</h5>
          <p class=\"card-text\">Supprimer une de vos demandes en cours</p>
          <a href=\"{{ path('gseb_main_homeaction', {'action': 'delete' } ) }}\" class=\"btn btn-primary\">Supprimer</a>
        </div>
      </div>  
    </div>  


    {% endblock %}", "@GSEBMain/Accueil/accueil.html.twig", "/var/www/html/FormdGseb/src/GSEB/MainBundle/Resources/views/Accueil/accueil.html.twig");
    }
}
