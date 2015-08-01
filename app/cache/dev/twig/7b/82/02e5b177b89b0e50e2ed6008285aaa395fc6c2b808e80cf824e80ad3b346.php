<?php

/* UniversalBundle:Default:plan.html.twig */
class __TwigTemplate_7b8202e5b177b89b0e50e2ed6008285aaa395fc6c2b808e80cf824e80ad3b346 extends Twig_Template
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
    <div class=\"plan\">
        <h3>Plan d'accès</h3>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2652.427927370483!2d2.281392041069353!3d48.85834475027837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66ffe17da9c31%3A0x1941244e6cd6d00c!2s72+Impasse+des+Carri%C3%A8res%2C+75016+Paris!5e0!3m2!1sfr!2sfr!4v1436625673138\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0\"  allowfullscreen></iframe>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UniversalBundle:Default:plan.html.twig";
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
