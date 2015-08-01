<?php

/* UniversalBundle:Default:carriere.html.twig */
class __TwigTemplate_37553d674788de72c51a628e32b9f73ec0f08089a9e49d9a6ba1972e47ce7dfb extends Twig_Template
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
    <div class=\"carriere\" style=\"color:#99A79A;\">
        <h3>Offres d'emploi </h3>
    </div>

    <div class=\"row\">

        <div class=\"col-md-4\">
            <p>Poste vacants en pharmacie:</p>
            <ul>
                <li>Pharmacien(ne) Titulaire à Bruxelles</li>
                <li>Assistant(e) à Paris</li>
                <li>Assistant(e) à Vincenne</li>
                <li>Assistant(e) itinérant(e) à Toulouse</li>
            </ul>
            <p>Pour toute candidature veuillez envoyé votre cv et lettre de motivation à l'adresse email:
            <div style=\"color:#8B0000;\"<strong>info@universalpharma.com</strong></p>
            </div>
        </div>

        <div class=\"col-md-4\">
            ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f3abc3c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f3abc3c_0") : $this->env->getExtension('assets')->getAssetUrl("/images/coeur feuille_coeur feuille_1.jpg");
            // line 26
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"coeur feuille\" style=\"width:150px; height: 100px; \"/>
";
        } else {
            // asset "f3abc3c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f3abc3c") : $this->env->getExtension('assets')->getAssetUrl("/images/coeur feuille.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"coeur feuille\" style=\"width:150px; height: 100px; \"/>
";
        }
        unset($context["asset_url"]);
        // line 28
        echo "        </div>

    </div>
    _______________________________________________

    <div class=\"row\">
        <div class=\"col-md-4\">
            <p>Chauffeur indépendant:</p>
            <p>Nous recherchons un chauffeur indépendant avec ou sans voiture pour livraisons de médicaments (pour la région ile de france ) </p>
            <p>Pour toute candidature veuillez envoyé votre cv et lettre de motivation à l'adresse email:
            <div style=\"color:#8B0000;\"<strong>info@universalpharma.com</strong></p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "UniversalBundle:Default:carriere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  57 => 26,  53 => 24,  28 => 3,);
    }
}
