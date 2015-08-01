<?php

/* UniversalBundle:Default:contact.html.twig */
class __TwigTemplate_550ee5b60959270a299e5a4fa6b7c697cde4db99a8cea8263d91db6ec847b5d0 extends Twig_Template
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
    <div class=\"contact\">
        <h3>Nous contacter</h3>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">  
            <div class=\"formulaire\">
                <form action=\"\" method=\"post\">
                    <label>Nom:</label><br />
                    <input name=\"Nom\" type=\"text\" value=\"\" ><br />
                    <label>Prénom:</label><br />
                    <input name=\"prenom\" type=\"text\" value=\"\" ><br />
                    <label>Société:</label><br />
                    <input name=\"société\" type=\"text\" value=\"\"><br />
                    <label>Adresse:</label><br />
                    <input name=\"Adresse\" type=\"text\" value=\"\"><br />
                    <label>Code Postal:</label><br />
                    <input name=\"Code Postal\" type=\"text\" value=\"\"><br />
                    <label>Ville: </label><br />
                    <input name=\"Ville\" type=\"text\" value=\"\"><br />
                    <label>Pays:  </label><br />
                    <input name=\"Pays\" type=\"text\" value=\"\"><br />
                    <label>Email: </label><br />
                    <input name=\"Email\" type=\"text\" value=\"\"><br />
                    <label>Tel:</label><br />
                    <input name=\"Tel\" type=\"text\" value=\"\"><br />  
                </form>


                <div class=\"message\">
                    <h3>Votre Message:</h3><br />
                    <textarea id=\"message\" name=\"message\"></textarea>

                </div>
                <div id=\"submit\">
                    <input type=\"submit\" value=\"Envoyer votre message\"><br />
                </div>
            </div>

        </div>

        <div class=\"col-md-6\">
            <div style=\"color:#99A79A;\">
                <h4><srtong>Universal Pharma</srtong></h4>  
            </div>
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
        return "UniversalBundle:Default:contact.html.twig";
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
