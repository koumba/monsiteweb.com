<?php

/* UniversalBundle:Default:clients.html.twig */
class __TwigTemplate_65db5808fb3ab38d76ca1f3704b007c40ba8ec5d2045d42a5d2e67e886701e0d extends Twig_Template
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
    
    <div class=\"clients\">
        <h3><strong>Nos clients:</strong></h3>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-4\">

            <ul>
                <li>Pharmacie Monge: 74 Rue Monge Paris</li>
                <li>Pharmacie Bader</li>
                <li>Grande Pharmacie de la Nation</li>
                <li>Pharmacie Les Champs Elysées</li>
                <li>Grande Pharmacie d'Auteuil</li>
                <li>Pharmacie Européenne</li>
                <li>Pharmacie Homéopathique de l'Europe</li>
                <li>Pharmacie Montreuil</li>
                <li>Pharmacie Val d'europe</li>
                <li>Pharmacie Bercy2</li>
                <li>Pharmacie paris Nord2</li>
                <li>Pharmacie Paris Est</li>


            </ul>


        </div>
        <div class=\"col-md-4\">
            <ul>
                <li>D&A Pharma SAS</li>
                <li>Daiichi Sankyo France SAS</li>
                <li>DB Pharma</li>
                <li>Allergan France</li>
                <li>Alter</li>
                <li>Allergan France</li>
                <li>Abbott Products SAS</li>
                <li>AbbVie Ltd</li>
                <li>ABC Pharmacare</li>
                <li>ctavis France Aerocid</li>
                <li>Doliage</li>
                <li>Lazerty</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <ul>
                <li> Pierre Fabre</li>
                <li> Msd en France</li>
                <li> Servier</li>
                <li>Pfizer France</li>
                <li> Amgen</li>
                <li>H2 Pharma</li>
                <li>HAC Pharma</li>
                <li>Hepatoum</li>
                <li>Madaus</li>
                <li>Merck Médication Familiale</li>
                <li>Mundipharma</li>
                <li>Mylan</li>

            </ul>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "UniversalBundle:Default:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,);
    }
}
