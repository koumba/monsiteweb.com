<?php

/* ::base.html.twig */
class __TwigTemplate_d8f5dd637804e93d8be4105b79b95e8bf84da492cc4012c036ce3c0cae1e3829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'Javascripts' => array($this, 'block_Javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ab3af43_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3af43_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ab3af43_part_1_pages_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "ab3af43"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3af43") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ab3af43.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <style>
        h3{
            color: #99A79A;
        }
        </style>

</head>

<body> 

    <div class=\"container-fluid\">  
        <header>

            <h2>Universal Pharma</h2> 

            ";
        // line 33
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6e27a76_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6e27a76_0") : $this->env->getExtension('assets')->getAssetUrl("/images/logo2_logo2_1.jpg");
            // line 35
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"logo2\" style=\"width:300px; height: 200px;\"/>
            ";
        } else {
            // asset "6e27a76"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6e27a76") : $this->env->getExtension('assets')->getAssetUrl("/images/logo2.jpg");
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"logo2\" style=\"width:300px; height: 200px;\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 37
        echo "
        </header>

        <div class=\"menu\" style=\"height: 100px;padding-top: 25px;\">
            <div class=\"navigation\">
                <ul>
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("universal_homepage");
        echo "\">Accueil</a></li> 
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("universal_labo");
        echo "\">Notre Labo</a></li> 
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("universal_medicaments");
        echo "\">Les Médicaments</a></li>
                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("universal_carriere");
        echo "\">Offres d'emploi</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("universal_nosClients");
        echo "\">Nos Clients</a></li> 
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("universal_plan");
        echo "\">Plan d'accès</a></li> 
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("universal_contact");
        echo "\">Contact</a></li> 
                    <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("universal_intranet");
        echo "\">Intranet</a></li> 
                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("universal_actualite");
        echo "\">Actualités</a></li> 
                </ul>  
            </div>
        </div>
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "

        <footer>
            <div id=\"footer\">


                <p><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("universal_homepage");
        echo "\">Accueil</a></p>
                <p><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("universal_actualite");
        echo "\">Actualités</a></p>
                <p><a href=\"\">Mention Légales</a></p>
                <p><a href=\"\">Plan du Site</a></p>
                <p>Copyright 2015 © - Création DL/ DIANY Koumba </p>


            </div>

        </footer>




        ";
        // line 76
        $this->displayBlock('Javascripts', $context, $blocks);
        // line 77
        echo "    </div> 
</body>
</html>


";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Monsiteweb.com";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 76
    public function block_Javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 76,  205 => 55,  200 => 16,  194 => 5,  185 => 77,  183 => 76,  167 => 63,  163 => 62,  155 => 56,  153 => 55,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  114 => 43,  106 => 37,  92 => 35,  88 => 33,  68 => 17,  66 => 16,  61 => 14,  57 => 13,  53 => 11,  39 => 9,  35 => 8,  29 => 5,  23 => 1,);
    }
}
