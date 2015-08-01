<?php

/* UniversalBundle:Default:actualite.html.twig */
class __TwigTemplate_cbca61c712132141ba22835d65e2f3869c9a1b141fe4c630ee526e66815ed92e extends Twig_Template
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
    <div class=\"actualite\">
      <h3>Actualités</h3>
    <h5>New ! Universal pharma INFO</h5>  
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-4\">  


            <p>Ceci est le premier magazine destiné à toutes celles et tous ceux
                fréquentant nos pharmacies.
                Au cours des 30 dernières années, Universal Pharma a constitué
                un réseau d’une vingtaine de pharmacies situées dans l’axe
                Mons ? Charleroi ? Bruxelles (www.universalpharma.be).
                Toutes ces pharmacies ont été immédiatement transformées et
                sont maintenues dans un état de modernité et de netteté nécessaire
                à un service optimal en pharmacie.
                De plus, nous nous efforçons de donner à nos collaborateurs,
                pharmaciens et assistants, une formation continue permettant un
                conseil professionnel en pharmacie. </p>

        </div>
        <div class=\"col-md-4\"> 
            <p>Cette année, la pharmacie Timmermans d’Etterbeek (coin de
                l’Avenue d’Auderghem et de l’Avenue Général Leman) a rejoint notre
                groupe et, après les transformations en cours, cette pharmacie sera
                rouverte sous le nom de « La Grande Pharmacie d’Etterbeek ».
                Depuis le 1er avril, les habitants de Mons Sud bénéficient à la
                barrière d’Hyon d’une pharmacie Universal Pharma
                (Pharmacie Simon).
                Dans toutes ces pharmacies, vous bénéficiez d’une carte de fidélité
                vous octroyant des remises sur vos achats et notamment sur les
                produits cosmétiques dont les marques Nuxe, Caudalie,
                Roger & Gallet, introduites cette année.</p>
        </div>
        <div class=\"col-md-4\"> 
            De nouvelles marques, leaders en pharmacie dans leur pays
            (Italie et U.S.A.), devraient bientôt prendre place dans les officines
            dans des « corners » spécialisés.
            Comme vous le voyez, la recherche de la nouveauté et du service,
            partagée par tous nos collaborateurs, pharmaciens et assistants,
            est une priorité chez Universal Pharma.
            Bienvenue à tous et à bientôt !</p>





        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "UniversalBundle:Default:actualite.html.twig";
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
