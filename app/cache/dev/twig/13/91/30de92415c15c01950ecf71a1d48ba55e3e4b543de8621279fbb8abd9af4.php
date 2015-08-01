<?php

/* UniversalBundle:Default:medicaments.html.twig */
class __TwigTemplate_139130de92415c15c01950ecf71a1d48ba55e3e4b543de8621279fbb8abd9af4 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo "  
    <div class=\"row\">
        <div class=\"col-md-3\">
          ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5c1f0e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5c1f0e_0") : $this->env->getExtension('assets')->getAssetUrl("/images/actifed_actifed_1.jpg");
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "a5c1f0e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5c1f0e") : $this->env->getExtension('assets')->getAssetUrl("/images/actifed.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 9
        echo "            <p><u>Imodium</u> lingual diarrhée aiguë est un médicament très efficace contre la diarrhée soudaine (aiguë), quelle qu’en soit la cause. Il freine la motilité intestinale par effet direct sur la musculature du tube digestif.</p>

        </div>
        <div class=\"col-md-3\">
           ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b59e4fb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b59e4fb_0") : $this->env->getExtension('assets')->getAssetUrl("/images/nurofen_nurofen_1.jpg");
            // line 15
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"nurofen\"/>
";
        } else {
            // asset "b59e4fb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b59e4fb") : $this->env->getExtension('assets')->getAssetUrl("/images/nurofen.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"nurofen\"/>
";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
            <p><u>NurofenFlash</u> 400mg est indiqué chez l’adulte et l’enfant de plus de 30kg (environ 11-12ans) dans le traitement de courte durée de la fièvre et/ou des douleurs telles que :
            Maux de tête,Douleurs dentaires,Règles douloureuses,Courbatures,Etats grippaux.
            </p>

        </div>
        <div class=\"col-md-3\">
            ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "37c10f4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_37c10f4_0") : $this->env->getExtension('assets')->getAssetUrl("/images/doliprane_doliprane_1.jpg");
            // line 26
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"doliprane\"/>
";
        } else {
            // asset "37c10f4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_37c10f4") : $this->env->getExtension('assets')->getAssetUrl("/images/doliprane.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"doliprane\"/>
";
        }
        unset($context["asset_url"]);
        // line 28
        echo "            <p><u>Doliprane</u> 1000mg est indiqué en cas de douleur et/ou fièvre telles que maux de tête, états grippaux, douleurs dentaires, courbatures, règles douloureuses.
            Il peut également être prescrit par votre médecin dans les douleurs de l’arthrose.</p>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 32
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5dd062e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5dd062e_0") : $this->env->getExtension('assets')->getAssetUrl("/images/generique eg_generique eg_1.jpg");
            // line 34
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"generique eg\"/>
";
        } else {
            // asset "5dd062e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5dd062e") : $this->env->getExtension('assets')->getAssetUrl("/images/generique eg.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"generique eg\"/>
";
        }
        unset($context["asset_url"]);
        // line 36
        echo "            <p><u>Générique</u> EG est un générique de CLAMOXYL.<br />
            Il est utilisé dans le traitement de diverses maladies infectieuses, notamment des poumons, des bronches, du nez, de la gorge ou des oreilles, du sang, de l'appareil digestif ou urinaire, des voies génitales, des gencives et des dents.
            </p>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f5e0b2a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5e0b2a_0") : $this->env->getExtension('assets')->getAssetUrl("/images/ipraalox_ipraalox_1.jpg");
            // line 46
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"ipraalox\"/>
";
        } else {
            // asset "f5e0b2a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5e0b2a") : $this->env->getExtension('assets')->getAssetUrl("/images/ipraalox.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"ipraalox\"/>
";
        }
        unset($context["asset_url"]);
        // line 48
        echo "            <p><u>Ipraalox</u> est utilisé dans le traitement de courte durée des symptômes du reflux gastro-œsophagien (brûlures d'estomac, régurgitations...).</p>

        </div>
        <div class=\"col-md-3\">
             ";
        // line 52
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2ba92de_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2ba92de_0") : $this->env->getExtension('assets')->getAssetUrl("/images/spasmine_spasmine_1.jpg");
            // line 54
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"spasmine\"/>
";
        } else {
            // asset "2ba92de"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2ba92de") : $this->env->getExtension('assets')->getAssetUrl("/images/spasmine.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"spasmine\"/>
";
        }
        unset($context["asset_url"]);
        // line 56
        echo "            <p><u>Spasmine</u> Traditionnellement utilisé pour réduire la nervosité des adultes et des enfants, notamment en cas de troubles du sommeil.</p>
        </div>
        <div class=\"col-md-3\">
            ";
        // line 59
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5c1f0e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5c1f0e_0") : $this->env->getExtension('assets')->getAssetUrl("/images/actifed_actifed_1.jpg");
            // line 61
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"actifed\"/>
";
        } else {
            // asset "a5c1f0e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a5c1f0e") : $this->env->getExtension('assets')->getAssetUrl("/images/actifed.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"actifed\"/>
";
        }
        unset($context["asset_url"]);
        // line 63
        echo "            <p><u>Actifed</u> Une action complète pour traiter tous les symptômes du rhume en un seul traitement.
            Un comprimé d’ACTIFED® Rhume associe:  

            le paracétamol pour une double action à la fois antalgique pour soulager les maux de tête et antipyrétique pour lutter contre la fièvre,
            la triprolidine, un antihistaminique H1 pour réduire les sécrétions nasales (nez qui coule),
            et la pseudoéphédrine , un vasoconstricteur pour décongestionner le nez.</p>
        </div>
        <div class=\"col-md-3\">
             ";
        // line 71
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "de71ac9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de71ac9_0") : $this->env->getExtension('assets')->getAssetUrl("/images/strpsils_strpsils_1.jpg");
            // line 73
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"strpsils\"/>
";
        } else {
            // asset "de71ac9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de71ac9") : $this->env->getExtension('assets')->getAssetUrl("/images/strpsils.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"strpsils\"/>
";
        }
        unset($context["asset_url"]);
        // line 75
        echo "            <p><u>Strepsils</u> soulage rapidement les maux de gorge peu intenses et sans fièvre, les aphtes et les petites plaies de la bouche.</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 80
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0bb8851_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0bb8851_0") : $this->env->getExtension('assets')->getAssetUrl("/images/microlax_microlax_1.jpg");
            // line 82
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"microlax\"/>
";
        } else {
            // asset "0bb8851"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0bb8851") : $this->env->getExtension('assets')->getAssetUrl("/images/microlax.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"microlax\"/>
";
        }
        unset($context["asset_url"]);
        // line 84
        echo "            <p><u>Microlax</u> est un laxatif administré par voie rectale. Il ramollit les selles et déclenche une contraction du rectum qui permet leur évacuation.</p>

        </div>
        <div class=\"col-md-3\">
            ";
        // line 88
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "254580c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_254580c_0") : $this->env->getExtension('assets')->getAssetUrl("/images/camilia_camilia_1.jpg");
            // line 90
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"camilia\"/>
";
        } else {
            // asset "254580c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_254580c") : $this->env->getExtension('assets')->getAssetUrl("/images/camilia.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"camilia\"/>
";
        }
        unset($context["asset_url"]);
        // line 92
        echo "            <p><u>Camilia</u>  soulage la poussée dentaire,de votre bébé.</p>
        </div>
        <div class=\"col-md-3\">
           ";
        // line 95
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "127970b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_127970b_0") : $this->env->getExtension('assets')->getAssetUrl("/images/doliprane bb_doliprane bb_1.jpg");
            // line 97
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"doliprane bb\"/>
";
        } else {
            // asset "127970b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_127970b") : $this->env->getExtension('assets')->getAssetUrl("/images/doliprane bb.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"doliprane bb\"/>
";
        }
        unset($context["asset_url"]);
        // line 99
        echo "            <p><u>Doliprane</u> est indiqué en cas de douleur et/ou fièvre telles que maux de tête, états grippaux, douleurs dentaires, courbatures.
            Cette présentation est réservée à l'enfant de 3 à 26 kg (soit environ de la naissance à 9 ans)</p>
        </div>
        <div class=\"col-md-3\">
             ";
        // line 103
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4ef1d1e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ef1d1e_0") : $this->env->getExtension('assets')->getAssetUrl("/images/prorhinel_prorhinel_1.jpg");
            // line 105
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"prorhinel\"/>
";
        } else {
            // asset "4ef1d1e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4ef1d1e") : $this->env->getExtension('assets')->getAssetUrl("/images/prorhinel.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"prorhinel\"/>
";
        }
        unset($context["asset_url"]);
        // line 107
        echo "            <p><u>Prorhinel</u> aide à soulager votre bébé et libérer son nez.</p>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "UniversalBundle:Default:medicaments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 107,  313 => 105,  309 => 103,  303 => 99,  289 => 97,  285 => 95,  280 => 92,  266 => 90,  262 => 88,  256 => 84,  242 => 82,  238 => 80,  231 => 75,  217 => 73,  213 => 71,  203 => 63,  189 => 61,  185 => 59,  180 => 56,  166 => 54,  162 => 52,  156 => 48,  142 => 46,  138 => 44,  128 => 36,  114 => 34,  110 => 32,  104 => 28,  90 => 26,  86 => 24,  77 => 17,  63 => 15,  59 => 13,  53 => 9,  39 => 7,  35 => 5,  28 => 2,);
    }
}
