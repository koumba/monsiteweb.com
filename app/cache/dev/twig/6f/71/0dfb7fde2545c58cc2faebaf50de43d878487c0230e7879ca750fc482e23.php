<?php

/* UniversalBundle:Default:accueil.html.twig */
class __TwigTemplate_6f710dfb7fde2545c58cc2faebaf50de43d878487c0230e7879ca750fc482e23 extends Twig_Template
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "   


    



    <div class=\"row\">
        <div class=\" col-md-8\">
            <p>Universal Pharma est née de la fusion de plusieurs firmes américaines (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et européennes
                En 2012, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur industriel. L’entité Universal Pharma Europe a établi son siège administratif à Paris.
                La France a été choisie comme témoin pour l’amélioration du suivi de l’activité de visite.

            </p>
        </div>

        <div class=\"col-md-4 \">
            <h3>Universal Pharma</h3>  
            <p>72 Impasse des Carrières, 75016 Paris</p>
            <p>Tel: +33(0) 1 53 01 93 40</p>
            <p>Fax: +33(0) 1 53 01 93 42</p>
            <p>Email: info@universalpharma.com</p>
        </div>
    </div>
                









";
    }

    public function getTemplateName()
    {
        return "UniversalBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,);
    }
}
