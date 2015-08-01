<?php

/* UniversalBundle:Default:labo.html.twig */
class __TwigTemplate_b3d7d89393d43daf7c68706bd431bfda8b450b19985c59119e03c7c178b00266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "   
    
    <div class=\"row\">
         <div class=\"col-md-6\">
             <h3>Notre Labo</h3>
            <div style=\"color:#000000;\"
                 <p><strong>Mot du président</strong></p>
                <p><strong>« Ambitieux et modestes, nous nous impliquons avec détermination et bon sens dans l’amélioration continue du traitement des pathologies quotidiennes dans le monde.
                        Nous nous appuyons avant tout, sur notre énergie et sur notre engagement individuel et collectif fondé sur l’intégration de nombreuses cultures et disciplines, cela dans un esprit de confiance et d’entraide. »</strong>
                </p>

            </div>
        </div>

<div class=\"col-md-6\">
            ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fb75870_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fb75870_0") : $this->env->getExtension('assets')->getAssetUrl("/images/president_president_1.jpg");
            // line 20
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"president\" style=\"width:400px; height: 200px \"/>
            ";
        } else {
            // asset "fb75870"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fb75870") : $this->env->getExtension('assets')->getAssetUrl("/images/president.jpg");
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"president\" style=\"width:400px; height: 200px \"/>
            ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h3>L'entreprise</h3>
            <p>Créé en 2009, le laboratoire Universal Pharma dont le siège se trouve à PARIS –
                72, Impasse des Carrières, 75016 Paris– comprend, outre le siège, plusieurs laboratoires de recherche à Vitry/Seine et dix établissements qui fabriquent des médicaments.
                Universal Pharma est née de la fusion de plusieurs firmes américaines (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et européennes
                En 2012, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur industriel. L’entité Universal Pharma Europe a établi son siège administratif à Paris.
                La France a été choisie comme témoin pour l’amélioration du suivi de l’activité de visite.

                Dans l’industrie pharmaceutique, les forces de vente représentent la première ligne de contact avec vos prescripteurs : c’est le fer de lance de votre stratégie et de votre communication.<br />

                Universal Pharma souhaite:<br />

                – renforcer la publicité de ses produits pharmaceutiques à travers des consultants médicaux. <br />

                – développer une équipe de visiteurs médicaux ville, hôpital ou pharmacie.</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h3>Quelques chiffres</h3>
            <p>8 000 comptes mails<br />

                3000 postes informatiques bureautiques ou recherche, 50 – 100 To données sauvegardées

                Une dizaine d’applications de gestion « lourdes » et une vingtaine plus légères

                Tous les domaines métiers du laboratoire pharmaceutiques sont concernés :</p>
        </div>   

    </div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h3>Domaine d'étude</h3>
            <p>Universal Pharma c’est 1200 consultants (visiteurs médicales).
                La force commerciale d'un laboratoire pharmaceutique est assurée par un travail de conseil et d'information auprès des prescripteurs. Les visiteurs médicaux (ou délégués) démarchent les médecins, pharmaciens, infirmières et autres métiers de santé susceptibles de prescrire aux patients les produits du laboratoire.
                L'entreprise souhaite porter une attention nouvelle à sa force commerciale dans un double objectif : obtenir une vision plus régulière et efficace de l'activité menée sur le terrain auprès des praticiens, mais aussi redonner confiance aux équipes malmenées par les fusions récentes</p>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UniversalBundle:Default:labo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  51 => 20,  47 => 18,  28 => 3,);
    }
}
